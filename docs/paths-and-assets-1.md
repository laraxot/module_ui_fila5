# AVVISO IMPORTANTE (2025-05-13)

> **ATTENZIONE:** Tutti i componenti UI condivisi (come `logo.blade.php`) devono essere SEMPRE posizionati in `Modules/UI/resources/views/components/ui/` e MAI in `resources/views/components/`. Qualsiasi violazione di questa regola causa errori di rendering, override errati, problemi di modularità e manutenzione.
>
> **Errore riscontrato:** Il componente `logo.blade.php` era stato posizionato erroneamente in `resources/views/components/ui/` invece che in `Modules/UI/resources/views/components/ui/`.
>
> **Causa:** Dimenticanza della regola di modularità Laraxot: tutti i componenti Blade UI condivisi devono essere sempre nel modulo UI, mai nella root Laravel.
>
> **Soluzione:** Seguire SEMPRE la regola documentata qui sotto e aggiornata anche in README.md e nella root docs/links.md.

<<<<<<< .merge_file_ISoH4Q
=======
<<<<<<< HEAD
<<<<<<< .merge_file_9UBLYa
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_SXFEuN
>>>>>>> .merge_file_fDoCfj
# Gestione dei Percorsi e degli Asset

## Collegamenti correlati
- [README modulo UI](/laravel/Modules/UI/docs/README.md)
- [Architettura Modulare](/laravel/Modules/UI/docs/ARCHITECTURE.md)
- [Collegamenti Documentazione](/docs/collegamenti-documentazione.md)

## Percorsi Corretti per gli Asset

### Struttura delle Directory

, è fondamentale rispettare la struttura corretta delle directory per gli asset pubblici:

```

<<<<<<< .merge_file_ISoH4Q
=======
<<<<<<< .merge_file_9UBLYa
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_SXFEuN
=======
# Gestione dei Percorsi e degli Asset 
## Collegamenti correlati
- [README modulo UI](/laravel/Modules/UI/docs/README.md)
- [Architettura Modulare](/laravel/Modules/UI/docs/architecture.md)
- [Collegamenti Documentazione](/docs/collegamenti-documentazione.md)
## Percorsi Corretti per gli Asset
### Struttura delle Directory
, è fondamentale rispettare la struttura corretta delle directory per gli asset pubblici:
```
/var/www/html/saluteora/
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9UBLYa
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_SXFEuN
>>>>>>> .merge_file_fDoCfj
├── laravel/                 # Applicazione Laravel (codice sorgente)
│   ├── Modules/             # Moduli dell'applicazione
│   ├── resources/           # Risorse non compilate
│   └── ...
└── public_html/             # Directory pubblica (web root)
    ├── images/              # Immagini pubbliche
    │   ├── avatars/         # Avatar utenti
<<<<<<< .merge_file_ISoH4Q
=======
<<<<<<< HEAD
<<<<<<< .merge_file_9UBLYa
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_SXFEuN
>>>>>>> .merge_file_fDoCfj
    │   └── ...
    ├── css/                 # File CSS compilati
    ├── js/                  # File JavaScript compilati
    └── ...
```

### Percorsi Corretti vs Percorsi Errati

| Tipo di Asset | ✅ Percorso Corretto | ❌ Percorso Errato |
|---------------|---------------------|-------------------|
| Immagini | `public_html/images/` | `public/images/` |
| CSS | `public_html/css/` | `public/css/` |
| JavaScript | `public_html/js/` | `public/js/` |
| SVG | `public_html/images/` | `public/images/` |
<<<<<<< .merge_file_ISoH4Q
=======
<<<<<<< .merge_file_9UBLYa
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_SXFEuN
=======
    ├── css/                 # File CSS compilati
    ├── js/                  # File JavaScript compilati
    └── ...
### Percorsi Corretti vs Percorsi Errati
| Tipo di Asset | ✅ Percorso Corretto | ❌ Percorso Errato |
|---------------|---------------------|-------------------|
| Immagini | `/var/www/html/saluteora/public_html/images/` | `/var/www/html/saluteora/laravel/public/images/` |
| CSS | `/var/www/html/saluteora/public_html/css/` | `/var/www/html/saluteora/laravel/public/css/` |
| JavaScript | `/var/www/html/saluteora/public_html/js/` | `/var/www/html/saluteora/laravel/public/js/` |
| SVG | `/var/www/html/saluteora/public_html/images/` | `/var/www/html/saluteora/laravel/public/images/` |
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9UBLYa
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_SXFEuN
>>>>>>> .merge_file_fDoCfj

## Utilizzo degli Asset nei Componenti Blade

### Helper `asset()`

Quando si fa riferimento agli asset nei componenti Blade, utilizzare sempre l'helper `asset()` che punta automaticamente alla directory pubblica corretta:

```php
<img src="{{ asset('images/avatars/default-1.svg') }}" alt="Avatar">
```

### Gestione dei Fallback

Per garantire una buona esperienza utente, implementare sempre un fallback per le immagini che potrebbero non essere disponibili:

```php
<<<<<<< .merge_file_ISoH4Q
<img
=======
<<<<<<< HEAD
<<<<<<< .merge_file_9UBLYa
=======
<img
=======
<<<<<<< HEAD
>>>>>>> .merge_file_SXFEuN
<img
=======
<img 
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9UBLYa
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_SXFEuN
>>>>>>> .merge_file_fDoCfj
    src="{{ asset('images/avatars/default-' . $avatarNumber . '.svg') }}"
    alt="{{ $user->name ?? 'User' }}"
    onerror="this.src='{{ asset('images/default-avatar.svg') }}'"
/>
```

## Componenti SVG

### SVG come Componenti Blade

Gli SVG utilizzati come icone o componenti UI dovrebbero essere implementati come componenti Blade in:

```
<<<<<<< .merge_file_ISoH4Q
=======
<<<<<<< HEAD
<<<<<<< .merge_file_9UBLYa
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_SXFEuN
>>>>>>> .merge_file_fDoCfj
Themes/One/resources/views/components/ui/
```

### SVG come Asset Pubblici

Gli SVG utilizzati come immagini (avatar, loghi, ecc.) dovrebbero essere posizionati in:

```
public_html/images/
<<<<<<< .merge_file_ISoH4Q
=======
<<<<<<< .merge_file_9UBLYa
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_SXFEuN
=======
/var/www/html/saluteora/laravel/Themes/One/resources/views/components/ui/
```
### SVG come Asset Pubblici
Gli SVG utilizzati come immagini (avatar, loghi, ecc.) dovrebbero essere posizionati in:
/var/www/html/saluteora/public_html/images/
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9UBLYa
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_SXFEuN
>>>>>>> .merge_file_fDoCfj
```

## Gestione dei Componenti UI

### Componente Avatar

Il componente avatar è implementato in:

```
<<<<<<< .merge_file_ISoH4Q
=======
<<<<<<< HEAD
<<<<<<< .merge_file_9UBLYa
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_SXFEuN
>>>>>>> .merge_file_fDoCfj
Themes/One/resources/views/components/ui/avatar.blade.php
```

E utilizza gli avatar SVG dalla directory pubblica:

```
public_html/images/avatars/
<<<<<<< .merge_file_ISoH4Q
=======
<<<<<<< .merge_file_9UBLYa
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_SXFEuN
=======
/var/www/html/saluteora/laravel/Themes/One/resources/views/components/ui/avatar.blade.php
```
E utilizza gli avatar SVG dalla directory pubblica:
/var/www/html/saluteora/public_html/images/avatars/
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9UBLYa
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_SXFEuN
>>>>>>> .merge_file_fDoCfj
```

### Componente Icon

Il componente icon è implementato in:

```
<<<<<<< .merge_file_ISoH4Q
=======
<<<<<<< HEAD
<<<<<<< .merge_file_9UBLYa
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_SXFEuN
>>>>>>> .merge_file_fDoCfj
Themes/One/resources/views/components/ui/icon.blade.php
```

E include le definizioni SVG direttamente nel componente.

## Regola sui Componenti Blade UI

> **IMPORTANTE:** Tutti i componenti Blade UI condivisi (es. logo, button, badge, ecc.) devono essere posizionati esclusivamente in:
>
> `Modules/UI/resources/views/components/ui/`
<<<<<<< .merge_file_ISoH4Q
=======
<<<<<<< .merge_file_9UBLYa
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_SXFEuN
=======
/var/www/html/saluteora/laravel/Themes/One/resources/views/components/ui/icon.blade.php
```
E include le definizioni SVG direttamente nel componente.
## Regola sui Componenti Blade UI
> **IMPORTANTE:** Tutti i componenti Blade UI condivisi (es. logo, button, badge, ecc.) devono essere posizionati esclusivamente in:
>
> `/var/www/html/ptvx/laravel/Modules/UI/resources/views/components/ui/`
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9UBLYa
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_SXFEuN
>>>>>>> .merge_file_fDoCfj
>
> **MAI** in `resources/views/components/ui/` della root Laravel.

### Motivazione
- Garantisce la modularità e la possibilità di override a livello di modulo
- Evita conflitti e duplicazioni tra moduli e root
- Permette una gestione centralizzata e documentata dei componenti UI
- Segue la filosofia Laraxot di separazione delle responsabilità

### Esempio di errore e correzione

**❌ Errato:**
```
<<<<<<< .merge_file_ISoH4Q
=======
<<<<<<< HEAD
<<<<<<< .merge_file_9UBLYa
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_SXFEuN
>>>>>>> .merge_file_fDoCfj
resources/views/components/ui/logo.blade.php
```
**✅ Corretto:**
```
Modules/UI/resources/views/components/ui/logo.blade.php
```

## Best Practices

<<<<<<< .merge_file_ISoH4Q
=======
<<<<<<< .merge_file_9UBLYa
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_SXFEuN
=======
/var/www/html/ptvx/laravel/resources/views/components/ui/logo.blade.php
```
**✅ Corretto:**
/var/www/html/ptvx/laravel/Modules/UI/resources/views/components/ui/logo.blade.php
## Best Practices
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9UBLYa
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_SXFEuN
>>>>>>> .merge_file_fDoCfj
1. **MAI utilizzare percorsi assoluti hardcoded** nei componenti Blade
2. **SEMPRE utilizzare l'helper `asset()`** per riferirsi agli asset pubblici
3. **Implementare fallback** per le immagini che potrebbero non essere disponibili
4. **Verificare l'esistenza delle directory** prima di salvare nuovi asset
5. **Seguire le convenzioni di naming** per mantenere la coerenza
6. **Documentare i percorsi corretti** per evitare confusione
<<<<<<< .merge_file_ISoH4Q
=======
<<<<<<< HEAD
<<<<<<< .merge_file_9UBLYa
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_SXFEuN
>>>>>>> .merge_file_fDoCfj

## Errori Comuni

1. **Utilizzo del percorso Laravel public**: Utilizzare `public/` invece di `public_html/`
<<<<<<< .merge_file_ISoH4Q
=======
<<<<<<< .merge_file_9UBLYa
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_SXFEuN
=======
## Errori Comuni
1. **Utilizzo del percorso Laravel public**: Utilizzare `/var/www/html/saluteora/laravel/public/` invece di `/var/www/html/saluteora/public_html/`
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9UBLYa
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_SXFEuN
>>>>>>> .merge_file_fDoCfj
2. **Riferimenti diretti ai file**: Utilizzare percorsi assoluti invece dell'helper `asset()`
3. **Mancanza di fallback**: Non fornire alternative quando un'immagine non è disponibile
4. **Inconsistenza nei nomi dei file**: Utilizzare convenzioni di naming diverse per file simili
