<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateComicRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo del fumetto è obbligatorio.',
            'title.max' => 'Il titolo del fumetto non può superare i 255 caratteri.',
            'price.required' => 'Il prezzo del fumetto è obbligatorio.',
            'price.numeric' => 'Il prezzo del fumetto deve essere un valore numerico.',
            'description.required' => 'La descrizione del fumetto è obbligatoria.',
        ];
    }
}
