<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request){

        // Para validar que lso campos sean requeridos
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email', // para validar que sea tipo email
            'mensaje' => 'required',
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('barrosjhon936@gmail.com')->send($correo);
        return redirect()->route('contactanos.index')->with('info','Mensaje enviado');
    }
}
