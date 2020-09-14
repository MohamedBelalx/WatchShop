<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $newArrival = DB::table('product')->orderBy('id','desc')->limit(3)->get();
        $sample = DB::table('product')->limit(6)->get();
        return view('index')->with('new',$newArrival)->with('sample',$sample);
    }
}
