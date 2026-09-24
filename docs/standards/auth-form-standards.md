<<<<<<< .merge_file_7cCdZ3
=======
<<<<<<< HEAD
<<<<<<< .merge_file_GIVOMF
=======
<<<<<<< .merge_file_KHXzav
>>>>>>> .merge_file_Fj8IiR
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_GIVOMF
=======
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> .merge_file_Fj8IiR
<<<<<<< HEAD
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< .merge_file_GIVOMF
=======
=======
>>>>>>> .merge_file_J6BA9V
>>>>>>> .merge_file_Fj8IiR
>>>>>>> .merge_file_1yAfJk
---
title: "Standard Form di Autenticazione"
type: rule
tags: [auth, form, standards]
created: 2026-07-14
updated: 2026-07-14
qmd: "auth-form-standards standard form di autenticazione"
issues: ["https://github.com/provtv/<nome repository>/issues/124"]
discussions: ["https://github.com/provtv/<nome repository>/discussions/1"]
related:
  - "./accessibility.md"
  - "./auth-form-standards-1.md"
  - "./form-standards-1.md"
  - "./form-standards.md"
  - "./performance.md"
  - "./ui-standards.md"
---
<<<<<<< .merge_file_7cCdZ3
=======
<<<<<<< .merge_file_GIVOMF
=======
<<<<<<< .merge_file_KHXzav
>>>>>>> .merge_file_Fj8IiR
<<<<<<< HEAD
=======

<<<<<<< HEAD
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
>>>>>>> laraxot/dev
<<<<<<< .merge_file_GIVOMF
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> .merge_file_J6BA9V
>>>>>>> .merge_file_Fj8IiR
>>>>>>> laraxot/dev
>>>>>>> .merge_file_1yAfJk
# Standard Form di Autenticazione

## Principi di Design

### Layout
- I form di autenticazione devono essere centrati sia orizzontalmente che verticalmente
- Utilizzare una larghezza massima appropriata per garantire leggibilità
- Mantenere una gerarchia visiva chiara con spaziatura consistente

### Container
```html
<div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <!-- Logo o intestazione -->
  </div>

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      <!-- Form -->
    </div>
  </div>
</div>
```

### Intestazione
```html
<div class="sm:mx-auto sm:w-full sm:max-w-md">
  <img class="mx-auto h-12 w-auto" src="logo.svg" alt="Logo">
  <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
    Titolo del Form
  </h2>
  <p class="mt-2 text-center text-sm text-gray-600">
    Sottotitolo o descrizione
  </p>
</div>
```

### Form
```html
<form class="space-y-6">
  <div>
    <label class="block text-sm font-medium text-gray-700">
      Email
    </label>
    <div class="mt-1">
<<<<<<< .merge_file_7cCdZ3
=======
<<<<<<< HEAD
      <input
        type="email"
<<<<<<< .merge_file_GIVOMF
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_KHXzav
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
      <input
        type="email"
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Fj8IiR
      <input 
        type="email" 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
      <input
        type="email"
<<<<<<< HEAD
        type="email" 
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
      <input 
        type="email" 
=======
>>>>>>> .merge_file_1yAfJk
      <input
        type="email"
        type="email" 
<<<<<<< .merge_file_7cCdZ3
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_GIVOMF
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
        type="email" 
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_J6BA9V
>>>>>>> .merge_file_Fj8IiR
>>>>>>> .merge_file_1yAfJk
        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm"
      >
    </div>
  </div>
<<<<<<< .merge_file_7cCdZ3
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_GIVOMF
=======
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Fj8IiR
>>>>>>> .merge_file_1yAfJk

  <!-- Altri campi -->

  <div>
    <button
<<<<<<< .merge_file_7cCdZ3
=======
<<<<<<< HEAD
<<<<<<< .merge_file_GIVOMF
=======
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_KHXzav
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Fj8IiR
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_GIVOMF
=======
=======
>>>>>>> .merge_file_J6BA9V
>>>>>>> .merge_file_Fj8IiR
>>>>>>> .merge_file_1yAfJk
  
  <!-- Altri campi -->
  
  <div>
    <button 
<<<<<<< .merge_file_7cCdZ3
=======
<<<<<<< .merge_file_GIVOMF
=======
<<<<<<< .merge_file_KHXzav
>>>>>>> .merge_file_Fj8IiR
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
<<<<<<< .merge_file_GIVOMF
=======
=======
>>>>>>> .merge_file_J6BA9V
>>>>>>> .merge_file_Fj8IiR
>>>>>>> .merge_file_1yAfJk

  <!-- Altri campi -->
  
  <div>
    <button
<<<<<<< .merge_file_7cCdZ3
=======
<<<<<<< .merge_file_GIVOMF
=======
<<<<<<< .merge_file_KHXzav
>>>>>>> .merge_file_Fj8IiR
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
<<<<<<< .merge_file_GIVOMF
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
>>>>>>> .merge_file_J6BA9V
>>>>>>> .merge_file_Fj8IiR
>>>>>>> .merge_file_1yAfJk
      type="submit"
      class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500"
    >
      Invia
    </button>
  </div>
</form>
```

## Responsive Design

### Mobile
- Form a larghezza piena
- Padding ridotto
- Stack verticale per tutti gli elementi

```scss
// Mobile (default)
.auth-container {
  @apply px-4 py-8;
}

.auth-form {
  @apply w-full;
}
```

### Tablet e Desktop
- Form centrato con larghezza massima
- Padding aumentato
- Possibile layout a due colonne per alcuni elementi

```scss
// Tablet (sm)
@screen sm {
  .auth-container {
    @apply px-6 py-12;
  }

  .auth-form {
    @apply max-w-md mx-auto;
  }
}

// Desktop (lg)
@screen lg {
  .auth-container {
    @apply px-8;
  }
}
```

## Elementi Visivi

### Ombreggiature
```scss
.auth-card {
  @apply shadow-sm;
<<<<<<< .merge_file_7cCdZ3
=======
<<<<<<< HEAD
<<<<<<< .merge_file_GIVOMF

=======
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_KHXzav
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Fj8IiR
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
<<<<<<< .merge_file_GIVOMF
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_1yAfJk
  @screen sm {
    @apply shadow-md;
  }
}
```

### Bordi e Arrotondamenti
```scss
.auth-card {
  @apply rounded-lg;
}

.auth-input {
  @apply rounded-md;
}

.auth-button {
  @apply rounded-md;
}
```

### Spaziatura
```scss
.auth-section {
  @apply space-y-6;
}

.auth-field {
  @apply space-y-1;
}

.auth-actions {
  @apply mt-6;
}
```

## Accessibilità

### Focus Management
```scss
.auth-input:focus {
  @apply outline-none ring-2 ring-primary-500 border-primary-500;
}

.auth-button:focus {
  @apply outline-none ring-2 ring-offset-2 ring-primary-500;
}
```

### ARIA Labels
```html
<div class="auth-field">
  <label id="email-label">Email</label>
  <input
    type="email"
    aria-labelledby="email-label"
    aria-required="true"
  >
</div>
```

## Best Practices

1. **Centratura e Allineamento**
   - Form sempre centrato nella viewport
   - Elementi interni allineati consistentemente
   - Larghezza massima appropriata per la leggibilità

2. **Gerarchia Visiva**
   - Logo/brand in alto
   - Titolo chiaro e descrittivo
   - Campi form ben spaziati
   - Call to action prominente

3. **Feedback Utente**
   - Validazione in tempo reale
   - Messaggi di errore chiari
   - Indicatori di stato (loading, success, error)
   - Focus states visibili

4. **Responsive Design**
   - Layout fluido su tutti i dispositivi
   - Spaziatura adattiva
   - Touch targets appropriati su mobile

5. **Performance**
   - Caricamento ottimizzato
   - Transizioni fluide
   - Gestione efficiente degli stati

6. **Sicurezza**
   - CSRF protection
   - Rate limiting
   - Validazione server-side
   - Sanitizzazione input

## Collegamenti
- [Form Standards](./form-standards.md)
- [UI Standards](./ui-standards.md)
- [Accessibility](./accessibility.md)
<<<<<<< .merge_file_7cCdZ3
=======
- [Form Standards](./form-standards-1.md)
# Standard Form di Autenticazione
## Principi di Design
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
### Layout
- I form di autenticazione devono essere centrati sia orizzontalmente che verticalmente
- Utilizzare una larghezza massima appropriata per garantire leggibilità
- Mantenere una gerarchia visiva chiara con spaziatura consistente
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
### Container
```html
<div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <!-- Logo o intestazione -->
  </div>
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      <!-- Form -->
    </div>
<<<<<<< HEAD
</div>
```
### Intestazione
=======
<<<<<<< HEAD
  </div>
</div>
```

### Intestazione
```html
=======
</div>
```
### Intestazione
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<div class="sm:mx-auto sm:w-full sm:max-w-md">
  <img class="mx-auto h-12 w-auto" src="logo.svg" alt="Logo">
  <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
    Titolo del Form
  </h2>
  <p class="mt-2 text-center text-sm text-gray-600">
    Sottotitolo o descrizione
  </p>
<<<<<<< HEAD
### Form
=======
<<<<<<< HEAD
</div>
```

### Form
```html
=======
### Form
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<form class="space-y-6">
  <div>
    <label class="block text-sm font-medium text-gray-700">
      Email
    </label>
    <div class="mt-1">
      <input
        type="email"
        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm"
      >
<<<<<<< HEAD
  <!-- Altri campi -->
=======
<<<<<<< HEAD
    </div>
  </div>

  <!-- Altri campi -->

  <div>
=======
  <!-- Altri campi -->
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    <button
      type="submit"
      class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500"
    >
      Invia
    </button>
<<<<<<< HEAD
</form>
## Responsive Design
=======
<<<<<<< HEAD
  </div>
</form>
```

## Responsive Design

=======
</form>
## Responsive Design
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
### Mobile
- Form a larghezza piena
- Padding ridotto
- Stack verticale per tutti gli elementi
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
```scss
// Mobile (default)
.auth-container {
  @apply px-4 py-8;
}
<<<<<<< HEAD
.auth-form {
  @apply w-full;
=======
<<<<<<< HEAD

.auth-form {
  @apply w-full;
}
```

=======
.auth-form {
  @apply w-full;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
### Tablet e Desktop
- Form centrato con larghezza massima
- Padding aumentato
- Possibile layout a due colonne per alcuni elementi
<<<<<<< HEAD
=======
<<<<<<< HEAD

```scss
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
// Tablet (sm)
@screen sm {
  .auth-container {
    @apply px-6 py-12;
  }
<<<<<<< HEAD
=======
<<<<<<< HEAD

  .auth-form {
    @apply max-w-md mx-auto;
  }
}

// Desktop (lg)
@screen lg {
  .auth-container {
    @apply px-8;
  }
}
```

## Elementi Visivi

### Ombreggiature
```scss
.auth-card {
  @apply shadow-sm;
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_J6BA9V

>>>>>>> .merge_file_Fj8IiR
>>>>>>> laraxot/dev
  @screen sm {
    @apply shadow-md;
  }
}
```

### Bordi e Arrotondamenti
```scss
.auth-card {
  @apply rounded-lg;
}

.auth-input {
  @apply rounded-md;
}

.auth-button {
  @apply rounded-md;
}
```

### Spaziatura
```scss
.auth-section {
  @apply space-y-6;
}

.auth-field {
  @apply space-y-1;
}

.auth-actions {
  @apply mt-6;
}
```

## Accessibilità

### Focus Management
```scss
.auth-input:focus {
  @apply outline-none ring-2 ring-primary-500 border-primary-500;
}

.auth-button:focus {
  @apply outline-none ring-2 ring-offset-2 ring-primary-500;
}
```

### ARIA Labels
```html
<<<<<<< HEAD
<div class="auth-field">
  <label id="email-label">Email</label>
<<<<<<< HEAD
  <input
=======
<<<<<<< HEAD
  <input 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
  <input
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
  <input 
=======
  <input
>>>>>>> laraxot/dev
=======
  <input 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
    type="email"
    aria-labelledby="email-label"
    aria-required="true"
  >
</div>
```

## Best Practices

1. **Centratura e Allineamento**
   - Form sempre centrato nella viewport
   - Elementi interni allineati consistentemente
   - Larghezza massima appropriata per la leggibilità

2. **Gerarchia Visiva**
   - Logo/brand in alto
   - Titolo chiaro e descrittivo
   - Campi form ben spaziati
   - Call to action prominente

3. **Feedback Utente**
   - Validazione in tempo reale
   - Messaggi di errore chiari
   - Indicatori di stato (loading, success, error)
   - Focus states visibili

4. **Responsive Design**
   - Layout fluido su tutti i dispositivi
   - Spaziatura adattiva
   - Touch targets appropriati su mobile

5. **Performance**
   - Caricamento ottimizzato
   - Transizioni fluide
   - Gestione efficiente degli stati

6. **Sicurezza**
   - CSRF protection
   - Rate limiting
   - Validazione server-side
   - Sanitizzazione input

## Collegamenti
<<<<<<< HEAD
<<<<<<< .merge_file_GIVOMF
=======
- [Form Standards](./form-standards.md)
=======
>>>>>>> .merge_file_Fj8IiR
- [Form Standards](./form_standards.md)
- [UI Standards](./ui-standards.md)
- [Accessibility](./accessibility.md)
# Standard Form di Autenticazione

## Principi di Design

=======
<<<<<<< HEAD
- [Form Standards](./form_standards.md)
=======
<<<<<<< HEAD
- [Form Standards](./form_standards.md)
- [UI Standards](./ui-standards.md)
- [Accessibility](./accessibility.md) 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
- [Form Standards](./form_standards.md)
- [UI Standards](./ui-standards.md)
- [Accessibility](./accessibility.md) 
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- [Form Standards](./form-standards-1.md)
>>>>>>> laraxot/dev
- [UI Standards](./ui-standards.md)
- [Accessibility](./accessibility.md)
- [Form Standards](./form-standards-1.md)
# Standard Form di Autenticazione
## Principi di Design
>>>>>>> laraxot/dev
### Layout
- I form di autenticazione devono essere centrati sia orizzontalmente che verticalmente
- Utilizzare una larghezza massima appropriata per garantire leggibilità
- Mantenere una gerarchia visiva chiara con spaziatura consistente
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
### Container
```html
<div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <!-- Logo o intestazione -->
  </div>
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      <!-- Form -->
    </div>
<<<<<<< HEAD
  </div>
</div>
```

### Intestazione
```html
=======
</div>
```
### Intestazione
>>>>>>> laraxot/dev
<div class="sm:mx-auto sm:w-full sm:max-w-md">
  <img class="mx-auto h-12 w-auto" src="logo.svg" alt="Logo">
  <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
    Titolo del Form
  </h2>
  <p class="mt-2 text-center text-sm text-gray-600">
    Sottotitolo o descrizione
  </p>
<<<<<<< HEAD
</div>
```

### Form
```html
=======
### Form
>>>>>>> laraxot/dev
<form class="space-y-6">
  <div>
    <label class="block text-sm font-medium text-gray-700">
      Email
    </label>
    <div class="mt-1">
      <input
        type="email"
        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm"
      >
<<<<<<< HEAD
    </div>
  </div>

  <!-- Altri campi -->

  <div>
=======
  <!-- Altri campi -->
>>>>>>> laraxot/dev
    <button
      type="submit"
      class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500"
    >
      Invia
    </button>
<<<<<<< HEAD
  </div>
</form>
```

## Responsive Design

=======
</form>
## Responsive Design
>>>>>>> laraxot/dev
### Mobile
- Form a larghezza piena
- Padding ridotto
- Stack verticale per tutti gli elementi
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
```scss
// Mobile (default)
.auth-container {
  @apply px-4 py-8;
}
<<<<<<< HEAD

.auth-form {
  @apply w-full;
}
```

=======
.auth-form {
  @apply w-full;
>>>>>>> laraxot/dev
### Tablet e Desktop
- Form centrato con larghezza massima
- Padding aumentato
- Possibile layout a due colonne per alcuni elementi
<<<<<<< HEAD

```scss
=======
>>>>>>> laraxot/dev
// Tablet (sm)
@screen sm {
  .auth-container {
    @apply px-6 py-12;
  }
<<<<<<< HEAD

  .auth-form {
    @apply max-w-md mx-auto;
  }
}

// Desktop (lg)
@screen lg {
  .auth-container {
    @apply px-8;
  }
}
```

## Elementi Visivi

### Ombreggiature
```scss
.auth-card {
  @apply shadow-sm;

  @screen sm {
    @apply shadow-md;
  }
}
```

### Bordi e Arrotondamenti
```scss
.auth-card {
  @apply rounded-lg;
}

.auth-input {
  @apply rounded-md;
}

.auth-button {
  @apply rounded-md;
}
```

### Spaziatura
```scss
.auth-section {
  @apply space-y-6;
}

.auth-field {
  @apply space-y-1;
}

.auth-actions {
  @apply mt-6;
}
```

## Accessibilità

### Focus Management
```scss
.auth-input:focus {
  @apply outline-none ring-2 ring-primary-500 border-primary-500;
}

.auth-button:focus {
  @apply outline-none ring-2 ring-offset-2 ring-primary-500;
}
```

### ARIA Labels
```html
=======
<<<<<<< .merge_file_GIVOMF
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Fj8IiR
  .auth-form {
    @apply max-w-md mx-auto;
// Desktop (lg)
@screen lg {
    @apply px-8;
## Elementi Visivi
### Ombreggiature
.auth-card {
  @apply shadow-sm;
  @screen sm {
    @apply shadow-md;
### Bordi e Arrotondamenti
  @apply rounded-lg;
.auth-input {
  @apply rounded-md;
.auth-button {
### Spaziatura
.auth-section {
  @apply space-y-6;
.auth-field {
  @apply space-y-1;
.auth-actions {
  @apply mt-6;
## Accessibilità
### Focus Management
.auth-input:focus {
  @apply outline-none ring-2 ring-primary-500 border-primary-500;
.auth-button:focus {
  @apply outline-none ring-2 ring-offset-2 ring-primary-500;
### ARIA Labels
<<<<<<< .merge_file_GIVOMF
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Fj8IiR
>>>>>>> laraxot/dev
<div class="auth-field">
  <label id="email-label">Email</label>
  <input
    type="email"
    aria-labelledby="email-label"
    aria-required="true"
  >
<<<<<<< HEAD
<<<<<<< .merge_file_GIVOMF
=======
=======
<<<<<<< HEAD
## Best Practices
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Fj8IiR
</div>
```

## Best Practices

<<<<<<< .merge_file_GIVOMF
=======
## Best Practices
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
=======
## Best Practices
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Fj8IiR
1. **Centratura e Allineamento**
   - Form sempre centrato nella viewport
   - Elementi interni allineati consistentemente
   - Larghezza massima appropriata per la leggibilità
<<<<<<< HEAD
<<<<<<< .merge_file_GIVOMF

=======
>>>>>>> laraxot/dev
=======

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Fj8IiR
2. **Gerarchia Visiva**
   - Logo/brand in alto
   - Titolo chiaro e descrittivo
   - Campi form ben spaziati
   - Call to action prominente
<<<<<<< HEAD

=======
<<<<<<< .merge_file_GIVOMF
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Fj8IiR
>>>>>>> laraxot/dev
3. **Feedback Utente**
   - Validazione in tempo reale
   - Messaggi di errore chiari
   - Indicatori di stato (loading, success, error)
   - Focus states visibili
<<<<<<< HEAD
<<<<<<< .merge_file_GIVOMF

=======
>>>>>>> laraxot/dev
=======

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Fj8IiR
4. **Responsive Design**
   - Layout fluido su tutti i dispositivi
   - Spaziatura adattiva
   - Touch targets appropriati su mobile
<<<<<<< HEAD

=======
<<<<<<< .merge_file_GIVOMF
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Fj8IiR
>>>>>>> laraxot/dev
5. **Performance**
   - Caricamento ottimizzato
   - Transizioni fluide
   - Gestione efficiente degli stati
<<<<<<< HEAD
<<<<<<< .merge_file_GIVOMF

=======
>>>>>>> laraxot/dev
=======

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Fj8IiR
6. **Sicurezza**
   - CSRF protection
   - Rate limiting
   - Validazione server-side
   - Sanitizzazione input
<<<<<<< HEAD
<<<<<<< .merge_file_GIVOMF
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Fj8IiR

## Collegamenti
- [Form Standards](./form_standards.md)
>>>>>>> laraxot/dev
- [UI Standards](./ui-standards.md)
- [Accessibility](./accessibility.md)
<<<<<<< .merge_file_GIVOMF
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Fj8IiR
## Collegamenti
- [UI Standards](./ui-standards.md)
<<<<<<< HEAD
- [Accessibility](./accessibility.md) 

```
=======
- [Accessibility](./accessibility.md)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- [Form Standards](./form_standards.md)
- [UI Standards](./ui-standards.md)
- [Accessibility](./accessibility.md) 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_GIVOMF
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_Fj8IiR
>>>>>>> laraxot/dev
>>>>>>> .merge_file_1yAfJk
