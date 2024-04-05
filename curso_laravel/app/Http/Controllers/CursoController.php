<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::paginate();
        return view('cursos.index',compact('cursos')); //En el compact se envia la variable curso
    }
    
    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){ // El request significa que recupera y trae todos los datos enviados del form, StoreCurso es el request creado
        
        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->categoria = $request->categoria;
        // $curso->save();

        // Es lo mismo de arriba pero más optimizado, se guarda todos los datos en la variable curso
        $curso = Curso::Create($request->all()); 

        return redirect()->route('cursos.show', $curso); // Aqui le digo que me redirija a la ruta cursos.show
    }

    public function show(Curso $curso){
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso')); //Es lo mismo de arribaa, la variable curso contiene el id y lo envia para mostrar
    }

    public function update(Request $request, Curso $curso){

        $request->validate([ // Esto sirve para validar que los campos no esten vacios
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'required'
        ]);

        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->categoria = $request->categoria;

        // $curso->save();

        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}