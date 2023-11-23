<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'price' => 'required',
            'img' => 'required|max:255',
            'description' => 'required|max:5000',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Questo prodotto deve avere un nome associato.',
            'name.max' => 'Questo prodotto non può avere un nome con un numero di caratteri superiore a 255.',
            'price.required' => 'Questo prodotto deve avere un prezzo associato.',
            'img.required' => 'Questo prodotto deve avere un\'immagine associata.',
            'img.max' => 'Questo prodotto non può avere un\'immagine con un numero di caratteri superiore a 255.',
            'description.required' => 'Questo prodotto deve avere una descrizione associata.',
            'description.max' => 'Questo prodotto non può avere una descrizione con un numero di caratteri superiore a 3000.',
        ];
    }
}
