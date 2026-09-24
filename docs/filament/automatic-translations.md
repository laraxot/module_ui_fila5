<<<<<<< .merge_file_T2UQws
=======
<<<<<<< HEAD
<<<<<<< .merge_file_n2YBuO
=======
=======
<<<<<<< .merge_file_mccYuj
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ae8Ptr
>>>>>>> .merge_file_q8YVai
>>>>>>> .merge_file_eaYUMW
---
title: "Traduzioni Automatiche nei Componenti Filament"
type: concept
tags: [automatic, translations]
created: 2026-07-14
updated: 2026-07-14
qmd: "automatic-translations traduzioni automatiche nei componenti filament"
<<<<<<< .merge_file_T2UQws
=======
<<<<<<< .merge_file_n2YBuO
=======
<<<<<<< .merge_file_mccYuj
>>>>>>> .merge_file_q8YVai
<<<<<<< HEAD
>>>>>>> .merge_file_eaYUMW
issues: ["https://github.com/provtv/base_ptv_fila5/issues/124"]
discussions: ["https://github.com/provtv/base_ptv_fila5/discussions/1"]
issues: ["https://github.com/provtv/<nome repository>/issues/124"]
discussions: ["https://github.com/provtv/<nome repository>/discussions/1"]
<<<<<<< .merge_file_T2UQws
=======
=======
=======
issues: ["https://github.com/provtv/<nome repository>/issues/124"]
discussions: ["https://github.com/provtv/<nome repository>/discussions/1"]
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_n2YBuO
=======
=======
issues: ["https://github.com/provtv/base_ptv_fila5/issues/124"]
discussions: ["https://github.com/provtv/base_ptv_fila5/discussions/1"]
issues: ["https://github.com/provtv/<nome repository>/issues/124"]
discussions: ["https://github.com/provtv/<nome repository>/discussions/1"]
>>>>>>> .merge_file_ae8Ptr
>>>>>>> .merge_file_q8YVai
>>>>>>> .merge_file_eaYUMW
related:
  - "./best-practices.md"
  - "./component-icon-support.md"
  - "./component-methods-compatibility.md"
  - "./filament-4-components-guide.md"
  - "./filament-4-migration-guide.md"
  - "./filament-4-migration-summary.md"
  - "./filament-4-migration-sumy.md"
  - "./file-upload-component.md"
---

<<<<<<< .merge_file_T2UQws
=======
<<<<<<< .merge_file_n2YBuO
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_mccYuj
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ae8Ptr
>>>>>>> .merge_file_q8YVai
>>>>>>> .merge_file_eaYUMW
# Traduzioni Automatiche nei Componenti Filament

> **NOTA IMPORTANTE**: Questo documento è un riferimento specifico per il modulo UI. La documentazione completa sulle traduzioni automatiche si trova nel [modulo Lang](../../lang/docs/automatic-translations.md).

## Regola Fondamentale
In il progetto, **NON utilizzare mai** il metodo `->label()` nei componenti Filament. Le etichette vengono gestite automaticamente dal `LangServiceProvider` attraverso i file di traduzione.

## Implementazione Corretta

```php
// ✅ CORRETTO: Non specificare l'etichetta
Forms\Components\TextInput::make('first_name')
    ->required();
```

## Implementazione Errata

```php
// ❌ ERRATO: Specificare manualmente l'etichetta
Forms\Components\TextInput::make('first_name')
    ->label('Nome')
    ->required();
```

## Motivazioni

1. **Coerenza nell'interfaccia utente**: Le traduzioni centralizzate garantiscono coerenza in tutta l'applicazione
2. **Facilità di manutenzione**: Modificare le traduzioni in un unico punto è più efficiente
3. **Supporto multilingua**: I file di traduzione facilitano l'aggiunta di nuove lingue
4. **Automazione**: Il sistema genera automaticamente le chiavi di traduzione mancanti

## Struttura delle Chiavi di Traduzione

Le chiavi di traduzione vengono generate automaticamente seguendo questo formato:
```
{modulo}::{risorsa}.fields.{nome_campo}.label
```

Ad esempio:
```
patient::doctor.fields.first_name.label
```

## Collegamenti Bidirezionali

- [Documentazione Completa sulle Traduzioni Automatiche](../../lang/docs/automatic-translations.md)
- [Best Practices per i Componenti Filament](./component-methods-compatibility.md)
- [Convenzioni di Traduzione](../../lang/docs/translation-conventions.md)

## Collegamenti tra versioni di automatic-translations.md
* [automatic-translations.md](../../../lang/docs/automatic-translations.md)
