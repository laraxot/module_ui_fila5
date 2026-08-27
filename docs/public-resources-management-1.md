# Gestione delle Risorse Pubbliche 

## Indice
- [Panoramica](#panoramica)
- [Struttura delle Cartelle](#struttura-delle-cartelle)
- [Tipi di Risorse](#tipi-di-risorse)
- [Best Practices](#best-practices)
- [Esempi di Utilizzo](#esempi-di-utilizzo)

## Panoramica

Questo documento descrive la corretta gestione delle risorse pubbliche (immagini, CSS, JavaScript, ecc.) , con particolare attenzione alla struttura delle cartelle e alle best practices da seguire.

## Struttura delle Cartelle

La struttura corretta per le risorse pubbliche  è la seguente:

```
/var/www/html/saluteora/
├── public_html/           # Directory pubblica principale
│   ├── images/            # Immagini pubbliche
│   ├── css/               # File CSS
│   ├── js/                # File JavaScript
│   ├── fonts/             # Font
│   └── assets/            # Altre risorse statiche
└── laravel/               # Applicazione Laravel (NON contiene file pubblici)
```

> **IMPORTANTE**: MAI utilizzare `/var/www/html/saluteora/laravel/public/` per i file pubblici. Questa cartella non è accessibile via web nel setup di SaluteOra.

## Tipi di Risorse

### Immagini

<img 
    src="{{ $user->avatar ? asset('images/avatars/' . $user->avatar) : asset('images/default-avatar.svg') }}" 
    alt="{{ $user->name }}" 
    class="h-10 w-10 rounded-full"
>
```

### Logo nell'Header

```blade
<a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), route('home')) }}">
    <img 
        src="{{ asset('images/logos/saluteora-logo.svg') }}" 
        alt="SaluteOra" 
        class="h-8"
    >
</a>
```

### CSS e JavaScript

```blade
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}" defer></script>
```

## Conclusione

Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto SaluteOra.
