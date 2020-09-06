<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        $user = array("ayesha", "BSIT", "Roll Num", "123456789");
        return view('demo', compact('user'));
    }
}
