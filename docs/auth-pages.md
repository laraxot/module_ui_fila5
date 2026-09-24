# Pagine di Autenticazione

## Pagina di Logout con Folio e Volt

### Struttura
```php
// Themes/One/resources/views/pages/auth/logout.blade.php
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
// Themes/One/resources/views/pages/auth/logout.blade.php
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
// /var/www/html/base_<nome progetto>/laravel/Themes/One/resources/views/pages/auth/logout.blade.php
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
// Themes/One/resources/views/pages/auth/logout.blade.php
<<<<<<< HEAD
// Themes/One/resources/views/pages/auth/logout.blade.php
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
// /var/www/html/base_<nome progetto>/laravel/Themes/One/resources/views/pages/auth/logout.blade.php
=======
// Themes/One/resources/views/pages/auth/logout.blade.php
>>>>>>> laraxot/dev
=======
// /var/www/html/base_<nome progetto>/laravel/Themes/One/resources/views/pages/auth/logout.blade.php
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
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
// Themes/One/resources/views/pages/auth/logout.blade.php
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_uj67q4
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_wzfbsT

<?php

use function Livewire\Volt\{state, mount};

state([
    'confirmingLogout' => false,
]);

$logout = function() {
    auth()->logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect('/');
};

?>

<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div class="text-center">
            <h2 class="text-2xl font-bold mb-4">{{ __('Stai per essere disconnesso') }}</h2>
            <p class="text-gray-600 mb-6">{{ __('Sei sicuro di voler uscire?') }}</p>
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu
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
>>>>>>> .merge_file_uj67q4
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
            
            <div class="flex justify-center space-x-4">
                <button 
                    wire:click="logout" 
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu
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
>>>>>>> .merge_file_uj67q4
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_wzfbsT

            <div class="flex justify-center space-x-4">
                <button
                    wire:click="logout"
<<<<<<< .merge_file_jviVgJ
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
>>>>>>> .merge_file_wzfbsT
                    class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                >
                    {{ __('Esci') }}
                </button>
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu
=======
>>>>>>> 804451c (Lint)

                <a
                    href="{{ url()->previous() }}"
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

                <a
                    href="{{ url()->previous() }}"
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
                <a
                    href="{{ url()->previous() }}"
                <a 
                    href="{{ url()->previous() }}" 
=======
<<<<<<< HEAD
                
                <a 
                    href="{{ url()->previous() }}" 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

                <a
                    href="{{ url()->previous() }}"
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
                
                <a 
                    href="{{ url()->previous() }}" 
=======

                <a
                    href="{{ url()->previous() }}"
>>>>>>> laraxot/dev
=======
                
                <a 
                    href="{{ url()->previous() }}" 
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
                <a
                    href="{{ url()->previous() }}"
                <a 
                    href="{{ url()->previous() }}" 
=======

                <a
                    href="{{ url()->previous() }}"
>>>>>>> .merge_file_uj67q4
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

                <a
                    href="{{ url()->previous() }}"
>>>>>>> .merge_file_wzfbsT
                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"
                >
                    {{ __('Annulla') }}
                </a>
            </div>
        </div>
    </div>
</div>
```

### Caratteristiche
1. **Architettura**
   - Utilizzo di Folio per il routing delle pagine
   - Implementazione con Volt per la gestione dello stato
   - Componente Livewire reattivo

2. **Funzionalità**
   - Gestione dello stato con Volt
   - Logout sicuro con invalidazione della sessione
   - Redirect automatico dopo il logout
   - Opzione di annullamento con ritorno alla pagina precedente

3. **Sicurezza**
   - Invalidazione della sessione
   - Rigenerazione del token CSRF
   - Protezione contro attacchi CSRF
   - Gestione sicura del logout

4. **UX/UI**
   - Design responsive con Tailwind
   - Feedback visivo immediato
   - Doppia opzione (conferma/annulla)
   - Animazioni fluide

5. **Accessibilità**
   - Testi tradotti
   - Struttura semantica
   - Focus visibile
   - Supporto tastiera

### Best Practices
1. Utilizzare Volt per la gestione dello stato
2. Implementare feedback visivi per le azioni
3. Garantire la sicurezza del processo di logout
4. Fornire opzioni di annullamento
5. Mantenere la coerenza con il design system

### Note Tecniche
1. **Folio**
   - La pagina viene automaticamente mappata alla rotta `/logout`
   - Non è necessario definire rotte manualmente
   - Supporto nativo per i middleware

2. **Volt**
   - Gestione reattiva dello stato
   - Metodi e proprietà automaticamente disponibili
   - Integrazione nativa con Livewire

3. **Livewire**
   - Interazioni reattive senza refresh
   - Gestione automatica degli stati
   - Ottimizzazione delle performance

### Best Practices
1. Mantenere il design semplice e intuitivo
2. Fornire feedback chiari all'utente
3. Garantire la sicurezza del processo di logout
4. Assicurare la responsività su tutti i dispositivi
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
5. Utilizzare le traduzioni per il supporto multilingua
# Pagine di Autenticazione
<<<<<<< HEAD
## Pagina di Logout con Folio e Volt
### Struttura
```php
// Themes/One/resources/views/pages/auth/logout.blade.php
<?php
use function Livewire\Volt\{state, mount};
state([
    'confirmingLogout' => false,
]);
=======
=======
5. Utilizzare le traduzioni per il supporto multilingua
# Pagine di Autenticazione
>>>>>>> 804451c (Lint)
=======
5. Utilizzare le traduzioni per il supporto multilingua
# Pagine di Autenticazione
>>>>>>> .merge_file_wzfbsT

## Pagina di Logout con Folio e Volt

### Struttura
```php
// Themes/One/resources/views/pages/auth/logout.blade.php

<?php

use function Livewire\Volt\{state, mount};

state([
    'confirmingLogout' => false,
]);

<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
5. Utilizzare le traduzioni per il supporto multilingua 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
5. Utilizzare le traduzioni per il supporto multilingua 
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
5. Utilizzare le traduzioni per il supporto multilingua 
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
5. Utilizzare le traduzioni per il supporto multilingua
# Pagine di Autenticazione
## Pagina di Logout con Folio e Volt
### Struttura
```php
// Themes/One/resources/views/pages/auth/logout.blade.php
<?php
use function Livewire\Volt\{state, mount};
state([
    'confirmingLogout' => false,
]);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uj67q4
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_wzfbsT
$logout = function() {
    auth()->logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect('/');
};
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu

?>
=======
?>
=======
>>>>>>> .merge_file_uj67q4
=======
>>>>>>> .merge_file_wzfbsT

?>

<<<<<<< .merge_file_jviVgJ
<<<<<<< .merge_file_UsJiXu
?>
=======

?>
>>>>>>> 804451c (Lint)

=======
?>
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uj67q4
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_wzfbsT
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div class="text-center">
            <h2 class="text-2xl font-bold mb-4">{{ __('Stai per essere disconnesso') }}</h2>
            <p class="text-gray-600 mb-6">{{ __('Sei sicuro di voler uscire?') }}</p>
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_uj67q4
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_wzfbsT
            <div class="flex justify-center space-x-4">
                <button
                    wire:click="logout"
                    class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                >
                    {{ __('Esci') }}
                </button>
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_uj67q4
                <a
                    href="{{ url()->previous() }}"
                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"
=======
<<<<<<< .merge_file_UsJiXu
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uj67q4
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_wzfbsT

                <a
                    href="{{ url()->previous() }}"
                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"
                >
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
=======
                <a
                    href="{{ url()->previous() }}"
                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uj67q4
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_wzfbsT
                    {{ __('Annulla') }}
                </a>
            </div>
        </div>
    </div>
</div>
```
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_uj67q4
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_wzfbsT
### Caratteristiche
1. **Architettura**
   - Utilizzo di Folio per il routing delle pagine
   - Implementazione con Volt per la gestione dello stato
   - Componente Livewire reattivo
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_uj67q4
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_wzfbsT
2. **Funzionalità**
   - Gestione dello stato con Volt
   - Logout sicuro con invalidazione della sessione
   - Redirect automatico dopo il logout
   - Opzione di annullamento con ritorno alla pagina precedente
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_uj67q4
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_wzfbsT
3. **Sicurezza**
   - Invalidazione della sessione
   - Rigenerazione del token CSRF
   - Protezione contro attacchi CSRF
   - Gestione sicura del logout
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_uj67q4
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_wzfbsT
4. **UX/UI**
   - Design responsive con Tailwind
   - Feedback visivo immediato
   - Doppia opzione (conferma/annulla)
   - Animazioni fluide
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_uj67q4
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_wzfbsT
5. **Accessibilità**
   - Testi tradotti
   - Struttura semantica
   - Focus visibile
   - Supporto tastiera
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_uj67q4
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_wzfbsT
### Best Practices
1. Utilizzare Volt per la gestione dello stato
2. Implementare feedback visivi per le azioni
3. Garantire la sicurezza del processo di logout
4. Fornire opzioni di annullamento
5. Mantenere la coerenza con il design system
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_uj67q4
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_wzfbsT
### Note Tecniche
1. **Folio**
   - La pagina viene automaticamente mappata alla rotta `/logout`
   - Non è necessario definire rotte manualmente
   - Supporto nativo per i middleware
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_uj67q4
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_wzfbsT
2. **Volt**
   - Gestione reattiva dello stato
   - Metodi e proprietà automaticamente disponibili
   - Integrazione nativa con Livewire
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_uj67q4
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_wzfbsT
3. **Livewire**
   - Interazioni reattive senza refresh
   - Gestione automatica degli stati
   - Ottimizzazione delle performance
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
1. Mantenere il design semplice e intuitivo
2. Fornire feedback chiari all'utente
4. Assicurare la responsività su tutti i dispositivi
=======
>>>>>>> .merge_file_uj67q4
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_wzfbsT

### Best Practices
1. Mantenere il design semplice e intuitivo
2. Fornire feedback chiari all'utente
3. Garantire la sicurezza del processo di logout
4. Assicurare la responsività su tutti i dispositivi
5. Utilizzare le traduzioni per il supporto multilingua
<<<<<<< .merge_file_jviVgJ
<<<<<<< HEAD
<<<<<<< .merge_file_UsJiXu
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
1. Mantenere il design semplice e intuitivo
2. Fornire feedback chiari all'utente
4. Assicurare la responsività su tutti i dispositivi
<<<<<<< HEAD
=======
5. Utilizzare le traduzioni per il supporto multilingua
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
5. Utilizzare le traduzioni per il supporto multilingua 
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
>>>>>>> .merge_file_uj67q4
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_wzfbsT
