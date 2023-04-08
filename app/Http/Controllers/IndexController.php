<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return inertia('Index/Index',['messageFrom' => 'Hello From Gautam']
    ); 
    }

    public function show(){
      
        return inertia('Index/Show');
    }
}
