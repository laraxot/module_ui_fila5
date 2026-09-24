<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_RoN8Qw
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
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_1mok7I
---
module: theme
topic: best_practices
canonical: ../../../Themes/docs/shared-components/best-practices_1.md
---

<<<<<<< .merge_file_RoN8Qw
<<<<<<< HEAD
See canonical documentation: ../../../Themes/docs/shared-components/best-practices_1.md
=======
<<<<<<< HEAD
See canonical documentation: ../../../Themes/docs/shared-components/best-practices_1.md
=======
<<<<<<< HEAD
See canonical documentation: ../../../Themes/docs/shared-components/best-practices_1.md
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
# Best Practices UI
## Principi Generali
=======
# Best Practices UI

## Principi Generali

>>>>>>> 0dadab4 (Lint)
### 1. Consistenza
- Utilizzare componenti standard
- Mantenere uno stile uniforme
- Seguire le convenzioni di naming
- Riutilizzare pattern comuni
<<<<<<< HEAD
=======

>>>>>>> 0dadab4 (Lint)
### 2. Accessibilità
- Supportare la navigazione da tastiera
- Utilizzare attributi ARIA
- Mantenere contrasto adeguato
- Fornire testi alternativi
<<<<<<< HEAD
=======

>>>>>>> 0dadab4 (Lint)
### 3. Performance
- Ottimizzare il caricamento
- Minimizzare le dipendenze
- Utilizzare lazy loading
- Implementare caching
<<<<<<< HEAD
=======

>>>>>>> 0dadab4 (Lint)
### 4. Responsive Design
- Mobile-first approach
- Breakpoint standard
- Layout fluidi
- Testing multi-device
<<<<<<< HEAD
## Sviluppo Componenti
=======

## Sviluppo Componenti

>>>>>>> 0dadab4 (Lint)
### 1. Struttura
```php
class CustomComponent extends Component
{
    // Proprietà pubbliche con type hint
    public string $label;
    public ?string $hint = null;
<<<<<<< HEAD
    // Proprietà private per stato interno
    private bool $isLoading = false;
=======

    // Proprietà private per stato interno
    private bool $isLoading = false;

>>>>>>> 0dadab4 (Lint)
    // Metodi pubblici con return type
    public function render(): View
    {
        return view('ui::components.custom');
    }
}
```
<<<<<<< HEAD
=======

>>>>>>> 0dadab4 (Lint)
### 2. Template
```blade
<div class="custom-component">
    {{-- Utilizzare slot nominati --}}
    <div class="header">
        {{ $header ?? '' }}
    </div>
<<<<<<< HEAD
    {{-- Gestire stati condizionali --}}
    <div class="content {{ $isLoading ? 'loading' : '' }}">
        {{ $slot }}
    {{-- Fornire fallback --}}
    <div class="footer">
        {{ $footer ?? 'Default Footer' }}
</div>
=======

    {{-- Gestire stati condizionali --}}
    <div class="content {{ $isLoading ? 'loading' : '' }}">
        {{ $slot }}
    </div>

    {{-- Fornire fallback --}}
    <div class="footer">
        {{ $footer ?? 'Default Footer' }}
    </div>
</div>
```

>>>>>>> 0dadab4 (Lint)
### 3. Stili
```scss
// Utilizzare BEM naming
.custom-component {
    &__header { }
    &__content { }
    &__footer { }
<<<<<<< HEAD
    // Stati
    &--loading { }
    &--disabled { }
    // Varianti
    &--primary { }
    &--secondary { }
## Form Components
### 1. Validazione
=======

    // Stati
    &--loading { }
    &--disabled { }

    // Varianti
    &--primary { }
    &--secondary { }
}
```

## Form Components

### 1. Validazione
```php
>>>>>>> 0dadab4 (Lint)
// Definire regole di validazione
public array $rules = [
    'email' => ['required', 'email'],
    'password' => ['required', 'min:8'],
];
<<<<<<< HEAD
// Messaggi personalizzati
public array $messages = [
    'email.required' => 'trans.validation.email.required',
### 2. Eventi
// Emettere eventi standard
$this->emit('saved');
$this->emit('deleted', $id);
// Ascoltare eventi
protected $listeners = [
    'refresh' => '$refresh',
### 3. Loading States
// Gestire stati di caricamento
public function save()
    $this->loading = true;
    // ...
    $this->loading = false;
## Table Components
### 1. Configurazione
// Definire colonne in modo chiaro
protected function getColumns(): array
=======

// Messaggi personalizzati
public array $messages = [
    'email.required' => 'trans.validation.email.required',
];
```

### 2. Eventi
```php
// Emettere eventi standard
$this->emit('saved');
$this->emit('deleted', $id);

// Ascoltare eventi
protected $listeners = [
    'refresh' => '$refresh',
];
```

### 3. Loading States
```php
// Gestire stati di caricamento
public function save()
{
    $this->loading = true;
    // ...
    $this->loading = false;
}
```

## Table Components

### 1. Configurazione
```php
// Definire colonne in modo chiaro
protected function getColumns(): array
{
>>>>>>> 0dadab4 (Lint)
    return [
        Column::make('name')->sortable()->searchable(),
        Column::make('email')->searchable(),
    ];
<<<<<<< HEAD
// Configurare filtri
protected function getFilters(): array
        Filter::make('active')->query(fn ($query) => $query->where('active', true)),
### 2. Actions
// Definire azioni in modo modulare
protected function getActions(): array
        Action::make('edit')->visible(fn ($record) => $this->can('edit', $record)),
        Action::make('delete')->requiresConfirmation(),
## Chart Components
### 1. Dati
// Formattare dati in modo standard
protected function getData(): array
=======
}

// Configurare filtri
protected function getFilters(): array
{
    return [
        Filter::make('active')->query(fn ($query) => $query->where('active', true)),
    ];
}
```

### 2. Actions
```php
// Definire azioni in modo modulare
protected function getActions(): array
{
    return [
        Action::make('edit')->visible(fn ($record) => $this->can('edit', $record)),
        Action::make('delete')->requiresConfirmation(),
    ];
}
```

## Chart Components

### 1. Dati
```php
// Formattare dati in modo standard
protected function getData(): array
{
    return [
>>>>>>> 0dadab4 (Lint)
        'labels' => ['Gen', 'Feb', 'Mar'],
        'datasets' => [
            [
                'label' => 'Vendite',
                'data' => [10, 20, 30],
            ],
        ],
<<<<<<< HEAD
### 2. Opzioni
// Configurare opzioni in modo chiaro
protected function getOptions(): array
=======
    ];
}
```

### 2. Opzioni
```php
// Configurare opzioni in modo chiaro
protected function getOptions(): array
{
    return [
>>>>>>> 0dadab4 (Lint)
        'responsive' => true,
        'maintainAspectRatio' => false,
        'plugins' => [
            'legend' => [
                'position' => 'bottom',
<<<<<<< HEAD
## Testing
### 1. Unit Tests
public function test_component_renders()
    $component = Livewire::test(CustomComponent::class);
    $component->assertSee('Expected Content');
### 2. Browser Tests
public function test_component_interaction()
    $this->browse(function (Browser $browser) {
        $browser->visit('/page')
            ->click('@button')
            ->assertSee('Result');
    });
## Documentazione
### 1. PHPDoc
/**
 * Componente per la gestione di form avanzati.
 *
 * @property string $label Label del componente
 * @property string|null $hint Suggerimento opzionale
 * @method void save() Salva i dati del form
 * @method void reset() Resetta il form
 */
class AdvancedForm extends Component
### 2. README
- Descrizione chiara
- Esempi di utilizzo
- Configurazioni disponibili
### Versione HEAD
- Breaking changes
## Collegamenti tra versioni di best-practices.md
* [best-practices.md](docs/tecnico/filament/best-practices.md)
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
### Versione Incoming
---
<<<<<<< HEAD
* [best-practices.md](../../../Xot/project_docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/project_docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/project_docs/best-practices.md)
module: theme
topic: best_practices
canonical: ../../../Themes/docs/shared-components/best-practices_1.md
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
See canonical documentation: ../../../Themes/docs/shared-components/best-practices_1.md
# Best Practices UI
## Principi Generali
=======
>>>>>>> .merge_file_1mok7I
# Best Practices UI

## Principi Generali

>>>>>>> laraxot/dev
### 1. Consistenza
- Utilizzare componenti standard
- Mantenere uno stile uniforme
- Seguire le convenzioni di naming
- Riutilizzare pattern comuni
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
### 2. Accessibilità
- Supportare la navigazione da tastiera
- Utilizzare attributi ARIA
- Mantenere contrasto adeguato
- Fornire testi alternativi
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
### 3. Performance
- Ottimizzare il caricamento
- Minimizzare le dipendenze
- Utilizzare lazy loading
- Implementare caching
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
### 4. Responsive Design
- Mobile-first approach
- Breakpoint standard
- Layout fluidi
- Testing multi-device
<<<<<<< HEAD
## Sviluppo Componenti
=======

## Sviluppo Componenti

>>>>>>> laraxot/dev
### 1. Struttura
```php
class CustomComponent extends Component
{
    // Proprietà pubbliche con type hint
    public string $label;
    public ?string $hint = null;
<<<<<<< HEAD
    // Proprietà private per stato interno
    private bool $isLoading = false;
=======

    // Proprietà private per stato interno
    private bool $isLoading = false;

>>>>>>> laraxot/dev
    // Metodi pubblici con return type
    public function render(): View
    {
        return view('ui::components.custom');
    }
}
```
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
### 2. Template
```blade
<div class="custom-component">
    {{-- Utilizzare slot nominati --}}
    <div class="header">
        {{ $header ?? '' }}
    </div>
<<<<<<< HEAD
    {{-- Gestire stati condizionali --}}
    <div class="content {{ $isLoading ? 'loading' : '' }}">
        {{ $slot }}
    {{-- Fornire fallback --}}
    <div class="footer">
        {{ $footer ?? 'Default Footer' }}
</div>
=======

    {{-- Gestire stati condizionali --}}
    <div class="content {{ $isLoading ? 'loading' : '' }}">
        {{ $slot }}
    </div>

    {{-- Fornire fallback --}}
    <div class="footer">
        {{ $footer ?? 'Default Footer' }}
    </div>
</div>
```

>>>>>>> laraxot/dev
### 3. Stili
```scss
// Utilizzare BEM naming
.custom-component {
    &__header { }
    &__content { }
    &__footer { }
<<<<<<< HEAD
    // Stati
    &--loading { }
    &--disabled { }
    // Varianti
    &--primary { }
    &--secondary { }
## Form Components
### 1. Validazione
=======

    // Stati
    &--loading { }
    &--disabled { }

    // Varianti
    &--primary { }
    &--secondary { }
}
```

## Form Components

### 1. Validazione
```php
>>>>>>> laraxot/dev
// Definire regole di validazione
public array $rules = [
    'email' => ['required', 'email'],
    'password' => ['required', 'min:8'],
];
<<<<<<< HEAD
// Messaggi personalizzati
public array $messages = [
    'email.required' => 'trans.validation.email.required',
### 2. Eventi
// Emettere eventi standard
$this->emit('saved');
$this->emit('deleted', $id);
// Ascoltare eventi
protected $listeners = [
    'refresh' => '$refresh',
### 3. Loading States
// Gestire stati di caricamento
public function save()
    $this->loading = true;
    // ...
    $this->loading = false;
## Table Components
### 1. Configurazione
// Definire colonne in modo chiaro
protected function getColumns(): array
=======

// Messaggi personalizzati
public array $messages = [
    'email.required' => 'trans.validation.email.required',
];
```

### 2. Eventi
```php
// Emettere eventi standard
$this->emit('saved');
$this->emit('deleted', $id);

// Ascoltare eventi
protected $listeners = [
    'refresh' => '$refresh',
];
```

### 3. Loading States
```php
// Gestire stati di caricamento
public function save()
{
    $this->loading = true;
    // ...
    $this->loading = false;
}
```

## Table Components

### 1. Configurazione
```php
// Definire colonne in modo chiaro
protected function getColumns(): array
{
>>>>>>> laraxot/dev
    return [
        Column::make('name')->sortable()->searchable(),
        Column::make('email')->searchable(),
    ];
<<<<<<< HEAD
// Configurare filtri
protected function getFilters(): array
        Filter::make('active')->query(fn ($query) => $query->where('active', true)),
### 2. Actions
// Definire azioni in modo modulare
protected function getActions(): array
        Action::make('edit')->visible(fn ($record) => $this->can('edit', $record)),
        Action::make('delete')->requiresConfirmation(),
## Chart Components
### 1. Dati
// Formattare dati in modo standard
protected function getData(): array
=======
}

// Configurare filtri
protected function getFilters(): array
{
    return [
        Filter::make('active')->query(fn ($query) => $query->where('active', true)),
    ];
}
```

### 2. Actions
```php
// Definire azioni in modo modulare
protected function getActions(): array
{
    return [
        Action::make('edit')->visible(fn ($record) => $this->can('edit', $record)),
        Action::make('delete')->requiresConfirmation(),
    ];
}
```

## Chart Components

### 1. Dati
```php
// Formattare dati in modo standard
protected function getData(): array
{
    return [
>>>>>>> laraxot/dev
        'labels' => ['Gen', 'Feb', 'Mar'],
        'datasets' => [
            [
                'label' => 'Vendite',
                'data' => [10, 20, 30],
            ],
        ],
<<<<<<< HEAD
### 2. Opzioni
// Configurare opzioni in modo chiaro
protected function getOptions(): array
=======
    ];
}
```

### 2. Opzioni
```php
// Configurare opzioni in modo chiaro
protected function getOptions(): array
{
    return [
>>>>>>> laraxot/dev
        'responsive' => true,
        'maintainAspectRatio' => false,
        'plugins' => [
            'legend' => [
                'position' => 'bottom',
<<<<<<< HEAD
## Testing
### 1. Unit Tests
public function test_component_renders()
    $component = Livewire::test(CustomComponent::class);
    $component->assertSee('Expected Content');
### 2. Browser Tests
public function test_component_interaction()
=======
=======
>>>>>>> 0dadab4 (Lint)
            ],
        ],
    ];
}
```

## Testing

### 1. Unit Tests
```php
public function test_component_renders()
{
    $component = Livewire::test(CustomComponent::class);
    $component->assertSee('Expected Content');
}
```

### 2. Browser Tests
```php
public function test_component_interaction()
{
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    $this->browse(function (Browser $browser) {
        $browser->visit('/page')
            ->click('@button')
            ->assertSee('Result');
    });
<<<<<<< HEAD
<<<<<<< HEAD
## Documentazione
### 1. PHPDoc
=======
=======
>>>>>>> 0dadab4 (Lint)
}
```

## Documentazione

### 1. PHPDoc
```php
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
/**
 * Componente per la gestione di form avanzati.
 *
 * @property string $label Label del componente
 * @property string|null $hint Suggerimento opzionale
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
>>>>>>> laraxot/dev
=======
 *
>>>>>>> 0dadab4 (Lint)
 * @method void save() Salva i dati del form
 * @method void reset() Resetta il form
 */
class AdvancedForm extends Component
<<<<<<< HEAD
<<<<<<< HEAD
=======
```

>>>>>>> laraxot/dev
=======
```

>>>>>>> 0dadab4 (Lint)
### 2. README
- Descrizione chiara
- Esempi di utilizzo
- Configurazioni disponibili
### Versione HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Breaking changes
## Collegamenti tra versioni di best-practices.md
* [best-practices.md](docs/tecnico/filament/best-practices.md)
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
### Versione Incoming
---
* [best-practices.md](../../../Xot/project_docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/project_docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/project_docs/best-practices.md)
module: theme
topic: best_practices
canonical: ../../../Themes/docs/shared-components/best-practices_1.md
=======
=======
>>>>>>> 0dadab4 (Lint)

- Breaking changes
## Collegamenti tra versioni di best-practices.md
* [best-practices.md](docs/tecnico/filament/best-practices.md)
<<<<<<< HEAD
<<<<<<< HEAD
* [best-practices.md](../../../xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../ui/docs/best-practices.md)
* [best-practices.md](../../../../themes/one/docs/best-practices.md)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
* [best-practices.md](../../../xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../ui/docs/best-practices.md)
* [best-practices.md](../../../../themes/one/docs/best-practices.md)
=======
>>>>>>> laraxot/dev
* [best-practices.md](../../../Xot/project_docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/project_docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/project_docs/best-practices.md)
* [best-practices.md](../../../Xot/project_docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/project_docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/project_docs/best-practices.md)
* [best-practices.md](../../../Xot/project_docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/project_docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/project_docs/best-practices.md)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
* [best-practices.md](../../../xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../ui/docs/best-practices.md)
* [best-practices.md](../../../../themes/one/docs/best-practices.md)
>>>>>>> 0dadab4 (Lint)

### Versione Incoming

- Breaking changes

---
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
# Best Practices UI

## Principi Generali

### 1. Consistenza
- Utilizzare componenti standard
- Mantenere uno stile uniforme
- Seguire le convenzioni di naming
- Riutilizzare pattern comuni

### 2. Accessibilità
- Supportare la navigazione da tastiera
- Utilizzare attributi ARIA
- Mantenere contrasto adeguato
- Fornire testi alternativi

### 3. Performance
- Ottimizzare il caricamento
- Minimizzare le dipendenze
- Utilizzare lazy loading
- Implementare caching

### 4. Responsive Design
- Mobile-first approach
- Breakpoint standard
- Layout fluidi
- Testing multi-device

## Sviluppo Componenti

### 1. Struttura
```php
class CustomComponent extends Component
{
    // Proprietà pubbliche con type hint
    public string $label;
    public ?string $hint = null;

    // Proprietà private per stato interno
    private bool $isLoading = false;

    // Metodi pubblici con return type
    public function render(): View
    {
        return view('ui::components.custom');
    }
}
```

### 2. Template
```blade
<div class="custom-component">
    {{-- Utilizzare slot nominati --}}
    <div class="header">
        {{ $header ?? '' }}
    </div>

    {{-- Gestire stati condizionali --}}
    <div class="content {{ $isLoading ? 'loading' : '' }}">
        {{ $slot }}
    </div>

    {{-- Fornire fallback --}}
    <div class="footer">
        {{ $footer ?? 'Default Footer' }}
    </div>
</div>
```

### 3. Stili
```scss
// Utilizzare BEM naming
.custom-component {
    &__header { }
    &__content { }
    &__footer { }

    // Stati
    &--loading { }
    &--disabled { }

    // Varianti
    &--primary { }
    &--secondary { }
}
```

## Form Components

### 1. Validazione
```php
// Definire regole di validazione
public array $rules = [
    'email' => ['required', 'email'],
    'password' => ['required', 'min:8'],
];

// Messaggi personalizzati
public array $messages = [
    'email.required' => 'trans.validation.email.required',
];
```

### 2. Eventi
```php
// Emettere eventi standard
$this->emit('saved');
$this->emit('deleted', $id);

// Ascoltare eventi
protected $listeners = [
    'refresh' => '$refresh',
];
```

### 3. Loading States
```php
// Gestire stati di caricamento
public function save()
{
    $this->loading = true;
    // ...
    $this->loading = false;
}
```

## Table Components

### 1. Configurazione
```php
// Definire colonne in modo chiaro
protected function getColumns(): array
{
    return [
        Column::make('name')->sortable()->searchable(),
        Column::make('email')->searchable(),
    ];
}

// Configurare filtri
protected function getFilters(): array
{
    return [
        Filter::make('active')->query(fn ($query) => $query->where('active', true)),
    ];
}
```

### 2. Actions
```php
// Definire azioni in modo modulare
protected function getActions(): array
{
    return [
        Action::make('edit')->visible(fn ($record) => $this->can('edit', $record)),
        Action::make('delete')->requiresConfirmation(),
    ];
}
```

## Chart Components

### 1. Dati
```php
// Formattare dati in modo standard
protected function getData(): array
{
    return [
        'labels' => ['Gen', 'Feb', 'Mar'],
        'datasets' => [
            [
                'label' => 'Vendite',
                'data' => [10, 20, 30],
            ],
        ],
    ];
}
```

### 2. Opzioni
```php
// Configurare opzioni in modo chiaro
protected function getOptions(): array
{
    return [
        'responsive' => true,
        'maintainAspectRatio' => false,
        'plugins' => [
            'legend' => [
                'position' => 'bottom',
            ],
        ],
    ];
}
```

## Testing

### 1. Unit Tests
```php
public function test_component_renders()
{
    $component = Livewire::test(CustomComponent::class);
    $component->assertSee('Expected Content');
}
```

### 2. Browser Tests
```php
public function test_component_interaction()
{
    $this->browse(function (Browser $browser) {
        $browser->visit('/page')
            ->click('@button')
            ->assertSee('Result');
    });
}
```

## Documentazione

### 1. PHPDoc
```php
/**
 * Componente per la gestione di form avanzati.
 *
 * @property string $label Label del componente
 * @property string|null $hint Suggerimento opzionale
 *
 * @method void save() Salva i dati del form
 * @method void reset() Resetta il form
 */
class AdvancedForm extends Component
```

### 2. README
- Descrizione chiara
- Esempi di utilizzo
- Configurazioni disponibili
### Versione HEAD

- Breaking changes
## Collegamenti tra versioni di best-practices.md
* [best-practices.md](docs/tecnico/filament/best-practices.md)
* [best-practices.md](../../../xot/project_docs/laraxot/best-practices.md)
* [best-practices.md](../../../ui/project_docs/best-practices.md)
* [best-practices.md](../../../../themes/one/project_docs/best-practices.md)
* [best-practices.md](../../../xot/project_docs/laraxot/best-practices.md)
* [best-practices.md](../../../ui/project_docs/best-practices.md)
* [best-practices.md](../../../../themes/one/project_docs/best-practices.md)
* [best-practices.md](../../../xot/project_docs/laraxot/best-practices.md)
* [best-practices.md](../../../ui/project_docs/best-practices.md)
* [best-practices.md](../../../../themes/one/project_docs/best-practices.md)

### Versione Incoming

- Breaking changes

---
<<<<<<< HEAD
<<<<<<< .merge_file_RoN8Qw
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
module: theme
topic: best_practices
canonical: ../../../Themes/docs/shared-components/best-practices_1.md
---
>>>>>>> laraxot/dev
=======
See canonical documentation: ../../../Themes/docs/shared-components/best-practices_1.md
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
>>>>>>> .merge_file_1mok7I
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
