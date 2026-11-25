---
title: "IDColumn: colonna id e ancora della riga"
qmd: "ui id column record anchor md IDColumn mandatory ADR"
type: note
tags: [documentation]
updated: 2026-11-25
---

# IDColumn: colonna id e ancora della riga

**Policy:** ogni `getTableColumns()` Filament inizia con `IDColumn` — decisione
canonica [idcolumn-mandatory-on-tables](adr/idcolumn-mandatory-on-tables.md).

## Cosa fa

`Modules\UI\Filament\Tables\Columns\IDColumn` e' una `TextColumn` preconfigurata per la
chiave primaria: ordinabile, cella HTML con ancora di riga, `copyableState` che
espone solo il valore id (non lo `<span>`).

```php
use Modules\UI\Filament\Tables\Columns\IDColumn;

'id' => IDColumn::make('id'),
```

Rende:

```html
<span id="record-1875" class="scroll-mt-24">1875</span>
```

Da qui l'URL della lista con frammento `#record-1875` porta il browser sulla riga.
La classe `scroll-mt-24` evita che la riga finisca sotto l'header sticky.

## Perche' l'ancora sta nella cella

Filament 5 non emette `id` o `data-*` per riga: sul `<tr>` c'e' solo `wire:key`, la cui
prima parte e' l'id Livewire, rigenerato a ogni caricamento. Non e' un bersaglio stabile
per un frammento, quindi l'ancora la mette la colonna.

Il formato dell'id sta in `Modules\Xot\Filament\Links\RecordAnchor`: la colonna lo
legge, i link di ritorno dall'edit lo appendono. Non duplicare la stringa `record-` altrove.

## Uso dentro GroupColumn

Funziona anche come figlia di `GroupColumn`: la view del gruppo rispetta `isHtml()` della
colonna figlia, quindi l'ancora non viene escapata. Esempio reale:
`Modules\Ptv\Filament\Tables\Columns\HaDirittoColumn`.

## Riferimenti

- ADR (obbligo su tutte le tabelle): [idcolumn-mandatory-on-tables](adr/idcolumn-mandatory-on-tables.md)
- `Modules/UI/app/Filament/Tables/Columns/IDColumn.php`
- Xot return/anchor: [record-anchor-return-to](../../Xot/docs/filament/record-anchor-return-to.md)
- Reclamo Sigma tabs: [sigma-tabs-idcolumn](../../Progressioni/docs/bmad/stories/sigma-tabs-idcolumn.story.md)

