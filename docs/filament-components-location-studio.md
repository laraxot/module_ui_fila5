# Componenti Filament per Location e Studio Selection

## Overview

<<<<<<< HEAD
<<<<<<< HEAD
Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo <nome progetto>.
=======
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< HEAD
=======
Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo <nome progetto>.
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo SaluteOra.
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo <nome progetto>.
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo <nome progetto>corrente.
=======
Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo <nome progetto>.
>>>>>>> laraxot/dev
=======
Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo SaluteOra.
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
>>>>>>> laraxot/dev
=======
Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo <nome progetto>.
>>>>>>> laraxot/dev

## Componenti Implementati

### 1. LocationSelector Component

**Percorso**: `app/Filament/Forms/Components/LocationSelector.php`

#### Descrizione
Componente Filament per la selezione gerarchica di Regione → Provincia → CAP con aggiornamenti live e integrazione con il modulo Geo.

#### Caratteristiche
<<<<<<< HEAD
<<<<<<< HEAD
- ✅ **Selezione Gerarchica**: Regione → Provincia → CAP
=======
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb
- ✅ **Selezione Gerarchica**: Regione → Provincia → CAP  
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_yQxr4U
<<<<<<< HEAD
=======
- ✅ **Selezione Gerarchica**: Regione → Provincia → CAP
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< .merge_file_25oEIb
=======
- ✅ **Selezione Gerarchica**: Regione → Provincia → CAP  
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
- ✅ **Selezione Gerarchica**: Regione → Provincia → CAP
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
<<<<<<< HEAD
- ✅ **Selezione Gerarchica**: Regione → Provincia → CAP
=======
- ✅ **Selezione Gerarchica**: Regione → Provincia → CAP
>>>>>>> laraxot/dev
=======
- ✅ **Selezione Gerarchica**: Regione → Provincia → CAP  
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
>>>>>>> laraxot/dev
=======
- ✅ **Selezione Gerarchica**: Regione → Provincia → CAP
>>>>>>> laraxot/dev
- ✅ **Live Updates**: I campi si aggiornano automaticamente
- ✅ **Integrazione Geo**: Utilizza i modelli del modulo Geo
- ✅ **Validazione Cascata**: I campi dipendenti si validano automaticamente
- ✅ **Personalizzazione**: Campi field names configurabili

#### Utilizzo Base

```php
use Modules\UI\Filament\Forms\Components\LocationSelector;

// Utilizzo semplice
LocationSelector::make()
    ->required()

// Utilizzo con field names personalizzati
LocationSelector::make()
    ->regionField('region_code')
    ->provinceField('province_code')
    ->capField('postal_code')
    ->required()
```

### 2. StudioSelector Component (Semplificato)

**Percorso**: `laravel/Modules/UI/resources/views/components/ui/studio-selector.blade.php`

#### Descrizione
Componente Blade per la selezione di studi odontoiatrici tramite pulsanti radio-style che popolano un TextInput.

#### Caratteristiche
- ✅ **Pulsanti Radio-Style**: Selezione singola con visual feedback
- ✅ **Informazioni Compatte**: Nome, indirizzo, contatti essenziali
- ✅ **Empty States**: Gestione caso nessuno studio trovato
- ✅ **Integrazione Livewire**: wire:click automatico
- ✅ **Layout Responsive**: Ottimizzato mobile/desktop

#### Utilizzo Base

```blade
<<<<<<< HEAD
<<<<<<< HEAD
<x-ui::ui.studio-selector
=======
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb
<x-ui::ui.studio-selector 
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_yQxr4U
<<<<<<< HEAD
=======
<x-ui::ui.studio-selector
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< .merge_file_25oEIb
=======
<x-ui::ui.studio-selector 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<x-ui::ui.studio-selector
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
<<<<<<< HEAD
<x-ui::ui.studio-selector
=======
<x-ui::ui.studio-selector
>>>>>>> laraxot/dev
=======
<x-ui::ui.studio-selector 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
>>>>>>> laraxot/dev
=======
<x-ui::ui.studio-selector
>>>>>>> laraxot/dev
    :studios="$studios"
    :selected-studio="$selectedStudioId"
    target-field="selected_studio"
/>
```

## Integrazione nel FindDoctorAndAppointmentWidget

### Step 1: Search Step (Aggiornato)

```php
protected function getSearchStepSchema(): array
{
    return [
        LocationSelector::make()
            ->regionField('region')
            ->provinceField('province')
            ->capField('cap')
            ->required()
            ->searchable()
    ];
}
```

### Step 2: Studio Step (Semplificato)

```php
protected function getStudioStepSchema(): array
{
    return [
        // Titolo step
<<<<<<< HEAD
<<<<<<< HEAD
        View::make('<nome progetto>::filament.widgets.studio-step-header')
=======
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb
        View::make('saluteora::filament.widgets.studio-step-header')
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_yQxr4U
<<<<<<< HEAD
=======
        View::make('<nome progetto>::filament.widgets.studio-step-header')
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< .merge_file_25oEIb
=======
        View::make('saluteora::filament.widgets.studio-step-header')
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
        View::make('<nome progetto>::filament.widgets.studio-step-header')
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
<<<<<<< HEAD
        View::make('<nome progetto>ilament.widgets.studio-step-header')
=======
        View::make('<nome progetto>::filament.widgets.studio-step-header')
>>>>>>> laraxot/dev
=======
        View::make('saluteora::filament.widgets.studio-step-header')
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
>>>>>>> laraxot/dev
=======
        View::make('<nome progetto>::filament.widgets.studio-step-header')
>>>>>>> laraxot/dev
            ->viewData([
                'studiosCount' => $this->getStudiosCount(),
                'geographicArea' => $this->getGeographicAreaName(),
            ])
            ->visible(fn (): bool => $this->hasValidGeographicSelection()),

        // Pulsanti selezione studio
<<<<<<< HEAD
<<<<<<< HEAD
        View::make('<nome progetto>::filament.widgets.studio-selector')
=======
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< HEAD
=======
        View::make('<nome progetto>::filament.widgets.studio-selector')
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
        View::make('saluteora::filament.widgets.studio-selector')
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
        View::make('<nome progetto>::filament.widgets.studio-selector')
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
        View::make('<nome progetto>ilament.widgets.studio-selector')
=======
        View::make('<nome progetto>::filament.widgets.studio-selector')
>>>>>>> laraxot/dev
=======
        View::make('saluteora::filament.widgets.studio-selector')
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
>>>>>>> laraxot/dev
=======
        View::make('<nome progetto>::filament.widgets.studio-selector')
>>>>>>> laraxot/dev
            ->viewData([
                'studios' => $this->getStudiosForSelectedArea(),
                'selectedStudio' => $this->data['selected_studio'] ?? null,
            ])
            ->visible(fn (): bool => $this->hasValidGeographicSelection()),

        // TextInput per mostrare studio selezionato
        TextInput::make('selected_studio_name')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< .merge_file_lSz9bR
>>>>>>> .merge_file_yQxr4U
            ->label(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.placeholder'))
=======
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< HEAD
=======
            ->label(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.placeholder'))
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
            ->label(__('saluteora::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('saluteora::widgets.find_doctor.fields.selected_studio.placeholder'))
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_25oEIb
            ->label(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.placeholder'))
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
            ->label(__('<nome progetto>idgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>idgets.find_doctor.fields.selected_studio.placeholder'))
=======
            ->label(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.placeholder'))
>>>>>>> laraxot/dev
=======
            ->label(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.placeholder'))
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
            ->label(__('<nome progetto>idgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>idgets.find_doctor.fields.selected_studio.placeholder'))
=======
>>>>>>> .merge_file_UagC5p
=======
            ->label(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.placeholder'))
>>>>>>> laraxot/dev
<<<<<<< .merge_file_lSz9bR
>>>>>>> .merge_file_yQxr4U
=======
            ->label(__('saluteora::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('saluteora::widgets.find_doctor.fields.selected_studio.placeholder'))
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_25oEIb
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_UagC5p
>>>>>>> .merge_file_yQxr4U
=======
            ->label(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.placeholder'))
>>>>>>> laraxot/dev
            ->readonly()
            ->visible(fn (): bool => !empty($this->data['selected_studio']))
            ->suffixIcon('heroicon-o-check-circle')
            ->suffixIconColor('success'),

        // Hidden field per memorizzare ID studio
        Hidden::make('selected_studio'),
    ];
}
```

### Azione Livewire Semplificata

```php
/**
 * Azione Livewire per selezione studio (popola TextInput)
 */
public function selectStudio(int $studioId): void
{
    $studio = Studio::find($studioId);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_lSz9bR

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
    
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
<<<<<<< .merge_file_25oEIb
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    
=======

>>>>>>> laraxot/dev
>>>>>>> .merge_file_UagC5p
>>>>>>> .merge_file_yQxr4U
=======

>>>>>>> laraxot/dev
    if (!$studio || !$studio->active) {
        $this->addError('selected_studio', 'Studio non disponibile');
        return;
    }

    // Aggiorna i dati del form
    $this->data['selected_studio'] = $studioId;
    $this->data['selected_studio_name'] = $studio->name;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_lSz9bR

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
    
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
<<<<<<< .merge_file_25oEIb
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    
=======

>>>>>>> laraxot/dev
>>>>>>> .merge_file_UagC5p
>>>>>>> .merge_file_yQxr4U
=======

>>>>>>> laraxot/dev
    // Notifica il cambio di stato
    $this->dispatch('studio-selected', studioId: $studioId, studioName: $studio->name);
}
```

## Flusso UX Semplificato

### 1. **Step Selezione Area**
- Utente seleziona Regione → Provincia → CAP
- Live updates automatici tra i campi
- Validazione cascata

<<<<<<< HEAD
<<<<<<< HEAD
### 2. **Step Selezione Studio**
=======
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< HEAD
=======
### 2. **Step Selezione Studio**
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
### 2. **Step Selezione Studio**  
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
### 2. **Step Selezione Studio**
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
### 2. **Step Selezione Studio**
=======
### 2. **Step Selezione Studio**
>>>>>>> laraxot/dev
=======
### 2. **Step Selezione Studio**  
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
>>>>>>> laraxot/dev
=======
### 2. **Step Selezione Studio**
>>>>>>> laraxot/dev
- Visualizzazione pulsanti per ogni studio nell'area
- Click su pulsante = selezione studio
- Visual feedback immediato (radio indicator + colori)
- TextInput readonly mostra studio selezionato

### 3. **Vantaggi Approccio Semplificato**
- ✅ **UX Intuitiva**: Pattern radio button familiare
- ✅ **Performance**: Meno componenti complessi
- ✅ **Manutenibilità**: Logica più semplice
- ✅ **Accessibilità**: Supporto keyboard navigation
- ✅ **Mobile Friendly**: Touch target ottimizzati

## Performance e Ottimizzazioni

### Caching Strategy
```php
// Cache risultati studio per area
protected function getStudiosForSelectedArea(): Collection
{
    $cacheKey = "studios_area_{$this->data['region']}_{$this->data['province']}_{$this->data['cap']}";
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_lSz9bR

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
    
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
<<<<<<< .merge_file_25oEIb
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    
=======

>>>>>>> laraxot/dev
>>>>>>> .merge_file_UagC5p
>>>>>>> .merge_file_yQxr4U
=======

>>>>>>> laraxot/dev
    return cache()->remember($cacheKey, 300, function () {
        return Studio::query()
            ->active()
            ->with(['addresses'])
            ->whereHas('addresses', function ($query) {
                $query->where('region_code', $this->data['region'])
                      ->where('province_code', $this->data['province'])
                      ->where('postal_code', $this->data['cap']);
            })
            ->limit(10)
            ->get();
    });
}
```

## Testing

### Test Funzionale Semplificato
```php
class FindDoctorWidgetStep2Test extends TestCase
{
    /** @test */
    public function clicking_studio_button_populates_textinput()
    {
        $studio = Studio::factory()->create(['name' => 'Studio Test']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_lSz9bR

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
        
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
<<<<<<< .merge_file_25oEIb
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        
=======

>>>>>>> laraxot/dev
>>>>>>> .merge_file_UagC5p
>>>>>>> .merge_file_yQxr4U
=======

>>>>>>> laraxot/dev
        $widget = Livewire::test(FindDoctorAndAppointmentWidget::class)
            ->set('data.region', '12')
            ->set('data.province', 'RM')
            ->set('data.cap', '00042')
            ->call('selectStudio', $studio->id);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_lSz9bR

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
            
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
<<<<<<< .merge_file_25oEIb
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            
=======

>>>>>>> laraxot/dev
>>>>>>> .merge_file_UagC5p
>>>>>>> .merge_file_yQxr4U
=======

>>>>>>> laraxot/dev
        $widget->assertSet('data.selected_studio', $studio->id)
               ->assertSet('data.selected_studio_name', 'Studio Test');
    }
}
```

## Migration da Approccio Complesso

### Prima (Complesso)
- StudioCard con molte informazioni
- Azioni multiple (Prenota, Dettagli, Contatti)
- Layout complesso responsive

### Dopo (Semplificato)
- Pulsanti radio-style semplici
- Informazioni essenziali (nome, indirizzo)
- Un'azione sola: selezione studio
- TextInput readonly per conferma

## Best Practices

### 1. **Semplicità Prima di Tutto**
- Componenti focalizzati su un singolo scopo
- UX patterns familiari (radio buttons)
- Meno stato da gestire

### 2. **Performance**
- Componenti Blade leggeri
- Cache appropriato per query
- Lazy loading quando possibile

### 3. **Accessibilità**
- Supporto keyboard navigation
- ARIA labels appropriati
- Contrasti colori sufficienti
- Touch targets ottimizzati

---

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
**Creato**: 26 Giugno 2025  
**Versione**: 2.0 - Semplificato  
**Stato**: Implementation Ready  
**Approccio**: Pulsanti + TextInput (semplice e diretto) 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
**Creato**: 26 Giugno 2025
**Versione**: 2.0 - Semplificato
**Stato**: Implementation Ready
**Approccio**: Pulsanti + TextInput (semplice e diretto)
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
**Creato**: 26 Giugno 2025
**Versione**: 2.0 - Semplificato
**Stato**: Implementation Ready
**Approccio**: Pulsanti + TextInput (semplice e diretto)
# Componenti Filament per Location e Studio Selection
<<<<<<< HEAD
<<<<<<< HEAD
## Overview
Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo <nome progetto>.
## Componenti Implementati
### 1. LocationSelector Component
**Percorso**: `app/Filament/Forms/Components/LocationSelector.php`
#### Descrizione
Componente Filament per la selezione gerarchica di Regione → Provincia → CAP con aggiornamenti live e integrazione con il modulo Geo.
=======
=======
>>>>>>> laraxot/dev

## Overview

Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo <nome progetto>.
Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo <nome progetto>.
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo <nome progetto>.

## Componenti Implementati

### 1. LocationSelector Component

**Percorso**: `app/Filament/Forms/Components/LocationSelector.php`

#### Descrizione
Componente Filament per la selezione gerarchica di Regione → Provincia → CAP con aggiornamenti live e integrazione con il modulo Geo.

<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
#### Caratteristiche
- ✅ **Selezione Gerarchica**: Regione → Provincia → CAP
- ✅ **Live Updates**: I campi si aggiornano automaticamente
- ✅ **Integrazione Geo**: Utilizza i modelli del modulo Geo
- ✅ **Validazione Cascata**: I campi dipendenti si validano automaticamente
- ✅ **Personalizzazione**: Campi field names configurabili
<<<<<<< HEAD
<<<<<<< HEAD
#### Utilizzo Base
```php
use Modules\UI\Filament\Forms\Components\LocationSelector;
// Utilizzo semplice
LocationSelector::make()
    ->required()
// Utilizzo con field names personalizzati
    ->regionField('region_code')
    ->provinceField('province_code')
    ->capField('postal_code')
```
### 2. StudioSelector Component (Semplificato)
**Percorso**: `laravel/Modules/UI/resources/views/components/ui/studio-selector.blade.php`
Componente Blade per la selezione di studi odontoiatrici tramite pulsanti radio-style che popolano un TextInput.
=======
=======
>>>>>>> laraxot/dev

#### Utilizzo Base

```php
use Modules\UI\Filament\Forms\Components\LocationSelector;

// Utilizzo semplice
LocationSelector::make()
    ->required()

// Utilizzo con field names personalizzati
LocationSelector::make()
    ->regionField('region_code')
    ->provinceField('province_code')
    ->capField('postal_code')
    ->required()
```

### 2. StudioSelector Component (Semplificato)

**Percorso**: `laravel/Modules/UI/resources/views/components/ui/studio-selector.blade.php`

#### Descrizione
Componente Blade per la selezione di studi odontoiatrici tramite pulsanti radio-style che popolano un TextInput.

#### Caratteristiche
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
- ✅ **Pulsanti Radio-Style**: Selezione singola con visual feedback
- ✅ **Informazioni Compatte**: Nome, indirizzo, contatti essenziali
- ✅ **Empty States**: Gestione caso nessuno studio trovato
- ✅ **Integrazione Livewire**: wire:click automatico
- ✅ **Layout Responsive**: Ottimizzato mobile/desktop
<<<<<<< HEAD
<<<<<<< HEAD
=======

#### Utilizzo Base

>>>>>>> laraxot/dev
=======

#### Utilizzo Base

>>>>>>> laraxot/dev
```blade
<x-ui::ui.studio-selector
    :studios="$studios"
    :selected-studio="$selectedStudioId"
    target-field="selected_studio"
/>
<<<<<<< HEAD
<<<<<<< HEAD
## Integrazione nel FindDoctorAndAppointmentWidget
### Step 1: Search Step (Aggiornato)
=======
=======
>>>>>>> laraxot/dev
```

## Integrazione nel FindDoctorAndAppointmentWidget

### Step 1: Search Step (Aggiornato)

```php
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
protected function getSearchStepSchema(): array
{
    return [
        LocationSelector::make()
            ->regionField('region')
            ->provinceField('province')
            ->capField('cap')
            ->required()
            ->searchable()
    ];
}
<<<<<<< HEAD
<<<<<<< HEAD
### Step 2: Studio Step (Semplificato)
protected function getStudioStepSchema(): array
        // Titolo step
        View::make('<nome progetto>::filament.widgets.studio-step-header')
=======
=======
>>>>>>> laraxot/dev
```

### Step 2: Studio Step (Semplificato)

```php
protected function getStudioStepSchema(): array
{
    return [
        // Titolo step
        View::make('<nome progetto>::filament.widgets.studio-step-header')
        View::make('<nome progetto>::filament.widgets.studio-step-header')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb
        View::make('<nome progetto>::filament.widgets.studio-step-header')
=======
>>>>>>> laraxot/dev
=======
        View::make('<nome progetto>::filament.widgets.studio-step-header')
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
        View::make('<nome progetto>::filament.widgets.studio-step-header')
<<<<<<< .merge_file_lSz9bR
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
=======
        View::make('<nome progetto>::filament.widgets.studio-step-header')
>>>>>>> laraxot/dev
            ->viewData([
                'studiosCount' => $this->getStudiosCount(),
                'geographicArea' => $this->getGeographicAreaName(),
            ])
            ->visible(fn (): bool => $this->hasValidGeographicSelection()),
<<<<<<< HEAD
<<<<<<< HEAD
        // Pulsanti selezione studio
        View::make('<nome progetto>::filament.widgets.studio-selector')
                'studios' => $this->getStudiosForSelectedArea(),
                'selectedStudio' => $this->data['selected_studio'] ?? null,
=======

        // Pulsanti selezione studio
        View::make('<nome progetto>::filament.widgets.studio-selector')
        View::make('<nome progetto>::filament.widgets.studio-selector')
        View::make('<nome progetto>::filament.widgets.studio-selector')
            ->viewData([
                'studios' => $this->getStudiosForSelectedArea(),
                'selectedStudio' => $this->data['selected_studio'] ?? null,
            ])
            ->visible(fn (): bool => $this->hasValidGeographicSelection()),

>>>>>>> laraxot/dev
        // TextInput per mostrare studio selezionato
        TextInput::make('selected_studio_name')
            ->label(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.placeholder'))
<<<<<<< HEAD
=======
            ->label(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.placeholder'))
            ->label(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.placeholder'))
>>>>>>> laraxot/dev
            ->readonly()
            ->visible(fn (): bool => !empty($this->data['selected_studio']))
            ->suffixIcon('heroicon-o-check-circle')
            ->suffixIconColor('success'),
<<<<<<< HEAD
        // Hidden field per memorizzare ID studio
        Hidden::make('selected_studio'),
### Azione Livewire Semplificata
=======

        // Hidden field per memorizzare ID studio
        Hidden::make('selected_studio'),
    ];
}
```

### Azione Livewire Semplificata

```php
>>>>>>> laraxot/dev
/**
 * Azione Livewire per selezione studio (popola TextInput)
 */
public function selectStudio(int $studioId): void
<<<<<<< HEAD
    $studio = Studio::find($studioId);
=======
{
    $studio = Studio::find($studioId);

>>>>>>> laraxot/dev
    if (!$studio || !$studio->active) {
        $this->addError('selected_studio', 'Studio non disponibile');
        return;
    }
<<<<<<< HEAD
    // Aggiorna i dati del form
    $this->data['selected_studio'] = $studioId;
    $this->data['selected_studio_name'] = $studio->name;
    // Notifica il cambio di stato
    $this->dispatch('studio-selected', studioId: $studioId, studioName: $studio->name);
## Flusso UX Semplificato
=======

    // Aggiorna i dati del form
    $this->data['selected_studio'] = $studioId;
    $this->data['selected_studio_name'] = $studio->name;

    // Notifica il cambio di stato
    $this->dispatch('studio-selected', studioId: $studioId, studioName: $studio->name);
}
```

## Flusso UX Semplificato

>>>>>>> laraxot/dev
### 1. **Step Selezione Area**
- Utente seleziona Regione → Provincia → CAP
- Live updates automatici tra i campi
- Validazione cascata
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
### 2. **Step Selezione Studio**
- Visualizzazione pulsanti per ogni studio nell'area
- Click su pulsante = selezione studio
- Visual feedback immediato (radio indicator + colori)
- TextInput readonly mostra studio selezionato
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
### 3. **Vantaggi Approccio Semplificato**
- ✅ **UX Intuitiva**: Pattern radio button familiare
- ✅ **Performance**: Meno componenti complessi
- ✅ **Manutenibilità**: Logica più semplice
- ✅ **Accessibilità**: Supporto keyboard navigation
- ✅ **Mobile Friendly**: Touch target ottimizzati
<<<<<<< HEAD
## Performance e Ottimizzazioni
### Caching Strategy
// Cache risultati studio per area
protected function getStudiosForSelectedArea(): Collection
    $cacheKey = "studios_area_{$this->data['region']}_{$this->data['province']}_{$this->data['cap']}";
=======

## Performance e Ottimizzazioni

### Caching Strategy
```php
// Cache risultati studio per area
protected function getStudiosForSelectedArea(): Collection
{
    $cacheKey = "studios_area_{$this->data['region']}_{$this->data['province']}_{$this->data['cap']}";

>>>>>>> laraxot/dev
    return cache()->remember($cacheKey, 300, function () {
        return Studio::query()
            ->active()
            ->with(['addresses'])
            ->whereHas('addresses', function ($query) {
                $query->where('region_code', $this->data['region'])
                      ->where('province_code', $this->data['province'])
                      ->where('postal_code', $this->data['cap']);
            })
            ->limit(10)
            ->get();
    });
<<<<<<< HEAD
## Testing
### Test Funzionale Semplificato
class FindDoctorWidgetStep2Test extends TestCase
=======
}
```

## Testing

### Test Funzionale Semplificato
```php
class FindDoctorWidgetStep2Test extends TestCase
{
>>>>>>> laraxot/dev
    /** @test */
    public function clicking_studio_button_populates_textinput()
    {
        $studio = Studio::factory()->create(['name' => 'Studio Test']);
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
        $widget = Livewire::test(FindDoctorAndAppointmentWidget::class)
            ->set('data.region', '12')
            ->set('data.province', 'RM')
            ->set('data.cap', '00042')
            ->call('selectStudio', $studio->id);
<<<<<<< HEAD
        $widget->assertSet('data.selected_studio', $studio->id)
               ->assertSet('data.selected_studio_name', 'Studio Test');
## Migration da Approccio Complesso
### Prima (Complesso)
- StudioCard con molte informazioni
- Azioni multiple (Prenota, Dettagli, Contatti)
- Layout complesso responsive
### Dopo (Semplificato)
- Pulsanti radio-style semplici
- Informazioni essenziali (nome, indirizzo)
- Un'azione sola: selezione studio
- TextInput readonly per conferma
## Best Practices
### 1. **Semplicità Prima di Tutto**
- Componenti focalizzati su un singolo scopo
- UX patterns familiari (radio buttons)
- Meno stato da gestire
### 2. **Performance**
- Componenti Blade leggeri
- Cache appropriato per query
- Lazy loading quando possibile
### 3. **Accessibilità**
- Supporto keyboard navigation
- ARIA labels appropriati
- Contrasti colori sufficienti
- Touch targets ottimizzati
---
**Versione**: 2.0 - Semplificato  
**Stato**: Implementation Ready  
**Approccio**: Pulsanti + TextInput (semplice e diretto) 
**Creato**: 26 Giugno 2025
# Componenti Filament per Location e Studio Selection
## Overview
Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo <nome progetto>.
## Componenti Implementati
### 1. LocationSelector Component
**Percorso**: `app/Filament/Forms/Components/LocationSelector.php`
#### Descrizione
Componente Filament per la selezione gerarchica di Regione → Provincia → CAP con aggiornamenti live e integrazione con il modulo Geo.
#### Caratteristiche
- ✅ **Selezione Gerarchica**: Regione → Provincia → CAP
- ✅ **Live Updates**: I campi si aggiornano automaticamente
- ✅ **Integrazione Geo**: Utilizza i modelli del modulo Geo
- ✅ **Validazione Cascata**: I campi dipendenti si validano automaticamente
- ✅ **Personalizzazione**: Campi field names configurabili
#### Utilizzo Base
```php
use Modules\UI\Filament\Forms\Components\LocationSelector;
// Utilizzo semplice
LocationSelector::make()
    ->required()
// Utilizzo con field names personalizzati
    ->regionField('region_code')
    ->provinceField('province_code')
    ->capField('postal_code')
```
### 2. StudioSelector Component (Semplificato)
**Percorso**: `laravel/Modules/UI/resources/views/components/ui/studio-selector.blade.php`
Componente Blade per la selezione di studi odontoiatrici tramite pulsanti radio-style che popolano un TextInput.
- ✅ **Pulsanti Radio-Style**: Selezione singola con visual feedback
- ✅ **Informazioni Compatte**: Nome, indirizzo, contatti essenziali
- ✅ **Empty States**: Gestione caso nessuno studio trovato
- ✅ **Integrazione Livewire**: wire:click automatico
- ✅ **Layout Responsive**: Ottimizzato mobile/desktop
```blade
<x-ui::ui.studio-selector
    :studios="$studios"
    :selected-studio="$selectedStudioId"
    target-field="selected_studio"
/>
## Integrazione nel FindDoctorAndAppointmentWidget
### Step 1: Search Step (Aggiornato)
protected function getSearchStepSchema(): array
    return [
            ->regionField('region')
            ->provinceField('province')
            ->capField('cap')
            ->searchable()
    ];
### Step 2: Studio Step (Semplificato)
protected function getStudioStepSchema(): array
        // Titolo step
>>>>>>> .merge_file_UagC5p
>>>>>>> .merge_file_yQxr4U
            ->viewData([
                'studiosCount' => $this->getStudiosCount(),
                'geographicArea' => $this->getGeographicAreaName(),
            ])
            ->visible(fn (): bool => $this->hasValidGeographicSelection()),
        // Pulsanti selezione studio
        View::make('<nome progetto>::filament.widgets.studio-selector')
                'studios' => $this->getStudiosForSelectedArea(),
                'selectedStudio' => $this->data['selected_studio'] ?? null,
=======

        // Pulsanti selezione studio
        View::make('<nome progetto>::filament.widgets.studio-selector')
        View::make('<nome progetto>::filament.widgets.studio-selector')
<<<<<<< HEAD
        View::make('<nome progetto>::filament.widgets.studio-selector')
=======
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
        View::make('<nome progetto>::filament.widgets.studio-selector')
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
>>>>>>> laraxot/dev
            ->viewData([
                'studios' => $this->getStudiosForSelectedArea(),
                'selectedStudio' => $this->data['selected_studio'] ?? null,
            ])
            ->visible(fn (): bool => $this->hasValidGeographicSelection()),

>>>>>>> laraxot/dev
        // TextInput per mostrare studio selezionato
        TextInput::make('selected_studio_name')
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
            ->label(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.placeholder'))
<<<<<<< HEAD
=======
            ->label(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.placeholder'))
            ->label(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.placeholder'))
<<<<<<< .merge_file_25oEIb
=======
=======
<<<<<<< .merge_file_lSz9bR
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_UagC5p
>>>>>>> .merge_file_yQxr4U
>>>>>>> laraxot/dev
            ->readonly()
            ->visible(fn (): bool => !empty($this->data['selected_studio']))
            ->suffixIcon('heroicon-o-check-circle')
            ->suffixIconColor('success'),
<<<<<<< HEAD
        // Hidden field per memorizzare ID studio
        Hidden::make('selected_studio'),
### Azione Livewire Semplificata
=======

        // Hidden field per memorizzare ID studio
        Hidden::make('selected_studio'),
    ];
}
```

### Azione Livewire Semplificata

```php
>>>>>>> laraxot/dev
/**
 * Azione Livewire per selezione studio (popola TextInput)
 */
public function selectStudio(int $studioId): void
<<<<<<< HEAD
    $studio = Studio::find($studioId);
=======
{
    $studio = Studio::find($studioId);
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< .merge_file_lSz9bR
<<<<<<< HEAD

=======
<<<<<<< HEAD
    
=======
>>>>>>> .merge_file_yQxr4U
<<<<<<< HEAD

=======
    
>>>>>>> laraxot/dev
<<<<<<< .merge_file_25oEIb
=======
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_UagC5p
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
    if (!$studio || !$studio->active) {
        $this->addError('selected_studio', 'Studio non disponibile');
        return;
    }
<<<<<<< HEAD
    // Aggiorna i dati del form
    $this->data['selected_studio'] = $studioId;
    $this->data['selected_studio_name'] = $studio->name;
<<<<<<< .merge_file_25oEIb
<<<<<<< HEAD

=======
    
=======
    // Notifica il cambio di stato
    $this->dispatch('studio-selected', studioId: $studioId, studioName: $studio->name);
## Flusso UX Semplificato
=======

    // Aggiorna i dati del form
    $this->data['selected_studio'] = $studioId;
    $this->data['selected_studio_name'] = $studio->name;
<<<<<<< HEAD

=======
<<<<<<< HEAD
    
=======
<<<<<<< HEAD

=======
    
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
>>>>>>> laraxot/dev
    // Notifica il cambio di stato
    $this->dispatch('studio-selected', studioId: $studioId, studioName: $studio->name);
}
```

## Flusso UX Semplificato

>>>>>>> laraxot/dev
### 1. **Step Selezione Area**
- Utente seleziona Regione → Provincia → CAP
- Live updates automatici tra i campi
- Validazione cascata
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
### 2. **Step Selezione Studio**
- Visualizzazione pulsanti per ogni studio nell'area
- Click su pulsante = selezione studio
- Visual feedback immediato (radio indicator + colori)
- TextInput readonly mostra studio selezionato
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
### 3. **Vantaggi Approccio Semplificato**
- ✅ **UX Intuitiva**: Pattern radio button familiare
- ✅ **Performance**: Meno componenti complessi
- ✅ **Manutenibilità**: Logica più semplice
- ✅ **Accessibilità**: Supporto keyboard navigation
- ✅ **Mobile Friendly**: Touch target ottimizzati
<<<<<<< HEAD
## Performance e Ottimizzazioni
### Caching Strategy
// Cache risultati studio per area
protected function getStudiosForSelectedArea(): Collection
    $cacheKey = "studios_area_{$this->data['region']}_{$this->data['province']}_{$this->data['cap']}";
=======

## Performance e Ottimizzazioni

### Caching Strategy
```php
// Cache risultati studio per area
protected function getStudiosForSelectedArea(): Collection
{
    $cacheKey = "studios_area_{$this->data['region']}_{$this->data['province']}_{$this->data['cap']}";
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< .merge_file_lSz9bR
<<<<<<< HEAD

=======
<<<<<<< HEAD
    
=======
>>>>>>> .merge_file_yQxr4U
<<<<<<< HEAD

=======
    
>>>>>>> laraxot/dev
<<<<<<< .merge_file_25oEIb
=======
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_UagC5p
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
    return cache()->remember($cacheKey, 300, function () {
        return Studio::query()
            ->active()
            ->with(['addresses'])
            ->whereHas('addresses', function ($query) {
                $query->where('region_code', $this->data['region'])
                      ->where('province_code', $this->data['province'])
                      ->where('postal_code', $this->data['cap']);
            })
            ->limit(10)
            ->get();
    });
<<<<<<< HEAD
## Testing
### Test Funzionale Semplificato
class FindDoctorWidgetStep2Test extends TestCase
=======
}
```

## Testing

### Test Funzionale Semplificato
```php
class FindDoctorWidgetStep2Test extends TestCase
{
>>>>>>> laraxot/dev
    /** @test */
    public function clicking_studio_button_populates_textinput()
    {
        $studio = Studio::factory()->create(['name' => 'Studio Test']);
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< .merge_file_lSz9bR

=======
<<<<<<< HEAD
        
=======
<<<<<<< HEAD
>>>>>>> .merge_file_yQxr4U

=======
        
>>>>>>> laraxot/dev
<<<<<<< .merge_file_25oEIb
=======
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_UagC5p
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
        $widget = Livewire::test(FindDoctorAndAppointmentWidget::class)
            ->set('data.region', '12')
            ->set('data.province', 'RM')
            ->set('data.cap', '00042')
            ->call('selectStudio', $studio->id);
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb

=======
            
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_lSz9bR

=======
<<<<<<< HEAD
            
=======
<<<<<<< HEAD

=======
            
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $widget->assertSet('data.selected_studio', $studio->id)
               ->assertSet('data.selected_studio_name', 'Studio Test');
## Migration da Approccio Complesso
=======

>>>>>>> .merge_file_UagC5p
>>>>>>> .merge_file_yQxr4U
=======

>>>>>>> laraxot/dev
        $widget->assertSet('data.selected_studio', $studio->id)
               ->assertSet('data.selected_studio_name', 'Studio Test');
    }
}
```

## Migration da Approccio Complesso

<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
### Prima (Complesso)
- StudioCard con molte informazioni
- Azioni multiple (Prenota, Dettagli, Contatti)
- Layout complesso responsive
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
### Dopo (Semplificato)
- Pulsanti radio-style semplici
- Informazioni essenziali (nome, indirizzo)
- Un'azione sola: selezione studio
- TextInput readonly per conferma
<<<<<<< HEAD
<<<<<<< HEAD
## Best Practices
=======

## Best Practices

>>>>>>> laraxot/dev
=======

## Best Practices

>>>>>>> laraxot/dev
### 1. **Semplicità Prima di Tutto**
- Componenti focalizzati su un singolo scopo
- UX patterns familiari (radio buttons)
- Meno stato da gestire
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
### 2. **Performance**
- Componenti Blade leggeri
- Cache appropriato per query
- Lazy loading quando possibile
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
### 3. **Accessibilità**
- Supporto keyboard navigation
- ARIA labels appropriati
- Contrasti colori sufficienti
- Touch targets ottimizzati
<<<<<<< HEAD
<<<<<<< HEAD
---
**Versione**: 2.0 - Semplificato  
**Stato**: Implementation Ready  
**Approccio**: Pulsanti + TextInput (semplice e diretto) 
=======
=======
>>>>>>> laraxot/dev

---

**Creato**: 26 Giugno 2025
**Versione**: 2.0 - Semplificato
**Stato**: Implementation Ready
**Approccio**: Pulsanti + TextInput (semplice e diretto)
<<<<<<< HEAD
<<<<<<< .merge_file_25oEIb
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_lSz9bR
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_yQxr4U
# Componenti Filament per Location e Studio Selection
## Overview
Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo <nome progetto>.
## Componenti Implementati
### 1. LocationSelector Component
**Percorso**: `app/Filament/Forms/Components/LocationSelector.php`
#### Descrizione
Componente Filament per la selezione gerarchica di Regione → Provincia → CAP con aggiornamenti live e integrazione con il modulo Geo.
#### Caratteristiche
- ✅ **Selezione Gerarchica**: Regione → Provincia → CAP
- ✅ **Live Updates**: I campi si aggiornano automaticamente
- ✅ **Integrazione Geo**: Utilizza i modelli del modulo Geo
- ✅ **Validazione Cascata**: I campi dipendenti si validano automaticamente
- ✅ **Personalizzazione**: Campi field names configurabili
#### Utilizzo Base
```php
use Modules\UI\Filament\Forms\Components\LocationSelector;
// Utilizzo semplice
LocationSelector::make()
    ->required()
// Utilizzo con field names personalizzati
    ->regionField('region_code')
    ->provinceField('province_code')
    ->capField('postal_code')
```
### 2. StudioSelector Component (Semplificato)
**Percorso**: `laravel/Modules/UI/resources/views/components/ui/studio-selector.blade.php`
Componente Blade per la selezione di studi odontoiatrici tramite pulsanti radio-style che popolano un TextInput.
- ✅ **Pulsanti Radio-Style**: Selezione singola con visual feedback
- ✅ **Informazioni Compatte**: Nome, indirizzo, contatti essenziali
- ✅ **Empty States**: Gestione caso nessuno studio trovato
- ✅ **Integrazione Livewire**: wire:click automatico
- ✅ **Layout Responsive**: Ottimizzato mobile/desktop
```blade
<x-ui::ui.studio-selector
    :studios="$studios"
    :selected-studio="$selectedStudioId"
    target-field="selected_studio"
/>
## Integrazione nel FindDoctorAndAppointmentWidget
### Step 1: Search Step (Aggiornato)
protected function getSearchStepSchema(): array
{
    return [
        LocationSelector::make()
            ->regionField('region')
            ->provinceField('province')
            ->capField('cap')
            ->required()
            ->searchable()
    ];
}
### Step 2: Studio Step (Semplificato)
protected function getStudioStepSchema(): array
        // Titolo step
        View::make('<nome progetto>::filament.widgets.studio-step-header')
        View::make('<nome progetto>::filament.widgets.studio-step-header')
            ->viewData([
                'studiosCount' => $this->getStudiosCount(),
                'geographicArea' => $this->getGeographicAreaName(),
            ])
            ->visible(fn (): bool => $this->hasValidGeographicSelection()),
        // Pulsanti selezione studio
        View::make('<nome progetto>::filament.widgets.studio-selector')
                'studios' => $this->getStudiosForSelectedArea(),
                'selectedStudio' => $this->data['selected_studio'] ?? null,
        // TextInput per mostrare studio selezionato
        TextInput::make('selected_studio_name')
            ->label(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.placeholder'))
            ->readonly()
            ->visible(fn (): bool => !empty($this->data['selected_studio']))
            ->suffixIcon('heroicon-o-check-circle')
            ->suffixIconColor('success'),
        // Hidden field per memorizzare ID studio
        Hidden::make('selected_studio'),
### Azione Livewire Semplificata
/**
 * Azione Livewire per selezione studio (popola TextInput)
 */
public function selectStudio(int $studioId): void
    $studio = Studio::find($studioId);
    if (!$studio || !$studio->active) {
        $this->addError('selected_studio', 'Studio non disponibile');
        return;
    }
    // Aggiorna i dati del form
    $this->data['selected_studio'] = $studioId;
    $this->data['selected_studio_name'] = $studio->name;
    // Notifica il cambio di stato
    $this->dispatch('studio-selected', studioId: $studioId, studioName: $studio->name);
## Flusso UX Semplificato
### 1. **Step Selezione Area**
- Utente seleziona Regione → Provincia → CAP
- Live updates automatici tra i campi
- Validazione cascata
### 2. **Step Selezione Studio**
- Visualizzazione pulsanti per ogni studio nell'area
- Click su pulsante = selezione studio
- Visual feedback immediato (radio indicator + colori)
- TextInput readonly mostra studio selezionato
### 3. **Vantaggi Approccio Semplificato**
- ✅ **UX Intuitiva**: Pattern radio button familiare
- ✅ **Performance**: Meno componenti complessi
- ✅ **Manutenibilità**: Logica più semplice
- ✅ **Accessibilità**: Supporto keyboard navigation
- ✅ **Mobile Friendly**: Touch target ottimizzati
## Performance e Ottimizzazioni
### Caching Strategy
// Cache risultati studio per area
protected function getStudiosForSelectedArea(): Collection
    $cacheKey = "studios_area_{$this->data['region']}_{$this->data['province']}_{$this->data['cap']}";
    return cache()->remember($cacheKey, 300, function () {
        return Studio::query()
            ->active()
            ->with(['addresses'])
            ->whereHas('addresses', function ($query) {
                $query->where('region_code', $this->data['region'])
                      ->where('province_code', $this->data['province'])
                      ->where('postal_code', $this->data['cap']);
            })
            ->limit(10)
            ->get();
    });
## Testing
### Test Funzionale Semplificato
class FindDoctorWidgetStep2Test extends TestCase
    /** @test */
    public function clicking_studio_button_populates_textinput()
    {
        $studio = Studio::factory()->create(['name' => 'Studio Test']);
        $widget = Livewire::test(FindDoctorAndAppointmentWidget::class)
            ->set('data.region', '12')
            ->set('data.province', 'RM')
            ->set('data.cap', '00042')
            ->call('selectStudio', $studio->id);
        $widget->assertSet('data.selected_studio', $studio->id)
               ->assertSet('data.selected_studio_name', 'Studio Test');
## Migration da Approccio Complesso
### Prima (Complesso)
- StudioCard con molte informazioni
- Azioni multiple (Prenota, Dettagli, Contatti)
- Layout complesso responsive
### Dopo (Semplificato)
- Pulsanti radio-style semplici
- Informazioni essenziali (nome, indirizzo)
- Un'azione sola: selezione studio
- TextInput readonly per conferma
## Best Practices
### 1. **Semplicità Prima di Tutto**
- Componenti focalizzati su un singolo scopo
- UX patterns familiari (radio buttons)
- Meno stato da gestire
### 2. **Performance**
- Componenti Blade leggeri
- Cache appropriato per query
- Lazy loading quando possibile
### 3. **Accessibilità**
- Supporto keyboard navigation
- ARIA labels appropriati
- Contrasti colori sufficienti
- Touch targets ottimizzati
---
**Versione**: 2.0 - Semplificato  
**Stato**: Implementation Ready  
**Approccio**: Pulsanti + TextInput (semplice e diretto) 
**Creato**: 26 Giugno 2025
# Componenti Filament per Location e Studio Selection
## Overview
Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo <nome progetto>.
## Componenti Implementati
### 1. LocationSelector Component
**Percorso**: `app/Filament/Forms/Components/LocationSelector.php`
#### Descrizione
Componente Filament per la selezione gerarchica di Regione → Provincia → CAP con aggiornamenti live e integrazione con il modulo Geo.
#### Caratteristiche
- ✅ **Selezione Gerarchica**: Regione → Provincia → CAP
- ✅ **Live Updates**: I campi si aggiornano automaticamente
- ✅ **Integrazione Geo**: Utilizza i modelli del modulo Geo
- ✅ **Validazione Cascata**: I campi dipendenti si validano automaticamente
- ✅ **Personalizzazione**: Campi field names configurabili
#### Utilizzo Base
```php
use Modules\UI\Filament\Forms\Components\LocationSelector;
// Utilizzo semplice
LocationSelector::make()
    ->required()
// Utilizzo con field names personalizzati
    ->regionField('region_code')
    ->provinceField('province_code')
    ->capField('postal_code')
```
### 2. StudioSelector Component (Semplificato)
**Percorso**: `laravel/Modules/UI/resources/views/components/ui/studio-selector.blade.php`
Componente Blade per la selezione di studi odontoiatrici tramite pulsanti radio-style che popolano un TextInput.
- ✅ **Pulsanti Radio-Style**: Selezione singola con visual feedback
- ✅ **Informazioni Compatte**: Nome, indirizzo, contatti essenziali
- ✅ **Empty States**: Gestione caso nessuno studio trovato
- ✅ **Integrazione Livewire**: wire:click automatico
- ✅ **Layout Responsive**: Ottimizzato mobile/desktop
```blade
<x-ui::ui.studio-selector
    :studios="$studios"
    :selected-studio="$selectedStudioId"
    target-field="selected_studio"
/>
## Integrazione nel FindDoctorAndAppointmentWidget
### Step 1: Search Step (Aggiornato)
protected function getSearchStepSchema(): array
    return [
            ->regionField('region')
            ->provinceField('province')
            ->capField('cap')
            ->searchable()
    ];
### Step 2: Studio Step (Semplificato)
protected function getStudioStepSchema(): array
        // Titolo step
            ->viewData([
                'studiosCount' => $this->getStudiosCount(),
                'geographicArea' => $this->getGeographicAreaName(),
            ])
            ->visible(fn (): bool => $this->hasValidGeographicSelection()),
        // Pulsanti selezione studio
        View::make('<nome progetto>::filament.widgets.studio-selector')
                'studios' => $this->getStudiosForSelectedArea(),
                'selectedStudio' => $this->data['selected_studio'] ?? null,
        // TextInput per mostrare studio selezionato
        TextInput::make('selected_studio_name')
            ->label(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.placeholder'))
            ->readonly()
            ->visible(fn (): bool => !empty($this->data['selected_studio']))
            ->suffixIcon('heroicon-o-check-circle')
            ->suffixIconColor('success'),
        // Hidden field per memorizzare ID studio
        Hidden::make('selected_studio'),
### Azione Livewire Semplificata
/**
 * Azione Livewire per selezione studio (popola TextInput)
 */
public function selectStudio(int $studioId): void
    $studio = Studio::find($studioId);
    if (!$studio || !$studio->active) {
        $this->addError('selected_studio', 'Studio non disponibile');
        return;
    }
    // Aggiorna i dati del form
    $this->data['selected_studio'] = $studioId;
    $this->data['selected_studio_name'] = $studio->name;
    // Notifica il cambio di stato
    $this->dispatch('studio-selected', studioId: $studioId, studioName: $studio->name);
## Flusso UX Semplificato
### 1. **Step Selezione Area**
- Utente seleziona Regione → Provincia → CAP
- Live updates automatici tra i campi
- Validazione cascata
### 2. **Step Selezione Studio**
- Visualizzazione pulsanti per ogni studio nell'area
- Click su pulsante = selezione studio
- Visual feedback immediato (radio indicator + colori)
- TextInput readonly mostra studio selezionato
### 3. **Vantaggi Approccio Semplificato**
- ✅ **UX Intuitiva**: Pattern radio button familiare
- ✅ **Performance**: Meno componenti complessi
- ✅ **Manutenibilità**: Logica più semplice
- ✅ **Accessibilità**: Supporto keyboard navigation
- ✅ **Mobile Friendly**: Touch target ottimizzati
## Performance e Ottimizzazioni
### Caching Strategy
// Cache risultati studio per area
protected function getStudiosForSelectedArea(): Collection
    $cacheKey = "studios_area_{$this->data['region']}_{$this->data['province']}_{$this->data['cap']}";
    return cache()->remember($cacheKey, 300, function () {
        return Studio::query()
            ->active()
            ->with(['addresses'])
            ->whereHas('addresses', function ($query) {
                $query->where('region_code', $this->data['region'])
                      ->where('province_code', $this->data['province'])
                      ->where('postal_code', $this->data['cap']);
            })
            ->limit(10)
            ->get();
    });
## Testing
### Test Funzionale Semplificato
class FindDoctorWidgetStep2Test extends TestCase
    /** @test */
    public function clicking_studio_button_populates_textinput()
    {
        $studio = Studio::factory()->create(['name' => 'Studio Test']);
        $widget = Livewire::test(FindDoctorAndAppointmentWidget::class)
            ->set('data.region', '12')
            ->set('data.province', 'RM')
            ->set('data.cap', '00042')
            ->call('selectStudio', $studio->id);
        $widget->assertSet('data.selected_studio', $studio->id)
               ->assertSet('data.selected_studio_name', 'Studio Test');
## Migration da Approccio Complesso
### Prima (Complesso)
- StudioCard con molte informazioni
- Azioni multiple (Prenota, Dettagli, Contatti)
- Layout complesso responsive
### Dopo (Semplificato)
- Pulsanti radio-style semplici
- Informazioni essenziali (nome, indirizzo)
- Un'azione sola: selezione studio
- TextInput readonly per conferma
## Best Practices
### 1. **Semplicità Prima di Tutto**
- Componenti focalizzati su un singolo scopo
- UX patterns familiari (radio buttons)
- Meno stato da gestire
### 2. **Performance**
- Componenti Blade leggeri
- Cache appropriato per query
- Lazy loading quando possibile
### 3. **Accessibilità**
- Supporto keyboard navigation
- ARIA labels appropriati
- Contrasti colori sufficienti
- Touch targets ottimizzati
---
**Versione**: 2.0 - Semplificato  
**Stato**: Implementation Ready  
**Approccio**: Pulsanti + TextInput (semplice e diretto) 

```
```
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
**Creato**: 26 Giugno 2025  
**Versione**: 2.0 - Semplificato  
**Stato**: Implementation Ready  
**Approccio**: Pulsanti + TextInput (semplice e diretto) 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_25oEIb
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_UagC5p
>>>>>>> .merge_file_yQxr4U
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
