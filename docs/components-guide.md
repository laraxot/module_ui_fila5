# Guida ai Componenti UI

## Layout

### Frontoffice
- Utilizzare `x-layouts.main` come layout principale
- Struttura standard:
  ```blade
  <x-layouts.main>
      <x-slot name="title">
          {{ __('Page Title') }}
      </x-slot>

      <div class="container mx-auto px-4">
          <!-- Contenuto della pagina -->
      </div>
  </x-layouts.main>
  ```

### Backoffice
- Utilizzare i layout Filament
- Non utilizzare i layout Filament nel frontoffice

## Componenti Filament

### Dropdown
Il componente dropdown di Filament offre una soluzione completa per i menu a tendina con le seguenti funzionalità:

```blade
<x-filament::dropdown>
    <x-slot name="trigger">
        <x-filament::button>
            {{ __('More actions') }}
        </x-filament::button>
    </x-slot>
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_Kps3Q3

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_geucKW

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
=======
>>>>>>> laraxot/dev
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
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    <x-filament::dropdown.list>
        <x-filament::dropdown.list.item>
            {{ __('View') }}
        </x-filament::dropdown.list.item>
    </x-filament::dropdown.list>
</x-filament::dropdown>
```

#### Caratteristiche Principali:
- **Trigger Personalizzabile**: Usa lo slot `trigger` per personalizzare il pulsante
- **Posizionamento**: Controlla il posizionamento con `placement` (top-start, top-end, bottom-start, bottom-end)
- **Larghezza**: Imposta la larghezza con `width` (xs, sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl)
- **Altezza Massima**: Controlla l'altezza massima con `max-height`
- **Colori**: Supporto per colori (danger, info, primary, success, warning)
- **Icone**: Aggiungi icone con l'attributo `icon`
- **Badge**: Aggiungi badge con lo slot `badge`
- **Link**: Converti in link con `tag="a"` e `href`

### Avatar
Il componente avatar di Filament gestisce le immagini profilo con:

```blade
<x-filament::avatar
    src="{{ $user->profile_photo_url }}"
    alt="{{ $user->name }}"
    size="md"
/>
```

#### Caratteristiche:
- **Dimensioni**: sm, md, lg o classi personalizzate
- **Forma**: Controlla la forma con `:circular="true/false"`
- **Fallback**: Gestione automatica delle immagini mancanti

### Loading Indicator
Il componente loading indicator di Filament mostra lo stato di caricamento:

```blade
<x-filament::loading-indicator />
```

#### Caratteristiche:
- **Dimensioni**: sm, md, lg
- **Colori**: Personalizzabili
- **Animazione**: Smooth e responsive

## Best Practices

### Layout
- Mantenere la separazione tra frontoffice e backoffice
- Utilizzare i layout appropriati per ogni contesto
- Seguire la struttura standard dei layout
- Supportare il tema scuro

### Componenti
- Utilizzare i componenti Filament quando disponibili
- Personalizzare i componenti solo quando necessario
- Documentare i componenti personalizzati
- Testare in entrambi i temi

### Cosa NON fare
- ❌ Utilizzare layout Filament nel frontoffice
- ❌ Mischiare componenti tra frontoffice e backoffice
- ❌ Duplicare funzionalità già presenti in Filament
- ❌ Ignorare il supporto per il tema scuro

### Cosa fare
- ✅ Utilizzare `x-layouts.main` per il frontoffice
- ✅ Utilizzare i componenti Filament quando disponibili
- ✅ Seguire le convenzioni di naming
- ✅ Documentare i componenti personalizzati
- ✅ Testare in entrambi i temi

## Esempi di Implementazione

### Dropdown Utente
```blade
<x-filament::dropdown>
    <x-slot name="trigger">
        <button class="flex items-center">
            <x-filament::avatar
                src="{{ $user->profile_photo_url }}"
                alt="{{ $user->name }}"
                size="md"
            />
            <x-filament::icon
                name="heroicon-o-chevron-down"
                class="ml-1 h-4 w-4"
            />
        </button>
    </x-slot>

    <x-filament::dropdown.list>
        <x-filament::dropdown.list.item
            icon="heroicon-o-user"
            href="{{ route('profile.show') }}"
            tag="a"
        >
            {{ __('Profile') }}
        </x-filament::dropdown.list.item>

        <x-filament::dropdown.list.item
            icon="heroicon-o-cog-6-tooth"
            href="{{ route('settings') }}"
            tag="a"
        >
            {{ __('Settings') }}
        </x-filament::dropdown.list.item>

        <x-filament::dropdown.list.item
            icon="heroicon-o-arrow-right-on-rectangle"
            color="danger"
            wire:click="logout"
        >
            {{ __('Log Out') }}
        </x-filament::dropdown.list.item>
    </x-filament::dropdown.list>
</x-filament::dropdown>
```

### Loading State
```blade
<div>
    <x-filament::loading-indicator wire:loading />
    <div wire:loading.remove>
        {{ $content }}
    </div>
</div>
```

## Collegamenti Correlati
- [Documentazione Dropdown Filament](https://filamentphp.com/docs/3.x/support/blade-components/dropdown)
- [Documentazione Avatar Filament](https://filamentphp.com/docs/3.x/support/blade-components/avatar)
- [Documentazione Loading Indicator Filament](https://filamentphp.com/docs/3.x/support/blade-components/loading-indicator)

## Volt e Folio

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
Nel progetto la sintassi di default per i componenti Volt interattivi è **class-based** (`new class extends Livewire\Volt\Component`). Gli esempi qui sotto che usano `use function Livewire\Volt\{state, mount\}` sono **legacy/mantenimento**.

=======
=======
<<<<<<< .merge_file_geucKW
Nel progetto la sintassi di default per i componenti Volt interattivi è **class-based** (`new class extends Livewire\Volt\Component`). Gli esempi qui sotto che usano `use function Livewire\Volt\{state, mount\}` sono **legacy/mantenimento**.

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
Nel progetto la sintassi di default per i componenti Volt interattivi è **class-based** (`new class extends Livewire\Volt\Component`). Gli esempi qui sotto che usano `use function Livewire\Volt\{state, mount\}` sono **legacy/mantenimento**.

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
Nel progetto la sintassi di default per i componenti Volt interattivi è **class-based** (`new class extends Livewire\Volt\Component`). Gli esempi qui sotto che usano `use function Livewire\Volt\{state, mount\}` sono **legacy/mantenimento**.

>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
### Componenti Volt
- Utilizzare la direttiva `@volt` per i componenti Volt
- Struttura standard:
  ```blade
  @volt('component.name')
  <?php
  use function Livewire\Volt\{state, mount};
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
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
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_Kps3Q3
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
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
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
  
  state([
      'property' => null,
  ]);
  
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
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
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_Kps3Q3
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
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev

  state([
      'property' => null,
  ]);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
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
=======
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
  $action = function () {
      // Logica dell'azione
  };
  ?>
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_Kps3Q3

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_geucKW

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
=======
>>>>>>> laraxot/dev
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
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
  <div>
      <!-- Template del componente -->
  </div>
  @endvolt
  ```

### Pagine Folio
- Utilizzare Folio per le pagine del frontoffice
- Struttura standard:
  ```blade
  <?php
  use function Laravel\Folio\{middleware, name};
  use function Livewire\Volt\{state, mount};
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
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
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_Kps3Q3
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
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
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
  
  middleware(['auth']);
  name('page.name');
  
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
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
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_Kps3Q3
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
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev

  middleware(['auth']);
  name('page.name');

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
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
=======
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
  state([
      'property' => null,
  ]);
  ?>
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_Kps3Q3

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_geucKW

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
=======
>>>>>>> laraxot/dev
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
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
  <x-layouts.main>
      <!-- Contenuto della pagina -->
  </x-layouts.main>
  ```

### Gestione dello Stato
<<<<<<< HEAD
- Utilizzare `state()` per definire le proprietà
- Utilizzare `mount()` per l'inizializzazione
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
- In class-based, usa proprietà `public` e inizializza in `mount(): void`
- Gli helper functional `state()` / `computed()` sono legacy/mantenimento (non per nuovi componenti)
=======
- Utilizzare `state()` per definire le proprietà
- Utilizzare `mount()` per l'inizializzazione
=======
<<<<<<< .merge_file_geucKW
- In class-based, usa proprietà `public` e inizializza in `mount(): void`
- Gli helper functional `state()` / `computed()` sono legacy/mantenimento (non per nuovi componenti)
=======
<<<<<<< HEAD
- Utilizzare `state()` per definire le proprietà
- Utilizzare `mount()` per l'inizializzazione
=======
<<<<<<< HEAD
- In class-based, usa proprietà `public` e inizializza in `mount(): void`
- Gli helper functional `state()` / `computed()` sono legacy/mantenimento (non per nuovi componenti)
=======
- Utilizzare `state()` per definire le proprietà
- Utilizzare `mount()` per l'inizializzazione
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- Utilizzare `state()` per definire le proprietà
- Utilizzare `mount()` per l'inizializzazione
=======
- In class-based, usa proprietà `public` e inizializza in `mount(): void`
- Gli helper functional `state()` / `computed()` sono legacy/mantenimento (non per nuovi componenti)
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- Gestire gli errori con try/catch
- Implementare stati di loading

### Esempi

#### Componente Volt
```blade
@volt('auth.logout')
<?php
use function Livewire\Volt\{state, mount};

state([
    'isLoggingOut' => false,
    'success' => false,
    'error' => false,
]);

$logout = function () {
    try {
        $this->isLoggingOut = true;
        // Logica di logout
        $this->success = true;
    } catch (\Exception $e) {
        $this->error = true;
    }
    $this->isLoggingOut = false;
};
?>

<div>
    @if($success)
        <!-- Success state -->
    @elseif($error)
        <!-- Error state -->
    @else
        <!-- Default state -->
    @endif
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_Kps3Q3

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_geucKW

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
=======
>>>>>>> laraxot/dev
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
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    @if($isLoggingOut)
        <x-filament::loading-indicator />
    @endif
</div>
@endvolt
```

#### Pagina Folio
```blade
<?php
use function Laravel\Folio\{middleware, name};
use function Livewire\Volt\{state, mount};

middleware(['auth']);
name('auth.logout');

state([
    'isLoggingOut' => false,
    'success' => false,
    'error' => false,
]);

$logout = function () {
    try {
        $this->isLoggingOut = true;
        // Logica di logout
        $this->success = true;
    } catch (\Exception $e) {
        $this->error = true;
    }
    $this->isLoggingOut = false;
};
?>

<x-layouts.main>
    <x-slot name="title">
        {{ __('auth.logout.title') }}
    </x-slot>

    <div>
        @if($success)
            <!-- Success state -->
        @elseif($error)
            <!-- Error state -->
        @else
            <!-- Default state -->
        @endif
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_Kps3Q3

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_geucKW

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
=======
>>>>>>> laraxot/dev
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
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
        @if($isLoggingOut)
            <x-filament::loading-indicator />
        @endif
    </div>
</x-layouts.main>
```

### Best Practices

#### Gestione dello Stato
- Mantenere gli stati semplici e chiari
- Documentare gli stati e le loro transizioni
- Gestire correttamente gli errori
- Implementare stati di loading

#### Componenti
- Utilizzare la direttiva `@volt` per i componenti Volt
- Seguire la struttura standard
- Mantenere la separazione tra logica e presentazione
- Testare i componenti in isolamento

#### Cosa NON fare
- ❌ Omettere la direttiva `@volt` nei componenti Volt
- ❌ Mischiare logica di business con la presentazione
- ❌ Duplicare stati tra componenti
- ❌ Ignorare la gestione degli errori

#### Cosa fare
- ✅ Utilizzare la direttiva `@volt` per i componenti Volt
- ✅ Seguire la struttura standard per i componenti
- ✅ Gestire correttamente gli stati e le azioni
- ✅ Implementare la gestione degli errori
- ✅ Testare i componenti

## Componenti di Autenticazione

### User Dropdown
- Utilizzare `x-blocks.navigation.user-dropdown` per utenti autenticati
- Struttura standard:
  ```blade
  <x-blocks.navigation.user-dropdown :user="auth()->user()">
      <x-slot name="trigger">
          <x-filament::avatar
              src="{{ $user->profile_photo_url }}"
              alt="{{ $user->name }}"
          />
      </x-slot>
  </x-blocks.navigation.user-dropdown>
  ```

### Login Buttons
- Utilizzare `x-blocks.navigation.login-buttons` per utenti non autenticati
- Struttura standard:
  ```blade
  <x-blocks.navigation.login-buttons>
      <x-ui.button
          href="{{ route('login') }}"
          color="primary"
      >
          {{ __('auth.login.link') }}
      </x-ui.button>

      <x-ui.button
          href="{{ route('register') }}"
          color="secondary"
      >
          {{ __('auth.register.link') }}
      </x-ui.button>
  </x-blocks.navigation.login-buttons>
  ```

### Gestione dello Stato
- Utilizzare `@auth` e `@else` per gestire gli stati
- Esempio:
  ```blade
  @auth
      <x-blocks.navigation.user-dropdown :user="auth()->user()" />
  @else
      <x-blocks.navigation.login-buttons />
  @endauth
  ```

### Traduzioni
- Utilizzare il namespace `auth.` per le traduzioni
- Struttura standard:
  ```php
  return [
      'login' => [
          'title' => 'Login',
          'email' => 'Email',
          'password' => 'Password',
          'remember_me' => 'Remember me',
          'forgot_password' => 'Forgot password?',
          'submit' => 'Login',
          'link' => 'Login',
      ],
      'register' => [
          'title' => 'Register',
          'email' => 'Email',
          'password' => 'Password',
          'confirm_password' => 'Confirm password',
          'submit' => 'Register',
          'link' => 'Register',
      ],
      'logout' => [
          'title' => 'Logout',
          'confirm_message' => 'Are you sure you want to log out?',
          'success_title' => 'Logged out successfully',
          'success_message' => 'You have been logged out.',
          'error_title' => 'Error',
          'error_message' => 'An error occurred while logging out.',
          'confirm_button' => 'Logout',
          'cancel_button' => 'Cancel',
          'back_to_home' => 'Back to home',
          'try_again' => 'Try again',
      ],
      'user_dropdown' => [
          'manage_account' => 'Manage Account',
          'profile' => 'Profile',
          'settings' => 'Settings',
          'logout' => 'Logout',
      ],
  ];
  ```

### Best Practices

#### Componenti
- Mantenere la separazione tra stati autenticati e non
- Utilizzare i componenti appropriati
- Gestire correttamente le traduzioni
- Supportare il tema scuro

#### Traduzioni
- Utilizzare chiavi semantiche
- Mantenere la coerenza nella struttura
- Documentare le traduzioni
- Testare in tutte le lingue

#### Cosa NON fare
- ❌ Mischiare stati autenticati e non
- ❌ Duplicare logica di autenticazione
- ❌ Ignorare le traduzioni
- ❌ Ignorare il supporto per il tema scuro

#### Cosa fare
- ✅ Utilizzare i componenti appropriati
- ✅ Seguire la struttura standard
- ✅ Gestire correttamente le traduzioni
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
- ✅ Testare in entrambi gli stati
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- ✅ Testare in entrambi gli stati
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
- ✅ Testare in entrambi gli stati
=======
>>>>>>> laraxot/dev
=======
- ✅ Testare in entrambi gli stati
=======
<<<<<<< HEAD
- ✅ Testare in entrambi gli stati
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
# Guida ai Componenti UI
<<<<<<< HEAD
## Layout
=======

## Layout

<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
- ✅ Testare in entrambi gli stati
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
- ✅ Testare in entrambi gli stati
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- ✅ Testare in entrambi gli stati
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
- ✅ Testare in entrambi gli stati
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- ✅ Testare in entrambi gli stati
# Guida ai Componenti UI
## Layout
<<<<<<< HEAD
=======
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
### Frontoffice
- Utilizzare `x-layouts.main` come layout principale
- Struttura standard:
  ```blade
  <x-layouts.main>
      <x-slot name="title">
          {{ __('Page Title') }}
      </x-slot>
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3

=======
=======
<<<<<<< .merge_file_geucKW

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
      <div class="container mx-auto px-4">
          <!-- Contenuto della pagina -->
      </div>
  </x-layouts.main>
  ```
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
### Backoffice
- Utilizzare i layout Filament
- Non utilizzare i layout Filament nel frontoffice
## Componenti Filament
### Dropdown
Il componente dropdown di Filament offre una soluzione completa per i menu a tendina con le seguenti funzionalità:
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ

### Backoffice
- Utilizzare i layout Filament
- Non utilizzare i layout Filament nel frontoffice

## Componenti Filament

### Dropdown
Il componente dropdown di Filament offre una soluzione completa per i menu a tendina con le seguenti funzionalità:

<<<<<<< .merge_file_Kps3Q3
=======
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
### Backoffice
- Utilizzare i layout Filament
- Non utilizzare i layout Filament nel frontoffice
## Componenti Filament
### Dropdown
Il componente dropdown di Filament offre una soluzione completa per i menu a tendina con le seguenti funzionalità:
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
```blade
<x-filament::dropdown>
    <x-slot name="trigger">
        <x-filament::button>
            {{ __('More actions') }}
        </x-filament::button>
    </x-slot>
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3

=======
=======
<<<<<<< .merge_file_geucKW

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    <x-filament::dropdown.list>
        <x-filament::dropdown.list.item>
            {{ __('View') }}
        </x-filament::dropdown.list.item>
    </x-filament::dropdown.list>
</x-filament::dropdown>
```
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3

=======
=======
<<<<<<< .merge_file_geucKW

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
#### Caratteristiche Principali:
- **Trigger Personalizzabile**: Usa lo slot `trigger` per personalizzare il pulsante
- **Posizionamento**: Controlla il posizionamento con `placement` (top-start, top-end, bottom-start, bottom-end)
- **Larghezza**: Imposta la larghezza con `width` (xs, sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl)
- **Altezza Massima**: Controlla l'altezza massima con `max-height`
- **Colori**: Supporto per colori (danger, info, primary, success, warning)
- **Icone**: Aggiungi icone con l'attributo `icon`
- **Badge**: Aggiungi badge con lo slot `badge`
- **Link**: Converti in link con `tag="a"` e `href`
<<<<<<< HEAD
### Avatar
Il componente avatar di Filament gestisce le immagini profilo con:
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
### Avatar
Il componente avatar di Filament gestisce le immagini profilo con:
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Avatar
Il componente avatar di Filament gestisce le immagini profilo con:
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ

### Avatar
Il componente avatar di Filament gestisce le immagini profilo con:

```blade
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
>>>>>>> .merge_file_DDXAqJ
=======
### Avatar
Il componente avatar di Filament gestisce le immagini profilo con:
>>>>>>> laraxot/dev
<<<<<<< .merge_file_Kps3Q3
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
<x-filament::avatar
    src="{{ $user->profile_photo_url }}"
    alt="{{ $user->name }}"
    size="md"
/>
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
```

=======
=======
<<<<<<< .merge_file_geucKW
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

>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
#### Caratteristiche:
- **Dimensioni**: sm, md, lg o classi personalizzate
- **Forma**: Controlla la forma con `:circular="true/false"`
- **Fallback**: Gestione automatica delle immagini mancanti
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
### Loading Indicator
Il componente loading indicator di Filament mostra lo stato di caricamento:
<x-filament::loading-indicator />
- **Dimensioni**: sm, md, lg
- **Colori**: Personalizzabili
- **Animazione**: Smooth e responsive
## Best Practices
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ

### Loading Indicator
Il componente loading indicator di Filament mostra lo stato di caricamento:

```blade
<x-filament::loading-indicator />
```

#### Caratteristiche:
- **Dimensioni**: sm, md, lg
- **Colori**: Personalizzabili
- **Animazione**: Smooth e responsive

## Best Practices

<<<<<<< .merge_file_Kps3Q3
=======
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
### Loading Indicator
Il componente loading indicator di Filament mostra lo stato di caricamento:
<x-filament::loading-indicator />
- **Dimensioni**: sm, md, lg
- **Colori**: Personalizzabili
- **Animazione**: Smooth e responsive
## Best Practices
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
### Layout
- Mantenere la separazione tra frontoffice e backoffice
- Utilizzare i layout appropriati per ogni contesto
- Seguire la struttura standard dei layout
- Supportare il tema scuro
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3

=======
=======
<<<<<<< .merge_file_geucKW

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
### Componenti
- Utilizzare i componenti Filament quando disponibili
- Personalizzare i componenti solo quando necessario
- Documentare i componenti personalizzati
- Testare in entrambi i temi
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3

=======
=======
<<<<<<< .merge_file_geucKW

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
### Cosa NON fare
- ❌ Utilizzare layout Filament nel frontoffice
- ❌ Mischiare componenti tra frontoffice e backoffice
- ❌ Duplicare funzionalità già presenti in Filament
- ❌ Ignorare il supporto per il tema scuro
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3

=======
=======
<<<<<<< .merge_file_geucKW

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
### Cosa fare
- ✅ Utilizzare `x-layouts.main` per il frontoffice
- ✅ Utilizzare i componenti Filament quando disponibili
- ✅ Seguire le convenzioni di naming
- ✅ Documentare i componenti personalizzati
- ✅ Testare in entrambi i temi
<<<<<<< HEAD
## Esempi di Implementazione
### Dropdown Utente
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
## Esempi di Implementazione
### Dropdown Utente
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Esempi di Implementazione
### Dropdown Utente
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ

## Esempi di Implementazione

### Dropdown Utente
```blade
<x-filament::dropdown>
    <x-slot name="trigger">
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
>>>>>>> .merge_file_DDXAqJ
=======
## Esempi di Implementazione
### Dropdown Utente
>>>>>>> laraxot/dev
<<<<<<< .merge_file_Kps3Q3
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
        <button class="flex items-center">
            <x-filament::avatar
                src="{{ $user->profile_photo_url }}"
                alt="{{ $user->name }}"
                size="md"
            />
            <x-filament::icon
                name="heroicon-o-chevron-down"
                class="ml-1 h-4 w-4"
<<<<<<< HEAD
        </button>
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
        </button>
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
        </button>
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
            />
        </button>
    </x-slot>

    <x-filament::dropdown.list>
<<<<<<< .merge_file_Kps3Q3
=======
        </button>
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
=======
        </button>
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
        <x-filament::dropdown.list.item
            icon="heroicon-o-user"
            href="{{ route('profile.show') }}"
            tag="a"
        >
            {{ __('Profile') }}
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
            icon="heroicon-o-cog-6-tooth"
            href="{{ route('settings') }}"
            {{ __('Settings') }}
            icon="heroicon-o-arrow-right-on-rectangle"
            color="danger"
            wire:click="logout"
            {{ __('Log Out') }}
### Loading State
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
        </x-filament::dropdown.list.item>

        <x-filament::dropdown.list.item
            icon="heroicon-o-cog-6-tooth"
            href="{{ route('settings') }}"
            tag="a"
        >
            {{ __('Settings') }}
        </x-filament::dropdown.list.item>

        <x-filament::dropdown.list.item
            icon="heroicon-o-arrow-right-on-rectangle"
            color="danger"
            wire:click="logout"
        >
            {{ __('Log Out') }}
        </x-filament::dropdown.list.item>
    </x-filament::dropdown.list>
</x-filament::dropdown>
```

### Loading State
```blade
<<<<<<< .merge_file_Kps3Q3
=======
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
            icon="heroicon-o-cog-6-tooth"
            href="{{ route('settings') }}"
            {{ __('Settings') }}
            icon="heroicon-o-arrow-right-on-rectangle"
            color="danger"
            wire:click="logout"
            {{ __('Log Out') }}
### Loading State
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<div>
    <x-filament::loading-indicator wire:loading />
    <div wire:loading.remove>
        {{ $content }}
    </div>
</div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
```

=======
=======
<<<<<<< .merge_file_geucKW
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

>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
## Collegamenti Correlati
- [Documentazione Dropdown Filament](https://filamentphp.com/docs/3.x/support/blade-components/dropdown)
- [Documentazione Avatar Filament](https://filamentphp.com/docs/3.x/support/blade-components/avatar)
- [Documentazione Loading Indicator Filament](https://filamentphp.com/docs/3.x/support/blade-components/loading-indicator)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
## Volt e Folio
### Componenti Volt
- Utilizzare la direttiva `@volt` per i componenti Volt
  @volt('component.name')
  <?php
  use function Livewire\Volt\{state, mount};
  state([
      'property' => null,
  ]);
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ

## Volt e Folio

Nel progetto la sintassi di default per i componenti Volt interattivi è **class-based** (`new class extends Livewire\Volt\Component`). Gli esempi qui sotto che usano `use function Livewire\Volt\{state, mount\}` sono **legacy/mantenimento**.

### Componenti Volt
- Utilizzare la direttiva `@volt` per i componenti Volt
- Struttura standard:
  ```blade
  @volt('component.name')
  <?php
  use function Livewire\Volt\{state, mount};

  state([
      'property' => null,
  ]);

<<<<<<< .merge_file_Kps3Q3
=======
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
## Volt e Folio
### Componenti Volt
- Utilizzare la direttiva `@volt` per i componenti Volt
  @volt('component.name')
  <?php
  use function Livewire\Volt\{state, mount};
  state([
      'property' => null,
  ]);
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
  $action = function () {
      // Logica dell'azione
  };
  ?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3

=======
=======
<<<<<<< .merge_file_geucKW

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
  <div>
      <!-- Template del componente -->
  </div>
  @endvolt
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
### Pagine Folio
- Utilizzare Folio per le pagine del frontoffice
  use function Laravel\Folio\{middleware, name};
  middleware(['auth']);
  name('page.name');
      <!-- Contenuto della pagina -->
### Gestione dello Stato
- Utilizzare `state()` per definire le proprietà
- Utilizzare `mount()` per l'inizializzazione
- Gestire gli errori con try/catch
- Implementare stati di loading
### Esempi
#### Componente Volt
@volt('auth.logout')
<?php
use function Livewire\Volt\{state, mount};
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
  ```

### Pagine Folio
- Utilizzare Folio per le pagine del frontoffice
- Struttura standard:
  ```blade
  <?php
  use function Laravel\Folio\{middleware, name};
  use function Livewire\Volt\{state, mount};

  middleware(['auth']);
  name('page.name');

  state([
      'property' => null,
  ]);
  ?>

  <x-layouts.main>
      <!-- Contenuto della pagina -->
  </x-layouts.main>
  ```

### Gestione dello Stato
- In class-based, usa proprietà `public` e inizializza in `mount(): void`
- Gli helper functional `state()` / `computed()` sono legacy/mantenimento (non per nuovi componenti)
- Gestire gli errori con try/catch
- Implementare stati di loading

### Esempi

#### Componente Volt
```blade
@volt('auth.logout')
<?php
use function Livewire\Volt\{state, mount};

<<<<<<< .merge_file_Kps3Q3
=======
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
### Pagine Folio
- Utilizzare Folio per le pagine del frontoffice
  use function Laravel\Folio\{middleware, name};
  middleware(['auth']);
  name('page.name');
      <!-- Contenuto della pagina -->
### Gestione dello Stato
- Utilizzare `state()` per definire le proprietà
- Utilizzare `mount()` per l'inizializzazione
- Gestire gli errori con try/catch
- Implementare stati di loading
### Esempi
#### Componente Volt
@volt('auth.logout')
<?php
use function Livewire\Volt\{state, mount};
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
state([
    'isLoggingOut' => false,
    'success' => false,
    'error' => false,
]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3

=======
=======
<<<<<<< .merge_file_geucKW

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
$logout = function () {
    try {
        $this->isLoggingOut = true;
        // Logica di logout
        $this->success = true;
    } catch (\Exception $e) {
        $this->error = true;
    }
    $this->isLoggingOut = false;
};
?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW

<div>
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> .merge_file_DDXAqJ

<div>
=======
>>>>>>> laraxot/dev
<<<<<<< .merge_file_Kps3Q3
=======
>>>>>>> laraxot/dev
=======
=======

<div>
>>>>>>> .merge_file_eBFVRP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
    @if($success)
        <!-- Success state -->
    @elseif($error)
        <!-- Error state -->
    @else
        <!-- Default state -->
    @endif
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
    @if($isLoggingOut)
        <x-filament::loading-indicator />
@endvolt
#### Pagina Folio
use function Laravel\Folio\{middleware, name};
middleware(['auth']);
name('auth.logout');
<x-layouts.main>
    <x-slot name="title">
        {{ __('auth.logout.title') }}
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ

    @if($isLoggingOut)
        <x-filament::loading-indicator />
    @endif
</div>
@endvolt
```

#### Pagina Folio
```blade
<?php
use function Laravel\Folio\{middleware, name};
use function Livewire\Volt\{state, mount};

middleware(['auth']);
name('auth.logout');

state([
    'isLoggingOut' => false,
    'success' => false,
    'error' => false,
]);

$logout = function () {
    try {
        $this->isLoggingOut = true;
        // Logica di logout
        $this->success = true;
    } catch (\Exception $e) {
        $this->error = true;
    }
    $this->isLoggingOut = false;
};
?>

<x-layouts.main>
    <x-slot name="title">
        {{ __('auth.logout.title') }}
    </x-slot>

<<<<<<< .merge_file_Kps3Q3
=======
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
    @if($isLoggingOut)
        <x-filament::loading-indicator />
@endvolt
#### Pagina Folio
use function Laravel\Folio\{middleware, name};
middleware(['auth']);
name('auth.logout');
<x-layouts.main>
    <x-slot name="title">
        {{ __('auth.logout.title') }}
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    <div>
        @if($success)
            <!-- Success state -->
        @elseif($error)
            <!-- Error state -->
        @else
            <!-- Default state -->
        @endif
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
        @if($isLoggingOut)
            <x-filament::loading-indicator />
</x-layouts.main>
### Best Practices
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ

        @if($isLoggingOut)
            <x-filament::loading-indicator />
        @endif
    </div>
</x-layouts.main>
```

### Best Practices

<<<<<<< .merge_file_Kps3Q3
=======
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
        @if($isLoggingOut)
            <x-filament::loading-indicator />
</x-layouts.main>
### Best Practices
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
#### Gestione dello Stato
- Mantenere gli stati semplici e chiari
- Documentare gli stati e le loro transizioni
- Gestire correttamente gli errori
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
#### Componenti
- Seguire la struttura standard
- Mantenere la separazione tra logica e presentazione
- Testare i componenti in isolamento
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
- Implementare stati di loading

#### Componenti
- Utilizzare la direttiva `@volt` per i componenti Volt
- Seguire la struttura standard
- Mantenere la separazione tra logica e presentazione
- Testare i componenti in isolamento

<<<<<<< .merge_file_Kps3Q3
=======
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
#### Componenti
- Seguire la struttura standard
- Mantenere la separazione tra logica e presentazione
- Testare i componenti in isolamento
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
#### Cosa NON fare
- ❌ Omettere la direttiva `@volt` nei componenti Volt
- ❌ Mischiare logica di business con la presentazione
- ❌ Duplicare stati tra componenti
- ❌ Ignorare la gestione degli errori
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3

=======
=======
<<<<<<< .merge_file_geucKW

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
#### Cosa fare
- ✅ Utilizzare la direttiva `@volt` per i componenti Volt
- ✅ Seguire la struttura standard per i componenti
- ✅ Gestire correttamente gli stati e le azioni
- ✅ Implementare la gestione degli errori
- ✅ Testare i componenti
<<<<<<< HEAD
## Componenti di Autenticazione
### User Dropdown
- Utilizzare `x-blocks.navigation.user-dropdown` per utenti autenticati
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_eBFVRP
## Componenti di Autenticazione
### User Dropdown
- Utilizzare `x-blocks.navigation.user-dropdown` per utenti autenticati
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ

## Componenti di Autenticazione

### User Dropdown
- Utilizzare `x-blocks.navigation.user-dropdown` per utenti autenticati
- Struttura standard:
  ```blade
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
>>>>>>> .merge_file_DDXAqJ
=======
## Componenti di Autenticazione
### User Dropdown
- Utilizzare `x-blocks.navigation.user-dropdown` per utenti autenticati
>>>>>>> laraxot/dev
<<<<<<< .merge_file_Kps3Q3
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
  <x-blocks.navigation.user-dropdown :user="auth()->user()">
      <x-slot name="trigger">
          <x-filament::avatar
              src="{{ $user->profile_photo_url }}"
              alt="{{ $user->name }}"
          />
<<<<<<< HEAD
  </x-blocks.navigation.user-dropdown>
### Login Buttons
- Utilizzare `x-blocks.navigation.login-buttons` per utenti non autenticati
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_eBFVRP
  </x-blocks.navigation.user-dropdown>
### Login Buttons
- Utilizzare `x-blocks.navigation.login-buttons` per utenti non autenticati
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
      </x-slot>
  </x-blocks.navigation.user-dropdown>
  ```

### Login Buttons
- Utilizzare `x-blocks.navigation.login-buttons` per utenti non autenticati
- Struttura standard:
  ```blade
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
>>>>>>> .merge_file_DDXAqJ
=======
  </x-blocks.navigation.user-dropdown>
### Login Buttons
- Utilizzare `x-blocks.navigation.login-buttons` per utenti non autenticati
>>>>>>> laraxot/dev
<<<<<<< .merge_file_Kps3Q3
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
  <x-blocks.navigation.login-buttons>
      <x-ui.button
          href="{{ route('login') }}"
          color="primary"
      >
          {{ __('auth.login.link') }}
      </x-ui.button>
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
          href="{{ route('register') }}"
          color="secondary"
          {{ __('auth.register.link') }}
  </x-blocks.navigation.login-buttons>
- Utilizzare `@auth` e `@else` per gestire gli stati
- Esempio:
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ

      <x-ui.button
          href="{{ route('register') }}"
          color="secondary"
      >
          {{ __('auth.register.link') }}
      </x-ui.button>
  </x-blocks.navigation.login-buttons>
  ```

### Gestione dello Stato
- Utilizzare `@auth` e `@else` per gestire gli stati
- Esempio:
  ```blade
<<<<<<< .merge_file_Kps3Q3
=======
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
          href="{{ route('register') }}"
          color="secondary"
          {{ __('auth.register.link') }}
  </x-blocks.navigation.login-buttons>
- Utilizzare `@auth` e `@else` per gestire gli stati
- Esempio:
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
  @auth
      <x-blocks.navigation.user-dropdown :user="auth()->user()" />
  @else
      <x-blocks.navigation.login-buttons />
  @endauth
<<<<<<< HEAD
### Traduzioni
- Utilizzare il namespace `auth.` per le traduzioni
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
### Traduzioni
- Utilizzare il namespace `auth.` per le traduzioni
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Traduzioni
- Utilizzare il namespace `auth.` per le traduzioni
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
  ```

### Traduzioni
- Utilizzare il namespace `auth.` per le traduzioni
- Struttura standard:
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
>>>>>>> .merge_file_DDXAqJ
=======
### Traduzioni
- Utilizzare il namespace `auth.` per le traduzioni
>>>>>>> laraxot/dev
<<<<<<< .merge_file_Kps3Q3
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
  ```php
  return [
      'login' => [
          'title' => 'Login',
          'email' => 'Email',
          'password' => 'Password',
          'remember_me' => 'Remember me',
          'forgot_password' => 'Forgot password?',
          'submit' => 'Login',
          'link' => 'Login',
      ],
      'register' => [
          'title' => 'Register',
<<<<<<< HEAD
          'confirm_password' => 'Confirm password',
          'submit' => 'Register',
          'link' => 'Register',
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_eBFVRP
          'confirm_password' => 'Confirm password',
          'submit' => 'Register',
          'link' => 'Register',
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
          'email' => 'Email',
          'password' => 'Password',
          'confirm_password' => 'Confirm password',
          'submit' => 'Register',
          'link' => 'Register',
      ],
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
>>>>>>> .merge_file_DDXAqJ
=======
          'confirm_password' => 'Confirm password',
          'submit' => 'Register',
          'link' => 'Register',
>>>>>>> laraxot/dev
<<<<<<< .merge_file_Kps3Q3
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
      'logout' => [
          'title' => 'Logout',
          'confirm_message' => 'Are you sure you want to log out?',
          'success_title' => 'Logged out successfully',
          'success_message' => 'You have been logged out.',
          'error_title' => 'Error',
          'error_message' => 'An error occurred while logging out.',
          'confirm_button' => 'Logout',
          'cancel_button' => 'Cancel',
          'back_to_home' => 'Back to home',
          'try_again' => 'Try again',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
      ],
=======
=======
<<<<<<< .merge_file_geucKW
      ],
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
      ],
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
      ],
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
      'user_dropdown' => [
          'manage_account' => 'Manage Account',
          'profile' => 'Profile',
          'settings' => 'Settings',
          'logout' => 'Logout',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
  ];
- Mantenere la separazione tra stati autenticati e non
- Utilizzare i componenti appropriati
- Gestire correttamente le traduzioni
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
      ],
  ];
  ```

### Best Practices

#### Componenti
- Mantenere la separazione tra stati autenticati e non
- Utilizzare i componenti appropriati
- Gestire correttamente le traduzioni
- Supportare il tema scuro

<<<<<<< .merge_file_Kps3Q3
=======
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
  ];
- Mantenere la separazione tra stati autenticati e non
- Utilizzare i componenti appropriati
- Gestire correttamente le traduzioni
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
#### Traduzioni
- Utilizzare chiavi semantiche
- Mantenere la coerenza nella struttura
- Documentare le traduzioni
- Testare in tutte le lingue
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< .merge_file_geucKW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
- ❌ Mischiare stati autenticati e non
- ❌ Duplicare logica di autenticazione
- ❌ Ignorare le traduzioni
- ✅ Utilizzare i componenti appropriati
- ✅ Seguire la struttura standard
- ✅ Gestire correttamente le traduzioni
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ

#### Cosa NON fare
- ❌ Mischiare stati autenticati e non
- ❌ Duplicare logica di autenticazione
- ❌ Ignorare le traduzioni
- ❌ Ignorare il supporto per il tema scuro

#### Cosa fare
- ✅ Utilizzare i componenti appropriati
- ✅ Seguire la struttura standard
- ✅ Gestire correttamente le traduzioni
- ✅ Testare in entrambi gli stati
<<<<<<< .merge_file_Kps3Q3
=======
=======
<<<<<<< .merge_file_geucKW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_DDXAqJ
- ❌ Mischiare stati autenticati e non
- ❌ Duplicare logica di autenticazione
- ❌ Ignorare le traduzioni
- ✅ Utilizzare i componenti appropriati
- ✅ Seguire la struttura standard
- ✅ Gestire correttamente le traduzioni
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
- ✅ Testare in entrambi gli stati
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- ✅ Testare in entrambi gli stati
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< .merge_file_Kps3Q3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eBFVRP
>>>>>>> .merge_file_DDXAqJ
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
