<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarReservaRequest extends FormRequest
{
    /**
     * autorizacion de la validacion.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * validacion del los campos del formulario.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'nombres'=>'required',
            'apellido'=>'required',
            'edad'=>'required',
            'sexo'=>'required',
            'identificacion'=>'required|unique:reservas,identificacion',
            'direccion'=>'required',
            'telefono'=>'required',
            'ubicacion'=>'required'
        ];
    }
}
