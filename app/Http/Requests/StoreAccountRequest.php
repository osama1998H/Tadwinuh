<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAccountRequest extends FormRequest
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
            'type' => 'nullable|string|max:100',
            'name' => 'nullable|string|max:500',
            'account_number' => 'required|integer',
            'currency' => 'nullable|string|max:100',
            'balance' => 'nullable|numeric', // You can adjust validation rules for balance as needed
            'is_group' => 'nullable|boolean',
            'parent_account_id' => 'nullable|integer|exists:accounts,id', // Ensure the parent account exists in the "accounts" table
            'is_frozen' => 'nullable|boolean',
        ];
    }
}
