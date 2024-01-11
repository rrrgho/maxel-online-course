<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClassModel;
use App\Models\ClassUser;
use App\Models\ClassLeasson;
use App\Models\BasicClassPriceList;
use App\Models\BasicClassUser;
use App\Models\LeassonComplete;
use Illuminate\Support\Str;
use Auth;
use Carbon\Carbon;

class ClassController extends Controller
{
    public function dashboard()
    {
        return view('User.Dashboard.index');
    }

    public function basicClass()
    {
        $subscription = BasicClassUser::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'DESC')
            ->first();
        if ($subscription) {
            if ($subscription->expired_date < Carbon::now()) {
                $subscription->delete();
            }
        }
        $pricelist = BasicClassPriceList::orderBy('id', 'ASC')->get();
        $data = ClassModel::where('type', 2)->get();
        return view('User.BasicClass.index', compact('data', 'pricelist'));
    }

    public function specialClass()
    {
        $data = ClassModel::where('type', 1)->paginate(10);
        return view('User.SpecialClass.index', ['data' => $data]);
    }

    public function classDetail($id)
    {
        $pricelist = BasicClassPriceList::orderBy('id', 'ASC')->get();
        $data = ClassModel::with('class_leassons_relation')->find($id);
        return view('User.ClassDetail.index', compact('data', 'pricelist'));
    }

    public function classLeassonList($class_id, $leasson_id)
    {
        $admin = Auth::guard('teachers')->check();
        $class = ClassModel::with('class_leassons_relation')->find($class_id);
        if (!$admin) {
            if ($class->type === 1) {
                if ($class->your_class !== 'APPROVED') {
                    return redirect()
                        ->back()
                        ->with('error', 'You have no access to this class, Buy now !');
                }
            } else {
                if (!Auth::user()->basic_user) {
                    return redirect()
                        ->back()
                        ->with('error', 'You have no access to this basic class, Buy now !');
                }
            }
        }
        $leasson = ClassLeasson::find($leasson_id);
        $leasson_completed = LeassonComplete::where([['class_id', $class_id], ['user_id', Auth::user()->id]])->count();
        return view('User.BasicClassLeassonList.index', ['class' => $class, 'leasson' => $leasson, 'leasson_completed' => $leasson_completed, 'admin' => $admin]);
    }

    public function basicClassLeassonComplete(Request $request)
    {
        $leasson = ClassLeasson::find($request->leasson_id);
        $lastIndex = LeassonComplete::all()->last()->id ?? 0;
        LeassonComplete::create([
            'id' => $lastIndex + 1,
            'class_id' => $leasson->class_id,
            'leasson_id' => $leasson->id,
            'user_id' => Auth::user()->id,
        ]);

        return redirect(url('/user/leasson/' . $leasson->class_id . '/' . $leasson->id));
    }

    public function basicClassSubscribe(Request $request)
    {
        if ($request->file()) {
            $file = $request->file('payment_image');
            $random = Str::random(40) . '|' . Carbon::now()->toDateString() . '|' . $file->getClientOriginalName();
            $file->move(public_path('assets/uploaded/images/payment/'), $random);

            BasicClassUser::create([
                'user_id' => Auth::user()->id,
                'status' => 'WAITING',
                'duration' => $request->duration,
                'name' => $request->name,
                'email' => $request->email,
                'description' => $request->description,
                'payment_image' => $random,
            ]);

            return redirect(route('user-basic-class'))->with('success', 'Succees subscribe basic class, admin will contact you to activate your subscribtion !');
        }
    }

    public function specialClassSubscribe(Request $request)
    {
        if ($request->file()) {
            $file = $request->file('payment_image');
            $random = Str::random(40) . '|' . Carbon::now()->toDateString() . '|' . $file->getClientOriginalName();
            $file->move(public_path('assets/uploaded/images/payment/'), $random);

            ClassUser::create([
                'class_id' => $request->class_id,
                'user_id' => Auth::user()->id,
                'payment_image' => $random,
                'status' => 'WAITING',
            ]);

            return redirect(route('user-special-class'))->with('success', 'Succees subscribe special class, admin will contact you to activate your subscribtion !');
        }
    }

    public function yourPurchase()
    {
        $data = BasicClassUser::where('user_id', Auth::user()->id)->get();
        $expired_basic = BasicClassUser::where('user_id', Auth::user()->id)->onlyTrashed()->get();
        return view('User.YourPurchase.index', compact('data', 'expired_basic'));
    }
}
