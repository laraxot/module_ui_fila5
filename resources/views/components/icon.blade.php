<?php

declare(strict_types=1);
<<<<<<< .merge_file_ZxX1e3
<<<<<<< HEAD
=======

>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_FJYBU4
?>
@props([
    'name' => null,
    'class' => '',
])

@php
$svgPath = __DIR__.'/../../svg/'.$name.'.svg';
$svgContent = file_exists($svgPath) ? file_get_contents($svgPath) : '';
@endphp

{!! $svgContent !!}
