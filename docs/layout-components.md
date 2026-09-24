# Componenti Layout

## 📐 Struttura Base

### Container
```html
<div class="container">
  <!-- Contenuto -->
</div>

<div class="container-fluid">
  <!-- Contenuto a larghezza piena -->
</div>
```

### Grid System
```html
<div class="row">
  <div class="col-md-6">
    <!-- Colonna 1 -->
  </div>
  <div class="col-md-6">
    <!-- Colonna 2 -->
  </div>
</div>
```

## 🎯 Layout Specifici

### Header
```html
<header class="header">
  <div class="header-brand">
    <img src="logo.png" alt="Logo">
    <h1>Nome Applicazione</h1>
  </div>
  <nav class="header-nav">
    <!-- Menu -->
  </nav>
  <div class="header-actions">
    <!-- Azioni -->
  </div>
</header>
```

### Sidebar
```html
<aside class="sidebar">
  <div class="sidebar-header">
    <h2>Menu</h2>
  </div>
  <nav class="sidebar-nav">
    <ul>
      <li class="active">
        <a href="#">
          <i class="fas fa-home"></i>
          Dashboard
        </a>
      </li>
      <!-- Altri elementi menu -->
    </ul>
  </nav>
</aside>
```

### Footer
```html
<footer class="footer">
  <div class="footer-content">
    <div class="footer-section">
      <h3>Contatti</h3>
      <!-- Contatti -->
    </div>
    <div class="footer-section">
      <h3>Link Utili</h3>
      <!-- Link -->
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2024 Nome Applicazione</p>
  </div>
</footer>
```

## 📱 Responsive

### Breakpoints
```scss
$breakpoints: (
  'xs': 0,
  'sm': 576px,
  'md': 768px,
  'lg': 992px,
  'xl': 1200px,
  'xxl': 1400px
);
```

### Media Queries
```scss
@mixin media-up($breakpoint) {
  @if map-has-key($breakpoints, $breakpoint) {
    @media (min-width: map-get($breakpoints, $breakpoint)) {
      @content;
    }
  }
}

// Utilizzo
.element {
  @include media-up('md') {
    // Stili per schermi md e superiori
  }
}
```

## 🎨 Utility

### Spacing
```html
<div class="m-3 p-3">Margine e padding</div>
<div class="mt-2 mb-4">Margine top e bottom</div>
<div class="px-4">Padding orizzontale</div>
```

### Display
```html
<div class="d-flex">Flexbox</div>
<div class="d-grid">Grid</div>
<div class="d-none d-md-block">Nascosto su mobile</div>
```

### Position
```html
<div class="position-relative">
  <div class="position-absolute top-0 end-0">
    <!-- Elemento posizionato -->
  </div>
</div>
```

## 🔗 Collegamenti
- [Componenti Base](./base-components.md)
- [Performance](./standards/performance.md)
<<<<<<< HEAD
<<<<<<< .merge_file_srebSp
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_8LYICu
- [Accessibilità](./standards/accessibility.md)
# Componenti Layout
<<<<<<< HEAD
## 📐 Struttura Base
=======

## 📐 Struttura Base

<<<<<<< .merge_file_srebSp
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_3zePlE
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_8LYICu
- [Accessibilità](./standards/accessibility.md) 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Accessibilità](./standards/accessibility.md) 
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [Accessibilità](./standards/accessibility.md) 
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- [Accessibilità](./standards/accessibility.md)
# Componenti Layout
## 📐 Struttura Base
<<<<<<< .merge_file_srebSp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ydSnRx
>>>>>>> .merge_file_8LYICu
>>>>>>> laraxot/dev
### Container
```html
<div class="container">
  <!-- Contenuto -->
</div>
<<<<<<< HEAD
<<<<<<< .merge_file_srebSp
=======
<<<<<<< .merge_file_3zePlE
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<div class="container-fluid">
  <!-- Contenuto a larghezza piena -->
```
### Grid System
=======
>>>>>>> .merge_file_ydSnRx
>>>>>>> .merge_file_8LYICu

<div class="container-fluid">
  <!-- Contenuto a larghezza piena -->
</div>
```

### Grid System
```html
<<<<<<< .merge_file_srebSp
=======
=======
<<<<<<< .merge_file_3zePlE
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_8LYICu
<div class="container-fluid">
  <!-- Contenuto a larghezza piena -->
```
### Grid System
<<<<<<< .merge_file_srebSp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ydSnRx
>>>>>>> .merge_file_8LYICu
>>>>>>> laraxot/dev
<div class="row">
  <div class="col-md-6">
    <!-- Colonna 1 -->
  </div>
<<<<<<< HEAD
<<<<<<< .merge_file_srebSp
=======
<<<<<<< .merge_file_3zePlE
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_ydSnRx
    <!-- Colonna 2 -->
## 🎯 Layout Specifici
### Header
=======
<<<<<<< .merge_file_3zePlE
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ydSnRx
>>>>>>> .merge_file_8LYICu
  <div class="col-md-6">
    <!-- Colonna 2 -->
  </div>
</div>
```

## 🎯 Layout Specifici

### Header
```html
<<<<<<< .merge_file_srebSp
=======
<<<<<<< .merge_file_3zePlE
<<<<<<< HEAD
=======
>>>>>>> .merge_file_8LYICu
=======
    <!-- Colonna 2 -->
## 🎯 Layout Specifici
### Header
>>>>>>> laraxot/dev
<<<<<<< .merge_file_srebSp
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ydSnRx
>>>>>>> laraxot/dev
>>>>>>> .merge_file_8LYICu
<header class="header">
  <div class="header-brand">
    <img src="logo.png" alt="Logo">
    <h1>Nome Applicazione</h1>
<<<<<<< HEAD
<<<<<<< .merge_file_srebSp
  </div>
=======
=======
<<<<<<< .merge_file_3zePlE
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
>>>>>>> .merge_file_ydSnRx
>>>>>>> .merge_file_8LYICu
>>>>>>> laraxot/dev
  <nav class="header-nav">
    <!-- Menu -->
  </nav>
  <div class="header-actions">
    <!-- Azioni -->
<<<<<<< HEAD
<<<<<<< .merge_file_srebSp
=======
<<<<<<< .merge_file_3zePlE
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
</header>
### Sidebar
<aside class="sidebar">
  <div class="sidebar-header">
    <h2>Menu</h2>
=======
>>>>>>> .merge_file_ydSnRx
>>>>>>> .merge_file_8LYICu
  </div>
</header>
```

### Sidebar
```html
<aside class="sidebar">
  <div class="sidebar-header">
    <h2>Menu</h2>
  </div>
<<<<<<< .merge_file_srebSp
=======
=======
<<<<<<< .merge_file_3zePlE
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_8LYICu
</header>
### Sidebar
<aside class="sidebar">
  <div class="sidebar-header">
    <h2>Menu</h2>
<<<<<<< .merge_file_srebSp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ydSnRx
>>>>>>> .merge_file_8LYICu
>>>>>>> laraxot/dev
  <nav class="sidebar-nav">
    <ul>
      <li class="active">
        <a href="#">
          <i class="fas fa-home"></i>
          Dashboard
        </a>
      </li>
      <!-- Altri elementi menu -->
    </ul>
<<<<<<< HEAD
<<<<<<< .merge_file_srebSp
=======
<<<<<<< .merge_file_3zePlE
=======
<<<<<<< HEAD
</aside>
### Footer
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
</aside>
### Footer
=======
>>>>>>> .merge_file_ydSnRx
>>>>>>> .merge_file_8LYICu
  </nav>
</aside>
```

### Footer
```html
<<<<<<< .merge_file_srebSp
=======
<<<<<<< .merge_file_3zePlE
<<<<<<< HEAD
=======
>>>>>>> .merge_file_8LYICu
=======
</aside>
### Footer
>>>>>>> laraxot/dev
<<<<<<< .merge_file_srebSp
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ydSnRx
>>>>>>> laraxot/dev
>>>>>>> .merge_file_8LYICu
<footer class="footer">
  <div class="footer-content">
    <div class="footer-section">
      <h3>Contatti</h3>
      <!-- Contatti -->
    </div>
<<<<<<< HEAD
<<<<<<< .merge_file_srebSp
=======
<<<<<<< .merge_file_3zePlE
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
      <h3>Link Utili</h3>
      <!-- Link -->
  <div class="footer-bottom">
    <p>&copy; 2024 Nome Applicazione</p>
</footer>
## 📱 Responsive
=======
>>>>>>> .merge_file_ydSnRx
>>>>>>> .merge_file_8LYICu
    <div class="footer-section">
      <h3>Link Utili</h3>
      <!-- Link -->
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2024 Nome Applicazione</p>
  </div>
</footer>
```

## 📱 Responsive

<<<<<<< .merge_file_srebSp
=======
=======
<<<<<<< .merge_file_3zePlE
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_8LYICu
      <h3>Link Utili</h3>
      <!-- Link -->
  <div class="footer-bottom">
    <p>&copy; 2024 Nome Applicazione</p>
</footer>
## 📱 Responsive
<<<<<<< .merge_file_srebSp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ydSnRx
>>>>>>> .merge_file_8LYICu
>>>>>>> laraxot/dev
### Breakpoints
```scss
$breakpoints: (
  'xs': 0,
  'sm': 576px,
  'md': 768px,
  'lg': 992px,
  'xl': 1200px,
  'xxl': 1400px
);
<<<<<<< HEAD
<<<<<<< .merge_file_srebSp
=======
<<<<<<< .merge_file_3zePlE
=======
<<<<<<< HEAD
### Media Queries
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Media Queries
=======
>>>>>>> .merge_file_ydSnRx
>>>>>>> .merge_file_8LYICu
```

### Media Queries
```scss
<<<<<<< .merge_file_srebSp
=======
### Media Queries
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_3zePlE
<<<<<<< HEAD
=======
=======
### Media Queries
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ydSnRx
>>>>>>> laraxot/dev
>>>>>>> .merge_file_8LYICu
@mixin media-up($breakpoint) {
  @if map-has-key($breakpoints, $breakpoint) {
    @media (min-width: map-get($breakpoints, $breakpoint)) {
      @content;
    }
  }
}
<<<<<<< HEAD
<<<<<<< .merge_file_srebSp

=======
=======
<<<<<<< .merge_file_3zePlE

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_ydSnRx
>>>>>>> .merge_file_8LYICu
>>>>>>> laraxot/dev
// Utilizzo
.element {
  @include media-up('md') {
    // Stili per schermi md e superiori
<<<<<<< HEAD
<<<<<<< .merge_file_srebSp
=======
<<<<<<< .merge_file_3zePlE
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## 🎨 Utility
### Spacing
<div class="m-3 p-3">Margine e padding</div>
<div class="mt-2 mb-4">Margine top e bottom</div>
<div class="px-4">Padding orizzontale</div>
### Display
<div class="d-flex">Flexbox</div>
<div class="d-grid">Grid</div>
<div class="d-none d-md-block">Nascosto su mobile</div>
### Position
<div class="position-relative">
  <div class="position-absolute top-0 end-0">
    <!-- Elemento posizionato -->
## 🔗 Collegamenti
- [Componenti Base](./base-components.md)
- [Performance](./standards/performance.md)

```
=======
>>>>>>> .merge_file_ydSnRx
>>>>>>> .merge_file_8LYICu
  }
}
```

## 🎨 Utility

### Spacing
```html
<div class="m-3 p-3">Margine e padding</div>
<div class="mt-2 mb-4">Margine top e bottom</div>
<div class="px-4">Padding orizzontale</div>
```

### Display
```html
<div class="d-flex">Flexbox</div>
<div class="d-grid">Grid</div>
<div class="d-none d-md-block">Nascosto su mobile</div>
```

### Position
```html
<div class="position-relative">
  <div class="position-absolute top-0 end-0">
    <!-- Elemento posizionato -->
  </div>
</div>
```

## 🔗 Collegamenti
- [Componenti Base](./base-components.md)
- [Performance](./standards/performance.md)
- [Accessibilità](./standards/accessibility.md)
<<<<<<< .merge_file_srebSp
=======
=======
<<<<<<< .merge_file_3zePlE
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_8LYICu
## 🎨 Utility
### Spacing
<div class="m-3 p-3">Margine e padding</div>
<div class="mt-2 mb-4">Margine top e bottom</div>
<div class="px-4">Padding orizzontale</div>
### Display
<div class="d-flex">Flexbox</div>
<div class="d-grid">Grid</div>
<div class="d-none d-md-block">Nascosto su mobile</div>
### Position
<div class="position-relative">
  <div class="position-absolute top-0 end-0">
    <!-- Elemento posizionato -->
## 🔗 Collegamenti
- [Componenti Base](./base-components.md)
- [Performance](./standards/performance.md)
<<<<<<< HEAD

```
=======
- [Accessibilità](./standards/accessibility.md)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- [Accessibilità](./standards/accessibility.md) 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_srebSp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ydSnRx
>>>>>>> .merge_file_8LYICu
>>>>>>> laraxot/dev
