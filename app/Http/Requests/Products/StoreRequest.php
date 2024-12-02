<?php

namespace App\Http\Requests\Products;

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
            'nameProduct' => "required|min:5|max:50|regex:/^[a-zA-Z0-9\s]+$/", // Solo permite letras, números y espacios
            'brand_id' => "required|exists:brands,id", // Asegura que el brand_id exista en la base de datos
            'stock' => "required|integer|min:0", // El stock no puede ser negativo
            'unit_price' => "required|numeric|min:0.01", // El precio debe ser un número mayor que 0
            'unit_price' => "lte:99999.99", // Limita el precio máximo a 99,999.99
            'stock' => "lte:10000", // Limita el stock máximo a 10,000
        ];
    }
}
