<?php

declare(strict_types=1);
<<<<<<< HEAD
=======

>>>>>>> 0dadab4 (Lint)
?>
<x-filament::widget>
    <x-filament::section collapsible collapsed wire:key="section-{{ $guid }}">
        <x-slot name="heading">
            {{ $title }}
        </x-slot>
        <div wire:ignore>
            {{ $this->table }}
        </div>
    </x-filament::section>
</x-filament::widget>
