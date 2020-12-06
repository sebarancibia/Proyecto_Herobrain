<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExcelStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * funcion que inserta las reglas para el formato del archivo.
     * @return array
     */
    public function rules()
    {
        return [
            "file2" => "required|mimes:xlsx,csv",
        ];
    }

    // funcion que desplega mensajes de error.
    public function messages(){

        return [
            "file2.mimes" => "El archivo debe ser .xlsx o .csv",
            "file2.required" => "Debe cargar un archivo .xlsx o .csv",
        ];

    }
}
