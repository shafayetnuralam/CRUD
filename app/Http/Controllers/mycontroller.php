<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;


class mycontroller extends Controller
{
    //
    function insert(Request $req)
    {
            $PName = $req->get('PName');
            $PPrice = $req->get('PPrice');
            $PImage = $req->file('PImage')->getClientOriginalName();
            //move uploaded file
            $req->PImage->move(public_path('images'),$PImage);
            // return $req->input();
            $product = new product();
            $product->PName = $PName;
            $product->PPrice = $PPrice;
            $product->PImage = $PImage;
            $product->save();

            return redirect('/');
    }

    function readdata(){
        $pdata = product::all();
        return view('insertRead',['data'=>$pdata]);
    }
}
