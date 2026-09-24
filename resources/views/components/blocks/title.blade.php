<?php

declare(strict_types=1);
<<<<<<< HEAD
=======

>>>>>>> 0dadab4 (Lint)
?>
@props(['text', 'level'])
@if($level != null)
    <{{ $level }}>{{ $text }}</{{ $level }}>
@else
    {{ $text }}
@endif
