@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.part.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.parts.update", [$part->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="number">{{ trans('cruds.part.fields.number') }}</label>
                <input class="form-control {{ $errors->has('number') ? 'is-invalid' : '' }}" type="text" name="number" id="number" value="{{ old('number', $part->number) }}">
                @if($errors->has('number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.part.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $part->description) }}">
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_code">{{ trans('cruds.part.fields.customer_code') }}</label>
                <input class="form-control {{ $errors->has('customer_code') ? 'is-invalid' : '' }}" type="text" name="customer_code" id="customer_code" value="{{ old('customer_code', $part->customer_code) }}">
                @if($errors->has('customer_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.customer_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_name">{{ trans('cruds.part.fields.customer_name') }}</label>
                <input class="form-control {{ $errors->has('customer_name') ? 'is-invalid' : '' }}" type="text" name="customer_name" id="customer_name" value="{{ old('customer_name', $part->customer_name) }}">
                @if($errors->has('customer_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.customer_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="process_code">{{ trans('cruds.part.fields.process_code') }}</label>
                <input class="form-control {{ $errors->has('process_code') ? 'is-invalid' : '' }}" type="text" name="process_code" id="process_code" value="{{ old('process_code', $part->process_code) }}">
                @if($errors->has('process_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('process_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.process_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="method_code">{{ trans('cruds.part.fields.method_code') }}</label>
                <input class="form-control {{ $errors->has('method_code') ? 'is-invalid' : '' }}" type="text" name="method_code" id="method_code" value="{{ old('method_code', $part->method_code) }}">
                @if($errors->has('method_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('method_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.method_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price">{{ trans('cruds.part.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', $part->price) }}" step="0.01">
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price_code">{{ trans('cruds.part.fields.price_code') }}</label>
                <input class="form-control {{ $errors->has('price_code') ? 'is-invalid' : '' }}" type="text" name="price_code" id="price_code" value="{{ old('price_code', $part->price_code) }}">
                @if($errors->has('price_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.price_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price_break">{{ trans('cruds.part.fields.price_break') }}</label>
                <input class="form-control {{ $errors->has('price_break') ? 'is-invalid' : '' }}" type="number" name="price_break" id="price_break" value="{{ old('price_break', $part->price_break) }}" step="0.01">
                @if($errors->has('price_break'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price_break') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.price_break_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quantity_price_break">{{ trans('cruds.part.fields.quantity_price_break') }}</label>
                <input class="form-control {{ $errors->has('quantity_price_break') ? 'is-invalid' : '' }}" type="text" name="quantity_price_break" id="quantity_price_break" value="{{ old('quantity_price_break', $part->quantity_price_break) }}">
                @if($errors->has('quantity_price_break'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quantity_price_break') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.quantity_price_break_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_code">{{ trans('cruds.part.fields.unit_code') }}</label>
                <input class="form-control {{ $errors->has('unit_code') ? 'is-invalid' : '' }}" type="text" name="unit_code" id="unit_code" value="{{ old('unit_code', $part->unit_code) }}">
                @if($errors->has('unit_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('unit_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="minimum_lot_charge">{{ trans('cruds.part.fields.minimum_lot_charge') }}</label>
                <input class="form-control {{ $errors->has('minimum_lot_charge') ? 'is-invalid' : '' }}" type="number" name="minimum_lot_charge" id="minimum_lot_charge" value="{{ old('minimum_lot_charge', $part->minimum_lot_charge) }}" step="0.01">
                @if($errors->has('minimum_lot_charge'))
                    <div class="invalid-feedback">
                        {{ $errors->first('minimum_lot_charge') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.minimum_lot_charge_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="minimum_line_charge">{{ trans('cruds.part.fields.minimum_line_charge') }}</label>
                <input class="form-control {{ $errors->has('minimum_line_charge') ? 'is-invalid' : '' }}" type="number" name="minimum_line_charge" id="minimum_line_charge" value="{{ old('minimum_line_charge', $part->minimum_line_charge) }}" step="0.01">
                @if($errors->has('minimum_line_charge'))
                    <div class="invalid-feedback">
                        {{ $errors->first('minimum_line_charge') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.minimum_line_charge_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quote">{{ trans('cruds.part.fields.quote') }}</label>
                <input class="form-control {{ $errors->has('quote') ? 'is-invalid' : '' }}" type="number" name="quote" id="quote" value="{{ old('quote', $part->quote) }}" step="1">
                @if($errors->has('quote'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quote') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.quote_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('certify') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="certify" value="0">
                    <input class="form-check-input" type="checkbox" name="certify" id="certify" value="1" {{ $part->certify || old('certify', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="certify">{{ trans('cruds.part.fields.certify') }}</label>
                </div>
                @if($errors->has('certify'))
                    <div class="invalid-feedback">
                        {{ $errors->first('certify') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.certify_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="specification">{{ trans('cruds.part.fields.specification') }}</label>
                <input class="form-control {{ $errors->has('specification') ? 'is-invalid' : '' }}" type="text" name="specification" id="specification" value="{{ old('specification', $part->specification) }}">
                @if($errors->has('specification'))
                    <div class="invalid-feedback">
                        {{ $errors->first('specification') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.specification_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('bake') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="bake" value="0">
                    <input class="form-check-input" type="checkbox" name="bake" id="bake" value="1" {{ $part->bake || old('bake', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="bake">{{ trans('cruds.part.fields.bake') }}</label>
                </div>
                @if($errors->has('bake'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bake') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.bake_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_time_pre">{{ trans('cruds.part.fields.baking_time_pre') }}</label>
                <input class="form-control {{ $errors->has('baking_time_pre') ? 'is-invalid' : '' }}" type="text" name="baking_time_pre" id="baking_time_pre" value="{{ old('baking_time_pre', $part->baking_time_pre) }}">
                @if($errors->has('baking_time_pre'))
                    <div class="invalid-feedback">
                        {{ $errors->first('baking_time_pre') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.baking_time_pre_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_temp_pre">{{ trans('cruds.part.fields.baking_temp_pre') }}</label>
                <input class="form-control {{ $errors->has('baking_temp_pre') ? 'is-invalid' : '' }}" type="text" name="baking_temp_pre" id="baking_temp_pre" value="{{ old('baking_temp_pre', $part->baking_temp_pre) }}">
                @if($errors->has('baking_temp_pre'))
                    <div class="invalid-feedback">
                        {{ $errors->first('baking_temp_pre') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.baking_temp_pre_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_time_post">{{ trans('cruds.part.fields.baking_time_post') }}</label>
                <input class="form-control {{ $errors->has('baking_time_post') ? 'is-invalid' : '' }}" type="text" name="baking_time_post" id="baking_time_post" value="{{ old('baking_time_post', $part->baking_time_post) }}">
                @if($errors->has('baking_time_post'))
                    <div class="invalid-feedback">
                        {{ $errors->first('baking_time_post') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.baking_time_post_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="baking_temp_post">{{ trans('cruds.part.fields.baking_temp_post') }}</label>
                <input class="form-control {{ $errors->has('baking_temp_post') ? 'is-invalid' : '' }}" type="text" name="baking_temp_post" id="baking_temp_post" value="{{ old('baking_temp_post', $part->baking_temp_post) }}">
                @if($errors->has('baking_temp_post'))
                    <div class="invalid-feedback">
                        {{ $errors->first('baking_temp_post') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.baking_temp_post_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="procedure_code">{{ trans('cruds.part.fields.procedure_code') }}</label>
                <input class="form-control {{ $errors->has('procedure_code') ? 'is-invalid' : '' }}" type="text" name="procedure_code" id="procedure_code" value="{{ old('procedure_code', $part->procedure_code) }}">
                @if($errors->has('procedure_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('procedure_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.procedure_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="material">{{ trans('cruds.part.fields.material') }}</label>
                <input class="form-control {{ $errors->has('material') ? 'is-invalid' : '' }}" type="text" name="material" id="material" value="{{ old('material', $part->material) }}">
                @if($errors->has('material'))
                    <div class="invalid-feedback">
                        {{ $errors->first('material') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.material_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="material_name">{{ trans('cruds.part.fields.material_name') }}</label>
                <input class="form-control {{ $errors->has('material_name') ? 'is-invalid' : '' }}" type="text" name="material_name" id="material_name" value="{{ old('material_name', $part->material_name) }}">
                @if($errors->has('material_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('material_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.material_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="material_condition">{{ trans('cruds.part.fields.material_condition') }}</label>
                <input class="form-control {{ $errors->has('material_condition') ? 'is-invalid' : '' }}" type="text" name="material_condition" id="material_condition" value="{{ old('material_condition', $part->material_condition) }}">
                @if($errors->has('material_condition'))
                    <div class="invalid-feedback">
                        {{ $errors->first('material_condition') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.material_condition_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="thickness_minimum">{{ trans('cruds.part.fields.thickness_minimum') }}</label>
                <input class="form-control {{ $errors->has('thickness_minimum') ? 'is-invalid' : '' }}" type="number" name="thickness_minimum" id="thickness_minimum" value="{{ old('thickness_minimum', $part->thickness_minimum) }}" step="0.000001">
                @if($errors->has('thickness_minimum'))
                    <div class="invalid-feedback">
                        {{ $errors->first('thickness_minimum') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.thickness_minimum_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="thickness_maximum">{{ trans('cruds.part.fields.thickness_maximum') }}</label>
                <input class="form-control {{ $errors->has('thickness_maximum') ? 'is-invalid' : '' }}" type="number" name="thickness_maximum" id="thickness_maximum" value="{{ old('thickness_maximum', $part->thickness_maximum) }}" step="0.000001">
                @if($errors->has('thickness_maximum'))
                    <div class="invalid-feedback">
                        {{ $errors->first('thickness_maximum') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.thickness_maximum_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="thickness_unit_code">{{ trans('cruds.part.fields.thickness_unit_code') }}</label>
                <input class="form-control {{ $errors->has('thickness_unit_code') ? 'is-invalid' : '' }}" type="text" name="thickness_unit_code" id="thickness_unit_code" value="{{ old('thickness_unit_code', $part->thickness_unit_code) }}">
                @if($errors->has('thickness_unit_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('thickness_unit_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.thickness_unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="surface_area">{{ trans('cruds.part.fields.surface_area') }}</label>
                <input class="form-control {{ $errors->has('surface_area') ? 'is-invalid' : '' }}" type="number" name="surface_area" id="surface_area" value="{{ old('surface_area', $part->surface_area) }}" step="0.01">
                @if($errors->has('surface_area'))
                    <div class="invalid-feedback">
                        {{ $errors->first('surface_area') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.surface_area_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="surface_area_unit_code">{{ trans('cruds.part.fields.surface_area_unit_code') }}</label>
                <input class="form-control {{ $errors->has('surface_area_unit_code') ? 'is-invalid' : '' }}" type="text" name="surface_area_unit_code" id="surface_area_unit_code" value="{{ old('surface_area_unit_code', $part->surface_area_unit_code) }}">
                @if($errors->has('surface_area_unit_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('surface_area_unit_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.surface_area_unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="weight">{{ trans('cruds.part.fields.weight') }}</label>
                <input class="form-control {{ $errors->has('weight') ? 'is-invalid' : '' }}" type="number" name="weight" id="weight" value="{{ old('weight', $part->weight) }}" step="0.01">
                @if($errors->has('weight'))
                    <div class="invalid-feedback">
                        {{ $errors->first('weight') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.weight_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="weight_unit_code">{{ trans('cruds.part.fields.weight_unit_code') }}</label>
                <input class="form-control {{ $errors->has('weight_unit_code') ? 'is-invalid' : '' }}" type="text" name="weight_unit_code" id="weight_unit_code" value="{{ old('weight_unit_code', $part->weight_unit_code) }}">
                @if($errors->has('weight_unit_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('weight_unit_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.weight_unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="length">{{ trans('cruds.part.fields.length') }}</label>
                <input class="form-control {{ $errors->has('length') ? 'is-invalid' : '' }}" type="number" name="length" id="length" value="{{ old('length', $part->length) }}" step="0.01">
                @if($errors->has('length'))
                    <div class="invalid-feedback">
                        {{ $errors->first('length') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.length_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="width">{{ trans('cruds.part.fields.width') }}</label>
                <input class="form-control {{ $errors->has('width') ? 'is-invalid' : '' }}" type="number" name="width" id="width" value="{{ old('width', $part->width) }}" step="0.01">
                @if($errors->has('width'))
                    <div class="invalid-feedback">
                        {{ $errors->first('width') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.width_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="height">{{ trans('cruds.part.fields.height') }}</label>
                <input class="form-control {{ $errors->has('height') ? 'is-invalid' : '' }}" type="number" name="height" id="height" value="{{ old('height', $part->height) }}" step="0.01">
                @if($errors->has('height'))
                    <div class="invalid-feedback">
                        {{ $errors->first('height') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.height_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dimension_unit_code">{{ trans('cruds.part.fields.dimension_unit_code') }}</label>
                <input class="form-control {{ $errors->has('dimension_unit_code') ? 'is-invalid' : '' }}" type="text" name="dimension_unit_code" id="dimension_unit_code" value="{{ old('dimension_unit_code', $part->dimension_unit_code) }}">
                @if($errors->has('dimension_unit_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dimension_unit_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.dimension_unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="material_thickness">{{ trans('cruds.part.fields.material_thickness') }}</label>
                <input class="form-control {{ $errors->has('material_thickness') ? 'is-invalid' : '' }}" type="number" name="material_thickness" id="material_thickness" value="{{ old('material_thickness', $part->material_thickness) }}" step="0.0001">
                @if($errors->has('material_thickness'))
                    <div class="invalid-feedback">
                        {{ $errors->first('material_thickness') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.material_thickness_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="material_thickness_unit_code">{{ trans('cruds.part.fields.material_thickness_unit_code') }}</label>
                <input class="form-control {{ $errors->has('material_thickness_unit_code') ? 'is-invalid' : '' }}" type="text" name="material_thickness_unit_code" id="material_thickness_unit_code" value="{{ old('material_thickness_unit_code', $part->material_thickness_unit_code) }}">
                @if($errors->has('material_thickness_unit_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('material_thickness_unit_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.material_thickness_unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.part.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $part->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.note_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="special_requirement">{{ trans('cruds.part.fields.special_requirement') }}</label>
                <textarea class="form-control {{ $errors->has('special_requirement') ? 'is-invalid' : '' }}" name="special_requirement" id="special_requirement">{{ old('special_requirement', $part->special_requirement) }}</textarea>
                @if($errors->has('special_requirement'))
                    <div class="invalid-feedback">
                        {{ $errors->first('special_requirement') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.special_requirement_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="operator_note">{{ trans('cruds.part.fields.operator_note') }}</label>
                <textarea class="form-control {{ $errors->has('operator_note') ? 'is-invalid' : '' }}" name="operator_note" id="operator_note">{{ old('operator_note', $part->operator_note) }}</textarea>
                @if($errors->has('operator_note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('operator_note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.operator_note_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_1">{{ trans('cruds.part.fields.quality_check_1') }}</label>
                <input class="form-control {{ $errors->has('quality_check_1') ? 'is-invalid' : '' }}" type="number" name="quality_check_1" id="quality_check_1" value="{{ old('quality_check_1', $part->quality_check_1) }}" step="1">
                @if($errors->has('quality_check_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quality_check_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.quality_check_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_2">{{ trans('cruds.part.fields.quality_check_2') }}</label>
                <input class="form-control {{ $errors->has('quality_check_2') ? 'is-invalid' : '' }}" type="number" name="quality_check_2" id="quality_check_2" value="{{ old('quality_check_2', $part->quality_check_2) }}" step="1">
                @if($errors->has('quality_check_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quality_check_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.quality_check_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_3">{{ trans('cruds.part.fields.quality_check_3') }}</label>
                <input class="form-control {{ $errors->has('quality_check_3') ? 'is-invalid' : '' }}" type="number" name="quality_check_3" id="quality_check_3" value="{{ old('quality_check_3', $part->quality_check_3) }}" step="1">
                @if($errors->has('quality_check_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quality_check_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.quality_check_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_4">{{ trans('cruds.part.fields.quality_check_4') }}</label>
                <input class="form-control {{ $errors->has('quality_check_4') ? 'is-invalid' : '' }}" type="number" name="quality_check_4" id="quality_check_4" value="{{ old('quality_check_4', $part->quality_check_4) }}" step="1">
                @if($errors->has('quality_check_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quality_check_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.quality_check_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_5">{{ trans('cruds.part.fields.quality_check_5') }}</label>
                <input class="form-control {{ $errors->has('quality_check_5') ? 'is-invalid' : '' }}" type="number" name="quality_check_5" id="quality_check_5" value="{{ old('quality_check_5', $part->quality_check_5) }}" step="1">
                @if($errors->has('quality_check_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quality_check_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.quality_check_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quality_check_6">{{ trans('cruds.part.fields.quality_check_6') }}</label>
                <input class="form-control {{ $errors->has('quality_check_6') ? 'is-invalid' : '' }}" type="number" name="quality_check_6" id="quality_check_6" value="{{ old('quality_check_6', $part->quality_check_6) }}" step="1">
                @if($errors->has('quality_check_6'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quality_check_6') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.quality_check_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="image_count">{{ trans('cruds.part.fields.image_count') }}</label>
                <input class="form-control {{ $errors->has('image_count') ? 'is-invalid' : '' }}" type="number" name="image_count" id="image_count" value="{{ old('image_count', $part->image_count) }}" step="1">
                @if($errors->has('image_count'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image_count') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.image_count_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="session">{{ trans('cruds.part.fields.session') }}</label>
                <input class="form-control {{ $errors->has('session') ? 'is-invalid' : '' }}" type="text" name="session" id="session" value="{{ old('session', $part->session) }}">
                @if($errors->has('session'))
                    <div class="invalid-feedback">
                        {{ $errors->first('session') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.session_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ $part->archive || old('archive', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.part.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <div class="invalid-feedback">
                        {{ $errors->first('archive') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="revision">{{ trans('cruds.part.fields.revision') }}</label>
                <input class="form-control {{ $errors->has('revision') ? 'is-invalid' : '' }}" type="number" name="revision" id="revision" value="{{ old('revision', $part->revision) }}" step="1">
                @if($errors->has('revision'))
                    <div class="invalid-feedback">
                        {{ $errors->first('revision') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.part.fields.revision_helper') }}</span>
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