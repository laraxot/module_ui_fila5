---
title: "UI Module Documentation"
type: documentation
tags: [module, documentation]
created: 2026-06-05
updated: 2026-06-05
---

# Modulo UI - Componenti Condivisi

## Overview

Il modulo **UI** fornisce componenti Blade, widget Filament e asset condivisi per tutti i moduli e temi.

<<<<<<< HEAD
**Quick Start:**
- **[Architecture Patterns](./architecture-patterns.md)** — Design system, component hierarchy, theming
- **[Disabled Components](./disabled-components.md)** — Deprecation info & migration paths
- **[Design Comuni Implementation](./DESIGN_COMUNI_IMPLEMENTATION.md)** — Integration guide

=======
>>>>>>> laraxot/dev
## Struttura Componenti

```
resources/views/components/ui/
├── buttons/
│   ├── primary.blade.php
│   └── secondary.blade.php
├── cards/
│   ├── base.blade.php
│   └── collapsible.blade.php
├── forms/
│   ├── input.blade.php
│   └── select.blade.php
└── layout/
    ├── container.blade.php
    └── divider.blade.php
```

## Utilizzo

```blade
<x-ui::ui.button type="primary">
    Salva
</x-ui::ui.button>

<x-ui::ui.card>
    Contenuto
</x-ui::ui.card>
```

## Widget Filament

- `CalendarWidget`: FullCalendar integration
- `StatsOverviewWidget`: Statistiche dashboard
- `ChartWidget`: Grafici integrati

## Collegamenti

- [Regole Posizionamento](../../.cursor/rules/ui-components-rules.mdc)
- [Filament Widgets](./widgets/)

## Regole Fondamentali

1. **MAI posizionare componenti in root** - Usare solo `Modules/UI/resources/views/components/ui/`
2. **Prefisso obbligatorio** - Usare `<x-ui::ui.componente />`
3. **PHPDoc completo** per ogni componente

## Backlinks

- [Xot Base](../Xot/docs/)
- [User Module](../User/docs/)

## AI Workflows
- [AI Methodologies](./ai-methodologies.md)
||||||| parent of 9a84589 (.)
    case LIST = 'list';
    case GRID = 'grid';

    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value . '.label');
    }
}
```

## ✅ Stato Qualità

- **PHPStan Level 10**: ✅ Compliant
- **Translation Standards**: ✅ 100%
- **Componenti**: 50+ Blade components
- **Widget**: 20+ Filament widgets

## 📚 Documentazione

- [Components Guide](components.md)
- [TableLayoutEnum Guide](table-layout-enum-complete-guide.md)
- [Filament Components](filament-components.md)

## 🔗 Moduli Collegati

- [Xot Module](../xot/docs/readme.md) - Framework core
- [User Module](../user/docs/readme.md) - Gestione utenti
- [Lang Module](../lang/docs/readme.md) - Traduzioni

---

**🔄 
**📦 Versione**: 4.1.0

## 🔁 CI & Semantic Versioning
Workflow: `.github/workflows/semantic-versioning.yml`

## 📄 License
MIT


## Standard Rules & Workflow

- [[BMAD Method](../../../../docs/wiki/concepts/bmad-method.md)]
- [[Context Engineering](../../../../docs/wiki/concepts/context-engineering.md)]
- [[LLM Wiki Governance](../../../../docs/wiki/concepts/llm-wiki-governance.md)]

## Documentation

- [On-Demand Pattern](./ON-DEMAND-PATTERN.md) — Pattern per caricamento efficiente
- [QMD Setup](./QMD-SETUP.md) — Configurazione ricerca locale
- [Performance](./PERFORMANCE-OPTIMIZATION.md) — Metriche e best practice
<<<<<<< HEAD
- [Project Structure](./PROJECT-STRUCTURE.md) — Directory layout
---

## ✅ PHPStan Status — Verifica 2026-07-01

| Data | Livello | Errori |
|------|---------|--------|
| 2026-07-01 | max | **0** |

```bash
./vendor/bin/phpstan analyze Modules/UI --level=max --memory-limit=512M
# [OK] No errors
```

Modulo conforme alle regole Laraxot:
- Classi Filament estendono XotBase (mai direttamente Filament)
- Nessun label/placeholder/tooltip hardcoded
- Nessun BadgeColumn (usa TextColumn::make()->badge())
- Actions usano QueueableAction pattern
- Nessun Service tradizionale

## Audit qualità — 2026-07-01 (PHPStan / PHPMD / PHPInsights)

- **PHPStan** (`level: max`, `--memory-limit=4G`): 0 errori prima e dopo l'audit.
- **PHPMD** (`cleancode,codesize,design,naming,unusedcode,controversial`): fix applicati (naming/import/dead-code, comportamento invariato):
  - Import mancanti (`MissingImport`) risolti in ~15 file (`Exception`, `RuntimeException`, `InvalidArgumentException`, `UnexpectedValueException`, `ReflectionClass`, `ReflectionException`, `Closure`) al posto delle FQCN inline `\Exception` ecc.
  - `UiBasePolicy::before()`: rimossa variabile morta `$xotData`, `$_ability` → `$ability` (stesso pattern di `Tenant\TenantBasePolicy`).
  - `GetAllIconsAction`, `ApplyCalendarToPanelAction`: parametri `$_context`/`$calendar_class` → camelCase (restano `UnusedFormalParameter`: firme stabili/feature disabilitata, non rimovibili senza cambiare il contratto pubblico).
  - `ImageSpatie`/`VideoSpatie`: `$collection_name` → `$collectionName`; rimossa variabile morta `$res`.
  - `Hero.php`: rimossa chiamata morta a `GetViewBlocksOptionsByTypeAction` (risultato mai usato, consumer originario commentato).
  - `AddressField.php`: rimossa costruzione di un array `$data` mai utilizzato in `afterStateHydrated()`.
  - `TestChartWidget.php`: `$max_height` → `$maxHeightPx` (evitava collisione naming con `$maxHeight` ereditato da `ChartWidget`).
  - `$view_params` → `$viewParams` in `Navbar`, `WithSidebar`, `Blocks`, `Std`, `Http/Livewire/Toast`.
  - `SelectStateColumn.php`: aggiunto commento esplicativo sul catch vuoto di `ReflectionException` (fallback intenzionale, non un bug).
  - Non toccati: `StaticAccess`, `CyclomaticComplexity`/`NPathComplexity`, `BooleanArgumentFlag` (refactor architetturale non richiesto); `$module_dir`/`$module_ns` snake_case (convenzione condivisa via `Xot\Providers\XotBaseServiceProvider`); parametri unused nei closure Filament (`$_livewire`, `$_component`, `onDateSelect(...)`) e in `SliderData` (proprietà snake_case che rispecchiano chiavi array/JSON esterne — un rename romperebbe l'hydration Spatie LaravelData senza `#[MapInputName]`); `HasTableLayoutPage::$this` in closure con `->call()` è un falso positivo PHPMD (non vede il rebind di `$this`).
- **PHPInsights** (`tools/phpinsights.sh analyse Modules/UI/app`): punteggio iniziale 83.0 Code / 87.8 Complexity / 76.5 Architecture / 90.4 Style. Applicato `--fix` per gli style fix sicuri (yoda comparison, static closures, ordered imports/uses, braces). **Il flag `--fix` ha di nuovo introdotto native type hint `array` su proprietà che confliggono con la classe genitore** (`EventServiceProvider::$listen`, `Http/Kernel::$middleware`/`$middlewareGroups`/`$middlewareAliases`, `$fillable` in `FieldOption`/`Collection`/`Category`) — rule PHPStan `property.extraNativeType`; rimosso il type nativo mantenendo i tag `@var` esistenti. **Verificare sempre PHPStan dopo ogni `phpinsights --fix` in questo modulo.**
- **Pest**: non eseguibile in questa sessione — il bootstrap completo dell'app fallisce per un conflitto di firma pre-esistente e non correlato tra `Modules\Ptv\Models\BaseScheda::anag()` e `Modules\IndennitaResponsabilita\Models\Traits\RelationshipTrait::anag()` (entrambi fuori dallo scope di questo task). Nessun test creato/eseguito; le modifiche sono naming/dead-code, comportamento invariato.
=======
- [Project Structure](./PROJECT-STRUCTURE.md) — Directory layout
>>>>>>> laraxot/dev
