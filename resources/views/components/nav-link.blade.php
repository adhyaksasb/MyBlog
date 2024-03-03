@props(['active'])

@php
    $classes = $active ?? false ? 'inline-flex items-center text-indigo-600 hover:text-indigo-500 dark:hover:text-indigo-400 text-sm dark:text-indigo-500' : 'inline-flex items-center text-gray-800 hover:text-indigo-500 dark:hover:text-indigo-400 text-sm dark:text-gray-200';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
