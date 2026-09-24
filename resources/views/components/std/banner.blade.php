<?php

declare(strict_types=1);
<<<<<<< .merge_file_9WklCw
<<<<<<< HEAD
=======

>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_Skugg4
?>
@props(['image' => ''])

@php
    $background = $image ? 'bg-black' : 'bg-gray-100';
@endphp

<div class="relative min-h-[200px] flex items-center justify-center {{ $background }}">
    @if ($image)
        <div
            class="absolute inset-0 z-0 opacity-50"
            style="background-image: url({{ $image }}); background-size: cover; background-position: center;"
        ></div>
    @endif

    <div class="relative z-1 p-2 text-4xl text-gray-700 lg:text-6xl">
        {!! $slot !!}
    </div>
</div>
