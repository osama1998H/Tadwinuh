<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRemittanceCommissionRatesRequest extends FormRequest
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
            'posting_date' => 'date|sometimes',
            'customer_name' => 'string|required',
            'currency' => 'string|required',
            'outgoing_commission_percentage' => 'nullable|sometimes|numeric',
            'outgoing_commission_on_every' => 'nullable|sometimes|numeric',
            'outgoing_commission_amount' => 'numeric|required_if:outgoing_commission_on_every,*',
            'incoming_commission_percentage' => 'nullable|sometimes|numeric',
            'incoming_commission_on_every' => 'nullable|sometimes|numeric',
            'incoming_commission_amount' => 'numeric|required_if:incoming_commission_on_every,*',
        ];
    }
}
