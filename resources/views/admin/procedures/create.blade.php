@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.procedure.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.procedures.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="code">{{ trans('cruds.procedure.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', '') }}">
                @if($errors->has('code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.procedure.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.procedure.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', '') }}">
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.procedure.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="document">{{ trans('cruds.procedure.fields.document') }}</label>
                <input class="form-control {{ $errors->has('document') ? 'is-invalid' : '' }}" type="text" name="document" id="document" value="{{ old('document', '') }}">
                @if($errors->has('document'))
                    <div class="invalid-feedback">
                        {{ $errors->first('document') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.procedure.fields.document_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="minimum_price">{{ trans('cruds.procedure.fields.minimum_price') }}</label>
                <input class="form-control {{ $errors->has('minimum_price') ? 'is-invalid' : '' }}" type="text" name="minimum_price" id="minimum_price" value="{{ old('minimum_price', '') }}">
                @if($errors->has('minimum_price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('minimum_price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.procedure.fields.minimum_price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="each_price">{{ trans('cruds.procedure.fields.each_price') }}</label>
                <input class="form-control {{ $errors->has('each_price') ? 'is-invalid' : '' }}" type="text" name="each_price" id="each_price" value="{{ old('each_price', '') }}">
                @if($errors->has('each_price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('each_price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.procedure.fields.each_price_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ old('archive', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.procedure.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <div class="invalid-feedback">
                        {{ $errors->first('archive') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.procedure.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.procedure.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', '') }}" step="1">
                @if($errors->has('revision'))
                    <div class="invalid-feedback">
                        {{ $errors->first('revision') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.procedure.fields.revision_helper') }}</span>
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