<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeaveApplicationRequest extends FormRequest
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
            //
            'start_date' => 'required',
            'end_date' => 'required',
            'leave_type' => 'required',


        ];
    }

    public function messages()
    {
        return [
            'start_date.required' => 'The title field is required.',
            'end_date.required' => 'The slug field is required.',
            'leave_type.required' => 'The body field is required.',


        ];
    }
}
