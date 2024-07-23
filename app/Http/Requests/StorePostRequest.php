<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            "title" => "required | min:3",
            "content" => "required",
            "slug" => "required|unique:posts",
            "category" => ["required", "min:3", "max:10"],
        ];
    }


    public function messages()
    {

        return [
            "title.required" => "El :attribute es requerido",
        ];
    }


    public function attributes()
    {

        return [
            "title" => "Título",
            "content" => "Contenido",
            "slug" => "Slug",
            "category" => "Categoría",
        ];
    }
}
