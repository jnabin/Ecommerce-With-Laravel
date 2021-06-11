<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainCategory;

class LifeStyleController extends Controller
{
    public function index(){
        $category = MainCategory::find(3);
        return view('LifeStyle.index', compact('category'));
    }
}
