<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'nameProduct' => "required|min:5|max:50|regex:/^[a-zA-Z0-9\s]+$/", // Asegura que el nombre sea único, pero permite que no cambie
            'brand_id' => "required|exists:brands,id", // Asegura que el brand_id exista
            'stock' => "required|integer|min:0", // El stock no puede ser negativo
            'unit_price' => "required|numeric|min:0.01", // El precio debe ser un número mayor que 0
        ];
    }
}
