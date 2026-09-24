<<<<<<< HEAD
<<<<<<< HEAD
# Componenti Dropdown, Avatar e Loading Indicator di Filament
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
# Componenti Dropdown, Avatar e Loading Indicator di Filament
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
# Componenti Dropdown, Avatar e Loading Indicator di Filament 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
# Componenti Dropdown, Avatar e Loading Indicator di Filament
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
# Componenti Dropdown, Avatar e Loading Indicator di Filament 
=======
# Componenti Dropdown, Avatar e Loading Indicator di Filament
>>>>>>> laraxot/dev
=======
# Componenti Dropdown, Avatar e Loading Indicator di Filament 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
# Componenti Dropdown, Avatar e Loading Indicator di Filament
>>>>>>> 0dadab4 (Lint)

## Indice
- [Panoramica](#panoramica)
- [Componente Dropdown](#componente-dropdown)
- [Componente Avatar](#componente-avatar)
- [Componente Loading Indicator](#componente-loading-indicator)
- [Implementazione nel Dropdown Utente](#implementazione-nel-dropdown-utente)
- [Best Practices](#best-practices)

## Panoramica

Questo documento descrive l'utilizzo corretto dei componenti Blade nativi di Filament per dropdown, avatar e indicatori di caricamento . Questi componenti offrono un'interfaccia utente coerente e professionale, seguendo le convenzioni di design di Filament.

## Componente Dropdown

### Struttura Base

Il componente Dropdown di Filament è composto da tre parti principali:

1. **Trigger** - L'elemento che attiva l'apertura del dropdown
2. **List** - Il contenitore degli elementi del dropdown
3. **Item** - Gli elementi individuali all'interno del dropdown

```blade
<x-filament::dropdown>
    <x-slot name="trigger">
        <!-- Contenuto del trigger -->
    </x-slot>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_KKgkZk
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    <!-- Elementi del dropdown -->
    <x-filament::dropdown.list>
        <x-filament::dropdown.item href="#" icon="heroicon-o-user">
            Profilo
        </x-filament::dropdown.item>
    </x-filament::dropdown.list>
</x-filament::dropdown>
```

### Posizionamento

È possibile controllare il posizionamento del dropdown rispetto al trigger:

```blade
<x-filament::dropdown placement="bottom-start">
    <!-- Contenuto -->
</x-filament::dropdown>
```

Opzioni di posizionamento:
- `top`
- `top-start`
- `top-end`
- `right`
- `right-start`
- `right-end`
- `bottom` (predefinito)
- `bottom-start`
- `bottom-end`
- `left`
- `left-start`
- `left-end`

### Larghezza

È possibile controllare la larghezza del dropdown:

```blade
<x-filament::dropdown width="xs">
    <!-- Contenuto -->
</x-filament::dropdown>
```

Opzioni di larghezza:
- `xs` - 20rem
- `sm` - 24rem
- `md` - 28rem
- `lg` - 32rem
- `xl` - 36rem
- `2xl` - 42rem
- `3xl` - 48rem
- `4xl` - 56rem
- `5xl` - 64rem
- `6xl` - 72rem
- `7xl` - 80rem
- `screen-sm` - 640px
- `screen-md` - 768px
- `screen-lg` - 1024px
- `screen-xl` - 1280px
- `screen-2xl` - 1536px

### Elementi con Icone

```blade
<x-filament::dropdown.item icon="heroicon-o-user">
    Profilo
</x-filament::dropdown.item>
```

### Elementi con Badge

```blade
<x-filament::dropdown.item>
    Notifiche
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_KKgkZk
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    <x-slot name="badge">
        3
    </x-slot>
</x-filament::dropdown.item>
```

### Elementi con Colore

```blade
<x-filament::dropdown.item icon="heroicon-o-trash" color="danger">
    Elimina
</x-filament::dropdown.item>
```

## Componente Avatar

### Utilizzo Base

```blade
<x-filament::avatar
    src="https://example.com/avatar.jpg"
    alt="John Doe"
/>
```

### Dimensioni

```blade
<x-filament::avatar
    src="https://example.com/avatar.jpg"
    alt="John Doe"
    size="md"
/>
```

Opzioni di dimensione:
- `xs` - 1.5rem (24px)
- `sm` - 2rem (32px)
- `md` (predefinito) - 2.5rem (40px)
- `lg` - 3rem (48px)
- `xl` - 4rem (64px)

### Arrotondamento

```blade
<x-filament::avatar
    src="https://example.com/avatar.jpg"
    alt="John Doe"
    circular
/>
```

### Avatar Generati Automaticamente

Se non viene fornito un URL dell'immagine, Filament genererà automaticamente un avatar basato sulle iniziali dell'utente:

```blade
<x-filament::avatar
    alt="John Doe"
/>
```

## Componente Loading Indicator

### Utilizzo Base

```blade
<x-filament::loading-indicator class="h-5 w-5" />
```

### Dimensioni

```blade
<x-filament::loading-indicator class="h-10 w-10" />
```

### Colori

```blade
<x-filament::loading-indicator class="h-5 w-5 text-primary-500" />
```

## Implementazione nel Dropdown Utente

Ecco un esempio completo di implementazione del dropdown utente utilizzando i componenti nativi di Filament:

```blade
<x-filament::dropdown placement="bottom-end" width="xs">
    <x-slot name="trigger">
        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 focus:outline-none transition duration-150 ease-in-out">
            <x-filament::avatar
                :src="$user?->profile_photo_url"
                :alt="$user?->name"
                size="md"
                class="ring-2 ring-white ring-opacity-50 shadow-sm"
            />
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_KKgkZk
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
            <div class="ml-1">
                <x-filament::icon
                    name="heroicon-o-chevron-down"
                    class="h-4 w-4"
                />
            </div>
        </button>
    </x-slot>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_KKgkZk
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    <x-filament::dropdown.list>
        <div class="px-4 py-2 text-xs text-gray-400">
            {{ __('Manage Account') }}
        </div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
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
>>>>>>> .merge_file_KKgkZk
        
        <x-filament::dropdown.item href="{{ route('profile.show') }}" icon="heroicon-o-user">
            {{ __('Profile') }}
        </x-filament::dropdown.item>
        
        <x-filament::dropdown.item href="{{ route('profile.show') }}" icon="heroicon-o-cog-6-tooth">
            {{ __('Settings') }}
        </x-filament::dropdown.item>
        
        <x-filament::dropdown.separator />
        
<<<<<<< .merge_file_lrHhLB
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
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_KKgkZk
=======
>>>>>>> 0dadab4 (Lint)

        <x-filament::dropdown.item href="{{ route('profile.show') }}" icon="heroicon-o-user">
            {{ __('Profile') }}
        </x-filament::dropdown.item>
<<<<<<< HEAD
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
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)

        <x-filament::dropdown.item href="{{ route('profile.show') }}" icon="heroicon-o-cog-6-tooth">
            {{ __('Settings') }}
        </x-filament::dropdown.item>

        <x-filament::dropdown.separator />

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
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
>>>>>>> .merge_file_KKgkZk
        
        <x-filament::dropdown.item href="{{ route('profile.show') }}" icon="heroicon-o-cog-6-tooth">
            {{ __('Settings') }}
        </x-filament::dropdown.item>
        
        <x-filament::dropdown.separator />
<<<<<<< .merge_file_lrHhLB
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> .merge_file_KKgkZk
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-filament::dropdown.item
                href="{{ route('logout') }}"
                icon="heroicon-o-arrow-right-on-rectangle"
                tag="button"
                type="submit"
            >
                {{ __('Log Out') }}
            </x-filament::dropdown.item>
        </form>
    </x-filament::dropdown.list>
</x-filament::dropdown>
```

## Best Practices

1. **Utilizzare sempre i componenti nativi di Filament** per mantenere la coerenza visiva
2. **Evitare di personalizzare eccessivamente i componenti** per mantenere l'esperienza utente coerente
3. **Utilizzare le proprietà fornite dai componenti** invece di aggiungere classi CSS personalizzate
4. **Seguire le convenzioni di Filament** per i nomi delle icone e i colori
5. **Utilizzare i componenti in modo semantico** (ad esempio, utilizzare il colore `danger` per le azioni distruttive)

## Risorse Utili

- [Documentazione Dropdown di Filament](https://filamentphp.com/docs/3.x/support/blade-components/dropdown)
- [Documentazione Avatar di Filament](https://filamentphp.com/docs/3.x/support/blade-components/avatar)
- [Documentazione Loading Indicator di Filament](https://filamentphp.com/docs/3.x/support/blade-components/loading-indicator)
<<<<<<< HEAD
<<<<<<< HEAD
- [Documentazione Icone di Filament](https://filamentphp.com/docs/3.x/support/icons)
# Componenti Dropdown, Avatar e Loading Indicator di Filament
<<<<<<< HEAD
=======

<<<<<<< .merge_file_lrHhLB
=======
<<<<<<< HEAD
- [Documentazione Icone di Filament](https://filamentphp.com/docs/3.x/support/icons)
<<<<<<< HEAD
=======
# Componenti Dropdown, Avatar e Loading Indicator di Filament

=======
<<<<<<< HEAD
- [Documentazione Icone di Filament](https://filamentphp.com/docs/3.x/support/icons)
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Documentazione Icone di Filament](https://filamentphp.com/docs/3.x/support/icons)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [Documentazione Icone di Filament](https://filamentphp.com/docs/3.x/support/icons)
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- [Documentazione Icone di Filament](https://filamentphp.com/docs/3.x/support/icons)
# Componenti Dropdown, Avatar e Loading Indicator di Filament
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KKgkZk
>>>>>>> laraxot/dev
=======
- [Documentazione Icone di Filament](https://filamentphp.com/docs/3.x/support/icons)
# Componenti Dropdown, Avatar e Loading Indicator di Filament

>>>>>>> 0dadab4 (Lint)
## Indice
- [Panoramica](#panoramica)
- [Componente Dropdown](#componente-dropdown)
- [Componente Avatar](#componente-avatar)
- [Componente Loading Indicator](#componente-loading-indicator)
- [Implementazione nel Dropdown Utente](#implementazione-nel-dropdown-utente)
- [Best Practices](#best-practices)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Panoramica
Questo documento descrive l'utilizzo corretto dei componenti Blade nativi di Filament per dropdown, avatar e indicatori di caricamento . Questi componenti offrono un'interfaccia utente coerente e professionale, seguendo le convenzioni di design di Filament.
## Componente Dropdown
### Struttura Base
Il componente Dropdown di Filament è composto da tre parti principali:
1. **Trigger** - L'elemento che attiva l'apertura del dropdown
2. **List** - Il contenitore degli elementi del dropdown
3. **Item** - Gli elementi individuali all'interno del dropdown
=======
>>>>>>> .merge_file_KKgkZk
=======
>>>>>>> 0dadab4 (Lint)

## Panoramica

Questo documento descrive l'utilizzo corretto dei componenti Blade nativi di Filament per dropdown, avatar e indicatori di caricamento . Questi componenti offrono un'interfaccia utente coerente e professionale, seguendo le convenzioni di design di Filament.

## Componente Dropdown

### Struttura Base

Il componente Dropdown di Filament è composto da tre parti principali:

1. **Trigger** - L'elemento che attiva l'apertura del dropdown
2. **List** - Il contenitore degli elementi del dropdown
3. **Item** - Gli elementi individuali all'interno del dropdown

<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
## Panoramica
Questo documento descrive l'utilizzo corretto dei componenti Blade nativi di Filament per dropdown, avatar e indicatori di caricamento . Questi componenti offrono un'interfaccia utente coerente e professionale, seguendo le convenzioni di design di Filament.
## Componente Dropdown
### Struttura Base
Il componente Dropdown di Filament è composto da tre parti principali:
1. **Trigger** - L'elemento che attiva l'apertura del dropdown
2. **List** - Il contenitore degli elementi del dropdown
3. **Item** - Gli elementi individuali all'interno del dropdown
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KKgkZk
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
```blade
<x-filament::dropdown>
    <x-slot name="trigger">
        <!-- Contenuto del trigger -->
    </x-slot>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_KKgkZk
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    <!-- Elementi del dropdown -->
    <x-filament::dropdown.list>
        <x-filament::dropdown.item href="#" icon="heroicon-o-user">
            Profilo
        </x-filament::dropdown.item>
    </x-filament::dropdown.list>
</x-filament::dropdown>
```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Posizionamento
È possibile controllare il posizionamento del dropdown rispetto al trigger:
<x-filament::dropdown placement="bottom-start">
    <!-- Contenuto -->
=======
>>>>>>> .merge_file_KKgkZk
=======
>>>>>>> 0dadab4 (Lint)

### Posizionamento

È possibile controllare il posizionamento del dropdown rispetto al trigger:

```blade
<x-filament::dropdown placement="bottom-start">
    <!-- Contenuto -->
</x-filament::dropdown>
```

<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
### Posizionamento
È possibile controllare il posizionamento del dropdown rispetto al trigger:
<x-filament::dropdown placement="bottom-start">
    <!-- Contenuto -->
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KKgkZk
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
Opzioni di posizionamento:
- `top`
- `top-start`
- `top-end`
- `right`
- `right-start`
- `right-end`
- `bottom` (predefinito)
- `bottom-start`
- `bottom-end`
- `left`
- `left-start`
- `left-end`
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_KKgkZk
### Larghezza
È possibile controllare la larghezza del dropdown:
<x-filament::dropdown width="xs">
=======
<<<<<<< .merge_file_lrHhLB
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KKgkZk
=======
>>>>>>> 0dadab4 (Lint)

### Larghezza

È possibile controllare la larghezza del dropdown:

```blade
<x-filament::dropdown width="xs">
    <!-- Contenuto -->
</x-filament::dropdown>
```

<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
<<<<<<< HEAD
=======
=======
### Larghezza
È possibile controllare la larghezza del dropdown:
<x-filament::dropdown width="xs">
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KKgkZk
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
Opzioni di larghezza:
- `xs` - 20rem
- `sm` - 24rem
- `md` - 28rem
- `lg` - 32rem
- `xl` - 36rem
- `2xl` - 42rem
- `3xl` - 48rem
- `4xl` - 56rem
- `5xl` - 64rem
- `6xl` - 72rem
- `7xl` - 80rem
- `screen-sm` - 640px
- `screen-md` - 768px
- `screen-lg` - 1024px
- `screen-xl` - 1280px
- `screen-2xl` - 1536px
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Elementi con Icone
<x-filament::dropdown.item icon="heroicon-o-user">
    Profilo
</x-filament::dropdown.item>
### Elementi con Badge
<x-filament::dropdown.item>
    Notifiche
    <x-slot name="badge">
        3
### Elementi con Colore
<x-filament::dropdown.item icon="heroicon-o-trash" color="danger">
    Elimina
## Componente Avatar
### Utilizzo Base
=======
>>>>>>> .merge_file_KKgkZk
=======
>>>>>>> 0dadab4 (Lint)

### Elementi con Icone

```blade
<x-filament::dropdown.item icon="heroicon-o-user">
    Profilo
</x-filament::dropdown.item>
```

### Elementi con Badge

```blade
<x-filament::dropdown.item>
    Notifiche

    <x-slot name="badge">
        3
    </x-slot>
</x-filament::dropdown.item>
```

### Elementi con Colore

```blade
<x-filament::dropdown.item icon="heroicon-o-trash" color="danger">
    Elimina
</x-filament::dropdown.item>
```

## Componente Avatar

### Utilizzo Base

```blade
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
### Elementi con Icone
<x-filament::dropdown.item icon="heroicon-o-user">
    Profilo
</x-filament::dropdown.item>
### Elementi con Badge
<x-filament::dropdown.item>
    Notifiche
    <x-slot name="badge">
        3
### Elementi con Colore
<x-filament::dropdown.item icon="heroicon-o-trash" color="danger">
    Elimina
## Componente Avatar
### Utilizzo Base
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KKgkZk
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
<x-filament::avatar
    src="https://example.com/avatar.jpg"
    alt="John Doe"
/>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
=======
<<<<<<< HEAD
### Dimensioni
    size="md"
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Dimensioni
    size="md"
=======
>>>>>>> .merge_file_KKgkZk
=======
>>>>>>> 0dadab4 (Lint)
```

### Dimensioni

```blade
<x-filament::avatar
    src="https://example.com/avatar.jpg"
    alt="John Doe"
    size="md"
/>
```

<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
<<<<<<< HEAD
=======
=======
### Dimensioni
    size="md"
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KKgkZk
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
Opzioni di dimensione:
- `xs` - 1.5rem (24px)
- `sm` - 2rem (32px)
- `md` (predefinito) - 2.5rem (40px)
- `lg` - 3rem (48px)
- `xl` - 4rem (64px)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Arrotondamento
    circular
### Avatar Generati Automaticamente
Se non viene fornito un URL dell'immagine, Filament genererà automaticamente un avatar basato sulle iniziali dell'utente:
## Componente Loading Indicator
<x-filament::loading-indicator class="h-5 w-5" />
<x-filament::loading-indicator class="h-10 w-10" />
### Colori
<x-filament::loading-indicator class="h-5 w-5 text-primary-500" />
## Implementazione nel Dropdown Utente
Ecco un esempio completo di implementazione del dropdown utente utilizzando i componenti nativi di Filament:
<x-filament::dropdown placement="bottom-end" width="xs">
=======
>>>>>>> .merge_file_KKgkZk
=======
>>>>>>> 0dadab4 (Lint)

### Arrotondamento

```blade
<x-filament::avatar
    src="https://example.com/avatar.jpg"
    alt="John Doe"
    circular
/>
```

### Avatar Generati Automaticamente

Se non viene fornito un URL dell'immagine, Filament genererà automaticamente un avatar basato sulle iniziali dell'utente:

```blade
<x-filament::avatar
    alt="John Doe"
/>
```

## Componente Loading Indicator

### Utilizzo Base

```blade
<x-filament::loading-indicator class="h-5 w-5" />
```

### Dimensioni

```blade
<x-filament::loading-indicator class="h-10 w-10" />
```

### Colori

```blade
<x-filament::loading-indicator class="h-5 w-5 text-primary-500" />
```

## Implementazione nel Dropdown Utente

Ecco un esempio completo di implementazione del dropdown utente utilizzando i componenti nativi di Filament:

```blade
<x-filament::dropdown placement="bottom-end" width="xs">
    <x-slot name="trigger">
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
### Arrotondamento
    circular
### Avatar Generati Automaticamente
Se non viene fornito un URL dell'immagine, Filament genererà automaticamente un avatar basato sulle iniziali dell'utente:
## Componente Loading Indicator
<x-filament::loading-indicator class="h-5 w-5" />
<x-filament::loading-indicator class="h-10 w-10" />
### Colori
<x-filament::loading-indicator class="h-5 w-5 text-primary-500" />
## Implementazione nel Dropdown Utente
Ecco un esempio completo di implementazione del dropdown utente utilizzando i componenti nativi di Filament:
<x-filament::dropdown placement="bottom-end" width="xs">
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KKgkZk
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 focus:outline-none transition duration-150 ease-in-out">
            <x-filament::avatar
                :src="$user?->profile_photo_url"
                :alt="$user?->name"
                size="md"
                class="ring-2 ring-white ring-opacity-50 shadow-sm"
            />
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_KKgkZk
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
            <div class="ml-1">
                <x-filament::icon
                    name="heroicon-o-chevron-down"
                    class="h-4 w-4"
                />
            </div>
        </button>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
        <div class="px-4 py-2 text-xs text-gray-400">
            {{ __('Manage Account') }}
        </div>
        <x-filament::dropdown.item href="{{ route('profile.show') }}" icon="heroicon-o-user">
            {{ __('Profile') }}
        <x-filament::dropdown.item href="{{ route('profile.show') }}" icon="heroicon-o-cog-6-tooth">
            {{ __('Settings') }}
        <x-filament::dropdown.separator />
=======
>>>>>>> .merge_file_KKgkZk
=======
>>>>>>> 0dadab4 (Lint)
    </x-slot>

    <x-filament::dropdown.list>
        <div class="px-4 py-2 text-xs text-gray-400">
            {{ __('Manage Account') }}
        </div>

        <x-filament::dropdown.item href="{{ route('profile.show') }}" icon="heroicon-o-user">
            {{ __('Profile') }}
        </x-filament::dropdown.item>

        <x-filament::dropdown.item href="{{ route('profile.show') }}" icon="heroicon-o-cog-6-tooth">
            {{ __('Settings') }}
        </x-filament::dropdown.item>

        <x-filament::dropdown.separator />

<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
        <div class="px-4 py-2 text-xs text-gray-400">
            {{ __('Manage Account') }}
        </div>
        <x-filament::dropdown.item href="{{ route('profile.show') }}" icon="heroicon-o-user">
            {{ __('Profile') }}
        <x-filament::dropdown.item href="{{ route('profile.show') }}" icon="heroicon-o-cog-6-tooth">
            {{ __('Settings') }}
        <x-filament::dropdown.separator />
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KKgkZk
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-filament::dropdown.item
                href="{{ route('logout') }}"
                icon="heroicon-o-arrow-right-on-rectangle"
                tag="button"
                type="submit"
            >
                {{ __('Log Out') }}
            </x-filament::dropdown.item>
        </form>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
=======
<<<<<<< HEAD
## Best Practices
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Best Practices
=======
>>>>>>> .merge_file_KKgkZk
=======
>>>>>>> 0dadab4 (Lint)
    </x-filament::dropdown.list>
</x-filament::dropdown>
```

## Best Practices

<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
<<<<<<< HEAD
=======
=======
## Best Practices
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KKgkZk
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
1. **Utilizzare sempre i componenti nativi di Filament** per mantenere la coerenza visiva
2. **Evitare di personalizzare eccessivamente i componenti** per mantenere l'esperienza utente coerente
3. **Utilizzare le proprietà fornite dai componenti** invece di aggiungere classi CSS personalizzate
4. **Seguire le convenzioni di Filament** per i nomi delle icone e i colori
5. **Utilizzare i componenti in modo semantico** (ad esempio, utilizzare il colore `danger` per le azioni distruttive)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Risorse Utili
- [Documentazione Dropdown di Filament](https://filamentphp.com/docs/3.x/support/blade-components/dropdown)
- [Documentazione Avatar di Filament](https://filamentphp.com/docs/3.x/support/blade-components/avatar)
- [Documentazione Loading Indicator di Filament](https://filamentphp.com/docs/3.x/support/blade-components/loading-indicator)
=======
>>>>>>> .merge_file_KKgkZk
=======
>>>>>>> 0dadab4 (Lint)

## Risorse Utili

- [Documentazione Dropdown di Filament](https://filamentphp.com/docs/3.x/support/blade-components/dropdown)
- [Documentazione Avatar di Filament](https://filamentphp.com/docs/3.x/support/blade-components/avatar)
- [Documentazione Loading Indicator di Filament](https://filamentphp.com/docs/3.x/support/blade-components/loading-indicator)
- [Documentazione Icone di Filament](https://filamentphp.com/docs/3.x/support/icons)
<<<<<<< HEAD
<<<<<<< .merge_file_lrHhLB
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
## Risorse Utili
- [Documentazione Dropdown di Filament](https://filamentphp.com/docs/3.x/support/blade-components/dropdown)
- [Documentazione Avatar di Filament](https://filamentphp.com/docs/3.x/support/blade-components/avatar)
- [Documentazione Loading Indicator di Filament](https://filamentphp.com/docs/3.x/support/blade-components/loading-indicator)
<<<<<<< HEAD
=======
- [Documentazione Icone di Filament](https://filamentphp.com/docs/3.x/support/icons)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- [Documentazione Icone di Filament](https://filamentphp.com/docs/3.x/support/icons)
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
>>>>>>> .merge_file_KKgkZk
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
