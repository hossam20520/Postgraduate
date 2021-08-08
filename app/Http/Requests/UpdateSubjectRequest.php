<?php

namespace App\Http\Requests;

use App\Models\Subject;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSubjectRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('subject_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'numhours' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
