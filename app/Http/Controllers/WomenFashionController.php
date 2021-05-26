<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WomenFashionController extends Controller
{
    public function index(){
        return view('WomenFashion.index');
    }
}
