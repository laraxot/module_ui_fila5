# Analisi Completa TableLayoutEnum

<<<<<<< .merge_file_W0U8VI
## Data: 2025-01-06
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz
## Data: [DATE]
=======
## Data: 2025-01-06
=======
<<<<<<< .merge_file_w3Ylfz
## Data: [DATE]
=======
<<<<<<< HEAD
## Data: 2025-01-06
=======
<<<<<<< HEAD
## Data: [DATE]
=======
## Data: 2025-01-06
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
## Data: 2025-01-06
=======
## Data: [DATE]
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU

## Panoramica

Il `TableLayoutEnum` è un enum PHP che gestisce i layout delle tabelle nei componenti Filament UI. Fornisce un sistema standardizzato per alternare tra visualizzazioni a lista e griglia con configurazioni responsive appropriate.

## Scopo e Funzionalità

### Obiettivo Principale
- **Gestione Layout**: Alternare tra layout lista e griglia
- **Responsive Design**: Configurazioni grid per diverse dimensioni schermo
- **Type Safety**: Implementazione con interfacce Filament per colori, icone e label
- **UX Consistency**: Esperienza utente coerente attraverso l'applicazione

### Caso d'Uso
```php
// Esempio di utilizzo in ListRecords
class ListUsers extends ListRecords
{
    protected TableLayoutEnum $layout = TableLayoutEnum::LIST;
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_w3Ylfz

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dKyffC
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
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
    public function table(Table $table): Table
    {
        return $table
            ->columns($this->getColumnsForLayout())
            ->contentGrid($this->layout->getTableContentGrid());
    }
}
```

## Analisi Tecnica

### Interfacce Implementate
- `HasColor`: Fornisce colori per UI components
- `HasIcon`: Fornisce icone Heroicon
- `HasLabel`: Fornisce label tradotte

### Metodi Principali

#### 1. `init()` - Layout di Default
```php
public static function init(): self
{
    return self::LIST;
}
```
- **Scopo**: Fornisce layout predefinito
- **Valore**: `LIST` (layout tradizionale)

#### 2. `getLabel()` - Traduzioni
```php
public function getLabel(): string
{
    return match ($this) {
        self::LIST => __('ui::table-layout.list.label'),
        self::GRID => __('ui::table-layout.grid.label'),
    };
}
```
- **Scopo**: Label tradotte per UI
- **Dipendenze**: File traduzioni `ui::table-layout.*`

#### 3. `getColor()` - Colori UI
```php
public function getColor(): string
{
    return match ($this) {
        self::LIST => 'primary',
        self::GRID => 'secondary',
    };
}
```
- **Scopo**: Colori per componenti UI
- **Valori**: `primary` per lista, `secondary` per griglia

#### 4. `getIcon()` - Icone Heroicon
```php
public function getIcon(): string
{
    return match ($this) {
        self::LIST => 'heroicon-o-list-bullet',
        self::GRID => 'heroicon-o-squares-2x2',
    };
}
```
- **Scopo**: Icone per toggle buttons
- **Icone**: Lista e griglia con Heroicon

#### 5. `toggle()` - Alternanza Layout
```php
public function toggle(): self
{
    return match ($this) {
        self::LIST => self::GRID,
        self::GRID => self::LIST,
    };
}
```
- **Scopo**: Alternare tra layout
- **Pattern**: Bidirezionale LIST ↔ GRID

#### 6. `getTableContentGrid()` - Configurazione Responsive
```php
public function getTableContentGrid(): ?array
{
    return $this->isGridLayout()
        ? [
            'sm' => 1,
            'md' => 2,
            'lg' => 3,
            'xl' => 4,
            '2xl' => 5,
        ]
        : null;
}
```
- **Scopo**: Grid responsive per layout griglia
- **Breakpoints**: sm, md, lg, xl, 2xl
- **Colonne**: 1-5 colonne in base alla dimensione

#### 7. `getTableColumns()` - Colonne Dinamiche
```php
public function getTableColumns(array $listColumns, array $gridColumns): array
{
    return $this->isGridLayout() ? $gridColumns : $listColumns;
}
```
- **Scopo**: Selezionare colonne appropriate per layout
- **Parametri**: Array espliciti per type safety
- **Approccio**: Esplicito invece di debug_backtrace

## Architettura e Design Patterns

### 1. Enum Pattern
- **Vantaggi**: Type safety, immutabilità, centralizzazione
- **Uso**: Gestione stati layout con valori predefiniti

### 2. Strategy Pattern
- **Implementazione**: Metodi che cambiano comportamento in base al layout
- **Esempio**: `getTableColumns()` con strategie diverse per lista/griglia

### 3. Factory Pattern
- **Implementazione**: `getOptions()` crea array di opzioni
- **Uso**: Popolamento dropdown e select

### 4. Interface Segregation
- **Interfacce**: `HasColor`, `HasIcon`, `HasLabel`
- **Vantaggio**: Implementazione selettiva delle funzionalità

## Dipendenze e Integrazione

### Traduzioni Richieste
```php
// File: Modules/UI/lang/it/table-layout.php
return [
    'list' => [
        'label' => 'Lista',
        'description' => 'Visualizzazione a lista tradizionale',
        'tooltip' => 'Mostra elementi in formato lista',
    ],
    'grid' => [
        'label' => 'Griglia',
        'description' => 'Visualizzazione a griglia con card',
        'tooltip' => 'Mostra elementi in formato griglia',
    ],
];
```

### Integrazione Filament
- **Table Components**: Integrazione con `Filament\Tables`
- **Content Grid**: Supporto per `contentGrid()` method
- **Responsive Design**: Breakpoints Tailwind CSS

## Best Practices Implementate

### 1. Type Safety
- `declare(strict_types=1);`
- Type hints espliciti
- Return types specifici

### 2. PHPDoc Completo
- Documentazione per ogni metodo
- Esempi di utilizzo
- Collegamenti a documentazione correlata

### 3. Naming Conventions
- Metodi descrittivi (`isGridLayout()`, `isListLayout()`)
- Costanti chiare (`LIST`, `GRID`)
- Nomi file in minuscolo

### 4. Error Handling
- Match expressions per gestione sicura
- Valori di default appropriati
- Null safety per grid configuration

## Esempi di Utilizzo

### 1. ListRecords Implementation
```php
class ListUsers extends ListRecords
{
    protected TableLayoutEnum $layout;
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_w3Ylfz

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dKyffC
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
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
    public function mount(): void
    {
        $this->layout = TableLayoutEnum::init();
    }
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_w3Ylfz

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dKyffC
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
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
    protected function getHeaderActions(): array
    {
        return [
            Action::make('toggleLayout')
                ->icon($this->layout->getIcon())
                ->color($this->layout->getColor())
                ->label($this->layout->getLabel())
                ->action(function () {
                    $this->layout = $this->layout->toggle();
                }),
        ];
    }
}
```

### 2. Table Configuration
```php
public function table(Table $table): Table
{
    return $table
        ->columns($this->getColumnsForLayout())
        ->contentGrid($this->layout->getTableContentGrid())
        ->paginated([10, 25, 50])
        ->defaultSort('created_at', 'desc');
}
```

### 3. Column Selection
```php
protected function getColumnsForLayout(): array
{
    $listColumns = [
        Tables\Columns\TextColumn::make('name')->sortable(),
        Tables\Columns\TextColumn::make('email')->searchable(),
        Tables\Columns\TextColumn::make('created_at')->dateTime(),
    ];
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_w3Ylfz

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dKyffC
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
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
    $gridColumns = [
        Tables\Columns\Layout\Stack::make([
            Tables\Columns\TextColumn::make('name')->weight(FontWeight::Bold),
            Tables\Columns\TextColumn::make('email'),
        ]),
    ];
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_w3Ylfz

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dKyffC
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
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
    return $this->layout->getTableColumns($listColumns, $gridColumns);
}
```

## Considerazioni di Performance

### 1. Memory Usage
- **Enum**: Valori immutabili, memoria efficiente
- **Match**: Più veloce di switch per enum

### 2. CPU Usage
- **Match Expressions**: Ottimizzate dal compilatore PHP
- **Method Calls**: Minimi overhead

### 3. Network Impact
- **Responsive Grid**: CSS nativo, nessun JS aggiuntivo
- **Icon Loading**: Heroicon già caricato

## Sicurezza e Validazione

### 1. Input Validation
- **Enum Values**: Solo valori predefiniti validi
- **Type Safety**: Previene errori runtime

### 2. XSS Prevention
- **Label Translation**: Escape automatico da Laravel
- **Icon Names**: Stringhe sicure, non user input

### 3. CSRF Protection
- **Toggle Actions**: Protezione CSRF di Filament
- **Form Submissions**: Token automatici

## Testing Strategy

### 1. Unit Tests
```php
class TableLayoutEnumTest extends TestCase
{
    public function test_init_returns_list(): void
    {
        $this->assertEquals(TableLayoutEnum::LIST, TableLayoutEnum::init());
    }
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_w3Ylfz

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dKyffC
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
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
    public function test_toggle_switches_layout(): void
    {
        $layout = TableLayoutEnum::LIST;
        $this->assertEquals(TableLayoutEnum::GRID, $layout->toggle());
        $this->assertEquals(TableLayoutEnum::LIST, $layout->toggle()->toggle());
    }
}
```

### 2. Integration Tests
- Test con componenti Filament reali
- Verifica responsive behavior
- Test traduzioni

## Roadmap e Miglioramenti

### 1. Short Term
- [ ] Implementare traduzioni mancanti
- [ ] Aggiungere test unitari completi
- [ ] Documentare esempi avanzati

### 2. Medium Term
- [ ] Supporto per layout personalizzati
- [ ] Animazioni di transizione
- [ ] Persistenza preferenze utente

### 3. Long Term
- [ ] Layout masonry
- [ ] Layout timeline
- [ ] Layout calendar

## Collegamenti

- [Usage Guide](table-layout-enum-usage.md)
- [Conflict Resolution](conflict-resolution-tablelayoutenum.md)
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< .merge_file_w3Ylfz
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
- [Translation Standards](../../../docs/translation_standards.md)
- [Filament Best Practices](../../../docs/filament_best_practices.md)

*Ultimo aggiornamento: 2025-01-06*
# Analisi Completa TableLayoutEnum
## Data: 2025-01-06
## Panoramica
Il `TableLayoutEnum` è un enum PHP che gestisce i layout delle tabelle nei componenti Filament UI. Fornisce un sistema standardizzato per alternare tra visualizzazioni a lista e griglia con configurazioni responsive appropriate.
## Scopo e Funzionalità
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
- [Translation Standards](../../../../docs/translation_standards.md)
- [Filament Best Practices](../../../../docs/filament_best_practices.md)

# Analisi Completa TableLayoutEnum

## Data: [DATE]

## Panoramica

Il `TableLayoutEnum` è un enum PHP che gestisce i layout delle tabelle nei componenti Filament UI. Fornisce un sistema standardizzato per alternare tra visualizzazioni a lista e griglia con configurazioni responsive appropriate.

## Scopo e Funzionalità

<<<<<<< .merge_file_ALNasz
=======
=======
<<<<<<< .merge_file_w3Ylfz
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dKyffC
>>>>>>> .merge_file_ENiBRU
- [Translation Standards](../../../docs/translation_standards.md)
- [Filament Best Practices](../../../docs/filament_best_practices.md)

*Ultimo aggiornamento: 2025-01-06*
# Analisi Completa TableLayoutEnum
## Data: 2025-01-06
## Panoramica
Il `TableLayoutEnum` è un enum PHP che gestisce i layout delle tabelle nei componenti Filament UI. Fornisce un sistema standardizzato per alternare tra visualizzazioni a lista e griglia con configurazioni responsive appropriate.
## Scopo e Funzionalità
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
### Obiettivo Principale
- **Gestione Layout**: Alternare tra layout lista e griglia
- **Responsive Design**: Configurazioni grid per diverse dimensioni schermo
- **Type Safety**: Implementazione con interfacce Filament per colori, icone e label
- **UX Consistency**: Esperienza utente coerente attraverso l'applicazione
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz

=======
=======
<<<<<<< .merge_file_w3Ylfz

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
### Caso d'Uso
```php
// Esempio di utilizzo in ListRecords
class ListUsers extends ListRecords
{
    protected TableLayoutEnum $layout = TableLayoutEnum::LIST;
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz

=======
=======
<<<<<<< .merge_file_w3Ylfz

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
    public function table(Table $table): Table
    {
        return $table
            ->columns($this->getColumnsForLayout())
            ->contentGrid($this->layout->getTableContentGrid());
    }
}
```
<<<<<<< .merge_file_W0U8VI
## Analisi Tecnica
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz

## Analisi Tecnica

=======
## Analisi Tecnica
=======
<<<<<<< .merge_file_w3Ylfz

## Analisi Tecnica

=======
<<<<<<< HEAD
## Analisi Tecnica
=======
<<<<<<< HEAD

## Analisi Tecnica

=======
## Analisi Tecnica
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
## Analisi Tecnica
=======

## Analisi Tecnica

>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
### Interfacce Implementate
- `HasColor`: Fornisce colori per UI components
- `HasIcon`: Fornisce icone Heroicon
- `HasLabel`: Fornisce label tradotte
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< .merge_file_w3Ylfz
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Metodi Principali
#### 1. `init()` - Layout di Default
public static function init(): self
    return self::LIST;
- **Scopo**: Fornisce layout predefinito
- **Valore**: `LIST` (layout tradizionale)
#### 2. `getLabel()` - Traduzioni
public function getLabel(): string
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC

### Metodi Principali

#### 1. `init()` - Layout di Default
```php
public static function init(): self
{
    return self::LIST;
}
```
- **Scopo**: Fornisce layout predefinito
- **Valore**: `LIST` (layout tradizionale)

#### 2. `getLabel()` - Traduzioni
```php
public function getLabel(): string
{
<<<<<<< .merge_file_ALNasz
=======
=======
<<<<<<< .merge_file_w3Ylfz
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dKyffC
>>>>>>> .merge_file_ENiBRU
### Metodi Principali
#### 1. `init()` - Layout di Default
public static function init(): self
    return self::LIST;
- **Scopo**: Fornisce layout predefinito
- **Valore**: `LIST` (layout tradizionale)
#### 2. `getLabel()` - Traduzioni
public function getLabel(): string
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
    return match ($this) {
        self::LIST => __('ui::table-layout.list.label'),
        self::GRID => __('ui::table-layout.grid.label'),
    };
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< .merge_file_w3Ylfz
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
- **Scopo**: Label tradotte per UI
- **Dipendenze**: File traduzioni `ui::table-layout.*`
#### 3. `getColor()` - Colori UI
public function getColor(): string
        self::LIST => 'primary',
        self::GRID => 'secondary',
- **Scopo**: Colori per componenti UI
- **Valori**: `primary` per lista, `secondary` per griglia
#### 4. `getIcon()` - Icone Heroicon
public function getIcon(): string
        self::LIST => 'heroicon-o-list-bullet',
        self::GRID => 'heroicon-o-squares-2x2',
- **Scopo**: Icone per toggle buttons
- **Icone**: Lista e griglia con Heroicon
#### 5. `toggle()` - Alternanza Layout
public function toggle(): self
        self::LIST => self::GRID,
        self::GRID => self::LIST,
- **Scopo**: Alternare tra layout
- **Pattern**: Bidirezionale LIST ↔ GRID
#### 6. `getTableContentGrid()` - Configurazione Responsive
public function getTableContentGrid(): ?array
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
}
```
- **Scopo**: Label tradotte per UI
- **Dipendenze**: File traduzioni `ui::table-layout.*`

#### 3. `getColor()` - Colori UI
```php
public function getColor(): string
{
    return match ($this) {
        self::LIST => 'primary',
        self::GRID => 'secondary',
    };
}
```
- **Scopo**: Colori per componenti UI
- **Valori**: `primary` per lista, `secondary` per griglia

#### 4. `getIcon()` - Icone Heroicon
```php
public function getIcon(): string
{
    return match ($this) {
        self::LIST => 'heroicon-o-list-bullet',
        self::GRID => 'heroicon-o-squares-2x2',
    };
}
```
- **Scopo**: Icone per toggle buttons
- **Icone**: Lista e griglia con Heroicon

#### 5. `toggle()` - Alternanza Layout
```php
public function toggle(): self
{
    return match ($this) {
        self::LIST => self::GRID,
        self::GRID => self::LIST,
    };
}
```
- **Scopo**: Alternare tra layout
- **Pattern**: Bidirezionale LIST ↔ GRID

#### 6. `getTableContentGrid()` - Configurazione Responsive
```php
public function getTableContentGrid(): ?array
{
<<<<<<< .merge_file_ALNasz
=======
=======
<<<<<<< .merge_file_w3Ylfz
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dKyffC
>>>>>>> .merge_file_ENiBRU
- **Scopo**: Label tradotte per UI
- **Dipendenze**: File traduzioni `ui::table-layout.*`
#### 3. `getColor()` - Colori UI
public function getColor(): string
        self::LIST => 'primary',
        self::GRID => 'secondary',
- **Scopo**: Colori per componenti UI
- **Valori**: `primary` per lista, `secondary` per griglia
#### 4. `getIcon()` - Icone Heroicon
public function getIcon(): string
        self::LIST => 'heroicon-o-list-bullet',
        self::GRID => 'heroicon-o-squares-2x2',
- **Scopo**: Icone per toggle buttons
- **Icone**: Lista e griglia con Heroicon
#### 5. `toggle()` - Alternanza Layout
public function toggle(): self
        self::LIST => self::GRID,
        self::GRID => self::LIST,
- **Scopo**: Alternare tra layout
- **Pattern**: Bidirezionale LIST ↔ GRID
#### 6. `getTableContentGrid()` - Configurazione Responsive
public function getTableContentGrid(): ?array
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
    return $this->isGridLayout()
        ? [
            'sm' => 1,
            'md' => 2,
            'lg' => 3,
            'xl' => 4,
            '2xl' => 5,
        ]
        : null;
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< .merge_file_w3Ylfz
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
- **Scopo**: Grid responsive per layout griglia
- **Breakpoints**: sm, md, lg, xl, 2xl
- **Colonne**: 1-5 colonne in base alla dimensione
#### 7. `getTableColumns()` - Colonne Dinamiche
public function getTableColumns(array $listColumns, array $gridColumns): array
    return $this->isGridLayout() ? $gridColumns : $listColumns;
- **Scopo**: Selezionare colonne appropriate per layout
- **Parametri**: Array espliciti per type safety
- **Approccio**: Esplicito invece di debug_backtrace
## Architettura e Design Patterns
### 1. Enum Pattern
- **Vantaggi**: Type safety, immutabilità, centralizzazione
- **Uso**: Gestione stati layout con valori predefiniti
### 2. Strategy Pattern
- **Implementazione**: Metodi che cambiano comportamento in base al layout
- **Esempio**: `getTableColumns()` con strategie diverse per lista/griglia
### 3. Factory Pattern
- **Implementazione**: `getOptions()` crea array di opzioni
- **Uso**: Popolamento dropdown e select
### 4. Interface Segregation
- **Interfacce**: `HasColor`, `HasIcon`, `HasLabel`
- **Vantaggio**: Implementazione selettiva delle funzionalità
## Dipendenze e Integrazione
### Traduzioni Richieste
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
}
```
>>>>>>> .merge_file_ENiBRU
- **Scopo**: Grid responsive per layout griglia
- **Breakpoints**: sm, md, lg, xl, 2xl
- **Colonne**: 1-5 colonne in base alla dimensione
#### 7. `getTableColumns()` - Colonne Dinamiche
public function getTableColumns(array $listColumns, array $gridColumns): array
    return $this->isGridLayout() ? $gridColumns : $listColumns;
- **Scopo**: Selezionare colonne appropriate per layout
- **Parametri**: Array espliciti per type safety
- **Approccio**: Esplicito invece di debug_backtrace
## Architettura e Design Patterns
### 1. Enum Pattern
- **Vantaggi**: Type safety, immutabilità, centralizzazione
- **Uso**: Gestione stati layout con valori predefiniti
### 2. Strategy Pattern
- **Implementazione**: Metodi che cambiano comportamento in base al layout
- **Esempio**: `getTableColumns()` con strategie diverse per lista/griglia
### 3. Factory Pattern
- **Implementazione**: `getOptions()` crea array di opzioni
- **Uso**: Popolamento dropdown e select
### 4. Interface Segregation
- **Interfacce**: `HasColor`, `HasIcon`, `HasLabel`
- **Vantaggio**: Implementazione selettiva delle funzionalità
## Dipendenze e Integrazione
### Traduzioni Richieste
<<<<<<< .merge_file_W0U8VI
=======
```php
<<<<<<< .merge_file_ALNasz
=======
=======
<<<<<<< .merge_file_w3Ylfz
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dKyffC
- **Scopo**: Grid responsive per layout griglia
- **Breakpoints**: sm, md, lg, xl, 2xl
- **Colonne**: 1-5 colonne in base alla dimensione
#### 7. `getTableColumns()` - Colonne Dinamiche
public function getTableColumns(array $listColumns, array $gridColumns): array
    return $this->isGridLayout() ? $gridColumns : $listColumns;
- **Scopo**: Selezionare colonne appropriate per layout
- **Parametri**: Array espliciti per type safety
- **Approccio**: Esplicito invece di debug_backtrace
## Architettura e Design Patterns
### 1. Enum Pattern
- **Vantaggi**: Type safety, immutabilità, centralizzazione
- **Uso**: Gestione stati layout con valori predefiniti
### 2. Strategy Pattern
- **Implementazione**: Metodi che cambiano comportamento in base al layout
- **Esempio**: `getTableColumns()` con strategie diverse per lista/griglia
### 3. Factory Pattern
- **Implementazione**: `getOptions()` crea array di opzioni
- **Uso**: Popolamento dropdown e select
### 4. Interface Segregation
- **Interfacce**: `HasColor`, `HasIcon`, `HasLabel`
- **Vantaggio**: Implementazione selettiva delle funzionalità
## Dipendenze e Integrazione
### Traduzioni Richieste
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
// File: Modules/UI/lang/it/table-layout.php
return [
    'list' => [
        'label' => 'Lista',
        'description' => 'Visualizzazione a lista tradizionale',
        'tooltip' => 'Mostra elementi in formato lista',
    ],
    'grid' => [
        'label' => 'Griglia',
        'description' => 'Visualizzazione a griglia con card',
        'tooltip' => 'Mostra elementi in formato griglia',
<<<<<<< .merge_file_W0U8VI
];
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz
    ],
];
```

=======
];
=======
<<<<<<< .merge_file_w3Ylfz
=======
<<<<<<< HEAD
];
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
    ],
];
```

<<<<<<< HEAD
=======
=======
];
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
];
=======
    ],
];
```

>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
### Integrazione Filament
- **Table Components**: Integrazione con `Filament\Tables`
- **Content Grid**: Supporto per `contentGrid()` method
- **Responsive Design**: Breakpoints Tailwind CSS
<<<<<<< .merge_file_W0U8VI
## Best Practices Implementate
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz

## Best Practices Implementate

=======
## Best Practices Implementate
=======
<<<<<<< .merge_file_w3Ylfz

## Best Practices Implementate

=======
<<<<<<< HEAD
## Best Practices Implementate
=======
<<<<<<< HEAD

## Best Practices Implementate

=======
## Best Practices Implementate
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
## Best Practices Implementate
=======

## Best Practices Implementate

>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
### 1. Type Safety
- `declare(strict_types=1);`
- Type hints espliciti
- Return types specifici
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz

=======
=======
<<<<<<< .merge_file_w3Ylfz

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
### 2. PHPDoc Completo
- Documentazione per ogni metodo
- Esempi di utilizzo
- Collegamenti a documentazione correlata
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz

=======
=======
<<<<<<< .merge_file_w3Ylfz

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
### 3. Naming Conventions
- Metodi descrittivi (`isGridLayout()`, `isListLayout()`)
- Costanti chiare (`LIST`, `GRID`)
- Nomi file in minuscolo
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz

=======
=======
<<<<<<< .merge_file_w3Ylfz

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
### 4. Error Handling
- Match expressions per gestione sicura
- Valori di default appropriati
- Null safety per grid configuration
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< .merge_file_w3Ylfz
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Esempi di Utilizzo
### 1. ListRecords Implementation
    protected TableLayoutEnum $layout;
    public function mount(): void
        $this->layout = TableLayoutEnum::init();
    protected function getHeaderActions(): array
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC

## Esempi di Utilizzo

### 1. ListRecords Implementation
```php
class ListUsers extends ListRecords
{
    protected TableLayoutEnum $layout;

    public function mount(): void
    {
        $this->layout = TableLayoutEnum::init();
    }

    protected function getHeaderActions(): array
    {
<<<<<<< .merge_file_ALNasz
=======
=======
<<<<<<< .merge_file_w3Ylfz
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dKyffC
>>>>>>> .merge_file_ENiBRU
## Esempi di Utilizzo
### 1. ListRecords Implementation
    protected TableLayoutEnum $layout;
    public function mount(): void
        $this->layout = TableLayoutEnum::init();
    protected function getHeaderActions(): array
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
        return [
            Action::make('toggleLayout')
                ->icon($this->layout->getIcon())
                ->color($this->layout->getColor())
                ->label($this->layout->getLabel())
                ->action(function () {
                    $this->layout = $this->layout->toggle();
                }),
        ];
<<<<<<< .merge_file_W0U8VI
### 2. Table Configuration
public function table(Table $table): Table
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< .merge_file_w3Ylfz
=======
<<<<<<< HEAD
### 2. Table Configuration
public function table(Table $table): Table
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### 2. Table Configuration
public function table(Table $table): Table
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
    }
}
```

### 2. Table Configuration
```php
public function table(Table $table): Table
{
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< .merge_file_w3Ylfz
<<<<<<< HEAD
=======
>>>>>>> .merge_file_dKyffC
=======
### 2. Table Configuration
public function table(Table $table): Table
>>>>>>> laraxot/dev
<<<<<<< .merge_file_ALNasz
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dKyffC
>>>>>>> .merge_file_ENiBRU
    return $table
        ->columns($this->getColumnsForLayout())
        ->contentGrid($this->layout->getTableContentGrid())
        ->paginated([10, 25, 50])
        ->defaultSort('created_at', 'desc');
<<<<<<< .merge_file_W0U8VI
### 3. Column Selection
protected function getColumnsForLayout(): array
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< .merge_file_w3Ylfz
=======
<<<<<<< HEAD
### 3. Column Selection
protected function getColumnsForLayout(): array
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### 3. Column Selection
protected function getColumnsForLayout(): array
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
}
```

### 3. Column Selection
```php
protected function getColumnsForLayout(): array
{
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< .merge_file_w3Ylfz
<<<<<<< HEAD
=======
>>>>>>> .merge_file_dKyffC
=======
### 3. Column Selection
protected function getColumnsForLayout(): array
>>>>>>> laraxot/dev
<<<<<<< .merge_file_ALNasz
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dKyffC
>>>>>>> .merge_file_ENiBRU
    $listColumns = [
        Tables\Columns\TextColumn::make('name')->sortable(),
        Tables\Columns\TextColumn::make('email')->searchable(),
        Tables\Columns\TextColumn::make('created_at')->dateTime(),
    ];
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz

=======
=======
<<<<<<< .merge_file_w3Ylfz

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
    $gridColumns = [
        Tables\Columns\Layout\Stack::make([
            Tables\Columns\TextColumn::make('name')->weight(FontWeight::Bold),
            Tables\Columns\TextColumn::make('email'),
        ]),
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< .merge_file_w3Ylfz
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ENiBRU
    return $this->layout->getTableColumns($listColumns, $gridColumns);
## Considerazioni di Performance
### 1. Memory Usage
- **Enum**: Valori immutabili, memoria efficiente
- **Match**: Più veloce di switch per enum
### 2. CPU Usage
- **Match Expressions**: Ottimizzate dal compilatore PHP
- **Method Calls**: Minimi overhead
### 3. Network Impact
- **Responsive Grid**: CSS nativo, nessun JS aggiuntivo
- **Icon Loading**: Heroicon già caricato
## Sicurezza e Validazione
### 1. Input Validation
- **Enum Values**: Solo valori predefiniti validi
- **Type Safety**: Previene errori runtime
### 2. XSS Prevention
- **Label Translation**: Escape automatico da Laravel
- **Icon Names**: Stringhe sicure, non user input
### 3. CSRF Protection
- **Toggle Actions**: Protezione CSRF di Filament
- **Form Submissions**: Token automatici
## Testing Strategy
### 1. Unit Tests
class TableLayoutEnumTest extends TestCase
    public function test_init_returns_list(): void
        $this->assertEquals(TableLayoutEnum::LIST, TableLayoutEnum::init());
    public function test_toggle_switches_layout(): void
        $layout = TableLayoutEnum::LIST;
        $this->assertEquals(TableLayoutEnum::GRID, $layout->toggle());
        $this->assertEquals(TableLayoutEnum::LIST, $layout->toggle()->toggle());
<<<<<<< .merge_file_W0U8VI
=======
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
    ];

    return $this->layout->getTableColumns($listColumns, $gridColumns);
}
```

## Considerazioni di Performance

### 1. Memory Usage
- **Enum**: Valori immutabili, memoria efficiente
- **Match**: Più veloce di switch per enum

### 2. CPU Usage
- **Match Expressions**: Ottimizzate dal compilatore PHP
- **Method Calls**: Minimi overhead

### 3. Network Impact
- **Responsive Grid**: CSS nativo, nessun JS aggiuntivo
- **Icon Loading**: Heroicon già caricato

## Sicurezza e Validazione

### 1. Input Validation
- **Enum Values**: Solo valori predefiniti validi
- **Type Safety**: Previene errori runtime

### 2. XSS Prevention
- **Label Translation**: Escape automatico da Laravel
- **Icon Names**: Stringhe sicure, non user input

### 3. CSRF Protection
- **Toggle Actions**: Protezione CSRF di Filament
- **Form Submissions**: Token automatici

## Testing Strategy

### 1. Unit Tests
```php
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
}
```

<<<<<<< .merge_file_ALNasz
=======
=======
<<<<<<< .merge_file_w3Ylfz
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dKyffC
    return $this->layout->getTableColumns($listColumns, $gridColumns);
## Considerazioni di Performance
### 1. Memory Usage
- **Enum**: Valori immutabili, memoria efficiente
- **Match**: Più veloce di switch per enum
### 2. CPU Usage
- **Match Expressions**: Ottimizzate dal compilatore PHP
- **Method Calls**: Minimi overhead
### 3. Network Impact
- **Responsive Grid**: CSS nativo, nessun JS aggiuntivo
- **Icon Loading**: Heroicon già caricato
## Sicurezza e Validazione
### 1. Input Validation
- **Enum Values**: Solo valori predefiniti validi
- **Type Safety**: Previene errori runtime
### 2. XSS Prevention
- **Label Translation**: Escape automatico da Laravel
- **Icon Names**: Stringhe sicure, non user input
### 3. CSRF Protection
- **Toggle Actions**: Protezione CSRF di Filament
- **Form Submissions**: Token automatici
## Testing Strategy
### 1. Unit Tests
class TableLayoutEnumTest extends TestCase
    public function test_init_returns_list(): void
        $this->assertEquals(TableLayoutEnum::LIST, TableLayoutEnum::init());
    public function test_toggle_switches_layout(): void
        $layout = TableLayoutEnum::LIST;
        $this->assertEquals(TableLayoutEnum::GRID, $layout->toggle());
        $this->assertEquals(TableLayoutEnum::LIST, $layout->toggle()->toggle());
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
### 2. Integration Tests
- Test con componenti Filament reali
- Verifica responsive behavior
- Test traduzioni
<<<<<<< .merge_file_W0U8VI
## Roadmap e Miglioramenti
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< .merge_file_w3Ylfz

## Roadmap e Miglioramenti
=======
## Roadmap e Miglioramenti
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC

=======
<<<<<<< HEAD
## Roadmap e Miglioramenti
=======
<<<<<<< HEAD

<<<<<<< .merge_file_ALNasz
=======
## Roadmap e Miglioramenti
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_w3Ylfz
## Roadmap e Miglioramenti

=======
## Roadmap e Miglioramenti
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dKyffC
>>>>>>> .merge_file_ENiBRU
### 1. Short Term
- [ ] Implementare traduzioni mancanti
- [ ] Aggiungere test unitari completi
- [ ] Documentare esempi avanzati
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz

=======
=======
<<<<<<< .merge_file_w3Ylfz

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
### 2. Medium Term
- [ ] Supporto per layout personalizzati
- [ ] Animazioni di transizione
- [ ] Persistenza preferenze utente
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz

=======
=======
<<<<<<< .merge_file_w3Ylfz

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
### 3. Long Term
- [ ] Layout masonry
- [ ] Layout timeline
- [ ] Layout calendar
<<<<<<< .merge_file_W0U8VI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< .merge_file_w3Ylfz
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ENiBRU
## Collegamenti
- [Usage Guide](table-layout-enum-usage.md)
- [Conflict Resolution](conflict-resolution-tablelayoutenum.md)
- [Translation Standards](../../../docs/translation_standards.md)
- [Filament Best Practices](../../../docs/filament_best_practices.md)
<<<<<<< .merge_file_W0U8VI
=======
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC

## Collegamenti

- [Usage Guide](table-layout-enum-usage.md)
- [Conflict Resolution](conflict-resolution-tablelayoutenum.md)
- [Translation Standards](../../../../docs/translation_standards.md)
- [Filament Best Practices](../../../../docs/filament_best_practices.md)

<<<<<<< .merge_file_ALNasz
=======
=======
<<<<<<< .merge_file_w3Ylfz
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_dKyffC
## Collegamenti
- [Usage Guide](table-layout-enum-usage.md)
- [Conflict Resolution](conflict-resolution-tablelayoutenum.md)
- [Translation Standards](../../../docs/translation_standards.md)
- [Filament Best Practices](../../../docs/filament_best_practices.md)
<<<<<<< HEAD
=======

*Ultimo aggiornamento: 2025-01-06*
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_ALNasz
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cHSnL6
>>>>>>> .merge_file_dKyffC
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ENiBRU
