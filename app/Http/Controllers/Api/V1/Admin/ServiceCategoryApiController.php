<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceCategoryRequest;
use App\Http\Requests\UpdateServiceCategoryRequest;
use App\Http\Resources\Admin\ServiceCategoryResource;
use App\ServiceCategory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ServiceCategoryApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('service_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ServiceCategoryResource(ServiceCategory::with(['user'])->get());
    }

    public function store(StoreServiceCategoryRequest $request)
    {
        $serviceCategory = ServiceCategory::create($request->all());

        return (new ServiceCategoryResource($serviceCategory))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ServiceCategory $serviceCategory)
    {
        abort_if(Gate::denies('service_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ServiceCategoryResource($serviceCategory->load(['user']));
    }

    public function update(UpdateServiceCategoryRequest $request, ServiceCategory $serviceCategory)
    {
        $serviceCategory->update($request->all());

        return (new ServiceCategoryResource($serviceCategory))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ServiceCategory $serviceCategory)
    {
        abort_if(Gate::denies('service_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $serviceCategory->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
