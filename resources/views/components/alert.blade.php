@props(['type'])

@php

    switch ($type) {
        case 'success':
            $class = 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400';
            break;
        case 'error':
            $class = 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';
            break;
        case 'warning':
            $class = 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400';
            break;
        default:
            $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;
    }
@endphp


<div {{ $attributes->merge(['class' => 'p-4 text-sm rounded-lg' . $class])}} role="alert">
    <span class="font-medium">{{ $title ?? 'INFO alert' }}</span> 
    {{ $slot }}
    <span class="font-medium">{{ $contenido ?? 'Monda por 2' }}</span> 


</div>
