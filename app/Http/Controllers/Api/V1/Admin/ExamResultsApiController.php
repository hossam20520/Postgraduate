<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExamResultRequest;
use App\Http\Requests\UpdateExamResultRequest;
use App\Http\Resources\Admin\ExamResultResource;
use App\Models\ExamResult;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExamResultsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('exam_result_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ExamResultResource(ExamResult::with(['student'])->get());
    }

    public function store(StoreExamResultRequest $request)
    {
        $examResult = ExamResult::create($request->all());

        return (new ExamResultResource($examResult))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ExamResult $examResult)
    {
        abort_if(Gate::denies('exam_result_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ExamResultResource($examResult->load(['student']));
    }

    public function update(UpdateExamResultRequest $request, ExamResult $examResult)
    {
        $examResult->update($request->all());

        return (new ExamResultResource($examResult))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ExamResult $examResult)
    {
        abort_if(Gate::denies('exam_result_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $examResult->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
