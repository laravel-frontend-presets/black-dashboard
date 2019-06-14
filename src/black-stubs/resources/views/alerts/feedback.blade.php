@if ($errors->has($field))
    <span class="invalid-feedback" role="alert">{{ $errors->first($field) }}</span>
@endif
