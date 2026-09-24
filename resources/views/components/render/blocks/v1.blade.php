<?php

declare(strict_types=1);
<<<<<<< HEAD
=======

>>>>>>> 804451c (Lint)
?>
@props(['blocks'])
{{-- Blocks  --}}
@foreach ($blocks as $block)
    <x-render.block :block="$block" :model="$model" />
@endforeach
