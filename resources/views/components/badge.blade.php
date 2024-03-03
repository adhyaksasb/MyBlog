@props(['textColor', 'bgColor'])

@php
    $textColor = match ($textColor) {
        'gray' => 'text-gray-200',
        'blue' => 'text-blue-200',
        'red' => 'text-red-200',
        'indigo' => 'text-indigo-200',
        'yellow' => 'text-yellow-200',
        default => 'text-gray-500',
    };

    $bgColor = match ($bgColor) {
        'gray' => 'bg-gray-600',
        'blue' => 'bg-blue-600',
        'red' => 'bg-red-600',
        'indigo' => 'bg-indigo-600',
        'yellow' => 'bg-yellow-600',
        default => 'bg-gray-100',
    };
@endphp

<button {{ $attributes }} class="{{ $textColor }} {{ $bgColor }}
        rounded-xl px-3 py-1 text-base">
    {{ $slot }}</button>
