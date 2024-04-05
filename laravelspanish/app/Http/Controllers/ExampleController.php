<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index(){
        $msg = __('auth.failed');
        return view('example', compact('msg'));
    }
}
