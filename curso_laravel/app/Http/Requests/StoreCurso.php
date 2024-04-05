<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'categoria' => 'required'
        ];
    }

    public function attributes()
    { // Para asignarle nombres a los name de los campos y mostrarlos en pantalla cuando se valide
        return [
            'name' => 'Nombre',
            'description' => 'Descripción',
        ];
    }

    public function messages(){
        return [
            'description.required' => 'Debe ingresar una descripción del curso',
        ];
    }
}
