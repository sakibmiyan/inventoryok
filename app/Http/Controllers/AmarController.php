<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmarController extends Controller
{
    public function index(){

       return view('pages.amar');
    }

    public function Brands(){
        $brandlistt= brand::all();
        return view('amar', compact('brandlist'));
    }

}
