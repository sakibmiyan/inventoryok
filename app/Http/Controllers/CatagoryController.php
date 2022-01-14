<?php

namespace App\Http\Controllers;
use App\Models\Catagoryy;
use Illuminate\Http\Request;
use App\Models\Catagory;



class CatagoryController extends Controller
{
    public function Catagory(){
        return view('pages.catagory');
    }
    public function CatagoryNew(){
        return view('pages.catagory_form');
    }
    public function catagoryform(){
        return view('pages.catagory_form');
    }
    
    public function Catagoryy(Request $request){
      
        Catagories::create([
            'catagoryname'=>$request->catagoryname,
            'catagorystatus'=>$request->catagorystatus,
        ]);
        return redirect()->back();
    }
}
