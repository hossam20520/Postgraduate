<?php

namespace App\Http\Requests;

use App\Models\Register;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRegisterRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('register_edit');
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
                'unique:registers,email,' . request()->route('register')->id,
            ],
            'phone' => [
                'string',
                'required',
                'unique:registers,phone,' . request()->route('register')->id,
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
