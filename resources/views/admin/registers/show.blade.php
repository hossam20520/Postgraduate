@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.register.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.registers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.register.fields.id') }}
                        </th>
                        <td>
                            {{ $register->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.register.fields.studentname') }}
                        </th>
                        <td>
                            {{ $register->studentname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.register.fields.studentid') }}
                        </th>
                        <td>
                            {{ $register->studentid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.register.fields.email') }}
                        </th>
                        <td>
                            {{ $register->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.register.fields.phone') }}
                        </th>
                        <td>
                            {{ $register->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.register.fields.subject') }}
                        </th>
                        <td>
                            @foreach($register->subjects as $key => $subject)
                                <span class="label label-info">{{ $subject->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.registers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection