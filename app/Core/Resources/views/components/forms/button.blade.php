@props(['dark' => false])

<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'button disabled:opacity-25'
]) }}>
    {{ $slot }}
</button>
