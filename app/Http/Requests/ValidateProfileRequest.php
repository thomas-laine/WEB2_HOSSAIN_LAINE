<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateProfileRequest extends Request
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
        return [
            'name' => 'required|max:30',
            'email' => 'required|max:50',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Nom obligatoire',
            'name.max' => 'Nom > 30 caractères',
            'email.required' => 'Mail obligatoire',
            'email.max' => 'Mail > 50 caractères',
        ];
    }
}
