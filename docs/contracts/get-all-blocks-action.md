---
title: "Contratto — GetAllBlocksAction"
type: contract
<<<<<<< .merge_file_Bk3qHi
action: "Modules\UI\Actions\Block\GetAllBlocksAction"
tags: [contract, action, blocks, filament, filesystem]
created: 2026-11-24
updated: 2026-11-24
=======
action: "Modules\\UI\\Actions\\Block\\GetAllBlocksAction"
module: UI
status: accepted
tags: [contract, action, blocks, filament, filesystem]
created: 2026-11-24
updated: 2026-11-26
qmd: "GetAllBlocksAction blocchi page builder Filament Blocks cartella modulo name type snake_case"
>>>>>>> .merge_file_v1Xo4P
---

# GetAllBlocksAction

Sorgente: `app/Actions/Block/GetAllBlocksAction.php`. Perché è fatta così:
<<<<<<< .merge_file_Bk3qHi
[ADR scoperta dei blocchi per cartella](../adr/block-discovery-by-filament-blocks-folder.md).
=======
[ADR scoperta dei blocchi per cartella](../adr/0001-block-discovery-by-filament-blocks-folder.md).
>>>>>>> .merge_file_v1Xo4P
Chiamanti: `Modules/Cms/app/Filament/Fields/PageContent.php`, `PageContentBuilder.php`.

## Input

- Nessun parametro. Legge `config('modules.paths.generator.model.path')` e il filesystem di `base_path('Modules')`.

## Output

- `DataCollection<int, Modules\Xot\Datas\ComponentFileData>` con `name`, `class`, `module`, `path` (percorso reale)
  per ogni file `Modules/*/app/Filament/Blocks/*.php`.

## Invarianti

| ID | Regola | Group Pest |
|---|---|---|
| UI-BLOCKS-INV-1 | Ogni elemento viene da `Modules/<module>/app/Filament/Blocks/*.php`, e `module` è il modulo di quel percorso. | `UI-BLOCKS-INV-1` |
| UI-BLOCKS-INV-2 | `name` = basename della classe in snake_case senza il suffisso `_block`; è la chiave `type` salvata nei contenuti. | `UI-BLOCKS-INV-2` |

<<<<<<< .merge_file_Bk3qHi
=======
Test: `tests/Unit/Actions/Block/GetAllBlocksActionTest.php` (blocchi reali dei moduli installati: il test non prova l'assenza di blocchi in altre cartelle). Controllo parallelo in Cms: `Modules/Cms/tests/Feature/FilamentBuilderBlocksTest.php`.

>>>>>>> .merge_file_v1Xo4P
## Effetti collaterali

- Solo lettura del filesystem (`File::glob`, `realpath`). Non scrive, non mette in cache.

## Errori

- `Webmozart\Assert\InvalidArgumentException` se `modules.paths.generator.model.path` non è una stringa.
- `Safe\Exceptions\FilesystemException` da `realpath` se un file sparisce durante la scansione; le eccezioni di
  `GetClassNameByPathAction` per un file senza classe risalgono.

## Non fa

- Non istanzia i blocchi né controlla che estendano `XotBaseBlock` (lo verifica `Cms/tests/Feature/FilamentBuilderBlocksTest.php`).
- Non filtra per modulo attivo, tenant o permessi: ritorna tutto ciò che è su disco.
- Non ordina: l'ordine è quello di `glob`.
- Non legge le cartelle dei temi (`Themes/*`).
