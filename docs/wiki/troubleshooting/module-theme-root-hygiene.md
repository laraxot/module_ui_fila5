---
<<<<<<< .merge_file_7KwDP6
title: "Root modulo/tema — zero .txt, max 6 .md"
=======
<<<<<<< HEAD
<<<<<<< .merge_file_H9aIl4
title: "Root modulo/tema — zero .txt, max 4 .md"
=======
title: "Root modulo/tema — zero .txt, max 6 .md"
=======
<<<<<<< .merge_file_5MLC9a
title: "Root modulo/tema — zero .txt, max 4 .md"
=======
<<<<<<< HEAD
title: "Root modulo/tema — zero .txt, max 6 .md"
=======
<<<<<<< HEAD
title: "Root modulo/tema — zero .txt, max 4 .md"
=======
title: "Root modulo/tema — zero .txt, max 6 .md"
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
title: "Root modulo/tema — zero .txt, max 6 .md"
=======
title: "Root modulo/tema — zero .txt, max 4 .md"
>>>>>>> .merge_file_qeFkI5
>>>>>>> .merge_file_7MmBAG
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TXv2KR
type: rule
module: UI
tags: [hygiene, modules, themes, txt, markdown]
created: 2026-07-08
updated: 2026-07-08
qmd: "module theme root txt md hygiene audit fix"
related:
<<<<<<< .merge_file_7KwDP6
=======
<<<<<<< HEAD
<<<<<<< .merge_file_H9aIl4
  - ../../../../../../docs/wiki/rules/module-theme-root-no-txt-files.md
  - ../../../../../../docs/wiki/rules/module-theme-root-md-files-limit.md
=======
=======
<<<<<<< .merge_file_5MLC9a
  - ../../../../../../docs/wiki/rules/module-theme-root-no-txt-files.md
  - ../../../../../../docs/wiki/rules/module-theme-root-md-files-limit.md
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
  - ../../../../../../docs/wiki/rules/module-theme-root-no-txt-files.md
  - ../../../../../../docs/wiki/rules/module-theme-root-md-files-limit.md
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_7MmBAG
>>>>>>> .merge_file_TXv2KR
  - "./git-merge-conflict-inventory-1.md"
  - "./git-merge-conflict-inventory.md"
  - "./git-push-lfs-missing-objects.md"
  - "./git-push-lfs-missing-objects.md"
  - "./phpstan-fixes-1.md"
  - "./phpstan-fixes.md"
<<<<<<< .merge_file_7KwDP6
=======
<<<<<<< .merge_file_H9aIl4
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
  - "./git-merge-conflict-inventory-1.md"
  - "./git-merge-conflict-inventory.md"
  - "./git-push-lfs-missing-objects.md"
  - "./git-push-lfs-missing-objects.md"
  - "./phpstan-fixes-1.md"
  - "./phpstan-fixes.md"
=======
  - ../../../../../../docs/wiki/rules/module-theme-root-no-txt-files.md
  - ../../../../../../docs/wiki/rules/module-theme-root-md-files-limit.md
>>>>>>> .merge_file_qeFkI5
>>>>>>> .merge_file_7MmBAG
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TXv2KR
---

# Root modulo/tema — igiene

## Regola

| Root `Modules/*` e `Themes/*` | Consentito |
|---------------------------------|------------|
| `*.txt` | **0** |
<<<<<<< .merge_file_7KwDP6
| `*.md` | **max 6**: preferiti `README.md`, `CHANGELOG.md`, `LICENSE.md`, `AGENTS.md`, `CLAUDE.md` +1 |
=======
<<<<<<< HEAD
<<<<<<< .merge_file_H9aIl4
| `*.md` | **max 4**: `README.md`, `CHANGELOG.md`, `LICENSE.md`, `AGENTS.md` |
=======
| `*.md` | **max 6**: preferiti `README.md`, `CHANGELOG.md`, `LICENSE.md`, `AGENTS.md`, `CLAUDE.md` +1 |
=======
<<<<<<< .merge_file_5MLC9a
| `*.md` | **max 4**: `README.md`, `CHANGELOG.md`, `LICENSE.md`, `AGENTS.md` |
=======
<<<<<<< HEAD
| `*.md` | **max 6**: preferiti `README.md`, `CHANGELOG.md`, `LICENSE.md`, `AGENTS.md`, `CLAUDE.md` +1 |
=======
<<<<<<< HEAD
| `*.md` | **max 4**: `README.md`, `CHANGELOG.md`, `LICENSE.md`, `AGENTS.md` |
=======
| `*.md` | **max 6**: preferiti `README.md`, `CHANGELOG.md`, `LICENSE.md`, `AGENTS.md`, `CLAUDE.md` +1 |
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
| `*.md` | **max 6**: preferiti `README.md`, `CHANGELOG.md`, `LICENSE.md`, `AGENTS.md`, `CLAUDE.md` +1 |
=======
| `*.md` | **max 4**: `README.md`, `CHANGELOG.md`, `LICENSE.md`, `AGENTS.md` |
>>>>>>> .merge_file_qeFkI5
>>>>>>> .merge_file_7MmBAG
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TXv2KR
| Cartelle | solo **lowercase** (`app`, `config`, `docs`, …) |

## Perché

La root è la **superficie tecnica** del package (manifest nwidart, autoload, README). Appunti `.txt` e report `.md` sporcano audit, QMD e push submodule.

## Audit

```bash
# da root monorepo
bash bashscripts/tools/audit-module-root-hygiene.sh

# solo moduli o un owner
bash bashscripts/tools/audit-module-root-hygiene.sh UI modules

# zero .txt in root
find laravel/Modules laravel/Themes -mindepth 2 -maxdepth 2 -type f -name '*.txt' | wc -l
# atteso: 0
```

## Fix automatico

```bash
bash bashscripts/tools/fix-module-root-hygiene.sh
bash bashscripts/tools/audit-module-root-hygiene.sh
```

Sposta:

- `.txt` → `docs/root-txt-files/`
- `.md` non ammessi → `docs/root-md-files/` (nome minuscolo kebab-case)

## Fix manuale (casi frequenti)

| Violazione | Azione |
|------------|--------|
| `api.md`, `blocks.md`, `QWEN.md` in root | `mv` → `docs/root-md-files/` |
| `changelog.md` + `CHANGELOG.md` | Tieni `CHANGELOG.md`, sposta duplicato |
| `README.en.md` / `README.it.md` | Sposta in `docs/root-md-files/`; vetrina = solo `README.md` |
| Cartella `Config/` con `config/` presente | `rm -rf Config/` |
| Cartelle maiuscole legacy (es. `Xot/Datas/`) | Archivia in `docs/root-uppercase-folders/` se **non** in PSR-4 `app/` |
| File vuoto `.md` | Elimina |

## Bonifica 2026-07-08 (monorepo)

23 violazioni risolte su moduli/temi (Job, Notify, UI, Xot, Zero, …). Audit finale: **OK**.

## Riferimenti

- Wiki: [module-theme-root-no-txt-files](../../../../../../docs/wiki/rules/module-theme-root-no-txt-files.md)
- Wiki: [module-theme-root-md-files-limit](../../../../../../docs/wiki/rules/module-theme-root-md-files-limit.md)
- Cursor: `.cursor/rules/module-root-hygiene.mdc`
