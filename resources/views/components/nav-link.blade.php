@props(['active'])

@php
    $classes = $active ?? false ? 'inactive' : 'active';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
