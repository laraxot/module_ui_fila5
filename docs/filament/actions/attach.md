<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_nA6Hmy
=======
=======
<<<<<<< .merge_file_DJRJIg
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_1JpCnW
>>>>>>> .merge_file_4b2FML
---
title: "Attach"
type: concept
tags: [attach]
created: 2026-07-14
updated: 2026-07-14
qmd: "attach attach"
<<<<<<< .merge_file_nA6Hmy
=======
<<<<<<< .merge_file_DJRJIg
>>>>>>> .merge_file_4b2FML
<<<<<<< HEAD
issues: ["https://github.com/provtv/base_ptv_fila5/issues/124"]
discussions: ["https://github.com/provtv/base_ptv_fila5/discussions/1"]
<<<<<<< HEAD
issues: ["https://github.com/provtv/<nome repository>/issues/124"]
discussions: ["https://github.com/provtv/<nome repository>/discussions/1"]
=======
=======
issues: ["https://github.com/provtv/<nome repository>/issues/124"]
discussions: ["https://github.com/provtv/<nome repository>/discussions/1"]
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_nA6Hmy
=======
=======
issues: ["https://github.com/provtv/base_ptv_fila5/issues/124"]
discussions: ["https://github.com/provtv/base_ptv_fila5/discussions/1"]
issues: ["https://github.com/provtv/<nome repository>/issues/124"]
discussions: ["https://github.com/provtv/<nome repository>/discussions/1"]
>>>>>>> .merge_file_1JpCnW
>>>>>>> .merge_file_4b2FML
related:
  - "./pdf.md"
---

<<<<<<< .merge_file_nA6Hmy
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_DJRJIg
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_1JpCnW
>>>>>>> .merge_file_4b2FML
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
```php
AttachAction::make()->modifyRecordSelectUsing(
fn ($select) => $select->getOptionLabelFromRecordUsing(fn ($record) => $record->name . ' ' . $record->organization)
);
```

```php
AttachAction::make()
    ->recordTitle(fn (Model $record) => "{$record->name} ({$record->organisation->name})")
```
