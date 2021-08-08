<?php

namespace App\Http\Requests;

use App\Models\ExamResult;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreExamResultRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('exam_result_create');
    }

    public function rules()
    {
        return [
            'math' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'database' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'programming_1' => [
                'string',
                'nullable',
            ],
            'software_engineer' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'computer_science' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'total' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'rating' => [
                'string',
                'nullable',
            ],
            'database_2' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'programming_2' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'statistics' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'selected' => [
                'string',
                'nullable',
            ],
            'project' => [
                'string',
                'nullable',
            ],
            'total_p' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'overall_rating' => [
                'string',
                'nullable',
            ],
        ];
    }
}
