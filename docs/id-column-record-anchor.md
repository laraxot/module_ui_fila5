---
title: "IDColumn: colonna id e ancora della riga"
qmd: "ui id column record anchor self-link copyable mandatory getTableColumns"
type: note
tags: [documentation]
---

# IDColumn: colonna id e ancora della riga

SSoT decisione: [ADR 0002](adr/0002-idcolumn-mandatory-on-tables.md).
Sigma history: foglie = `getTableColumns()` + `withIdColumn()` (ADR Ptv
[0005](../../Ptv/docs/adr/0005-gettablecolumns-not-domain-prefix.md)) — mai
`getSigmaTableColumns`.

```php
'id' => IDColumn::make('id'),
```

Rendering: self-link `#record-{id}` + `copyable()` sull'id grezzo.
