<div class="form-group row">
    <div class="col-sm-9 offset-sm-3">
        <input type="checkbox" name="{{ $name }}" value="1" @if ($value) checked @endif
            id="{{ Arr::get($attributes, 'id', '') }}"
        >
        <label class="form-check-label"
               for="{{ Arr::get($attributes, 'id', '') }}"
        >
            {{ $label }}
        </label>
    </div>
</div>