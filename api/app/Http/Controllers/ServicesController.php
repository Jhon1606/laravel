<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    
    public function index()
    {
        $services = Service::all();
        // Definimos un arreglo para luego hacerle un foreach y recorrer todos los servicios
        $array = [];
        foreach ($services as $service){
            $array[] = [
                'id' => $service->id,
                'name' => $service->name,
                'description' => $service->description,
                'price' => $service->price,
                'client' => $service->clients
            ];
        }
        // Le decimos que nos retorne el array en formato Json
        return response()->json($array);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->save();
        $data = [
            'message' => 'Servicio creado con éxito',
            'client' => $service
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        $data = [
            'message' => "Detalles del servicio",
            'service' => $service,
            'client' => $service->clients
        ];
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $service->name = $request->name;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->save();
        $data = [
            'message' => 'Servicio actualizado con éxito',
            'client' => $service
        ];
        return response()->json($data);
    }

    
    public function destroy(Service $service)
    {
        $service->delete();
        $data = [
            'message' => 'Servicio eliminado con éxito',
            'service' => $service
        ];
        return response()->json($data);
    }

    public function clients(Request $request){
        // Encontramos el servicio que se manda por la request
        $service = Service::find($request->service_id);

        // ?Mostramos el cliente que tiene el servicio
        $clients = $service->clients;
        $data = [
            'message' => 'Clients fetched successfully',
            'clients' => $clients
        ];
        return response()->json($data);
    }
}
