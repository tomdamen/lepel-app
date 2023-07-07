@props(['active'])

@php
    $classes = $active ?? true ? 'active' : 'inactive';
@endphp

<a {{ $attributes->merge(['class' => 'fs-500 ' . $classes]) }}>
    <div class="hoverBar"></div>
    <p>{{ $slot }}</p>
</a>
