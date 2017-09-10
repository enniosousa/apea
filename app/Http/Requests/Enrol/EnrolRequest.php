<?php

namespace App\Http\Requests\Enrol;

use Illuminate\Foundation\Http\FormRequest;

class EnrolRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'activities' => 'required|array',
            'activities.*' => 'required|exists:activities,id'
        ];
    }

    public function messages() {
        return [
            'activities.required' => 'Você deve selecionar ao menos uma atividade.'
        ];
    }

}
