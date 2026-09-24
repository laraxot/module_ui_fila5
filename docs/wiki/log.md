<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8M1OQh
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
---
title: "UI Wiki Log"
type: concept
tags: [log]
created: 2026-07-14
updated: 2026-07-14
qmd: "log ui wiki log"
issues: ["https://github.com/provtv/base_ptv_fila5/issues/124"]
discussions: ["https://github.com/provtv/base_ptv_fila5/discussions/1"]
issues: ["https://github.com/provtv/<nome repository>/issues/124"]
discussions: ["https://github.com/provtv/<nome repository>/discussions/1"]
related:
  - "./agents.md"
  - "./bmad-method.md"
  - "./context-compression.md"
  - "./index.md"
  - "./overview.md"
---

=======
>>>>>>> .merge_file_EyGpLn
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
## [2026-06-05] docs | HackerNoon harness — tips 001-022 in wiki locale

- Stub/checklist: second-brain → canon Xot, ai-harness, [hackernoon map](../../../../../docs/wiki/concepts/hackernoon-ai-coding-tips-fixcity-map.md), [llm-wiki.txt](../../../../../bashscripts/tools/prompts/llm-wiki.txt)
- GitHub: [#272](https://github.com/laraxot/base_fixcity_fila5/issues/272) / [D#273](https://github.com/laraxot/base_fixcity_fila5/discussions/273)
<<<<<<< HEAD
<<<<<<< HEAD
- Stub/checklist: second-brain → canon Xot, ai-harness, [hackernoon map](../../../../../docs/wiki/concepts/hackernoon-ai-coding-tips-<nome progetto>-map.md), [llm-wiki.txt](../../../../../bashscripts/tools/prompts/llm-wiki.txt)
- GitHub: [#272](https://github.com/laraxot/<nome repitory>/issues/272) / [D#273](https://github.com/laraxot/<nome repitory>/discussions/273)
- Stub/checklist: second-brain → canon Xot, ai-harness, [hackernoon map](../../../../../docs/wiki/concepts/hackernoon-ai-coding-tips-progetto corrente-map.md), [llm-wiki.txt](../../../../../bashscripts/tools/prompts/llm-wiki.txt)
- GitHub: [#272](https://github.com/laraxot/platform/issues/272) / [D#273](https://github.com/laraxot/platform/discussions/273)
- GitHub: [#272](https://github.com/laraxot/<nome repitory>/issues/272) / [D#273](https://github.com/laraxot/<nome repitory>/discussions/273)
=======
>>>>>>> laraxot/dev

# UI Wiki Log

<<<<<<< .merge_file_8M1OQh
=======

# UI Wiki Log

>>>>>>> 804451c (Lint)
## [2026-07-08] phpstan | InteractiveMap/LocationSelector — riapplicato pattern contratti opzionali, rimosso LocationSelector morto
- Un agent concorrente aveva reintrodotto import diretti `Modules\Geo\Services\MapService` / `GeocodingService` in `InteractiveMap.php` e rimosso il binding `register()` da `UIServiceProvider`, contraddicendo la regola documentata in [block-rendering-and-optional-services](concepts/block-rendering-and-optional-services.md) ("non importare `Modules\Geo\*` nel consumer UI").
- Ripristinato: `InteractiveMap.php` usa `MapServiceContract`/`GeocodingServiceContract`; `UIServiceProvider::register()` lega i contratti a `NullMapService`/`NullGeocodingService` di default.
- `LocationSelector.php` (0 consumer in blade/route/test, importava `Modules\Geo\Models\Comune` direttamente, chiavi lang `ui::location_selector.*` inesistenti) rimosso definitivamente — stessa decisione già presa in un commit precedente (`66f7fc1`) e più volte annullata/ripristinata da agent diversi (vedi `docs/conflict-resolution-locationselector.md`). Nessuna evidenza che i tre simboli mancanti (`MapService`, `GeocodingService`, `Comune` in Geo) fossero un requisito reale per questo componente: erano riferimenti a codice mai esistito.
- Verifica: PHPStan pulito su entrambi i file; container resolve corretto (`app(MapServiceContract::class)` → `NullMapService`); `mount()`/`loadMarkers()`/`searchAddress()` verificati via `php artisan tinker` (DB non raggiungibile in sandbox per Livewire::test()).

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
---
title: "UI Wiki Log"
type: concept
tags: [log]
created: 2026-07-14
updated: 2026-07-14
qmd: "log ui wiki log"
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
related:
  - "./agents.md"
  - "./bmad-method.md"
  - "./context-compression.md"
  - "./index.md"
  - "./overview.md"
---

## [2026-06-05] docs | HackerNoon harness — tips 001-022 in wiki locale

<<<<<<< HEAD
- Stub/checklist: second-brain → canon Xot, ai-harness, [hackernoon map](../../../../../docs/wiki/concepts/hackernoon-ai-coding-tips-fixcity-map.md), [llm-wiki.txt](../../../../../bashscripts/tools/prompts/llm-wiki.txt)
- GitHub: [#272](https://github.com/laraxot/base_fixcity_fila5/issues/272) / [D#273](https://github.com/laraxot/base_fixcity_fila5/discussions/273)
<<<<<<< HEAD
- Stub/checklist: second-brain → canon Xot, ai-harness, [hackernoon map](../../../../../docs/wiki/concepts/hackernoon-ai-coding-tips-<nome progetto>-map.md), [llm-wiki.txt](../../../../../bashscripts/tools/prompts/llm-wiki.txt)
- GitHub: [#272](https://github.com/laraxot/<nome repitory>/issues/272) / [D#273](https://github.com/laraxot/<nome repitory>/discussions/273)
- Stub/checklist: second-brain → canon Xot, ai-harness, [hackernoon map](../../../../../docs/wiki/concepts/hackernoon-ai-coding-tips-progetto corrente-map.md), [llm-wiki.txt](../../../../../bashscripts/tools/prompts/llm-wiki.txt)
- GitHub: [#272](https://github.com/laraxot/platform/issues/272) / [D#273](https://github.com/laraxot/platform/discussions/273)
- GitHub: [#272](https://github.com/laraxot/<nome repitory>/issues/272) / [D#273](https://github.com/laraxot/<nome repitory>/discussions/273)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Stub/checklist: second-brain → canon Xot, ai-harness, [hackernoon map](../../../../../docs/wiki/concepts/hackernoon-ai-coding-tips-<nome progetto>-map.md), [llm-wiki.txt](../../../../../bashscripts/tools/prompts/llm-wiki.txt)
- GitHub: [#272](https://github.com/laraxot/<nome repitory>/issues/272) / [D#273](https://github.com/laraxot/<nome repitory>/discussions/273)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
- Stub/checklist: second-brain → canon Xot, ai-harness, [hackernoon map](../../../../../docs/wiki/concepts/hackernoon-ai-coding-tips-progetto corrente-map.md), [llm-wiki.txt](../../../../../bashscripts/tools/prompts/llm-wiki.txt)
- GitHub: [#272](https://github.com/laraxot/platform/issues/272) / [D#273](https://github.com/laraxot/platform/discussions/273)
=======
- Stub/checklist: second-brain → canon Xot, ai-harness, [hackernoon map](../../../../../docs/wiki/concepts/hackernoon-ai-coding-tips-<nome progetto>-map.md), [llm-wiki.txt](../../../../../bashscripts/tools/prompts/llm-wiki.txt)
- GitHub: [#272](https://github.com/laraxot/<nome repitory>/issues/272) / [D#273](https://github.com/laraxot/<nome repitory>/discussions/273)
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev

# UI Wiki Log

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_EyGpLn
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
## [2026-05-21] bugfix | auth register focus perso per overlay header mobile
- Nuova pagina: `concepts/auth-register-focus-loss-overlay.md`.
- Root cause identificata in `x-ui.marketing.header`: container mobile fullscreen `fixed` che intercettava i click anche a menu chiuso.
- Fix: `x-show="mobileMenuOpen"` + `style="display:none"` + `pointer-events-none` da chiuso / `pointer-events-auto` da aperto.
- Verifica manuale: su `/it/auth/register` focus input stabile e digitazione ripristinata.

## [2026-05-06] phpstan | Dynamic array normalization
- Nuova pagina: `concepts/phpstan-dynamic-array-normalization.md`.
- Documentato pattern per convertire output dinamici action/Livewire in array tipizzati senza `@var` inline, ignore o baseline.
- Applicato a `UserCalendarWidget`, `InteractiveMap` e `LocationSelector`.

## [2026-04-28] governance | Model States ownership e compatibilita' Laravel 13
- Nuova pagina: `concepts/model-states-module-ownership.md`.
- Distinto ownership tecnico (`UI` + `Xot`) da compatibilita' runtime.
- Verificato che `spatie/laravel-model-states` latest stable richiede `PHP ^8.4`, mentre `2.12.1` si ferma a `Laravel 12`.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8M1OQh
=======
<<<<<<< HEAD
- Verificato che `spatie/laravel-model-states` latest stable richiede `PHP ^8.4`, mentre `2.12.1` si ferma a `Laravel 13`.
=======
<<<<<<< HEAD
=======
- Verificato che `spatie/laravel-model-states` latest stable richiede `PHP ^8.4`, mentre `2.12.1` si ferma a `Laravel 13`.
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- Verificato che `spatie/laravel-model-states` latest stable richiede `PHP ^8.4`, mentre `2.12.1` si ferma a `Laravel 13`.
=======
>>>>>>> .merge_file_EyGpLn
>>>>>>> laraxot/dev
=======
=======
- Verificato che `spatie/laravel-model-states` latest stable richiede `PHP ^8.4`, mentre `2.12.1` si ferma a `Laravel 13`.
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)

## [2026-04-23] governance | EnumSelect API collisions (Filament v5)
- Nuova pagina: `concepts/enumselect-filament-api-collisions.md`.
- Documentati i fatal tipici: collisione firme `make()/enum()` e collisione visibilita' `getLabel()` quando si estende `Select`.

## [2026-04-23] hardening | EnumSelect phpstan/runtime guardrails
- Aggiornata `concepts/enum-select-contract-and-false-friends.md` con regole aggiuntive emerse dal fix runtime e dal check PHPStan.
- Inserite best practices su firma `enum(string|Closure|null)` e narrowing `int|string` prima di `tryFrom()`.
- Esplicitato false friend: `Class ... not found` puo' essere sintomo secondario di fatal in fase di caricamento della classe.

## [2026-04-23] governance | Filament component autoload nel modulo UI
- documentata la regola `module-filament-component-autoload-rule`
- componenti PHP del modulo UI sotto `app/`; fatal recente `EnumSelect` ricondotto a path autoload errato, non al widget consumer

## [2026-04-23] governance | EnumSelect contract, best practices, bad practices, false friends
- Documentato il contratto minimo di `Modules\UI\Filament\Forms\Components\EnumSelect`.
- Fissate le regole su firma compatibile di `make(?string $name = null)`, validazione backed enum, fallback label/icon e rischi di autoload/visibilita'.
- Nuova pagina: `concepts/enum-select-contract-and-false-friends.md`.

## [2026-04-15] init | wiki bootstrap
- Struttura wiki/log.md inizializzata.
- Layer raw: tutti i file in `docs/` (eccetto `wiki/`).
- Layer wiki: `docs/wiki/` — LLM-maintained, sintesi ad alto riuso.
<<<<<<< HEAD
- Schema: `docs/.schema/WIKI_SCHEMA.md`
- Adozione moduli: `docs/project/llm-wiki-module-adoption.md`
=======
<<<<<<< HEAD
- Schema: `docs/.schema/WIKI_SCHEMA.md`
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8M1OQh
=======
- Adozione moduli: `docs/project/llm-wiki-module-adoption.md`
=======
<<<<<<< HEAD
- Schema: `docs/.schema/WIKI_SCHEMA.md`
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)
- Schema: `docs/.schema/wiki-schema.md`
=======
=======
- Schema: `docs/.schema/wiki-schema.md`
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
- Adozione moduli: `docs/project/llm-wiki-module-adoption.md`

## 2026-07-22 — PHPStan Modules 0 + geo-boundary

- Conflitti PHP UI risolti (0 marker di conflitto in *.php).
- Dominio Geo fuori da UI: rimossi Adaptive Map/Location, contratti, `LocationSelector` attivo (storico in **git**, non in `docs/archive/`).
- Evidence: `laravel/storage/app/ai/phpstan-modules-20260722-213406.json` (0 errori).
- Canon: [geo-boundary.md](../geo-boundary.md) · coordinamento: `docs/chat/phpstan-modules-status.md`.

<<<<<<< HEAD
=======
<<<<<<< HEAD

- Tip `b874935` su `laraxot/dev` e `provtv/dev`.
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD

- Tip `b874935` su `laraxot/dev` e `provtv/dev`.
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
## 2026-07-22 — Push dual-remote + LFS

>>>>>>> laraxot/dev
- Tip `b874935` su `laraxot/dev` e `provtv/dev`.
## 2026-07-22 — Push dual-remote + LFS
- Fix: deepen/shallow + `git push --no-thin` + `git lfs fetch laraxot --all` → `git lfs push provtv --all`.
- Playbook: [troubleshooting/git-push-lfs-missing-objects.md](./troubleshooting/git-push-lfs-missing-objects.md).
<<<<<<< HEAD
- Tip `b874935` su `laraxot/dev` e `provtv/dev`.
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======

- Tip `b874935` su `laraxot/dev` e `provtv/dev`.
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- Schema: `docs/.schema/wiki-schema.md`
- Adozione moduli: `docs/project/llm-wiki-module-adoption.md`

## 2026-07-22 — PHPStan Modules 0 + geo-boundary

- Conflitti PHP UI risolti (0 marker di conflitto in *.php).
- Dominio Geo fuori da UI: rimossi Adaptive Map/Location, contratti, `LocationSelector` attivo (storico in **git**, non in `docs/archive/`).
- Evidence: `laravel/storage/app/ai/phpstan-modules-20260722-213406.json` (0 errori).
- Canon: [geo-boundary.md](../geo-boundary.md) · coordinamento: `docs/chat/phpstan-modules-status.md`.

- Tip `b874935` su `laraxot/dev` e `provtv/dev`.
## 2026-07-22 — Push dual-remote + LFS
- Fix: deepen/shallow + `git push --no-thin` + `git lfs fetch laraxot --all` → `git lfs push provtv --all`.
- Playbook: [troubleshooting/git-push-lfs-missing-objects.md](./troubleshooting/git-push-lfs-missing-objects.md).
- Tip `b874935` su `laraxot/dev` e `provtv/dev`.
=======
- Adozione moduli: `docs/project/llm-wiki-module-adoption.md`
>>>>>>> .merge_file_EyGpLn
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
