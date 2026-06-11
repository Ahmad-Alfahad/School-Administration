<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],

            'email' => ['required', 'email', 'unique:students,email','max:150'],

            'birth_date' => ['nullable', 'date'],

            'phone' => ['nullable', 'string', 'max:20'],

            'classroom_id' => ['required', 'exists:classrooms,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Student name is required.',
            'name.string' => 'Student name must be valid text.',
            'name.max' => 'Student name may not exceed 255 characters.',

            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already in use.',
            'email.max' => 'Email address may not exceed 150 characters.',

            'birth_date.date' => 'Please enter a valid birth date.',

            'phone.string' => 'Phone number must be valid text.',
            'phone.max' => 'Phone number may not exceed 20 characters.',

            'classroom_id.required' => 'Please select a classroom.',
            'classroom_id.exists' => 'The selected classroom does not exist.',
        ];
    }
}
