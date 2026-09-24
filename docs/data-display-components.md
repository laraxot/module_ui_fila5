# Componenti Visualizzazione Dati

## 📊 Tabelle

### Tabella Base
```html
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mario Rossi</td>
        <td>mario@example.com</td>
        <td>
          <button class="btn btn-sm btn-primary">Modifica</button>
          <button class="btn btn-sm btn-danger">Elimina</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
```

### Tabella con Ordinamento
```html
<table class="table table-sortable">
  <thead>
    <tr>
      <th class="sortable" data-sort="id">ID</th>
      <th class="sortable" data-sort="name">Nome</th>
      <th class="sortable" data-sort="date">Data</th>
    </tr>
  </thead>
  <tbody>
    <!-- Contenuto tabella -->
  </tbody>
</table>
```

## 📈 Grafici

### Line Chart
```html
<div class="chart-container">
  <canvas id="lineChart"></canvas>
</div>

<script>
const ctx = document.getElementById('lineChart').getContext('2d');
new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Gen', 'Feb', 'Mar', 'Apr'],
    datasets: [{
      label: 'Vendite',
      data: [12, 19, 3, 5],
      borderColor: '#007bff',
      tension: 0.1
    }]
  }
});
</script>
```

### Pie Chart
```html
<div class="chart-container">
  <canvas id="pieChart"></canvas>
</div>

<script>
const ctx = document.getElementById('pieChart').getContext('2d');
new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ['Rosso', 'Blu', 'Giallo'],
    datasets: [{
      data: [300, 50, 100],
      backgroundColor: ['#ff6384', '#36a2eb', '#ffce56']
    }]
  }
});
</script>
```

## 📋 Lista

### Lista Ordinata
```html
<ol class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Primo elemento
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Secondo elemento
    <span class="badge bg-primary rounded-pill">2</span>
  </li>
</ol>
```

### Lista con Azioni
```html
<ul class="list-group">
  <li class="list-group-item">
    <div class="d-flex justify-content-between align-items-center">
      <div>
        <h5 class="mb-1">Titolo elemento</h5>
        <p class="mb-1">Descrizione elemento</p>
      </div>
      <div class="btn-group">
        <button class="btn btn-sm btn-outline-primary">Modifica</button>
        <button class="btn btn-sm btn-outline-danger">Elimina</button>
      </div>
    </div>
  </li>
</ul>
```

## 📑 Card

### Card con Immagine
```html
<div class="card">
  <img src="image.jpg" class="card-img-top" alt="Immagine">
  <div class="card-body">
    <h5 class="card-title">Titolo Card</h5>
    <p class="card-text">Descrizione della card.</p>
    <a href="#" class="btn btn-primary">Azione</a>
  </div>
</div>
```

### Card con Tabella
```html
<div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0">Dettagli</h5>
  </div>
  <div class="card-body">
    <table class="table table-sm">
      <tbody>
        <tr>
          <th scope="row">Nome</th>
          <td>Mario Rossi</td>
        </tr>
        <tr>
          <th scope="row">Email</th>
          <td>mario@example.com</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
```

## 🎨 Stili e Comportamenti

### Responsive Tables
```scss
.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======

=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_vnFGoC
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_2GKPCK
  @media (max-width: 768px) {
    .table {
      min-width: 600px;
    }
  }
}
```

### Chart Animations
```scss
.chart-container {
  position: relative;
  height: 300px;
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======

=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_vnFGoC
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_2GKPCK
  canvas {
    animation: fadeIn 0.5s ease;
  }
}
```

## 🔗 Collegamenti
- [Componenti Base](./base-components.md)
- [Form Avanzati](./advanced-form-components.md)
- [Accessibilità](./standards/accessibility.md)
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_2GKPCK
- [Performance](./standards/performance.md)
# Componenti Visualizzazione Dati

## 📊 Tabelle

<<<<<<< .merge_file_yV0Bz7
<<<<<<< .merge_file_k2SWwZ
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
- [Performance](./standards/performance.md)
# Componenti Visualizzazione Dati

## 📊 Tabelle

=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
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
# Componenti Visualizzazione Dati
## 📊 Tabelle
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_vnFGoC
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_2GKPCK
### Tabella Base
```html
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
      <tr>
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
      <tr>
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
      <tr>
>>>>>>> .merge_file_vnFGoC
=======
      <tr>
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
      <tr>
>>>>>>> .merge_file_2GKPCK
        <th scope="row">1</th>
        <td>Mario Rossi</td>
        <td>mario@example.com</td>
        <td>
          <button class="btn btn-sm btn-primary">Modifica</button>
          <button class="btn btn-sm btn-danger">Elimina</button>
        </td>
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
      </tr>
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
      </tr>
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
      </tr>
>>>>>>> .merge_file_vnFGoC
=======
      </tr>
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
      </tr>
>>>>>>> .merge_file_2GKPCK
    </tbody>
  </table>
</div>
```
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ

### Tabella con Ordinamento
```html
=======
<<<<<<< HEAD
### Tabella con Ordinamento
=======
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)

### Tabella con Ordinamento
```html
=======
### Tabella con Ordinamento
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Tabella con Ordinamento
=======

### Tabella con Ordinamento
```html
>>>>>>> .merge_file_vnFGoC
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======

### Tabella con Ordinamento
```html
>>>>>>> .merge_file_2GKPCK
<table class="table table-sortable">
  <thead>
    <tr>
      <th class="sortable" data-sort="id">ID</th>
      <th class="sortable" data-sort="name">Nome</th>
      <th class="sortable" data-sort="date">Data</th>
    </tr>
  </thead>
  <tbody>
    <!-- Contenuto tabella -->
  </tbody>
</table>
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## 📈 Grafici
### Line Chart
<div class="chart-container">
  <canvas id="lineChart"></canvas>
=======
>>>>>>> .merge_file_vnFGoC
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_2GKPCK
```

## 📈 Grafici

### Line Chart
```html
<div class="chart-container">
  <canvas id="lineChart"></canvas>
</div>

<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
## 📈 Grafici
### Line Chart
<div class="chart-container">
  <canvas id="lineChart"></canvas>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_vnFGoC
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_2GKPCK
<script>
const ctx = document.getElementById('lineChart').getContext('2d');
new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Gen', 'Feb', 'Mar', 'Apr'],
    datasets: [{
      label: 'Vendite',
      data: [12, 19, 3, 5],
      borderColor: '#007bff',
      tension: 0.1
    }]
  }
});
</script>
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Pie Chart
  <canvas id="pieChart"></canvas>
const ctx = document.getElementById('pieChart').getContext('2d');
  type: 'pie',
    labels: ['Rosso', 'Blu', 'Giallo'],
      data: [300, 50, 100],
      backgroundColor: ['#ff6384', '#36a2eb', '#ffce56']
## 📋 Lista
### Lista Ordinata
=======
>>>>>>> .merge_file_vnFGoC
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_2GKPCK
```

### Pie Chart
```html
<div class="chart-container">
  <canvas id="pieChart"></canvas>
</div>

<script>
const ctx = document.getElementById('pieChart').getContext('2d');
new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ['Rosso', 'Blu', 'Giallo'],
    datasets: [{
      data: [300, 50, 100],
      backgroundColor: ['#ff6384', '#36a2eb', '#ffce56']
    }]
  }
});
</script>
```

## 📋 Lista

### Lista Ordinata
```html
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
### Pie Chart
  <canvas id="pieChart"></canvas>
const ctx = document.getElementById('pieChart').getContext('2d');
  type: 'pie',
    labels: ['Rosso', 'Blu', 'Giallo'],
      data: [300, 50, 100],
      backgroundColor: ['#ff6384', '#36a2eb', '#ffce56']
## 📋 Lista
### Lista Ordinata
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_vnFGoC
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_2GKPCK
<ol class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Primo elemento
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
    Secondo elemento
    <span class="badge bg-primary rounded-pill">2</span>
</ol>
### Lista con Azioni
=======
>>>>>>> .merge_file_vnFGoC
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_2GKPCK
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Secondo elemento
    <span class="badge bg-primary rounded-pill">2</span>
  </li>
</ol>
```

### Lista con Azioni
```html
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
    Secondo elemento
    <span class="badge bg-primary rounded-pill">2</span>
</ol>
### Lista con Azioni
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_vnFGoC
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_2GKPCK
<ul class="list-group">
  <li class="list-group-item">
    <div class="d-flex justify-content-between align-items-center">
      <div>
        <h5 class="mb-1">Titolo elemento</h5>
        <p class="mb-1">Descrizione elemento</p>
      </div>
      <div class="btn-group">
        <button class="btn btn-sm btn-outline-primary">Modifica</button>
        <button class="btn btn-sm btn-outline-danger">Elimina</button>
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
    </div>
</ul>
## 📑 Card
### Card con Immagine
=======
>>>>>>> .merge_file_vnFGoC
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_2GKPCK
      </div>
    </div>
  </li>
</ul>
```

## 📑 Card

### Card con Immagine
```html
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
    </div>
</ul>
## 📑 Card
### Card con Immagine
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_vnFGoC
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_2GKPCK
<div class="card">
  <img src="image.jpg" class="card-img-top" alt="Immagine">
  <div class="card-body">
    <h5 class="card-title">Titolo Card</h5>
    <p class="card-text">Descrizione della card.</p>
    <a href="#" class="btn btn-primary">Azione</a>
  </div>
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_vnFGoC
### Card con Tabella
  <div class="card-header">
    <h5 class="card-title mb-0">Dettagli</h5>
=======
<<<<<<< .merge_file_k2SWwZ
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_vnFGoC
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_2GKPCK
</div>
```

### Card con Tabella
```html
<div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0">Dettagli</h5>
  </div>
  <div class="card-body">
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
=======
### Card con Tabella
  <div class="card-header">
    <h5 class="card-title mb-0">Dettagli</h5>
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_vnFGoC
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_2GKPCK
    <table class="table table-sm">
      <tbody>
        <tr>
          <th scope="row">Nome</th>
          <td>Mario Rossi</td>
        </tr>
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
          <th scope="row">Email</th>
          <td>mario@example.com</td>
      </tbody>
    </table>
## 🎨 Stili e Comportamenti
=======
>>>>>>> .merge_file_vnFGoC
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_2GKPCK
        <tr>
          <th scope="row">Email</th>
          <td>mario@example.com</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
```

## 🎨 Stili e Comportamenti

<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
          <th scope="row">Email</th>
          <td>mario@example.com</td>
      </tbody>
    </table>
## 🎨 Stili e Comportamenti
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_vnFGoC
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_2GKPCK
### Responsive Tables
```scss
.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_vnFGoC
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_2GKPCK
  @media (max-width: 768px) {
    .table {
      min-width: 600px;
    }
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
}
### Chart Animations
.chart-container {
  position: relative;
  height: 300px;
  canvas {
    animation: fadeIn 0.5s ease;
=======
>>>>>>> .merge_file_vnFGoC
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_2GKPCK
  }
}
```

### Chart Animations
```scss
.chart-container {
  position: relative;
  height: 300px;

  canvas {
    animation: fadeIn 0.5s ease;
  }
}
```

<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
}
### Chart Animations
.chart-container {
  position: relative;
  height: 300px;
  canvas {
    animation: fadeIn 0.5s ease;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_vnFGoC
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_2GKPCK
## 🔗 Collegamenti
- [Componenti Base](./base-components.md)
- [Form Avanzati](./advanced-form-components.md)
- [Accessibilità](./standards/accessibility.md)
<<<<<<< .merge_file_yV0Bz7
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
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
>>>>>>> .merge_file_vnFGoC
=======
- [Performance](./standards/performance.md)
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)

```
=======
- [Performance](./standards/performance.md)
<<<<<<< HEAD
<<<<<<< .merge_file_k2SWwZ
=======
>>>>>>> 804451c (Lint)
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_vnFGoC
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
- [Performance](./standards/performance.md)
>>>>>>> .merge_file_2GKPCK
