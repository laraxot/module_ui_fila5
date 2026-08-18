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
