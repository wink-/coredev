@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.calType.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.cal-types.update", [$calType->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.calType.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $calType->name) }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.calType.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="proc_link">{{ trans('cruds.calType.fields.proc_link') }}</label>
                <input class="form-control {{ $errors->has('proc_link') ? 'is-invalid' : '' }}" type="text" name="proc_link" id="proc_link" value="{{ old('proc_link', $calType->proc_link) }}">
                @if($errors->has('proc_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('proc_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.calType.fields.proc_link_helper') }}</span>
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