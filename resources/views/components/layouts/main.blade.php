<?php

declare(strict_types=1);
?>
{{--
  Contratto Filament 5.x — Configuring your layout:
  https://filamentphp.com/docs/5.x/introduction/installation#configuring-your-layout

  In PTVX non esiste Modules/Cms (head/foot cms::*). Questo layout UI e' lo
  SSoT document-shell: @filamentStyles in <head>, @filamentScripts a fine <body>.
--}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Dark mode early: evita flicker --}}
        <script>
            if (typeof(Storage) !== "undefined") {
                if(localStorage.getItem('dark_mode') && localStorage.getItem('dark_mode') == 'true'){
                    document.documentElement.classList.add('dark');
                }
            }
        </script>

        <style>[x-cloak] { display: none !important; }</style>

<<<<<<< .merge_file_MRdF9D
        @filamentStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
=======
        {{-- OBBLIGATORIO in <head> --}}
        @filamentStyles
        @vite(['resources/css/app.css'])
>>>>>>> .merge_file_9ZWxds

        <title>{{ $title ?? 'Genesis' }}</title>
    </head>
    <body class="min-h-screen antialiased bg-white dark:bg-gradient-to-b dark:from-gray-950 dark:to-gray-900">
        {{ $slot }}
<<<<<<< .merge_file_MRdF9D
        @filamentScripts
=======

        {{-- Flash Filament: sempre, mai avvolto in auth --}}
        @livewire('notifications')

        {{-- OBBLIGATORIO a fine <body> --}}
        @filamentScripts
        @vite(['resources/js/app.js'])
>>>>>>> .merge_file_9ZWxds
        @livewire(\Modules\UI\Filament\Widgets\ToastWidget::class)
    </body>
</html>
