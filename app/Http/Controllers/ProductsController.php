<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function addproducts(){
        return view('pages.add_products');
    }


    public function Products(){
        {
            // $products= products::all();

            $products= products::latest()->paginate(3);
          //  dd($brandlist);
            return view('pages.products', compact('products'));
        }
    }
    
    

    public function productadd(Request $request){
        // dd($request->all());
        Products::create([
            'Photo'=>$request->photo,
            'Name'=>$request->productname,
            'Rate'=>$request->rate,
            'Quantity'=>$request->quintity,
            'Brand'=>$request->brand,
            'Category'=>$request->category,
            'Status'=>$request->status,
        ]);
        return redirect()->back();
    }

    // public function ProductFormNew(){
    //     return view('pages.products');

    // }


    // public function ManageProductList()
    // {
    //     $productlist= products::all();
    //     //  dd($brandlist);
    //       return view('pages.products', compact('productlist'));
    // }



}
