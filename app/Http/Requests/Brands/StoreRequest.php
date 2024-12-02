<?php

namespace App\Http\Requests\Brands;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'brand' => 'required|string|max:100|exists:brands,name',  // 'brand' debe ser un string, existir en la tabla 'brands' y tener un máximo de 100 caracteres
            'description' => 'required|string|max:500',  // 'description' es obligatoria, debe ser un string y tener un máximo de 500 caracteres
        ];
    }
}
