<<<<<<< HEAD
<<<<<<< .merge_file_qLRLRE
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
<<<<<<< HEAD
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_7X3x3Z
---
title: "Standard Form nei Temi"
type: rule
tags: [form, standards]
created: 2026-07-14
updated: 2026-07-14
qmd: "form-standards standard form nei temi"
issues: ["https://github.com/provtv/<nome repository>/issues/124"]
discussions: ["https://github.com/provtv/<nome repository>/discussions/1"]
related:
  - "./accessibility.md"
  - "./auth-form-standards-1.md"
  - "./auth-form-standards.md"
  - "./form-standards-1.md"
  - "./performance.md"
  - "./ui-standards.md"
---
<<<<<<< .merge_file_qLRLRE
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> .merge_file_7X3x3Z
>>>>>>> laraxot/dev
# Standard Form nei Temi

## Principi Generali

### Layout e Allineamento
- I form devono essere centrati nella pagina con margini appropriati
- Utilizzare una larghezza massima per garantire leggibilità
- Mantenere una spaziatura consistente tra gli elementi

```html
<div class="container mx-auto max-w-4xl px-4 py-8">
  <form class="w-full space-y-6">
    <!-- Contenuto del form -->
  </form>
</div>
```

### Grid System
- Utilizzare il grid system di Tailwind per layout responsivi
- Su mobile: colonna singola
- Su tablet e desktop: layout a due colonne dove appropriato

```html
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
  <div class="col-span-1">
    <!-- Campo 1 -->
  </div>
  <div class="col-span-1">
    <!-- Campo 2 -->
  </div>
</div>
```

### Spaziatura
```scss
// Margini e padding consistenti
.form-container {
  @apply p-6 md:p-8;
}

.form-group {
  @apply mb-4 md:mb-6;
}

.form-section {
  @apply mb-8 md:mb-12;
}
```

## Componenti Form

### Input Text
```html
<div class="form-group">
  <label class="block text-sm font-medium text-gray-700 mb-2">
    Nome
  </label>
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    type="text"
    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary-500"
  >
</div>
```

### Select
```html
<div class="form-group">
  <label class="block text-sm font-medium text-gray-700 mb-2">
    Ruolo
  </label>
  <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary-500">
    <option>Seleziona...</option>
  </select>
</div>
```

### Checkbox e Radio
```html
<div class="form-group">
  <div class="flex items-center">
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
      type="checkbox"
      class="h-4 w-4 text-primary-600 border-gray-300 rounded focus:ring-primary-500"
    >
    <label class="ml-2 text-sm text-gray-700">
      Accetto i termini
    </label>
  </div>
</div>
```

## Responsive Design

### Mobile First
```scss
// Base styles (mobile)
.form-container {
  width: 100%;
  padding: 1rem;
}

// Tablet (md)
@screen md {
  .form-container {
    padding: 2rem;
    max-width: 768px;
    margin: 0 auto;
  }
}

// Desktop (lg)
@screen lg {
  .form-container {
    max-width: 1024px;
  }
}
```

### Breakpoints
```scss
// Tailwind breakpoints
screens: {
  'sm': '640px',
  'md': '768px',
  'lg': '1024px',
  'xl': '1280px',
  '2xl': '1536px',
}
```

## Validazione e Feedback

### Errori
```html
<div class="form-group">
  <label class="block text-sm font-medium text-gray-700 mb-2">
    Email
  </label>
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    type="email"
    class="w-full px-4 py-2 border border-red-300 rounded-md focus:ring-2 focus:ring-red-500"
    aria-invalid="true"
    aria-describedby="email-error"
  >
  <p id="email-error" class="mt-2 text-sm text-red-600">
    Inserisci un indirizzo email valido
  </p>
</div>
```

### Successo
```html
<div class="form-group">
  <label class="block text-sm font-medium text-gray-700 mb-2">
    Username
  </label>
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
  <input
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    type="text"
    class="w-full px-4 py-2 border border-green-300 rounded-md focus:ring-2 focus:ring-green-500"
    aria-invalid="false"
  >
  <p class="mt-2 text-sm text-green-600">
    Username disponibile
  </p>
</div>
```

## Accessibilità

### ARIA Labels
```html
<div class="form-group">
  <label id="email-label" class="block text-sm font-medium text-gray-700 mb-2">
    Email
  </label>
<<<<<<< HEAD
<<<<<<< HEAD
=======
  <input
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    type="email"
    aria-labelledby="email-label"
    aria-required="true"
    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary-500"
  >
</div>
```

### Focus States
```scss
// Focus visibile e consistente
.form-input:focus {
  @apply outline-none ring-2 ring-primary-500 border-transparent;
}

// Focus visibile per keyboard navigation
.form-input:focus-visible {
  @apply ring-2 ring-primary-500 ring-offset-2;
}
```

## Performance

### Loading States
```html
<<<<<<< HEAD
<<<<<<< HEAD
=======
<button
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<button 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<button
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
<button 
=======
<button
>>>>>>> laraxot/dev
=======
<button 
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
  type="submit"
  class="btn btn-primary"
  disabled
>
  <span class="spinner" aria-hidden="true"></span>
  <span>Caricamento...</span>
</button>
```

### Lazy Loading
```javascript
// Lazy load form validation library
const loadValidator = () => import('./validator.js');

form.addEventListener('submit', async (e) => {
  const validator = await loadValidator();
  // Validate form
});
```

## Best Practices

1. **Centratura e Allineamento**
   - Tutti i form devono essere centrati nella pagina
   - Utilizzare container con larghezza massima
   - Mantenere margini consistenti

2. **Responsive Design**
   - Layout a colonna singola su mobile
   - Grid system per schermi più grandi
   - Breakpoint standard di Tailwind

3. **Spaziatura**
   - Margini verticali consistenti tra gruppi di campi
   - Padding interno consistente per i container
   - Gap appropriato nel grid system

4. **Validazione**
   - Feedback visivo immediato
   - Messaggi di errore chiari
   - Stati di successo appropriati

5. **Accessibilità**
   - ARIA labels per tutti i campi
   - Focus states visibili
   - Messaggi di errore associati ai campi

6. **Performance**
   - Lazy loading di script pesanti
   - Stati di loading appropriati
   - Ottimizzazione delle risorse

## Collegamenti
- [UI Standards](./ui-standards.md)
- [Accessibility](./accessibility.md)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Performance](./performance.md)
# Standard Form nei Temi

## Principi Generali

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
- [Performance](./performance.md) 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Performance](./performance.md) 
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [Performance](./performance.md) 
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- [Performance](./performance.md)
# Standard Form nei Temi
## Principi Generali
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
### Layout e Allineamento
- I form devono essere centrati nella pagina con margini appropriati
- Utilizzare una larghezza massima per garantire leggibilità
- Mantenere una spaziatura consistente tra gli elementi
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
```html
<div class="container mx-auto max-w-4xl px-4 py-8">
  <form class="w-full space-y-6">
    <!-- Contenuto del form -->
  </form>
</div>
```
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
### Grid System
- Utilizzare il grid system di Tailwind per layout responsivi
- Su mobile: colonna singola
- Su tablet e desktop: layout a due colonne dove appropriato
<<<<<<< HEAD
=======
<<<<<<< HEAD

```html
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
  <div class="col-span-1">
    <!-- Campo 1 -->
  </div>
<<<<<<< HEAD
    <!-- Campo 2 -->
=======
<<<<<<< HEAD
  <div class="col-span-1">
    <!-- Campo 2 -->
  </div>
</div>
```

=======
    <!-- Campo 2 -->
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
### Spaziatura
```scss
// Margini e padding consistenti
.form-container {
  @apply p-6 md:p-8;
}
<<<<<<< HEAD
=======
<<<<<<< HEAD

.form-group {
  @apply mb-4 md:mb-6;
}

.form-section {
  @apply mb-8 md:mb-12;
}
```

## Componenti Form

### Input Text
```html
=======
>>>>>>> laraxot/dev
.form-group {
  @apply mb-4 md:mb-6;
.form-section {
  @apply mb-8 md:mb-12;
## Componenti Form
### Input Text
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<div class="form-group">
  <label class="block text-sm font-medium text-gray-700 mb-2">
    Nome
  </label>
  <input
    type="text"
    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary-500"
  >
<<<<<<< HEAD
=======
<<<<<<< HEAD
</div>
```

### Select
```html
<div class="form-group">
  <label class="block text-sm font-medium text-gray-700 mb-2">
    Ruolo
  </label>
  <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary-500">
    <option>Seleziona...</option>
  </select>
</div>
```

### Checkbox e Radio
```html
<div class="form-group">
=======
>>>>>>> laraxot/dev
### Select
    Ruolo
  <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary-500">
    <option>Seleziona...</option>
  </select>
### Checkbox e Radio
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
  <div class="flex items-center">
    <input
      type="checkbox"
      class="h-4 w-4 text-primary-600 border-gray-300 rounded focus:ring-primary-500"
    >
    <label class="ml-2 text-sm text-gray-700">
      Accetto i termini
    </label>
<<<<<<< HEAD
=======
<<<<<<< HEAD
  </div>
</div>
```

## Responsive Design

### Mobile First
```scss
// Base styles (mobile)
.form-container {
  width: 100%;
  padding: 1rem;
}

=======
>>>>>>> laraxot/dev
## Responsive Design
### Mobile First
// Base styles (mobile)
  width: 100%;
  padding: 1rem;
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
// Tablet (md)
@screen md {
  .form-container {
    padding: 2rem;
    max-width: 768px;
    margin: 0 auto;
  }
<<<<<<< HEAD
=======
<<<<<<< HEAD
}

// Desktop (lg)
@screen lg {
  .form-container {
    max-width: 1024px;
  }
}
```

### Breakpoints
```scss
=======
>>>>>>> laraxot/dev
// Desktop (lg)
@screen lg {
    max-width: 1024px;
### Breakpoints
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
// Tailwind breakpoints
screens: {
  'sm': '640px',
  'md': '768px',
  'lg': '1024px',
  'xl': '1280px',
  '2xl': '1536px',
<<<<<<< HEAD
## Validazione e Feedback
### Errori
    Email
=======
<<<<<<< HEAD
}
```

## Validazione e Feedback

### Errori
```html
<div class="form-group">
  <label class="block text-sm font-medium text-gray-700 mb-2">
    Email
  </label>
  <input
=======
## Validazione e Feedback
### Errori
    Email
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    type="email"
    class="w-full px-4 py-2 border border-red-300 rounded-md focus:ring-2 focus:ring-red-500"
    aria-invalid="true"
    aria-describedby="email-error"
<<<<<<< HEAD
=======
<<<<<<< HEAD
  >
  <p id="email-error" class="mt-2 text-sm text-red-600">
    Inserisci un indirizzo email valido
  </p>
</div>
```

### Successo
```html
<div class="form-group">
  <label class="block text-sm font-medium text-gray-700 mb-2">
    Username
  </label>
>>>>>>> laraxot/dev
  <input
    type="text"
    class="w-full px-4 py-2 border border-green-300 rounded-md focus:ring-2 focus:ring-green-500"
    aria-invalid="false"
  >
  <p class="mt-2 text-sm text-green-600">
    Username disponibile
  </p>
</div>
```

## Accessibilità

### ARIA Labels
```html
<div class="form-group">
  <label id="email-label" class="block text-sm font-medium text-gray-700 mb-2">
    Email
  </label>
  <input
    type="email"
    aria-labelledby="email-label"
    aria-required="true"
    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary-500"
  >
</div>
```

### Focus States
```scss
// Focus visibile e consistente
.form-input:focus {
  @apply outline-none ring-2 ring-primary-500 border-transparent;
}

// Focus visibile per keyboard navigation
.form-input:focus-visible {
  @apply ring-2 ring-primary-500 ring-offset-2;
}
```

## Performance

### Loading States
```html
<<<<<<< HEAD
<button
  type="submit"
  class="btn btn-primary"
  disabled
>
  <span class="spinner" aria-hidden="true"></span>
  <span>Caricamento...</span>
</button>
```

### Lazy Loading
```javascript
// Lazy load form validation library
const loadValidator = () => import('./validator.js');

form.addEventListener('submit', async (e) => {
  const validator = await loadValidator();
  // Validate form
});
```

## Best Practices

1. **Centratura e Allineamento**
   - Tutti i form devono essere centrati nella pagina
   - Utilizzare container con larghezza massima
   - Mantenere margini consistenti

2. **Responsive Design**
   - Layout a colonna singola su mobile
   - Grid system per schermi più grandi
   - Breakpoint standard di Tailwind

3. **Spaziatura**
   - Margini verticali consistenti tra gruppi di campi
   - Padding interno consistente per i container
   - Gap appropriato nel grid system

4. **Validazione**
   - Feedback visivo immediato
   - Messaggi di errore chiari
   - Stati di successo appropriati

5. **Accessibilità**
   - ARIA labels per tutti i campi
   - Focus states visibili
   - Messaggi di errore associati ai campi

6. **Performance**
   - Lazy loading di script pesanti
   - Stati di loading appropriati
   - Ottimizzazione delle risorse

## Collegamenti
- [UI Standards](./ui-standards.md)
- [Accessibility](./accessibility.md)
- [Performance](./performance.md)
# Standard Form nei Temi
<<<<<<< HEAD
## Principi Generali
=======

## Principi Generali

>>>>>>> laraxot/dev
### Layout e Allineamento
- I form devono essere centrati nella pagina con margini appropriati
- Utilizzare una larghezza massima per garantire leggibilità
- Mantenere una spaziatura consistente tra gli elementi
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
```html
<div class="container mx-auto max-w-4xl px-4 py-8">
  <form class="w-full space-y-6">
    <!-- Contenuto del form -->
  </form>
</div>
```
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
### Grid System
- Utilizzare il grid system di Tailwind per layout responsivi
- Su mobile: colonna singola
- Su tablet e desktop: layout a due colonne dove appropriato
<<<<<<< HEAD
=======

```html
>>>>>>> laraxot/dev
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
  <div class="col-span-1">
    <!-- Campo 1 -->
  </div>
<<<<<<< HEAD
    <!-- Campo 2 -->
=======
  <div class="col-span-1">
    <!-- Campo 2 -->
  </div>
</div>
```

>>>>>>> laraxot/dev
### Spaziatura
```scss
// Margini e padding consistenti
.form-container {
  @apply p-6 md:p-8;
}
<<<<<<< HEAD
.form-group {
  @apply mb-4 md:mb-6;
.form-section {
  @apply mb-8 md:mb-12;
## Componenti Form
### Input Text
=======

.form-group {
  @apply mb-4 md:mb-6;
}

.form-section {
  @apply mb-8 md:mb-12;
}
```

## Componenti Form

### Input Text
```html
>>>>>>> laraxot/dev
<div class="form-group">
  <label class="block text-sm font-medium text-gray-700 mb-2">
    Nome
  </label>
  <input
    type="text"
    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary-500"
  >
<<<<<<< HEAD
### Select
    Ruolo
  <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary-500">
    <option>Seleziona...</option>
  </select>
### Checkbox e Radio
=======
</div>
```

### Select
```html
<div class="form-group">
  <label class="block text-sm font-medium text-gray-700 mb-2">
    Ruolo
  </label>
  <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary-500">
    <option>Seleziona...</option>
  </select>
</div>
```

### Checkbox e Radio
```html
<div class="form-group">
>>>>>>> laraxot/dev
  <div class="flex items-center">
    <input
      type="checkbox"
      class="h-4 w-4 text-primary-600 border-gray-300 rounded focus:ring-primary-500"
    >
    <label class="ml-2 text-sm text-gray-700">
      Accetto i termini
    </label>
<<<<<<< HEAD
## Responsive Design
### Mobile First
// Base styles (mobile)
  width: 100%;
  padding: 1rem;
=======
  </div>
</div>
```

## Responsive Design

### Mobile First
```scss
// Base styles (mobile)
.form-container {
  width: 100%;
  padding: 1rem;
}

>>>>>>> laraxot/dev
// Tablet (md)
@screen md {
  .form-container {
    padding: 2rem;
    max-width: 768px;
    margin: 0 auto;
  }
<<<<<<< HEAD
// Desktop (lg)
@screen lg {
    max-width: 1024px;
### Breakpoints
=======
}

// Desktop (lg)
@screen lg {
  .form-container {
    max-width: 1024px;
  }
}
```

### Breakpoints
```scss
>>>>>>> laraxot/dev
// Tailwind breakpoints
screens: {
  'sm': '640px',
  'md': '768px',
  'lg': '1024px',
  'xl': '1280px',
  '2xl': '1536px',
<<<<<<< HEAD
## Validazione e Feedback
### Errori
    Email
=======
}
```

## Validazione e Feedback

### Errori
```html
<div class="form-group">
  <label class="block text-sm font-medium text-gray-700 mb-2">
    Email
  </label>
  <input
>>>>>>> laraxot/dev
    type="email"
    class="w-full px-4 py-2 border border-red-300 rounded-md focus:ring-2 focus:ring-red-500"
    aria-invalid="true"
    aria-describedby="email-error"
<<<<<<< HEAD
  <p id="email-error" class="mt-2 text-sm text-red-600">
    Inserisci un indirizzo email valido
  </p>
### Successo
    Username
    class="w-full px-4 py-2 border border-green-300 rounded-md focus:ring-2 focus:ring-green-500"
    aria-invalid="false"
  <p class="mt-2 text-sm text-green-600">
    Username disponibile
## Accessibilità
### ARIA Labels
  <label id="email-label" class="block text-sm font-medium text-gray-700 mb-2">
    aria-labelledby="email-label"
    aria-required="true"
### Focus States
// Focus visibile e consistente
.form-input:focus {
  @apply outline-none ring-2 ring-primary-500 border-transparent;
// Focus visibile per keyboard navigation
.form-input:focus-visible {
  @apply ring-2 ring-primary-500 ring-offset-2;
## Performance
### Loading States
=======
  >
  <p id="email-error" class="mt-2 text-sm text-red-600">
    Inserisci un indirizzo email valido
  </p>
</div>
```

### Successo
```html
<div class="form-group">
  <label class="block text-sm font-medium text-gray-700 mb-2">
    Username
  </label>
  <input
    type="text"
    class="w-full px-4 py-2 border border-green-300 rounded-md focus:ring-2 focus:ring-green-500"
    aria-invalid="false"
  >
  <p class="mt-2 text-sm text-green-600">
    Username disponibile
  </p>
</div>
```

## Accessibilità

### ARIA Labels
```html
<div class="form-group">
  <label id="email-label" class="block text-sm font-medium text-gray-700 mb-2">
    Email
  </label>
  <input
    type="email"
    aria-labelledby="email-label"
    aria-required="true"
    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary-500"
  >
</div>
```

### Focus States
```scss
// Focus visibile e consistente
.form-input:focus {
  @apply outline-none ring-2 ring-primary-500 border-transparent;
}

// Focus visibile per keyboard navigation
.form-input:focus-visible {
  @apply ring-2 ring-primary-500 ring-offset-2;
}
```

## Performance

### Loading States
```html
<<<<<<< .merge_file_qLRLRE
=======
=======
>>>>>>> laraxot/dev
  <p id="email-error" class="mt-2 text-sm text-red-600">
    Inserisci un indirizzo email valido
  </p>
### Successo
    Username
    class="w-full px-4 py-2 border border-green-300 rounded-md focus:ring-2 focus:ring-green-500"
    aria-invalid="false"
  <p class="mt-2 text-sm text-green-600">
    Username disponibile
## Accessibilità
### ARIA Labels
  <label id="email-label" class="block text-sm font-medium text-gray-700 mb-2">
    aria-labelledby="email-label"
    aria-required="true"
### Focus States
// Focus visibile e consistente
.form-input:focus {
  @apply outline-none ring-2 ring-primary-500 border-transparent;
// Focus visibile per keyboard navigation
.form-input:focus-visible {
  @apply ring-2 ring-primary-500 ring-offset-2;
## Performance
### Loading States
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_7X3x3Z
>>>>>>> laraxot/dev
<button
  type="submit"
  class="btn btn-primary"
  disabled
>
  <span class="spinner" aria-hidden="true"></span>
  <span>Caricamento...</span>
</button>
<<<<<<< HEAD
<<<<<<< .merge_file_qLRLRE
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

>>>>>>> .merge_file_7X3x3Z
>>>>>>> laraxot/dev
### Lazy Loading
```javascript
// Lazy load form validation library
const loadValidator = () => import('./validator.js');
<<<<<<< HEAD
<<<<<<< .merge_file_qLRLRE

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_7X3x3Z
>>>>>>> laraxot/dev
form.addEventListener('submit', async (e) => {
  const validator = await loadValidator();
  // Validate form
});
<<<<<<< HEAD
<<<<<<< .merge_file_qLRLRE
=======
<<<<<<< HEAD
## Best Practices
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Best Practices
=======
>>>>>>> .merge_file_7X3x3Z
```

## Best Practices

<<<<<<< .merge_file_qLRLRE
<<<<<<< HEAD
=======
=======
## Best Practices
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_7X3x3Z
>>>>>>> laraxot/dev
1. **Centratura e Allineamento**
   - Tutti i form devono essere centrati nella pagina
   - Utilizzare container con larghezza massima
   - Mantenere margini consistenti
<<<<<<< HEAD
<<<<<<< .merge_file_qLRLRE

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_7X3x3Z
>>>>>>> laraxot/dev
2. **Responsive Design**
   - Layout a colonna singola su mobile
   - Grid system per schermi più grandi
   - Breakpoint standard di Tailwind
<<<<<<< HEAD
<<<<<<< .merge_file_qLRLRE

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_7X3x3Z
>>>>>>> laraxot/dev
3. **Spaziatura**
   - Margini verticali consistenti tra gruppi di campi
   - Padding interno consistente per i container
   - Gap appropriato nel grid system
<<<<<<< HEAD
<<<<<<< .merge_file_qLRLRE

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_7X3x3Z
>>>>>>> laraxot/dev
4. **Validazione**
   - Feedback visivo immediato
   - Messaggi di errore chiari
   - Stati di successo appropriati
<<<<<<< HEAD
<<<<<<< .merge_file_qLRLRE

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_7X3x3Z
>>>>>>> laraxot/dev
5. **Accessibilità**
   - ARIA labels per tutti i campi
   - Focus states visibili
   - Messaggi di errore associati ai campi
<<<<<<< HEAD
<<<<<<< .merge_file_qLRLRE

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_7X3x3Z
>>>>>>> laraxot/dev
6. **Performance**
   - Lazy loading di script pesanti
   - Stati di loading appropriati
   - Ottimizzazione delle risorse
<<<<<<< HEAD
<<<<<<< .merge_file_qLRLRE
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Collegamenti
- [UI Standards](./ui-standards.md)
- [Accessibility](./accessibility.md)
=======
>>>>>>> .merge_file_7X3x3Z

## Collegamenti
- [UI Standards](./ui-standards.md)
- [Accessibility](./accessibility.md)
- [Performance](./performance.md)
<<<<<<< .merge_file_qLRLRE
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
## Collegamenti
- [UI Standards](./ui-standards.md)
- [Accessibility](./accessibility.md)
<<<<<<< HEAD
=======
- [Performance](./performance.md)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- [Performance](./performance.md) 
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
>>>>>>> .merge_file_7X3x3Z
>>>>>>> laraxot/dev
