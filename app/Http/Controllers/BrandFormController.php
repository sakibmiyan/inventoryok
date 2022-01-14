<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandFormController extends Controller
{
    public function BrandFormNew(){
        return view('pages.brand_form');

    }

    

    public function Brands(Request $request){
        // dd($request->all());
        Brand::create([
            'brandname'=>$request->brandname,
            'brandstatus'=>$request->brandstatus,
        ]);
        return redirect()->back();
    }
  
    // public function ManageBrandList()
    // {
    //     $brandlist= brand::all();
    //   //  dd($brandlist);
    //     return view('pages.brand.ManageBrandList', compact('brandlist'));
    // }

   


    
}
