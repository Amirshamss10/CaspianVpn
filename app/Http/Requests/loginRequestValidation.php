<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequestValidation extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
                "email" => ["required", "email", "max:255", "exists:users"], 
                "password" => ["required", "max:255"],
                // "g-recaptcha-response" => ["required", "string", new recaptcha], 
        ];
    }
}
