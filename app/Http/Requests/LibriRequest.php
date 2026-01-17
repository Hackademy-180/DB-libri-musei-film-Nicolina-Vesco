<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibriRequest extends FormRequest
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
            "title" => "required|min:10|max:100",
            "info" => "required|min:30",
            "img" => "image"
        ];
    }
    public function messages(): array {
        return[
            "title.required"=> "Questa campo è obbligatorio",
            "title.min"=> "Questo campo deve contenere almeno 10 caratteri",
            "info.required"=> "Questo campo è obbligatorio",
            "info.min"=> "Questo campo deve contenere almeno 30 caratteri",
        ];
    }
}
