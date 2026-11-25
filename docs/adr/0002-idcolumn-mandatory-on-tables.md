---
status: accepted
date: 2026-11-25
decision-makers:
  - product
  - architecture
qmd: "ADR UI 0002 IDColumn mandatory Filament tables RecordAnchor"
---

# IDColumn mandatory on every Filament table

## Context and Problem Statement

Every Filament list row has a primary key. Without a typed `id` column the operator cannot cite the row (support, debug, deep-link). Pages that override `getTableColumns()` tend to omit `id` (e.g. Servizi tab on scheda 11254). Filament does not emit a stable `id` on the `<tr>`: the cell itself must carry an HTML target ([id-column-record-anchor](../id-column-record-anchor.md), [RecordAnchor](../../../Xot/docs/filament/record-anchor-return-to.md)).

How do we guarantee every Filament table exposes a shareable, typed id column with a row anchor?

**Related**: story [idcolumn-mandatory-filament-tables](../bmad/stories/idcolumn-mandatory-filament-tables.story.md). Promotes the rule already described in `id-column-record-anchor.md`. Former unnumbered kebab-only path removed; canonico = questo file `0002-…`.

## Decision Drivers

- Operability: cite and share a row via `#record-{id}`.
- DRY: one column type (`Modules\UI\Filament\Tables\Columns\IDColumn`), not ad-hoc `TextColumn::make('id')`.
- Return-from-edit: `RecordAnchor::appendTo()` must target the column anchor.
- Avoid gaps from full overrides of `getTableColumns()`.

## Considered Options

- Only `TextColumn::make('id')` — no anchor, no coherent copyable behaviour.
- Inject `id` only in Progressioni leaf pages — repeats the gap on every new tab.
- Put the anchor on the `<tr>` via JS — fragile against Livewire `wire:key`.
- Mandatory `IDColumn` as first column, with Sigma history base prepend — chosen.

## Decision Outcome

Scelta: **mandatory `IDColumn` as first column on every Filament table**, perché operability + DRY + RecordAnchor alignment, with a single owner in UI and a final prepend on Sigma history bases.

1. **Mandate**: every `getTableColumns()` / Table class exposes `'id' => IDColumn::make()` (or `IDColumn::make('id')`) as the first column.
2. **Owner**: module **UI** owns `IDColumn`; **Xot** owns `RecordAnchor`.
3. **Rendering**: the cell is a self-link
   `<a id="record-{id}" href="#record-{id}" class="scroll-mt-24">…</a>`
   (browser copy-link, row bookmark) plus `copyable()` on the raw id state.
4. **Sigma history (Ptv)**: `BaseSigmaHistoryScheda::getTableColumns()` is `final` and prepends `IDColumn` if missing; leaves implement `getSigmaTableColumns()`.
5. **Forbidden**: hardcoded `->label('ID')` (LangServiceProvider / `Column::configureUsing`).

### Consequences

- Buono, perché deep-link `#record-*`, copy id, parity across Servizi/Qualifiche/… tabs.
- Cattivo, perché leaves that overrode `getTableColumns` without id need a refactor.
- Neutro, perché `ColumnBuilder::id()` remains a facade to `IDColumn`.

### Confirmation

- Story: [idcolumn-mandatory-filament-tables](../bmad/stories/idcolumn-mandatory-filament-tables.story.md)
- Pest: `Modules/UI/tests/Feature/IDColumnTest.php` (self-link + escape)
- Source guard: Sigma history tabs include key `id` typed as `IDColumn`
- PHPStan on `IDColumn` + `Base*Scheda`
- Host `10.100.200.15`: Pest skip (data-sacred)
