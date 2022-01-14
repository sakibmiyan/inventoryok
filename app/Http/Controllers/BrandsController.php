<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandsController extends Controller
{
    public function Brands(){
        $brandlist= brand::latest()->paginate(5);
        return view('pages.brands', compact('brandlist'));
    }

    public function ManageBrandList()
    {
       
        return view('pages.brands');
    }
   
   
}
