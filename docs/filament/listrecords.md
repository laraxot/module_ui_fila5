# List Records in Filament

## Perché

Le pagine lista delle Resource non estendono `Filament\Resources\Pages\ListRecords`.
Estendono `XotBaseListRecords`: traduzioni, permessi e colonne restano nel contratto Laraxot.

## Estensione corretta

```php
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListMyRecords extends XotBaseListRecords
{
    protected static string $resource = MyResource::class;

    public function getListTableColumns(): array
    {
        return [
            // colonne
        ];
    }
}
```


Quando si estende `XotBaseListRecords`:

1. `getListTableColumns()` — colonne
2. `getListTableActions()` — azioni riga
3. `getListTableBulkActions()` — azioni di massa
4. `getListTableFilters()` — filtri

Prefisso `List` obbligatorio. Visibilità `public`. Non cambiare la visibilità dei metodi ereditati.

## Errori comuni

- Estendere `ListRecords` Filament direttamente
- Usare `getTableColumns()` / `getTableActions()` senza prefisso `List`
- Mettere la tabella sulla Resource invece che sulla pagina List
- `protected function getListTableColumns()`

## Best practices

```php
declare(strict_types=1);

namespace Modules\XXX\Filament\Resources\XXXResource\Pages;

use Exception;
use Filament\Actions;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;
use Modules\Xot\Filament\Traits\TransTrait;
use Webmozart\Assert\Assert;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

    public function getGridTableColumns(): array
    {
        return [
        ];
    }
## Metodi obbligatori

Quando si estende `XotBaseListRecords`:

1. `getListTableColumns()` — colonne
2. `getListTableActions()` — azioni riga
3. `getListTableBulkActions()` — azioni di massa
4. `getListTableFilters()` — filtri

Prefisso `List` obbligatorio. Visibilità `public`. Non cambiare la visibilità dei metodi ereditati.

## Errori comuni

- Estendere `ListRecords` Filament direttamente
- Usare `getTableColumns()` / `getTableActions()` senza prefisso `List`
- Mettere la tabella sulla Resource invece che sulla pagina List
- `protected function getListTableColumns()`

## Best practices

```php
class ListMyRecords extends XotBaseListRecords
{
    protected static string $resource = MyResource::class;

    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('id')->sortable(),
            TextColumn::make('name')->searchable(),
        ];
    }

    public function getListTableActions(): array
    {
        return [
            'edit' => EditAction::make(),
            'delete' => DeleteAction::make(),
        ];
    }

    public function getListTableBulkActions(): array
    {
        return [
            'delete' => DeleteBulkAction::make(),
        ];
    }
}
```

Traduzioni con `static::trans()`, permessi con `can()` nel `mount()`.
