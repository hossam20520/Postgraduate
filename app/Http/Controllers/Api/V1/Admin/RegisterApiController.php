<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegisterRequest;
use App\Http\Requests\UpdateRegisterRequest;
use App\Http\Resources\Admin\RegisterResource;
use App\Models\Register;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RegisterApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('register_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RegisterResource(Register::with(['subjects', 'created_by'])->get());
    }

    public function store(StoreRegisterRequest $request)
    {
        $register = Register::create($request->all());
        $register->subjects()->sync($request->input('subjects', []));

        return (new RegisterResource($register))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Register $register)
    {
        abort_if(Gate::denies('register_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RegisterResource($register->load(['subjects', 'created_by']));
    }

    public function update(UpdateRegisterRequest $request, Register $register)
    {
        $register->update($request->all());
        $register->subjects()->sync($request->input('subjects', []));

        return (new RegisterResource($register))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Register $register)
    {
        abort_if(Gate::denies('register_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $register->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
