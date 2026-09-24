# Componenti Base

## 🎨 Design System

### Colori
```scss
// Palette principale
$primary: #007bff;
$secondary: #6c757d;
$success: #28a745;
$danger: #dc3545;
$warning: #ffc107;
$info: #17a2b8;

// Gradienti
$gradient-primary: linear-gradient(135deg, $primary, darken($primary, 10%));
$gradient-success: linear-gradient(135deg, $success, darken($success, 10%));
```

### Tipografia
```scss
// Font stack
$font-family-base: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
$font-family-heading: 'Montserrat', $font-family-base;

// Scale
$font-size-base: 1rem;
$font-size-sm: 0.875rem;
$font-size-lg: 1.125rem;

// Pesanti
$font-weight-normal: 400;
$font-weight-medium: 500;
$font-weight-bold: 700;
```

### Spaziatura
```scss
// Scale
$spacer: 1rem;
$spacers: (
  0: 0,
  1: $spacer * 0.25,
  2: $spacer * 0.5,
  3: $spacer,
  4: $spacer * 1.5,
  5: $spacer * 3
);
```

## 📱 Componenti

### Bottoni
```html
<!-- Primario -->
<button class="btn btn-primary">
  <i class="fas fa-plus"></i>
  Aggiungi
</button>

<!-- Secondario -->
<button class="btn btn-secondary">
  <i class="fas fa-edit"></i>
  Modifica
</button>

<!-- Pericolo -->
<button class="btn btn-danger">
  <i class="fas fa-trash"></i>
  Elimina
</button>
```

### Form
```html
<!-- Input -->
<div class="form-group">
  <label for="email">Email</label>
  <input type="email" id="email" class="form-control" placeholder="Inserisci email">
  <small class="form-text text-muted">Non condivideremo mai la tua email</small>
</div>

<!-- Select -->
<div class="form-group">
  <label for="role">Ruolo</label>
  <select id="role" class="form-control">
    <option value="">Seleziona un ruolo</option>
    <option value="admin">Amministratore</option>
    <option value="user">Utente</option>
  </select>
</div>
```

### Card
```html
<div class="card">
  <div class="card-header">
    <h5 class="card-title">Titolo Card</h5>
  </div>
  <div class="card-body">
    <p class="card-text">Contenuto della card</p>
  </div>
  <div class="card-footer">
    <button class="btn btn-primary">Azione</button>
  </div>
</div>
```

### Alert
```html
<!-- Successo -->
<div class="alert alert-success">
  <i class="fas fa-check-circle"></i>
  Operazione completata con successo
</div>

<!-- Errore -->
<div class="alert alert-danger">
  <i class="fas fa-exclamation-circle"></i>
  Si è verificato un errore
</div>

<!-- Info -->
<div class="alert alert-info">
  <i class="fas fa-info-circle"></i>
  Informazione importante
</div>
```

### Badge
```html
<!-- Primario -->
<span class="badge badge-primary">Nuovo</span>

<!-- Successo -->
<span class="badge badge-success">Completato</span>

<!-- Pericolo -->
<span class="badge badge-danger">Errore</span>
```

### Progress Bar
```html
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
    75%
  </div>
</div>
```

### Spinner
```html
<div class="spinner-border text-primary" role="status">
  <span class="sr-only">Caricamento...</span>
</div>
```

## 🔗 Collegamenti
- [Performance](./standards/performance.md)
- [Accessibilità](./standards/accessibility.md)
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
- [UI Standards](./standards/ui-standards.md)
# Componenti Base
<<<<<<< HEAD
## 🎨 Design System
=======

## 🎨 Design System

<<<<<<< .merge_file_kilHaH
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
- [UI Standards](./standards/ui-standards.md)
# Componenti Base

## 🎨 Design System

=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
- [UI Standards](./standards/ui-standards.md) 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [UI Standards](./standards/ui-standards.md) 
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [UI Standards](./standards/ui-standards.md) 
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- [UI Standards](./standards/ui-standards.md)
# Componenti Base
## 🎨 Design System
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hDejEA
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
### Colori
```scss
// Palette principale
$primary: #007bff;
$secondary: #6c757d;
$success: #28a745;
$danger: #dc3545;
$warning: #ffc107;
$info: #17a2b8;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_hDejEA
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
// Gradienti
$gradient-primary: linear-gradient(135deg, $primary, darken($primary, 10%));
$gradient-success: linear-gradient(135deg, $success, darken($success, 10%));
```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Tipografia
// Font stack
$font-family-base: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
$font-family-heading: 'Montserrat', $font-family-base;
=======
>>>>>>> .merge_file_hDejEA
=======
>>>>>>> 804451c (Lint)

### Tipografia
```scss
// Font stack
$font-family-base: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
$font-family-heading: 'Montserrat', $font-family-base;

<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
### Tipografia
// Font stack
$font-family-base: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
$font-family-heading: 'Montserrat', $font-family-base;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hDejEA
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
// Scale
$font-size-base: 1rem;
$font-size-sm: 0.875rem;
$font-size-lg: 1.125rem;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_hDejEA
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
// Pesanti
$font-weight-normal: 400;
$font-weight-medium: 500;
$font-weight-bold: 700;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH
=======
<<<<<<< HEAD
### Spaziatura
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Spaziatura
=======
>>>>>>> .merge_file_hDejEA
=======
>>>>>>> 804451c (Lint)
```

### Spaziatura
```scss
// Scale
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH
<<<<<<< HEAD
=======
=======
### Spaziatura
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hDejEA
>>>>>>> laraxot/dev
=======
=======
### Spaziatura
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
$spacer: 1rem;
$spacers: (
  0: 0,
  1: $spacer * 0.25,
  2: $spacer * 0.5,
  3: $spacer,
  4: $spacer * 1.5,
  5: $spacer * 3
);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH
=======
<<<<<<< HEAD
## 📱 Componenti
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## 📱 Componenti
=======
>>>>>>> .merge_file_hDejEA
=======
>>>>>>> 804451c (Lint)
```

## 📱 Componenti

<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH
<<<<<<< HEAD
=======
=======
## 📱 Componenti
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hDejEA
>>>>>>> laraxot/dev
=======
=======
## 📱 Componenti
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
### Bottoni
```html
<!-- Primario -->
<button class="btn btn-primary">
  <i class="fas fa-plus"></i>
  Aggiungi
</button>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_hDejEA
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
<!-- Secondario -->
<button class="btn btn-secondary">
  <i class="fas fa-edit"></i>
  Modifica
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH
</button>

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
</button>

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
</button>

>>>>>>> .merge_file_hDejEA
=======
</button>

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
<!-- Pericolo -->
<button class="btn btn-danger">
  <i class="fas fa-trash"></i>
  Elimina
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH
=======
<<<<<<< HEAD
### Form
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Form
=======
>>>>>>> .merge_file_hDejEA
=======
>>>>>>> 804451c (Lint)
</button>
```

### Form
```html
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH
<<<<<<< HEAD
=======
=======
### Form
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hDejEA
>>>>>>> laraxot/dev
=======
=======
### Form
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
<!-- Input -->
<div class="form-group">
  <label for="email">Email</label>
  <input type="email" id="email" class="form-control" placeholder="Inserisci email">
  <small class="form-text text-muted">Non condivideremo mai la tua email</small>
</div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH

<!-- Select -->
<div class="form-group">
=======
<<<<<<< HEAD
<!-- Select -->
=======
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)

<!-- Select -->
<div class="form-group">
=======
<!-- Select -->
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<!-- Select -->
=======

<!-- Select -->
<div class="form-group">
>>>>>>> .merge_file_hDejEA
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
  <label for="role">Ruolo</label>
  <select id="role" class="form-control">
    <option value="">Seleziona un ruolo</option>
    <option value="admin">Amministratore</option>
    <option value="user">Utente</option>
  </select>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH
=======
<<<<<<< HEAD
### Card
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Card
=======
>>>>>>> .merge_file_hDejEA
=======
>>>>>>> 804451c (Lint)
</div>
```

### Card
```html
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH
<<<<<<< HEAD
=======
=======
### Card
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hDejEA
>>>>>>> laraxot/dev
=======
=======
### Card
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
<div class="card">
  <div class="card-header">
    <h5 class="card-title">Titolo Card</h5>
  </div>
  <div class="card-body">
    <p class="card-text">Contenuto della card</p>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_hDejEA
  <div class="card-footer">
    <button class="btn btn-primary">Azione</button>
### Alert
=======
<<<<<<< .merge_file_kilHaH
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hDejEA
=======
>>>>>>> 804451c (Lint)
  </div>
  <div class="card-footer">
    <button class="btn btn-primary">Azione</button>
  </div>
</div>
```

### Alert
```html
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
=======
  <div class="card-footer">
    <button class="btn btn-primary">Azione</button>
### Alert
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_hDejEA
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
<!-- Successo -->
<div class="alert alert-success">
  <i class="fas fa-check-circle"></i>
  Operazione completata con successo
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH
</div>

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
</div>

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
</div>

>>>>>>> .merge_file_hDejEA
=======
</div>

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
<!-- Errore -->
<div class="alert alert-danger">
  <i class="fas fa-exclamation-circle"></i>
  Si è verificato un errore
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH
</div>

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
</div>

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
</div>

>>>>>>> .merge_file_hDejEA
=======
</div>

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
<!-- Info -->
<div class="alert alert-info">
  <i class="fas fa-info-circle"></i>
  Informazione importante
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Badge
<span class="badge badge-primary">Nuovo</span>
<span class="badge badge-success">Completato</span>
<span class="badge badge-danger">Errore</span>
### Progress Bar
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
    75%
### Spinner
<div class="spinner-border text-primary" role="status">
  <span class="sr-only">Caricamento...</span>
## 🔗 Collegamenti
- [Performance](./standards/performance.md)
- [Accessibilità](./standards/accessibility.md)

```
=======
>>>>>>> .merge_file_hDejEA
=======
>>>>>>> 804451c (Lint)
</div>
```

### Badge
```html
<!-- Primario -->
<span class="badge badge-primary">Nuovo</span>

<!-- Successo -->
<span class="badge badge-success">Completato</span>

<!-- Pericolo -->
<span class="badge badge-danger">Errore</span>
```

### Progress Bar
```html
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
    75%
  </div>
</div>
```

### Spinner
```html
<div class="spinner-border text-primary" role="status">
  <span class="sr-only">Caricamento...</span>
</div>
```

## 🔗 Collegamenti
- [Performance](./standards/performance.md)
- [Accessibilità](./standards/accessibility.md)
- [UI Standards](./standards/ui-standards.md)
<<<<<<< HEAD
<<<<<<< .merge_file_kilHaH
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
### Badge
<span class="badge badge-primary">Nuovo</span>
<span class="badge badge-success">Completato</span>
<span class="badge badge-danger">Errore</span>
### Progress Bar
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
    75%
### Spinner
<div class="spinner-border text-primary" role="status">
  <span class="sr-only">Caricamento...</span>
## 🔗 Collegamenti
- [Performance](./standards/performance.md)
- [Accessibilità](./standards/accessibility.md)
<<<<<<< HEAD

```
=======
- [UI Standards](./standards/ui-standards.md)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- [UI Standards](./standards/ui-standards.md) 
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
>>>>>>> .merge_file_hDejEA
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
