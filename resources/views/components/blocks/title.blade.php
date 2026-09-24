<?php

declare(strict_types=1);
<<<<<<< .merge_file_nrV4OU
<<<<<<< HEAD
=======

>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_psfvmg
?>
@props(['text', 'level'])
@if($level != null)
    <{{ $level }}>{{ $text }}</{{ $level }}>
@else
    {{ $text }}
@endif
