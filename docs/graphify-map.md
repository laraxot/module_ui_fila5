# UI Module — Mappa Graphify

**Versione:** 1.0.0 | **Modulo:** UI | **Data:** 2026-08-02

---

## 📌 Cosa fa il modulo UI

Il modulo **UI** gestisce:
- **Componenti Filament** — form fields, table columns, blocks per page builder, widgets dashboard
- **Componenti Blade** — layout (WithSidebar), navbar, sidebar, hero blocks, render engine
- **Gestione tema** — dark mode switcher, tema composer, icone
- **Page Builder** — blocchi riutilizzabili (Hero, Heading, Paragraph, Image, Video, etc.)
- **Form Builder** — campi form custom (AddressField, IconPicker, OpeningHoursField, PasswordStrengthField, etc.)
- **Data Models** — Collection, Category, FieldOption per gestione UI strutturata

---

## 🏗️ Architettura Essenziale

### Entry Points

| Tipo | Classe | Path |
|------|--------|------|
| **Model** | `Collection` | `app/Models/Collection.php` |
| **Model** | `Category` | `app/Models/Category.php` |
| **Model** | `FieldOption` | `app/Models/FieldOption.php` |
| **Model** | `BaseModel` | `app/Models/BaseModel.php` |
| **Action** | `GetAllBlocksAction` | `app/Actions/Block/GetAllBlocksAction.php` |
| **Action** | `GetAllIconsAction` | `app/Actions/Icon/GetAllIconsAction.php` |
| **Action** | `ResolveLocalizedBlockDataAction` | `app/Actions/Block/ResolveLocalizedBlockDataAction.php` |
| **Action** | `GetUserDataAction` | `app/Actions/GetUserDataAction.php` |
| **Filament Form** | `AddressField` | `app/Filament/Forms/Components/AddressField.php` |
| **Filament Form** | `IconPicker` | `app/Filament/Forms/Components/IconPicker.php` |
| **Filament Form** | `OpeningHoursField` | `app/Filament/Forms/Components/OpeningHoursField.php` |
| **Filament Form** | `PasswordStrengthField` | `app/Filament/Forms/Components/PasswordStrengthField.php` |
| **Filament Form** | `RadioIcon` | `app/Filament/Forms/Components/RadioIcon.php` |
| **Filament Form** | `TreeField` | `app/Filament/Forms/Components/TreeField.php` |
| **Filament Column** | `IconStateColumn` | `app/Filament/Tables/Columns/IconStateColumn.php` |
| **Filament Column** | `TreeColumn` | `app/Filament/Tables/Columns/TreeColumn.php` |
| **Filament Column** | `GroupColumn` | `app/Filament/Tables/Columns/GroupColumn.php` |
| **Filament Block** | `Hero` | `app/Filament/Blocks/Hero.php` |
| **Filament Block** | `Heading` | `app/Filament/Blocks/Heading.php` |
| **Filament Block** | `Paragraph` | `app/Filament/Blocks/Paragraph.php` |
| **Filament Block** | `Image` | `app/Filament/Blocks/Image.php` |
| **Filament Widget** | `StatsOverviewWidget` | `app/Filament/Widgets/StatsOverviewWidget.php` |
| **Filament Widget** | `DarkModeSwitcherWidget` | `app/Filament/Widgets/DarkModeSwitcherWidget.php` |
| **Filament Page** | `Dashboard` | `app/Filament/Pages/Dashboard.php` |
| **Blade Component** | `Navbar` | `app/View/Components/Navbar.php` |
| **Blade Component** | `Sidebar` | `app/View/Components/Sidebar.php` |
| **Blade Component** | `WithSidebar` | `app/View/Components/Page/WithSidebar.php` |
| **Blade Component** | `Render/Blocks` | `app/View/Components/Render/Blocks.php` |
| **Composer** | `ThemeComposer` | `app/View/Composers/ThemeComposer.php` |

### Dependencies (Incoming)

```
Incentivi → UI (tabella columns, form fields)
IndennitaCondizioniLavoro → UI (tabella columns)
IndennitaResponsabilita → UI (tabella columns)
Media → UI (media handling in forms)
Performance → UI (dashboard widgets, table columns)
Progressioni → UI (form fields, components)
Ptv → UI (page builder, themes)
Xot → UI (base models, base widgets, base form components)
```

### Dependencies (Outgoing)

```
UI → Xot (BaseModel, XotBaseStatsOverviewWidget, base components)
UI → User (profile contract, user data)
UI → Tenant (multi-tenancy support)
UI → Filament (admin panel, form components, widgets)
UI → Blade UI Kit (heroicons)
UI → FontAwesome (icons via blade-fontawesome)
```

---

## 📊 Grafo Locale (Query Rapide)

### Scoprire Componenti Filament

```bash
graphify query "UI module filament components forms blocks widgets"
```

### Trovare Form Fields Custom

```bash
graphify query "UI filament form components AddressField IconPicker"
```

### Tracciare Page Builder

```bash
graphify path --from "GetAllBlocksAction" --to "Hero Block"
```

### Scoprire Blade Components

```bash
graphify query "UI module blade components navbar sidebar layout"
```

### Trovare Dipendenze Inverse

```bash
graphify query "modules using UI forms columns"
```

### Analizzare Theme System

```bash
graphify query "UI theme dark mode switcher composer"
```

---

## 🔗 Relazioni Dati (Schema Logico)

### Tabelle Principali

```
collections
  ├── id (PK)
  ├── name
  ├── description
  ├── type
  ├── theme_id (FK)
  ├── is_active
  ├── order
  └── timestamps

categories
  ├── id (PK)
  ├── name
  ├── collection_id (FK → collections)
  ├── order
  └── timestamps

field_options
  ├── id (PK)
  ├── field_name
  ├── option_name
  ├── option_value
  └── timestamps
```

### Relazioni

```
Collection ──1:N──> Category
          ──*:1──> Theme

Category ──1:N──> FieldOption
       ──*:1──> Collection
```

---

## 🎯 Task Comuni + Graphify

### Task 1: Creare un Custom Form Field Filament

**Domanda Graphify:**
```bash
graphify query "UI form components pattern AddressField template"
```

**Workflow:**
1. Posizionare il file in `app/Filament/Forms/Components/<FieldName>.php`
2. Estendere da `Filament\Forms\Components\Field`
3. Implementare `getDefaultName()` e `setUp()`
4. Aggiungere getter/setter per proprietà personalizzate
5. Creare la view Blade corrispondente in `resources/views/components/forms/`
6. Testare con `tests/Filament/Forms/<FieldName>Test.php`

**Esempio rapido:**
```php
namespace Modules\UI\Filament\Forms\Components;

use Filament\Forms\Components\Field;

class CustomField extends Field
{
    protected string $view = 'ui::forms.components.custom-field';
}
```

---

### Task 2: Aggiungere una Custom Table Column

**Domanda Graphify:**
```bash
graphify query "UI table columns IconStateColumn TreeColumn pattern"
```

**Workflow:**
1. File: `app/Filament/Tables/Columns/<ColumnName>.php`
2. Estendere da `Filament\Tables\Columns\Column`
3. Implementare `getDefaultName()` e la logica di rendering
4. Registrare in Resource via `Tables\Columns\<ColumnName>::make()`

---

### Task 3: Creare un Page Builder Block

**Domanda Graphify:**
```bash
graphify query "UI blocks Hero Paragraph Image pattern structure"
```

**Workflow:**
1. File: `app/Filament/Blocks/<BlockName>.php`
2. Estendere da `Filament\Forms\Components\Component` o block base
3. Definire schema form con campi necessari
4. Creare view in `resources/views/blocks/<block-name>.blade.php`
5. Registrare in `GetAllBlocksAction`
6. Testare rendering con `GetAllBlocksAction`

---

### Task 4: Creare un Blade Component

**Domanda Graphify:**
```bash
graphify query "UI blade components navbar sidebar structure"
```

**Workflow:**
1. File: `app/View/Components/<ComponentName>.php`
2. Estendere da `Illuminate\View\Component`
3. View: `resources/views/components/<component-name>.blade.php`
4. Usare nel template: `<x-ui::component-name />`

---

### Task 5: Aggiungere un Dashboard Widget

**Domanda Graphify:**
```bash
graphify query "UI widgets StatsOverviewWidget HeroWidget pattern"
```

**Workflow:**
1. File: `app/Filament/Widgets/<WidgetName>.php`
2. Estendere da `Filament\Widgets\Widget` o `XotBaseStatsOverviewWidget`
3. Implementare `getHeading()`, `getStatRecords()` o logica custom
4. Registrare nel panel Filament via `$panel->widgets([...])`

---

### Task 6: Tematizzare un'Interfaccia (Dark Mode, Tema Custom)

**Domanda Graphify:**
```bash
graphify query "UI theme dark mode switcher composer tailwind"
```

**Workflow:**
1. View Composer: `app/View/Composers/ThemeComposer.php` (condivide tema a tutte le views)
2. Widget: `DarkModeSwitcherWidget` per toggle UI
3. CSS/Tailwind: classi `dark:` per dark mode
4. Configurazione tema in config/config.php
5. Blade: usare variabili tema condivise da ThemeComposer

---

## 📋 Test Coverage Map

```bash
graphify query "UI module test coverage models actions filament"
```

### Checklist Copertura

- [ ] `app/Models/Collection.php` → test factory, relations, scopes
- [ ] `app/Models/Category.php` → test factory, relations
- [ ] `app/Models/FieldOption.php` → test factory
- [ ] `app/Actions/Block/GetAllBlocksAction.php` → test block discovery
- [ ] `app/Actions/Icon/GetAllIconsAction.php` → test icon discovery
- [ ] `app/Actions/Block/ResolveLocalizedBlockDataAction.php` → test localization
- [ ] `app/Filament/Forms/Components/AddressField.php` → test rendering, validation
- [ ] `app/Filament/Forms/Components/IconPicker.php` → test icon selection
- [ ] `app/Filament/Tables/Columns/IconStateColumn.php` → test column rendering
- [ ] `app/Filament/Blocks/Hero.php` → test block form schema
- [ ] `app/Filament/Widgets/StatsOverviewWidget.php` → test widget rendering
- [ ] `app/View/Components/Navbar.php` → test blade rendering
- [ ] `app/View/Components/Sidebar.php` → test blade rendering
- [ ] `app/View/Composers/ThemeComposer.php` → test theme data sharing

---

## 🚀 Comandi Rapidi

```bash
# Esplora architettura modulo
graphify query "UI module architecture entry points"

# Scopri tutti i componenti Filament
graphify query "UI filament forms blocks columns widgets"

# Scopri tutti i Blade components
graphify query "UI blade view components layout"

# Trova paginator e table patterns
graphify query "UI table columns filament resources"

# Analizza dipendenze inverse (chi usa UI?)
graphify query "modules importing UI classes"

# Scopri localization e translations
graphify query "UI module localization translations"

# Analizza test coverage
graphify query "UI test coverage spec"

# Complexity analysis
graphify query "UI high complexity methods actions"

# Scopri config e service provider
graphify query "UI config ServiceProvider"
```

---

## 🔧 Struttura Cartelle (Quick Ref)

```
UI/
├── app/
│   ├── Actions/
│   │   ├── Block/              (GetAllBlocksAction, ResolveLocalizedBlockDataAction)
│   │   ├── Icon/               (GetAllIconsAction)
│   │   ├── Panel/              (ApplyCalendarToPanelAction)
│   │   ├── Datetime/           (GetDaysMappingAction)
│   │   └── GetUserDataAction.php
│   ├── Filament/
│   │   ├── Blocks/             (Hero, Heading, Paragraph, Image, Video, etc.)
│   │   ├── Forms/Components/   (AddressField, IconPicker, OpeningHoursField, etc.)
│   │   ├── Tables/Columns/     (IconStateColumn, TreeColumn, GroupColumn, etc.)
│   │   ├── Widgets/            (StatsOverviewWidget, DarkModeSwitcherWidget, etc.)
│   │   ├── Pages/              (Dashboard, BaseListRecords)
│   │   ├── Actions/            (Table/Header layout actions)
│   │   ├── Components/         (SpatieDocumentUpload)
│   │   └── Clusters/           (Test cluster)
│   ├── View/Components/
│   │   ├── Blocks/             (Hero layout)
│   │   ├── Page/               (WithSidebar layout)
│   │   ├── Render/             (Block, Blocks rendering engine)
│   │   ├── Navbar.php
│   │   ├── Sidebar.php
│   │   ├── Logo.php
│   │   ├── BreadLink.php
│   │   ├── DarkModeSwitcher.php
│   │   └── Svg.php
│   ├── View/Composers/
│   │   └── ThemeComposer.php
│   ├── Models/
│   │   ├── Collection.php
│   │   ├── Category.php
│   │   ├── FieldOption.php
│   │   ├── BaseModel.php
│   │   └── Policies/           (UiBasePolicy)
│   ├── Providers/
│   ├── Http/                   (Controllers, Requests, Resources)
│   ├── Livewire/
│   ├── Console/Commands/
│   ├── Contracts/
│   ├── Enums/
│   ├── Traits/
│   ├── Data/                   (DTOs)
│   ├── Datas/
│   ├── Rules/                  (Validation rules)
│   └── Forms/
├── resources/
│   ├── views/
│   │   ├── components/         (Blade components)
│   │   ├── blocks/             (Page builder blocks)
│   │   ├── forms/              (Form field views)
│   │   ├── index.blade.php
│   │   ├── empty.blade.php
│   │   ├── alert.blade.php
│   │   └── metatags.blade.php
│   ├── css/
│   └── js/
├── database/
│   ├── migrations/
│   ├── factories/
│   └── seeders/
├── config/
│   ├── config.php
│   └── laravel-localization.php
├── lang/
│   ├── it/                     (Italian translations)
│   ├── de/                     (German translations)
│   └── ...
├── routes/
│   ├── web.php
│   └── api.php
├── tests/
│   ├── Feature/
│   ├── Unit/
│   └── Pest.php
├── docs/                       (Documentation)
│   └── graphify-map.md         (this file)
└── composer.json
```

---

## 📚 Riferimenti

- **Graphify Central:** `docs/graphify-integration.md`
- **Module Discipline:** `docs/wiki/rules/module-naming-discipline.md`
- **Filament Documentation:** https://filamentphp.com/docs
- **Blade Components:** https://laravel.com/docs/blade#components
- **Tailwind CSS:** https://tailwindcss.com/
- **Xot Module:** Base classes e contratti (collezione dipendenze)

---

## 📝 Note di Implementazione

### Punti Forti del Modulo UI

1. **Componenti Riutilizzabili** — Form fields, table columns, blocks centralizzati
2. **Page Builder Modulare** — Blocchi registrabili dinamicamente via `GetAllBlocksAction`
3. **Tema Centralizzato** — `ThemeComposer` per condividere stato tema a tutte le views
4. **Icone Gestite** — `GetAllIconsAction` per gestire librerie icone (Heroicons, FontAwesome)
5. **Localizzazione Integrata** — Blocchi risolvono dati localizzati via `ResolveLocalizedBlockDataAction`
6. **Dark Mode Support** — Widget + classi Tailwind per toggle tema
7. **Dashboard Widgets** — Estensione semplice da `XotBaseStatsOverviewWidget`

### Aree di Attenzione

- **Dipendenza da Xot** — UI estende molte classi base da Xot
- **Localization** — Molte views/blocchi hanno traduzioni (IT, DE, ...)
- **Theme Registry** — Tema deve essere registrato globalmente (verificare `ThemeComposer`)
- **Media Integration** — UI integra con Media module per upload/immagini

---

**Responsabile:** @marco76tv | **Last updated:** 2026-08-02

---

## 🔄 Workflow Graphify Tipici

### Workflow A: Aggiungere una Nuova Form Field

1. `graphify query "UI form components pattern"` → scopri template
2. Crea file in `app/Filament/Forms/Components/`
3. `graphify query "AddressField implementation"` → vedi pattern simile
4. Crea view in `resources/views/components/forms/`
5. Test: `graphify query "UI form tests"` → copia pattern test
6. Commit: `git add` + `git commit -m "feat: add CustomField form component"`

### Workflow B: Aggiungere un Block al Page Builder

1. `graphify query "UI blocks Hero Heading structure"` → scopri pattern
2. Crea file in `app/Filament/Blocks/`
3. Crea view in `resources/views/blocks/`
4. Registrazione automatica via `GetAllBlocksAction` (scansiona cartella)
5. Test: `graphify query "GetAllBlocksAction test"` → verifica discovery
6. Commit: `git add` + `git commit -m "feat: add BlockName page builder block"`

### Workflow C: Customizzare Theme

1. `graphify query "UI dark mode theme composer"` → scopri sistema tema
2. Modifica `config/config.php` per colori/font default
3. Aggiorna `app/View/Composers/ThemeComposer.php` per nuove variabili tema
4. Aggiungi classi Tailwind in `resources/css/theme.css` o inline
5. Testa dark mode con `DarkModeSwitcherWidget`
6. Commit: `git add` + `git commit -m "style: customize theme colors and typography"`
