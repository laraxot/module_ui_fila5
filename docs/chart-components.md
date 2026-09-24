# Componenti Chart

## Introduzione
I componenti chart forniscono visualizzazioni grafiche dei dati, utilizzando Chart.js come motore di rendering. Supportano vari tipi di grafici e sono altamente personalizzabili.

## Componenti Disponibili

### LineChart
```blade
<<<<<<< HEAD
<<<<<<< HEAD
<x-ui::line-chart
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<x-ui::line-chart
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
<x-ui::line-chart
>>>>>>> 0dadab4 (Lint)
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
<<<<<<< HEAD
<x-ui::pie-chart
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<x-ui::pie-chart
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
<x-ui::pie-chart
>>>>>>> 0dadab4 (Lint)
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
<<<<<<< HEAD
<x-ui::stats-overview
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<x-ui::stats-overview
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
<x-ui::stats-overview
>>>>>>> 0dadab4 (Lint)
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
<<<<<<< HEAD
<<<<<<< .merge_file_kcPP9s

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

>>>>>>> .merge_file_U4QHdZ
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
    public function mount()
    {
        $this->updateChartData();
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_kcPP9s

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

>>>>>>> .merge_file_U4QHdZ
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
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
<<<<<<< HEAD
<<<<<<< .merge_file_kcPP9s

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

>>>>>>> .merge_file_U4QHdZ
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
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
<<<<<<< HEAD
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
=======
>>>>>>> 0dadab4 (Lint)
- [Documentazione Frontend](../cms/docs/frontend-architecture.md)
# Componenti Chart

## Introduzione
I componenti chart forniscono visualizzazioni grafiche dei dati, utilizzando Chart.js come motore di rendering. Supportano vari tipi di grafici e sono altamente personalizzabili.

## Componenti Disponibili

<<<<<<< HEAD
<<<<<<< .merge_file_kcPP9s
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_U4QHdZ
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
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
<<<<<<< HEAD
<<<<<<< .merge_file_kcPP9s

### PieChart
```blade
=======
<<<<<<< HEAD
### PieChart
=======
<<<<<<< HEAD

### PieChart
```blade
=======
### PieChart
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
### PieChart
=======

### PieChart
```blade
>>>>>>> .merge_file_U4QHdZ
>>>>>>> laraxot/dev
=======

### PieChart
```blade
>>>>>>> 0dadab4 (Lint)
<x-ui::pie-chart
    :title="'Distribuzione Utenti'"
    :labels="['Attivi', 'Inattivi', 'In attesa']"
    :data="[300, 50, 100]"
    :colors="['#4CAF50', '#F44336', '#FFC107']"
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 0dadab4 (Lint)
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
<<<<<<< HEAD
<<<<<<< .merge_file_kcPP9s
<<<<<<< HEAD
=======
=======
### StatsOverview
<x-ui::stats-overview
    :stats="[
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_U4QHdZ
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
            'label' => 'Utenti Totali',
            'value' => 1234,
            'icon' => 'users',
            'trend' => '+12%',
            'trendColor' => 'success'
        ],
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        [
>>>>>>> 0dadab4 (Lint)
            'label' => 'Nuovi Oggi',
            'value' => 45,
            'icon' => 'user-plus',
            'trend' => '+5%',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_kcPP9s
            'trendColor' => 'success'
        ],
        [
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
>>>>>>> laraxot/dev
=======
            'trendColor' => 'success'
        ],
        [
>>>>>>> 0dadab4 (Lint)
            'label' => 'Conversioni',
            'value' => '78%',
            'icon' => 'chart-line',
            'trend' => '-2%',
            'trendColor' => 'danger'
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 0dadab4 (Lint)
        ]
    ]"
/>
```

## Personalizzazione

<<<<<<< HEAD
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
=======
>>>>>>> 0dadab4 (Lint)
### Tema
- Colori personalizzati
- Stili CSS
- Animazioni
- Tooltip
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
### Dati
- Formati supportati
- Aggiornamento in tempo reale
- Filtri
- Trasformazioni
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 0dadab4 (Lint)

## Integrazione

### Livewire
```php
use Livewire\Component;

class UserStats extends Component
{
    public $chartData;

<<<<<<< HEAD
<<<<<<< .merge_file_kcPP9s
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
## Integrazione
### Livewire
```php
use Livewire\Component;
class UserStats extends Component
{
    public $chartData;
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_U4QHdZ
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    public function mount()
    {
        $this->updateChartData();
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_kcPP9s

    public function updateChartData()
    {
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
>>>>>>> laraxot/dev
=======

    public function updateChartData()
    {
>>>>>>> 0dadab4 (Lint)
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
<<<<<<< HEAD
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
=======
>>>>>>> 0dadab4 (Lint)
    }

    public function render()
    {
        return view('livewire.user-stats');
    }
}
```

## Best Practices

<<<<<<< HEAD
<<<<<<< .merge_file_kcPP9s
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
    public function render()
        return view('livewire.user-stats');
}
## Best Practices
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_U4QHdZ
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
### Utilizzo
- Dati significativi
- Leggibilità
- Responsive design
- Accessibilità
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
### Performance
- Ottimizzazione dati
- Lazy loading
- Cache risultati
- Aggiornamento efficiente
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/dev
=======

>>>>>>> 0dadab4 (Lint)
## Collegamenti
- [Componenti Base](./base-components.md)
- [Componenti Form](./form-components.md)
- [Componenti Table](./table-components.md)
- [Componenti Layout](./layout-components.md)
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
<<<<<<< .merge_file_kcPP9s
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev

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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_U4QHdZ
>>>>>>> laraxot/dev
=======
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
>>>>>>> 0dadab4 (Lint)
