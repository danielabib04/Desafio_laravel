<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnersFormRequest extends FormRequest
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
            'fullName' => ['required','min:3'],
            'telephone' => ['required','min:11'],
            'email' => ['required','min:5'],
        ];
    }
}
