<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
---
module: theme
topic: table_layout_enum_usage
canonical: ../../../Themes/docs/shared-components/table-layout-enum-usage_1.md
---

See canonical documentation: ../../../Themes/docs/shared-components/table-layout-enum-usage_1.md
# TableLayoutEnum Usage Guide
## Nuovo Approccio (Corretto)
Dopo la correzione del problema di visibilità, il metodo `getTableColumns()` ora richiede parametri espliciti invece di usare debug_backtrace.
### Esempio di uso nelle classi ListRecords:
```php
use Modules\UI\Enums\TableLayoutEnum;
## Overview
The `TableLayoutEnum` provides standardized layout options for Filament tables and data grids, allowing users to toggle between list and grid views with appropriate styling and column configurations.
## Features
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev
# TableLayoutEnum Usage Guide

## Nuovo Approccio (Corretto)

Dopo la correzione del problema di visibilità, il metodo `getTableColumns()` ora richiede parametri espliciti invece di usare debug_backtrace.

### Esempio di uso nelle classi ListRecords:

```php
use Modules\UI\Enums\TableLayoutEnum;
## Overview

The `TableLayoutEnum` provides standardized layout options for Filament tables and data grids, allowing users to toggle between list and grid views with appropriate styling and column configurations.

## Features

<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_1PpiP9
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
---
module: theme
topic: table_layout_enum_usage
canonical: ../../../Themes/docs/shared-components/table-layout-enum-usage_1.md
---

<<<<<<< HEAD
See canonical documentation: ../../../Themes/docs/shared-components/table-layout-enum-usage_1.md
=======
<<<<<<< HEAD
See canonical documentation: ../../../Themes/docs/shared-components/table-layout-enum-usage_1.md
=======
<<<<<<< HEAD
See canonical documentation: ../../../Themes/docs/shared-components/table-layout-enum-usage_1.md
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
# TableLayoutEnum Usage Guide
## Nuovo Approccio (Corretto)
Dopo la correzione del problema di visibilità, il metodo `getTableColumns()` ora richiede parametri espliciti invece di usare debug_backtrace.
### Esempio di uso nelle classi ListRecords:
```php
use Modules\UI\Enums\TableLayoutEnum;
## Overview
The `TableLayoutEnum` provides standardized layout options for Filament tables and data grids, allowing users to toggle between list and grid views with appropriate styling and column configurations.
## Features
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
- **Type Safety**: Complete PHPDoc documentation and explicit parameter types
- **Translation Support**: Multilingual labels via TransTrait and transClass()
- **Responsive Design**: Enhanced grid configuration with multiple breakpoints
- **Clean API**: No more debug_backtrace, explicit parameter passing
- **Framework Compliance**: Uses TransTrait for all translation methods
- **Extensible**: Additional utility methods for layout management
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## CRITICAL RULE: TransTrait Usage
**ALWAYS use TransTrait and transClass() for enum translations, NEVER implement match() manually**
### Correct Implementation
use Modules\Xot\Filament\Traits\TransTrait;
enum TableLayoutEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;
    case LIST = 'list';
    case GRID = 'grid';
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev

## CRITICAL RULE: TransTrait Usage

**ALWAYS use TransTrait and transClass() for enum translations, NEVER implement match() manually**

### Correct Implementation

```php
use Modules\Xot\Filament\Traits\TransTrait;

enum TableLayoutEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;

    case LIST = 'list';
    case GRID = 'grid';

<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
=======
<<<<<<< .merge_file_1PpiP9
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
## CRITICAL RULE: TransTrait Usage
**ALWAYS use TransTrait and transClass() for enum translations, NEVER implement match() manually**
### Correct Implementation
use Modules\Xot\Filament\Traits\TransTrait;
enum TableLayoutEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;
    case LIST = 'list';
    case GRID = 'grid';
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value.'.label');
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
    public function getColor(): string
        return $this->transClass(self::class, $this->value.'.color');
    public function getIcon(): string
        return $this->transClass(self::class, $this->value.'.icon');
}
```
### Why TransTrait is Required
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev

    public function getColor(): string
    {
        return $this->transClass(self::class, $this->value.'.color');
    }

    public function getIcon(): string
    {
        return $this->transClass(self::class, $this->value.'.icon');
    }
}
```

### Why TransTrait is Required

<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
=======
<<<<<<< .merge_file_1PpiP9
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
    public function getColor(): string
        return $this->transClass(self::class, $this->value.'.color');
    public function getIcon(): string
        return $this->transClass(self::class, $this->value.'.icon');
}
```
### Why TransTrait is Required
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
1. **DRY Principle**: Eliminates code duplication
2. **Framework Consistency**: Uniform approach across all enums
3. **Automatic Fallbacks**: Built-in translation fallback mechanisms
4. **Performance**: Optimized translation caching
5. **Maintainability**: Centralized translation logic
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_ZgWIXX
## New Approach (Implemented)
After resolving Git conflicts and removing the deprecated debug_backtrace approach, the `getTableColumns()` method now requires explicit parameters for better type safety and testability.
### Example Usage in ListRecords Classes
=======
<<<<<<< .merge_file_1PpiP9
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev

## New Approach (Implemented)

After resolving Git conflicts and removing the deprecated debug_backtrace approach, the `getTableColumns()` method now requires explicit parameters for better type safety and testability.

### Example Usage in ListRecords Classes

```php
use Modules\UI\Enums\TableLayoutEnum;
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
<<<<<<< HEAD
=======
>>>>>>> .merge_file_332UoG
=======
## New Approach (Implemented)
After resolving Git conflicts and removing the deprecated debug_backtrace approach, the `getTableColumns()` method now requires explicit parameters for better type safety and testability.
### Example Usage in ListRecords Classes
>>>>>>> laraxot/dev
<<<<<<< .merge_file_lcZ2MZ
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Support\Enums\FontWeight;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
class ListUsers extends ListRecords
    protected TableLayoutEnum $layout;
    public function mount(): void
        $this->layout = TableLayoutEnum::LIST;
    public function table(Table $table): Table
        return $table
            ->columns($this->getColumnsForLayout())
            ->contentGrid($this->layout->getTableContentGrid());
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev

class ListUsers extends ListRecords
{
    protected TableLayoutEnum $layout;

    public function mount(): void
    {
        $this->layout = TableLayoutEnum::LIST;
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns($this->getColumnsForLayout())
            ->contentGrid($this->layout->getTableContentGrid());
    }

<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
=======
<<<<<<< .merge_file_1PpiP9
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
class ListUsers extends ListRecords
    protected TableLayoutEnum $layout;
    public function mount(): void
        $this->layout = TableLayoutEnum::LIST;
    public function table(Table $table): Table
        return $table
            ->columns($this->getColumnsForLayout())
            ->contentGrid($this->layout->getTableContentGrid());
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
    /**
     * Restituisce le colonne appropriate per il layout corrente
            ->contentGrid($this->layout->getTableContentGrid())
            ->extraAttributes([
                'class' => $this->layout->getContainerClasses(),
            ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_ZgWIXX
     * Get appropriate columns for current layout.
     */
    protected function getColumnsForLayout(): array
=======
<<<<<<< .merge_file_1PpiP9
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev
    }

    /**
     * Get appropriate columns for current layout.
     */
    protected function getColumnsForLayout(): array
    {
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
<<<<<<< HEAD
=======
>>>>>>> .merge_file_332UoG
=======
     * Get appropriate columns for current layout.
     */
    protected function getColumnsForLayout(): array
>>>>>>> laraxot/dev
<<<<<<< .merge_file_lcZ2MZ
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev
        $listColumns = [
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('email'),
            Tables\Columns\TextColumn::make('created_at'),
        ];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ

=======
=======
<<<<<<< .merge_file_1PpiP9

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
        $gridColumns = [
            Tables\Columns\Layout\Stack::make([
                Tables\Columns\TextColumn::make('name')
                    ->weight(FontWeight::Bold),
                Tables\Columns\TextColumn::make('email'),
            ]),
            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('email')
                ->searchable(),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
=======
<<<<<<< HEAD
            Stack::make([
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
            Stack::make([
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev
                ->sortable(),
        ];

        $gridColumns = [
            Stack::make([
                Tables\Columns\TextColumn::make('name')
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
            Stack::make([
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_1PpiP9
<<<<<<< HEAD
=======
=======
            Stack::make([
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev
                    ->weight(FontWeight::Bold)
                    ->size('lg'),
                Tables\Columns\TextColumn::make('email')
                    ->color('gray'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->size('sm'),
            ])->space(2),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_ZgWIXX
        return $this->layout->getTableColumns($listColumns, $gridColumns);
     * Layout toggle action.
    protected function getHeaderActions(): array
=======
<<<<<<< .merge_file_1PpiP9
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev
        ];

        return $this->layout->getTableColumns($listColumns, $gridColumns);
    }

    /**
     * Layout toggle action.
     */
    protected function getHeaderActions(): array
    {
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
<<<<<<< HEAD
=======
>>>>>>> .merge_file_332UoG
=======
        return $this->layout->getTableColumns($listColumns, $gridColumns);
     * Layout toggle action.
    protected function getHeaderActions(): array
>>>>>>> laraxot/dev
<<<<<<< .merge_file_lcZ2MZ
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev
        return [
            Action::make('toggleLayout')
                ->action(function () {
                    $this->layout = $this->layout->toggle();
                    $this->resetTable();
                }),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
=======
<<<<<<< HEAD
### Vantaggi del nuovo approccio:
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Vantaggi del nuovo approccio:
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev
        ];
    }
}
```

### Vantaggi del nuovo approccio:

<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
### Vantaggi del nuovo approccio:
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_1PpiP9
<<<<<<< HEAD
=======
=======
### Vantaggi del nuovo approccio:
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev
1. **Type Safety**: Non usa più reflection o debug_backtrace
2. **Chiarezza**: Esplicito su quali colonne usare per ogni layout
3. **Testabilità**: Più facile da testare senza dipendenze nascoste
4. **Performance**: Nessun overhead di debug_backtrace
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9

### Breaking Change:
=======
### Breaking Change:
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG

=======
<<<<<<< HEAD
### Breaking Change:
=======
<<<<<<< HEAD

<<<<<<< .merge_file_lcZ2MZ
=======
### Breaking Change:
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_1PpiP9
### Breaking Change:

=======
### Breaking Change:
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
=======

### Breaking Change:

>>>>>>> laraxot/dev
Il metodo `getTableColumns()` ora richiede due parametri:
- `$listColumns`: Array delle colonne per layout lista
- `$gridColumns`: Array delle colonne per layout griglia
### Advantages of the New Approach
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ

=======
=======
<<<<<<< .merge_file_1PpiP9

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
1. **Type Safety**: No longer uses reflection or debug_backtrace
2. **Clarity**: Explicit about which columns to use for each layout
3. **Testability**: Easier to test without hidden dependencies
4. **Performance**: No debug_backtrace overhead
5. **Documentation**: Complete PHPDoc and translations
6. **Maintainability**: Clean, well-structured code
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Breaking Change
The `getTableColumns()` method now requires two parameters:
- `$listColumns`: Array of columns for list layout
- `$gridColumns`: Array of columns for grid layout
### New Features Added
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev

### Breaking Change

The `getTableColumns()` method now requires two parameters:

- `$listColumns`: Array of columns for list layout
- `$gridColumns`: Array of columns for grid layout

### New Features Added

<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
=======
<<<<<<< .merge_file_1PpiP9
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
### Breaking Change
The `getTableColumns()` method now requires two parameters:
- `$listColumns`: Array of columns for list layout
- `$gridColumns`: Array of columns for grid layout
### New Features Added
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
1. **Complete PHPDoc**: All methods now have comprehensive documentation
2. **Translation Support**: Labels are now translatable via `ui::table-layout.*`
3. **Additional Methods**: `isListLayout()`, `getOptions()`, `getContainerClasses()`
4. **Improved Grid Configuration**: Enhanced responsive breakpoints
5. **Better Color Scheme**: Distinct colors for list (primary) and grid (secondary)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Translation Files
The enum now supports multilingual labels through translation files:
- `Modules/UI/lang/it/table-layout.php` (Italian)
- `Modules/UI/lang/en/table-layout.php` (English)
- `Modules/UI/lang/de/table-layout.php` (German)
### Translation Structure
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev

## Translation Files

The enum now supports multilingual labels through translation files:

- `Modules/UI/lang/it/table-layout.php` (Italian)
- `Modules/UI/lang/en/table-layout.php` (English)
- `Modules/UI/lang/de/table-layout.php` (German)

### Translation Structure

```php
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
=======
<<<<<<< .merge_file_1PpiP9
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
## Translation Files
The enum now supports multilingual labels through translation files:
- `Modules/UI/lang/it/table-layout.php` (Italian)
- `Modules/UI/lang/en/table-layout.php` (English)
- `Modules/UI/lang/de/table-layout.php` (German)
### Translation Structure
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
return [
    'list' => [
        'label' => 'List',
        'description' => 'Traditional table row display',
        'tooltip' => 'Show data in table rows',
    ],
    'grid' => [
        'label' => 'Grid',
        'description' => 'Responsive grid card display',
        'tooltip' => 'Show data in grid format with cards',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
    'toggle' => [
        'label' => 'Toggle Layout',
        'tooltip' => 'Switch between list and grid view',
];
## API Reference
### Methods
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev
    ],
    'toggle' => [
        'label' => 'Toggle Layout',
        'tooltip' => 'Switch between list and grid view',
    ],
];
```

## API Reference

### Methods

<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
=======
<<<<<<< .merge_file_1PpiP9
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
    'toggle' => [
        'label' => 'Toggle Layout',
        'tooltip' => 'Switch between list and grid view',
];
## API Reference
### Methods
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
- `init()`: Returns the default layout (LIST)
- `getLabel()`: Returns translated label for the layout
- `getColor()`: Returns color identifier (primary/secondary)
- `getIcon()`: Returns Heroicon identifier
- `toggle()`: Switches between LIST and GRID
- `isGridLayout()`: Checks if current layout is GRID
- `isListLayout()`: Checks if current layout is LIST
- `getTableContentGrid()`: Returns responsive grid configuration
- `getTableColumns()`: Returns appropriate columns for layout
- `getOptions()`: Returns all layout options as array
- `getContainerClasses()`: Returns CSS classes for styling
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
=======
<<<<<<< HEAD
### Grid Configuration
The responsive grid configuration includes:
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Grid Configuration
The responsive grid configuration includes:
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev

### Grid Configuration

The responsive grid configuration includes:

```php
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
<<<<<<< HEAD
=======
>>>>>>> .merge_file_332UoG
=======
### Grid Configuration
The responsive grid configuration includes:
>>>>>>> laraxot/dev
<<<<<<< .merge_file_lcZ2MZ
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev
[
    'sm' => 1,   // 1 column on small screens
    'md' => 2,   // 2 columns on medium screens
    'lg' => 3,   // 3 columns on large screens
    'xl' => 4,   // 4 columns on extra large screens
    '2xl' => 5,  // 5 columns on 2xl screens
]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Migration Guide
### From Old Approach
// OLD (deprecated)
$columns = $this->layout->getTableColumns();
// NEW (required)
$columns = $this->layout->getTableColumns($listColumns, $gridColumns);
### Update Your ListRecords Classes
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev
```

## Migration Guide

### From Old Approach

```php
// OLD (deprecated)
$columns = $this->layout->getTableColumns();

// NEW (required)
$columns = $this->layout->getTableColumns($listColumns, $gridColumns);
```

### Update Your ListRecords Classes

<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
=======
<<<<<<< .merge_file_1PpiP9
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
## Migration Guide
### From Old Approach
// OLD (deprecated)
$columns = $this->layout->getTableColumns();
// NEW (required)
$columns = $this->layout->getTableColumns($listColumns, $gridColumns);
### Update Your ListRecords Classes
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
1. Define separate column arrays for list and grid layouts
2. Pass both arrays to `getTableColumns()`
3. Use `getContainerClasses()` for styling
4. Implement proper toggle actions with new methods
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ

## Related Documentation

=======
## Related Documentation
=======
<<<<<<< .merge_file_1PpiP9

## Related Documentation

=======
<<<<<<< HEAD
## Related Documentation
=======
<<<<<<< HEAD

## Related Documentation

=======
## Related Documentation
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
## Related Documentation
=======

## Related Documentation

>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
>>>>>>> laraxot/dev
=======

## Related Documentation

>>>>>>> laraxot/dev
- [UI Module Architecture](architecture_rules.md)
- [Filament Components Guide](components.md)
- [Translation Standards](translations.md)
- [Table Components](table-components.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
- [HasXotTable Trait](../../Xot/docs/has-xot-table.md)
- [Root Documentation: UI Components](../../../docs/components/ui-components.md)
     * Toggle del layout tramite action
                ->icon($this->layout->getIcon())
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
=======
>>>>>>> laraxot/dev
- [HasXotTable Trait](../../xot/docs/has-xot-table.md)
- [Root Documentation: UI Components](../../../../docs/components/ui-components.md)
# TableLayoutEnum Usage Guide

## Nuovo Approccio (Corretto)

Dopo la correzione del problema di visibilità, il metodo `getTableColumns()` ora richiede parametri espliciti invece di usare debug_backtrace.

### Esempio di uso nelle classi ListRecords:

```php
use Modules\UI\Enums\TableLayoutEnum;

class ListUsers extends ListRecords
{
    protected TableLayoutEnum $layout;

    public function mount(): void
    {
        $this->layout = TableLayoutEnum::LIST;
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns($this->getColumnsForLayout())
            ->contentGrid($this->layout->getTableContentGrid());
    }

    /**
     * Restituisce le colonne appropriate per il layout corrente
     */
    protected function getColumnsForLayout(): array
    {
        $listColumns = [
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('email'),
            Tables\Columns\TextColumn::make('created_at'),
        ];

        $gridColumns = [
            Tables\Columns\Layout\Stack::make([
                Tables\Columns\TextColumn::make('name')
                    ->weight(FontWeight::Bold),
                Tables\Columns\TextColumn::make('email'),
            ]),
        ];

        return $this->layout->getTableColumns($listColumns, $gridColumns);
    }

    /**
     * Toggle del layout tramite action
     */
    protected function getHeaderActions(): array
    {
        return [
            Action::make('toggleLayout')
                ->icon($this->layout->getIcon())
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
- [HasXotTable Trait](../../Xot/docs/has-xot-table.md)
- [Root Documentation: UI Components](../../../docs/components/ui-components.md)
     * Toggle del layout tramite action
                ->icon($this->layout->getIcon())
<<<<<<< HEAD
=======
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
                ->action(function () {
                    $this->layout = $this->layout->toggle();
                }),
        ];
    }
}
```

### Vantaggi del nuovo approccio:

1. **Type Safety**: Non usa più reflection o debug_backtrace
2. **Chiarezza**: Esplicito su quali colonne usare per ogni layout
3. **Testabilità**: Più facile da testare senza dipendenze nascoste
4. **Performance**: Nessun overhead di debug_backtrace

### Breaking Change:

Il metodo `getTableColumns()` ora richiede due parametri:
- `$listColumns`: Array delle colonne per layout lista
- `$gridColumns`: Array delle colonne per layout griglia
<<<<<<< HEAD
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< .merge_file_1PpiP9
>>>>>>> .merge_file_332UoG
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_332UoG
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
See canonical documentation: ../../../Themes/docs/shared-components/table-layout-enum-usage_1.md
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_lcZ2MZ
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZgWIXX
>>>>>>> .merge_file_332UoG
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
