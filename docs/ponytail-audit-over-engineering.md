# Ponytail audit — UI (over-engineering)

<<<<<<< .merge_file_Ml71Sh
**Ultimo run:** 2026-06-30  
=======
<<<<<<< HEAD
<<<<<<< .merge_file_cnvj22
=======
<<<<<<< .merge_file_AIPy2Y
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
**Ultimo run:** 2026-06-30  
=======
>>>>>>> .merge_file_GrWaaM
>>>>>>> .merge_file_kNq4rE
**Ultimo run:** 2026-07-01  
>>>>>>> laraxot/dev
>>>>>>> .merge_file_S0ARd2
**Modulo:** design system, componenti Filament/Blade condivisi.  
**Hub:** [../../../../docs/audit/ponytail-audit.md](../../../../docs/audit/ponytail-audit.md)  
**Remediation:** [../../../../docs/project/ponytail-audit-remediation.md](../../../../docs/project/ponytail-audit-remediation.md)
**GitHub monorepo:** [Issue #221](https://github.com/laraxot/base_predict_fila5/issues/221) · [Discussion #222](https://github.com/laraxot/base_predict_fila5/discussions/222) · [Discussion #228](https://github.com/laraxot/base_predict_fila5/discussions/228)
**GitHub monorepo:** [Issue #221](https://github.com/laraxot/<nome repository>/discussions/228)
**GitHub monorepo:** [Issue #221](https://github.com/laraxot/<nome repository>/discussions/228)

## Findings

| # | Tag | Cosa | Sostituzione | Path |
|---|-----|------|--------------|------|
| UI1 | `delete`→`.bak` | `Config.bak/` (duplicato nested di `config/`) | Solo `config/` | `Config.bak/` |
| UI2 | `delete` | `docs/archive/` (~144 file duplicati sessione) | Solo `docs/wiki/` | `docs/archive/` |
| UI3 | `delete` | ~26 stub `.md` in root modulo (`api.md`, `blocks.md`, …) | `docs/` + indici | root `Modules/UI/*.md` |
<<<<<<< .merge_file_Ml71Sh
=======
=======

## Findings

| # | Tag | Cosa | Sostituzione | Path | Stato |
|---|-----|------|--------------|------|-------|
| UI0 | `delete` | Layer Map/Geocoding speculativo (contratto + `Null*` senza wiring) | Geo module quando serve | `app/Contracts/`, `app/Services/Map/` | ✅ 2026-07-01 |
| UI1 | `delete` | `Config/` maiuscolo + `Config.bak/` (duplicato di `config/`) | Solo `config/` | `Config/`, `Config.bak/` | ✅ 2026-07-01 |
| UI2 | `delete` | `docs/archive/` (~144 file duplicati sessione) | Solo `docs/wiki/` | `docs/archive/` | ✅ 2026-07-01 |
| UI3 | `delete` | ~26 stub `.md` / `.txt` in root + mirror `_docs/`, `docs/root-*` | `docs/wiki/` + indici | root `Modules/UI/*`, `_docs/` | ✅ 2026-07-01 |
<<<<<<< .merge_file_cnvj22
=======
=======
<<<<<<< .merge_file_AIPy2Y
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kNq4rE
**Ultimo run:** 2026-06-30  
**Modulo:** design system, componenti Filament/Blade condivisi.  
**Hub:** [../../../../docs/audit/ponytail-audit.md](../../../../docs/audit/ponytail-audit.md)  
**Remediation:** [../../../../docs/project/ponytail-audit-remediation.md](../../../../docs/project/ponytail-audit-remediation.md)
<<<<<<< HEAD
**GitHub monorepo:** [Issue #221](https://github.com/laraxot/base_predict_fila5/issues/221) · [Discussion #222](https://github.com/laraxot/base_predict_fila5/discussions/222) · [Discussion #228](https://github.com/laraxot/base_predict_fila5/discussions/228)
<<<<<<< HEAD
**GitHub monorepo:** [Issue #221](https://github.com/laraxot/<nome repository>/discussions/228)
**GitHub monorepo:** [Issue #221](https://github.com/laraxot/<nome repository>/discussions/228)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
**GitHub monorepo:** [Issue #221](https://github.com/laraxot/<nome repository>/discussions/228)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
**GitHub monorepo:** [Issue #221](https://github.com/laraxot/<nome repository>/discussions/228)
=======
**GitHub monorepo:** [Issue #221](https://github.com/laraxot/<nome repository>/discussions/228)
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev

## Findings

| # | Tag | Cosa | Sostituzione | Path |
|---|-----|------|--------------|------|
| UI1 | `delete`→`.bak` | `Config.bak/` (duplicato nested di `config/`) | Solo `config/` | `Config.bak/` |
| UI2 | `delete` | `docs/archive/` (~144 file duplicati sessione) | Solo `docs/wiki/` | `docs/archive/` |
| UI3 | `delete` | ~26 stub `.md` in root modulo (`api.md`, `blocks.md`, …) | `docs/` + indici | root `Modules/UI/*.md` |
<<<<<<< .merge_file_cnvj22
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_GrWaaM
>>>>>>> .merge_file_kNq4rE
>>>>>>> laraxot/dev
>>>>>>> .merge_file_S0ARd2

## Collegamenti

- [wiki/concepts/ponytail-audit.md](./wiki/concepts/ponytail-audit.md)
<<<<<<< .merge_file_Ml71Sh
=======
<<<<<<< HEAD
<<<<<<< .merge_file_cnvj22
- [00-INDEX.md](./00-INDEX.md)
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_AIPy2Y
- [00-INDEX.md](./00-INDEX.md)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [00-INDEX.md](./00-INDEX.md)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_GrWaaM
>>>>>>> .merge_file_kNq4rE
>>>>>>> .merge_file_S0ARd2
- [00-INDEX.md](./00-index.md)
- [00-INDEX.md](./00-INDEX.md)
- [00-INDEX.md](./00-index.md)

- [00-INDEX.md](./00-INDEX.md)

- [00-INDEX.md](./00-index.md)

- [00-INDEX.md](./00-index.md)
<<<<<<< .merge_file_Ml71Sh
=======
=======
<<<<<<< .merge_file_cnvj22
<<<<<<< HEAD
- [00-INDEX.md](./00-INDEX.md)
=======
- [00-index.md](./00-index.md)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_AIPy2Y
<<<<<<< HEAD
- [00-INDEX.md](./00-INDEX.md)
=======
- [00-index.md](./00-index.md)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- [00-INDEX.md](./00-INDEX.md)
>>>>>>> .merge_file_GrWaaM
>>>>>>> .merge_file_kNq4rE
>>>>>>> laraxot/dev
>>>>>>> .merge_file_S0ARd2
