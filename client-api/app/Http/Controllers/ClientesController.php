<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Http;

class ClientesController extends Controller
{
    public function index(){
        // ? Utilizamos el método env para acceder a la variable que definimos en el archivo .env que obtiene la url
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        // Con el método Http::get obtenemos la url que va a consumir,
        // para traer los datos de clientes (consumir api)
        $response = Http::get($url.'/clients');
        // Convertimos el response en formato Json y lo enviamos a la vista mediante compact
        $data = $response->json();
        return view('index', compact('data'));
    }

    public function create(){
        return view('create');
    }
    
    public function store(Request $request){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::post($url.'/clients', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return redirect()->route('clientes.index');
    }

    public function edit($cliente){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/clients/'.$cliente);
        // Esta petición http devuelve un objeto (conjunto de arreglos), no devuelve un array, 
        // por lo tanto se decodifica con json_decode
        // El objeto es el siguiente:
        // {
        //     "message": "Detalles del cliente",
        //     "client": {
        //         "id": 1,
        //         "name": "Jhon",
        //         "email": "jhon123@gmail.com",
        //         "phone": "3008745986",
        //         "address": "calle 45 maria auxiliadora",
        //         "created_at": null,
        //         "updated_at": null,
        //     },
        // } 
        $data = json_decode($response);
        $cliente = $data->client;
        // Accedemos a el client del objeto data para mostrar los clientes en la vista, Ej: $cliente->id
        return view('edit', compact('cliente'));
    }

    public function update(Request $request){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::put($url.'/clients/'.$request->id, [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return redirect()->route('clientes.index');
    }

    public function destroy($cliente){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url.'/clients/'.$cliente);
        return redirect()->route('clientes.index');
    }   
}
