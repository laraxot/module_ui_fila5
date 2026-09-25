# File Validation Multilingua - Modulo UI

## Panoramica

I file `validation.php` contengono i messaggi di validazione specifici del modulo UI e devono esistere per tutte le lingue supportate dal progetto <nome progetto>.

## Struttura File Validation

### File Creati/Aggiornati
- `Modules/UI/lang/it/validation.php` ✅ (esistente, aggiornato)
- `Modules/UI/lang/en/validation.php` ✅ (creato)
- `Modules/UI/lang/de/validation.php` ✅ (creato)
- `Modules/UI/lang/it/opening_hours.php` ✅ (aggiornato con sezione validation.opening_hours)
- `Modules/UI/lang/en/opening_hours.php` ✅ (aggiornato con sezione validation.opening_hours)
- `Modules/UI/lang/de/opening_hours.php` ✅ (aggiornato con sezione validation.opening_hours)

### Contenuto Standardizzato

Ogni file contiene la sezione `opening_hours` con:

```php
return [
    'opening_hours' => [
        'morning' => 'Mattina|Morning|Vormittag',
        'afternoon' => 'Pomeriggio|Afternoon|Nachmittag',
        'morning_before_afternoon' => 'Messaggio localizzato per sequenza orari',
        'missing_closing_time' => 'Messaggio per orario chiusura mancante',
        'missing_opening_time' => 'Messaggio per orario apertura mancante',
        'opening_before_closing' => 'Messaggio per validazione apertura/chiusura',
    ],
];
```

## Integrazione con TransTrait

### Utilizzo nel Codice
La classe `OpeningHoursRule` ora utilizza il `TransTrait` per accedere alle traduzioni:

```php
use Modules\Xot\Filament\Traits\TransTrait;

class OpeningHoursRule implements ValidationRule
{
    use TransTrait;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_hmOCFx

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_AZmUgq
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
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
    // Utilizzo nelle validazioni
    $fail(static::trans('validation.opening_hours.morning_before_afternoon', params: [
        'day' => $dayLabel
    ]));
}
```

### Vantaggi del TransTrait
1. **Namespace automatico** del modulo corrente
2. **Sintassi semplificata** rispetto a `__('ui::...')`
3. **Supporto parametri** tramite `params:`
4. **Fallback automatico** alle traduzioni di base
5. **Performance ottimizzate** per traduzioni frequenti

## Traduzioni per Lingua

### Italiano (it/validation.php)
```php
'opening_hours' => [
    'morning' => 'Mattina',
    'afternoon' => 'Pomeriggio',
    'morning_before_afternoon' => 'Per :day, l\'orario di chiusura mattina deve essere precedente all\'apertura pomeridiana.',
    'missing_closing_time' => 'Se specifichi l\'orario di apertura :day :session, devi specificare anche quello di chiusura.',
    'missing_opening_time' => 'Se specifichi l\'orario di chiusura :day :session, devi specificare anche quello di apertura.',
    'opening_before_closing' => 'L\'orario di apertura :day :session deve essere precedente a quello di chiusura.',
],
```

### Inglese (en/validation.php)
```php
'opening_hours' => [
    'morning' => 'Morning',
    'afternoon' => 'Afternoon',
    'morning_before_afternoon' => 'For :day, morning closing time must be before afternoon opening time.',
    'missing_closing_time' => 'If you specify :day :session opening time, you must also specify closing time.',
    'missing_opening_time' => 'If you specify :day :session closing time, you must also specify opening time.',
    'opening_before_closing' => 'The :day :session opening time must be before closing time.',
],
```

### Tedesco (de/validation.php)
```php
'opening_hours' => [
    'morning' => 'Vormittag',
    'afternoon' => 'Nachmittag',
    'morning_before_afternoon' => 'Für :day muss die Vormittags-Schließzeit vor der Nachmittags-Öffnungszeit liegen.',
    'missing_closing_time' => 'Wenn Sie :day :session Öffnungszeit angeben, müssen Sie auch die Schließzeit angeben.',
    'missing_opening_time' => 'Wenn Sie :day :session Schließzeit angeben, müssen Sie auch die Öffnungszeit angeben.',
    'opening_before_closing' => 'Die :day :session Öffnungszeit muss vor der Schließzeit liegen.',
],
```

## Parametri Dinamici

### Parametri Supportati
- `:day` - Nome del giorno localizzato (es: "Lunedì", "Monday", "Montag")
- `:session` - Sessione localizzata (es: "mattina", "morning", "Vormittag")

### Esempio di Utilizzo
```php
// Input: day = "Monday", session = "morning"
// Output IT: "Per Monday, l'orario di chiusura mattina deve essere..."
// Output EN: "For Monday, morning closing time must be..."
// Output DE: "Für Monday muss die Vormittags-Schließzeit..."
```

## Best Practices Implementate

### Struttura File
1. **Strict types** declaration in tutti i file
2. **Array syntax breve** `[]` invece di `array()`
3. **Struttura gerarchica** con sezioni logiche
4. **Naming consistente** tra le lingue

### Localizzazione
1. **Nessuna stringa hardcoded** nel codice PHP
2. **Traduzioni complete** per tutte le lingue supportate
3. **Parametri dinamici** per personalizzazione messaggi
4. **Terminologia appropriata** per dominio medico

### Code Quality
1. **TransTrait** per performance e consistenza
2. **Parametri tipizzati** per sicurezza
3. **Messaggi user-friendly** e informativi
4. **Struttura scalabile** per nuove validazioni

## Estensibilità

### Aggiunta Nuove Validazioni
Per aggiungere nuove validazioni agli orari di apertura:

1. **Aggiungere chiave** in tutti e tre i file validation.php
2. **Implementare logica** in OpeningHoursRule.php
3. **Utilizzare TransTrait** per accedere alle traduzioni
4. **Testare** in tutte le lingue

### Aggiunta Nuove Lingue
Per supportare una nuova lingua (es: francese):

1. **Creare** `Modules/UI/lang/fr/validation.php`
2. **Tradurre** tutti i messaggi appropriatamente
3. **Testare** la validazione nella nuova lingua
4. **Aggiornare** documentazione

## Testing Multilingua

### Test per Ogni Lingua
```php
// Test italiano
App::setLocale('it');
$rule = new OpeningHoursRule();
// Verificare messaggi in italiano

// Test inglese
App::setLocale('en');
$rule = new OpeningHoursRule();
// Verificare messaggi in inglese

// Test tedesco
App::setLocale('de');
$rule = new OpeningHoursRule();
// Verificare messaggi in tedesco
```

### Validazione Parametri
Verificare che i parametri `:day` e `:session` vengano sostituiti correttamente in tutte le lingue.

## Benefici della Implementazione

### Per gli Utenti
- **Messaggi nella lingua nativa** per migliore comprensione
- **Terminologia medica appropriata** per ogni cultura
- **User experience coerente** in tutte le lingue

### Per il Team di Sviluppo
- **Codice pulito** senza stringhe hardcoded
- **Manutenibilità migliorata** delle traduzioni
- **Scalabilità** per nuove lingue
- **Conformità** alle best practices Laravel

### Per il Progetto
- **Supporto internazionale** completo
- **Professionalità** nell'approccio multilingua
- **Facilità di espansione** in nuovi mercati

## Collegamenti
- [Opening Hours Rule](../app/Rules/OpeningHoursRule.php)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
- [TransTrait Documentation](../../Xot/docs/trans_trait.md)
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
- [TransTrait Documentation](../../xot/docs/trans_trait.md)
>>>>>>> laraxot/dev
=======
- [TransTrait Documentation](../../xot/docs/trans_trait.md)
>>>>>>> laraxot/dev
- [Opening Hours Field](./opening_hours_field.md)
- [Localization Guidelines](./localization_guidelines.md)

*Implementazione completata: gennaio 2025*
# File Validation Multilingua - Modulo UI
<<<<<<< HEAD
<<<<<<< HEAD
## Panoramica
I file `validation.php` contengono i messaggi di validazione specifici del modulo UI e devono esistere per tutte le lingue supportate dal progetto <nome progetto>.
## Struttura File Validation
=======
=======
>>>>>>> laraxot/dev

## Panoramica

I file `validation.php` contengono i messaggi di validazione specifici del modulo UI e devono esistere per tutte le lingue supportate dal progetto <nome progetto>.

## Struttura File Validation

<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
=======
<<<<<<< .merge_file_hmOCFx
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_AZmUgq
- [TransTrait Documentation](../../Xot/docs/trans_trait.md)
- [Opening Hours Field](./opening_hours_field.md)
- [Localization Guidelines](./localization_guidelines.md)

<<<<<<< HEAD
*Implementazione completata: gennaio 2025*
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
*Implementazione completata: gennaio 2025*
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
*Implementazione completata: gennaio 2025*
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
*Implementazione completata: gennaio 2025*
# File Validation Multilingua - Modulo UI
## Panoramica
I file `validation.php` contengono i messaggi di validazione specifici del modulo UI e devono esistere per tutte le lingue supportate dal progetto <nome progetto>.
## Struttura File Validation
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
### File Creati/Aggiornati
- `Modules/UI/lang/it/validation.php` ✅ (esistente, aggiornato)
- `Modules/UI/lang/en/validation.php` ✅ (creato)
- `Modules/UI/lang/de/validation.php` ✅ (creato)
- `Modules/UI/lang/it/opening_hours.php` ✅ (aggiornato con sezione validation.opening_hours)
- `Modules/UI/lang/en/opening_hours.php` ✅ (aggiornato con sezione validation.opening_hours)
- `Modules/UI/lang/de/opening_hours.php` ✅ (aggiornato con sezione validation.opening_hours)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
=======
<<<<<<< HEAD
### Contenuto Standardizzato
Ogni file contiene la sezione `opening_hours` con:
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Contenuto Standardizzato
Ogni file contiene la sezione `opening_hours` con:
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev

### Contenuto Standardizzato

Ogni file contiene la sezione `opening_hours` con:

<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
<<<<<<< HEAD
=======
>>>>>>> .merge_file_AZmUgq
=======
### Contenuto Standardizzato
Ogni file contiene la sezione `opening_hours` con:
>>>>>>> laraxot/dev
<<<<<<< .merge_file_Acq7Hi
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> laraxot/dev
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev
```php
return [
    'opening_hours' => [
        'morning' => 'Mattina|Morning|Vormittag',
        'afternoon' => 'Pomeriggio|Afternoon|Nachmittag',
        'morning_before_afternoon' => 'Messaggio localizzato per sequenza orari',
        'missing_closing_time' => 'Messaggio per orario chiusura mancante',
        'missing_opening_time' => 'Messaggio per orario apertura mancante',
        'opening_before_closing' => 'Messaggio per validazione apertura/chiusura',
    ],
];
```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Integrazione con TransTrait
### Utilizzo nel Codice
La classe `OpeningHoursRule` ora utilizza il `TransTrait` per accedere alle traduzioni:
use Modules\Xot\Filament\Traits\TransTrait;
class OpeningHoursRule implements ValidationRule
{
    use TransTrait;
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev

## Integrazione con TransTrait

### Utilizzo nel Codice
La classe `OpeningHoursRule` ora utilizza il `TransTrait` per accedere alle traduzioni:

```php
use Modules\Xot\Filament\Traits\TransTrait;

class OpeningHoursRule implements ValidationRule
{
    use TransTrait;

<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
=======
<<<<<<< .merge_file_hmOCFx
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_AZmUgq
## Integrazione con TransTrait
### Utilizzo nel Codice
La classe `OpeningHoursRule` ora utilizza il `TransTrait` per accedere alle traduzioni:
use Modules\Xot\Filament\Traits\TransTrait;
class OpeningHoursRule implements ValidationRule
{
    use TransTrait;
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
    // Utilizzo nelle validazioni
    $fail(static::trans('validation.opening_hours.morning_before_afternoon', params: [
        'day' => $dayLabel
    ]));
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
```

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> .merge_file_AZmUgq
```

=======
>>>>>>> laraxot/dev
<<<<<<< .merge_file_Acq7Hi
=======
>>>>>>> laraxot/dev
=======
=======
```

>>>>>>> .merge_file_uVeUUU
>>>>>>> laraxot/dev
>>>>>>> .merge_file_AZmUgq
=======
```

>>>>>>> laraxot/dev
### Vantaggi del TransTrait
1. **Namespace automatico** del modulo corrente
2. **Sintassi semplificata** rispetto a `__('ui::...')`
3. **Supporto parametri** tramite `params:`
4. **Fallback automatico** alle traduzioni di base
5. **Performance ottimizzate** per traduzioni frequenti
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
=======
<<<<<<< HEAD
## Traduzioni per Lingua
### Italiano (it/validation.php)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Traduzioni per Lingua
### Italiano (it/validation.php)
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev

## Traduzioni per Lingua

### Italiano (it/validation.php)
```php
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
<<<<<<< HEAD
=======
>>>>>>> .merge_file_AZmUgq
=======
## Traduzioni per Lingua
### Italiano (it/validation.php)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_Acq7Hi
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> laraxot/dev
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev
'opening_hours' => [
    'morning' => 'Mattina',
    'afternoon' => 'Pomeriggio',
    'morning_before_afternoon' => 'Per :day, l\'orario di chiusura mattina deve essere precedente all\'apertura pomeridiana.',
    'missing_closing_time' => 'Se specifichi l\'orario di apertura :day :session, devi specificare anche quello di chiusura.',
    'missing_opening_time' => 'Se specifichi l\'orario di chiusura :day :session, devi specificare anche quello di apertura.',
    'opening_before_closing' => 'L\'orario di apertura :day :session deve essere precedente a quello di chiusura.',
],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
=======
<<<<<<< HEAD
### Inglese (en/validation.php)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Inglese (en/validation.php)
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev
```

### Inglese (en/validation.php)
```php
'opening_hours' => [
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
### Inglese (en/validation.php)
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_hmOCFx
<<<<<<< HEAD
=======
=======
### Inglese (en/validation.php)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> laraxot/dev
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev
    'morning' => 'Morning',
    'afternoon' => 'Afternoon',
    'morning_before_afternoon' => 'For :day, morning closing time must be before afternoon opening time.',
    'missing_closing_time' => 'If you specify :day :session opening time, you must also specify closing time.',
    'missing_opening_time' => 'If you specify :day :session closing time, you must also specify opening time.',
    'opening_before_closing' => 'The :day :session opening time must be before closing time.',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
=======
<<<<<<< HEAD
### Tedesco (de/validation.php)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Tedesco (de/validation.php)
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev
],
```

### Tedesco (de/validation.php)
```php
'opening_hours' => [
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
### Tedesco (de/validation.php)
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_hmOCFx
<<<<<<< HEAD
=======
=======
### Tedesco (de/validation.php)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> laraxot/dev
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev
    'morning' => 'Vormittag',
    'afternoon' => 'Nachmittag',
    'morning_before_afternoon' => 'Für :day muss die Vormittags-Schließzeit vor der Nachmittags-Öffnungszeit liegen.',
    'missing_closing_time' => 'Wenn Sie :day :session Öffnungszeit angeben, müssen Sie auch die Schließzeit angeben.',
    'missing_opening_time' => 'Wenn Sie :day :session Schließzeit angeben, müssen Sie auch die Öffnungszeit angeben.',
    'opening_before_closing' => 'Die :day :session Öffnungszeit muss vor der Schließzeit liegen.',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Parametri Dinamici
### Parametri Supportati
- `:day` - Nome del giorno localizzato (es: "Lunedì", "Monday", "Montag")
- `:session` - Sessione localizzata (es: "mattina", "morning", "Vormittag")
### Esempio di Utilizzo
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev
],
```

## Parametri Dinamici

### Parametri Supportati
- `:day` - Nome del giorno localizzato (es: "Lunedì", "Monday", "Montag")
- `:session` - Sessione localizzata (es: "mattina", "morning", "Vormittag")

### Esempio di Utilizzo
```php
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
=======
<<<<<<< .merge_file_hmOCFx
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_AZmUgq
## Parametri Dinamici
### Parametri Supportati
- `:day` - Nome del giorno localizzato (es: "Lunedì", "Monday", "Montag")
- `:session` - Sessione localizzata (es: "mattina", "morning", "Vormittag")
### Esempio di Utilizzo
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
// Input: day = "Monday", session = "morning"
// Output IT: "Per Monday, l'orario di chiusura mattina deve essere..."
// Output EN: "For Monday, morning closing time must be..."
// Output DE: "Für Monday muss die Vormittags-Schließzeit..."
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
=======
<<<<<<< HEAD
## Best Practices Implementate
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Best Practices Implementate
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev
```

## Best Practices Implementate

<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
## Best Practices Implementate
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_hmOCFx
<<<<<<< HEAD
=======
=======
## Best Practices Implementate
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> laraxot/dev
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev
### Struttura File
1. **Strict types** declaration in tutti i file
2. **Array syntax breve** `[]` invece di `array()`
3. **Struttura gerarchica** con sezioni logiche
4. **Naming consistente** tra le lingue
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi

=======
=======
<<<<<<< .merge_file_hmOCFx

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
### Localizzazione
1. **Nessuna stringa hardcoded** nel codice PHP
2. **Traduzioni complete** per tutte le lingue supportate
3. **Parametri dinamici** per personalizzazione messaggi
4. **Terminologia appropriata** per dominio medico
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi

=======
=======
<<<<<<< .merge_file_hmOCFx

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
### Code Quality
1. **TransTrait** per performance e consistenza
2. **Parametri tipizzati** per sicurezza
3. **Messaggi user-friendly** e informativi
4. **Struttura scalabile** per nuove validazioni
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_uVeUUU
## Estensibilità
### Aggiunta Nuove Validazioni
Per aggiungere nuove validazioni agli orari di apertura:
=======
<<<<<<< .merge_file_hmOCFx
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev

## Estensibilità

### Aggiunta Nuove Validazioni
Per aggiungere nuove validazioni agli orari di apertura:

<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
<<<<<<< HEAD
=======
>>>>>>> .merge_file_AZmUgq
=======
## Estensibilità
### Aggiunta Nuove Validazioni
Per aggiungere nuove validazioni agli orari di apertura:
>>>>>>> laraxot/dev
<<<<<<< .merge_file_Acq7Hi
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> laraxot/dev
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev
1. **Aggiungere chiave** in tutti e tre i file validation.php
2. **Implementare logica** in OpeningHoursRule.php
3. **Utilizzare TransTrait** per accedere alle traduzioni
4. **Testare** in tutte le lingue
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
=======
<<<<<<< HEAD
### Aggiunta Nuove Lingue
Per supportare una nuova lingua (es: francese):
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Aggiunta Nuove Lingue
Per supportare una nuova lingua (es: francese):
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev

### Aggiunta Nuove Lingue
Per supportare una nuova lingua (es: francese):

<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
<<<<<<< HEAD
=======
>>>>>>> .merge_file_AZmUgq
=======
### Aggiunta Nuove Lingue
Per supportare una nuova lingua (es: francese):
>>>>>>> laraxot/dev
<<<<<<< .merge_file_Acq7Hi
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> laraxot/dev
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev
1. **Creare** `Modules/UI/lang/fr/validation.php`
2. **Tradurre** tutti i messaggi appropriatamente
3. **Testare** la validazione nella nuova lingua
4. **Aggiornare** documentazione
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
=======
<<<<<<< HEAD
## Testing Multilingua
### Test per Ogni Lingua
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Testing Multilingua
### Test per Ogni Lingua
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev

## Testing Multilingua

### Test per Ogni Lingua
```php
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
<<<<<<< HEAD
=======
>>>>>>> .merge_file_AZmUgq
=======
## Testing Multilingua
### Test per Ogni Lingua
>>>>>>> laraxot/dev
<<<<<<< .merge_file_Acq7Hi
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> laraxot/dev
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev
// Test italiano
App::setLocale('it');
$rule = new OpeningHoursRule();
// Verificare messaggi in italiano
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
// Test inglese
App::setLocale('en');
// Verificare messaggi in inglese
// Test tedesco
App::setLocale('de');
// Verificare messaggi in tedesco
### Validazione Parametri
Verificare che i parametri `:day` e `:session` vengano sostituiti correttamente in tutte le lingue.
## Benefici della Implementazione
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev

// Test inglese
App::setLocale('en');
$rule = new OpeningHoursRule();
// Verificare messaggi in inglese

// Test tedesco
App::setLocale('de');
$rule = new OpeningHoursRule();
// Verificare messaggi in tedesco
```

### Validazione Parametri
Verificare che i parametri `:day` e `:session` vengano sostituiti correttamente in tutte le lingue.

## Benefici della Implementazione

<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
=======
<<<<<<< .merge_file_hmOCFx
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_AZmUgq
// Test inglese
App::setLocale('en');
// Verificare messaggi in inglese
// Test tedesco
App::setLocale('de');
// Verificare messaggi in tedesco
### Validazione Parametri
Verificare che i parametri `:day` e `:session` vengano sostituiti correttamente in tutte le lingue.
## Benefici della Implementazione
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
### Per gli Utenti
- **Messaggi nella lingua nativa** per migliore comprensione
- **Terminologia medica appropriata** per ogni cultura
- **User experience coerente** in tutte le lingue
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi

=======
=======
<<<<<<< .merge_file_hmOCFx

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
### Per il Team di Sviluppo
- **Codice pulito** senza stringhe hardcoded
- **Manutenibilità migliorata** delle traduzioni
- **Scalabilità** per nuove lingue
- **Conformità** alle best practices Laravel
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi

=======
=======
<<<<<<< .merge_file_hmOCFx

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
### Per il Progetto
- **Supporto internazionale** completo
- **Professionalità** nell'approccio multilingua
- **Facilità di espansione** in nuovi mercati
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< .merge_file_hmOCFx
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Collegamenti
- [Opening Hours Rule](../app/Rules/OpeningHoursRule.php)
- [TransTrait Documentation](../../Xot/docs/trans_trait.md)
- [Opening Hours Field](./opening_hours_field.md)
- [Localization Guidelines](./localization_guidelines.md)
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
=======
>>>>>>> laraxot/dev

## Collegamenti
- [Opening Hours Rule](../app/Rules/OpeningHoursRule.php)
- [TransTrait Documentation](../../xot/docs/trans_trait.md)
- [Opening Hours Field](./opening_hours_field.md)
- [Localization Guidelines](./localization_guidelines.md)

*Implementazione completata: gennaio 2025*
<<<<<<< HEAD
<<<<<<< .merge_file_Acq7Hi
=======
=======
<<<<<<< .merge_file_hmOCFx
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_AZmUgq
## Collegamenti
- [Opening Hours Rule](../app/Rules/OpeningHoursRule.php)
- [TransTrait Documentation](../../Xot/docs/trans_trait.md)
- [Opening Hours Field](./opening_hours_field.md)
- [Localization Guidelines](./localization_guidelines.md)
<<<<<<< HEAD
=======

*Implementazione completata: gennaio 2025*
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
*Implementazione completata: gennaio 2025*
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_Acq7Hi
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uVeUUU
>>>>>>> .merge_file_AZmUgq
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
