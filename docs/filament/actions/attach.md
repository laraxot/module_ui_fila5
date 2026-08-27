---
title: "Attach"
type: concept
tags: [attach]
created: 2026-07-14
updated: 2026-07-14
qmd: "attach attach"
<<<<<<< .merge_file_x7DwCM
issues: ["https://github.com/provtv/base_ptv_fila5/issues/124"]
discussions: ["https://github.com/provtv/base_ptv_fila5/discussions/1"]

=======
<<<<<<< .merge_file_6L1GOW
issues: ["https://github.com/provtv/base_ptv_fila5/issues/124"]
discussions: ["https://github.com/provtv/base_ptv_fila5/discussions/1"]

=======
<<<<<<< HEAD
=======
issues: ["https://github.com/provtv/base_ptv_fila5/issues/124"]
discussions: ["https://github.com/provtv/base_ptv_fila5/discussions/1"]

>>>>>>> laraxot/dev
>>>>>>> .merge_file_fm9vva
>>>>>>> .merge_file_LzcrZ7
issues: ["https://github.com/provtv/<nome repository>/issues/124"]
discussions: ["https://github.com/provtv/<nome repository>/discussions/1"]
related:
  - "./pdf.md"
---

```php
AttachAction::make()->modifyRecordSelectUsing(
fn ($select) => $select->getOptionLabelFromRecordUsing(fn ($record) => $record->name . ' ' . $record->organization)
);
```

```php
AttachAction::make()
    ->recordTitle(fn (Model $record) => "{$record->name} ({$record->organisation->name})")
```
