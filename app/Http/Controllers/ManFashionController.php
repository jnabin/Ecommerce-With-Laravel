<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainCategory;

class ManFashionController extends Controller
{
    public function index(){
        $category = MainCategory::find(1);
        return view('ManFashion.index', compact('category'));
    }
}
