<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;
use Validator;
use Session;

class AdminHomeController extends Controller
{
    public function index(){
        return view('Admin.index');
    }

    public function validateSerialName(Request $req){
        
        $validator = Validator::make($req->all(),[
            'series_name' =>'required|unique:series|max:15'
        ]);
        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }
        else{
            return response()->json(['status'=>1]);
        }

    }

    public function addSerialName(Request $req){
        $msg = Series::addSeries($req);
        if($msg == "success"){
            Session::flash('added', 'Serial name added');
            return back();
        }
    }
}
