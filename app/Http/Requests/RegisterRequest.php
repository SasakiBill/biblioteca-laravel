<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
	{
		$rules = [
			'name' => 'required|string|min:5|max:255',
			'email' => 'required|string|unique:users,email',
            'phone' => 'required|unique:phone, user',
			'password' => 'required|string|confirmed'
		];

		if ($this->method() == 'PUT' && $user = $this->user) {
			$rules['email'] .= ",$user->id";
			$rules['password'] = 'nullable|string|confirmed';
		}

		return $rules;
	}
}
