<?php

declare(strict_types=1);
<<<<<<< .merge_file_nhiYi9
<<<<<<< HEAD
=======

>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_NJ1pCj
?>
@props(['blocks'])
{{-- Blocks  --}}
@foreach ($blocks as $block)
    <x-render.block :block="$block" :model="$model" />
@endforeach
