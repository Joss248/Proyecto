<?php

namespace App\Http\Requests\Addresses;

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
            'client_id' => 'required|exists:clients,id',  // 'client_id' sigue siendo obligatorio y debe existir en la tabla 'clients'
            'street' => 'required|string|max:55',  // 'street' es obligatorio y debe ser texto con máximo 255 caracteres
            'internal_num' => 'nullable|string|max:50',  // 'internal_num' es opcional, pero si se proporciona, debe ser texto con máximo 50 caracteres
            'external_num' => 'required|string|max:50',  // 'external_num' es obligatorio, debe ser texto con máximo 50 caracteres
            'neighborhood' => 'required|string|max:50',  // 'neighborhood' es obligatorio, debe ser texto con máximo 100 caracteres
            'town' => 'required|string|max:50',  // 'town' es obligatorio, debe ser texto con máximo 100 caracteres
            'state' => 'required|string|max:50',  // 'state' es obligatorio, debe ser texto con máximo 100 caracteres
            'country' => 'required|string|max:50',  // 'country' es obligatorio, debe ser texto con máximo 100 caracteres
            'postal_code' => 'required|string',  // 'postal_code' sigue siendo obligatorio y debe seguir el formato correcto
            'references' => 'nullable|string|max:255',  // 'references' sigue siendo opcional, debe ser texto con máximo 255 caracteres
        ];
    }
}
