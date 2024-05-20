<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UsersController;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        return view('users.index');
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
        Users::create([
            'name'=>$name,
            'image'=>$image,
            'description'=>$description,
            'price'=>$price,
        ]);
        //redirect
        return redirect('/users');

}}
