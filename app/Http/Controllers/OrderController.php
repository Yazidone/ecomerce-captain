<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        return view('order.index');
    }

    public function store(Request $request) {
        $name = $request->name;
        $image = $request->image;
        $description= $request->description;
        $price = $request->price;
        

        // validate
        $request->validate([
            'name'=>'required|string',
            'image'=>'required|string',
            'description'=>'required',
            'price'=>'required',""

        ]);
        //create 
        Order::create([
            'name'=>$name,
            'image'=>$image,
            'description'=>$description,
            'price'=>$price,
        ]);
        //redirect
        return redirect('/order');

    }

    public function show() {
        return view('order.show');
    }
}
