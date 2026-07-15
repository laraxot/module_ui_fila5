---
title: "TableLayoutEnum Usage Guide"
type: concept
tags: [table, layout, enum, usage]
created: 2026-07-14
updated: 2026-07-14
qmd: "table-layout-enum-usage-1 tablelayoutenum usage guide"
issues: ["https://github.com/provtv/base_ptv_fila5/issues/124"]
discussions: ["https://github.com/provtv/base_ptv_fila5/discussions/1"]
related:
  - "./advanced-form-components.md"
  - "./algolia-docsearch-1.md"
  - "./algolia-docsearch.md"
  - "./architecture-rules-1.md"
  - "./architecture-rules-2.md"
  - "./architecture-rules.md"
  - "./auth-pages.md"
  - "./base-components.md"
---

# TableLayoutEnum Usage Guide

## Nuovo Approccio (Corretto)

Dopo la correzione del problema di visibilità, il metodo `getTableColumns()` ora richiede parametri espliciti invece di usare debug_backtrace.

### Esempio di uso nelle classi ListRecords:

```php
use Modules\UI\Enums\TableLayoutEnum;

class ListUsers extends ListRecords
{
    protected TableLayoutEnum $layout;

    public function mount(): void
    {
        $this->layout = TableLayoutEnum::LIST;
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns($this->getColumnsForLayout())
            ->contentGrid($this->layout->getTableContentGrid());
    }

    /**
     * Restituisce le colonne appropriate per il layout corrente
     */
    protected function getColumnsForLayout(): array
    {
        $listColumns = [
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('email'),
            Tables\Columns\TextColumn::make('created_at'),
        ];

        $gridColumns = [
            Tables\Columns\Layout\Stack::make([
                Tables\Columns\TextColumn::make('name')
                    ->weight(FontWeight::Bold),
                Tables\Columns\TextColumn::make('email'),
            ]),
        ];

        return $this->layout->getTableColumns($listColumns, $gridColumns);
    }

    /**
     * Toggle del layout tramite action
     */
    protected function getHeaderActions(): array
    {
        return [
            Action::make('toggleLayout')
                ->icon($this->layout->getIcon())
                ->action(function () {
                    $this->layout = $this->layout->toggle();
                }),
        ];
    }
}
```

### Vantaggi del nuovo approccio:

1. **Type Safety**: Non usa più reflection o debug_backtrace
2. **Chiarezza**: Esplicito su quali colonne usare per ogni layout
3. **Testabilità**: Più facile da testare senza dipendenze nascoste
4. **Performance**: Nessun overhead di debug_backtrace

### Breaking Change:

Il metodo `getTableColumns()` ora richiede due parametri:
- `$listColumns`: Array delle colonne per layout lista
- `$gridColumns`: Array delle colonne per layout griglia
