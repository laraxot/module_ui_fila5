<?php

declare(strict_types=1);
<<<<<<< HEAD
=======

>>>>>>> 804451c (Lint)
?>
@props(['text', 'level'])
@if($level != null)
    <{{ $level }}>{{ $text }}</{{ $level }}>
@else
    {{ $text }}
@endif
