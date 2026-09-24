# Esempio Implementazione TableLayoutEnum

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
## Data: [DATE]
=======
<<<<<<< HEAD
## Data: 2025-01-27
=======
<<<<<<< HEAD
## Data: [DATE]
=======
## Data: 2025-01-27
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
## Data: 2025-01-27
=======
## Data: [DATE]
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
## Data: [DATE]
>>>>>>> 0dadab4 (Lint)

## Scenario
Implementazione di una lista utenti con toggle tra layout lista e griglia utilizzando il `TableLayoutEnum`.

## Implementazione Completa

### 1. ListRecords Class

```php
<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\Pages;

use Filament\Actions\Action;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Support\Enums\FontWeight;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\Xot\Filament\Resources\XotBaseListRecords;

class ListUsers extends XotBaseListRecords
{
    protected TableLayoutEnum $layout;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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

>>>>>>> laraxot/dev
=======
    
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    public function mount(): void
    {
        parent::mount();
        $this->layout = TableLayoutEnum::init();
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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

>>>>>>> laraxot/dev
=======
    
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    public function table(Table $table): Table
    {
        return $table
            ->columns($this->getColumnsForLayout())
            ->contentGrid($this->layout->getTableContentGrid())
            ->paginated([10, 25, 50])
            ->defaultSort('created_at', 'desc')
            ->searchable()
            ->filterable();
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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

>>>>>>> laraxot/dev
=======
    
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    /**
     * Restituisce le colonne appropriate per il layout corrente
     */
    protected function getColumnsForLayout(): array
    {
        $listColumns = [
            TextColumn::make('name')
                ->searchable()
                ->sortable(),
            TextColumn::make('email')
                ->searchable()
                ->sortable(),
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            TextColumn::make('status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'active' => 'success',
                    'inactive' => 'danger',
                    default => 'gray',
                }),
        ];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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

>>>>>>> laraxot/dev
=======
        
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
        $gridColumns = [
            Stack::make([
                TextColumn::make('name')
                    ->weight(FontWeight::Bold)
                    ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime(),
            ]),
            TextColumn::make('status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'active' => 'success',
                    'inactive' => 'danger',
                    default => 'gray',
                }),
        ];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
        
        return $this->layout->getTableColumns($listColumns, $gridColumns);
    }
    
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)

        return $this->layout->getTableColumns($listColumns, $gridColumns);
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    /**
     * Azioni header con toggle layout
     */
    protected function getHeaderActions(): array
    {
        return [
            Action::make('toggleLayout')
                ->icon($this->layout->getIcon())
                ->color($this->layout->getColor())
                ->action(function () {
                    $this->layout = $this->layout->toggle();
                }),
            // Altre azioni...
        ];
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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

>>>>>>> laraxot/dev
=======
    
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    /**
     * Azioni bulk per il layout corrente
     */
    protected function getBulkActions(): array
    {
        return [
            Tables\Actions\BulkAction::make('activate')
                ->icon('heroicon-o-check-circle')
                ->action(function ($records) {
                    // Logica attivazione
                })
                ->visible(fn () => $this->layout->isListLayout()),
            Tables\Actions\BulkAction::make('deactivate')
                ->icon('heroicon-o-x-circle')
                ->action(function ($records) {
                    // Logica disattivazione
                })
                ->visible(fn () => $this->layout->isListLayout()),
        ];
    }
}
```

### 2. Traduzioni Richieste

#### File: `Modules/User/lang/it/fields.php`
```php
<?php

declare(strict_types=1);

return [
    'name' => [
        'label' => 'Nome',
        'placeholder' => 'Inserisci nome',
        'tooltip' => 'Nome completo dell\'utente',
        'helper_text' => 'Nome e cognome dell\'utente',
    ],
    'email' => [
        'label' => 'Email',
        'placeholder' => 'Inserisci email',
        'tooltip' => 'Indirizzo email dell\'utente',
        'helper_text' => 'Email valida per le comunicazioni',
    ],
    'created_at' => [
        'label' => 'Data Creazione',
        'placeholder' => '',
        'tooltip' => 'Data di registrazione dell\'utente',
        'helper_text' => 'Data di creazione dell\'account',
    ],
    'status' => [
        'label' => 'Stato',
        'placeholder' => '',
        'tooltip' => 'Stato attuale dell\'utente',
        'helper_text' => 'Stato attivo o inattivo',
    ],
];
```

#### File: `Modules/User/lang/it/actions.php`
```php
<?php

declare(strict_types=1);

return [
    'activate' => [
        'label' => 'Attiva',
        'tooltip' => 'Attiva gli utenti selezionati',
        'helper_text' => 'Rendi attivi gli utenti selezionati',
    ],
    'deactivate' => [
        'label' => 'Disattiva',
        'tooltip' => 'Disattiva gli utenti selezionati',
        'helper_text' => 'Rendi inattivi gli utenti selezionati',
    ],
];
```

#### File: `Modules/UI/lang/it/table-layout.php` (aggiornato)
```php
<?php

declare(strict_types=1);

return [
    'list' => [
        'label' => 'Lista',
        'color' => 'primary',
        'icon' => 'heroicon-o-list-bullet',
        'description' => 'Visualizzazione a lista tradizionale',
        'tooltip' => 'Mostra elementi in formato lista',
        'helper_text' => 'Layout tradizionale con righe e colonne',
    ],
    'grid' => [
        'label' => 'Griglia',
        'color' => 'success',
        'icon' => 'heroicon-o-squares-2x2',
        'description' => 'Visualizzazione a griglia con card',
        'tooltip' => 'Mostra elementi in formato griglia',
        'helper_text' => 'Layout a griglia con card responsive',
    ],
    'toggle' => [
        'label' => 'Cambia Layout',
        'tooltip' => 'Alterna tra visualizzazione lista e griglia',
        'helper_text' => 'Cambia il tipo di visualizzazione',
    ],
];
```

### 3. CSS Personalizzato (Opzionale)

```css
/* File: Modules/UI/resources/css/table-layout.css */
.table-layout-list {
    @apply bg-white rounded-lg shadow-sm;
}

.table-layout-grid {
    @apply bg-gray-50 rounded-lg p-4;
}

.table-layout-grid .filament-tables-table {
    @apply grid gap-4;
}

.table-layout-grid .filament-tables-row {
    @apply bg-white rounded-lg shadow-sm p-4;
}
```

### 4. Test Unitario

```php
<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Enums;

use Modules\UI\Enums\TableLayoutEnum;
use PHPUnit\Framework\TestCase;

class TableLayoutEnumTest extends TestCase
{
    public function test_init_returns_list(): void
    {
        $this->assertEquals(TableLayoutEnum::LIST, TableLayoutEnum::init());
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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

>>>>>>> laraxot/dev
=======
    
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    public function test_toggle_switches_layout(): void
    {
        $layout = TableLayoutEnum::LIST;
        $this->assertEquals(TableLayoutEnum::GRID, $layout->toggle());
        $this->assertEquals(TableLayoutEnum::LIST, $layout->toggle()->toggle());
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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

>>>>>>> laraxot/dev
=======
    
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    public function test_get_label_returns_translated_string(): void
    {
        $listLabel = TableLayoutEnum::LIST->getLabel();
        $gridLabel = TableLayoutEnum::GRID->getLabel();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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

>>>>>>> laraxot/dev
=======
        
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
        $this->assertIsString($listLabel);
        $this->assertIsString($gridLabel);
        $this->assertNotEmpty($listLabel);
        $this->assertNotEmpty($gridLabel);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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

>>>>>>> laraxot/dev
=======
    
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    public function test_get_color_returns_valid_color(): void
    {
        $listColor = TableLayoutEnum::LIST->getColor();
        $gridColor = TableLayoutEnum::GRID->getColor();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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

>>>>>>> laraxot/dev
=======
        
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
        $this->assertIsString($listColor);
        $this->assertIsString($gridColor);
        $this->assertNotEmpty($listColor);
        $this->assertNotEmpty($gridColor);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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

>>>>>>> laraxot/dev
=======
    
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    public function test_get_icon_returns_valid_icon(): void
    {
        $listIcon = TableLayoutEnum::LIST->getIcon();
        $gridIcon = TableLayoutEnum::GRID->getIcon();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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

>>>>>>> laraxot/dev
=======
        
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
        $this->assertIsString($listIcon);
        $this->assertIsString($gridIcon);
        $this->assertNotEmpty($listIcon);
        $this->assertNotEmpty($gridIcon);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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

>>>>>>> laraxot/dev
=======
    
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    public function test_get_table_content_grid_returns_null_for_list(): void
    {
        $this->assertNull(TableLayoutEnum::LIST->getTableContentGrid());
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
    
    public function test_get_table_content_grid_returns_array_for_grid(): void
    {
        $grid = TableLayoutEnum::GRID->getTableContentGrid();
        
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)

    public function test_get_table_content_grid_returns_array_for_grid(): void
    {
        $grid = TableLayoutEnum::GRID->getTableContentGrid();

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
        $this->assertIsArray($grid);
        $this->assertArrayHasKey('sm', $grid);
        $this->assertArrayHasKey('md', $grid);
        $this->assertArrayHasKey('lg', $grid);
        $this->assertArrayHasKey('xl', $grid);
        $this->assertArrayHasKey('2xl', $grid);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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

>>>>>>> laraxot/dev
=======
    
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    public function test_get_table_columns_returns_correct_columns(): void
    {
        $listColumns = ['name', 'email'];
        $gridColumns = ['stack'];
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)

        $result = TableLayoutEnum::LIST->getTableColumns($listColumns, $gridColumns);
        $this->assertEquals($listColumns, $result);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
        
        $result = TableLayoutEnum::LIST->getTableColumns($listColumns, $gridColumns);
        $this->assertEquals($listColumns, $result);
        
        $result = TableLayoutEnum::GRID->getTableColumns($listColumns, $gridColumns);
        $this->assertEquals($gridColumns, $result);
    }
    
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X

        $result = TableLayoutEnum::LIST->getTableColumns($listColumns, $gridColumns);
        $this->assertEquals($listColumns, $result);
        
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)
        $result = TableLayoutEnum::GRID->getTableColumns($listColumns, $gridColumns);
        $this->assertEquals($gridColumns, $result);
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    public function test_is_grid_layout_returns_correct_boolean(): void
    {
        $this->assertTrue(TableLayoutEnum::GRID->isGridLayout());
        $this->assertFalse(TableLayoutEnum::LIST->isGridLayout());
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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

>>>>>>> laraxot/dev
=======
    
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    public function test_is_list_layout_returns_correct_boolean(): void
    {
        $this->assertTrue(TableLayoutEnum::LIST->isListLayout());
        $this->assertFalse(TableLayoutEnum::GRID->isListLayout());
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
    
    public function test_get_options_returns_all_options(): void
    {
        $options = TableLayoutEnum::getOptions();
        
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)

    public function test_get_options_returns_all_options(): void
    {
        $options = TableLayoutEnum::getOptions();

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
        $this->assertIsArray($options);
        $this->assertArrayHasKey('list', $options);
        $this->assertArrayHasKey('grid', $options);
        $this->assertCount(2, $options);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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

>>>>>>> laraxot/dev
=======
    
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    public function test_get_container_classes_returns_valid_classes(): void
    {
        $listClasses = TableLayoutEnum::LIST->getContainerClasses();
        $gridClasses = TableLayoutEnum::GRID->getContainerClasses();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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

>>>>>>> laraxot/dev
=======
        
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
        $this->assertEquals('table-layout-list', $listClasses);
        $this->assertEquals('table-layout-grid', $gridClasses);
    }
}
```

## Vantaggi dell'Implementazione

### 1. Type Safety
- Enum garantisce valori validi
- Type hints espliciti
- Previene errori runtime

### 2. Responsive Design
- Grid configurabile per breakpoints
- CSS nativo senza JS aggiuntivo
- Performance ottimizzata

### 3. UX Consistency
- Icone e colori coerenti
- Traduzioni centralizzate
- Comportamento prevedibile

### 4. Maintainability
- Codice DRY e riutilizzabile
- Separazione responsabilità
- Testabilità migliorata

## Regole Critiche Implementate

### ❌ MAI usare ->label()
```php
// ERRORE - Non fare mai questo
TextColumn::make('name')->label('Nome')

// ✅ CORRETTO - Usa il sistema di traduzioni automatico
TextColumn::make('name')
```

### ✅ Sistema Traduzioni Automatico
- Il LangServiceProvider gestisce automaticamente le traduzioni
- Le chiavi vengono generate automaticamente dal nome del campo
- Struttura: `modulo::risorsa.fields.campo.label`

### ✅ Enum Translation Pattern
- **SEMPRE** usare `transClass()` negli enum per le traduzioni
- **MAI** usare `__()` o `trans()` direttamente negli enum
- **SEMPRE** struttura espansa nei file di traduzione
- **SEMPRE** `use TransTrait;` negli enum

## Collegamenti

- [Analisi TableLayoutEnum](table_layout_enum_analysis.md)
- [Usage Guide](table-layout-enum-usage.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
- [Translation Standards](../../../docs/translation_standards.md)
- [Filament Best Practices](../../../docs/filament_best_practices.md)
- [Enum Translation Pattern](../../../docs/enum-translation-pattern.md)

*Ultimo aggiornamento: 2025-01-27*
# Esempio Implementazione TableLayoutEnum
## Data: 2025-01-27
## Scenario
Implementazione di una lista utenti con toggle tra layout lista e griglia utilizzando il `TableLayoutEnum`.
## Implementazione Completa
### 1. ListRecords Class
```php
<?php
declare(strict_types=1);
namespace Modules\User\Filament\Resources\UserResource\Pages;
=======
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)
- [Translation Standards](../../../../docs/translation_standards.md)
- [Filament Best Practices](../../../../docs/filament_best_practices.md)
- [Enum Translation Pattern](../../../../docs/enum-translation-pattern.md)

# Esempio Implementazione TableLayoutEnum

## Data: [DATE]

## Scenario
Implementazione di una lista utenti con toggle tra layout lista e griglia utilizzando il `TableLayoutEnum`.

## Implementazione Completa

### 1. ListRecords Class

```php
<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\Pages;

<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
- [Translation Standards](../../../docs/translation_standards.md)
- [Filament Best Practices](../../../docs/filament_best_practices.md)
- [Enum Translation Pattern](../../../docs/enum-translation-pattern.md)

<<<<<<< HEAD
*Ultimo aggiornamento: 2025-01-27* 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
*Ultimo aggiornamento: 2025-01-27* 
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
*Ultimo aggiornamento: 2025-01-27* 
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
*Ultimo aggiornamento: 2025-01-27*
# Esempio Implementazione TableLayoutEnum
## Data: 2025-01-27
## Scenario
Implementazione di una lista utenti con toggle tra layout lista e griglia utilizzando il `TableLayoutEnum`.
## Implementazione Completa
### 1. ListRecords Class
```php
<?php
declare(strict_types=1);
namespace Modules\User\Filament\Resources\UserResource\Pages;
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
use Filament\Actions\Action;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Support\Enums\FontWeight;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\Xot\Filament\Resources\XotBaseListRecords;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_tosi8X
class ListUsers extends XotBaseListRecords
{
    protected TableLayoutEnum $layout;
=======
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)

class ListUsers extends XotBaseListRecords
{
    protected TableLayoutEnum $layout;

<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
=======
class ListUsers extends XotBaseListRecords
{
    protected TableLayoutEnum $layout;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    public function mount(): void
    {
        parent::mount();
        $this->layout = TableLayoutEnum::init();
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

    public function table(Table $table): Table
    {
=======
<<<<<<< HEAD
    public function table(Table $table): Table
=======
<<<<<<< HEAD

    public function table(Table $table): Table
    {
=======
    public function table(Table $table): Table
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    public function table(Table $table): Table
=======

    public function table(Table $table): Table
    {
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

    public function table(Table $table): Table
    {
>>>>>>> 0dadab4 (Lint)
        return $table
            ->columns($this->getColumnsForLayout())
            ->contentGrid($this->layout->getTableContentGrid())
            ->paginated([10, 25, 50])
            ->defaultSort('created_at', 'desc')
            ->searchable()
            ->filterable();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
    }

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
    }

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
    }

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
    }

>>>>>>> 0dadab4 (Lint)
    /**
     * Restituisce le colonne appropriate per il layout corrente
     */
    protected function getColumnsForLayout(): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
    {
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
    {
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
    {
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
    {
>>>>>>> 0dadab4 (Lint)
        $listColumns = [
            TextColumn::make('name')
                ->searchable()
                ->sortable(),
            TextColumn::make('email')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
            TextColumn::make('created_at')
                ->dateTime()
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
            TextColumn::make('created_at')
                ->dateTime()
=======
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)
                ->searchable()
                ->sortable(),
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
=======
            TextColumn::make('created_at')
                ->dateTime()
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
            TextColumn::make('status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'active' => 'success',
                    'inactive' => 'danger',
                    default => 'gray',
                }),
        ];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
        $gridColumns = [
            Stack::make([
                TextColumn::make('name')
                    ->weight(FontWeight::Bold)
                    ->searchable(),
                TextColumn::make('email')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
                TextColumn::make('created_at')
                    ->dateTime(),
            ]),
        return $this->layout->getTableColumns($listColumns, $gridColumns);
     * Azioni header con toggle layout
    protected function getHeaderActions(): array
=======
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime(),
            ]),
            TextColumn::make('status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'active' => 'success',
                    'inactive' => 'danger',
                    default => 'gray',
                }),
        ];

        return $this->layout->getTableColumns($listColumns, $gridColumns);
    }

    /**
     * Azioni header con toggle layout
     */
    protected function getHeaderActions(): array
    {
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
                TextColumn::make('created_at')
                    ->dateTime(),
            ]),
        return $this->layout->getTableColumns($listColumns, $gridColumns);
     * Azioni header con toggle layout
    protected function getHeaderActions(): array
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
        return [
            Action::make('toggleLayout')
                ->icon($this->layout->getIcon())
                ->color($this->layout->getColor())
                ->action(function () {
                    $this->layout = $this->layout->toggle();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_tosi8X
            // Altre azioni...
     * Azioni bulk per il layout corrente
    protected function getBulkActions(): array
=======
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)
                }),
            // Altre azioni...
        ];
    }

    /**
     * Azioni bulk per il layout corrente
     */
    protected function getBulkActions(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
=======
            // Altre azioni...
     * Azioni bulk per il layout corrente
    protected function getBulkActions(): array
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
            Tables\Actions\BulkAction::make('activate')
                ->icon('heroicon-o-check-circle')
                ->action(function ($records) {
                    // Logica attivazione
                })
                ->visible(fn () => $this->layout->isListLayout()),
            Tables\Actions\BulkAction::make('deactivate')
                ->icon('heroicon-o-x-circle')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
                    // Logica disattivazione
}
```
### 2. Traduzioni Richieste
#### File: `Modules/User/lang/it/fields.php`
=======
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)
                ->action(function ($records) {
                    // Logica disattivazione
                })
                ->visible(fn () => $this->layout->isListLayout()),
        ];
    }
}
```

### 2. Traduzioni Richieste

#### File: `Modules/User/lang/it/fields.php`
```php
<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
                    // Logica disattivazione
}
```
### 2. Traduzioni Richieste
#### File: `Modules/User/lang/it/fields.php`
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
return [
    'name' => [
        'label' => 'Nome',
        'placeholder' => 'Inserisci nome',
        'tooltip' => 'Nome completo dell\'utente',
        'helper_text' => 'Nome e cognome dell\'utente',
    ],
    'email' => [
        'label' => 'Email',
        'placeholder' => 'Inserisci email',
        'tooltip' => 'Indirizzo email dell\'utente',
        'helper_text' => 'Email valida per le comunicazioni',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
    ],
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
    ],
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
    ],
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
    ],
>>>>>>> 0dadab4 (Lint)
    'created_at' => [
        'label' => 'Data Creazione',
        'placeholder' => '',
        'tooltip' => 'Data di registrazione dell\'utente',
        'helper_text' => 'Data di creazione dell\'account',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
    'status' => [
        'label' => 'Stato',
        'tooltip' => 'Stato attuale dell\'utente',
        'helper_text' => 'Stato attivo o inattivo',
];
#### File: `Modules/User/lang/it/actions.php`
=======
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)
    ],
    'status' => [
        'label' => 'Stato',
        'placeholder' => '',
        'tooltip' => 'Stato attuale dell\'utente',
        'helper_text' => 'Stato attivo o inattivo',
    ],
];
```

#### File: `Modules/User/lang/it/actions.php`
```php
<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
    'status' => [
        'label' => 'Stato',
        'tooltip' => 'Stato attuale dell\'utente',
        'helper_text' => 'Stato attivo o inattivo',
];
#### File: `Modules/User/lang/it/actions.php`
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    'activate' => [
        'label' => 'Attiva',
        'tooltip' => 'Attiva gli utenti selezionati',
        'helper_text' => 'Rendi attivi gli utenti selezionati',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
    ],
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
    ],
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
    ],
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
    ],
>>>>>>> 0dadab4 (Lint)
    'deactivate' => [
        'label' => 'Disattiva',
        'tooltip' => 'Disattiva gli utenti selezionati',
        'helper_text' => 'Rendi inattivi gli utenti selezionati',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
#### File: `Modules/UI/lang/it/table-layout.php` (aggiornato)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
#### File: `Modules/UI/lang/it/table-layout.php` (aggiornato)
=======
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)
    ],
];
```

#### File: `Modules/UI/lang/it/table-layout.php` (aggiornato)
```php
<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
=======
#### File: `Modules/UI/lang/it/table-layout.php` (aggiornato)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    'list' => [
        'label' => 'Lista',
        'color' => 'primary',
        'icon' => 'heroicon-o-list-bullet',
        'description' => 'Visualizzazione a lista tradizionale',
        'tooltip' => 'Mostra elementi in formato lista',
        'helper_text' => 'Layout tradizionale con righe e colonne',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
    ],
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
    ],
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
    ],
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
    ],
>>>>>>> 0dadab4 (Lint)
    'grid' => [
        'label' => 'Griglia',
        'color' => 'success',
        'icon' => 'heroicon-o-squares-2x2',
        'description' => 'Visualizzazione a griglia con card',
        'tooltip' => 'Mostra elementi in formato griglia',
        'helper_text' => 'Layout a griglia con card responsive',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
    ],
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
    ],
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
    ],
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
    ],
>>>>>>> 0dadab4 (Lint)
    'toggle' => [
        'label' => 'Cambia Layout',
        'tooltip' => 'Alterna tra visualizzazione lista e griglia',
        'helper_text' => 'Cambia il tipo di visualizzazione',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
### 3. CSS Personalizzato (Opzionale)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### 3. CSS Personalizzato (Opzionale)
=======
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)
    ],
];
```

### 3. CSS Personalizzato (Opzionale)

<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
=======
### 3. CSS Personalizzato (Opzionale)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
```css
/* File: Modules/UI/resources/css/table-layout.css */
.table-layout-list {
    @apply bg-white rounded-lg shadow-sm;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
.table-layout-grid {
    @apply bg-gray-50 rounded-lg p-4;
.table-layout-grid .filament-tables-table {
    @apply grid gap-4;
.table-layout-grid .filament-tables-row {
    @apply bg-white rounded-lg shadow-sm p-4;
### 4. Test Unitario
namespace Modules\UI\Tests\Unit\Enums;
use PHPUnit\Framework\TestCase;
class TableLayoutEnumTest extends TestCase
    public function test_init_returns_list(): void
        $this->assertEquals(TableLayoutEnum::LIST, TableLayoutEnum::init());
    public function test_toggle_switches_layout(): void
        $layout = TableLayoutEnum::LIST;
        $this->assertEquals(TableLayoutEnum::GRID, $layout->toggle());
        $this->assertEquals(TableLayoutEnum::LIST, $layout->toggle()->toggle());
    public function test_get_label_returns_translated_string(): void
        $listLabel = TableLayoutEnum::LIST->getLabel();
        $gridLabel = TableLayoutEnum::GRID->getLabel();
=======
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)
}

.table-layout-grid {
    @apply bg-gray-50 rounded-lg p-4;
}

.table-layout-grid .filament-tables-table {
    @apply grid gap-4;
}

.table-layout-grid .filament-tables-row {
    @apply bg-white rounded-lg shadow-sm p-4;
}
```

### 4. Test Unitario

```php
<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Enums;

use Modules\UI\Enums\TableLayoutEnum;
use PHPUnit\Framework\TestCase;

class TableLayoutEnumTest extends TestCase
{
    public function test_init_returns_list(): void
    {
        $this->assertEquals(TableLayoutEnum::LIST, TableLayoutEnum::init());
    }

    public function test_toggle_switches_layout(): void
    {
        $layout = TableLayoutEnum::LIST;
        $this->assertEquals(TableLayoutEnum::GRID, $layout->toggle());
        $this->assertEquals(TableLayoutEnum::LIST, $layout->toggle()->toggle());
    }

    public function test_get_label_returns_translated_string(): void
    {
        $listLabel = TableLayoutEnum::LIST->getLabel();
        $gridLabel = TableLayoutEnum::GRID->getLabel();

<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
.table-layout-grid {
    @apply bg-gray-50 rounded-lg p-4;
.table-layout-grid .filament-tables-table {
    @apply grid gap-4;
.table-layout-grid .filament-tables-row {
    @apply bg-white rounded-lg shadow-sm p-4;
### 4. Test Unitario
namespace Modules\UI\Tests\Unit\Enums;
use PHPUnit\Framework\TestCase;
class TableLayoutEnumTest extends TestCase
    public function test_init_returns_list(): void
        $this->assertEquals(TableLayoutEnum::LIST, TableLayoutEnum::init());
    public function test_toggle_switches_layout(): void
        $layout = TableLayoutEnum::LIST;
        $this->assertEquals(TableLayoutEnum::GRID, $layout->toggle());
        $this->assertEquals(TableLayoutEnum::LIST, $layout->toggle()->toggle());
    public function test_get_label_returns_translated_string(): void
        $listLabel = TableLayoutEnum::LIST->getLabel();
        $gridLabel = TableLayoutEnum::GRID->getLabel();
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
        $this->assertIsString($listLabel);
        $this->assertIsString($gridLabel);
        $this->assertNotEmpty($listLabel);
        $this->assertNotEmpty($gridLabel);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_tosi8X
    public function test_get_color_returns_valid_color(): void
        $listColor = TableLayoutEnum::LIST->getColor();
        $gridColor = TableLayoutEnum::GRID->getColor();
=======
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)
    }

    public function test_get_color_returns_valid_color(): void
    {
        $listColor = TableLayoutEnum::LIST->getColor();
        $gridColor = TableLayoutEnum::GRID->getColor();

<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
=======
    public function test_get_color_returns_valid_color(): void
        $listColor = TableLayoutEnum::LIST->getColor();
        $gridColor = TableLayoutEnum::GRID->getColor();
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
        $this->assertIsString($listColor);
        $this->assertIsString($gridColor);
        $this->assertNotEmpty($listColor);
        $this->assertNotEmpty($gridColor);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_tosi8X
    public function test_get_icon_returns_valid_icon(): void
        $listIcon = TableLayoutEnum::LIST->getIcon();
        $gridIcon = TableLayoutEnum::GRID->getIcon();
=======
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)
    }

    public function test_get_icon_returns_valid_icon(): void
    {
        $listIcon = TableLayoutEnum::LIST->getIcon();
        $gridIcon = TableLayoutEnum::GRID->getIcon();

<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
=======
    public function test_get_icon_returns_valid_icon(): void
        $listIcon = TableLayoutEnum::LIST->getIcon();
        $gridIcon = TableLayoutEnum::GRID->getIcon();
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
        $this->assertIsString($listIcon);
        $this->assertIsString($gridIcon);
        $this->assertNotEmpty($listIcon);
        $this->assertNotEmpty($gridIcon);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
    public function test_get_table_content_grid_returns_null_for_list(): void
        $this->assertNull(TableLayoutEnum::LIST->getTableContentGrid());
    public function test_get_table_content_grid_returns_array_for_grid(): void
        $grid = TableLayoutEnum::GRID->getTableContentGrid();
=======
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)
    }

    public function test_get_table_content_grid_returns_null_for_list(): void
    {
        $this->assertNull(TableLayoutEnum::LIST->getTableContentGrid());
    }

    public function test_get_table_content_grid_returns_array_for_grid(): void
    {
        $grid = TableLayoutEnum::GRID->getTableContentGrid();

<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
    public function test_get_table_content_grid_returns_null_for_list(): void
        $this->assertNull(TableLayoutEnum::LIST->getTableContentGrid());
    public function test_get_table_content_grid_returns_array_for_grid(): void
        $grid = TableLayoutEnum::GRID->getTableContentGrid();
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
        $this->assertIsArray($grid);
        $this->assertArrayHasKey('sm', $grid);
        $this->assertArrayHasKey('md', $grid);
        $this->assertArrayHasKey('lg', $grid);
        $this->assertArrayHasKey('xl', $grid);
        $this->assertArrayHasKey('2xl', $grid);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
    public function test_get_table_columns_returns_correct_columns(): void
        $listColumns = ['name', 'email'];
        $gridColumns = ['stack'];
        $result = TableLayoutEnum::LIST->getTableColumns($listColumns, $gridColumns);
        $this->assertEquals($listColumns, $result);
        $result = TableLayoutEnum::GRID->getTableColumns($listColumns, $gridColumns);
        $this->assertEquals($gridColumns, $result);
    public function test_is_grid_layout_returns_correct_boolean(): void
        $this->assertTrue(TableLayoutEnum::GRID->isGridLayout());
        $this->assertFalse(TableLayoutEnum::LIST->isGridLayout());
    public function test_is_list_layout_returns_correct_boolean(): void
        $this->assertTrue(TableLayoutEnum::LIST->isListLayout());
        $this->assertFalse(TableLayoutEnum::GRID->isListLayout());
    public function test_get_options_returns_all_options(): void
        $options = TableLayoutEnum::getOptions();
=======
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)
    }

    public function test_get_table_columns_returns_correct_columns(): void
    {
        $listColumns = ['name', 'email'];
        $gridColumns = ['stack'];

        $result = TableLayoutEnum::LIST->getTableColumns($listColumns, $gridColumns);
        $this->assertEquals($listColumns, $result);

        $result = TableLayoutEnum::GRID->getTableColumns($listColumns, $gridColumns);
        $this->assertEquals($gridColumns, $result);
    }

    public function test_is_grid_layout_returns_correct_boolean(): void
    {
        $this->assertTrue(TableLayoutEnum::GRID->isGridLayout());
        $this->assertFalse(TableLayoutEnum::LIST->isGridLayout());
    }

    public function test_is_list_layout_returns_correct_boolean(): void
    {
        $this->assertTrue(TableLayoutEnum::LIST->isListLayout());
        $this->assertFalse(TableLayoutEnum::GRID->isListLayout());
    }

    public function test_get_options_returns_all_options(): void
    {
        $options = TableLayoutEnum::getOptions();

<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
    public function test_get_table_columns_returns_correct_columns(): void
        $listColumns = ['name', 'email'];
        $gridColumns = ['stack'];
        $result = TableLayoutEnum::LIST->getTableColumns($listColumns, $gridColumns);
        $this->assertEquals($listColumns, $result);
        $result = TableLayoutEnum::GRID->getTableColumns($listColumns, $gridColumns);
        $this->assertEquals($gridColumns, $result);
    public function test_is_grid_layout_returns_correct_boolean(): void
        $this->assertTrue(TableLayoutEnum::GRID->isGridLayout());
        $this->assertFalse(TableLayoutEnum::LIST->isGridLayout());
    public function test_is_list_layout_returns_correct_boolean(): void
        $this->assertTrue(TableLayoutEnum::LIST->isListLayout());
        $this->assertFalse(TableLayoutEnum::GRID->isListLayout());
    public function test_get_options_returns_all_options(): void
        $options = TableLayoutEnum::getOptions();
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
        $this->assertIsArray($options);
        $this->assertArrayHasKey('list', $options);
        $this->assertArrayHasKey('grid', $options);
        $this->assertCount(2, $options);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
    public function test_get_container_classes_returns_valid_classes(): void
        $listClasses = TableLayoutEnum::LIST->getContainerClasses();
        $gridClasses = TableLayoutEnum::GRID->getContainerClasses();
        $this->assertEquals('table-layout-list', $listClasses);
        $this->assertEquals('table-layout-grid', $gridClasses);
## Vantaggi dell'Implementazione
=======
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)
    }

    public function test_get_container_classes_returns_valid_classes(): void
    {
        $listClasses = TableLayoutEnum::LIST->getContainerClasses();
        $gridClasses = TableLayoutEnum::GRID->getContainerClasses();

        $this->assertEquals('table-layout-list', $listClasses);
        $this->assertEquals('table-layout-grid', $gridClasses);
    }
}
```

## Vantaggi dell'Implementazione

<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
    public function test_get_container_classes_returns_valid_classes(): void
        $listClasses = TableLayoutEnum::LIST->getContainerClasses();
        $gridClasses = TableLayoutEnum::GRID->getContainerClasses();
        $this->assertEquals('table-layout-list', $listClasses);
        $this->assertEquals('table-layout-grid', $gridClasses);
## Vantaggi dell'Implementazione
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
### 1. Type Safety
- Enum garantisce valori validi
- Type hints espliciti
- Previene errori runtime
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
### 2. Responsive Design
- Grid configurabile per breakpoints
- CSS nativo senza JS aggiuntivo
- Performance ottimizzata
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
### 3. UX Consistency
- Icone e colori coerenti
- Traduzioni centralizzate
- Comportamento prevedibile
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
### 4. Maintainability
- Codice DRY e riutilizzabile
- Separazione responsabilità
- Testabilità migliorata
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Regole Critiche Implementate
### ❌ MAI usare ->label()
// ERRORE - Non fare mai questo
TextColumn::make('name')->label('Nome')
// ✅ CORRETTO - Usa il sistema di traduzioni automatico
TextColumn::make('name')
=======
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)

## Regole Critiche Implementate

### ❌ MAI usare ->label()
```php
// ERRORE - Non fare mai questo
TextColumn::make('name')->label('Nome')

// ✅ CORRETTO - Usa il sistema di traduzioni automatico
TextColumn::make('name')
```

<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
## Regole Critiche Implementate
### ❌ MAI usare ->label()
// ERRORE - Non fare mai questo
TextColumn::make('name')->label('Nome')
// ✅ CORRETTO - Usa il sistema di traduzioni automatico
TextColumn::make('name')
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
### ✅ Sistema Traduzioni Automatico
- Il LangServiceProvider gestisce automaticamente le traduzioni
- Le chiavi vengono generate automaticamente dal nome del campo
- Struttura: `modulo::risorsa.fields.campo.label`
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
### ✅ Enum Translation Pattern
- **SEMPRE** usare `transClass()` negli enum per le traduzioni
- **MAI** usare `__()` o `trans()` direttamente negli enum
- **SEMPRE** struttura espansa nei file di traduzione
- **SEMPRE** `use TransTrait;` negli enum
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Collegamenti
- [Analisi TableLayoutEnum](table_layout_enum_analysis.md)
- [Usage Guide](table-layout-enum-usage.md)
- [Translation Standards](../../../docs/translation_standards.md)
- [Filament Best Practices](../../../docs/filament_best_practices.md)
- [Enum Translation Pattern](../../../docs/enum-translation-pattern.md)

```
=======
>>>>>>> .merge_file_tosi8X
=======
>>>>>>> 0dadab4 (Lint)

## Collegamenti

- [Analisi TableLayoutEnum](table_layout_enum_analysis.md)
- [Usage Guide](table-layout-enum-usage.md)
- [Translation Standards](../../../../docs/translation_standards.md)
- [Filament Best Practices](../../../../docs/filament_best_practices.md)
- [Enum Translation Pattern](../../../../docs/enum-translation-pattern.md)

<<<<<<< HEAD
<<<<<<< .merge_file_hb5zh0
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
## Collegamenti
- [Analisi TableLayoutEnum](table_layout_enum_analysis.md)
- [Usage Guide](table-layout-enum-usage.md)
- [Translation Standards](../../../docs/translation_standards.md)
- [Filament Best Practices](../../../docs/filament_best_practices.md)
- [Enum Translation Pattern](../../../docs/enum-translation-pattern.md)

<<<<<<< HEAD
```
=======
*Ultimo aggiornamento: 2025-01-27*
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
*Ultimo aggiornamento: 2025-01-27* 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_tosi8X
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
