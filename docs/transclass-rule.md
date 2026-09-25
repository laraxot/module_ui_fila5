# REGOLA CRITICA: Usa SEMPRE transClass() negli Enum

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
## Data: [DATE]
=======
## Data: 2025-01-06
=======
<<<<<<< .merge_file_oYWf8k
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
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
>>>>>>> laraxot/dev
=======
## Data: [DATE]
>>>>>>> laraxot/dev

## ✅ CORRETTO - Implementazione Enum con TransTrait

```php
<?php

declare(strict_types=1);

namespace Modules\UI\Enums;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;

enum TableLayoutEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_oYWf8k

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_sAAPzI
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
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
    case LIST = 'list';
    case GRID = 'grid';

    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value . '.label');
    }

    public function getColor(): string
    {
        return $this->transClass(self::class, $this->value . '.color');
    }

    public function getIcon(): string
    {
        return $this->transClass(self::class, $this->value . '.icon');
    }

    public function getDescription(): string
    {
        return $this->transClass(self::class, $this->value . '.description');
    }

    public function getTooltip(): string
    {
        return $this->transClass(self::class, $this->value . '.tooltip');
    }

    public function getHelperText(): string
    {
        return $this->transClass(self::class, $this->value . '.helper_text');
    }
}
```

## ❌ ERRORE - Non fare mai questo

```php
// ❌ ERRORE - Non usare mai match() per traduzioni
public function getLabel(): string
{
    return match ($this) {
        self::LIST => __('ui::table-layout.list.label'),
        self::GRID => __('ui::table-layout.grid.label'),
    };
}

// ❌ ERRORE - Non hardcodare valori
public function getColor(): string
{
    return match ($this) {
        self::LIST => 'primary',
        self::GRID => 'secondary',
    };
}
```

## Perché questa Regola è Critica

### 1. Centralizzazione Traduzioni
- Tutte le traduzioni sono nei file `lang/`
- Facile manutenzione e aggiornamento
- Sincronizzazione automatica tra lingue

### 2. Type Safety
- Il `transClass()` gestisce automaticamente le traduzioni
- Controllo automatico delle traduzioni mancanti
- Struttura coerente per tutti gli enum

### 3. Performance
- Cache delle traduzioni ottimizzata
- Nessun overhead di match() per ogni chiamata
- Codice più pulito e manutenibile

### 4. Estensibilità
- Facile aggiungere nuove proprietà
- Struttura scalabile per enum complessi
- Pattern riutilizzabile

## Struttura Traduzioni Obbligatoria

### File: `Modules/UI/lang/it/table-layout.php`
```php
<?php

declare(strict_types=1);

return [
    'list' => [
        'label' => 'Lista',
        'description' => 'Visualizzazione a lista tradizionale',
        'tooltip' => 'Mostra elementi in formato lista',
        'helper_text' => 'Layout tradizionale con righe e colonne',
        'color' => 'primary',
        'icon' => 'heroicon-o-list-bullet',
    ],
    'grid' => [
        'label' => 'Griglia',
        'description' => 'Visualizzazione a griglia con card',
        'tooltip' => 'Mostra elementi in formato griglia',
        'helper_text' => 'Layout a griglia con card responsive',
        'color' => 'secondary',
        'icon' => 'heroicon-o-squares-2x2',
    ],
];
```

## Pattern Standard per Enum

### 1. Import TransTrait
```php
use Modules\Xot\Filament\Traits\TransTrait;

enum MyEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_oYWf8k

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_sAAPzI
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
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
    case VALUE1 = 'value1';
    case VALUE2 = 'value2';
}
```

### 2. Metodi Standard
```php
public function getLabel(): string
{
    return $this->transClass(self::class, $this->value . '.label');
}

public function getColor(): string
{
    return $this->transClass(self::class, $this->value . '.color');
}

public function getIcon(): string
{
    return $this->transClass(self::class, $this->value . '.icon');
}

public function getDescription(): string
{
    return $this->transClass(self::class, $this->value . '.description');
}

public function getTooltip(): string
{
    return $this->transClass(self::class, $this->value . '.tooltip');
}

public function getHelperText(): string
{
    return $this->transClass(self::class, $this->value . '.helper_text');
}
```

### 3. Struttura Traduzioni
```php
// File: Modules/ModuleName/lang/it/enum_name.php
return [
    'value1' => [
        'label' => 'Etichetta 1',
        'description' => 'Descrizione 1',
        'tooltip' => 'Tooltip 1',
        'helper_text' => 'Helper text 1',
        'color' => 'primary',
        'icon' => 'heroicon-o-icon1',
    ],
    'value2' => [
        'label' => 'Etichetta 2',
        'description' => 'Descrizione 2',
        'tooltip' => 'Tooltip 2',
        'helper_text' => 'Helper text 2',
        'color' => 'secondary',
        'icon' => 'heroicon-o-icon2',
    ],
];
```

## Checklist Pre-Implementazione

Prima di creare un nuovo Enum:

- [ ] Importare `TransTrait`
- [ ] Implementare tutti i metodi standard con `transClass()`
- [ ] Creare file traduzioni in `lang/it/`, `lang/en/`, `lang/de/`
- [ ] Struttura espansa completa per ogni valore
- [ ] Sincronizzazione IT/EN/DE
- [ ] Testare traduzioni in ambiente di sviluppo

## Esempi di Errori Comuni

### ❌ ERRORE - Match per traduzioni
```php
public function getLabel(): string
{
    return match ($this) {
        self::LIST => __('ui::table-layout.list.label'),
        self::GRID => __('ui::table-layout.grid.label'),
    };
}
```

### ✅ CORRETTO - transClass()
```php
public function getLabel(): string
{
    return $this->transClass(self::class, $this->value . '.label');
}
```

### ❌ ERRORE - Valori hardcoded
```php
public function getColor(): string
{
    return match ($this) {
        self::LIST => 'primary',
        self::GRID => 'secondary',
    };
}
```

### ✅ CORRETTO - transClass()
```php
public function getColor(): string
{
    return $this->transClass(self::class, $this->value . '.color');
}
```

## Verifica Automatica

### PHPStan Rule (Ideale)
```php
// Regola PHPStan per rilevare match() in enum
// Implementare in phpstan.neon
rules:
    - rule: Never use match() for translations in enums
```

### Code Review Checklist
- [ ] TransTrait importato
- [ ] Tutti i metodi usano `transClass()`
- [ ] Nessun `match()` per traduzioni
- [ ] Traduzioni implementate in tutte le lingue
- [ ] Struttura espansa completa

## Penalità per Violazioni

### Livello 1 - Warning
- Commento nel code review
- Richiesta di correzione

### Livello 2 - Blocco
- Blocco del merge
- Correzione obbligatoria

### Livello 3 - Sanzione
- Documentazione della violazione
- Training obbligatorio

## Collegamenti

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< .merge_file_oYWf8k
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
- [Translation Standards](../../../docs/translation_standards.md)
- [Filament Best Practices](../../../docs/filament_best_practices.md)
- [TransTrait Documentation](../../Xot/docs/trans_trait_usage.md)
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
- [Translation Standards](../../../../docs/translation_standards.md)
- [Filament Best Practices](../../../../docs/filament_best_practices.md)
- [TransTrait Documentation](../../xot/docs/trans_trait_usage.md)
>>>>>>> laraxot/dev
=======
- [Translation Standards](../../../../docs/translation_standards.md)
- [Filament Best Practices](../../../../docs/filament_best_practices.md)
- [TransTrait Documentation](../../xot/docs/trans_trait_usage.md)
>>>>>>> laraxot/dev

## Memoria Permanente

**RICORDA SEMPRE**:
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_sAAPzI
- [Translation Standards](../../../docs/translation_standards.md)
- [Filament Best Practices](../../../docs/filament_best_practices.md)
- [TransTrait Documentation](../../Xot/docs/trans_trait_usage.md)

## Memoria Permanente

<<<<<<< HEAD
**RICORDA SEMPRE**: 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
**RICORDA SEMPRE**:
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
**RICORDA SEMPRE**: 
=======
**RICORDA SEMPRE**:
>>>>>>> laraxot/dev
=======
**RICORDA SEMPRE**: 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_sAAPzI
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
- SEMPRE `TransTrait` negli enum
- SEMPRE `transClass()` per traduzioni
- MAI `match()` per traduzioni
- SEMPRE struttura espansa nelle traduzioni
- SEMPRE sincronizzazione IT/EN/DE

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< .merge_file_oYWf8k
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
*Ultimo aggiornamento: 2025-01-06*
# REGOLA CRITICA: Usa SEMPRE transClass() negli Enum
## Data: 2025-01-06
## ✅ CORRETTO - Implementazione Enum con TransTrait
```php
<?php
declare(strict_types=1);
namespace Modules\UI\Enums;
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
=======
>>>>>>> laraxot/dev
# REGOLA CRITICA: Usa SEMPRE transClass() negli Enum

## Data: [DATE]

## ✅ CORRETTO - Implementazione Enum con TransTrait

```php
<?php

declare(strict_types=1);

namespace Modules\UI\Enums;

<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_oYWf8k
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_sAAPzI
*Ultimo aggiornamento: 2025-01-06* 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
*Ultimo aggiornamento: 2025-01-06* 
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
*Ultimo aggiornamento: 2025-01-06* 
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
*Ultimo aggiornamento: 2025-01-06*
# REGOLA CRITICA: Usa SEMPRE transClass() negli Enum
## Data: 2025-01-06
## ✅ CORRETTO - Implementazione Enum con TransTrait
```php
<?php
declare(strict_types=1);
namespace Modules\UI\Enums;
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< .merge_file_oYWf8k
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
enum TableLayoutEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;
    case LIST = 'list';
    case GRID = 'grid';
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
=======
>>>>>>> laraxot/dev

enum TableLayoutEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;

    case LIST = 'list';
    case GRID = 'grid';

<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
=======
<<<<<<< .merge_file_oYWf8k
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_sAAPzI
enum TableLayoutEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;
    case LIST = 'list';
    case GRID = 'grid';
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value . '.label');
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< .merge_file_oYWf8k
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
    public function getColor(): string
        return $this->transClass(self::class, $this->value . '.color');
    public function getIcon(): string
        return $this->transClass(self::class, $this->value . '.icon');
    public function getDescription(): string
        return $this->transClass(self::class, $this->value . '.description');
    public function getTooltip(): string
        return $this->transClass(self::class, $this->value . '.tooltip');
    public function getHelperText(): string
        return $this->transClass(self::class, $this->value . '.helper_text');
}
```
## ❌ ERRORE - Non fare mai questo
// ❌ ERRORE - Non usare mai match() per traduzioni
public function getLabel(): string
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
=======
>>>>>>> laraxot/dev

    public function getColor(): string
    {
        return $this->transClass(self::class, $this->value . '.color');
    }

    public function getIcon(): string
    {
        return $this->transClass(self::class, $this->value . '.icon');
    }

    public function getDescription(): string
    {
        return $this->transClass(self::class, $this->value . '.description');
    }

    public function getTooltip(): string
    {
        return $this->transClass(self::class, $this->value . '.tooltip');
    }

    public function getHelperText(): string
    {
        return $this->transClass(self::class, $this->value . '.helper_text');
    }
}
```

## ❌ ERRORE - Non fare mai questo

```php
// ❌ ERRORE - Non usare mai match() per traduzioni
public function getLabel(): string
{
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
=======
<<<<<<< .merge_file_oYWf8k
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_sAAPzI
    public function getColor(): string
        return $this->transClass(self::class, $this->value . '.color');
    public function getIcon(): string
        return $this->transClass(self::class, $this->value . '.icon');
    public function getDescription(): string
        return $this->transClass(self::class, $this->value . '.description');
    public function getTooltip(): string
        return $this->transClass(self::class, $this->value . '.tooltip');
    public function getHelperText(): string
        return $this->transClass(self::class, $this->value . '.helper_text');
}
```
## ❌ ERRORE - Non fare mai questo
// ❌ ERRORE - Non usare mai match() per traduzioni
public function getLabel(): string
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
    return match ($this) {
        self::LIST => __('ui::table-layout.list.label'),
        self::GRID => __('ui::table-layout.grid.label'),
    };
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< .merge_file_oYWf8k
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
// ❌ ERRORE - Non hardcodare valori
public function getColor(): string
        self::LIST => 'primary',
        self::GRID => 'secondary',
## Perché questa Regola è Critica
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
=======
>>>>>>> laraxot/dev
}

// ❌ ERRORE - Non hardcodare valori
public function getColor(): string
{
    return match ($this) {
        self::LIST => 'primary',
        self::GRID => 'secondary',
    };
}
```

## Perché questa Regola è Critica

<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
=======
<<<<<<< .merge_file_oYWf8k
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_sAAPzI
// ❌ ERRORE - Non hardcodare valori
public function getColor(): string
        self::LIST => 'primary',
        self::GRID => 'secondary',
## Perché questa Regola è Critica
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
### 1. Centralizzazione Traduzioni
- Tutte le traduzioni sono nei file `lang/`
- Facile manutenzione e aggiornamento
- Sincronizzazione automatica tra lingue
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy

=======
=======
<<<<<<< .merge_file_oYWf8k

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
### 2. Type Safety
- Il `transClass()` gestisce automaticamente le traduzioni
- Controllo automatico delle traduzioni mancanti
- Struttura coerente per tutti gli enum
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy

=======
=======
<<<<<<< .merge_file_oYWf8k

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
### 3. Performance
- Cache delle traduzioni ottimizzata
- Nessun overhead di match() per ogni chiamata
- Codice più pulito e manutenibile
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy

=======
=======
<<<<<<< .merge_file_oYWf8k

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
### 4. Estensibilità
- Facile aggiungere nuove proprietà
- Struttura scalabile per enum complessi
- Pattern riutilizzabile
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< .merge_file_oYWf8k
=======
<<<<<<< HEAD
## Struttura Traduzioni Obbligatoria
### File: `Modules/UI/lang/it/table-layout.php`
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Struttura Traduzioni Obbligatoria
### File: `Modules/UI/lang/it/table-layout.php`
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
=======
>>>>>>> laraxot/dev

## Struttura Traduzioni Obbligatoria

### File: `Modules/UI/lang/it/table-layout.php`
```php
<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< .merge_file_oYWf8k
<<<<<<< HEAD
=======
>>>>>>> .merge_file_sAAPzI
=======
## Struttura Traduzioni Obbligatoria
### File: `Modules/UI/lang/it/table-layout.php`
>>>>>>> laraxot/dev
<<<<<<< .merge_file_yYE3vy
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> laraxot/dev
>>>>>>> .merge_file_sAAPzI
=======
>>>>>>> laraxot/dev
return [
    'list' => [
        'label' => 'Lista',
        'description' => 'Visualizzazione a lista tradizionale',
        'tooltip' => 'Mostra elementi in formato lista',
        'helper_text' => 'Layout tradizionale con righe e colonne',
        'color' => 'primary',
        'icon' => 'heroicon-o-list-bullet',
    ],
    'grid' => [
        'label' => 'Griglia',
        'description' => 'Visualizzazione a griglia con card',
        'tooltip' => 'Mostra elementi in formato griglia',
        'helper_text' => 'Layout a griglia con card responsive',
        'color' => 'secondary',
        'icon' => 'heroicon-o-squares-2x2',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< .merge_file_oYWf8k
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
];
## Pattern Standard per Enum
### 1. Import TransTrait
enum MyEnum: string implements HasColor, HasIcon, HasLabel
    case VALUE1 = 'value1';
    case VALUE2 = 'value2';
### 2. Metodi Standard
    return $this->transClass(self::class, $this->value . '.label');
    return $this->transClass(self::class, $this->value . '.color');
public function getIcon(): string
    return $this->transClass(self::class, $this->value . '.icon');
public function getDescription(): string
    return $this->transClass(self::class, $this->value . '.description');
public function getTooltip(): string
    return $this->transClass(self::class, $this->value . '.tooltip');
public function getHelperText(): string
    return $this->transClass(self::class, $this->value . '.helper_text');
### 3. Struttura Traduzioni
// File: Modules/ModuleName/lang/it/enum_name.php
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
=======
>>>>>>> laraxot/dev
    ],
];
```

## Pattern Standard per Enum

### 1. Import TransTrait
```php
use Modules\Xot\Filament\Traits\TransTrait;

enum MyEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;

    case VALUE1 = 'value1';
    case VALUE2 = 'value2';
}
```

### 2. Metodi Standard
```php
public function getLabel(): string
{
    return $this->transClass(self::class, $this->value . '.label');
}

public function getColor(): string
{
    return $this->transClass(self::class, $this->value . '.color');
}

public function getIcon(): string
{
    return $this->transClass(self::class, $this->value . '.icon');
}

public function getDescription(): string
{
    return $this->transClass(self::class, $this->value . '.description');
}

public function getTooltip(): string
{
    return $this->transClass(self::class, $this->value . '.tooltip');
}

public function getHelperText(): string
{
    return $this->transClass(self::class, $this->value . '.helper_text');
}
```

### 3. Struttura Traduzioni
```php
// File: Modules/ModuleName/lang/it/enum_name.php
return [
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
=======
<<<<<<< .merge_file_oYWf8k
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_sAAPzI
];
## Pattern Standard per Enum
### 1. Import TransTrait
enum MyEnum: string implements HasColor, HasIcon, HasLabel
    case VALUE1 = 'value1';
    case VALUE2 = 'value2';
### 2. Metodi Standard
    return $this->transClass(self::class, $this->value . '.label');
    return $this->transClass(self::class, $this->value . '.color');
public function getIcon(): string
    return $this->transClass(self::class, $this->value . '.icon');
public function getDescription(): string
    return $this->transClass(self::class, $this->value . '.description');
public function getTooltip(): string
    return $this->transClass(self::class, $this->value . '.tooltip');
public function getHelperText(): string
    return $this->transClass(self::class, $this->value . '.helper_text');
### 3. Struttura Traduzioni
// File: Modules/ModuleName/lang/it/enum_name.php
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
    'value1' => [
        'label' => 'Etichetta 1',
        'description' => 'Descrizione 1',
        'tooltip' => 'Tooltip 1',
        'helper_text' => 'Helper text 1',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< .merge_file_oYWf8k
        'color' => 'primary',
        'icon' => 'heroicon-o-icon1',
    ],
=======
<<<<<<< HEAD
        'icon' => 'heroicon-o-icon1',
=======
<<<<<<< HEAD
>>>>>>> .merge_file_sAAPzI
        'color' => 'primary',
        'icon' => 'heroicon-o-icon1',
    ],
=======
        'icon' => 'heroicon-o-icon1',
>>>>>>> laraxot/dev
<<<<<<< .merge_file_yYE3vy
=======
>>>>>>> laraxot/dev
=======
        'icon' => 'heroicon-o-icon1',
=======
        'color' => 'primary',
        'icon' => 'heroicon-o-icon1',
    ],
>>>>>>> .merge_file_QDRs0d
>>>>>>> laraxot/dev
>>>>>>> .merge_file_sAAPzI
=======
        'color' => 'primary',
        'icon' => 'heroicon-o-icon1',
    ],
>>>>>>> laraxot/dev
    'value2' => [
        'label' => 'Etichetta 2',
        'description' => 'Descrizione 2',
        'tooltip' => 'Tooltip 2',
        'helper_text' => 'Helper text 2',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< .merge_file_oYWf8k
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_QDRs0d
        'icon' => 'heroicon-o-icon2',
## Checklist Pre-Implementazione
Prima di creare un nuovo Enum:
=======
<<<<<<< .merge_file_oYWf8k
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
=======
>>>>>>> laraxot/dev
        'color' => 'secondary',
        'icon' => 'heroicon-o-icon2',
    ],
];
```

## Checklist Pre-Implementazione

Prima di creare un nuovo Enum:

<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< .merge_file_oYWf8k
<<<<<<< HEAD
=======
>>>>>>> .merge_file_sAAPzI
=======
        'icon' => 'heroicon-o-icon2',
## Checklist Pre-Implementazione
Prima di creare un nuovo Enum:
>>>>>>> laraxot/dev
<<<<<<< .merge_file_yYE3vy
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> laraxot/dev
>>>>>>> .merge_file_sAAPzI
=======
>>>>>>> laraxot/dev
- [ ] Importare `TransTrait`
- [ ] Implementare tutti i metodi standard con `transClass()`
- [ ] Creare file traduzioni in `lang/it/`, `lang/en/`, `lang/de/`
- [ ] Struttura espansa completa per ogni valore
- [ ] Sincronizzazione IT/EN/DE
- [ ] Testare traduzioni in ambiente di sviluppo
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< .merge_file_oYWf8k
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Esempi di Errori Comuni
### ❌ ERRORE - Match per traduzioni
### ✅ CORRETTO - transClass()
### ❌ ERRORE - Valori hardcoded
## Verifica Automatica
### PHPStan Rule (Ideale)
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
=======
>>>>>>> laraxot/dev

## Esempi di Errori Comuni

### ❌ ERRORE - Match per traduzioni
```php
public function getLabel(): string
{
    return match ($this) {
        self::LIST => __('ui::table-layout.list.label'),
        self::GRID => __('ui::table-layout.grid.label'),
    };
}
```

### ✅ CORRETTO - transClass()
```php
public function getLabel(): string
{
    return $this->transClass(self::class, $this->value . '.label');
}
```

### ❌ ERRORE - Valori hardcoded
```php
public function getColor(): string
{
    return match ($this) {
        self::LIST => 'primary',
        self::GRID => 'secondary',
    };
}
```

### ✅ CORRETTO - transClass()
```php
public function getColor(): string
{
    return $this->transClass(self::class, $this->value . '.color');
}
```

## Verifica Automatica

### PHPStan Rule (Ideale)
```php
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
=======
<<<<<<< .merge_file_oYWf8k
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_sAAPzI
## Esempi di Errori Comuni
### ❌ ERRORE - Match per traduzioni
### ✅ CORRETTO - transClass()
### ❌ ERRORE - Valori hardcoded
## Verifica Automatica
### PHPStan Rule (Ideale)
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
// Regola PHPStan per rilevare match() in enum
// Implementare in phpstan.neon
rules:
    - rule: Never use match() for translations in enums
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
```

=======
=======
<<<<<<< .merge_file_oYWf8k
```

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
```

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
```

>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
>>>>>>> laraxot/dev
=======
```

>>>>>>> laraxot/dev
### Code Review Checklist
- [ ] TransTrait importato
- [ ] Tutti i metodi usano `transClass()`
- [ ] Nessun `match()` per traduzioni
- [ ] Traduzioni implementate in tutte le lingue
- [ ] Struttura espansa completa
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< .merge_file_oYWf8k
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Penalità per Violazioni
### Livello 1 - Warning
- Commento nel code review
- Richiesta di correzione
### Livello 2 - Blocco
- Blocco del merge
- Correzione obbligatoria
### Livello 3 - Sanzione
- Documentazione della violazione
- Training obbligatorio
## Collegamenti
- [Translation Standards](../../../docs/translation_standards.md)
- [Filament Best Practices](../../../docs/filament_best_practices.md)
- [TransTrait Documentation](../../Xot/docs/trans_trait_usage.md)
## Memoria Permanente
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
=======
>>>>>>> laraxot/dev

## Penalità per Violazioni

### Livello 1 - Warning
- Commento nel code review
- Richiesta di correzione

### Livello 2 - Blocco
- Blocco del merge
- Correzione obbligatoria

### Livello 3 - Sanzione
- Documentazione della violazione
- Training obbligatorio

## Collegamenti

- [Translation Standards](../../../../docs/translation_standards.md)
- [Filament Best Practices](../../../../docs/filament_best_practices.md)
- [TransTrait Documentation](../../xot/docs/trans_trait_usage.md)

## Memoria Permanente

<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy
=======
=======
<<<<<<< .merge_file_oYWf8k
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_sAAPzI
## Penalità per Violazioni
### Livello 1 - Warning
- Commento nel code review
- Richiesta di correzione
### Livello 2 - Blocco
- Blocco del merge
- Correzione obbligatoria
### Livello 3 - Sanzione
- Documentazione della violazione
- Training obbligatorio
## Collegamenti
- [Translation Standards](../../../docs/translation_standards.md)
- [Filament Best Practices](../../../docs/filament_best_practices.md)
- [TransTrait Documentation](../../Xot/docs/trans_trait_usage.md)
## Memoria Permanente
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
**RICORDA SEMPRE**:
- SEMPRE `TransTrait` negli enum
- SEMPRE `transClass()` per traduzioni
- MAI `match()` per traduzioni
- SEMPRE struttura espansa nelle traduzioni
- SEMPRE sincronizzazione IT/EN/DE
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_yYE3vy

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_oYWf8k

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_sAAPzI
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
<<<<<<< .merge_file_yYE3vy
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_QDRs0d
>>>>>>> .merge_file_sAAPzI
>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
