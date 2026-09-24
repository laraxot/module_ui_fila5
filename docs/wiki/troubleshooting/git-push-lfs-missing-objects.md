---
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
title: "Git push — oggetti LFS mancanti (module_ui_fila5)"
type: rule
tags: [git, lfs, push, troubleshooting, ui]
created: 2026-07-08
updated: 2026-07-08
qmd: "git push LFS missing objects module UI risoluzione squash"
issues:
  - "https://github.com/laraxot/module_ui_fila5/issues/24"
discussions:
  - "https://github.com/laraxot/module_ui_fila5/discussions/25"
related:
  - "../troubleshooting/git-merge-conflict-inventory.md"
  - "../../development-workflow-rules.md"
---

# Git push — oggetti LFS mancanti

## Sintomo

Da `laravel/Modules/UI`:

```bash
git push -u laraxot dev
```

Errore tipico:

```text
Git LFS upload failed:
  (missing) resources/svg/flags/it.svg (15777a0d...)
  ...
hint: Your push was rejected due to missing or corrupt local objects.
error: failed to push some refs to 'github.com:laraxot/module_ui_fila5.git'
```

Spesso centinaia di file (`svg`, `png`, `jpeg`) risultano **missing** sia in locale (`.git/lfs/objects/`) sia su GitHub (404 al `git lfs fetch`).

## Perché succede

1. Commit storici contengono **puntatori LFS** (blob Git da ~133 byte), non il file reale.
2. I blob LFS referenziati **non sono mai stati caricati** sul remote (o sono stati persi).
3. Il working tree ha file reali, ma con **OID diverso** da quello nei puntatori storici → non si può ricostruire lo store LFS dai file attuali.
4. `.gitattributes` attuale traccia solo `*.psd`; lo storico può comunque referenziare LFS su immagini vecchie.

Verifica rapida:

```bash
git lfs push laraxot dev 2>&1 | grep -c missing   # quanti oggetti mancano
git lfs migrate info --everything                  # quota LFS nello storico
git cat-file -s HEAD:resources/svg/flags/it.svg    # >133 = blob normale in HEAD
```

## Soluzione definitiva (applicata 2026-07-08)

**Squash** dei commit locali sopra `laraxot/dev` in **un solo commit** con il tree attuale (blob Git normali, senza puntatori LFS nello storico da pushare).

```bash
cd laravel/Modules/UI

# 1. Allineamento al remote (nessun force push)
git fetch laraxot
git reset --soft laraxot/dev

# 2. Un commit pulito
git commit -m "fix(git): risorse come blob Git — rimozione storico LFS corrotto"

# 3. Push
git push -u laraxot dev
```

Risultato: `laraxot/dev` aggiornato (`f552d26..7a189bb`), branch traccia `laraxot/dev`.

### Quando usare questa soluzione

| Scenario | Azione |
|----------|--------|
| Molti commit locali (es. messaggi `.`) + LFS missing | Squash su remote tracking branch |
| HEAD già con blob normali, LFS solo nello storico intermedio | Squash (come sopra) |
| LFS oggetti recuperabili da altro clone | `git lfs fetch --all <remote>` poi push |
| Serve preservare ogni commit | `git lfs migrate export` (richiede blob LFS presenti) |

### Cosa **non** fare

- `git config lfs.allowincompletepush true` — push incompleto, clone rotti per altri.
- Force push su `main`/`master` senza coordinamento.
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
title: "Git push — unpack fallito e oggetti LFS mancanti (module_ui_fila5)"
type: rule
tags: [git, lfs, push, troubleshooting, ui, no-thin, dual-remote]
created: 2026-07-08
updated: 2026-07-22
qmd: "git push LFS missing objects no-thin GH008 module UI laraxot provtv"
issues:
  - https://github.com/laraxot/module_ui_fila5/issues/24
discussions:
  - https://github.com/laraxot/module_ui_fila5/discussions/25
related:
  - "./git-merge-conflict-inventory.md"
  - "./module-theme-root-hygiene.md"
  - "../../multi-org-sync-laraxot-provtv.md"
  - "../../git-multi-org-sync-handoff.md"
  - "../../second-brain.md"
---

# Git push — unpack fallito e oggetti LFS mancanti

Canon operativo per `laravel/Modules/UI` (remote tipici: `laraxot` + `provtv` → `module_ui_fila5`).  
Stesso playbook vale per altri moduli/temi dual-remote: vedi handoff multi-org.

## Perché (bussiness logic)

- **Scopo:** pubblicare `dev` su **tutti** i remote raggiungibili senza force e senza riscrivere storia.
- **Politica:** forward-only — niente `reset`/`restore`/`push --force` su branch condivisi.
- **Filosofia:** se un remote ha già accettato il tip, gli oggetti LFS si **recuperano** da lì e si spingono sull’altro (sibling), invece di schiacciare i commit.

---

## Caso applicato 2026-07-22 (soluzione preferita)

Path: `cd laravel/Modules/UI` · branch `dev` · tip `b874935`.

### Sintomi

1. `remote: fatal: did not receive expected object …` + `unpack failed: index-pack failed`  
   (spesso con pack **thin** su storie merge/deep divergence laraxot↔provtv).
2. Su `provtv`: `GH008: Your push referenced … unknown Git LFS objects` / lista `(missing) resources/svg/...`.

### Fix eseguito (in ordine)

```bash
cd laravel/Modules/UI
git fetch laraxot dev
git fetch provtv dev

# 1) Pack completo (evita unpack “expected object” fantasma)
git -c pack.useSparse=false push --no-thin laraxot HEAD:dev
# → OK 4775de9..b874935

# 2) LFS: sibling sano → org che rifiuta
git lfs fetch laraxot --all
git lfs push provtv --all

# 3) Stesso push no-thin verso provtv
git -c pack.useSparse=false push --no-thin provtv HEAD:dev
# → OK dfbb830..b874935
```

### Esito

| Remote | Prima | Dopo |
|--------|-------|------|
| `laraxot/dev` | ahead locale | `b874935` (FF) |
| `provtv/dev` | blocco LFS GH008 | `b874935` (FF + LFS allineato) |

Niente squash, niente force, niente rewrite.

### Diagnosi rapida

```bash
git rev-list --left-right --count HEAD...laraxot/dev
git rev-list --left-right --count HEAD...provtv/dev
git merge-base --is-ancestor laraxot/dev HEAD && echo "FF ok laraxot"
# se unpack fallisce anche con oggetti locali presenti → --no-thin
# se GH008 → lfs fetch --all dal remote che ha già il tip, poi lfs push --all
```

---

## Caso storico 2026-07-08 (LFS irrecuperabile)

Quando **nessun** remote/clone ha gli OID LFS (404 ovunque) e i puntatori nello storico sono orfani, in passato si era usato uno squash sopra `laraxot/dev`.

**Oggi non è il default:** viola lo spirito forward-only se implica `reset --soft`. Preferire sempre:

| Scenario | Azione |
|----------|--------|
| Unpack / `expected object` | `git push --no-thin` (+ rete non sandboxata) |
| GH008 / LFS missing, sibling OK | `git lfs fetch <sibling> --all` → `git lfs push <target> --all` → push |
| LFS recuperabile da altro clone | copiare `.git/lfs/objects/` o `lfs push --all` dal clone sano |
| LFS irrecuperabile + storia da sanare | solo con decisione umana esplicita; documentare; **mai** force su `main`/`master` |

### Cosa **non** fare

- `git config lfs.allowincompletepush true` — clone rotti per gli altri.
- Force push su branch condivisi.
- `git reset --soft` / `git restore` per “aggiustare” il push (forward-only).
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- Reintrodurre LFS su `*.svg` / `*.png` senza policy e storage affidabile.

## Prevenzione

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
1. **LFS solo se necessario** (file >100 MB o binari pesanti). SVG/PNG piccoli → blob Git normali.
2. `.gitattributes` minimo:

   ```gitattributes
   *.psd filter=lfs diff=lfs merge=lfs -text
   ```

3. Prima di push massivi: `git lfs push --dry-run laraxot dev`.
4. Commit con messaggio descrittivo (evitare catene di `.` che nascondono problemi).

## Ripristino da altro clone (se disponibile)

Se un collega ha ancora `.git/lfs/objects/` completo:

```bash
# sul clone sano
git lfs push laraxot --all

# oppure copiare .git/lfs/objects/ nel clone rotto, poi
git lfs fsck
git push -u laraxot dev
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
1. SVG/PNG piccoli → blob Git normali; LFS solo se davvero necessario.
2. Prima di push massivi: `git lfs push --dry-run <remote> dev`.
3. Dual-remote: push FF a **entrambi**; se uno fallisce, non lasciare i due tip divergenti.
4. Messaggi commit descrittivi (evitare catene di `.`).

## Checklist post-push (modulo UI)

```bash
cd laravel/Modules/UI
git status --short --branch   # ideale: ## dev...laraxot/dev (0 0)
# nessun import Geo attivo
grep -r "Modules\\\\Geo" app/ --include="*.php" | grep -v '\.old' | grep -v '\.to_geo' || true
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
```

## Riferimenti

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
- Issue: [laraxot/module_ui_fila5#24](https://github.com/laraxot/module_ui_fila5/issues/24)
- Discussion: [laraxot/module_ui_fila5#25](https://github.com/laraxot/module_ui_fila5/discussions/25)
- Confine moduli: [geo-boundary.md](../../geo-boundary.md) · [dependency-rules.md](../../dependency-rules.md)

## Checklist post-push (modulo UI)

Dopo un push riuscito su `laraxot/dev`, verificare:

```bash
cd laravel/Modules/UI

# 1. Nessun import Geo attivo in autoload
grep -r "Modules\\\\Geo" app/ --include="*.php" | grep -v '\.old' | grep -v '\.to_geo'

# 2. Componenti geografici disattivati (non in autoload)
test ! -f app/Livewire/Components/Map/InteractiveMap.php
test ! -f app/Filament/Forms/Components/LocationSelector.php
# backup locale .old opzionale — *.old e' in .gitignore

# 3. PHPStan modulo
cd ../../ && php -d memory_limit=2048M vendor/bin/phpstan analyse Modules/UI

# 4. Root modulo senza .txt spuri (spostati in _docs/)
find . -maxdepth 1 -name '*.txt' -print
```

| Problema residuo | Fix |
|------------------|-----|
| `LocationSelector.php` / `InteractiveMap.php` attivi | Rimuovi dal repo (`git rm`); backup locale opzionale come `.old` (gitignored) |
| Marker `<<<<<<<` in `docs/` | Risolvi forward-only, vedi [git-merge-conflict-inventory](./git-merge-conflict-inventory.md) |
| Root `.txt` duplicati | Rimuovi da root; contenuto in `_docs/` |
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
- Multi-org UI: [multi-org-sync-laraxot-provtv.md](../../multi-org-sync-laraxot-provtv.md)
- Handoff: [git-multi-org-sync-handoff.md](../../git-multi-org-sync-handoff.md)
- Second brain: [second-brain.md](../../second-brain.md)
- Forward-only progetto: [../../../../../../docs/wiki/rules/git-forward-only.md](../../../../../../docs/wiki/rules/git-forward-only.md)
- Issue LFS: [laraxot/module_ui_fila5#24](https://github.com/laraxot/module_ui_fila5/issues/24)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
