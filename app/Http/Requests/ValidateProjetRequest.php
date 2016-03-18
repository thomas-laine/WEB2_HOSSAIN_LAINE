<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateProjetRequest extends Request
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
            'title' => 'required|min:10',
            'name'   => 'required',
            'adresse' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'ficheID' => 'required',
            'typeProjet' => 'required',
            'contexte' => 'required',
            'demande' => 'required',
            'objectifs' => 'required',
            'contraintes' => 'required',

        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Titre obligatoire',
            'title.min' => 'Votre titre doit contenir au minimum 10 caractères',
            'demande.required' => 'Demande obligatoire',
            'demande.min' => 'Votre demande doit contenir au minimum 15 caractères',
            'name.required' => 'Nom obligatoire',
            'adresse.required' => 'Adresse obligatoire',
            'name.required' => 'Adresse obligatoire',
            'name.required' => 'Nom obligatoire',
            'name.required' => 'Nom obligatoire',
            'name.required' => 'Nom obligatoire',
            'name.required' => 'Nom obligatoire',
            'name.required' => 'Nom obligatoire',

        ];
    }
}