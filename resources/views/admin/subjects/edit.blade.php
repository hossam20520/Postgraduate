@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.subject.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.subjects.update", [$subject->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.subject.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $subject->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="numhours">{{ trans('cruds.subject.fields.numhours') }}</label>
                <input class="form-control {{ $errors->has('numhours') ? 'is-invalid' : '' }}" type="number" name="numhours" id="numhours" value="{{ old('numhours', $subject->numhours) }}" step="1">
                @if($errors->has('numhours'))
                    <span class="text-danger">{{ $errors->first('numhours') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.numhours_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price">{{ trans('cruds.subject.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', $subject->price) }}" step="0.01">
                @if($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="doctor_id">{{ trans('cruds.subject.fields.doctor') }}</label>
                <select class="form-control select2 {{ $errors->has('doctor') ? 'is-invalid' : '' }}" name="doctor_id" id="doctor_id">
                    @foreach($doctors as $id => $entry)
                        <option value="{{ $id }}" {{ (old('doctor_id') ? old('doctor_id') : $subject->doctor->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('doctor'))
                    <span class="text-danger">{{ $errors->first('doctor') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.doctor_helper') }}</span>
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