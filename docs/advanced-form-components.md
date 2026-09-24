# Componenti Form Avanzati

## 📝 Input Avanzati

### Input con Icona
```html
<div class="input-group">
  <span class="input-group-text">
    <i class="fas fa-user"></i>
  </span>
  <input type="text" class="form-control" placeholder="Username">
</div>
```

### Input con Validazione
```html
<div class="form-group">
  <label for="email">Email</label>
<<<<<<< HEAD
<<<<<<< HEAD
  <input
    type="email"
    id="email"
<<<<<<< .merge_file_WHmd7R
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
  <input
    type="email"
    id="email"
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
  <input 
    type="email" 
    id="email" 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
  <input
    type="email"
    id="email"
<<<<<<< HEAD
    type="email" 
    id="email" 
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
  <input 
    type="email" 
    id="email" 
=======
  <input
    type="email"
    id="email"
>>>>>>> laraxot/dev
=======
  <input 
    type="email" 
    id="email" 
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
<<<<<<< HEAD
    type="email" 
    id="email" 
=======
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======
  <input
    type="email"
    id="email"
>>>>>>> 0dadab4 (Lint)
    class="form-control is-invalid"
    aria-describedby="email-error"
  >
  <div id="email-error" class="invalid-feedback">
    Inserisci un indirizzo email valido
  </div>
</div>
```

### Input con Autocompletamento
```html
<div class="form-group">
  <label for="search">Cerca</label>
<<<<<<< HEAD
<<<<<<< HEAD
  <input
    type="text"
    id="search"
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
  <input
    type="text"
    id="search"
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
  <input 
    type="text" 
    id="search" 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
  <input
    type="text"
    id="search"
<<<<<<< HEAD
    type="text" 
    id="search" 
=======
<<<<<<< .merge_file_WHmd7R
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
  <input 
    type="text" 
    id="search" 
=======
  <input
    type="text"
    id="search"
>>>>>>> laraxot/dev
=======
  <input 
    type="text" 
    id="search" 
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
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======
  <input
    type="text"
    id="search"
>>>>>>> 0dadab4 (Lint)
    class="form-control"
    list="suggestions"
    autocomplete="off"
  >
  <datalist id="suggestions">
    <option value="Suggerimento 1">
    <option value="Suggerimento 2">
  </datalist>
</div>
```

## 📅 Selezione Data e Ora

### DatePicker
```html
<div class="form-group">
  <label for="date">Data</label>
  <div class="input-group datepicker">
<<<<<<< HEAD
<<<<<<< HEAD
    <input
      type="text"
      id="date"
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
    <input
      type="text"
      id="date"
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
    <input 
      type="text" 
      id="date" 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
    <input
      type="text"
      id="date"
<<<<<<< HEAD
      type="text" 
      id="date" 
=======
<<<<<<< .merge_file_WHmd7R
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
    <input 
      type="text" 
      id="date" 
=======
    <input
      type="text"
      id="date"
>>>>>>> laraxot/dev
=======
    <input 
      type="text" 
      id="date" 
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
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======
    <input
      type="text"
      id="date"
>>>>>>> 0dadab4 (Lint)
      class="form-control"
      data-date-format="dd/mm/yyyy"
    >
    <span class="input-group-text">
      <i class="fas fa-calendar"></i>
    </span>
  </div>
</div>
```

### TimePicker
```html
<div class="form-group">
  <label for="time">Ora</label>
  <div class="input-group timepicker">
<<<<<<< HEAD
<<<<<<< HEAD
    <input
      type="text"
      id="time"
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
    <input
      type="text"
      id="time"
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
    <input 
      type="text" 
      id="time" 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
    <input
      type="text"
      id="time"
<<<<<<< HEAD
      type="text" 
      id="time" 
=======
<<<<<<< .merge_file_WHmd7R
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
    <input 
      type="text" 
      id="time" 
=======
    <input
      type="text"
      id="time"
>>>>>>> laraxot/dev
=======
    <input 
      type="text" 
      id="time" 
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
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======
    <input
      type="text"
      id="time"
>>>>>>> 0dadab4 (Lint)
      class="form-control"
      data-time-format="HH:mm"
    >
    <span class="input-group-text">
      <i class="fas fa-clock"></i>
    </span>
  </div>
</div>
```

## 📊 Input Numerici

### Range Slider
```html
<div class="form-group">
  <label for="range">Range</label>
<<<<<<< HEAD
<<<<<<< HEAD
  <input
    type="range"
    id="range"
<<<<<<< .merge_file_WHmd7R
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
  <input
    type="range"
    id="range"
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
  <input 
    type="range" 
    id="range" 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
  <input
    type="range"
    id="range"
<<<<<<< HEAD
    type="range" 
    id="range" 
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
  <input 
    type="range" 
    id="range" 
=======
  <input
    type="range"
    id="range"
>>>>>>> laraxot/dev
=======
  <input 
    type="range" 
    id="range" 
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
<<<<<<< HEAD
    type="range" 
    id="range" 
=======
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======
  <input
    type="range"
    id="range"
>>>>>>> 0dadab4 (Lint)
    class="form-range"
    min="0"
    max="100"
    step="1"
  >
  <div class="range-value">50</div>
</div>
```

### Input con Step
```html
<div class="form-group">
  <label for="quantity">Quantità</label>
  <div class="input-group">
    <button class="btn btn-outline-secondary" type="button">-</button>
<<<<<<< HEAD
<<<<<<< HEAD
    <input
      type="number"
      id="quantity"
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
    <input
      type="number"
      id="quantity"
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
    <input 
      type="number" 
      id="quantity" 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
    <input
      type="number"
      id="quantity"
<<<<<<< HEAD
      type="number" 
      id="quantity" 
=======
<<<<<<< .merge_file_WHmd7R
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
    <input 
      type="number" 
      id="quantity" 
=======
    <input
      type="number"
      id="quantity"
>>>>>>> laraxot/dev
=======
    <input 
      type="number" 
      id="quantity" 
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
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======
    <input
      type="number"
      id="quantity"
>>>>>>> 0dadab4 (Lint)
      class="form-control text-center"
      min="0"
      max="100"
      step="1"
      value="1"
    >
    <button class="btn btn-outline-secondary" type="button">+</button>
  </div>
</div>
```

## 📎 Upload File

### Drag & Drop
```html
<div class="upload-area">
  <input type="file" id="file" class="d-none">
  <label for="file" class="upload-label">
    <i class="fas fa-cloud-upload-alt"></i>
    <span>Trascina i file qui o clicca per selezionare</span>
  </label>
  <div class="upload-preview"></div>
</div>
```

### Preview Immagini
```html
<div class="image-upload">
  <input type="file" id="image" accept="image/*" class="d-none">
  <label for="image" class="image-preview">
    <img src="placeholder.jpg" alt="Preview">
    <div class="image-overlay">
      <i class="fas fa-camera"></i>
      <span>Cambia immagine</span>
    </div>
  </label>
</div>
```

## 🎨 Stili e Comportamenti

### Focus States
```scss
.form-control {
  &:focus {
    border-color: $primary;
    box-shadow: 0 0 0 0.2rem rgba($primary, 0.25);
  }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
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
>>>>>>> .merge_file_KMvH8u
  
  &.is-invalid {
    border-color: $danger;
    
<<<<<<< .merge_file_WHmd7R
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
>>>>>>> .merge_file_KMvH8u
=======
>>>>>>> 0dadab4 (Lint)

  &.is-invalid {
    border-color: $danger;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
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
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    &:focus {
      box-shadow: 0 0 0 0.2rem rgba($danger, 0.25);
    }
  }
}
```

### Animazioni
```scss
.input-group {
  transition: all 0.3s ease;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R

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

>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
  &:focus-within {
    transform: translateY(-1px);
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  }
}
```

## 🔗 Collegamenti
- [Componenti Base](./base-components.md)
- [Feedback](./feedback-components.md)
- [Accessibilità](./standards/accessibility.md)
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
- [Performance](./standards/performance.md)
# Componenti Form Avanzati
<<<<<<< HEAD
## 📝 Input Avanzati
=======

## 📝 Input Avanzati

<<<<<<< .merge_file_WHmd7R
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
- [Performance](./standards/performance.md) 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Performance](./standards/performance.md) 
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [Performance](./standards/performance.md) 
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- [Performance](./standards/performance.md)
# Componenti Form Avanzati
## 📝 Input Avanzati
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======
- [Performance](./standards/performance.md)
# Componenti Form Avanzati

## 📝 Input Avanzati

>>>>>>> 0dadab4 (Lint)
### Input con Icona
```html
<div class="input-group">
  <span class="input-group-text">
    <i class="fas fa-user"></i>
  </span>
  <input type="text" class="form-control" placeholder="Username">
</div>
```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R

### Input con Validazione
```html
=======
<<<<<<< HEAD
### Input con Validazione
=======
<<<<<<< HEAD

### Input con Validazione
```html
=======
### Input con Validazione
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
### Input con Validazione
=======

### Input con Validazione
```html
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======

### Input con Validazione
```html
>>>>>>> 0dadab4 (Lint)
<div class="form-group">
  <label for="email">Email</label>
  <input
    type="email"
    id="email"
    class="form-control is-invalid"
    aria-describedby="email-error"
  >
  <div id="email-error" class="invalid-feedback">
    Inserisci un indirizzo email valido
  </div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
=======
<<<<<<< HEAD
### Input con Autocompletamento
  <label for="search">Cerca</label>
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Input con Autocompletamento
  <label for="search">Cerca</label>
=======
>>>>>>> .merge_file_KMvH8u
=======
>>>>>>> 0dadab4 (Lint)
</div>
```

### Input con Autocompletamento
```html
<div class="form-group">
  <label for="search">Cerca</label>
  <input
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
<<<<<<< HEAD
=======
=======
### Input con Autocompletamento
  <label for="search">Cerca</label>
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    type="text"
    id="search"
    class="form-control"
    list="suggestions"
    autocomplete="off"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
  >
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
  >
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
  >
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======
  >
>>>>>>> 0dadab4 (Lint)
  <datalist id="suggestions">
    <option value="Suggerimento 1">
    <option value="Suggerimento 2">
  </datalist>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
=======
<<<<<<< HEAD
## 📅 Selezione Data e Ora
### DatePicker
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## 📅 Selezione Data e Ora
### DatePicker
=======
>>>>>>> .merge_file_KMvH8u
=======
>>>>>>> 0dadab4 (Lint)
</div>
```

## 📅 Selezione Data e Ora

### DatePicker
```html
<div class="form-group">
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
<<<<<<< HEAD
=======
=======
## 📅 Selezione Data e Ora
### DatePicker
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
  <label for="date">Data</label>
  <div class="input-group datepicker">
    <input
      type="text"
      id="date"
      class="form-control"
      data-date-format="dd/mm/yyyy"
    >
    <span class="input-group-text">
      <i class="fas fa-calendar"></i>
    </span>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### TimePicker
  <label for="time">Ora</label>
  <div class="input-group timepicker">
      id="time"
      data-time-format="HH:mm"
      <i class="fas fa-clock"></i>
## 📊 Input Numerici
### Range Slider
  <label for="range">Range</label>
=======
>>>>>>> .merge_file_KMvH8u
=======
>>>>>>> 0dadab4 (Lint)
  </div>
</div>
```

### TimePicker
```html
<div class="form-group">
  <label for="time">Ora</label>
  <div class="input-group timepicker">
    <input
      type="text"
      id="time"
      class="form-control"
      data-time-format="HH:mm"
    >
    <span class="input-group-text">
      <i class="fas fa-clock"></i>
    </span>
  </div>
</div>
```

## 📊 Input Numerici

### Range Slider
```html
<div class="form-group">
  <label for="range">Range</label>
  <input
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
### TimePicker
  <label for="time">Ora</label>
  <div class="input-group timepicker">
      id="time"
      data-time-format="HH:mm"
      <i class="fas fa-clock"></i>
## 📊 Input Numerici
### Range Slider
  <label for="range">Range</label>
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    type="range"
    id="range"
    class="form-range"
    min="0"
    max="100"
    step="1"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
  <div class="range-value">50</div>
### Input con Step
  <label for="quantity">Quantità</label>
  <div class="input-group">
    <button class="btn btn-outline-secondary" type="button">-</button>
=======
>>>>>>> .merge_file_KMvH8u
=======
>>>>>>> 0dadab4 (Lint)
  >
  <div class="range-value">50</div>
</div>
```

### Input con Step
```html
<div class="form-group">
  <label for="quantity">Quantità</label>
  <div class="input-group">
    <button class="btn btn-outline-secondary" type="button">-</button>
    <input
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
  <div class="range-value">50</div>
### Input con Step
  <label for="quantity">Quantità</label>
  <div class="input-group">
    <button class="btn btn-outline-secondary" type="button">-</button>
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
      type="number"
      id="quantity"
      class="form-control text-center"
      min="0"
      max="100"
      step="1"
      value="1"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_KMvH8u
    <button class="btn btn-outline-secondary" type="button">+</button>
## 📎 Upload File
### Drag & Drop
=======
<<<<<<< .merge_file_WHmd7R
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KMvH8u
=======
>>>>>>> 0dadab4 (Lint)
    >
    <button class="btn btn-outline-secondary" type="button">+</button>
  </div>
</div>
```

## 📎 Upload File

### Drag & Drop
```html
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
<<<<<<< HEAD
=======
=======
    <button class="btn btn-outline-secondary" type="button">+</button>
## 📎 Upload File
### Drag & Drop
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
<div class="upload-area">
  <input type="file" id="file" class="d-none">
  <label for="file" class="upload-label">
    <i class="fas fa-cloud-upload-alt"></i>
    <span>Trascina i file qui o clicca per selezionare</span>
  </label>
  <div class="upload-preview"></div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
=======
<<<<<<< HEAD
### Preview Immagini
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Preview Immagini
=======
>>>>>>> .merge_file_KMvH8u
=======
>>>>>>> 0dadab4 (Lint)
</div>
```

### Preview Immagini
```html
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
<<<<<<< HEAD
=======
=======
### Preview Immagini
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
<div class="image-upload">
  <input type="file" id="image" accept="image/*" class="d-none">
  <label for="image" class="image-preview">
    <img src="placeholder.jpg" alt="Preview">
    <div class="image-overlay">
      <i class="fas fa-camera"></i>
      <span>Cambia immagine</span>
    </div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
=======
<<<<<<< HEAD
## 🎨 Stili e Comportamenti
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## 🎨 Stili e Comportamenti
=======
>>>>>>> .merge_file_KMvH8u
=======
>>>>>>> 0dadab4 (Lint)
  </label>
</div>
```

## 🎨 Stili e Comportamenti

<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
<<<<<<< HEAD
=======
=======
## 🎨 Stili e Comportamenti
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
### Focus States
```scss
.form-control {
  &:focus {
    border-color: $primary;
    box-shadow: 0 0 0 0.2rem rgba($primary, 0.25);
  }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
  &.is-invalid {
    border-color: $danger;
    &:focus {
      box-shadow: 0 0 0 0.2rem rgba($danger, 0.25);
    }
}
### Animazioni
.input-group {
  transition: all 0.3s ease;
  &:focus-within {
    transform: translateY(-1px);
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
=======
>>>>>>> .merge_file_KMvH8u
=======
>>>>>>> 0dadab4 (Lint)

  &.is-invalid {
    border-color: $danger;

    &:focus {
      box-shadow: 0 0 0 0.2rem rgba($danger, 0.25);
    }
  }
}
```

### Animazioni
```scss
.input-group {
  transition: all 0.3s ease;

  &:focus-within {
    transform: translateY(-1px);
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  }
}
```

<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
  &.is-invalid {
    border-color: $danger;
    &:focus {
      box-shadow: 0 0 0 0.2rem rgba($danger, 0.25);
    }
}
### Animazioni
.input-group {
  transition: all 0.3s ease;
  &:focus-within {
    transform: translateY(-1px);
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
## 🔗 Collegamenti
- [Componenti Base](./base-components.md)
- [Feedback](./feedback-components.md)
- [Accessibilità](./standards/accessibility.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_WHmd7R
- [Performance](./standards/performance.md)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Performance](./standards/performance.md)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KMvH8u

```
=======
- [Performance](./standards/performance.md)
<<<<<<< .merge_file_WHmd7R
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- [Performance](./standards/performance.md) 
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
>>>>>>> .merge_file_KMvH8u
>>>>>>> laraxot/dev
=======
- [Performance](./standards/performance.md)
>>>>>>> 0dadab4 (Lint)
