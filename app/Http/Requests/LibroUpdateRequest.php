<?php

namespace Libreria\Http\Requests;

use Libreria\Http\Requests\Request;

class LibroUpdateRequest extends Request
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
          'nombre'=> 'required',
          'autor'=> 'required',
          'editorial'=> 'required',
          'paginas'=> 'required',
          'anyo'=> 'required',
          'precio'=> 'required',
          'portada'=> 'required',
        ];
    }
}
