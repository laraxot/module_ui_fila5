<<<<<<< .merge_file_4zMzy7
<<<<<<< HEAD
<?php

declare(strict_types=1);
?>
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OOoUMc
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
