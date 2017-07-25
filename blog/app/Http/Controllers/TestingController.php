<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    //


    public function hello(){
        return view("admin/status/status");
    }
}
