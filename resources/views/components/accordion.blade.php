<<<<<<< HEAD
<?php

declare(strict_types=1);
?>
=======
>>>>>>> 0dadab4 (Lint)
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
