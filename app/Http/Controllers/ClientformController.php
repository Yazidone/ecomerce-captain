<?php

namespace App\Http\Controllers;
use App\Models\Client;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ClientformController extends Controller
{
    public function indexclient (REQUEST $request){

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;


        Client::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
        return view('/client.client');

    }

    public function clientsignin (REQUEST $request){

        
        $email = $request->email;
        $password = $request->password;

        $cred = ['email'=>$email , 'password'=>$password];


       if (Auth::attempt($cred)) {
        $request->session()->regenerate();
        return view('client.pageuser');
       }
        else {
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ])->onlyInput('email');
       }
       
        

    }
}


