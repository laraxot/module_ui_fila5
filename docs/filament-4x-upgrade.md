# Filament 4.x Upgrade - Modulo UI

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lyCjot
=======
**Data**: 2025-09-30
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_MDBNXW
=======
<<<<<<< HEAD
**Data**: 2025-09-30
=======
<<<<<<< HEAD
=======
**Data**: 2025-09-30
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
**Data**: 2025-09-30
=======
>>>>>>> .merge_file_VODkQH
>>>>>>> laraxot/dev
>>>>>>> .merge_file_pdBite
=======
>>>>>>> laraxot/dev
**Status**: ✅ COMPLETATO
**Versione Filament**: 4.0.20

## 🎯 Panoramica

Il modulo UI è stato aggiornato con successo a Filament 4.x. Le modifiche principali riguardano il `UserCalendarWidget`.

## 🔧 Modifiche Applicate

### UserCalendarWidget

**File**: `Modules/UI/app/Filament/Widgets/UserCalendarWidget.php`

**Problema**: Dipendenza da `saade/filament-fullcalendar` non compatibile con Filament 4.x

**Soluzione**: Disabilitazione temporanea del widget calendario

#### Modifiche Specifiche

```php
// PRIMA (Filament 3)
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Saade\FilamentFullCalendar\Widgets\Concerns\InteractsWithEvents;

class UserCalendarWidget extends FullCalendarWidget
{
    use InteractsWithEvents;

    protected static ?string $view = 'ui::filament.widgets.user-calendar';
    // ...
}

// DOPO (Filament 4)
// use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
// use Saade\FilamentFullCalendar\Widgets\Concerns\InteractsWithEvents;

class UserCalendarWidget extends \Filament\Widgets\Widget
{
    protected string $view = 'ui::filament.widgets.user-calendar';

    // Temporaneamente commentato per compatibilità Filament 4.x
    // use InteractsWithEvents;
    // ...
}
```

#### Dettaglio Cambiamenti

1. **Import commentati**:
   - `use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;`
   - `use Saade\FilamentFullCalendar\Widgets\Concerns\InteractsWithEvents;`

2. **Classe base cambiata**:
   - Da: `extends FullCalendarWidget`
   - A: `extends \Filament\Widgets\Widget`

3. **Trait commentato**:
   - `use InteractsWithEvents;` → commentato

4. **Proprietà $view aggiornata**:
   - Da: `protected static ?string $view`
   - A: `protected string $view`

5. **Funzionalità mantenute**:
   - `fetchEvents(array $fetchInfo): array` - Per futura riattivazione
   - `getFormSchema(): array` - Per futura riattivazione
   - `onDateSelect()` - Per futura riattivazione
   - `getActionName()` - Logica custom mantenuta

## 📦 Dipendenze

### Pacchetto Non Compatibile

**Nome**: `saade/filament-fullcalendar`
**Status**: ❌ Non compatibile con Filament 4.x
**Repository**: https://github.com/saade/filament-fullcalendar

### Piano di Riattivazione

1. **Monitoraggio**: Verificare aggiornamenti del pacchetto
2. **Testing**: Testare compatibilità con Filament 4.x
3. **Riattivazione**: Decommentare codice e ripristinare funzionalità

```bash
# Verifica versione compatibile
composer show saade/filament-fullcalendar

# Se disponibile versione 4.x
composer require saade/filament-fullcalendar:"^4.0"
```

## 🔄 Codice per Riattivazione

Quando il pacchetto sarà compatibile:

```php
// 1. Decommentare imports
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Saade\FilamentFullCalendar\Widgets\Concerns\InteractsWithEvents;

// 2. Ripristinare extends
class UserCalendarWidget extends FullCalendarWidget
{
    // 3. Decommentare trait
    use InteractsWithEvents;

    // 4. Verificare proprietà $view (probabilmente static)
    protected static string $view = 'ui::filament.widgets.user-calendar';

    // ... resto del codice già presente
}
```

## 🎨 View Template

La view `ui::filament.widgets.user-calendar` deve essere aggiornata per mostrare:
- Messaggio temporaneo di disabilitazione
- Link alla documentazione
- Alternativa manuale (se applicabile)

## 🔗 Collegamenti

- [Filament 4.x Upgrade Guide](https://filamentphp.com/docs/4.x/upgrade-guide)
- [Filament Widgets](https://filamentphp.com/docs/4.x/panels/widgets)
- [saade/filament-fullcalendar](https://github.com/saade/filament-fullcalendar)

## 📋 Checklist

- [x] Commentati import da `saade/filament-fullcalendar`
- [x] Cambiato extends da `FullCalendarWidget` a `Widget`
- [x] Commentato trait `InteractsWithEvents`
- [x] Aggiornato proprietà `$view` (rimosso `static`)
- [x] Mantenute funzionalità per riattivazione futura
- [x] Documentazione creata
- [ ] View template aggiornato con messaggio temporaneo
- [ ] Monitoraggio aggiornamenti pacchetto

## 🚨 Note Importanti

1. **Breaking Change**: La proprietà `$view` in Filament 4 **non è più statica**
2. **Compatibilità**: Il widget attuale non renderà il calendario fino all'aggiornamento del pacchetto
3. **Funzionalità**: Metodi `fetchEvents()`, `getFormSchema()`, `onDateSelect()` sono pronti per la riattivazione
4. **Testing**: Testare approfonditamente il widget quando il pacchetto sarà aggiornato

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lyCjot
=======
<<<<<<< .merge_file_MDBNXW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
*Ultimo aggiornamento: 2025-09-30*
*Modulo UI compatibile con Filament 4.0.20*
# Filament 4.x Upgrade - Modulo UI
**Data**: 2025-09-30
**Status**: ✅ COMPLETATO
**Versione Filament**: 4.0.20
## 🎯 Panoramica
Il modulo UI è stato aggiornato con successo a Filament 4.x. Le modifiche principali riguardano il `UserCalendarWidget`.
## 🔧 Modifiche Applicate
### UserCalendarWidget
**File**: `Modules/UI/app/Filament/Widgets/UserCalendarWidget.php`
**Problema**: Dipendenza da `saade/filament-fullcalendar` non compatibile con Filament 4.x
**Soluzione**: Disabilitazione temporanea del widget calendario
#### Modifiche Specifiche
=======
>>>>>>> .merge_file_VODkQH
>>>>>>> .merge_file_pdBite
=======
>>>>>>> laraxot/dev
*Ultimo aggiornamento: [DATE]*
*Modulo UI compatibile con Filament 4.0.20*
# Filament 4.x Upgrade - Modulo UI

**Status**: ✅ COMPLETATO
**Versione Filament**: 4.0.20

## 🎯 Panoramica

Il modulo UI è stato aggiornato con successo a Filament 4.x. Le modifiche principali riguardano il `UserCalendarWidget`.

## 🔧 Modifiche Applicate

### UserCalendarWidget

**File**: `Modules/UI/app/Filament/Widgets/UserCalendarWidget.php`

**Problema**: Dipendenza da `saade/filament-fullcalendar` non compatibile con Filament 4.x

**Soluzione**: Disabilitazione temporanea del widget calendario

#### Modifiche Specifiche

<<<<<<< HEAD
<<<<<<< .merge_file_lyCjot
=======
=======
<<<<<<< .merge_file_MDBNXW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_pdBite
*Ultimo aggiornamento: 2025-09-30*
<<<<<<< HEAD
*Modulo UI compatibile con Filament 4.0.20*
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
*Modulo UI compatibile con Filament 4.0.20*
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
*Modulo UI compatibile con Filament 4.0.20*
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
*Modulo UI compatibile con Filament 4.0.20*
# Filament 4.x Upgrade - Modulo UI
**Data**: 2025-09-30
**Status**: ✅ COMPLETATO
**Versione Filament**: 4.0.20
## 🎯 Panoramica
Il modulo UI è stato aggiornato con successo a Filament 4.x. Le modifiche principali riguardano il `UserCalendarWidget`.
## 🔧 Modifiche Applicate
### UserCalendarWidget
**File**: `Modules/UI/app/Filament/Widgets/UserCalendarWidget.php`
**Problema**: Dipendenza da `saade/filament-fullcalendar` non compatibile con Filament 4.x
**Soluzione**: Disabilitazione temporanea del widget calendario
#### Modifiche Specifiche
<<<<<<< .merge_file_lyCjot
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_VODkQH
>>>>>>> .merge_file_pdBite
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
```php
// PRIMA (Filament 3)
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Saade\FilamentFullCalendar\Widgets\Concerns\InteractsWithEvents;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lyCjot
=======
<<<<<<< .merge_file_MDBNXW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
class UserCalendarWidget extends FullCalendarWidget
{
    use InteractsWithEvents;
    protected static ?string $view = 'ui::filament.widgets.user-calendar';
    // ...
}
// DOPO (Filament 4)
// use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
// use Saade\FilamentFullCalendar\Widgets\Concerns\InteractsWithEvents;
class UserCalendarWidget extends \Filament\Widgets\Widget
    protected string $view = 'ui::filament.widgets.user-calendar';
    // Temporaneamente commentato per compatibilità Filament 4.x
    // use InteractsWithEvents;
```
#### Dettaglio Cambiamenti
1. **Import commentati**:
   - `use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;`
   - `use Saade\FilamentFullCalendar\Widgets\Concerns\InteractsWithEvents;`
2. **Classe base cambiata**:
   - Da: `extends FullCalendarWidget`
   - A: `extends \Filament\Widgets\Widget`
3. **Trait commentato**:
   - `use InteractsWithEvents;` → commentato
4. **Proprietà $view aggiornata**:
   - Da: `protected static ?string $view`
   - A: `protected string $view`
=======
>>>>>>> .merge_file_VODkQH
>>>>>>> .merge_file_pdBite
=======
>>>>>>> laraxot/dev

class UserCalendarWidget extends FullCalendarWidget
{
    use InteractsWithEvents;

    protected static ?string $view = 'ui::filament.widgets.user-calendar';
    // ...
}

// DOPO (Filament 4)
// use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
// use Saade\FilamentFullCalendar\Widgets\Concerns\InteractsWithEvents;

class UserCalendarWidget extends \Filament\Widgets\Widget
{
    protected string $view = 'ui::filament.widgets.user-calendar';

    // Temporaneamente commentato per compatibilità Filament 4.x
    // use InteractsWithEvents;
    // ...
}
```

#### Dettaglio Cambiamenti

1. **Import commentati**:
   - `use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;`
   - `use Saade\FilamentFullCalendar\Widgets\Concerns\InteractsWithEvents;`

2. **Classe base cambiata**:
   - Da: `extends FullCalendarWidget`
   - A: `extends \Filament\Widgets\Widget`

3. **Trait commentato**:
   - `use InteractsWithEvents;` → commentato

4. **Proprietà $view aggiornata**:
   - Da: `protected static ?string $view`
   - A: `protected string $view`

<<<<<<< HEAD
<<<<<<< .merge_file_lyCjot
=======
=======
<<<<<<< .merge_file_MDBNXW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_pdBite
class UserCalendarWidget extends FullCalendarWidget
{
    use InteractsWithEvents;
    protected static ?string $view = 'ui::filament.widgets.user-calendar';
    // ...
}
// DOPO (Filament 4)
// use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
// use Saade\FilamentFullCalendar\Widgets\Concerns\InteractsWithEvents;
class UserCalendarWidget extends \Filament\Widgets\Widget
    protected string $view = 'ui::filament.widgets.user-calendar';
    // Temporaneamente commentato per compatibilità Filament 4.x
    // use InteractsWithEvents;
```
#### Dettaglio Cambiamenti
1. **Import commentati**:
   - `use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;`
   - `use Saade\FilamentFullCalendar\Widgets\Concerns\InteractsWithEvents;`
2. **Classe base cambiata**:
   - Da: `extends FullCalendarWidget`
   - A: `extends \Filament\Widgets\Widget`
3. **Trait commentato**:
   - `use InteractsWithEvents;` → commentato
4. **Proprietà $view aggiornata**:
   - Da: `protected static ?string $view`
   - A: `protected string $view`
<<<<<<< .merge_file_lyCjot
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_VODkQH
>>>>>>> .merge_file_pdBite
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
5. **Funzionalità mantenute**:
   - `fetchEvents(array $fetchInfo): array` - Per futura riattivazione
   - `getFormSchema(): array` - Per futura riattivazione
   - `onDateSelect()` - Per futura riattivazione
   - `getActionName()` - Logica custom mantenuta
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lyCjot
=======
<<<<<<< .merge_file_MDBNXW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## 📦 Dipendenze
### Pacchetto Non Compatibile
**Nome**: `saade/filament-fullcalendar`
**Status**: ❌ Non compatibile con Filament 4.x
**Repository**: https://github.com/saade/filament-fullcalendar
### Piano di Riattivazione
1. **Monitoraggio**: Verificare aggiornamenti del pacchetto
2. **Testing**: Testare compatibilità con Filament 4.x
3. **Riattivazione**: Decommentare codice e ripristinare funzionalità
```bash
# Verifica versione compatibile
composer show saade/filament-fullcalendar
# Se disponibile versione 4.x
composer require saade/filament-fullcalendar:"^4.0"
## 🔄 Codice per Riattivazione
Quando il pacchetto sarà compatibile:
// 1. Decommentare imports
// 2. Ripristinare extends
    // 3. Decommentare trait
    // 4. Verificare proprietà $view (probabilmente static)
    protected static string $view = 'ui::filament.widgets.user-calendar';
    // ... resto del codice già presente
## 🎨 View Template
=======
>>>>>>> .merge_file_VODkQH
>>>>>>> .merge_file_pdBite
=======
>>>>>>> laraxot/dev

## 📦 Dipendenze

### Pacchetto Non Compatibile

**Nome**: `saade/filament-fullcalendar`
**Status**: ❌ Non compatibile con Filament 4.x
**Repository**: https://github.com/saade/filament-fullcalendar

### Piano di Riattivazione

1. **Monitoraggio**: Verificare aggiornamenti del pacchetto
2. **Testing**: Testare compatibilità con Filament 4.x
3. **Riattivazione**: Decommentare codice e ripristinare funzionalità

```bash
# Verifica versione compatibile
composer show saade/filament-fullcalendar

# Se disponibile versione 4.x
composer require saade/filament-fullcalendar:"^4.0"
```

## 🔄 Codice per Riattivazione

Quando il pacchetto sarà compatibile:

```php
// 1. Decommentare imports
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Saade\FilamentFullCalendar\Widgets\Concerns\InteractsWithEvents;

// 2. Ripristinare extends
class UserCalendarWidget extends FullCalendarWidget
{
    // 3. Decommentare trait
    use InteractsWithEvents;

    // 4. Verificare proprietà $view (probabilmente static)
    protected static string $view = 'ui::filament.widgets.user-calendar';

    // ... resto del codice già presente
}
```

## 🎨 View Template

<<<<<<< HEAD
<<<<<<< .merge_file_lyCjot
=======
=======
<<<<<<< .merge_file_MDBNXW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_pdBite
## 📦 Dipendenze
### Pacchetto Non Compatibile
**Nome**: `saade/filament-fullcalendar`
**Status**: ❌ Non compatibile con Filament 4.x
**Repository**: https://github.com/saade/filament-fullcalendar
### Piano di Riattivazione
1. **Monitoraggio**: Verificare aggiornamenti del pacchetto
2. **Testing**: Testare compatibilità con Filament 4.x
3. **Riattivazione**: Decommentare codice e ripristinare funzionalità
```bash
# Verifica versione compatibile
composer show saade/filament-fullcalendar
# Se disponibile versione 4.x
composer require saade/filament-fullcalendar:"^4.0"
## 🔄 Codice per Riattivazione
Quando il pacchetto sarà compatibile:
// 1. Decommentare imports
// 2. Ripristinare extends
    // 3. Decommentare trait
    // 4. Verificare proprietà $view (probabilmente static)
    protected static string $view = 'ui::filament.widgets.user-calendar';
    // ... resto del codice già presente
## 🎨 View Template
<<<<<<< .merge_file_lyCjot
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_VODkQH
>>>>>>> .merge_file_pdBite
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
La view `ui::filament.widgets.user-calendar` deve essere aggiornata per mostrare:
- Messaggio temporaneo di disabilitazione
- Link alla documentazione
- Alternativa manuale (se applicabile)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lyCjot
=======
<<<<<<< .merge_file_MDBNXW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## 🔗 Collegamenti
- [Filament 4.x Upgrade Guide](https://filamentphp.com/docs/4.x/upgrade-guide)
- [Filament Widgets](https://filamentphp.com/docs/4.x/panels/widgets)
- [saade/filament-fullcalendar](https://github.com/saade/filament-fullcalendar)
## 📋 Checklist
=======
>>>>>>> .merge_file_VODkQH
>>>>>>> .merge_file_pdBite
=======
>>>>>>> laraxot/dev

## 🔗 Collegamenti

- [Filament 4.x Upgrade Guide](https://filamentphp.com/docs/4.x/upgrade-guide)
- [Filament Widgets](https://filamentphp.com/docs/4.x/panels/widgets)
- [saade/filament-fullcalendar](https://github.com/saade/filament-fullcalendar)

## 📋 Checklist

<<<<<<< HEAD
<<<<<<< .merge_file_lyCjot
=======
=======
<<<<<<< .merge_file_MDBNXW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_pdBite
## 🔗 Collegamenti
- [Filament 4.x Upgrade Guide](https://filamentphp.com/docs/4.x/upgrade-guide)
- [Filament Widgets](https://filamentphp.com/docs/4.x/panels/widgets)
- [saade/filament-fullcalendar](https://github.com/saade/filament-fullcalendar)
## 📋 Checklist
<<<<<<< .merge_file_lyCjot
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_VODkQH
>>>>>>> .merge_file_pdBite
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
- [x] Commentati import da `saade/filament-fullcalendar`
- [x] Cambiato extends da `FullCalendarWidget` a `Widget`
- [x] Commentato trait `InteractsWithEvents`
- [x] Aggiornato proprietà `$view` (rimosso `static`)
- [x] Mantenute funzionalità per riattivazione futura
- [x] Documentazione creata
- [ ] View template aggiornato con messaggio temporaneo
- [ ] Monitoraggio aggiornamenti pacchetto
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lyCjot
=======
<<<<<<< .merge_file_MDBNXW

## 🚨 Note Importanti
=======
## 🚨 Note Importanti
=======
>>>>>>> .merge_file_VODkQH

=======
<<<<<<< HEAD
## 🚨 Note Importanti
=======
<<<<<<< HEAD
>>>>>>> .merge_file_pdBite

<<<<<<< .merge_file_MDBNXW
## 🚨 Note Importanti

=======
## 🚨 Note Importanti
>>>>>>> laraxot/dev
<<<<<<< .merge_file_lyCjot
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_VODkQH
>>>>>>> laraxot/dev
>>>>>>> .merge_file_pdBite
=======

## 🚨 Note Importanti

>>>>>>> laraxot/dev
1. **Breaking Change**: La proprietà `$view` in Filament 4 **non è più statica**
2. **Compatibilità**: Il widget attuale non renderà il calendario fino all'aggiornamento del pacchetto
3. **Funzionalità**: Metodi `fetchEvents()`, `getFormSchema()`, `onDateSelect()` sono pronti per la riattivazione
4. **Testing**: Testare approfonditamente il widget quando il pacchetto sarà aggiornato
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lyCjot

*Ultimo aggiornamento: [DATE]*
*Modulo UI compatibile con Filament 4.0.20*
=======
*Ultimo aggiornamento: 2025-09-30*
<<<<<<< HEAD

```
=======
*Modulo UI compatibile con Filament 4.0.20*
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
*Modulo UI compatibile con Filament 4.0.20*
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_MDBNXW

*Ultimo aggiornamento: [DATE]*
*Modulo UI compatibile con Filament 4.0.20*
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

*Ultimo aggiornamento: [DATE]*
*Modulo UI compatibile con Filament 4.0.20*
=======
>>>>>>> laraxot/dev
*Ultimo aggiornamento: 2025-09-30*
<<<<<<< HEAD

```
=======
*Modulo UI compatibile con Filament 4.0.20*
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
*Modulo UI compatibile con Filament 4.0.20*
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
*Ultimo aggiornamento: 2025-09-30*

```
=======

*Ultimo aggiornamento: [DATE]*
*Modulo UI compatibile con Filament 4.0.20*
>>>>>>> .merge_file_VODkQH
>>>>>>> .merge_file_pdBite
>>>>>>> laraxot/dev
=======

*Ultimo aggiornamento: [DATE]*
*Modulo UI compatibile con Filament 4.0.20*
>>>>>>> laraxot/dev
