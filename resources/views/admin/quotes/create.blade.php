@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.quote.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.quotes.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="customer_id">{{ trans('cruds.quote.fields.customer') }}</label>
                <select class="form-control select2 {{ $errors->has('customer') ? 'is-invalid' : '' }}" name="customer_id" id="customer_id" required>
                    @foreach($customers as $id => $customer)
                        <option value="{{ $id }}" {{ old('customer_id') == $id ? 'selected' : '' }}>{{ $customer }}</option>
                    @endforeach
                </select>
                @if($errors->has('customer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.customer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_code">{{ trans('cruds.quote.fields.customer_code') }}</label>
                <input class="form-control {{ $errors->has('customer_code') ? 'is-invalid' : '' }}" type="text" name="customer_code" id="customer_code" value="{{ old('customer_code', '') }}">
                @if($errors->has('customer_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.customer_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_id">{{ trans('cruds.quote.fields.contact') }}</label>
                <select class="form-control select2 {{ $errors->has('contact') ? 'is-invalid' : '' }}" name="contact_id" id="contact_id">
                    @foreach($contacts as $id => $contact)
                        <option value="{{ $id }}" {{ old('contact_id') == $id ? 'selected' : '' }}>{{ $contact }}</option>
                    @endforeach
                </select>
                @if($errors->has('contact'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.contact_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="part_number">{{ trans('cruds.quote.fields.part_number') }}</label>
                <input class="form-control {{ $errors->has('part_number') ? 'is-invalid' : '' }}" type="text" name="part_number" id="part_number" value="{{ old('part_number', '') }}" required>
                @if($errors->has('part_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('part_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.part_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="part_description">{{ trans('cruds.quote.fields.part_description') }}</label>
                <input class="form-control {{ $errors->has('part_description') ? 'is-invalid' : '' }}" type="text" name="part_description" id="part_description" value="{{ old('part_description', '') }}">
                @if($errors->has('part_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('part_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.part_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="specification">{{ trans('cruds.quote.fields.specification') }}</label>
                <input class="form-control {{ $errors->has('specification') ? 'is-invalid' : '' }}" type="text" name="specification" id="specification" value="{{ old('specification', '') }}">
                @if($errors->has('specification'))
                    <div class="invalid-feedback">
                        {{ $errors->first('specification') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.specification_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="material">{{ trans('cruds.quote.fields.material') }}</label>
                <input class="form-control {{ $errors->has('material') ? 'is-invalid' : '' }}" type="text" name="material" id="material" value="{{ old('material', '') }}">
                @if($errors->has('material'))
                    <div class="invalid-feedback">
                        {{ $errors->first('material') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.material_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="process_id">{{ trans('cruds.quote.fields.process') }}</label>
                <select class="form-control select2 {{ $errors->has('process') ? 'is-invalid' : '' }}" name="process_id" id="process_id" required>
                    @foreach($processes as $id => $process)
                        <option value="{{ $id }}" {{ old('process_id') == $id ? 'selected' : '' }}>{{ $process }}</option>
                    @endforeach
                </select>
                @if($errors->has('process'))
                    <div class="invalid-feedback">
                        {{ $errors->first('process') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.process_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="method_code">{{ trans('cruds.quote.fields.method_code') }}</label>
                <input class="form-control {{ $errors->has('method_code') ? 'is-invalid' : '' }}" type="text" name="method_code" id="method_code" value="{{ old('method_code', '') }}">
                @if($errors->has('method_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('method_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.method_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="method">{{ trans('cruds.quote.fields.method') }}</label>
                <input class="form-control {{ $errors->has('method') ? 'is-invalid' : '' }}" type="text" name="method" id="method" value="{{ old('method', '') }}">
                @if($errors->has('method'))
                    <div class="invalid-feedback">
                        {{ $errors->first('method') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.method_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quantity_minimum">{{ trans('cruds.quote.fields.quantity_minimum') }}</label>
                <input class="form-control {{ $errors->has('quantity_minimum') ? 'is-invalid' : '' }}" type="text" name="quantity_minimum" id="quantity_minimum" value="{{ old('quantity_minimum', '') }}">
                @if($errors->has('quantity_minimum'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quantity_minimum') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.quantity_minimum_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quantity_maximum">{{ trans('cruds.quote.fields.quantity_maximum') }}</label>
                <input class="form-control {{ $errors->has('quantity_maximum') ? 'is-invalid' : '' }}" type="text" name="quantity_maximum" id="quantity_maximum" value="{{ old('quantity_maximum', '') }}">
                @if($errors->has('quantity_maximum'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quantity_maximum') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.quantity_maximum_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="price">{{ trans('cruds.quote.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', '') }}" step="0.01" required>
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="units">{{ trans('cruds.quote.fields.units') }}</label>
                <input class="form-control {{ $errors->has('units') ? 'is-invalid' : '' }}" type="text" name="units" id="units" value="{{ old('units', '') }}">
                @if($errors->has('units'))
                    <div class="invalid-feedback">
                        {{ $errors->first('units') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.units_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="minimum_lot_charge">{{ trans('cruds.quote.fields.minimum_lot_charge') }}</label>
                <input class="form-control {{ $errors->has('minimum_lot_charge') ? 'is-invalid' : '' }}" type="number" name="minimum_lot_charge" id="minimum_lot_charge" value="{{ old('minimum_lot_charge', '') }}" step="0.01" required>
                @if($errors->has('minimum_lot_charge'))
                    <div class="invalid-feedback">
                        {{ $errors->first('minimum_lot_charge') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.minimum_lot_charge_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quantity_price_break">{{ trans('cruds.quote.fields.quantity_price_break') }}</label>
                <input class="form-control {{ $errors->has('quantity_price_break') ? 'is-invalid' : '' }}" type="number" name="quantity_price_break" id="quantity_price_break" value="{{ old('quantity_price_break', '') }}" step="1">
                @if($errors->has('quantity_price_break'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quantity_price_break') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.quantity_price_break_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price_break">{{ trans('cruds.quote.fields.price_break') }}</label>
                <input class="form-control {{ $errors->has('price_break') ? 'is-invalid' : '' }}" type="number" name="price_break" id="price_break" value="{{ old('price_break', '') }}" step="0.01">
                @if($errors->has('price_break'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price_break') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.price_break_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="weight">{{ trans('cruds.quote.fields.weight') }}</label>
                <input class="form-control {{ $errors->has('weight') ? 'is-invalid' : '' }}" type="text" name="weight" id="weight" value="{{ old('weight', '') }}">
                @if($errors->has('weight'))
                    <div class="invalid-feedback">
                        {{ $errors->first('weight') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.weight_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="surface_area">{{ trans('cruds.quote.fields.surface_area') }}</label>
                <input class="form-control {{ $errors->has('surface_area') ? 'is-invalid' : '' }}" type="text" name="surface_area" id="surface_area" value="{{ old('surface_area', '') }}">
                @if($errors->has('surface_area'))
                    <div class="invalid-feedback">
                        {{ $errors->first('surface_area') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.surface_area_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="thickness_minimum">{{ trans('cruds.quote.fields.thickness_minimum') }}</label>
                <input class="form-control {{ $errors->has('thickness_minimum') ? 'is-invalid' : '' }}" type="text" name="thickness_minimum" id="thickness_minimum" value="{{ old('thickness_minimum', '') }}">
                @if($errors->has('thickness_minimum'))
                    <div class="invalid-feedback">
                        {{ $errors->first('thickness_minimum') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.thickness_minimum_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="thickness_maximum">{{ trans('cruds.quote.fields.thickness_maximum') }}</label>
                <input class="form-control {{ $errors->has('thickness_maximum') ? 'is-invalid' : '' }}" type="text" name="thickness_maximum" id="thickness_maximum" value="{{ old('thickness_maximum', '') }}">
                @if($errors->has('thickness_maximum'))
                    <div class="invalid-feedback">
                        {{ $errors->first('thickness_maximum') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.thickness_maximum_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="notes">{{ trans('cruds.quote.fields.notes') }}</label>
                <textarea class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" id="notes">{{ old('notes') }}</textarea>
                @if($errors->has('notes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('notes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.notes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="comments">{{ trans('cruds.quote.fields.comments') }}</label>
                <textarea class="form-control {{ $errors->has('comments') ? 'is-invalid' : '' }}" name="comments" id="comments">{{ old('comments') }}</textarea>
                @if($errors->has('comments'))
                    <div class="invalid-feedback">
                        {{ $errors->first('comments') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.comments_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('baking') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="baking" value="0">
                    <input class="form-check-input" type="checkbox" name="baking" id="baking" value="1" {{ old('baking', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="baking">{{ trans('cruds.quote.fields.baking') }}</label>
                </div>
                @if($errors->has('baking'))
                    <div class="invalid-feedback">
                        {{ $errors->first('baking') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.baking_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_time_pre">{{ trans('cruds.quote.fields.baking_time_pre') }}</label>
                <input class="form-control {{ $errors->has('baking_time_pre') ? 'is-invalid' : '' }}" type="text" name="baking_time_pre" id="baking_time_pre" value="{{ old('baking_time_pre', '') }}">
                @if($errors->has('baking_time_pre'))
                    <div class="invalid-feedback">
                        {{ $errors->first('baking_time_pre') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.baking_time_pre_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_temp_pre">{{ trans('cruds.quote.fields.baking_temp_pre') }}</label>
                <input class="form-control {{ $errors->has('baking_temp_pre') ? 'is-invalid' : '' }}" type="text" name="baking_temp_pre" id="baking_temp_pre" value="{{ old('baking_temp_pre', '') }}">
                @if($errors->has('baking_temp_pre'))
                    <div class="invalid-feedback">
                        {{ $errors->first('baking_temp_pre') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.baking_temp_pre_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_time_post">{{ trans('cruds.quote.fields.baking_time_post') }}</label>
                <input class="form-control {{ $errors->has('baking_time_post') ? 'is-invalid' : '' }}" type="text" name="baking_time_post" id="baking_time_post" value="{{ old('baking_time_post', '') }}">
                @if($errors->has('baking_time_post'))
                    <div class="invalid-feedback">
                        {{ $errors->first('baking_time_post') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.baking_time_post_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_temp_post">{{ trans('cruds.quote.fields.baking_temp_post') }}</label>
                <input class="form-control {{ $errors->has('baking_temp_post') ? 'is-invalid' : '' }}" type="text" name="baking_temp_post" id="baking_temp_post" value="{{ old('baking_temp_post', '') }}">
                @if($errors->has('baking_temp_post'))
                    <div class="invalid-feedback">
                        {{ $errors->first('baking_temp_post') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.baking_temp_post_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bake_notes">{{ trans('cruds.quote.fields.bake_notes') }}</label>
                <input class="form-control {{ $errors->has('bake_notes') ? 'is-invalid' : '' }}" type="text" name="bake_notes" id="bake_notes" value="{{ old('bake_notes', '') }}">
                @if($errors->has('bake_notes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bake_notes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.bake_notes_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('blasting') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="blasting" value="0">
                    <input class="form-check-input" type="checkbox" name="blasting" id="blasting" value="1" {{ old('blasting', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="blasting">{{ trans('cruds.quote.fields.blasting') }}</label>
                </div>
                @if($errors->has('blasting'))
                    <div class="invalid-feedback">
                        {{ $errors->first('blasting') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.blasting_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="blast_notes">{{ trans('cruds.quote.fields.blast_notes') }}</label>
                <input class="form-control {{ $errors->has('blast_notes') ? 'is-invalid' : '' }}" type="text" name="blast_notes" id="blast_notes" value="{{ old('blast_notes', '') }}">
                @if($errors->has('blast_notes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('blast_notes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.blast_notes_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('masking') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="masking" value="0">
                    <input class="form-check-input" type="checkbox" name="masking" id="masking" value="1" {{ old('masking', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="masking">{{ trans('cruds.quote.fields.masking') }}</label>
                </div>
                @if($errors->has('masking'))
                    <div class="invalid-feedback">
                        {{ $errors->first('masking') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.masking_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mask_notes">{{ trans('cruds.quote.fields.mask_notes') }}</label>
                <input class="form-control {{ $errors->has('mask_notes') ? 'is-invalid' : '' }}" type="text" name="mask_notes" id="mask_notes" value="{{ old('mask_notes', '') }}">
                @if($errors->has('mask_notes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mask_notes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.mask_notes_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('testing') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="testing" value="0">
                    <input class="form-check-input" type="checkbox" name="testing" id="testing" value="1" {{ old('testing', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="testing">{{ trans('cruds.quote.fields.testing') }}</label>
                </div>
                @if($errors->has('testing'))
                    <div class="invalid-feedback">
                        {{ $errors->first('testing') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.testing_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="test_notes">{{ trans('cruds.quote.fields.test_notes') }}</label>
                <input class="form-control {{ $errors->has('test_notes') ? 'is-invalid' : '' }}" type="text" name="test_notes" id="test_notes" value="{{ old('test_notes', '') }}">
                @if($errors->has('test_notes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('test_notes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.test_notes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.quote.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $user)
                        <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $user }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ old('archive', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.quote.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <div class="invalid-feedback">
                        {{ $errors->first('archive') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.quote.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', '') }}" step="1">
                @if($errors->has('revision'))
                    <div class="invalid-feedback">
                        {{ $errors->first('revision') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quote.fields.revision_helper') }}</span>
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