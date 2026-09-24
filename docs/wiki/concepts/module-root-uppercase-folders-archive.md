---
<<<<<<< .merge_file_xGVA1E
=======
<<<<<<< HEAD
<<<<<<< .merge_file_3VSsU3
=======
<<<<<<< .merge_file_LiNAn0
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_lsZw95
title: "Archivio Config.bak — modulo UI"
type: concept
module: UI
status: active
tags: [module-structure, config, archive]
updated: "2026-06-30"
related:
  - ../../../../../../docs/project/module-root-structure-analysis.md
---

# Archivio `Config.bak/` — UI

## Situazione

`Config.bak/` duplicava i file già in `config/`:
<<<<<<< .merge_file_xGVA1E
=======
=======
>>>>>>> .merge_file_06SswA
>>>>>>> .merge_file_3ZP5Vv
title: "Archivio cartelle config duplicate — modulo UI"
type: concept
module: UI
status: resolved
tags: [module-structure, config, archive, ponytail]
created: 2026-06-30
updated: 2026-07-01
qmd: "UI modulo Config maiuscolo config minuscolo duplicato ponytail"
issues:
  - "https://github.com/laraxot/base_predict_fila5/issues/221"
discussions:
  - "https://github.com/laraxot/base_predict_fila5/discussions/222"
related:
  - ponytail-audit.md
  - ../../../../../../docs/project/module-root-structure-analysis.md
---

# Cartelle config duplicate — UI

## Situazione (risolta 2026-07-01)

`Config/` (maiuscolo) e `Config.bak/` duplicavano i file già in `config/`:
<<<<<<< .merge_file_3VSsU3
=======
=======
<<<<<<< .merge_file_LiNAn0
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_3ZP5Vv
title: "Archivio Config.bak — modulo UI"
type: concept
module: UI
status: active
tags: [module-structure, config, archive]
updated: "2026-06-30"
related:
  - ../../../../../../docs/project/module-root-structure-analysis.md
---

# Archivio `Config.bak/` — UI

## Situazione

`Config.bak/` duplicava i file già in `config/`:
<<<<<<< .merge_file_3VSsU3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_06SswA
>>>>>>> .merge_file_3ZP5Vv
>>>>>>> laraxot/dev
>>>>>>> .merge_file_lsZw95

- `config.php`
- `laravel-localization.php`
- `laravellocalization.php`

## Regola

<<<<<<< .merge_file_xGVA1E
=======
<<<<<<< HEAD
<<<<<<< .merge_file_3VSsU3
=======
<<<<<<< .merge_file_LiNAn0
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
Solo `config/` (minuscolo) alla root.

## Azione

`Config` → `Config.bak` (2026-06-30). Merge non necessario: contenuti allineati.
=======
>>>>>>> .merge_file_06SswA
>>>>>>> .merge_file_3ZP5Vv
Solo `config/` (minuscolo) alla root del modulo nwidart.

## Azione

Rimossi `Config/` e `Config.bak/`; nessun autoload/require li referenziava. Git history conserva le versioni precedenti.
<<<<<<< .merge_file_3VSsU3
=======
=======
<<<<<<< .merge_file_LiNAn0
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_3ZP5Vv
>>>>>>> .merge_file_lsZw95
Solo `config/` (minuscolo) alla root.

## Azione

`Config` → `Config.bak` (2026-06-30). Merge non necessario: contenuti allineati.
<<<<<<< .merge_file_xGVA1E
=======
<<<<<<< .merge_file_3VSsU3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_06SswA
>>>>>>> .merge_file_3ZP5Vv
>>>>>>> laraxot/dev
>>>>>>> .merge_file_lsZw95
