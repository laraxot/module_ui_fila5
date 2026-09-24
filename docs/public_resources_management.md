<<<<<<< HEAD
<<<<<<< .merge_file_F4WqLa
# Gestione delle Risorse Pubbliche 
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_ksBlhR
# Gestione delle Risorse Pubbliche 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
# Gestione delle Risorse Pubbliche 
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_fDusGs
# Gestione delle Risorse Pubbliche
=======
<<<<<<< HEAD
# Gestione delle Risorse Pubbliche 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
# Gestione delle Risorse Pubbliche 
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
# Gestione delle Risorse Pubbliche
=======
# Gestione delle Risorse Pubbliche 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_F4WqLa
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
# Gestione delle Risorse Pubbliche
=======
# Gestione delle Risorse Pubbliche 
>>>>>>> .merge_file_utGBGx
>>>>>>> .merge_file_fDusGs
>>>>>>> laraxot/dev

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
<<<<<<< HEAD
<<<<<<< .merge_file_F4WqLa
/var/www/html/<nome progetto>/
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_ksBlhR
/var/www/html/<nome progetto>/
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/<nome progetto>/
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_fDusGs
/var/www/html/saluteora/
<<<<<<< HEAD
[project-root]/
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/saluteora/
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
[project-root]/
=======
/var/www/html/saluteora/
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_F4WqLa
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
/var/www/html/saluteora/
[project-root]/
=======
/var/www/html/<nome progetto>/
>>>>>>> .merge_file_utGBGx
>>>>>>> .merge_file_fDusGs
>>>>>>> laraxot/dev
├── public_html/           # Directory pubblica principale
│   ├── images/            # Immagini pubbliche
│   ├── css/               # File CSS
│   ├── js/                # File JavaScript
│   ├── fonts/             # Font
│   └── assets/            # Altre risorse statiche
└── laravel/               # Applicazione Laravel (NON contiene file pubblici)
```

<<<<<<< HEAD
<<<<<<< .merge_file_F4WqLa
> **IMPORTANTE**: MAI utilizzare `/var/www/html/<nome progetto>/laravel/public/` per i file pubblici. Questa cartella non è accessibile via web nel setup di <nome progetto>.
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_ksBlhR
> **IMPORTANTE**: MAI utilizzare `/var/www/html/<nome progetto>/laravel/public/` per i file pubblici. Questa cartella non è accessibile via web nel setup di <nome progetto>.
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
> **IMPORTANTE**: MAI utilizzare `/var/www/html/<nome progetto>/laravel/public/` per i file pubblici. Questa cartella non è accessibile via web nel setup di <nome progetto>.
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_fDusGs
> **IMPORTANTE**: MAI utilizzare `/var/www/html/saluteora/laravel/public/` per i file pubblici. Questa cartella non è accessibile via web nel setup di SaluteOra.
<<<<<<< HEAD
> **IMPORTANTE**: MAI utilizzare `[project-root]/laravel/public/` per i file pubblici. Questa cartella non è accessibile via web nel setup di <nome progetto>corrente.
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
> **IMPORTANTE**: MAI utilizzare `/var/www/html/saluteora/laravel/public/` per i file pubblici. Questa cartella non è accessibile via web nel setup di SaluteOra.
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
> **IMPORTANTE**: MAI utilizzare `[project-root]/laravel/public/` per i file pubblici. Questa cartella non è accessibile via web nel setup di <nome progetto>corrente.
=======
> **IMPORTANTE**: MAI utilizzare `/var/www/html/saluteora/laravel/public/` per i file pubblici. Questa cartella non è accessibile via web nel setup di SaluteOra.
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_F4WqLa
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
> **IMPORTANTE**: MAI utilizzare `/var/www/html/saluteora/laravel/public/` per i file pubblici. Questa cartella non è accessibile via web nel setup di SaluteOra.
> **IMPORTANTE**: MAI utilizzare `[project-root]/laravel/public/` per i file pubblici. Questa cartella non è accessibile via web nel setup di <nome progetto>corrente.
=======
> **IMPORTANTE**: MAI utilizzare `/var/www/html/<nome progetto>/laravel/public/` per i file pubblici. Questa cartella non è accessibile via web nel setup di <nome progetto>.
>>>>>>> .merge_file_utGBGx
>>>>>>> .merge_file_fDusGs
>>>>>>> laraxot/dev

## Tipi di Risorse

### Immagini

<<<<<<< HEAD
<<<<<<< .merge_file_F4WqLa
Le immagini devono essere posizionate in `/var/www/html/<nome progetto>/public_html/images/` e organizzate in sottocartelle per tipologia:
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_ksBlhR
Le immagini devono essere posizionate in `/var/www/html/<nome progetto>/public_html/images/` e organizzate in sottocartelle per tipologia:
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
Le immagini devono essere posizionate in `/var/www/html/<nome progetto>/public_html/images/` e organizzate in sottocartelle per tipologia:
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_fDusGs
Le immagini devono essere posizionate in `/var/www/html/saluteora/public_html/images/` e organizzate in sottocartelle per tipologia:
<<<<<<< HEAD
Le immagini devono essere posizionate in `[project-root]/public_html/images/` e organizzate in sottocartelle per tipologia:
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
Le immagini devono essere posizionate in `/var/www/html/saluteora/public_html/images/` e organizzate in sottocartelle per tipologia:
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
Le immagini devono essere posizionate in `[project-root]/public_html/images/` e organizzate in sottocartelle per tipologia:
=======
Le immagini devono essere posizionate in `/var/www/html/saluteora/public_html/images/` e organizzate in sottocartelle per tipologia:
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_F4WqLa
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
Le immagini devono essere posizionate in `/var/www/html/saluteora/public_html/images/` e organizzate in sottocartelle per tipologia:
Le immagini devono essere posizionate in `[project-root]/public_html/images/` e organizzate in sottocartelle per tipologia:
=======
Le immagini devono essere posizionate in `/var/www/html/<nome progetto>/public_html/images/` e organizzate in sottocartelle per tipologia:
>>>>>>> .merge_file_utGBGx
>>>>>>> .merge_file_fDusGs
>>>>>>> laraxot/dev

- `/images/avatars/` - Avatar utenti
- `/images/logos/` - Loghi
- `/images/icons/` - Icone
- `/images/backgrounds/` - Sfondi

### CSS e JavaScript

I file CSS e JavaScript compilati devono essere posizionati in:

- `/public_html/css/` - File CSS
- `/public_html/js/` - File JavaScript

### Font

I font devono essere posizionati in `/public_html/fonts/` e organizzati per famiglia.

## Best Practices

1. **Utilizzo nei Template Blade**

   ```blade
   <img src="{{ asset('images/default-avatar.svg') }}" alt="Avatar utente">
   ```

   > **Nota**: La funzione `asset()` punta automaticamente alla directory pubblica corretta.

2. **Generazione di URL per Risorse Pubbliche**

   ```php
   $avatarUrl = asset('images/default-avatar.svg');
   ```

3. **Risorse Localizzate**

   Per risorse che variano in base alla lingua, utilizzare la struttura:

   ```
   /public_html/images/localized/{locale}/image.svg
   ```

   E accedervi con:

   ```php
   $localizedImage = asset('images/localized/' . LaravelLocalization::getCurrentLocale() . '/image.svg');
   ```

4. **Versionamento delle Risorse**

   Per gestire la cache del browser, aggiungere un parametro di versione:

   ```php
   $cssWithVersion = asset('css/app.css') . '?v=' . config('app.version');
   ```

5. **SVG vs Raster**

   - Preferire SVG per icone, loghi e illustrazioni vettoriali
   - Utilizzare WebP o JPEG ottimizzati per fotografie
   - Fornire fallback per browser più vecchi

## Esempi di Utilizzo

### Avatar Utente

```blade
<<<<<<< HEAD
<<<<<<< .merge_file_F4WqLa
=======
<<<<<<< .merge_file_ksBlhR
>>>>>>> .merge_file_fDusGs
<img 
    src="{{ $user->avatar ? asset('images/avatars/' . $user->avatar) : asset('images/default-avatar.svg') }}" 
    alt="{{ $user->name }}" 
=======
<<<<<<< HEAD
<<<<<<< .merge_file_F4WqLa
<img
    src="{{ $user->avatar ? asset('images/avatars/' . $user->avatar) : asset('images/default-avatar.svg') }}"
    alt="{{ $user->name }}"
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_fDusGs
<img 
>>>>>>> laraxot/dev
    src="{{ $user->avatar ? asset('images/avatars/' . $user->avatar) : asset('images/default-avatar.svg') }}" 
    alt="{{ $user->name }}" 
=======
<<<<<<< HEAD
<<<<<<< .merge_file_F4WqLa
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_utGBGx
<img
    src="{{ $user->avatar ? asset('images/avatars/' . $user->avatar) : asset('images/default-avatar.svg') }}"
    alt="{{ $user->name }}"
=======
<<<<<<< .merge_file_ksBlhR
<<<<<<< HEAD
=======
>>>>>>> .merge_file_utGBGx
<img 
>>>>>>> laraxot/dev
    src="{{ $user->avatar ? asset('images/avatars/' . $user->avatar) : asset('images/default-avatar.svg') }}" 
    alt="{{ $user->name }}" 
=======
<<<<<<< HEAD
>>>>>>> .merge_file_fDusGs
<<<<<<< HEAD
=======
<img 
    src="{{ $user->avatar ? asset('images/avatars/' . $user->avatar) : asset('images/default-avatar.svg') }}" 
    alt="{{ $user->name }}" 
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<img
    src="{{ $user->avatar ? asset('images/avatars/' . $user->avatar) : asset('images/default-avatar.svg') }}"
    alt="{{ $user->name }}"
=======
<img 
    src="{{ $user->avatar ? asset('images/avatars/' . $user->avatar) : asset('images/default-avatar.svg') }}" 
    alt="{{ $user->name }}" 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_F4WqLa
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_fDusGs
>>>>>>> laraxot/dev
    class="h-10 w-10 rounded-full"
>
```

### Logo nell'Header

```blade
<a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), route('home')) }}">
<<<<<<< HEAD
    <img 
<<<<<<< HEAD
        src="{{ asset('images/logos/saluteora-logo.svg') }}" 
        alt="SaluteOra" 
=======
        src="{{ asset('images/logos/<nome progetto>-logo.svg') }}" 
        alt="<nome progetto>" 
<<<<<<< .merge_file_F4WqLa
=======
<<<<<<< HEAD
    <img 
=======
<<<<<<< .merge_file_ksBlhR
=======
<<<<<<< HEAD
    <img 
<<<<<<< HEAD
=======
        src="{{ asset('images/logos/<nome progetto>-logo.svg') }}" 
        alt="<nome progetto>" 
=======
<<<<<<< HEAD
    <img 
>>>>>>> laraxot/dev
>>>>>>> .merge_file_fDusGs
        src="{{ asset('images/logos/saluteora-logo.svg') }}" 
        alt="SaluteOra" 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
    <img 
        src="{{ asset('images/logos/saluteora-logo.svg') }}" 
        alt="SaluteOra" 
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
    <img
        src="{{ asset('images/logos/<nome progetto>ogo.svg') }}"
        alt="<nome progetto>corrente"
=======
    <img 
        src="{{ asset('images/logos/saluteora-logo.svg') }}" 
        alt="SaluteOra" 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_F4WqLa
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_utGBGx
>>>>>>> .merge_file_fDusGs
>>>>>>> laraxot/dev
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

<<<<<<< HEAD
<<<<<<< .merge_file_F4WqLa
Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto <nome progetto>.
=======
<<<<<<< HEAD
Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto SaluteOra.
<<<<<<< HEAD
Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto <nome progetto>corrente.
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto SaluteOra.
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto <nome progetto>corrente.
=======
Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto SaluteOra.
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_ksBlhR
Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto <nome progetto>.
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto <nome progetto>.
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto SaluteOra.
<<<<<<< HEAD
Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto <nome progetto>corrente.
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto SaluteOra.
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto <nome progetto>corrente.
=======
Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto SaluteOra.
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto SaluteOra.
Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto <nome progetto>corrente.
=======
Seguendo queste linee guida per la gestione delle risorse pubbliche, si garantisce che tutte le risorse siano correttamente accessibili via web e organizzate in modo coerente, facilitando la manutenzione e l'evoluzione del progetto <nome progetto>.
>>>>>>> .merge_file_utGBGx
>>>>>>> .merge_file_fDusGs
>>>>>>> laraxot/dev
