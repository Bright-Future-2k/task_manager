<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index(){
        return view('index');
    }
    public function create (){
        return '<h1> create me!</h1>';
    }
    public function store (Request $request){
        $name = $request->your_name;

        return view('output_restore',compact('name'));
    }
    public function restore (){
        return view('restore');
    }
}
