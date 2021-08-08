@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.examResult.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.exam-results.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.examResult.fields.id') }}
                        </th>
                        <td>
                            {{ $examResult->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examResult.fields.student') }}
                        </th>
                        <td>
                            {{ $examResult->student->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examResult.fields.math') }}
                        </th>
                        <td>
                            {{ $examResult->math }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examResult.fields.database') }}
                        </th>
                        <td>
                            {{ $examResult->database }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examResult.fields.programming_1') }}
                        </th>
                        <td>
                            {{ $examResult->programming_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examResult.fields.software_engineer') }}
                        </th>
                        <td>
                            {{ $examResult->software_engineer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examResult.fields.computer_science') }}
                        </th>
                        <td>
                            {{ $examResult->computer_science }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examResult.fields.total') }}
                        </th>
                        <td>
                            {{ $examResult->total }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examResult.fields.rating') }}
                        </th>
                        <td>
                            {{ $examResult->rating }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examResult.fields.database_2') }}
                        </th>
                        <td>
                            {{ $examResult->database_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examResult.fields.programming_2') }}
                        </th>
                        <td>
                            {{ $examResult->programming_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examResult.fields.statistics') }}
                        </th>
                        <td>
                            {{ $examResult->statistics }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examResult.fields.selected') }}
                        </th>
                        <td>
                            {{ $examResult->selected }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examResult.fields.project') }}
                        </th>
                        <td>
                            {{ $examResult->project }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examResult.fields.total_p') }}
                        </th>
                        <td>
                            {{ $examResult->total_p }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examResult.fields.overall_rating') }}
                        </th>
                        <td>
                            {{ $examResult->overall_rating }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.exam-results.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection