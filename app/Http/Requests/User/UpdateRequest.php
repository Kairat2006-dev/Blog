<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'nullable|string',
            'email'=>'nullable|email|string|unique:users,email,' . $this->user_id,
            'user_id' => 'required|integer|exists:users,id',

            'role' => 'required|string',

        ];
    }
}
