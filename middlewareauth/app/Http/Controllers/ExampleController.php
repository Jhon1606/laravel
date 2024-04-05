<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function __construct()
    {
        $this->middleware('example');
    }
    public function index(){
        return response()->json('Bienvenido al index', 200);
    }
    public function noAccess(){
        return response()->json('No Accesss', 200);
    }
}
