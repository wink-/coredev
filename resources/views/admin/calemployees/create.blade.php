@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.calemployee.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.calemployees.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="iden">{{ trans('cruds.calemployee.fields.iden') }}</label>
                <input class="form-control {{ $errors->has('iden') ? 'is-invalid' : '' }}" type="text" name="iden" id="iden" value="{{ old('iden', '') }}">
                @if($errors->has('iden'))
                    <div class="invalid-feedback">
                        {{ $errors->first('iden') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.calemployee.fields.iden_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_init">{{ trans('cruds.calemployee.fields.user_init') }}</label>
                <input class="form-control {{ $errors->has('user_init') ? 'is-invalid' : '' }}" type="text" name="user_init" id="user_init" value="{{ old('user_init', '') }}">
                @if($errors->has('user_init'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user_init') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.calemployee.fields.user_init_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.calemployee.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.calemployee.fields.name_helper') }}</span>
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