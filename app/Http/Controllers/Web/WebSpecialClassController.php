<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClassModel;
use App\Models\BasicClassPriceList;
use Auth;

class WebSpecialClassController extends Controller
{
    public function index(){
        $data = ClassModel::with('class_teacher_relation')->where('type', 1)->get();
        return view('SpecialClass.index', compact('data'));
    }
}
