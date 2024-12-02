<?php

namespace App\Http\Requests\Sales;

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
            'client_id' => 'required|exists:clients,id',  // El 'client_id' debe ser obligatorio y debe existir en la tabla 'clients'
            'product_id' => 'required|exists:products,id',  // El 'product_id' debe ser obligatorio y debe existir en la tabla 'products'
            'sale_date' => 'nullable|date|before_or_equal:today',  // 'sale_date' es opcional en la actualización, pero si se proporciona debe ser válida y no futura
        ];
    }
}
