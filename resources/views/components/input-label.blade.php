<label {{ $attributes->merge([
    'class' => 'block text-sm font-semibold text-primary'
]) }}>
    {{ $value ?? $slot }}
</label>