<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    // Metodo get
    public function index()
    {
        $clients = Client::all();
        return response()->json($clients);
    }

    // Metodo get
    public function create(Request $request)
    {
        
    }

    // Metodo post
    public function store(Request $request)
    {
        // Otra manera de crear un cliente
        // $client = Client::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->name,
        //     'address' => $request->name,          
        // ]);
        // $client->save();

        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->save();
        $data = [
            'message' => 'Cliente creado con éxito',
            'client' => $client
        ];
        return response()->json($data);
    }

    // Metodo get
    public function show(Client $client)
    {
        
        return response()->json($client);
    }

    //    Metodo get
    public function edit(Client $client)
    {
        //
    }

    // Metodo put
    public function update(Request $request, Client $client)
    {
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->save();
        $data = [
            'message' => 'Cliente actualizado con éxito',
            'client' => $client
        ];

        return response()->json($data);
    }

    // Metodo delete
    public function destroy(Client $client)
    {
        $client->delete();
        $data = [
            'message' => 'Cliente eliminado con éxito',
            'client' => $client
        ];
        return response()->json($data);
    }
}
