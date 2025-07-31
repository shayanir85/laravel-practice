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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'BookName' => 'required'
            ,
            'year' => 'required'
            ,
            'writer' => 'required'

        ];
    }
    public function attributes()
    {
        return [
            'BookName' => 'name of the book'
            ,
            'year' => 'date of the book'
            ,
            'writer' => 'writer of the book'
        ];
    }
}
