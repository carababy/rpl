<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreQueryRequest;
use App\Http\Requests\UpdateQueryRequest;
use App\Http\Resources\Admin\QueryResource;
use App\Query;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QueryApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('query_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new QueryResource(Query::with(['answer_provider', 'user'])->get());
    }

    public function store(StoreQueryRequest $request)
    {
        $query = Query::create($request->all());

        return (new QueryResource($query))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Query $query)
    {
        abort_if(Gate::denies('query_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new QueryResource($query->load(['answer_provider', 'user']));
    }

    public function update(UpdateQueryRequest $request, Query $query)
    {
        $query->update($request->all());

        return (new QueryResource($query))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Query $query)
    {
        abort_if(Gate::denies('query_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $query->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
