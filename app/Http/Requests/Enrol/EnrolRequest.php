<?php

namespace App\Http\Requests\Enrol;

use Illuminate\Foundation\Http\FormRequest;

class EnrolRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'Palestra' => 'required|array',
            'Palestra.*' => 'required|exists:activities,id',
            'Minicurso' => 'required|exists:activities,id',
        ];
    }

    public function messages() {
        return [
            'Palestra.required' => 'Você deve selecionar ao menos uma palestra.',
            'Minicurso.required' => 'Você deve selecionar um minicurso.',
        ];
    }

}
