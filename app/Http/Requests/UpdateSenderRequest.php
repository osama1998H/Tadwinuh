<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSenderRequest extends FormRequest
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
            'full_name' => 'string|max:100',
            'nationality' => 'string',
            'country' => 'string',
            'phone_number' => 'numeric',
            'dob' => 'date',
            'id_type' => 'string',
            'id_number' => 'numeric',
            'date_of_issue' => 'date',
            'address' => 'string|max:300',
            'city' => 'string|max:100',
            'province' => 'string|max:100',
        ];
    }
}
