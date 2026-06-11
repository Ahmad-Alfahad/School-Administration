<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreClassroomRequest extends FormRequest
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

            'description' => ['nullable', 'string'],

            'capacity' => ['required', 'integer', 'min:1']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Classroom name is required.',
            'name.string' => 'Classroom name must be a valid text.',
            'name.max' => 'Classroom name may not exceed 255 characters.',

            'description.string' => 'Description must be a valid text.',

            'capacity.required' => 'Capacity is required.',
            'capacity.integer' => 'Capacity must be a valid number.',
            'capacity.min' => 'Capacity must be at least 1.',
        ];
    }
}
