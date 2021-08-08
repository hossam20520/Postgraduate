<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyRegisterRequest;
use App\Http\Requests\StoreRegisterRequest;
use App\Http\Requests\UpdateRegisterRequest;
use App\Models\Register;
use App\Models\Subject;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RegisterController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('register_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registers = Register::with(['subjects', 'created_by'])->get();

        $subjects = Subject::get();

        $users = User::get();

        return view('admin.registers.index', compact('registers', 'subjects', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('register_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subjects = Subject::pluck('name', 'id');

        return view('admin.registers.create', compact('subjects'));
    }

    public function store(StoreRegisterRequest $request)
    {
        $register = Register::create($request->all());
        $register->subjects()->sync($request->input('subjects', []));

        return redirect()->route('admin.registers.index');
    }

    public function edit(Register $register)
    {
        abort_if(Gate::denies('register_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subjects = Subject::pluck('name', 'id');

        $register->load('subjects', 'created_by');

        return view('admin.registers.edit', compact('subjects', 'register'));
    }

    public function update(UpdateRegisterRequest $request, Register $register)
    {
        $register->update($request->all());
        $register->subjects()->sync($request->input('subjects', []));

        return redirect()->route('admin.registers.index');
    }

    public function show(Register $register)
    {
        abort_if(Gate::denies('register_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $register->load('subjects', 'created_by');

        return view('admin.registers.show', compact('register'));
    }

    public function destroy(Register $register)
    {
        abort_if(Gate::denies('register_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $register->delete();

        return back();
    }

    public function massDestroy(MassDestroyRegisterRequest $request)
    {
        Register::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
