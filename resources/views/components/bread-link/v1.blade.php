<?php

declare(strict_types=1);
<<<<<<< .merge_file_O3ItE2
<<<<<<< HEAD
=======

>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_Vf5rcz
?>
@props(['active'])

@php
$classes = ($active ?? false)
            ? 'mr-2 text-sm font-medium text-gray-700'
            : 'mr-2 text-sm font-medium text-gray-500 hover:text-gray-600';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
