<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'name' => 'required|string|min:5|max:255',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ];

        if ($this->method() == 'PUT' && $user = $this->user) {
            $rules['email'] .= ",$user->id";
            $rules['password'] = 'nullable|string|confirmed';
        }

        return $rules;
    }
}
