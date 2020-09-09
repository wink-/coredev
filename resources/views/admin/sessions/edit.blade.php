@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.session.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sessions.update", [$session->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="session">{{ trans('cruds.session.fields.session') }}</label>
                <input class="form-control {{ $errors->has('session') ? 'is-invalid' : '' }}" type="text" name="session" id="session" value="{{ old('session', $session->session) }}">
                @if($errors->has('session'))
                    <div class="invalid-feedback">
                        {{ $errors->first('session') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.session.fields.session_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="jwt">{{ trans('cruds.session.fields.jwt') }}</label>
                <input class="form-control {{ $errors->has('jwt') ? 'is-invalid' : '' }}" type="text" name="jwt" id="jwt" value="{{ old('jwt', $session->jwt) }}">
                @if($errors->has('jwt'))
                    <div class="invalid-feedback">
                        {{ $errors->first('jwt') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.session.fields.jwt_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="active" value="0">
                    <input class="form-check-input" type="checkbox" name="active" id="active" value="1" {{ $session->active || old('active', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="active">{{ trans('cruds.session.fields.active') }}</label>
                </div>
                @if($errors->has('active'))
                    <div class="invalid-feedback">
                        {{ $errors->first('active') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.session.fields.active_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="key_strokes">{{ trans('cruds.session.fields.key_strokes') }}</label>
                <input class="form-control {{ $errors->has('key_strokes') ? 'is-invalid' : '' }}" type="text" name="key_strokes" id="key_strokes" value="{{ old('key_strokes', $session->key_strokes) }}">
                @if($errors->has('key_strokes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('key_strokes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.session.fields.key_strokes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user">{{ trans('cruds.session.fields.user') }}</label>
                <input class="form-control {{ $errors->has('user') ? 'is-invalid' : '' }}" type="text" name="user" id="user" value="{{ old('user', $session->user) }}">
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.session.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.session.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $session->email) }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.session.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.session.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', $session->revision) }}" step="1">
                @if($errors->has('revision'))
                    <div class="invalid-feedback">
                        {{ $errors->first('revision') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.session.fields.revision_helper') }}</span>
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