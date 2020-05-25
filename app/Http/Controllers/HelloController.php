<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(){
        $data = [
            'msg' => 'これはbladeを利用したメッセージです。'  
        ];
        return view('hello.index', $data);
    }
}
