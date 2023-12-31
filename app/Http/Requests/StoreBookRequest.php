<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'pages_count' => 'required|integer|min:1',
            'photo_url' => 'nullable|url',
            'published_year' => 'required|integer|min:1',
            'description' => 'nullable|string',
            'has_discount' => 'nullable|boolean',
            'discount' => 'nullable|numeric|min:0|max:100',
            'category_id' => 'required|exists:categories,id',
        ];
    }
}
