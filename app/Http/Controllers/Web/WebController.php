<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BasicClassPriceList;
use App\Models\ClassModel;

class WebController extends Controller
{
    public function index(){
        $data = ClassModel::where('type', 2)->paginate(10);
        $pricelist = BasicClassPriceList::orderBy('id', 'ASC')->get();
        return view('Home.index', compact('pricelist', 'data'));
    }

    public function classDetail($id){
        $data = ClassModel::find($id);
        $pricelist = BasicClassPriceList::orderBy('id', 'ASC')->get();
        return view('ClassDetail.index', compact('data', 'pricelist'));
    }
}
