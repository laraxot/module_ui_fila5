# Design System

## Panoramica
Il design system definisce gli standard visivi e di interazione per garantire coerenza in tutta l'applicazione.

## Componenti Base

### 1. Tipografia
```css
/* Font Family */
--app-font-sans: 'Inter', sans-serif;
--app-font-serif: 'Merriweather', serif;
--app-font-mono: 'JetBrains Mono', monospace;

/* Font Sizes */
--app-text-xs: 0.75rem;
--app-text-sm: 0.875rem;
--app-text-base: 1rem;
--app-text-lg: 1.125rem;
--app-text-xl: 1.25rem;
```

### 2. Colori
```css
/* Brand Colors */
--app-primary: #0EA5E9;
--app-secondary: #6366F1;
--app-accent: #EC4899;

/* Semantic Colors */
--app-success: #22C55E;
--app-warning: #F59E0B;
--app-error: #EF4444;
--app-info: #3B82F6;
```

### 3. Spaziatura
```css
/* Spacing Scale */
--so-spacing-xs: 0.5rem;
--so-spacing-sm: 0.75rem;
--so-spacing-md: 1rem;
--so-spacing-lg: 1.5rem;
--so-spacing-xl: 2rem;
```

## Componenti UI

### 1. Pulsanti
```php
<x-ui.button variant="primary">
    Azione Primaria
</x-ui.button>

<x-ui.button variant="secondary">
    Azione Secondaria
</x-ui.button>
```

### 2. Form
```php
<x-ui.form.input
    type="text"
    name="name"
    label="Nome"
    placeholder="Inserisci il nome"
/>

<x-ui.form.select
    name="type"
    label="Tipo"
    :options="$types"
/>
```

### 3. Card
```php
<x-ui.card>
    <x-slot name="header">
        Titolo Card
    </x-slot>
<<<<<<< .merge_file_8by0Mo
    Contenuto della card
    Contenuto della card
    
=======
<<<<<<< HEAD
<<<<<<< .merge_file_vi9jA4
=======
<<<<<<< .merge_file_VZusAK
>>>>>>> .merge_file_J8OenT

    Contenuto della card

=======
<<<<<<< HEAD
<<<<<<< .merge_file_vi9jA4
=======
<<<<<<< HEAD
=======

    Contenuto della card

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_J8OenT
    Contenuto della card
    Contenuto della card
    
=======
<<<<<<< HEAD
    
    Contenuto della card
    
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

    Contenuto della card

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
    
    Contenuto della card
    
=======

    Contenuto della card

>>>>>>> laraxot/dev
=======
    
    Contenuto della card
    
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_vi9jA4
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    Contenuto della card
    Contenuto della card
    
=======

    Contenuto della card

>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT
>>>>>>> laraxot/dev
>>>>>>> .merge_file_b4cDJb
    <x-slot name="footer">
        Footer della card
    </x-slot>
</x-ui.card>
```

## Layout

### 1. Grid System
```php
<x-ui.grid cols="1 md:2 lg:3" gap="4">
    <div>Colonna 1</div>
    <div>Colonna 2</div>
    <div>Colonna 3</div>
</x-ui.grid>
```

### 2. Container
```php
<x-ui.container size="md">
    Contenuto centrato con margini
</x-ui.container>
```

## Best Practices

1. **Coerenza**
   - Usare i componenti standard
   - Mantenere la palette colori
   - Seguire la scala tipografica

2. **Accessibilità**
   - Contrasto sufficiente
   - Focus visibile
   - Testo alternativo

3. **Responsive**
   - Mobile first
   - Breakpoint standard
   - Layout fluido

## Collegamenti Bidirezionali
<<<<<<< .merge_file_8by0Mo
- [README](README.md)
=======
<<<<<<< HEAD
<<<<<<< .merge_file_vi9jA4
- [README](readme.md)
=======
- [README](README.md)
=======
<<<<<<< .merge_file_VZusAK
- [README](readme.md)
=======
<<<<<<< HEAD
- [README](README.md)
=======
<<<<<<< HEAD
- [README](readme.md)
=======
- [README](README.md)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- [README](README.md)
=======
- [README](readme.md)
>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT
>>>>>>> laraxot/dev
>>>>>>> .merge_file_b4cDJb
- [Componenti](components.md)
- [Layout](layouts-and-themes.md)

## Vedi Anche
- [Tailwind Config](../config/tailwind.config.js)
- [Theme Config](../config/theme.php)
<<<<<<< .merge_file_8by0Mo
=======
<<<<<<< HEAD
<<<<<<< .merge_file_vi9jA4
=======
<<<<<<< .merge_file_VZusAK
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_b4cDJb
- [Filament UI](../../Cms/docs/filament-components.md)
# Design System
## Panoramica
Il design system definisce gli standard visivi e di interazione per garantire coerenza in tutta l'applicazione.
## Componenti Base
<<<<<<< .merge_file_8by0Mo
=======
=======
>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT
- [Filament UI](../../cms/docs/filament-components.md)
# Design System

## Panoramica
Il design system definisce gli standard visivi e di interazione per garantire coerenza in tutta l'applicazione.

## Componenti Base

<<<<<<< .merge_file_vi9jA4
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_VZusAK
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_J8OenT
- [Filament UI](../../Cms/docs/filament-components.md) 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Filament UI](../../Cms/docs/filament-components.md) 
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [Filament UI](../../Cms/docs/filament-components.md) 
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- [Filament UI](../../Cms/docs/filament-components.md)
# Design System
## Panoramica
Il design system definisce gli standard visivi e di interazione per garantire coerenza in tutta l'applicazione.
## Componenti Base
<<<<<<< .merge_file_vi9jA4
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT
>>>>>>> laraxot/dev
>>>>>>> .merge_file_b4cDJb
### 1. Tipografia
```css
/* Font Family */
--app-font-sans: 'Inter', sans-serif;
--app-font-serif: 'Merriweather', serif;
--app-font-mono: 'JetBrains Mono', monospace;
<<<<<<< .merge_file_8by0Mo
=======
<<<<<<< HEAD
<<<<<<< .merge_file_vi9jA4

=======
=======
<<<<<<< .merge_file_VZusAK

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT
>>>>>>> laraxot/dev
>>>>>>> .merge_file_b4cDJb
/* Font Sizes */
--app-text-xs: 0.75rem;
--app-text-sm: 0.875rem;
--app-text-base: 1rem;
--app-text-lg: 1.125rem;
--app-text-xl: 1.25rem;
```
<<<<<<< .merge_file_8by0Mo
### 2. Colori
=======
<<<<<<< HEAD
<<<<<<< .merge_file_vi9jA4

### 2. Colori
```css
=======
### 2. Colori
=======
<<<<<<< .merge_file_VZusAK

### 2. Colori
```css
=======
<<<<<<< HEAD
### 2. Colori
=======
<<<<<<< HEAD

### 2. Colori
```css
=======
### 2. Colori
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
### 2. Colori
=======

### 2. Colori
```css
>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT
>>>>>>> laraxot/dev
>>>>>>> .merge_file_b4cDJb
/* Brand Colors */
--app-primary: #0EA5E9;
--app-secondary: #6366F1;
--app-accent: #EC4899;
<<<<<<< .merge_file_8by0Mo
=======
<<<<<<< HEAD
<<<<<<< .merge_file_vi9jA4

=======
=======
<<<<<<< .merge_file_VZusAK

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT
>>>>>>> laraxot/dev
>>>>>>> .merge_file_b4cDJb
/* Semantic Colors */
--app-success: #22C55E;
--app-warning: #F59E0B;
--app-error: #EF4444;
--app-info: #3B82F6;
<<<<<<< .merge_file_8by0Mo
### 3. Spaziatura
=======
<<<<<<< HEAD
<<<<<<< .merge_file_vi9jA4
=======
<<<<<<< .merge_file_VZusAK
=======
<<<<<<< HEAD
### 3. Spaziatura
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### 3. Spaziatura
=======
>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT
```

### 3. Spaziatura
```css
<<<<<<< .merge_file_vi9jA4
=======
### 3. Spaziatura
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_VZusAK
<<<<<<< HEAD
=======
=======
### 3. Spaziatura
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_RL0BgJ
>>>>>>> laraxot/dev
>>>>>>> .merge_file_J8OenT
>>>>>>> .merge_file_b4cDJb
/* Spacing Scale */
--so-spacing-xs: 0.5rem;
--so-spacing-sm: 0.75rem;
--so-spacing-md: 1rem;
--so-spacing-lg: 1.5rem;
--so-spacing-xl: 2rem;
<<<<<<< .merge_file_8by0Mo
## Componenti UI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_vi9jA4
=======
<<<<<<< .merge_file_VZusAK
=======
<<<<<<< HEAD
## Componenti UI
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Componenti UI
=======
>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT
```

## Componenti UI

<<<<<<< .merge_file_vi9jA4
=======
## Componenti UI
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_VZusAK
<<<<<<< HEAD
=======
=======
## Componenti UI
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_RL0BgJ
>>>>>>> laraxot/dev
>>>>>>> .merge_file_J8OenT
>>>>>>> .merge_file_b4cDJb
### 1. Pulsanti
```php
<x-ui.button variant="primary">
    Azione Primaria
</x-ui.button>
<<<<<<< .merge_file_8by0Mo
<x-ui.button variant="secondary">
    Azione Secondaria
### 2. Form
=======
<<<<<<< HEAD
<<<<<<< .merge_file_vi9jA4
=======
<<<<<<< .merge_file_VZusAK
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_RL0BgJ
<x-ui.button variant="secondary">
    Azione Secondaria
### 2. Form
=======
<<<<<<< .merge_file_VZusAK
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT

<x-ui.button variant="secondary">
    Azione Secondaria
</x-ui.button>
```

### 2. Form
```php
<<<<<<< .merge_file_vi9jA4
=======
<<<<<<< .merge_file_VZusAK
<<<<<<< HEAD
=======
>>>>>>> .merge_file_J8OenT
=======
<x-ui.button variant="secondary">
    Azione Secondaria
### 2. Form
>>>>>>> laraxot/dev
<<<<<<< .merge_file_vi9jA4
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_RL0BgJ
>>>>>>> laraxot/dev
>>>>>>> .merge_file_J8OenT
>>>>>>> .merge_file_b4cDJb
<x-ui.form.input
    type="text"
    name="name"
    label="Nome"
    placeholder="Inserisci il nome"
/>
<<<<<<< .merge_file_8by0Mo
=======
<<<<<<< HEAD
<<<<<<< .merge_file_vi9jA4

=======
=======
<<<<<<< .merge_file_VZusAK

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT
>>>>>>> laraxot/dev
>>>>>>> .merge_file_b4cDJb
<x-ui.form.select
    name="type"
    label="Tipo"
    :options="$types"
<<<<<<< .merge_file_8by0Mo
### 3. Card
=======
<<<<<<< HEAD
<<<<<<< .merge_file_vi9jA4
=======
<<<<<<< .merge_file_VZusAK
=======
<<<<<<< HEAD
### 3. Card
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### 3. Card
=======
>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT
/>
```

### 3. Card
```php
<<<<<<< .merge_file_vi9jA4
=======
### 3. Card
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_VZusAK
<<<<<<< HEAD
=======
=======
### 3. Card
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_RL0BgJ
>>>>>>> laraxot/dev
>>>>>>> .merge_file_J8OenT
>>>>>>> .merge_file_b4cDJb
<x-ui.card>
    <x-slot name="header">
        Titolo Card
    </x-slot>
<<<<<<< .merge_file_8by0Mo
=======
<<<<<<< HEAD
<<<<<<< .merge_file_vi9jA4
=======
<<<<<<< .merge_file_VZusAK
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_b4cDJb
    Contenuto della card
    <x-slot name="footer">
        Footer della card
</x-ui.card>
## Layout
### 1. Grid System
<<<<<<< .merge_file_8by0Mo
=======
=======
>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT

    Contenuto della card

    <x-slot name="footer">
        Footer della card
    </x-slot>
</x-ui.card>
```

## Layout

### 1. Grid System
```php
<<<<<<< .merge_file_vi9jA4
=======
=======
<<<<<<< .merge_file_VZusAK
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_J8OenT
    Contenuto della card
    <x-slot name="footer">
        Footer della card
</x-ui.card>
## Layout
### 1. Grid System
<<<<<<< .merge_file_vi9jA4
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT
>>>>>>> laraxot/dev
>>>>>>> .merge_file_b4cDJb
<x-ui.grid cols="1 md:2 lg:3" gap="4">
    <div>Colonna 1</div>
    <div>Colonna 2</div>
    <div>Colonna 3</div>
</x-ui.grid>
<<<<<<< .merge_file_8by0Mo
=======
<<<<<<< HEAD
<<<<<<< .merge_file_vi9jA4
=======
<<<<<<< .merge_file_VZusAK
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### 2. Container
<x-ui.container size="md">
    Contenuto centrato con margini
</x-ui.container>
## Best Practices
=======
>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT
```

>>>>>>> .merge_file_b4cDJb
### 2. Container
<x-ui.container size="md">
    Contenuto centrato con margini
</x-ui.container>
## Best Practices
<<<<<<< .merge_file_8by0Mo
=======

<<<<<<< .merge_file_vi9jA4
=======
=======
<<<<<<< .merge_file_VZusAK
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_J8OenT
### 2. Container
<x-ui.container size="md">
    Contenuto centrato con margini
</x-ui.container>
## Best Practices
<<<<<<< .merge_file_vi9jA4
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT
>>>>>>> laraxot/dev
>>>>>>> .merge_file_b4cDJb
1. **Coerenza**
   - Usare i componenti standard
   - Mantenere la palette colori
   - Seguire la scala tipografica
<<<<<<< .merge_file_8by0Mo
=======
<<<<<<< HEAD
<<<<<<< .merge_file_vi9jA4

=======
=======
<<<<<<< .merge_file_VZusAK

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT
>>>>>>> laraxot/dev
>>>>>>> .merge_file_b4cDJb
2. **Accessibilità**
   - Contrasto sufficiente
   - Focus visibile
   - Testo alternativo
<<<<<<< .merge_file_8by0Mo
=======
<<<<<<< HEAD
<<<<<<< .merge_file_vi9jA4

=======
=======
<<<<<<< .merge_file_VZusAK

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT
>>>>>>> laraxot/dev
>>>>>>> .merge_file_b4cDJb
3. **Responsive**
   - Mobile first
   - Breakpoint standard
   - Layout fluido
<<<<<<< .merge_file_8by0Mo
=======
<<<<<<< HEAD
<<<<<<< .merge_file_vi9jA4
=======
<<<<<<< .merge_file_VZusAK
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Collegamenti Bidirezionali
- [README](README.md)
- [Componenti](components.md)
- [Layout](layouts-and-themes.md)
## Vedi Anche
- [Tailwind Config](../config/tailwind.config.js)
- [Theme Config](../config/theme.php)

```
=======
>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT

## Collegamenti Bidirezionali
- [README](readme.md)
- [Componenti](components.md)
- [Layout](layouts-and-themes.md)

## Vedi Anche
- [Tailwind Config](../config/tailwind.config.js)
- [Theme Config](../config/theme.php)
- [Filament UI](../../cms/project_docs/filament-components.md)
- [Filament UI](../../cms/project_docs/filament-components.md)
- [Filament UI](../../cms/project_docs/filament-components.md)
<<<<<<< .merge_file_vi9jA4
=======
=======
<<<<<<< .merge_file_VZusAK
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_J8OenT
>>>>>>> .merge_file_b4cDJb
## Collegamenti Bidirezionali
- [README](README.md)
- [Componenti](components.md)
- [Layout](layouts-and-themes.md)
## Vedi Anche
- [Tailwind Config](../config/tailwind.config.js)
- [Theme Config](../config/theme.php)

```
<<<<<<< .merge_file_8by0Mo
=======
=======
- [Filament UI](../../Cms/project_docs/filament-components.md)
- [Filament UI](../../Cms/project_docs/filament-components.md)
- [Filament UI](../../Cms/project_docs/filament-components.md)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- [Filament UI](../../Cms/docs/filament-components.md) 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_vi9jA4
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_RL0BgJ
>>>>>>> .merge_file_J8OenT
>>>>>>> laraxot/dev
>>>>>>> .merge_file_b4cDJb
