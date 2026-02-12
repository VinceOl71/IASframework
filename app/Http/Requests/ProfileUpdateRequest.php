<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Allow all authenticated users
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', function ($attribute, $value, $fail) {
                // Prevent XSS by stripping tags
                if ($value !== strip_tags($value)) {
                    $fail('The '.$attribute.' contains invalid characters.');
                }
            }],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $this->user()->id],
            'password' => ['nullable', 'confirmed', Password::defaults()], // password_confirmation must match
        ];
    }

    /**
     * Sanitize the input data before validation.
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'name' => strip_tags($this->name),
            'email' => strip_tags($this->email),
        ]);
    }
}
