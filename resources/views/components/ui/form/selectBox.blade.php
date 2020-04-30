@php
    $input_class = 'form-control form-control-sm';
    if (!empty($error)) $input_class .= ' is-danger';
@endphp
<div class="form-group row">
    <label class="col-sm-3 col-form-label">
        {{$label}}
        @if(Arr::get($attributes, 'required') !== null)
            <span class="text-danger"> *</span>
        @endif
    </label>
    <div class="col-sm-9">
        <select class="{{ $input_class }}"
                id="{{ Arr::get($attributes, 'id', '') }}"
                name="{{ $name }}">
            @foreach($options as $key => $option)
                <option value="{{ $key }}" {{ $key == $value ? ' selected' : '' }}>{{ $option }}</option>
            @endforeach
        </select>
        <div class="invalid-feedback"></div>
    </div>
</div>