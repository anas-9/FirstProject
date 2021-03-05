<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $hello='Master laravel';

         return view('products.home',compact('hello'));

    }



    public function showID($id)
    {
           return $id;
    }


    public function showName($name)
    {
     $data=[
         'product1'=>'Samsung',
         'product2'=>'Iphone'
     ];

     return view('products.home',[
         'products'=>$data[$name] ?? 'Product ' .$name.' is not exists'
     ]);

    }
    function addProduct(Request $request)
    {
        $product=new Product();
        $product->name=$request->name;
        $result= $product->save();
        if($result)
        {
            return ['Result'=>'Your data has been saved'];
        }
        else {
            return ['Result'=>'Something went wrong'];


        }
    }


}
