@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.examResult.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.exam-results.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="student_id">{{ trans('cruds.examResult.fields.student') }}</label>
                <select class="form-control select2 {{ $errors->has('student') ? 'is-invalid' : '' }}" name="student_id" id="student_id">
                    @foreach($students as $id => $entry)
                        <option value="{{ $id }}" {{ old('student_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('student'))
                    <span class="text-danger">{{ $errors->first('student') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.examResult.fields.student_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="math">{{ trans('cruds.examResult.fields.math') }}</label>
                <input class="form-control {{ $errors->has('math') ? 'is-invalid' : '' }}" type="number" name="math" id="math" value="{{ old('math', '') }}" step="1">
                @if($errors->has('math'))
                    <span class="text-danger">{{ $errors->first('math') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.examResult.fields.math_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="database">{{ trans('cruds.examResult.fields.database') }}</label>
                <input class="form-control {{ $errors->has('database') ? 'is-invalid' : '' }}" type="number" name="database" id="database" value="{{ old('database', '') }}" step="1">
                @if($errors->has('database'))
                    <span class="text-danger">{{ $errors->first('database') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.examResult.fields.database_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="programming_1">{{ trans('cruds.examResult.fields.programming_1') }}</label>
                <input class="form-control {{ $errors->has('programming_1') ? 'is-invalid' : '' }}" type="text" name="programming_1" id="programming_1" value="{{ old('programming_1', '') }}">
                @if($errors->has('programming_1'))
                    <span class="text-danger">{{ $errors->first('programming_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.examResult.fields.programming_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="software_engineer">{{ trans('cruds.examResult.fields.software_engineer') }}</label>
                <input class="form-control {{ $errors->has('software_engineer') ? 'is-invalid' : '' }}" type="number" name="software_engineer" id="software_engineer" value="{{ old('software_engineer', '') }}" step="1">
                @if($errors->has('software_engineer'))
                    <span class="text-danger">{{ $errors->first('software_engineer') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.examResult.fields.software_engineer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="computer_science">{{ trans('cruds.examResult.fields.computer_science') }}</label>
                <input class="form-control {{ $errors->has('computer_science') ? 'is-invalid' : '' }}" type="number" name="computer_science" id="computer_science" value="{{ old('computer_science', '') }}" step="1">
                @if($errors->has('computer_science'))
                    <span class="text-danger">{{ $errors->first('computer_science') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.examResult.fields.computer_science_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="total">{{ trans('cruds.examResult.fields.total') }}</label>
                <input class="form-control {{ $errors->has('total') ? 'is-invalid' : '' }}" type="number" name="total" id="total" value="{{ old('total', '') }}" step="1">
                @if($errors->has('total'))
                    <span class="text-danger">{{ $errors->first('total') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.examResult.fields.total_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="rating">{{ trans('cruds.examResult.fields.rating') }}</label>
                <input class="form-control {{ $errors->has('rating') ? 'is-invalid' : '' }}" type="text" name="rating" id="rating" value="{{ old('rating', '') }}">
                @if($errors->has('rating'))
                    <span class="text-danger">{{ $errors->first('rating') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.examResult.fields.rating_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="database_2">{{ trans('cruds.examResult.fields.database_2') }}</label>
                <input class="form-control {{ $errors->has('database_2') ? 'is-invalid' : '' }}" type="number" name="database_2" id="database_2" value="{{ old('database_2', '') }}" step="1">
                @if($errors->has('database_2'))
                    <span class="text-danger">{{ $errors->first('database_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.examResult.fields.database_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="programming_2">{{ trans('cruds.examResult.fields.programming_2') }}</label>
                <input class="form-control {{ $errors->has('programming_2') ? 'is-invalid' : '' }}" type="number" name="programming_2" id="programming_2" value="{{ old('programming_2', '') }}" step="1">
                @if($errors->has('programming_2'))
                    <span class="text-danger">{{ $errors->first('programming_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.examResult.fields.programming_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="statistics">{{ trans('cruds.examResult.fields.statistics') }}</label>
                <input class="form-control {{ $errors->has('statistics') ? 'is-invalid' : '' }}" type="number" name="statistics" id="statistics" value="{{ old('statistics', '') }}" step="1">
                @if($errors->has('statistics'))
                    <span class="text-danger">{{ $errors->first('statistics') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.examResult.fields.statistics_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="selected">{{ trans('cruds.examResult.fields.selected') }}</label>
                <input class="form-control {{ $errors->has('selected') ? 'is-invalid' : '' }}" type="text" name="selected" id="selected" value="{{ old('selected', '') }}">
                @if($errors->has('selected'))
                    <span class="text-danger">{{ $errors->first('selected') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.examResult.fields.selected_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="project">{{ trans('cruds.examResult.fields.project') }}</label>
                <input class="form-control {{ $errors->has('project') ? 'is-invalid' : '' }}" type="text" name="project" id="project" value="{{ old('project', '') }}">
                @if($errors->has('project'))
                    <span class="text-danger">{{ $errors->first('project') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.examResult.fields.project_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="total_p">{{ trans('cruds.examResult.fields.total_p') }}</label>
                <input class="form-control {{ $errors->has('total_p') ? 'is-invalid' : '' }}" type="number" name="total_p" id="total_p" value="{{ old('total_p', '') }}" step="1">
                @if($errors->has('total_p'))
                    <span class="text-danger">{{ $errors->first('total_p') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.examResult.fields.total_p_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="overall_rating">{{ trans('cruds.examResult.fields.overall_rating') }}</label>
                <input class="form-control {{ $errors->has('overall_rating') ? 'is-invalid' : '' }}" type="text" name="overall_rating" id="overall_rating" value="{{ old('overall_rating', '') }}">
                @if($errors->has('overall_rating'))
                    <span class="text-danger">{{ $errors->first('overall_rating') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.examResult.fields.overall_rating_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection