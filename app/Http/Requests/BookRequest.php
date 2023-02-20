<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title'=>'required',
            'author'=>'required',
            'year'=>'required | integer',
            'trama'=>'required',

        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'È obbligatorio inserire il titolo.',
            'author.required'=>"È obbligatorio inserire l'autore.",
            'year.required'=>"È obbligatorio inserire l'anno di pubblicazione.",
            'year.integer'=>"È obbligatorio inserire un numero intero.",
            'trama.required'=>'È obbligatorio inserire la trama.',
        ];
    }
}
