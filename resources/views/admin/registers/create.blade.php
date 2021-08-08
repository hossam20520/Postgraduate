@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.register.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.registers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="studentname">{{ trans('cruds.register.fields.studentname') }}</label>
                <input class="form-control {{ $errors->has('studentname') ? 'is-invalid' : '' }}" type="text" name="studentname" id="studentname" value="{{ old('studentname', '') }}" required>
                @if($errors->has('studentname'))
                    <span class="text-danger">{{ $errors->first('studentname') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.register.fields.studentname_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="studentid">{{ trans('cruds.register.fields.studentid') }}</label>
                <input class="form-control {{ $errors->has('studentid') ? 'is-invalid' : '' }}" type="text" name="studentid" id="studentid" value="{{ old('studentid', '') }}">
                @if($errors->has('studentid'))
                    <span class="text-danger">{{ $errors->first('studentid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.register.fields.studentid_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.register.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.register.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone">{{ trans('cruds.register.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}" required>
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.register.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="subjects">{{ trans('cruds.register.fields.subject') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('subjects') ? 'is-invalid' : '' }}" name="subjects[]" id="subjects" multiple>
                    @foreach($subjects as $id => $subject)
                        <option value="{{ $id }}" {{ in_array($id, old('subjects', [])) ? 'selected' : '' }}>{{ $subject }}</option>
                    @endforeach
                </select>
                @if($errors->has('subjects'))
                    <span class="text-danger">{{ $errors->first('subjects') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.register.fields.subject_helper') }}</span>
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