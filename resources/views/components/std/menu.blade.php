<?php

declare(strict_types=1);
<<<<<<< .merge_file_RVl0Ip
<<<<<<< HEAD
=======

>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_YxJ2MW
?>
@props(['name'])

@if ($menu = \App\Models\Menu::whereName($name)->first())
    <ul class="ml-auto flex items-center space-x-4">
        @foreach ($menu->items as $item)
            <li>
                <a
                    href="{{ $item['url'] }}"
                    @if ($item['type'] === 'external') target="_blank" @endif
                >
                    {{ $item['title'] }}
                </a>
            </li>
        @endforeach
    </ul>
@endif
