<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    // Método get
    public function index()
    {
        $clients = Client::all();
        // Hacemos un foreach para recorrer todos los clientes y mostrarles el servicio asociado
        $array = [];
        foreach ($clients as $client) {
            $array[] = [
                'id' => $client->id,
                'name' => $client->name,
                'email' => $client->email,
                'phone' => $client->phone,
                'address' => $client->address,
                'service' => $client->services,
            ];
        }
        return response()->json($array);
    }

    // Método get
    public function create(Request $request)
    {
        
    }

    // Método post
    public function store(Request $request)
    {
        // Todo: Otra manera de crear un cliente
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

    // Método get, por esa razón no se recibe una request porque no es un post
    public function show(Client $client)
    {
        // Acá se hace un arreglo (data) porque se muestra un solo cliente
        $data = [
            'message' => 'Detalles del cliente',
            'client' => $client,
            'service' => $client->services
        ];

        // ?como el id se manda por la url, el parámetro $client obtiene el id del modelo Client 
        return response()->json($data);
    }

    //    Método get
    public function edit(Client $client)
    {
        //
    }

    // Método put
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

    // Método delete
    public function destroy(Client $client)
    {
        $client->delete();
        $data = [
            'message' => 'Cliente eliminado con éxito',
            'client' => $client
        ];
        return response()->json($data);
    }

    // *Para añadir un servicio a un cliente
    public function attach(Request $request){
        $client = Client::find($request->client_id);
        $client->services()->attach($request->service_id);
        $data = [
            'message' => 'Servicio añadido con éxito',
            'client' => $client
        ];

        return response()->json($data);
    }

    // ?Para eliminar un servicio de un cliente
    public function detach(Request $request){
        $client = Client::find($request->client_id);
        $client->services()->detach($request->service_id);
        $data = [
            'message' => 'Service detached successfully',
            'client' => $client
        ];

        return response()->json($data);
    }
}
