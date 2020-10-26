<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class MyController extends Controller
{
    //
    public function HelloWorld(){
        echo "Hello World";
    }

    public function Hello($ten){
        echo "Hello, ".$ten;
        return redirect()->route('MyRoute2');
    }

    public function GetURL(Request $request){
        // return $request->path();

        // return $request->url();

        // if ($request->isMethod('GET')){
        //     echo "Day la phuong thuc get";
        // }
        // else{
        //     echo "Day khong la phuong thuc get";
        // }

        if ($request->is('My*')){
            echo "Co";
        }
        else{
            echo "Khong";
        }
    }
}
