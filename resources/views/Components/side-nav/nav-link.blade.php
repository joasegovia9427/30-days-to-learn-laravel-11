{{-- <a href="{{ $href }}">{{ $slot }}</a> --}}
{{-- <a href="{{ $href }}" {{ $attributes }}>{{ $slot }}</a> --}}

{{-- <a href="{{ $href }}"
    class="{{ request()->is($href) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ request()->is($href) ? 'page' : 'false' }}">
    >
    {{ $slot }}
</a> --}}

@props(['active' => false])
@props(['type' => 'a'])
@props(['class' => ''])

@php
    if (!in_array($type, ['a', 'button'])) {
        throw new InvalidArgumentException("The type prop must be either 'a' or 'button'");
    }

    $defaultClass = $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
    $defaultClass .= ' rounded-md px-3 py-2 text-sm font-medium';
    $defaultClass .= $type === 'button' ? ' cursor-pointer' : '';

    $class = trim($defaultClass . ' ' . $class);
    $ariaCurrent = $active ? 'page' : 'false';
@endphp

@if ($type === 'a')
    <a href="{{ $href }}" class="{{ $class }}" aria-current="{{ $ariaCurrent }}" {{ $attributes }}>
        {{ $slot }}
    </a>
@else
    <button type="button" class="{{ $class }}" aria-current="{{ $ariaCurrent }}" {{ $attributes }}
        onclick="window.location.href = '{{ $href }}'">
        {{ $slot }}
    </button>
@endif


{{-- For vanilla php:
{{-- //<?php if ($type === 'a') : ?> --}}
{{-- <a href="{{ $href }}" class="{{ $class }}" aria-current="{{ $ariaCurrent }}" {{ $attributes }}>
    {{ $slot }}
</a> --}}
{{-- //<?php else : ?> --}}
{{-- <button type="button" class="{{ $class }}" aria-current="{{ $ariaCurrent }}" {{ $attributes }}
    onclick="window.location.href = '{{ $href }}'">
    {{ $slot }}
</button> --}}
{{-- //<?php endif ?> --}}
