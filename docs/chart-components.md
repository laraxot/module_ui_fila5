# Componenti Chart

## Introduzione
I componenti chart forniscono visualizzazioni grafiche dei dati, utilizzando Chart.js come motore di rendering. Supportano vari tipi di grafici e sono altamente personalizzabili.

## Componenti Disponibili

### LineChart
```blade
<<<<<<< HEAD
<x-ui::line-chart
=======
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< HEAD
=======
<x-ui::line-chart
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_EvCA2L
<x-ui::line-chart 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<x-ui::line-chart
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
<x-ui::line-chart 
=======
<x-ui::line-chart
>>>>>>> laraxot/dev
=======
<x-ui::line-chart 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_EvCA2L
>>>>>>> laraxot/dev
    :title="'Andamento Utenti'"
    :labels="['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu']"
    :datasets="[
        [
            'label' => 'Nuovi Utenti',
            'data' => [65, 59, 80, 81, 56, 55],
            'borderColor' => '#4CAF50',
            'tension' => 0.1
        ]
    ]"
    :height="300"
    :responsive="true"
    :legend="true"
    :tooltips="true"
/>
```

### PieChart
```blade
<<<<<<< HEAD
<x-ui::pie-chart
=======
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< HEAD
=======
<x-ui::pie-chart
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_EvCA2L
<x-ui::pie-chart 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<x-ui::pie-chart
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
<x-ui::pie-chart 
=======
<x-ui::pie-chart
>>>>>>> laraxot/dev
=======
<x-ui::pie-chart 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_EvCA2L
>>>>>>> laraxot/dev
    :title="'Distribuzione Utenti'"
    :labels="['Attivi', 'Inattivi', 'In attesa']"
    :data="[300, 50, 100]"
    :colors="['#4CAF50', '#F44336', '#FFC107']"
    :height="300"
    :responsive="true"
    :legend="true"
    :tooltips="true"
/>
```

### StatsOverview
```blade
<<<<<<< HEAD
<x-ui::stats-overview
=======
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< HEAD
=======
<x-ui::stats-overview
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_EvCA2L
<x-ui::stats-overview 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<x-ui::stats-overview
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
<x-ui::stats-overview 
=======
<x-ui::stats-overview
>>>>>>> laraxot/dev
=======
<x-ui::stats-overview 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_EvCA2L
>>>>>>> laraxot/dev
    :stats="[
        [
            'label' => 'Utenti Totali',
            'value' => 1234,
            'icon' => 'users',
            'trend' => '+12%',
            'trendColor' => 'success'
        ],
        [
            'label' => 'Nuovi Oggi',
            'value' => 45,
            'icon' => 'user-plus',
            'trend' => '+5%',
            'trendColor' => 'success'
        ],
        [
            'label' => 'Conversioni',
            'value' => '78%',
            'icon' => 'chart-line',
            'trend' => '-2%',
            'trendColor' => 'danger'
        ]
    ]"
/>
```

## Personalizzazione

### Tema
- Colori personalizzati
- Stili CSS
- Animazioni
- Tooltip

### Dati
- Formati supportati
- Aggiornamento in tempo reale
- Filtri
- Trasformazioni

## Integrazione

### Livewire
```php
use Livewire\Component;

class UserStats extends Component
{
    public $chartData;
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_kcPP9s

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_EvCA2L
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
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_U4QHdZ
>>>>>>> .merge_file_EvCA2L
>>>>>>> laraxot/dev
    public function mount()
    {
        $this->updateChartData();
    }
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_kcPP9s

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_EvCA2L
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
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_U4QHdZ
>>>>>>> .merge_file_EvCA2L
>>>>>>> laraxot/dev
    public function updateChartData()
    {
        $this->chartData = [
            'labels' => ['Gen', 'Feb', 'Mar'],
            'datasets' => [
                [
                    'label' => 'Utenti',
                    'data' => User::countByMonth(),
                    'borderColor' => '#4CAF50'
                ]
            ]
        ];
    }
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_kcPP9s

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_EvCA2L
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
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_U4QHdZ
>>>>>>> .merge_file_EvCA2L
>>>>>>> laraxot/dev
    public function render()
    {
        return view('livewire.user-stats');
    }
}
```

## Best Practices

### Utilizzo
- Dati significativi
- Leggibilità
- Responsive design
- Accessibilità

### Performance
- Ottimizzazione dati
- Lazy loading
- Cache risultati
- Aggiornamento efficiente

## Collegamenti
- [Componenti Base](./base-components.md)
- [Componenti Form](./form-components.md)
- [Componenti Table](./table-components.md)
- [Componenti Layout](./layout-components.md)
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< .merge_file_kcPP9s
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md)
# Componenti Chart
## Introduzione
I componenti chart forniscono visualizzazioni grafiche dei dati, utilizzando Chart.js come motore di rendering. Supportano vari tipi di grafici e sono altamente personalizzabili.
## Componenti Disponibili
=======
>>>>>>> .merge_file_U4QHdZ
>>>>>>> .merge_file_EvCA2L
- [Documentazione Frontend](../cms/docs/frontend-architecture.md)
# Componenti Chart

## Introduzione
I componenti chart forniscono visualizzazioni grafiche dei dati, utilizzando Chart.js come motore di rendering. Supportano vari tipi di grafici e sono altamente personalizzabili.

## Componenti Disponibili

<<<<<<< .merge_file_tbdBir
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_kcPP9s
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_EvCA2L
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md) 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md) 
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md) 
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md)
# Componenti Chart
## Introduzione
I componenti chart forniscono visualizzazioni grafiche dei dati, utilizzando Chart.js come motore di rendering. Supportano vari tipi di grafici e sono altamente personalizzabili.
## Componenti Disponibili
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_U4QHdZ
>>>>>>> .merge_file_EvCA2L
>>>>>>> laraxot/dev
### LineChart
```blade
<x-ui::line-chart
    :title="'Andamento Utenti'"
    :labels="['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu']"
    :datasets="[
        [
            'label' => 'Nuovi Utenti',
            'data' => [65, 59, 80, 81, 56, 55],
            'borderColor' => '#4CAF50',
            'tension' => 0.1
        ]
    ]"
    :height="300"
    :responsive="true"
    :legend="true"
    :tooltips="true"
/>
```
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< .merge_file_kcPP9s

### PieChart
```blade
=======
<<<<<<< HEAD
### PieChart
=======
<<<<<<< HEAD
>>>>>>> .merge_file_EvCA2L

### PieChart
```blade
=======
### PieChart
>>>>>>> laraxot/dev
<<<<<<< .merge_file_tbdBir
=======
>>>>>>> laraxot/dev
=======
### PieChart
=======

### PieChart
```blade
>>>>>>> .merge_file_U4QHdZ
>>>>>>> laraxot/dev
>>>>>>> .merge_file_EvCA2L
<x-ui::pie-chart
    :title="'Distribuzione Utenti'"
    :labels="['Attivi', 'Inattivi', 'In attesa']"
    :data="[300, 50, 100]"
    :colors="['#4CAF50', '#F44336', '#FFC107']"
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< .merge_file_kcPP9s
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_U4QHdZ
### StatsOverview
<x-ui::stats-overview
    :stats="[
=======
<<<<<<< .merge_file_kcPP9s
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_U4QHdZ
>>>>>>> .merge_file_EvCA2L
    :height="300"
    :responsive="true"
    :legend="true"
    :tooltips="true"
/>
```

### StatsOverview
```blade
<x-ui::stats-overview
    :stats="[
        [
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< .merge_file_kcPP9s
<<<<<<< HEAD
=======
>>>>>>> .merge_file_EvCA2L
=======
### StatsOverview
<x-ui::stats-overview
    :stats="[
>>>>>>> laraxot/dev
<<<<<<< .merge_file_tbdBir
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_U4QHdZ
>>>>>>> laraxot/dev
>>>>>>> .merge_file_EvCA2L
            'label' => 'Utenti Totali',
            'value' => 1234,
            'icon' => 'users',
            'trend' => '+12%',
            'trendColor' => 'success'
        ],
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir
        [
=======
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_kcPP9s
        [
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
        [
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
        [
>>>>>>> .merge_file_U4QHdZ
>>>>>>> laraxot/dev
>>>>>>> .merge_file_EvCA2L
            'label' => 'Nuovi Oggi',
            'value' => 45,
            'icon' => 'user-plus',
            'trend' => '+5%',
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< .merge_file_kcPP9s
>>>>>>> .merge_file_EvCA2L
            'trendColor' => 'success'
        ],
        [
=======
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
            'trendColor' => 'success'
        ],
        [
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
            'trendColor' => 'success'
        ],
        [
>>>>>>> .merge_file_U4QHdZ
>>>>>>> .merge_file_EvCA2L
>>>>>>> laraxot/dev
            'label' => 'Conversioni',
            'value' => '78%',
            'icon' => 'chart-line',
            'trend' => '-2%',
            'trendColor' => 'danger'
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< .merge_file_kcPP9s
=======
<<<<<<< HEAD
## Personalizzazione
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Personalizzazione
=======
>>>>>>> .merge_file_U4QHdZ
>>>>>>> .merge_file_EvCA2L
        ]
    ]"
/>
```

## Personalizzazione

<<<<<<< .merge_file_tbdBir
=======
## Personalizzazione
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_kcPP9s
<<<<<<< HEAD
=======
=======
## Personalizzazione
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_U4QHdZ
>>>>>>> laraxot/dev
>>>>>>> .merge_file_EvCA2L
### Tema
- Colori personalizzati
- Stili CSS
- Animazioni
- Tooltip
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir

=======
=======
<<<<<<< .merge_file_kcPP9s

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_U4QHdZ
>>>>>>> .merge_file_EvCA2L
>>>>>>> laraxot/dev
### Dati
- Formati supportati
- Aggiornamento in tempo reale
- Filtri
- Trasformazioni
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< .merge_file_kcPP9s
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Integrazione
### Livewire
```php
use Livewire\Component;
class UserStats extends Component
{
    public $chartData;
=======
>>>>>>> .merge_file_U4QHdZ
>>>>>>> .merge_file_EvCA2L

## Integrazione

### Livewire
```php
use Livewire\Component;

class UserStats extends Component
{
    public $chartData;

<<<<<<< .merge_file_tbdBir
=======
=======
<<<<<<< .merge_file_kcPP9s
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_EvCA2L
## Integrazione
### Livewire
```php
use Livewire\Component;
class UserStats extends Component
{
    public $chartData;
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_U4QHdZ
>>>>>>> .merge_file_EvCA2L
>>>>>>> laraxot/dev
    public function mount()
    {
        $this->updateChartData();
    }
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< .merge_file_kcPP9s
>>>>>>> .merge_file_EvCA2L

    public function updateChartData()
    {
=======
<<<<<<< .merge_file_tbdBir
    public function updateChartData()
=======
<<<<<<< HEAD
    public function updateChartData()
=======
<<<<<<< HEAD

    public function updateChartData()
    {
=======
    public function updateChartData()
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    public function updateChartData()
=======

    public function updateChartData()
    {
>>>>>>> .merge_file_U4QHdZ
>>>>>>> .merge_file_EvCA2L
>>>>>>> laraxot/dev
        $this->chartData = [
            'labels' => ['Gen', 'Feb', 'Mar'],
            'datasets' => [
                [
                    'label' => 'Utenti',
                    'data' => User::countByMonth(),
                    'borderColor' => '#4CAF50'
                ]
            ]
        ];
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< .merge_file_kcPP9s
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
    public function render()
        return view('livewire.user-stats');
}
## Best Practices
=======
>>>>>>> .merge_file_U4QHdZ
>>>>>>> .merge_file_EvCA2L
    }

    public function render()
    {
        return view('livewire.user-stats');
    }
}
```

## Best Practices

<<<<<<< .merge_file_tbdBir
=======
=======
<<<<<<< .merge_file_kcPP9s
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_EvCA2L
    public function render()
        return view('livewire.user-stats');
}
## Best Practices
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_U4QHdZ
>>>>>>> .merge_file_EvCA2L
>>>>>>> laraxot/dev
### Utilizzo
- Dati significativi
- Leggibilità
- Responsive design
- Accessibilità
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir

=======
=======
<<<<<<< .merge_file_kcPP9s

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_U4QHdZ
>>>>>>> .merge_file_EvCA2L
>>>>>>> laraxot/dev
### Performance
- Ottimizzazione dati
- Lazy loading
- Cache risultati
- Aggiornamento efficiente
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir

=======
=======
<<<<<<< .merge_file_kcPP9s

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_U4QHdZ
>>>>>>> .merge_file_EvCA2L
>>>>>>> laraxot/dev
## Collegamenti
- [Componenti Base](./base-components.md)
- [Componenti Form](./form-components.md)
- [Componenti Table](./table-components.md)
- [Componenti Layout](./layout-components.md)
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< .merge_file_kcPP9s
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
=======

```
=======
>>>>>>> .merge_file_U4QHdZ
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> .merge_file_EvCA2L
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
<<<<<<< .merge_file_kcPP9s
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
=======
<<<<<<< HEAD
<<<<<<< .merge_file_tbdBir
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_EvCA2L

```
=======
- [Documentazione Frontend](../Cms/project_docs/frontend-architecture.md)
- [Documentazione Frontend](../Cms/project_docs/frontend-architecture.md)
- [Documentazione Frontend](../Cms/project_docs/frontend-architecture.md)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md) 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_tbdBir
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_U4QHdZ
>>>>>>> .merge_file_EvCA2L
>>>>>>> laraxot/dev
