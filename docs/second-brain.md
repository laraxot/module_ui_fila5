---
title: second brain — puntatore modulo UI
type: reference
qmd: second brain UI phpstan merge conflicts adapters map null services
updated: 2026-07-22
issues:
  - https://github.com/provtv/module_ui_fila5/issues
discussions:
  - https://github.com/laraxot/base_fixcity_fila5/discussions/273
---

# Second brain (modulo UI)

Stub **puntatore**: disciplina globale nella wiki di progetto; qui solo lezioni operative del modulo.

## Link operativi (relativi al repo)

- Modello: [../../../../docs/wiki/concepts/second-brain-operating-model.md](../../../../docs/wiki/concepts/second-brain-operating-model.md)
- Git forward-only: [../../../../docs/wiki/rules/git-forward-only.md](../../../../docs/wiki/rules/git-forward-only.md)
- Sweep PHPStan: [../../../../docs/chat/phpstan-l10-sweep-2026-07-22.md](../../../../docs/chat/phpstan-l10-sweep-2026-07-22.md)
- Board multi-agente: [../../../../docs/chat/multi-agent-standing-coordination.md](../../../../docs/chat/multi-agent-standing-coordination.md)

## Lezioni PHPStan / merge (2026-07-22)

| Problema | Perché | Fix |
|----------|--------|-----|
| Bootstrap `unexpected <<` | Marker merge in PHP UI | Studiare `git show provtv/dev:path` e riscrivere (no restore) |
| `phpstan.path` su `Services/Map/Null*Service` | File rimossi; cache swarm stale | Equivalente in `Adapters/Map/*Adapter`; wipe `storage/phpstan-swarm/*/cache-*` |
| Race durante analyse lungo | Altri agenti re-introducono conflitti | Lock file caldi; claim su board |

**Map/Geo:** null-object = `app/Adapters/Map/NullMapServiceAdapter` + `NullGeocodingServiceAdapter` — non ricreare `app/Services/Map/`.

Remotes tipici: `provtv` + `laraxot` → `module_ui_fila5` (`git remote -v`).
