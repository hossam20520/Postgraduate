<?php

namespace App\Http\Requests;

use App\Models\Register;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreRegisterRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('register_create');
    }

    public function rules()
    {
        return [
            'studentname' => [
                'string',
                'required',
            ],
            'studentid' => [
                'string',
                'nullable',
            ],
            'email' => [
                'required',
                'unique:registers',
            ],
            'phone' => [
                'string',
                'required',
                'unique:registers',
            ],
            'subjects.*' => [
                'integer',
            ],
            'subjects' => [
                'array',
            ],
        ];
    }
}
