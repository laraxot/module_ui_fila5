# StudioCardSelector Component - Modulo UI

## 🎯 **Panoramica**
Componente Filament Form altamente riutilizzabile per la selezione di studi medici/odontoiatrici attraverso un'interfaccia card visuale moderna e responsive.

## 🏗️ **Architettura Component**

<<<<<<< .merge_file_d5N5vE
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
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
=======
=======
=======
<<<<<<< HEAD
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
>>>>>>> .merge_file_lgMoeh
## 🏗️ **Architettura Component**

## 🏗️ **Architettura Component**

## 🏗️ **Architettura Component**

## 🏗️ **Architettura Component**

## 🏗️ **Architettura Component**

## 🏗️ **Architettura Component**

## 🏗️ **Architettura Component**
## 🏗️ **Architettura Component**
### Classe PHP
```php
// Modules/UI/app/Forms/Components/StudioCardSelector.php
<?php
declare(strict_types=1);
namespace Modules\UI\Forms\Components;
use Filament\Forms\Components\Field;
use Illuminate\Database\Eloquent\Collection;
use Closure;

declare(strict_types=1);
namespace Modules\UI\Forms\Components;
use Filament\Forms\Components\Field;
use Illuminate\Database\Eloquent\Collection;
use Closure;
class StudioCardSelector extends Field
{
    protected string $view = 'ui::forms.components.studio-card-selector';

    // Dati studios da visualizzare
    protected Collection|Closure|null $studios = null;

    // Personalizzazioni UI
    protected bool $showDistance = false;
    protected bool $showSpecializations = false;
    protected bool $showPhone = false;
    protected string $cardLayout = 'default'; // 'default', 'compact', 'detailed'

    // Configure studios data source
    public function studios(Collection|Closure $studios): static
    {
        $this->studios = $studios;
        return $this;
    }
    // Enable/disable features
    public function showDistance(bool $show = true): static
        $this->showDistance = $show;
    public function showSpecializations(bool $show = true): static
        $this->showSpecializations = $show;
    public function showPhone(bool $show = true): static
        $this->showPhone = $show;
    // Layout variants
    public function compact(): static
        $this->cardLayout = 'compact';
    public function detailed(): static
        $this->cardLayout = 'detailed';
    // Data getters for view
    public function getStudios(): Collection
        return $this->evaluate($this->studios) ?? collect();
    public function getCardLayout(): string
        return $this->cardLayout;
    public function shouldShowDistance(): bool
        return $this->showDistance;
    public function shouldShowSpecializations(): bool
        return $this->showSpecializations;
    public function shouldShowPhone(): bool
        return $this->showPhone;
}
```
## 🔧 **Utilizzo nel Widget**
### Implementazione Base
// Nel widget FindDoctorAndAppointmentWidget
use Modules\UI\Forms\Components\StudioCardSelector;
protected function getStudioStepSchema(): array

    // Enable/disable features
    public function showDistance(bool $show = true): static
        $this->showDistance = $show;
    public function showSpecializations(bool $show = true): static
        $this->showSpecializations = $show;
    public function showPhone(bool $show = true): static
        $this->showPhone = $show;
    // Layout variants
    public function compact(): static
        $this->cardLayout = 'compact';
    public function detailed(): static
        $this->cardLayout = 'detailed';
    // Data getters for view
    public function getStudios(): Collection
        return $this->evaluate($this->studios) ?? collect();
    public function getCardLayout(): string
        return $this->cardLayout;
    public function shouldShowDistance(): bool
        return $this->showDistance;
    public function shouldShowSpecializations(): bool
        return $this->showSpecializations;
    public function shouldShowPhone(): bool
        return $this->showPhone;
}
```
## 🔧 **Utilizzo nel Widget**
### Implementazione Base
// Nel widget FindDoctorAndAppointmentWidget
use Modules\UI\Forms\Components\StudioCardSelector;
protected function getStudioStepSchema(): array
    return [
        'selected_studio' => StudioCardSelector::make('selected_studio')
            ->studios(fn (Get $get) => $this->getStudiosForLocation($get))
            ->showDistance()
            ->showPhone()
            ->required()
    ];
private function getStudiosForLocation(Get $get): Collection
    $cap = $get('cap');
    $province = $get('province');
    $region = $get('region');
    if (!$cap || !$province || !$region) {
        return collect();
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\<nome progetto>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
}

    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\<nome progetto>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
}

private function getStudiosForLocation(Get $get): Collection
    $cap = $get('cap');
    $province = $get('province');
    $region = $get('region');
    if (!$cap || !$province || !$region) {
        return collect();
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\<nome progetto>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\<nome progetto>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\<nome progetto>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
        $q->where('postal_code', $cap)
          ->where('administrative_area_level_3', $province)
          ->where('administrative_area_level_2', $region);
    })
    ->where('active', true)
    ->with(['address', 'doctors', 'specializations'])
    ->get();
}
```

## 🌐 **Sistema Traduzioni**
### File Traduzioni UI
// Modules/UI/lang/it/studio-selector.php
}
```

## 🌐 **Sistema Traduzioni**
### File Traduzioni UI
// Modules/UI/lang/it/studio-selector.php
## 🌐 **Sistema Traduzioni**
### File Traduzioni UI
// Modules/UI/lang/it/studio-selector.php
return [
    'actions' => [
        'select' => [
            'label' => 'Seleziona',
            'description' => 'Scegli questo studio',
        ],
    ],
    'empty' => [
        'title' => 'Nessuno studio trovato',
        'description' => 'Non ci sono studi disponibili per la zona selezionata.',
    ],
    ],
    ],
    ],
    ],
    ],
    'fields' => [
        'distance' => [
            'label' => 'Distanza',
            'helper_text' => 'Distanza approssimativa dalla tua posizione',
        'phone' => [
            'label' => 'Telefono',
            'helper_text' => 'Numero di telefono dello studio',
        'specializations' => [
            'label' => 'Specializzazioni',
            'helper_text' => 'Servizi offerti dallo studio',
];
## 📖 **Collegamenti Documentazione**
### Modulo UI
- [Components Overview](./components.md)
- [Form Components Guide](./form-components.md)
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
### Modulo <nome progetto>
- [Widget Analysis](../<nome progetto>/docs/widgets/find-doctor-widget-studio-step-analysis.md)

---
**Component Status**: 📋 Documented - Ready for Implementation
**Reusability**: 🔄 High - Cross-module compatible
<<<<<<< .merge_file_d5N5vE
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_bCpari


=======
<<<<<<< HEAD
**Last Updated**: January 2025
**Last Updated**: January 2025
=======
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)


=======
**Last Updated**: January 2025
**Last Updated**: January 2025
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
**Last Updated**: January 2025
**Last Updated**: January 2025
=======


>>>>>>> .merge_file_7dmUyq
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======


>>>>>>> .merge_file_lgMoeh
        ],

---
**Component Status**: 📋 Documented - Ready for Implementation
**Reusability**: 🔄 High - Cross-module compatible
<<<<<<< .merge_file_d5N5vE
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_bCpari
=======

>>>>>>> 804451c (Lint)

=======
**Last Updated**: January 2025
**Last Updated**: January 2025
<<<<<<< HEAD
=======
>>>>>>> .merge_file_7dmUyq

=======
<<<<<<< HEAD
**Last Updated**: January 2025
**Last Updated**: January 2025
=======
<<<<<<< HEAD

<<<<<<< .merge_file_bCpari

=======
**Last Updated**: January 2025
**Last Updated**: January 2025
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_7dmUyq
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======


>>>>>>> .merge_file_lgMoeh
        ],
        'phone' => [
            'label' => 'Telefono',
            'helper_text' => 'Numero di telefono dello studio',
        'specializations' => [
            'label' => 'Specializzazioni',
            'helper_text' => 'Servizi offerti dallo studio',
];
## 📖 **Collegamenti Documentazione**
### Modulo UI
- [Components Overview](./components.md)
- [Form Components Guide](./form-components.md)
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
### Modulo <nome progetto>
- [Widget Analysis](../<nome progetto>/docs/widgets/find-doctor-widget-studio-step-analysis.md)

---
**Component Status**: 📋 Documented - Ready for Implementation
**Reusability**: 🔄 High - Cross-module compatible
<<<<<<< .merge_file_d5N5vE
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_bCpari
=======
>>>>>>> 804451c (Lint)



=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> .merge_file_7dmUyq
**Last Updated**: January 2025
**Last Updated**: January 2025
**Last Updated**: January 2025
=======
<<<<<<< .merge_file_bCpari
<<<<<<< HEAD


=======
>>>>>>> .merge_file_7dmUyq

=======
**Last Updated**: January 2025
**Last Updated**: January 2025
**Last Updated**: January 2025
>>>>>>> laraxot/dev
=======
**Last Updated**: January 2025
**Last Updated**: January 2025
**Last Updated**: January 2025
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev

---
**Component Status**: 📋 Documented - Ready for Implementation
**Reusability**: 🔄 High - Cross-module compatible
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

>>>>>>> laraxot/dev

>>>>>>> laraxot/dev
=======


>>>>>>> 804451c (Lint)
=======



>>>>>>> .merge_file_lgMoeh

---
**Component Status**: 📋 Documented - Ready for Implementation
**Reusability**: 🔄 High - Cross-module compatible
<<<<<<< .merge_file_d5N5vE
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
>>>>>>> 804451c (Lint)
**Last Updated**: January 2025
**Last Updated**: January 2025
**Last Updated**: January 2025
---
**Component Status**: 📋 Documented - Ready for Implementation
**Reusability**: 🔄 High - Cross-module compatible
**Last Updated**: January 2025
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_lgMoeh



---
**Component Status**: 📋 Documented - Ready for Implementation
**Reusability**: 🔄 High - Cross-module compatible

<<<<<<< .merge_file_d5N5vE
<<<<<<< .merge_file_bCpari
=======
=======
>>>>>>> laraxot/dev
**Last Updated**: January 2025
**Last Updated**: January 2025
**Last Updated**: January 2025
---
**Component Status**: 📋 Documented - Ready for Implementation
**Reusability**: 🔄 High - Cross-module compatible
**Last Updated**: January 2025
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_7dmUyq
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_lgMoeh
# StudioCardSelector Component - Modulo UI

## 🎯 **Panoramica**
Componente Filament Form altamente riutilizzabile per la selezione di studi medici/odontoiatrici attraverso un'interfaccia card visuale moderna e responsive.

## 🏗️ **Architettura Component**

<<<<<<< .merge_file_d5N5vE
<<<<<<< HEAD
### Classe PHP
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
### Classe PHP
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
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
### Classe PHP
<<<<<<< HEAD
<<<<<<< .merge_file_bCpari
```

<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
```

=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_7dmUyq
=======
```

>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
### Classe PHP
>>>>>>> .merge_file_lgMoeh
```php
// Modules/UI/app/Forms/Components/StudioCardSelector.php
<?php

declare(strict_types=1);

namespace Modules\UI\Forms\Components;

use Filament\Forms\Components\Field;
use Illuminate\Database\Eloquent\Collection;
use Closure;

class StudioCardSelector extends Field
{
    protected string $view = 'ui::forms.components.studio-card-selector';
<<<<<<< .merge_file_d5N5vE
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_bCpari
=======
>>>>>>> 804451c (Lint)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_7dmUyq
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
    
    // Dati studios da visualizzare
    protected Collection|Closure|null $studios = null;
    
<<<<<<< HEAD
<<<<<<< .merge_file_bCpari
=======
>>>>>>> 804451c (Lint)
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_7dmUyq
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_lgMoeh

    // Dati studios da visualizzare
    protected Collection|Closure|null $studios = null;

<<<<<<< .merge_file_d5N5vE
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_lgMoeh
    // Personalizzazioni UI
    protected bool $showDistance = false;
    protected bool $showSpecializations = false;
    protected bool $showPhone = false;
    protected string $cardLayout = 'default'; // 'default', 'compact', 'detailed'
<<<<<<< .merge_file_d5N5vE
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_lgMoeh
    // Configure studios data source
    public function studios(Collection|Closure $studios): static
    {
        $this->studios = $studios;
        return $this;
    }
<<<<<<< .merge_file_d5N5vE
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_lgMoeh
    // Enable/disable features
    public function showDistance(bool $show = true): static
    {
        $this->showDistance = $show;
        return $this;
    }
<<<<<<< .merge_file_d5N5vE
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_lgMoeh
    public function showSpecializations(bool $show = true): static
    {
        $this->showSpecializations = $show;
        return $this;
    }
<<<<<<< .merge_file_d5N5vE
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_lgMoeh
    public function showPhone(bool $show = true): static
    {
        $this->showPhone = $show;
        return $this;
    }
<<<<<<< .merge_file_d5N5vE
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_lgMoeh
    // Layout variants
    public function compact(): static
    {
        $this->cardLayout = 'compact';
        return $this;
    }
<<<<<<< .merge_file_d5N5vE
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_lgMoeh
    public function detailed(): static
    {
        $this->cardLayout = 'detailed';
        return $this;
    }
<<<<<<< .merge_file_d5N5vE
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_lgMoeh
    // Data getters for view
    public function getStudios(): Collection
    {
        return $this->evaluate($this->studios) ?? collect();
    }
<<<<<<< .merge_file_d5N5vE
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_lgMoeh
    public function getCardLayout(): string
    {
        return $this->cardLayout;
    }
<<<<<<< .merge_file_d5N5vE
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_lgMoeh
    public function shouldShowDistance(): bool
    {
        return $this->showDistance;
    }
<<<<<<< .merge_file_d5N5vE
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_lgMoeh
    public function shouldShowSpecializations(): bool
    {
        return $this->showSpecializations;
    }
<<<<<<< .merge_file_d5N5vE
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_lgMoeh
    public function shouldShowPhone(): bool
    {
        return $this->showPhone;
    }
}
```

## 🔧 **Utilizzo nel Widget**

### Implementazione Base
```php
// Nel widget FindDoctorAndAppointmentWidget
use Modules\UI\Forms\Components\StudioCardSelector;

protected function getStudioStepSchema(): array
{
    return [
        'selected_studio' => StudioCardSelector::make('selected_studio')
            ->studios(fn (Get $get) => $this->getStudiosForLocation($get))
            ->showDistance()
            ->showPhone()
            ->required()
    ];
}

private function getStudiosForLocation(Get $get): Collection
{
    $cap = $get('cap');
<<<<<<< .merge_file_d5N5vE
<<<<<<< HEAD
    $province = $get('province');
    $region = $get('region');

<<<<<<< HEAD
<<<<<<< .merge_file_bCpari
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
    $province = $get('province');
    $region = $get('region');

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
    $province = $get('province');
    $region = $get('region');

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> .merge_file_7dmUyq
=======
>>>>>>> 804451c (Lint)
    $province = $get('province'); 
    $region = $get('region');
    
    if (!$cap || !$province || !$region) {
        return collect();
    }
    
    return \Modules\<nome progetto>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
<<<<<<< HEAD
<<<<<<< .merge_file_bCpari
<<<<<<< HEAD
=======
>>>>>>> .merge_file_7dmUyq
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
    $province = $get('province');
    $region = $get('region');
    
=======
<<<<<<< HEAD
<<<<<<< .merge_file_bCpari
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    $province = $get('province');
    $region = $get('region');
    
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
>>>>>>> .merge_file_7dmUyq
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
    $province = $get('province');
    $region = $get('region');

>>>>>>> .merge_file_lgMoeh
    if (!$cap || !$province || !$region) {
        return collect();
    }

    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
<<<<<<< .merge_file_d5N5vE
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_lgMoeh
        $q->where('postal_code', $cap)
          ->where('administrative_area_level_3', $province)
          ->where('administrative_area_level_2', $region);
    })
    ->where('active', true)
    ->with(['address', 'doctors', 'specializations'])
    ->get();
}
```

## 🌐 **Sistema Traduzioni**

### File Traduzioni UI
```php
// Modules/UI/lang/it/studio-selector.php
<?php

return [
    'actions' => [
        'select' => [
            'label' => 'Seleziona',
            'description' => 'Scegli questo studio',
        ],
    ],
    'empty' => [
        'title' => 'Nessuno studio trovato',
        'description' => 'Non ci sono studi disponibili per la zona selezionata.',
    ],
    'fields' => [
        'distance' => [
            'label' => 'Distanza',
            'helper_text' => 'Distanza approssimativa dalla tua posizione',
        ],
        'phone' => [
            'label' => 'Telefono',
            'helper_text' => 'Numero di telefono dello studio',
        ],
        'specializations' => [
            'label' => 'Specializzazioni',
            'helper_text' => 'Servizi offerti dallo studio',
        ],
    ],
];
```

## 📖 **Collegamenti Documentazione**

### Modulo UI
- [Components Overview](./components.md)
- [Form Components Guide](./form-components.md)

<<<<<<< .merge_file_d5N5vE
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_bCpari
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
### Modulo <nome progetto>
- [Widget Analysis](../<nome progetto>/docs/widgets/find-doctor-widget-studio-step-analysis.md)

---

**Component Status**: 📋 Documented - Ready for Implementation  
**Reusability**: 🔄 High - Cross-module compatible  
**Last Updated**: January 2025
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
---
**Component Status**: 📋 Documented - Ready for Implementation
**Reusability**: 🔄 High - Cross-module compatible
=======
>>>>>>> .merge_file_7dmUyq
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_lgMoeh
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)

---

**Component Status**: 📋 Documented - Ready for Implementation
**Reusability**: 🔄 High - Cross-module compatible



<<<<<<< .merge_file_d5N5vE
<<<<<<< HEAD
<<<<<<< .merge_file_bCpari
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
### Modulo <nome progetto>
- [Widget Analysis](../<nome progetto>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
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
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
### Modulo <nome progetto>
- [Widget Analysis](../<nome progetto>/docs/widgets/find-doctor-widget-studio-step-analysis.md)

---

**Component Status**: 📋 Documented - Ready for Implementation  
**Reusability**: 🔄 High - Cross-module compatible  
<<<<<<< HEAD
**Last Updated**: January 2025
=======
<<<<<<< HEAD
**Last Updated**: January 2025
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
>>>>>>> laraxot/dev

---

**Component Status**: 📋 Documented - Ready for Implementation  
**Reusability**: 🔄 High - Cross-module compatible  
**Last Updated**: January 2025
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
---
**Component Status**: 📋 Documented - Ready for Implementation
**Reusability**: 🔄 High - Cross-module compatible
<<<<<<< HEAD
=======
**Last Updated**: January 2025
**Last Updated**: January 2025
**Last Updated**: January 2025
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
**Last Updated**: January 2025
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
>>>>>>> .merge_file_7dmUyq
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_lgMoeh
