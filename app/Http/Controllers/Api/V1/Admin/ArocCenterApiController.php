<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\ArocCenter;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArocCenterRequest;
use App\Http\Requests\UpdateArocCenterRequest;
use App\Http\Resources\Admin\ArocCenterResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ArocCenterApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('aroc_center_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ArocCenterResource(ArocCenter::all());
    }

    public function store(StoreArocCenterRequest $request)
    {
        $arocCenter = ArocCenter::create($request->all());

        return (new ArocCenterResource($arocCenter))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ArocCenter $arocCenter)
    {
        abort_if(Gate::denies('aroc_center_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ArocCenterResource($arocCenter);
    }

    public function update(UpdateArocCenterRequest $request, ArocCenter $arocCenter)
    {
        $arocCenter->update($request->all());

        return (new ArocCenterResource($arocCenter))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ArocCenter $arocCenter)
    {
        abort_if(Gate::denies('aroc_center_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $arocCenter->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
