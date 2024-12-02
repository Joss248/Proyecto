<?php

namespace App\Http\Requests\Clients;

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
            'name' => 'required|string|min:2|max:30',  // 'name' es obligatorio, debe ser texto, con longitud mínima de 2 y máxima de 3 0
            'last_name' => 'required|string|min:2|max:30',  // 'last_name' es obligatorio, debe ser texto, con longitud mínima de 2 y máxima de 30
            'second_last_name' => 'nullable|string|max:30',  // 'second_last_name' es opcional, debe ser texto y máximo 30 caracteres
            'email' => 'required|email|unique:clients,email',  // 'email' es obligatorio, debe ser válido y único en la tabla 'clients'
            'phone' => 'required|string',  // 'phone' es obligatorio
        ];
    }
}
