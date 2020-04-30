@php
    $input_class = 'form-control form-control-sm';
    if (!empty($error)) $input_class .= ' is-invalid';
@endphp
<div class="form-group row">
    <label class="col-sm-3 col-form-label">
        {{$label}}
        @if(Arr::get($attributes, 'required') !== null)
            <span class="text-danger"> *</span>
        @endif
    </label>
    <div class="col-sm-9">
        <input class="{{ $input_class }}"
               id="{{ Arr::get($attributes, 'id', '') }}"
               name="{{ $name }}"
               type="{{ Arr::get($attributes, 'type', 'text') }}"
               placeholder="{{ Arr::get($attributes, 'placeholder', '') }}"
               value="{{ $value }}"
        >
        <div class="invalid-feedback">{{ $error }}</div>
    </div>
</div>