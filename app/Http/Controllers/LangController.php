<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function changelang($lang){
        if($lang !=null){
            session()->put('lang',$lang);//memory of the browser remmember the last language you used 
            App::setLocale($lang);
        }
        return redirect()->back();
    }
}
