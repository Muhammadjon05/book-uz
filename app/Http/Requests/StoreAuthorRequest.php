<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuthorRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true; // Change this based on your authorization logic
    }

    public function rules(): array
    {
        return [
            'full_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'date_of_death' => 'nullable|date|after_or_equal:date_of_birth',
        ];
    }
}
