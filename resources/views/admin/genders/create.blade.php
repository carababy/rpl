@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.gender.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.genders.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="gender">{{ trans('cruds.gender.fields.gender') }}</label>
                <input class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" type="text" name="gender" id="gender" value="{{ old('gender', '') }}">
                @if($errors->has('gender'))
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.gender.fields.gender_helper') }}</span>
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