---
title: "IDColumn: colonna id e ancora della riga"
qmd: "ui id column record anchor self-link copyable mandatory"
type: note
tags: [documentation]
---

# IDColumn: colonna id e ancora della riga

> Fact-gate: aggiorna stesso file; link da ADR [0002-idcolumn-mandatory-on-tables](adr/0002-idcolumn-mandatory-on-tables.md).
> User: «colonna id di tipo IDColumn … migliorare con anchor link … docs/adr».

## Cosa fa

`Modules\UI\Filament\Tables\Columns\IDColumn` e' la colonna **obbligatoria** per la
chiave primaria: ordinabile, `copyable()` sullo stato grezzo, cella = self-link
ancora della riga. ADR: [0002-idcolumn-mandatory-on-tables](adr/0002-idcolumn-mandatory-on-tables.md).

```php
use Modules\UI\Filament\Tables\Columns\IDColumn;

'id' => IDColumn::make(),
```

Rende:

```html
<a id="record-1875" href="#record-1875" class="scroll-mt-24 hover:underline" title="#record-1875">1875</a>
```

Da qui:

- URL lista + `#record-1875` → scroll sulla riga;
- «Copia indirizzo link» condivide il deep-link;
- copyable Filament copia l'id grezzo.

## Sigma history (Ptv)

<<<<<<< .merge_file_U82FAD
`BaseSigmaHistoryScheda::getTableColumns()` e' `final` e usa `withIdColumn()`;
le foglie espongono `getSigmaTableColumns()`. Assenze usa `IDColumn::make('id')`.
=======
`BaseSigmaHistoryScheda::getTableColumns()` e' **`final`** e prepende sempre
`IDColumn`. Le foglie (Servizi, Qualifiche, Storico, IntegParams) espongono solo
`getSigmaTableColumns()` (colonne di dominio, senza `id`). Assenze (fuori dalla
gerarchia) usa `IDColumn::make('id')` esplicitamente.

## Uso dentro GroupColumn

Funziona come figlia di `GroupColumn`: la view rispetta `isHtml()`.
>>>>>>> .merge_file_KA7afu

## Riferimenti

- `Modules/UI/app/Filament/Tables/Columns/IDColumn.php`
- `Modules/Xot/docs/filament/record-anchor-return-to.md`
- Story: [idcolumn-mandatory-filament-tables](bmad/stories/idcolumn-mandatory-filament-tables.story.md)
