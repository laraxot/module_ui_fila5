---
title: "UI — bonifica docs .md (convenzioni zen)"
type: story
status: done
module: UI
epic: docs-second-brain
created: 2026-11-25
updated: 2026-11-25
parent: ../../../../Xot/docs/bmad/stories/docs-zen-conventions-swarm.story.md
qmd: "ui docs bonifica kebab-case duplicati md5 underscore suffisso _1 template fabbricati getting-started placeholder frontmatter qmd fusione"
---

# UI — bonifica docs `.md`

## Perche'

Lane C dello swarm `laravel/Modules/Xot/docs/bmad/stories/docs-zen-conventions-swarm.story.md`: copie esatte
(`wiki/ui/UI-*.md` vs `ui-*.md`, `_archive/` vs `archive/`), nomi `_1`/underscore/UPPERCASE, template generici.

## Prima / Dopo

| Metrica | Prima | Dopo |
|---|---:|---:|
| file `.md` | 1024 | 836 (con questa story) |
| copie esatte (md5) oltre la prima | 61 | 7 (solo `*.story.md`) |
| nomi datati | 0 | 0 |
| non kebab | 169 | 1 (`llm-wiki/AGENTS.md`) |
| senza frontmatter | 2 | 0 |
| senza `qmd` | 2 | 0 |
| annidamenti generati (`.md`) | 0 | 0 |

## Cosa e' stato eliminato/fuso e perche'

- **54 copie esatte** rimosse (canonica: nome kebab, fuori da `_archive/`/`_integration`, senza suffisso); link riscritti.
- **123 rinomine kebab**: 5 pure, 65 sorgenti gia' contenute nel gemello (eliminate), 6 sorgenti che contenevano
  interamente il gemello (sostituito), 47 **fusioni** (paragrafi unici sotto `## Contenuto fuso (origine: <vecchio-nome>)`).
- **Template fabbricati eliminati** (nessuna classe/tabella/comando del modulo verificabile nel codice):
  `product-roadmap`, `product-strategy`, `product-launch-plan`, `launch-plan`, `strategy`, `sprint-planning`,
  `sprint-planning-meeting`, `user-research`, `confidence-guidelines`, `tech-spec` (scheletro generico),
  `duplicate-methods-report` (grep cross-modulo) e le copie `_archive/` dei product/sprint/user-research.
  Link reindirizzati a `roadmap/00-index.md` o `prd.md`.
- `getting-started.md` era uno scaffold con placeholder `$MOD` non sostituito: eliminato e sostituito da
  `getting-started-1.md` (contenuto reale) rinominato in `getting-started.md`.
- Frontmatter aggiunto a `changelog.md`.

## Casi lasciati in dubbio

- 7 copie esatte tra `*.story.md` (`continuation*`, `ui-guest-header-ux*`, `01.UI-phpstan-fix`): non eliminabili
  per regola → marcare `superseded`.
- Famiglie `X.md` / `X-1.md` (ex `_1`), `root-txt-files/`, `_integration/` vs `wiki/_integration/`, `_archive/` vs
  `archive/`, `roadmap/0N-x.md` vs `roadmap/x.md`: quasi-duplicati non identici, da consolidare a mano.
- `graphify/graphify-out/graphify-out/` annidato ma senza `.md` (fuori scope).
- `llm-wiki/AGENTS.md`: nome-convenzione harness, lasciato. `prd.md`/`product-requirements.md` semi-generici, lasciati.
- Le 47 fusioni sono meccaniche: rileggere e compattare.

## Gate

Solo `.md`: PHPStan/Pint/Pest non applicabili (skip documentato; PHPStan gia' 0). Verifica: misura ripetuta,
YAML frontmatter parse 0 errori, 0 riferimenti a path rimossi/rinominati in tutti i docs del repo.
