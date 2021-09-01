@props(['disabled' => false, 'type' => 'text'])

<input {!! $attributes->merge([
    'class' => 'input'
]) !!} type="{{ $type }}" {{ $disabled ? 'disabled' : '' }} >
