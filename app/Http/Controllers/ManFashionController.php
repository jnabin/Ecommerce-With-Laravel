<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManFashionController extends Controller
{
    public function index(){
        return view('ManFashion.index');
    }
}
