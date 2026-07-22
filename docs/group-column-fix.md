# GroupColumn Fix - Risoluzione Errore "Column not mounted to table"

## Problema
<<<<<<< HEAD

Con `GroupColumn` alcuni valori risultano vuoti quando le colonne figlio puntano a relazioni o attributi annidati (es. `valutatore.nome_diri`). In questi casi la tabella non mostra nulla, anche se la stessa colonna funziona quando usata come `TextColumn` standard.

## Causa Tecnica

### Perché `$field->getState()` non funziona

Le colonne figlio nel `GroupColumn` **non sono montate alla tabella Filament**. In Filament, per far funzionare `getState()` su una colonna, questa deve essere:

1. Montata alla tabella (`$column->table($this->getTable())`)
2. Configurata con il record corrente (`$column->record($record)`)

Nel `GroupColumn` le colonne sono semplicemente memorizzate in un array `$schema`, ma non vengono mai preparate per essere usate con il record corrente. Questo significa che `$field->getState()` restituisce sempre `null`.

### La view originale

```php
// ❌ Non risolve la dot notation
$value = $record->{$name} ?? null;
```

Con `$name = 'valutatore.nome_diri'`, questo cerca `$record->{'valutatore.nome_diri'}` che non esiste come proprietà diretta.

## Soluzione Implementata

### View aggiornata con fallback `data_get()`

La view ora usa un approccio a due livelli:
=======
L'errore `LogicException - The column [matr] is not mounted to a table` si verificava quando il componente `GroupColumn` veniva utilizzato in una tabella Filament. Il problema era che le colonne figlio non erano correttamente montate alla tabella padre.

## Causa
Il metodo `table()` del `GroupColumn` non assicurava che tutte le colonne figlio fossero correttamente montate alla stessa tabella, causando l'errore quando Filament tentava di accedere alle proprietà delle colonne figlio.

## Soluzione Implementata

### 1. Miglioramento del metodo `table()`
```php
public function table(?Table $table): static
{
    parent::table($table);

    if ($table !== null) {
        foreach ($this->schema as $child) {
            if ($child instanceof Column) {
                // Ensure the child column is properly mounted to the table
                if ($child->getTable() !== $table) {
                    $child->table($table);
                }

                // Set the record on the child column if available
                if (method_exists($child, 'record') && $this->getRecord()) {
                    $child->record($this->getRecord());
                }
            }
        }
    }

    return $this;
}
```

### 2. Miglioramento del metodo `getFields()`
```php
public function getFields(): array
{
    // Ensure all child columns have the same table reference
    if ($this->getTable()) {
        foreach ($this->schema as $child) {
            if ($child instanceof Column && $child->getTable() !== $this->getTable()) {
                $child->table($this->getTable());
            }
        }
    }

    return $this->schema;
}
```

### 3. Miglioramento della View Blade
La view è stata aggiornata per:
- Saltare valori vuoti per risparmiare spazio
- Aggiungere etichette per migliorare la leggibilità
- Gestire meglio i valori null
>>>>>>> dfac49d (.)

```php
@php
    $name = $field->getName();
<<<<<<< HEAD
    // 1. Prova getState() (non funziona per colonne non montate)
    $value = $field->getState();
    // 2. Fallback: data_get() risolve la dot notation
    if ($value === null) {
        $value = data_get($record, $name);
    }

    // Skip valori vuoti
    if (empty($value) && $value !== 0 && $value !== '0') {
        continue;
    }
@endphp
```

### Perché funziona

`data_get($record, 'valutatore.nome_diri')` attraversa le relazioni:
1. Accede a `$record->valutatore` (che è un oggetto relazione)
2. Poi accede a `->nome_diri` su quell'oggetto

## Requisito: Eager Loading

**IMPORTANTE**: Per funzionare, la relazione deve essere caricata. Assicurarsi che la query della tabella includa:

```php
// Nel Resource o nella List page
public static function getEloquentQuery(): Builder
{
    return parent::getEloquentQuery()
        ->with(['valutatore']); // ← Caricare la relazione
}
```

Senza eager loading, `data_get()` restituirà `null` perché la relazione non è caricata.

## Utilizzo

### Attributi diretti (sempre funziona)
=======
    $value = $record->getAttribute($name);

    // Skip empty values to save space
    if (empty($value) && $value !== 0 && $value !== '0') {
        continue;
    }

    // Format the value for display
    $formattedValue = $value;

    // Add label if the field has one (for better readability)
    $label = $field->getLabel() ?? $name;
    $displayText = $label . ': ' . $formattedValue;
@endphp
<div class="text-sm text-gray-700 dark:text-gray-300">
    {!! $displayText !!}
</div>
```

## Utilizzo
Il `GroupColumn` può essere utilizzato per raggruppare più valori in una singola colonna della tabella, risparmiando spazio:
>>>>>>> dfac49d (.)

```php
GroupColumn::make('lavoratore')->schema([
    TextColumn::make('matr'),
    TextColumn::make('cognome'),
    TextColumn::make('nome'),
<<<<<<< HEAD
])
```

### Attributi relazionali (richiede eager loading)

```php
GroupColumn::make('valutatore_info')->schema([
    TextColumn::make('valutatore.nome_diri'),
    TextColumn::make('valutatore.stabi_txt'),
])
```

## Alternative per Casi Complessi

### 1. Accessor piatto sul modello

Se il valore relazionale è usato frequentemente:

```php
// Nel Model
public function getNomeDiriAttribute(): ?string
{
    return $this->valutatore?->nome_diri;
}
```

Poi usare direttamente:

```php
TextColumn::make('nome_diri') // ← Senza dot notation
```

### 2. TextColumn standard fuori da GroupColumn

Per campi relazionali singoli, usare TextColumn direttamente (Filament gestisce automaticamente la dot notation):

```php
TextColumn::make('valutatore.nome_diri') // ← Fuori da GroupColumn
```

## Test

I test verificano:
- L'inizializzazione corretta dello schema
- La gestione di schemi vuoti
- Il percorso corretto della view
- La risoluzione della dot notation con `data_get()`

**File test**: `Modules/UI/tests/Feature/GroupColumnTest.php`

## File Coinvolti

- `Modules/UI/app/Filament/Tables/Columns/GroupColumn.php` - Classe colonna
- `Modules/UI/resources/views/filament/tables/columns/group.blade.php` - View con fix
- `Modules/UI/tests/Feature/GroupColumnTest.php` - Test

## Collegamenti

- [Custom Columns (Ptv)](../../Ptv/docs/custom-columns.md)
- [Common Errors (Theme One)](../../../Themes/One/docs/common-errors.md)
=======
    TextColumn::make('email'),
])
```

## Test
Sono stati creati test per verificare:
- L'inizializzazione corretta dello schema
- La gestione di schemi vuoti
- Il percorso corretto della view

## File Modificati
- `Modules/UI/app/Filament/Tables/Columns/GroupColumn.php`
- `Modules/UI/resources/views/filament/tables/columns/group.blade.php`
- `tests/Feature/GroupColumnTest.php` (nuovo)

## Collegamenti
- [ProgressioniResource Usage](../../progressioni/docs/progressioni-resource.md)
- [Filament Tables Documentation](https://filamentphp.com/docs/3.x/tables/columns)
>>>>>>> dfac49d (.)
