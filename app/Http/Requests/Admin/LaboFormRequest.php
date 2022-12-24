<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LaboFormRequest extends FormRequest
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
        $rules= [
            'code_labo' => [
                'required',
                'string',
                'max:8',
            ],
            'intitule_labo' => [
                'required',
                'string',
            ],
            'email_dir' => [
                'required',
                'string'],
                'num_dir' => [
                    'required',
                    'string'],
            'etab' => [
                'required',
                    'string'],
            'domaine_labo' => [
                'required',
                'string'],
            'gdomaine_labo' => [
                    'required',
                    'string'],
                    'acronyme' => [
                        'required',
                        'string'],
                        'dir_labo' => [
                            'required',
                            'string'],           

        ];

        return $rules;
    }
}
