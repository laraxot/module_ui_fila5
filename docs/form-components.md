# Componenti Form

## Introduzione
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
=======
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
I componenti form forniscono elementi di input e validazione per la creazione di form complessi e interattivi.
## Componenti Disponibili
### InlineDatePicker
Un componente avanzato per la selezione di date che mostra un calendario inline con la possibilità di abilitare/disabilitare date specifiche.
```php
use Modules\UI\Filament\Forms\Components\InlineDatePicker;
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
>>>>>>> 804451c (Lint)
InlineDatePicker::make('appointment_date')
    ->enabledDates(['[DATE]', '[DATE]', '[DATE]'])
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
InlineDatePicker::make('appointment_date')
    ->enabledDates(['[DATE]', '[DATE]', '[DATE]'])
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
=======

>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> laraxot/dev
I componenti form forniscono elementi di input e validazione per la creazione di form complessi e interattivi.

## Componenti Disponibili

### InlineDatePicker

Un componente avanzato per la selezione di date che mostra un calendario inline con la possibilità di abilitare/disabilitare date specifiche.

```php
use Modules\UI\Filament\Forms\Components\InlineDatePicker;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
InlineDatePicker::make('appointment_date')
    ->enabledDates(['2025-06-05', '2025-06-21', '2025-06-25'])
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
I componenti form forniscono elementi di input e validazione per la creazione di form complessi e interattivi.

## Componenti Disponibili

### InlineDatePicker

Un componente avanzato per la selezione di date che mostra un calendario inline con la possibilità di abilitare/disabilitare date specifiche.

```php
use Modules\UI\Filament\Forms\Components\InlineDatePicker;

InlineDatePicker::make('appointment_date')
    ->enabledDates(['2025-06-05', '2025-06-21', '2025-06-25'])
=======
InlineDatePicker::make('appointment_date')
    ->enabledDates(['[DATE]', '[DATE]', '[DATE]'])
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
InlineDatePicker::make('appointment_date')
    ->enabledDates(['[DATE]', '[DATE]', '[DATE]'])
>>>>>>> .merge_file_hKpICT
    ->calendarConfig([
        'locale' => 'it',
        'firstDayOfWeek' => 1, // Lunedì come primo giorno della settimana
        'numberOfMonths' => 1, // Numero di mesi da mostrare
    ])
    ->required();
```
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
#### Caratteristiche Principali
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
#### Caratteristiche Principali
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
#### Caratteristiche Principali
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)

#### Caratteristiche Principali

=======
<<<<<<< HEAD

#### Caratteristiche Principali

=======
<<<<<<< HEAD
#### Caratteristiche Principali
=======

#### Caratteristiche Principali

>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======

#### Caratteristiche Principali

=======
#### Caratteristiche Principali
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
#### Caratteristiche Principali
>>>>>>> .merge_file_hKpICT
- **Selezione Controllata**: Solo le date specificate in `enabledDates()` sono selezionabili
- **Interfaccia Intuitiva**: Navigazione tra mesi con frecce e visualizzazione chiara
- **Accessibilità Completa**: Supporto per screen reader e navigazione da tastiera
- **Design Responsivo**: Si adatta perfettamente a qualsiasi dispositivo
- **Personalizzabile**: Aspetto e comportamento completamente personalizzabili
- **Internazionalizzazione**: Supporto integrato per diverse lingue e formati di data
- **Performance Ottimizzate**: Caricamento lazy dei dati e rendering efficiente
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
#### Metodi Disponibili
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
#### Metodi Disponibili
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
#### Metodi Disponibili
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)

#### Metodi Disponibili

=======
<<<<<<< HEAD

#### Metodi Disponibili

=======
<<<<<<< HEAD
#### Metodi Disponibili
=======

#### Metodi Disponibili

>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======

#### Metodi Disponibili

=======
#### Metodi Disponibili
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
#### Metodi Disponibili
>>>>>>> .merge_file_hKpICT
| Metodo | Parametri | Descrizione |
|--------|-----------|-------------|
| `enabledDates` | `array|Closure $dates` | Imposta le date selezionabili (formato Y-m-d) |
| `calendarConfig` | `array $config` | Configura i parametri del calendario |
| `getEnabledDates` | - | Restituisce l'array delle date abilitate |
| `isDateEnabled` | `string $date` | Verifica se una data è abilitata |
| `generateMonthGrid` | `?int $year`, `?int $month` | Genera la griglia del mese per visualizzazione |
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
#### Configurazione Avanzata
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
#### Configurazione Avanzata
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
<<<<<<< HEAD
#### Configurazione Avanzata
<<<<<<< HEAD
```php
InlineDatePicker::make('appointment_date')
=======
=======
>>>>>>> laraxot/dev

#### Configurazione Avanzata
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
>>>>>>> 804451c (Lint)

```php
InlineDatePicker::make('appointment_date')
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
```php
InlineDatePicker::make('appointment_date')
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
#### Configurazione Avanzata
>>>>>>> .merge_file_hKpICT
    ->enabledDates(function () {
        // Logica dinamica per generare le date abilitate
        return [
            now()->format('Y-m-d'),
            now()->addDays(2)->format('Y-m-d'),
            now()->addWeek()->format('Y-m-d'),
        ];
    })
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
    ->calendarConfig([
=======
<<<<<<< HEAD
    ->calendarConfig([
=======
<<<<<<< HEAD
=======
    ->calendarConfig([
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    ->calendarConfig([
=======
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
        'locale' => app()->getLocale(),
        'firstDayOfWeek' => 1, // Lunedì
        'numberOfMonths' => 2,  // Mostra 2 mesi affiancati
        'inline' => true,       // Mostra sempre il calendario
    ]);
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
#### Personalizzazione dello Stile
Lo stile del componente può essere personalizzato sovrascrivendo le classi CSS nel file di vista:
`resources/views/vendor/filament/forms/components/inline-date-picker.blade.php`
#### Gestione degli Eventi
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
```

#### Personalizzazione dello Stile

Lo stile del componente può essere personalizzato sovrascrivendo le classi CSS nel file di vista:
`resources/views/vendor/filament/forms/components/inline-date-picker.blade.php`

#### Gestione degli Eventi
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
>>>>>>> 804451c (Lint)

```php
InlineDatePicker::make('appointment_date')
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
```

#### Personalizzazione dello Stile

Lo stile del componente può essere personalizzato sovrascrivendo le classi CSS nel file di vista:
`resources/views/vendor/filament/forms/components/inline-date-picker.blade.php`

#### Gestione degli Eventi

```php
InlineDatePicker::make('appointment_date')
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_hKpICT
    ->enabledDates($enabledDates)
    ->live()
    ->afterStateUpdated(function (Set $set, $state) {
        // Azioni da eseguire quando viene selezionata una data
        $set('related_field', $state);
    });
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
#### Accesso ai Dati
// Ottenere le date abilitate
$enabledDates = $datePicker->getEnabledDates();
// Verificare se una data è abilitata
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
$isEnabled = $datePicker->isDateEnabled('2025-06-15');
// Generare la griglia di un mese specifico
$monthGrid = $datePicker->generateMonthGrid(2025, 6);
#### Best Practice
```

#### Accesso ai Dati

```php
// Ottenere le date abilitate
$enabledDates = $datePicker->getEnabledDates();

// Verificare se una data è abilitata
$isEnabled = $datePicker->isDateEnabled('2025-06-15');

// Generare la griglia di un mese specifico
$monthGrid = $datePicker->generateMonthGrid(2025, 6);
```

#### Best Practice

=======
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_hKpICT
$isEnabled = $datePicker->isDateEnabled('[DATE]');
// Generare la griglia di un mese specifico
$monthGrid = $datePicker->generateMonthGrid(2025, 6);
#### Best Practice
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
$isEnabled = $datePicker->isDateEnabled('2025-06-15');
// Generare la griglia di un mese specifico
$monthGrid = $datePicker->generateMonthGrid(2025, 6);
#### Best Practice
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
```

#### Accesso ai Dati

```php
// Ottenere le date abilitate
$enabledDates = $datePicker->getEnabledDates();

// Verificare se una data è abilitata
$isEnabled = $datePicker->isDateEnabled('2025-06-15');

// Generare la griglia di un mese specifico
$monthGrid = $datePicker->generateMonthGrid(2025, 6);
```

#### Best Practice

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
1. **Performance**: Per un gran numero di date, utilizzare una closure per generare le date abilitate in modo lazy
2. **Accessibilità**: Assicurarsi che il componente sia accessibile da tastiera
3. **Localizzazione**: Configurare correttamente la lingua e il formato della data
4. **Validazione**: Aggiungere sempre la validazione appropriata per il campo data
5. **Stati di Caricamento**: Implementare indicatori di caricamento per operazioni asincrone
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
#### Esempio Completo
use Filament\Forms\Form;
use Filament\Forms\Components\Section;
public function form(Form $form): Form
public function form(Form $form): Form
public function form(Form $form): Form
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZBrH2F
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)

#### Esempio Completo

```php
use Filament\Forms\Form;
use Filament\Forms\Components\Section;
use Modules\UI\Filament\Forms\Components\InlineDatePicker;

public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_hKpICT
{
    return $form->schema([
        Section::make('Prenotazione Appuntamento')
            ->schema([
                InlineDatePicker::make('appointment_date')
                    ->label('Seleziona una data')
                    ->enabledDates(function () {
                        // Esempio: abilita solo i prossimi 30 giorni lavorativi
                        $dates = [];
                        $date = now();
                        $count = 0;
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======

=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
=======
<<<<<<< HEAD
                        
=======
<<<<<<< HEAD

=======
                        
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_hKpICT
                        while ($count < 30) {
                            if (!$date->isWeekend()) {
                                $dates[] = $date->format('Y-m-d');
                                $count++;
                            }
                            $date->addDay();
                        }
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
                        
=======
<<<<<<< HEAD
=======
                        
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
                        return $dates;
                    })
                    ->calendarConfig([
                        'locale' => 'it',
                        'firstDayOfWeek' => 1,
                        'numberOfMonths' => 2,
                    ])
                    ->required()
                    ->columnSpanFull(),
            ])
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
}
### Input
```blade
<x-ui::input
    name="email"
    type="email"
    label="Email"
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZBrH2F
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
    ]);
}
```

### Input
```blade
<x-ui::input 
    name="email" 
    type="email" 
    label="Email" 
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_hKpICT
    placeholder="Inserisci la tua email"
    :required="true"
    :disabled="false"
    :readonly="false"
    :autofocus="false"
    :autocomplete="true"
    :error="$errors->first('email')"
/>
### Select
<x-ui::select
    name="role"
<<<<<<< .merge_file_BooSsd
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
### Select
<x-ui::select
    name="role"
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
<<<<<<< HEAD
### Select
<x-ui::select
    name="role"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
>>>>>>> 804451c (Lint)
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 804451c (Lint)
```

### Select
```blade
<x-ui::select 
    name="role" 
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_hKpICT
    label="Ruolo"
    :options="[
        'admin' => 'Amministratore',
        'user' => 'Utente',
        'guest' => 'Ospite'
    ]"
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
    :required="true"
=======
<<<<<<< HEAD
    :required="true"
=======
<<<<<<< HEAD
=======
    :required="true"
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    :required="true"
=======
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
    :multiple="false"
    :searchable="true"
    :clearable="true"
    :error="$errors->first('role')"
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
### Checkbox
<x-ui::checkbox
    name="terms"
    label="Accetto i termini e condizioni"
    :checked="false"
    :error="$errors->first('terms')"
### Radio
<x-ui::radio
    name="gender"
    label="Genere"
        'male' => 'Maschio',
        'female' => 'Femmina',
        'other' => 'Altro'
    :error="$errors->first('gender')"
### Textarea
<x-ui::textarea
    name="message"
    label="Messaggio"
    placeholder="Inserisci il tuo messaggio"
    :rows="4"
    :error="$errors->first('message')"
## Validazione
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZBrH2F
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
/>
```

### Checkbox
```blade
<x-ui::checkbox 
    name="terms" 
    label="Accetto i termini e condizioni"
    :required="true"
    :checked="false"
    :disabled="false"
    :error="$errors->first('terms')"
/>
```

### Radio
```blade
<x-ui::radio 
    name="gender" 
    label="Genere"
    :options="[
        'male' => 'Maschio',
        'female' => 'Femmina',
        'other' => 'Altro'
    ]"
    :required="true"
    :error="$errors->first('gender')"
/>
```

### Textarea
```blade
<x-ui::textarea 
    name="message" 
    label="Messaggio"
    placeholder="Inserisci il tuo messaggio"
    :rows="4"
    :required="true"
    :disabled="false"
    :readonly="false"
    :error="$errors->first('message')"
/>
```

## Validazione

<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_hKpICT
### Regole
- Required
- Min/Max length
- Pattern
- Custom rules
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)

=======
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
### Messaggi
- Personalizzazione messaggi errore
- Localizzazione
- Tooltip di aiuto
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
## Integrazione
### Livewire
use Livewire\Component;
class UserForm extends Component
    public $name;
    public $email;

<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZBrH2F
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)

## Integrazione

### Livewire
```php
use Livewire\Component;

class UserForm extends Component
{
    public $name;
    public $email;
    
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_hKpICT
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
    ];
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
    
=======
<<<<<<< HEAD
=======
    
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
    public function save()
    {
        $this->validate();
        // Salva i dati
    }
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
}
```

=======
<<<<<<< HEAD
}
```

=======
<<<<<<< HEAD
=======
}
```

>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
}
```

=======
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
### JavaScript
```javascript
// Validazione lato client
const form = document.querySelector('form');
form.addEventListener('submit', (e) => {
    if (!form.checkValidity()) {
        e.preventDefault();
        // Mostra errori
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
});
## Best Practices
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
});
## Best Practices
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
=======
<<<<<<< HEAD
});
## Best Practices
<<<<<<< HEAD
    }
```
=======
=======
>>>>>>> laraxot/dev
    }
});
```

## Best Practices

<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
    }
```
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
});
## Best Practices
>>>>>>> .merge_file_hKpICT
### Utilizzo
- Validazione lato server e client
- Feedback immediato
- Accessibilità
- UX ottimizzata
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)

=======
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
### Performance
- Lazy loading
- Debounce input
- Cache validazione
- Ottimizzazione risorse
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)

=======
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
## Collegamenti
- [Componenti Base](./base-components.md)
- [Componenti Table](./table-components.md)
- [Componenti Chart](./chart-components.md)
- [Componenti Layout](./layout-components.md)
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
# Componenti Form
- [Documentazione Frontend](../Cms/project_docs/frontend-architecture.md)
## Collegamenti tra versioni di form-components.md
* [form-components.md](../../../UI/project_docs/form-components.md)
* [form-components.md](../../../UI/project_docs/roadmap/form-components.md)
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md)
* [form-components.md](../../../UI/docs/form-components.md)
* [form-components.md](../../../UI/docs/roadmap/form-components.md)
# Componenti Form
=======
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_hKpICT
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
## Collegamenti tra versioni di form-components.md
* [form-components.md](../../../ui/project_docs/form-components.md)
* [form-components.md](../../../ui/project_docs/roadmap/form-components.md)
- [Documentazione Frontend](../cms/docs/frontend-architecture.md)
* [form-components.md](../../../ui/docs/form-components.md)
* [form-components.md](../../../ui/docs/roadmap/form-components.md)
# Componenti Form

<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
>>>>>>> laraxot/dev
## Introduzione
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Introduzione
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
# Componenti Form
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
- [Documentazione Frontend](../Cms/project_docs/frontend-architecture.md)
## Collegamenti tra versioni di form-components.md
* [form-components.md](../../../UI/project_docs/form-components.md)
* [form-components.md](../../../UI/project_docs/roadmap/form-components.md)
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md)
* [form-components.md](../../../UI/docs/form-components.md)
* [form-components.md](../../../UI/docs/roadmap/form-components.md)
=======
>>>>>>> laraxot/dev
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md) 
## Collegamenti tra versioni di form-components.md
* [form-components.md](../../../UI/docs/form-components.md)
* [form-components.md](../../../UI/docs/roadmap/form-components.md)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
# Componenti Form
## Introduzione
>>>>>>> 92912795 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
## Introduzione
>>>>>>> .merge_file_hKpICT

I componenti form forniscono elementi di input e validazione per la creazione di form complessi e interattivi.

## Componenti Disponibili

### InlineDatePicker

Un componente avanzato per la selezione di date che mostra un calendario inline con la possibilità di abilitare/disabilitare date specifiche.

```php
use Modules\UI\Filament\Forms\Components\InlineDatePicker;

InlineDatePicker::make('appointment_date')
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
    ->enabledDates(['[DATE]', '[DATE]', '[DATE]'])
=======
<<<<<<< HEAD
    ->enabledDates(['2025-06-05', '2025-06-21', '2025-06-25'])
=======
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)
    ->enabledDates(['[DATE]', '[DATE]', '[DATE]'])
=======
    ->enabledDates(['2025-06-05', '2025-06-21', '2025-06-25'])
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
    ->enabledDates(['2025-06-05', '2025-06-21', '2025-06-25'])
=======
    ->enabledDates(['[DATE]', '[DATE]', '[DATE]'])
>>>>>>> .merge_file_ZBrH2F
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
    ->enabledDates(['[DATE]', '[DATE]', '[DATE]'])
>>>>>>> .merge_file_hKpICT
    ->calendarConfig([
        'locale' => 'it',
        'firstDayOfWeek' => 1, // Lunedì come primo giorno della settimana
        'numberOfMonths' => 1, // Numero di mesi da mostrare
    ])
    ->required();
```

#### Caratteristiche Principali

- **Selezione Controllata**: Solo le date specificate in `enabledDates()` sono selezionabili
- **Interfaccia Intuitiva**: Navigazione tra mesi con frecce e visualizzazione chiara
- **Accessibilità Completa**: Supporto per screen reader e navigazione da tastiera
- **Design Responsivo**: Si adatta perfettamente a qualsiasi dispositivo
- **Personalizzabile**: Aspetto e comportamento completamente personalizzabili
- **Internazionalizzazione**: Supporto integrato per diverse lingue e formati di data
- **Performance Ottimizzate**: Caricamento lazy dei dati e rendering efficiente

#### Metodi Disponibili

| Metodo | Parametri | Descrizione |
|--------|-----------|-------------|
| `enabledDates` | `array|Closure $dates` | Imposta le date selezionabili (formato Y-m-d) |
| `calendarConfig` | `array $config` | Configura i parametri del calendario |
| `getEnabledDates` | - | Restituisce l'array delle date abilitate |
| `isDateEnabled` | `string $date` | Verifica se una data è abilitata |
| `generateMonthGrid` | `?int $year`, `?int $month` | Genera la griglia del mese per visualizzazione |

#### Configurazione Avanzata

```php
InlineDatePicker::make('appointment_date')
    ->enabledDates(function () {
        // Logica dinamica per generare le date abilitate
        return [
            now()->format('Y-m-d'),
            now()->addDays(2)->format('Y-m-d'),
            now()->addWeek()->format('Y-m-d'),
        ];
    })
    ->calendarConfig([
        'locale' => app()->getLocale(),
        'firstDayOfWeek' => 1, // Lunedì
        'numberOfMonths' => 2,  // Mostra 2 mesi affiancati
        'inline' => true,       // Mostra sempre il calendario
    ]);
```

#### Personalizzazione dello Stile

Lo stile del componente può essere personalizzato sovrascrivendo le classi CSS nel file di vista:
`resources/views/vendor/filament/forms/components/inline-date-picker.blade.php`

#### Gestione degli Eventi

```php
InlineDatePicker::make('appointment_date')
    ->enabledDates($enabledDates)
    ->live()
    ->afterStateUpdated(function (Set $set, $state) {
        // Azioni da eseguire quando viene selezionata una data
        $set('related_field', $state);
    });
```

#### Accesso ai Dati

```php
// Ottenere le date abilitate
$enabledDates = $datePicker->getEnabledDates();

// Verificare se una data è abilitata
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
$isEnabled = $datePicker->isDateEnabled('[DATE]');
=======
<<<<<<< HEAD
$isEnabled = $datePicker->isDateEnabled('2025-06-15');
=======
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)
$isEnabled = $datePicker->isDateEnabled('[DATE]');
=======
$isEnabled = $datePicker->isDateEnabled('2025-06-15');
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
$isEnabled = $datePicker->isDateEnabled('2025-06-15');
=======
$isEnabled = $datePicker->isDateEnabled('[DATE]');
>>>>>>> .merge_file_ZBrH2F
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
$isEnabled = $datePicker->isDateEnabled('[DATE]');
>>>>>>> .merge_file_hKpICT

// Generare la griglia di un mese specifico
$monthGrid = $datePicker->generateMonthGrid(2025, 6);
```

#### Best Practice

1. **Performance**: Per un gran numero di date, utilizzare una closure per generare le date abilitate in modo lazy
2. **Accessibilità**: Assicurarsi che il componente sia accessibile da tastiera
3. **Localizzazione**: Configurare correttamente la lingua e il formato della data
4. **Validazione**: Aggiungere sempre la validazione appropriata per il campo data
5. **Stati di Caricamento**: Implementare indicatori di caricamento per operazioni asincrone

#### Esempio Completo

```php
use Filament\Forms\Form;
use Filament\Forms\Components\Section;
use Modules\UI\Filament\Forms\Components\InlineDatePicker;

<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
public function form(Form $form): Form
public function form(Form $form): Form
public function form(Form $form): Form
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
public function form(Form $form): Form
public function form(Form $form): Form
public function form(Form $form): Form
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
=======
public function form(Form $form): Form
>>>>>>> .merge_file_hKpICT
public function form(Form $form): Form
public function form(Form $form): Form
<<<<<<< .merge_file_BooSsd
public function form(Form $form): Form
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
{
    return $form->schema([
        Section::make('Prenotazione Appuntamento')
            ->schema([
                InlineDatePicker::make('appointment_date')
                    ->label('Seleziona una data')
                    ->enabledDates(function () {
                        // Esempio: abilita solo i prossimi 30 giorni lavorativi
                        $dates = [];
                        $date = now();
                        $count = 0;
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======

=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
=======
<<<<<<< HEAD
                        
=======

>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_hKpICT
                        while ($count < 30) {
                            if (!$date->isWeekend()) {
                                $dates[] = $date->format('Y-m-d');
                                $count++;
                            }
                            $date->addDay();
                        }
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======

=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
=======
<<<<<<< HEAD
                        
=======

>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_hKpICT
                        return $dates;
                    })
                    ->calendarConfig([
                        'locale' => 'it',
                        'firstDayOfWeek' => 1,
                        'numberOfMonths' => 2,
                    ])
                    ->required()
                    ->columnSpanFull(),
            ])
    ]);
}
```

### Input
```blade
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
>>>>>>> 804451c (Lint)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
<x-ui::input 
    name="email" 
    type="email" 
    label="Email" 
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_hKpICT
<x-ui::input
    name="email"
    type="email"
    label="Email"
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 92912795 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 92912795 (.)
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
    placeholder="Inserisci la tua email"
    :required="true"
    :disabled="false"
    :readonly="false"
    :autofocus="false"
    :autocomplete="true"
    :error="$errors->first('email')"
/>
```

### Select
```blade
<x-ui::select
    name="role"
<<<<<<< .merge_file_BooSsd
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<x-ui::select
    name="role"
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
<x-ui::select 
    name="role" 
=======
<x-ui::select
    name="role"
>>>>>>> 92912795 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
    label="Ruolo"
    :options="[
        'admin' => 'Amministratore',
        'user' => 'Utente',
        'guest' => 'Ospite'
    ]"
    :required="true"
    :multiple="false"
    :searchable="true"
    :clearable="true"
    :error="$errors->first('role')"
/>
```

### Checkbox
```blade
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<x-ui::checkbox
    name="terms"
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<x-ui::checkbox
    name="terms"
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
<x-ui::checkbox 
    name="terms" 
=======
<x-ui::checkbox
    name="terms"
>>>>>>> 92912795 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
<x-ui::checkbox
    name="terms"
>>>>>>> .merge_file_hKpICT
    label="Accetto i termini e condizioni"
    :required="true"
    :checked="false"
    :disabled="false"
    :error="$errors->first('terms')"
/>
```

### Radio
```blade
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<x-ui::radio
    name="gender"
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<x-ui::radio
    name="gender"
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
<x-ui::radio 
    name="gender" 
=======
<x-ui::radio
    name="gender"
>>>>>>> 92912795 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
<x-ui::radio
    name="gender"
>>>>>>> .merge_file_hKpICT
    label="Genere"
    :options="[
        'male' => 'Maschio',
        'female' => 'Femmina',
        'other' => 'Altro'
    ]"
    :required="true"
    :error="$errors->first('gender')"
/>
```

### Textarea
```blade
<x-ui::textarea
    name="message"
<<<<<<< .merge_file_BooSsd
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<x-ui::textarea
    name="message"
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
<x-ui::textarea 
    name="message" 
=======
<x-ui::textarea
    name="message"
>>>>>>> 92912795 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
    label="Messaggio"
    placeholder="Inserisci il tuo messaggio"
    :rows="4"
    :required="true"
    :disabled="false"
    :readonly="false"
    :error="$errors->first('message')"
/>
```

## Validazione

### Regole
- Required
- Min/Max length
- Pattern
- Custom rules

### Messaggi
- Personalizzazione messaggi errore
- Localizzazione
- Tooltip di aiuto

## Integrazione

### Livewire
```php
use Livewire\Component;

class UserForm extends Component
{
    public $name;
    public $email;
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======

=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
=======
<<<<<<< HEAD
    
=======

>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_hKpICT
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
    ];
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======

=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
=======
<<<<<<< HEAD
    
=======

>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_hKpICT
    public function save()
    {
        $this->validate();
        // Salva i dati
    }
}
```

### JavaScript
```javascript
// Validazione lato client
const form = document.querySelector('form');
form.addEventListener('submit', (e) => {
    if (!form.checkValidity()) {
        e.preventDefault();
        // Mostra errori
    }
});
```

## Best Practices

### Utilizzo
- Validazione lato server e client
- Feedback immediato
- Accessibilità
- UX ottimizzata

### Performance
- Lazy loading
- Debounce input
- Cache validazione
- Ottimizzazione risorse

## Collegamenti
- [Componenti Base](./base-components.md)
- [Componenti Table](./table-components.md)
- [Componenti Chart](./chart-components.md)
- [Componenti Layout](./layout-components.md)
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md) 
## Collegamenti tra versioni di form-components.md
* [form-components.md](../../../UI/docs/form-components.md)
* [form-components.md](../../../UI/docs/roadmap/form-components.md)
- [Documentazione Frontend](../Cms/project_docs/frontend-architecture.md) 
## Collegamenti tra versioni di form-components.md
* [form-components.md](../../../UI/project_docs/form-components.md)
* [form-components.md](../../../UI/project_docs/roadmap/form-components.md)
- [Documentazione Frontend](../Cms/project_docs/frontend-architecture.md)
## Collegamenti tra versioni di form-components.md
* [form-components.md](../../../UI/project_docs/form-components.md)
* [form-components.md](../../../UI/project_docs/roadmap/form-components.md)
- [Documentazione Frontend](../Cms/project_docs/frontend-architecture.md) 
## Collegamenti tra versioni di form-components.md
* [form-components.md](../../../UI/project_docs/form-components.md)
* [form-components.md](../../../UI/project_docs/roadmap/form-components.md)
=======
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_hKpICT
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
## Collegamenti tra versioni di form-components.md
* [form-components.md](../../../ui/project_docs/form-components.md)
* [form-components.md](../../../ui/project_docs/roadmap/form-components.md)
<<<<<<< .merge_file_BooSsd
<<<<<<< HEAD
<<<<<<< .merge_file_8tM33n
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md) 
## Collegamenti tra versioni di form-components.md
* [form-components.md](../../../UI/docs/form-components.md)
* [form-components.md](../../../UI/docs/roadmap/form-components.md)
- [Documentazione Frontend](../Cms/project_docs/frontend-architecture.md) 
## Collegamenti tra versioni di form-components.md
* [form-components.md](../../../UI/project_docs/form-components.md)
* [form-components.md](../../../UI/project_docs/roadmap/form-components.md)
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
- [Documentazione Frontend](../Cms/project_docs/frontend-architecture.md)
## Collegamenti tra versioni di form-components.md
* [form-components.md](../../../UI/project_docs/form-components.md)
* [form-components.md](../../../UI/project_docs/roadmap/form-components.md)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
- [Documentazione Frontend](../Cms/project_docs/frontend-architecture.md) 
## Collegamenti tra versioni di form-components.md
* [form-components.md](../../../UI/project_docs/form-components.md)
* [form-components.md](../../../UI/project_docs/roadmap/form-components.md)
<<<<<<< HEAD
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ZBrH2F
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hKpICT
