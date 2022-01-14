<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function Orders(){
        return view('pages.orders');
    }

    
        public function orderadd(){
            return view('pages.add_order');
        }
    
    
}
