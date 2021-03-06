@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.destination.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.destinations.update", [$destination->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.destination.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $destination->code) }}" required>
                @if($errors->has('code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.destination.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $destination->name) }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="physical_address">{{ trans('cruds.destination.fields.physical_address') }}</label>
                <input class="form-control {{ $errors->has('physical_address') ? 'is-invalid' : '' }}" type="text" name="physical_address" id="physical_address" value="{{ old('physical_address', $destination->physical_address) }}">
                @if($errors->has('physical_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('physical_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.physical_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address_extension">{{ trans('cruds.destination.fields.address_extension') }}</label>
                <input class="form-control {{ $errors->has('address_extension') ? 'is-invalid' : '' }}" type="text" name="address_extension" id="address_extension" value="{{ old('address_extension', $destination->address_extension) }}">
                @if($errors->has('address_extension'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address_extension') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.address_extension_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="city">{{ trans('cruds.destination.fields.city') }}</label>
                <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', $destination->city) }}">
                @if($errors->has('city'))
                    <div class="invalid-feedback">
                        {{ $errors->first('city') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="state">{{ trans('cruds.destination.fields.state') }}</label>
                <input class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}" type="text" name="state" id="state" value="{{ old('state', $destination->state) }}">
                @if($errors->has('state'))
                    <div class="invalid-feedback">
                        {{ $errors->first('state') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.state_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="zip">{{ trans('cruds.destination.fields.zip') }}</label>
                <input class="form-control {{ $errors->has('zip') ? 'is-invalid' : '' }}" type="text" name="zip" id="zip" value="{{ old('zip', $destination->zip) }}">
                @if($errors->has('zip'))
                    <div class="invalid-feedback">
                        {{ $errors->first('zip') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.zip_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_code_id">{{ trans('cruds.destination.fields.customer_code') }}</label>
                <select class="form-control select2 {{ $errors->has('customer_code') ? 'is-invalid' : '' }}" name="customer_code_id" id="customer_code_id">
                    @foreach($customer_codes as $id => $customer_code)
                        <option value="{{ $id }}" {{ ($destination->customer_code ? $destination->customer_code->id : old('customer_code_id')) == $id ? 'selected' : '' }}>{{ $customer_code }}</option>
                    @endforeach
                </select>
                @if($errors->has('customer_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.customer_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_1">{{ trans('cruds.destination.fields.contact_1') }}</label>
                <input class="form-control {{ $errors->has('contact_1') ? 'is-invalid' : '' }}" type="text" name="contact_1" id="contact_1" value="{{ old('contact_1', $destination->contact_1) }}">
                @if($errors->has('contact_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.contact_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_phone">{{ trans('cruds.destination.fields.company_phone') }}</label>
                <input class="form-control {{ $errors->has('company_phone') ? 'is-invalid' : '' }}" type="text" name="company_phone" id="company_phone" value="{{ old('company_phone', $destination->company_phone) }}">
                @if($errors->has('company_phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.company_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone_1">{{ trans('cruds.destination.fields.phone_1') }}</label>
                <input class="form-control {{ $errors->has('phone_1') ? 'is-invalid' : '' }}" type="text" name="phone_1" id="phone_1" value="{{ old('phone_1', $destination->phone_1) }}">
                @if($errors->has('phone_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.phone_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="extension_1">{{ trans('cruds.destination.fields.extension_1') }}</label>
                <input class="form-control {{ $errors->has('extension_1') ? 'is-invalid' : '' }}" type="text" name="extension_1" id="extension_1" value="{{ old('extension_1', $destination->extension_1) }}">
                @if($errors->has('extension_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('extension_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.extension_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_2">{{ trans('cruds.destination.fields.contact_2') }}</label>
                <input class="form-control {{ $errors->has('contact_2') ? 'is-invalid' : '' }}" type="text" name="contact_2" id="contact_2" value="{{ old('contact_2', $destination->contact_2) }}">
                @if($errors->has('contact_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.contact_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone_2">{{ trans('cruds.destination.fields.phone_2') }}</label>
                <input class="form-control {{ $errors->has('phone_2') ? 'is-invalid' : '' }}" type="text" name="phone_2" id="phone_2" value="{{ old('phone_2', $destination->phone_2) }}">
                @if($errors->has('phone_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.phone_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="extension_2">{{ trans('cruds.destination.fields.extension_2') }}</label>
                <input class="form-control {{ $errors->has('extension_2') ? 'is-invalid' : '' }}" type="text" name="extension_2" id="extension_2" value="{{ old('extension_2', $destination->extension_2) }}">
                @if($errors->has('extension_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('extension_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.extension_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fax">{{ trans('cruds.destination.fields.fax') }}</label>
                <input class="form-control {{ $errors->has('fax') ? 'is-invalid' : '' }}" type="text" name="fax" id="fax" value="{{ old('fax', $destination->fax) }}">
                @if($errors->has('fax'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fax') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.fax_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.destination.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $destination->email) }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.destination.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $destination->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.note_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ $destination->archive || old('archive', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.destination.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <div class="invalid-feedback">
                        {{ $errors->first('archive') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.destination.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', $destination->revision) }}" step="1">
                @if($errors->has('revision'))
                    <div class="invalid-feedback">
                        {{ $errors->first('revision') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.destination.fields.revision_helper') }}</span>
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