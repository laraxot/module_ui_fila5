<<<<<<< HEAD
<?php

declare(strict_types=1);
?>
=======
>>>>>>> 804451c (Lint)
@props([
    'id' => 'accordion-' . uniqid(),
    'flush' => false,
])

<div 
    class="accordion{{ $flush ? ' accordion-flush' : '' }}" 
    id="{{ $id }}"
    {{ $attributes }}
>
    {{ $slot }}
</div>
