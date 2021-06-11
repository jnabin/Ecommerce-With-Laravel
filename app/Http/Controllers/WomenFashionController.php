<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainCategory;

class WomenFashionController extends Controller
{
    public function index(){
        $category = MainCategory::find(2);
        return view('WomenFashion.index', compact('category'));
    }
}
