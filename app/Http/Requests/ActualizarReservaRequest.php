<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarReservaRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
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
            'identificacion'=>'required|unique:reservas,identificacion,'.$this->route('reseva')->id,
            'direccion'=>'required',
            'telefono'=>'required',
            'ubicacion'=>'required'
        ];
    }
}
