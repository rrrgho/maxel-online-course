<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClassCategory;
use App\Models\ClassModel;
use App\Models\BasicClassPriceList;
use Illuminate\Support\Str;
use Auth;
use Carbon\Carbon;
use DataTables;

class AdminController extends Controller
{
    public function dashboard(){
        if(!Auth::guard('teachers')->check())
            return redirect(route('admin-login'));
        return view('Admin.Dashboard.index');
    }

    public function ckEditorUpload(Request $request){
        return $request->all();
    }

    // Classes
    public function classes(){
        $categories = ClassCategory::all();
        return view('Admin.Classes.index', compact('categories'));
    }

    public function basicClassesDatatable(){
        $data = DataTables::eloquent(ClassModel::query()->with('class_category_relation')->where('type', 2))
        ->addColumn('category', function($data){
            return $data->class_category_relation->name;
        })
        ->editColumn('created_at', function($data){
            return $data->created_at->diffForHumans();
        })
        ->toJson();
        return $data;
    }

    public function specialClassesDatatable(){
        $data = DataTables::eloquent(ClassModel::query()->with('class_category_relation')->where('type', 1))
        ->addColumn('category', function($data){
            return $data->class_category_relation->name;
        })
        ->editColumn('created_at', function($data){
            return $data->created_at->diffForHumans();
        })
        ->addColumn('action', function($data){
            return '
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="'.url('admin/class/'.$data->id).'" class="btn btn-success">Detail</a>
                        </div>
                    </div>
            ';
        })
        ->toJson();
        return $data;
    }
    
    public function classDetail(Request $request, $id){
        $categories = ClassCategory::all();
        $data = ClassModel::with('class_teacher_relation')->find($id);
        return view('Admin.ClassDetail.index', compact('data', 'categories'));
    }
    
    public function classAdd(Request $request){
        if($request->file()){
            
            $file = $request->file('image');
            $random = Str::random(40) . '|' . Carbon::now()->toDateString() . '|' . $file->getClientOriginalName();
            $file->move(public_path('assets/uploaded/images/classes/'),  $random);
            ClassModel::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'description' => $request->description,
                'image' => $random,
                'type' => $request->type,
                'category_id' => $request->category_id,
                'teacher_id' => Auth::guard('teachers')->user()->id,
                'price' => $request->price,
            ]);

            return redirect(route('admin-classes'))->with('success', 'Succees add new class !');
        }
        return $request->all();
    }

    // Master
    public function basicClassPriceList(Request $request){
        if($request->isMethod('post')){
            $priceList = BasicClassPriceList::find($request->id);
            $priceList->price  = $request->price;
            $priceList->duration = $request->duration;
            $priceList->save();
            return redirect(route('admin-basic-class-pricelist'))->with('success', 'Success updated Price List');
        }
        $data = BasicClassPriceList::orderBy('id', 'ASC')->get();
        return view('Admin.Master.BasicClassPriceList.index', compact('data'));
    }

    public function classCategory(Request $request){
        if($request->isMethod('post')){
            $lastIndex =  ClassCategory::all()->last()->id ?? 0;
            ClassCategory::create([
                'id' => $lastIndex + 1,
                'name' => $request->name
            ]);
            return redirect(route('admin-master-class-category'));
        }
        return view('Admin.Master.ClassCategory.index');
    }
    public function classCategoryDatatable(){
        $category = DataTables::eloquent(ClassCategory::query())
        ->editColumn('created_at', function($data){
            return $data->created_at->diffForHumans();
        })
        ->toJson();
        return $category;
    }
}
