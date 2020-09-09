@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.employee.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.employees.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.employee.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.employee.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', '') }}" required>
                @if($errors->has('code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.employee.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pin">{{ trans('cruds.employee.fields.pin') }}</label>
                <input class="form-control {{ $errors->has('pin') ? 'is-invalid' : '' }}" type="text" name="pin" id="pin" value="{{ old('pin', '') }}">
                @if($errors->has('pin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pin') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.pin_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="password">{{ trans('cruds.employee.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="text" name="password" id="password" value="{{ old('password', '') }}">
                @if($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.password_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('production') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="production" value="0">
                    <input class="form-check-input" type="checkbox" name="production" id="production" value="1" {{ old('production', 0) == 1 || old('production') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="production">{{ trans('cruds.employee.fields.production') }}</label>
                </div>
                @if($errors->has('production'))
                    <div class="invalid-feedback">
                        {{ $errors->first('production') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.production_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('supervisor') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="supervisor" value="0">
                    <input class="form-check-input" type="checkbox" name="supervisor" id="supervisor" value="1" {{ old('supervisor', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="supervisor">{{ trans('cruds.employee.fields.supervisor') }}</label>
                </div>
                @if($errors->has('supervisor'))
                    <div class="invalid-feedback">
                        {{ $errors->first('supervisor') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.supervisor_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('entering') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="entering" value="0">
                    <input class="form-check-input" type="checkbox" name="entering" id="entering" value="1" {{ old('entering', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="entering">{{ trans('cruds.employee.fields.entering') }}</label>
                </div>
                @if($errors->has('entering'))
                    <div class="invalid-feedback">
                        {{ $errors->first('entering') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.entering_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('shipping') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="shipping" value="0">
                    <input class="form-check-input" type="checkbox" name="shipping" id="shipping" value="1" {{ old('shipping', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="shipping">{{ trans('cruds.employee.fields.shipping') }}</label>
                </div>
                @if($errors->has('shipping'))
                    <div class="invalid-feedback">
                        {{ $errors->first('shipping') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.shipping_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('quoting') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="quoting" value="0">
                    <input class="form-check-input" type="checkbox" name="quoting" id="quoting" value="1" {{ old('quoting', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="quoting">{{ trans('cruds.employee.fields.quoting') }}</label>
                </div>
                @if($errors->has('quoting'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quoting') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.quoting_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('pricing') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="pricing" value="0">
                    <input class="form-check-input" type="checkbox" name="pricing" id="pricing" value="1" {{ old('pricing', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="pricing">{{ trans('cruds.employee.fields.pricing') }}</label>
                </div>
                @if($errors->has('pricing'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pricing') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.pricing_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('billing') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="billing" value="0">
                    <input class="form-check-input" type="checkbox" name="billing" id="billing" value="1" {{ old('billing', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="billing">{{ trans('cruds.employee.fields.billing') }}</label>
                </div>
                @if($errors->has('billing'))
                    <div class="invalid-feedback">
                        {{ $errors->first('billing') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.billing_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('administrator') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="administrator" value="0">
                    <input class="form-check-input" type="checkbox" name="administrator" id="administrator" value="1" {{ old('administrator', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="administrator">{{ trans('cruds.employee.fields.administrator') }}</label>
                </div>
                @if($errors->has('administrator'))
                    <div class="invalid-feedback">
                        {{ $errors->first('administrator') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.administrator_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.employee.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employee.fields.note_helper') }}</span>
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