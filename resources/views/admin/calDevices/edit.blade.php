@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.calDevice.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.cal-devices.update", [$calDevice->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.calDevice.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $calDevice->name) }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.calDevice.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.calDevice.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $calDevice->description) }}">
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.calDevice.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="serial_number">{{ trans('cruds.calDevice.fields.serial_number') }}</label>
                <input class="form-control {{ $errors->has('serial_number') ? 'is-invalid' : '' }}" type="text" name="serial_number" id="serial_number" value="{{ old('serial_number', $calDevice->serial_number) }}">
                @if($errors->has('serial_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('serial_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.calDevice.fields.serial_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="source_id">{{ trans('cruds.calDevice.fields.source') }}</label>
                <select class="form-control select2 {{ $errors->has('source') ? 'is-invalid' : '' }}" name="source_id" id="source_id">
                    @foreach($sources as $id => $source)
                        <option value="{{ $id }}" {{ ($calDevice->source ? $calDevice->source->id : old('source_id')) == $id ? 'selected' : '' }}>{{ $source }}</option>
                    @endforeach
                </select>
                @if($errors->has('source'))
                    <div class="invalid-feedback">
                        {{ $errors->first('source') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.calDevice.fields.source_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_id">{{ trans('cruds.calDevice.fields.type') }}</label>
                <select class="form-control select2 {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type_id" id="type_id">
                    @foreach($types as $id => $type)
                        <option value="{{ $id }}" {{ ($calDevice->type ? $calDevice->type->id : old('type_id')) == $id ? 'selected' : '' }}>{{ $type }}</option>
                    @endforeach
                </select>
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.calDevice.fields.type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="period_id">{{ trans('cruds.calDevice.fields.period') }}</label>
                <select class="form-control select2 {{ $errors->has('period') ? 'is-invalid' : '' }}" name="period_id" id="period_id">
                    @foreach($periods as $id => $period)
                        <option value="{{ $id }}" {{ ($calDevice->period ? $calDevice->period->id : old('period_id')) == $id ? 'selected' : '' }}>{{ $period }}</option>
                    @endforeach
                </select>
                @if($errors->has('period'))
                    <div class="invalid-feedback">
                        {{ $errors->first('period') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.calDevice.fields.period_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="location_id">{{ trans('cruds.calDevice.fields.location') }}</label>
                <select class="form-control select2 {{ $errors->has('location') ? 'is-invalid' : '' }}" name="location_id" id="location_id">
                    @foreach($locations as $id => $location)
                        <option value="{{ $id }}" {{ ($calDevice->location ? $calDevice->location->id : old('location_id')) == $id ? 'selected' : '' }}>{{ $location }}</option>
                    @endforeach
                </select>
                @if($errors->has('location'))
                    <div class="invalid-feedback">
                        {{ $errors->first('location') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.calDevice.fields.location_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="init_date">{{ trans('cruds.calDevice.fields.init_date') }}</label>
                <input class="form-control date {{ $errors->has('init_date') ? 'is-invalid' : '' }}" type="text" name="init_date" id="init_date" value="{{ old('init_date', $calDevice->init_date) }}">
                @if($errors->has('init_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('init_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.calDevice.fields.init_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="owner_id">{{ trans('cruds.calDevice.fields.owner') }}</label>
                <select class="form-control select2 {{ $errors->has('owner') ? 'is-invalid' : '' }}" name="owner_id" id="owner_id">
                    @foreach($owners as $id => $owner)
                        <option value="{{ $id }}" {{ ($calDevice->owner ? $calDevice->owner->id : old('owner_id')) == $id ? 'selected' : '' }}>{{ $owner }}</option>
                    @endforeach
                </select>
                @if($errors->has('owner'))
                    <div class="invalid-feedback">
                        {{ $errors->first('owner') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.calDevice.fields.owner_helper') }}</span>
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