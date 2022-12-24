<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestrucFormRqst extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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

            'etab' => [
                'required',
                    'string'],
 
            'dir_labo' => [
            'required',
            'string'],      
                            
            'pvCL' => [
            'required',
            'string'],   
            'pvCSF' => [
            'required',
            'string'],     
            'CDetat' => [
            'required',
            'string'],  
            'etat' => [
            'required',
            'string'],  
            'changement' => [
            'required',
            'string'],  
        ];

        return $rules;
    }
}
