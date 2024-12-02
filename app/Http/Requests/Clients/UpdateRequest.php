<?php

namespace App\Http\Requests\Clients;

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
            'name' => 'required|string|min:2|max:100',  // 'name' es obligatorio, debe ser texto, con longitud mínima de 2 y máxima de 100
            'last_name' => 'required|string|min:2|max:100',  // 'last_name' es obligatorio, debe ser texto, con longitud mínima de 2 y máxima de 100
            'second_last_name' => 'nullable|string|max:100',  // 'second_last_name' es opcional, debe ser texto y máximo 100 caracteres
            'email' => 'required|email|unique:clients,email',  // 'email' es obligatorio, debe ser válido y único en la tabla 'clients', excluyendo el correo del cliente actual
            'phone' => 'required|string',  // 'phone' es obligatorio, debe ser un número de teléfono válido (formato E.164)
        ];
    }
}
