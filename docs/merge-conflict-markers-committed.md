---
title: "Marker di merge committati nel modulo UI — diagnosi e criteri di risoluzione"
module: "UI"
type: troubleshooting
status: approved
tags: [ui, git, merge-conflict, phpstan, blade, lang]
created: 2026-08-18
updated: 2026-08-18
qmd: "marker conflitto merge committati T_SL phpstan.parse UI blocchi lang blade risoluzione"
related:
  - "../../../../docs/chat/formschema-widget-hierarchy-regression.md"
  - "./stories/5.8.merge-conflict-markers-cleanup.story.md"
---

# Marker di merge committati nel modulo UI

> `phpstan analyse Modules` si fermava a **6 errori `phpstan.parse`** senza analizzare
> nulla: `Syntax error, unexpected T_SL`. `T_SL` è l'operatore `<<`, cioè l'inizio di
git diff --name-only | while read f; do case "$f" in *.php) php -l "$f";; esac; done
php -d memory_limit=-1 ./vendor/bin/phpstan analyse Modules
```

## Riferimenti

- [Story 5.8 — pulizia marker di merge](./stories/5.8.merge-conflict-markers-cleanup.story.md)
