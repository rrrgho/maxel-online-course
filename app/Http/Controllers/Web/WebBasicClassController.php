<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClassModel;
use App\Models\BasicClassPriceList;


class WebBasicClassController extends Controller
{
    public function index(){
        $pricelist = BasicClassPriceList::orderBy('id', 'ASC')->get();
        $data = ClassModel::with('class_teacher_relation')->where('type', 2)->get();
        return view('BasicClass.index', compact('data', 'pricelist'));
    }
}
