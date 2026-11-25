---
title: "ADR — IDColumn obbligatorio come prima colonna di ogni tabella Filament"
type: decision
status: accepted
created: 2026-11-25
updated: 2026-11-25
decision-makers: UI module owner
module: UI
date: 2026-11-25
qmd: "ADR UI IDColumn mandatory getTableColumns first column RecordAnchor deep link copyable"
---

# Ogni tabella Filament inizia con IDColumn

## Contesto

`Modules\UI\Filament\Tables\Columns\IDColumn` e' la `TextColumn` condivisa per la
chiave primaria: emette l'ancora HTML `id="record-{id}"` (via
`Modules\Xot\Filament\Links\RecordAnchor`), e' ordinabile e espone lo stato
copiabile senza trascinare il markup negli appunti.

Su tab Sigma (es. `/progressioni/admin/schedas/{id}/servizi`) la colonna ID
manca del tutto; altrove compare come `TextColumn::make('id')` ad hoc (niente
ancora, label hardcoded). Senza `IDColumn` il deep link `#record-{id}`, il
ritorno post-edit e il supporto operativo restano ciechi.

Domanda: come garantire ancora, id copiabile e UX uniforme su **tutte** le
tabelle Filament senza duplicare markup o prefissi?

## Driver della decisione

- deep link stabile `#record-{id}` (Filament 5 non mette `id` sul `<tr>`);
- un solo formato ancora (`RecordAnchor::PREFIX`), riusato da return_to / edit;
- id visibile e copiabile per supporto e audit;
- DRY: una colonna UI, non N varianti `TextColumn` + HTML locale;
- KISS: prima chiave di `getTableColumns()`, pattern ovvio in review.

## Alternative scartate

- `TextColumn::make('id')` ovunque: niente ancora, niente `copyableState` sicuro,
  label spesso hardcoded.
- Ancora sul `<tr>` via hook Livewire/Filament: fragile, fuori dal contratto
  Filament 5, duplica `RecordAnchor`.
- Solo su alcune resource «importanti»: gap ripetuti (Servizi senza ID mentre
  Assenze ha un TextColumn grezzo).

## Decisione

**Ogni** `getTableColumns()` (Resource Table, RelationManager, pagina tab con
tabella) **deve** iniziare con:

```php
use Modules\UI\Filament\Tables\Columns\IDColumn;

'id' => IDColumn::make('id'),
```

Vietato sostituirla con `TextColumn::make('id')` o HTML ancora inline.
Il prefisso `record-` vive solo in `RecordAnchor`. How-to operativo:
[id-column-record-anchor](../id-column-record-anchor.md). Return post-salvataggio:
[record-anchor-return-to](../../../Xot/docs/filament/record-anchor-return-to.md).

## Conseguenze

- Buono, perché ogni lista ha deep link e id copiabile senza codice ripetuto.
- Buono, perché review e Pest possono assertare «prima colonna = IDColumn».
- Cattivo, perché le tabelle legacy con `TextColumn::make('id')` o senza `id`
  sono debito esplicito da migrare (es. tab Sigma Base*Scheda).
- Cattivo, perché `searchable()` sull'id resta a carico del chiamante (costo LIKE):
  `IDColumn` non lo forza.

## Conferma

- Implementazione: [`IDColumn.php`](../../app/Filament/Tables/Columns/IDColumn.php).
- Ancora / return_to: [`RecordAnchor.php`](../../../Xot/app/Filament/Links/RecordAnchor.php).
- Story reclamo Sigma tabs: [sigma-tabs-idcolumn](../../../Progressioni/docs/bmad/stories/sigma-tabs-idcolumn.story.md).
- Gate: Pest (presence / tipo prima colonna) + PHPStan sulle foglie migrate;
  skip Pest su host `10.100.200.15`.
