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
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:post|max:255',
            'category' => 'required|string|max:255',
            'content' => 'required|string',
            
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El campo titulo es requerido',
            'title.string' => 'El campo titulo debe ser un texto',
            'title.max' => 'El campo titulo debe tener maximo 255 caracteres',
            'slug.required' => 'El campo slug es requerido',
            'slug.string' => 'El campo slug debe ser un texto',
            'slug.unique' => 'El campo slug debe ser unico',
            'slug.max' => 'El campo slug debe tener maximo 255 caracteres',
            'category.required' => 'El campo categoria es requerido',
            'category.string' => 'El campo categoria debe ser un texto',
            'category.max' => 'El campo categoria debe tener maximo 255 caracteres',
            'content.required' => 'El campo contenido es requerido',
            'content.string' => 'El campo contenido debe ser un texto',
        ];
    }
}
