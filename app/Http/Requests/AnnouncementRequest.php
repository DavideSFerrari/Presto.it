<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "title" => "required|string", //name deve essere obbligatorio, stringa e massimo 255 
            "price" => "required|numeric",
            "description" => "required|string",
            "detail" => "required|string",
            "image" => "mimes:bmp,png,jpeg,webp"
        ];
    }

    public function messages(){
        
        return [
            'title.required' => 'Il titolo deve essere obbligatorio',
            'title.string' => 'Il titolo deve essere di tipo stringa',
            //'title.max' => 'Il titolo deve essere di almeno 255 caratteri',
            'price.required' => 'Il prezzo deve essere obbligatorio',
            'price.numeric' => 'Il prezzo deve essere numerico',
            'description.required' => 'La descrizione deve essere obbligatoria',
            'description.string' => 'La descrizione deve essere di tipo stringa',
            'detail.required' => 'Il dettaglio deve essere obbligatoria',
            'detail.string' => 'Il dettaglio deve essere di tipo stringa',
            'image.mimes' => 'Inserisci immagine nei formati corretti'
        ];
    }

}
