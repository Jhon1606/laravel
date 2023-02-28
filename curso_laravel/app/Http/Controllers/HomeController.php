<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){ //Cuando solo existe una función se llama __invoke, si son varias ya no se puede llamar invoke
        return view('home');
    }
}
