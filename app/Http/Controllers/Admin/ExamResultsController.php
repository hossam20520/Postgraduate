<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyExamResultRequest;
use App\Http\Requests\StoreExamResultRequest;
use App\Http\Requests\UpdateExamResultRequest;
use App\Models\ExamResult;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExamResultsController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('exam_result_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $examResults = ExamResult::with(['student'])->get();

        $users = User::get();

        return view('admin.examResults.index', compact('examResults', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('exam_result_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $students = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.examResults.create', compact('students'));
    }

    public function store(StoreExamResultRequest $request)
    {
        $examResult = ExamResult::create($request->all());

        return redirect()->route('admin.exam-results.index');
    }

    public function edit(ExamResult $examResult)
    {
        abort_if(Gate::denies('exam_result_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $students = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $examResult->load('student');

        return view('admin.examResults.edit', compact('students', 'examResult'));
    }

    public function update(UpdateExamResultRequest $request, ExamResult $examResult)
    {
        $examResult->update($request->all());

        return redirect()->route('admin.exam-results.index');
    }

    public function show(ExamResult $examResult)
    {
        abort_if(Gate::denies('exam_result_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $examResult->load('student');

        return view('admin.examResults.show', compact('examResult'));
    }

    public function destroy(ExamResult $examResult)
    {
        abort_if(Gate::denies('exam_result_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $examResult->delete();

        return back();
    }

    public function massDestroy(MassDestroyExamResultRequest $request)
    {
        ExamResult::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
