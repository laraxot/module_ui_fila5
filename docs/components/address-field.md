<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_N0K9eP
=======
<<<<<<< .merge_file_hv4tsL
>>>>>>> .merge_file_4kx6JZ
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_N0K9eP
=======
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> .merge_file_4kx6JZ
<<<<<<< HEAD
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< .merge_file_N0K9eP
=======
=======
>>>>>>> .merge_file_nY17UK
>>>>>>> .merge_file_4kx6JZ
---
title: "AddressField Component"
type: concept
tags: [address, field]
created: 2026-07-14
updated: 2026-07-14
qmd: "address-field addressfield component"
issues: ["https://github.com/provtv/<nome repository>/issues/124"]
discussions: ["https://github.com/provtv/<nome repository>/discussions/1"]
related:
  - "./address-field-1.md"
  - "./blade-component-registration.md"
  - "./filament-usage.md"
  - "./filament.md"
  - "./file-upload.md"
  - "./footer.md"
  - "./full-calendar-1.md"
  - "./full-calendar.md"
---
<<<<<<< .merge_file_N0K9eP
=======
<<<<<<< .merge_file_hv4tsL
>>>>>>> .merge_file_4kx6JZ
<<<<<<< HEAD
=======

<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_N0K9eP
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> .merge_file_nY17UK
>>>>>>> .merge_file_4kx6JZ
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
# AddressField Component

## Panoramica
Il componente AddressField è un campo Filament personalizzato per la gestione degli indirizzi. Integra funzionalità di geocoding e validazione degli indirizzi.

## Caratteristiche
- Autocompletamento degli indirizzi
- Validazione dei campi dell'indirizzo
- Integrazione con servizi di geocoding
- Supporto per formati di indirizzo internazionali

## Miglioramenti PHPStan Livello 9
Le seguenti modifiche sono state apportate per soddisfare PHPStan livello 9:

1. Tipizzazione stretta dei parametri
2. Gestione null-safe degli oggetti Address
3. Validazione dei dati di input
4. Correzione dei type hints per le proprietà
5. Implementazione delle interfacce corrette

## Utilizzo
```php
use Modules\UI\ment\Forms\Components\AddressField;

AddressField::make('address')
    ->required()
    ->searchable()
    ->withMap()
    ->withValidation();
```

## Best Practices
1. Utilizzare sempre la validazione dei campi
2. Implementare la gestione degli errori per il geocoding
3. Configurare correttamente i servizi di geocoding
4. Testare con diversi formati di indirizzo

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_N0K9eP
=======
[Torna alla documentazione UI](/docs/modules/module_ui.md#components)
<<<<<<< .merge_file_hv4tsL
=======
<<<<<<< HEAD
>>>>>>> .merge_file_4kx6JZ
[Torna alla documentazione UI](/docs/modules/module_ui.md#components)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
[Torna alla documentazione UI](/docs/modules/module-ui-1.md#components)
# AddressField Component
## Panoramica
Il componente AddressField è un campo Filament personalizzato per la gestione degli indirizzi. Integra funzionalità di geocoding e validazione degli indirizzi.
=======
>>>>>>> .merge_file_nY17UK
=======
[Torna alla documentazione UI](/docs/modules/module_ui.md#components)
>>>>>>> laraxot/dev
# AddressField Component

## Panoramica
Il componente AddressField è un campo Filament personalizzato per la gestione degli indirizzi. Integra funzionalità di geocoding e validazione degli indirizzi.

<<<<<<< HEAD
<<<<<<< .merge_file_N0K9eP
=======
<<<<<<< HEAD
[Torna alla documentazione UI](/docs/modules/module_ui.md#components)
=======
<<<<<<< .merge_file_hv4tsL
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
[Torna alla documentazione UI](/docs/modules/module_ui.md#components)
>>>>>>> laraxot/dev
>>>>>>> .merge_file_4kx6JZ
=======
<<<<<<< HEAD
[Torna alla documentazione UI](/docs/modules/module_ui.md#components) 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
[Torna alla documentazione UI](/docs/modules/module_ui.md#components) 
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
[Torna alla documentazione UI](/docs/modules/module_ui.md#components) 
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
[Torna alla documentazione UI](/docs/modules/module-ui-1.md#components)
# AddressField Component
## Panoramica
Il componente AddressField è un campo Filament personalizzato per la gestione degli indirizzi. Integra funzionalità di geocoding e validazione degli indirizzi.
<<<<<<< .merge_file_N0K9eP
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_nY17UK
>>>>>>> .merge_file_4kx6JZ
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
## Caratteristiche
- Autocompletamento degli indirizzi
- Validazione dei campi dell'indirizzo
- Integrazione con servizi di geocoding
- Supporto per formati di indirizzo internazionali
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_N0K9eP
=======
<<<<<<< .merge_file_hv4tsL
=======
<<<<<<< HEAD
## Miglioramenti PHPStan Livello 9
Le seguenti modifiche sono state apportate per soddisfare PHPStan livello 9:
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Miglioramenti PHPStan Livello 9
Le seguenti modifiche sono state apportate per soddisfare PHPStan livello 9:
=======
>>>>>>> .merge_file_nY17UK
>>>>>>> .merge_file_4kx6JZ
=======
>>>>>>> laraxot/dev

## Miglioramenti PHPStan Livello 9
Le seguenti modifiche sono state apportate per soddisfare PHPStan livello 9:

<<<<<<< HEAD
<<<<<<< .merge_file_N0K9eP
=======
<<<<<<< .merge_file_hv4tsL
<<<<<<< HEAD
=======
>>>>>>> .merge_file_4kx6JZ
=======
## Miglioramenti PHPStan Livello 9
Le seguenti modifiche sono state apportate per soddisfare PHPStan livello 9:
>>>>>>> laraxot/dev
<<<<<<< .merge_file_N0K9eP
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_nY17UK
>>>>>>> laraxot/dev
>>>>>>> .merge_file_4kx6JZ
=======
>>>>>>> laraxot/dev
1. Tipizzazione stretta dei parametri
2. Gestione null-safe degli oggetti Address
3. Validazione dei dati di input
4. Correzione dei type hints per le proprietà
5. Implementazione delle interfacce corrette
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_N0K9eP
=======
<<<<<<< .merge_file_hv4tsL
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_nY17UK
## Utilizzo
```php
use Modules\UI\ment\Forms\Components\AddressField;
=======
<<<<<<< .merge_file_hv4tsL
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_nY17UK
>>>>>>> .merge_file_4kx6JZ
=======
>>>>>>> laraxot/dev

## Utilizzo
```php
use Modules\UI\ment\Forms\Components\AddressField;

<<<<<<< HEAD
<<<<<<< .merge_file_N0K9eP
=======
<<<<<<< .merge_file_hv4tsL
<<<<<<< HEAD
=======
>>>>>>> .merge_file_4kx6JZ
=======
## Utilizzo
```php
use Modules\UI\ment\Forms\Components\AddressField;
>>>>>>> laraxot/dev
<<<<<<< .merge_file_N0K9eP
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_nY17UK
>>>>>>> laraxot/dev
>>>>>>> .merge_file_4kx6JZ
=======
>>>>>>> laraxot/dev
AddressField::make('address')
    ->required()
    ->searchable()
    ->withMap()
    ->withValidation();
```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_N0K9eP

=======
=======
<<<<<<< .merge_file_hv4tsL

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_nY17UK
>>>>>>> .merge_file_4kx6JZ
>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
## Best Practices
1. Utilizzare sempre la validazione dei campi
2. Implementare la gestione degli errori per il geocoding
3. Configurare correttamente i servizi di geocoding
4. Testare con diversi formati di indirizzo
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_N0K9eP

[Torna alla documentazione UI](/docs/modules/module_ui.md#components)
=======
<<<<<<< HEAD
=======

[Torna alla documentazione UI](/docs/modules/module-ui-1.md#components)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
[Torna alla documentazione UI](/docs/modules/module_ui.md#components) 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_hv4tsL

[Torna alla documentazione UI](/docs/modules/module_ui.md#components)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

[Torna alla documentazione UI](/docs/modules/module_ui.md#components)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======

[Torna alla documentazione UI](/docs/modules/module-ui-1.md#components)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
[Torna alla documentazione UI](/docs/modules/module_ui.md#components) 
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
=======

[Torna alla documentazione UI](/docs/modules/module_ui.md#components)
>>>>>>> .merge_file_nY17UK
>>>>>>> .merge_file_4kx6JZ
>>>>>>> laraxot/dev
=======

[Torna alla documentazione UI](/docs/modules/module_ui.md#components)
>>>>>>> laraxot/dev
