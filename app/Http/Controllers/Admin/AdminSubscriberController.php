<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClassUser;
use App\Models\BasicClassUser;
use Carbon\Carbon;
use DataTables;

class AdminSubscriberController extends Controller
{

    // Special Class
    public function subscriberSpecialClass(){
        return view('Admin.Subscriber.index');
    }

    public function specialClass(){
        return DataTables::eloquent(ClassUser::with('class_relation', 'user_relation'))
        ->editColumn('created_at', function($data){
            return $data->created_at->diffForHumans();
        })
        ->editColumn('status', function($data){
            if($data->status === 'WAITING')
                return '<span class="badge text-bg-warning">'.$data->status.'</span>';
            if($data->status === 'APPROVED')
                return '<span class="badge text-bg-success">'.$data->status.'</span>';
            if($data->status === 'REJECTED')
                return '<span class="badge text-bg-danger">'.$data->status.'</span>';
        })
        ->addColumn('action', function($data){
            $image = "'".$data->payment_image."'";
            return '<div class="row">
                    <div class="col-3 me-1"><button title="SEE PAYMENT EVIDENCE" onclick="showEvidence('.$image.')" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#evidenceModal"><i class="fa text-white fa-file"></i></button></div>
                    <div class="col-3 me-1"><a href="'.url('admin/subscribers/approval-special-class/'.$data->id.'/APPROVED').'" title="APPROVE" class="btn btn-success"><i class="fa fa-check"></i></a></div>
                    <div class="col-3 "><a href="'.url('admin/subscribers/approval-special-class/'.$data->id.'/REJECTED').'" title="REJECT" class="btn btn-danger"><i class="fa fa-times"></i></a></div>
            </div>';
        })
        ->rawColumns(['status', 'action'])
        ->toJson();
    }

    public function approvalSpecialClass($id, $status){
        $data = ClassUser::find($id);
        $data->status = $status;
        $data->save();
        return redirect(route('admin-subscriber-special-class'))->with('success', 'Success '.$status);
    }


    // Basic Class
    public function subscriberBasicClass(){
        return view('Admin.BasicSubscriber.index');
    }

    public function basicClass(){
        return DataTables::eloquent(BasicClassUser::with('user_relation'))
        ->editColumn('created_at', function($data){
            return $data->created_at->diffForHumans();
        })
        ->editColumn('status', function($data){
            if($data->status === 'WAITING')
                return '<span class="badge text-bg-warning">'.$data->status.'</span>';
            if($data->status === 'APPROVED')
                return '<span class="badge text-bg-success">'.$data->status.'</span>';
            if($data->status === 'REJECTED')
                return '<span class="badge text-bg-danger">'.$data->status.'</span>';
        })
        ->editColumn('duration', function($data){
                return '<span class="badge text-bg-primary">'.$data->duration.' Months'.'</span>';
        })
        ->addColumn('expired_date', function($data){
            if($data->expired_date)
                return Carbon::parse($data->expired_date)->timeZone('Asia/Jakarta')->format('M d, Y');
            return '-';
        })
        ->addColumn('action', function($data){
            $image = "'".$data->payment_image."'";
            return '<div class="row">
                    <div class="col-3 me-1"><button title="SEE PAYMENT EVIDENCE" onclick="showEvidence('.$image.')" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#evidenceModal"><i class="fa text-white fa-file"></i></button></div>
                    <div class="col-3 me-1"><a href="'.url('admin/subscribers/approval-basic-class/'.$data->id.'/APPROVED').'" title="APPROVE" class="btn btn-success"><i class="fa fa-check"></i></a></div>
                    <div class="col-3 "><a href="'.url('admin/subscribers/approval-basic-class/'.$data->id.'/REJECTED').'" title="REJECT" class="btn btn-danger"><i class="fa fa-times"></i></a></div>
            </div>';
        })
        ->rawColumns(['status','action', 'duration'])
        ->toJson();
    }

    public function approvalBasicClass($id, $status){
        return $status;
        $data = BasicClassUser::find($id);
        $start_date = Carbon::now('Asia/Jakarta');
        $expired_date = Carbon::now('Asia/Jakarta')->addMonth(6);
        $data->status = $status;
        if($status === 'APPROVED'){
            $data->start_date = $start_date;
            $data->expired_date = $expired_date;
        }
        $data->save();
        return redirect(route('admin-subscriber-basic-class'))->with('success', 'Success '.$status);
    }
}
