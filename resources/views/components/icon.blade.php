<?php

declare(strict_types=1);
<<<<<<< HEAD
=======

>>>>>>> 0dadab4 (Lint)
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
