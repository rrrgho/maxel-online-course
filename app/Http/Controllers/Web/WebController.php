<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BasicClassPriceList;
use App\Models\ClassModel;

class WebController extends Controller
{
    public function index(){
        $data = ClassModel::where('type', 2)->get();
        $pricelist = BasicClassPriceList::all();
        return view('Home.index', compact('pricelist', 'data'));
    }
}
