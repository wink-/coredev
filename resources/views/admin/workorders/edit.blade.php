@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.workorder.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.workorders.update", [$workorder->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="customer_code">{{ trans('cruds.workorder.fields.customer_code') }}</label>
                <input class="form-control {{ $errors->has('customer_code') ? 'is-invalid' : '' }}" type="text" name="customer_code" id="customer_code" value="{{ old('customer_code', $workorder->customer_code) }}" required>
                @if($errors->has('customer_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.customer_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="part_id">{{ trans('cruds.workorder.fields.part') }}</label>
                <select class="form-control select2 {{ $errors->has('part') ? 'is-invalid' : '' }}" name="part_id" id="part_id" required>
                    @foreach($parts as $id => $part)
                        <option value="{{ $id }}" {{ ($workorder->part ? $workorder->part->id : old('part_id')) == $id ? 'selected' : '' }}>{{ $part }}</option>
                    @endforeach
                </select>
                @if($errors->has('part'))
                    <div class="invalid-feedback">
                        {{ $errors->first('part') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.part_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="part_number">{{ trans('cruds.workorder.fields.part_number') }}</label>
                <input class="form-control {{ $errors->has('part_number') ? 'is-invalid' : '' }}" type="text" name="part_number" id="part_number" value="{{ old('part_number', $workorder->part_number) }}">
                @if($errors->has('part_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('part_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.part_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="process_code">{{ trans('cruds.workorder.fields.process_code') }}</label>
                <input class="form-control {{ $errors->has('process_code') ? 'is-invalid' : '' }}" type="text" name="process_code" id="process_code" value="{{ old('process_code', $workorder->process_code) }}">
                @if($errors->has('process_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('process_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.process_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price">{{ trans('cruds.workorder.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', $workorder->price) }}" step="0.01">
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price_code">{{ trans('cruds.workorder.fields.price_code') }}</label>
                <input class="form-control {{ $errors->has('price_code') ? 'is-invalid' : '' }}" type="text" name="price_code" id="price_code" value="{{ old('price_code', $workorder->price_code) }}">
                @if($errors->has('price_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.price_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_received">{{ trans('cruds.workorder.fields.date_received') }}</label>
                <input class="form-control date {{ $errors->has('date_received') ? 'is-invalid' : '' }}" type="text" name="date_received" id="date_received" value="{{ old('date_received', $workorder->date_received) }}">
                @if($errors->has('date_received'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_received') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.date_received_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_required">{{ trans('cruds.workorder.fields.date_required') }}</label>
                <input class="form-control date {{ $errors->has('date_required') ? 'is-invalid' : '' }}" type="text" name="date_required" id="date_required" value="{{ old('date_required', $workorder->date_required) }}">
                @if($errors->has('date_required'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_required') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.date_required_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_purchase_order">{{ trans('cruds.workorder.fields.customer_purchase_order') }}</label>
                <input class="form-control {{ $errors->has('customer_purchase_order') ? 'is-invalid' : '' }}" type="text" name="customer_purchase_order" id="customer_purchase_order" value="{{ old('customer_purchase_order', $workorder->customer_purchase_order) }}">
                @if($errors->has('customer_purchase_order'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer_purchase_order') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.customer_purchase_order_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_packing_list">{{ trans('cruds.workorder.fields.customer_packing_list') }}</label>
                <input class="form-control {{ $errors->has('customer_packing_list') ? 'is-invalid' : '' }}" type="text" name="customer_packing_list" id="customer_packing_list" value="{{ old('customer_packing_list', $workorder->customer_packing_list) }}">
                @if($errors->has('customer_packing_list'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer_packing_list') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.customer_packing_list_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="quantity">{{ trans('cruds.workorder.fields.quantity') }}</label>
                <input class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" type="text" name="quantity" id="quantity" value="{{ old('quantity', $workorder->quantity) }}" required>
                @if($errors->has('quantity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quantity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.quantity_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="unit_code">{{ trans('cruds.workorder.fields.unit_code') }}</label>
                <input class="form-control {{ $errors->has('unit_code') ? 'is-invalid' : '' }}" type="text" name="unit_code" id="unit_code" value="{{ old('unit_code', $workorder->unit_code) }}">
                @if($errors->has('unit_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('unit_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.unit_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="destination_code">{{ trans('cruds.workorder.fields.destination_code') }}</label>
                <input class="form-control {{ $errors->has('destination_code') ? 'is-invalid' : '' }}" type="text" name="destination_code" id="destination_code" value="{{ old('destination_code', $workorder->destination_code) }}">
                @if($errors->has('destination_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('destination_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.destination_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="carrier_code">{{ trans('cruds.workorder.fields.carrier_code') }}</label>
                <input class="form-control {{ $errors->has('carrier_code') ? 'is-invalid' : '' }}" type="text" name="carrier_code" id="carrier_code" value="{{ old('carrier_code', $workorder->carrier_code) }}">
                @if($errors->has('carrier_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('carrier_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.carrier_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="freight_code">{{ trans('cruds.workorder.fields.freight_code') }}</label>
                <input class="form-control {{ $errors->has('freight_code') ? 'is-invalid' : '' }}" type="text" name="freight_code" id="freight_code" value="{{ old('freight_code', $workorder->freight_code) }}">
                @if($errors->has('freight_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('freight_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.freight_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="priority">{{ trans('cruds.workorder.fields.priority') }}</label>
                <input class="form-control {{ $errors->has('priority') ? 'is-invalid' : '' }}" type="number" name="priority" id="priority" value="{{ old('priority', $workorder->priority) }}" step="1">
                @if($errors->has('priority'))
                    <div class="invalid-feedback">
                        {{ $errors->first('priority') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.priority_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('rework') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="rework" value="0">
                    <input class="form-check-input" type="checkbox" name="rework" id="rework" value="1" {{ $workorder->rework || old('rework', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="rework">{{ trans('cruds.workorder.fields.rework') }}</label>
                </div>
                @if($errors->has('rework'))
                    <div class="invalid-feedback">
                        {{ $errors->first('rework') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.rework_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('hot') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="hot" value="0">
                    <input class="form-check-input" type="checkbox" name="hot" id="hot" value="1" {{ $workorder->hot || old('hot', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="hot">{{ trans('cruds.workorder.fields.hot') }}</label>
                </div>
                @if($errors->has('hot'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hot') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.hot_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.workorder.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note', $workorder->note) }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.note_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archive') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archive" value="0">
                    <input class="form-check-input" type="checkbox" name="archive" id="archive" value="1" {{ $workorder->archive || old('archive', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archive">{{ trans('cruds.workorder.fields.archive') }}</label>
                </div>
                @if($errors->has('archive'))
                    <div class="invalid-feedback">
                        {{ $errors->first('archive') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workorder.fields.archive_helper') }}</span>
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