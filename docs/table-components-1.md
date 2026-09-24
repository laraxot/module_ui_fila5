# Componenti Table

## Introduzione
I componenti table forniscono una gestione efficiente e personalizzabile dei dati tabulari, con funzionalità avanzate di ordinamento, filtro e paginazione.

## Componenti Disponibili

### DataTable
```blade
<x-ui::datatable
<<<<<<< .merge_file_ViAhBf
=======
<<<<<<< HEAD
<<<<<<< HEAD
<x-ui::datatable
=======
<x-ui::datatable 
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
<x-ui::datatable 
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_GWZYnP
    :columns="[
        ['name' => 'id', 'label' => 'ID', 'sortable' => true],
        ['name' => 'name', 'label' => 'Nome', 'sortable' => true],
        ['name' => 'email', 'label' => 'Email', 'sortable' => true],
        ['name' => 'created_at', 'label' => 'Data Creazione', 'sortable' => true],
    ]"
    :data="$users"
    :per-page="10"
    :searchable="true"
    :sortable="true"
    :filterable="true"
    :exportable="true"
/>
```

### StatusBadge
```blade
<<<<<<< .merge_file_ViAhBf
<<<<<<< HEAD
<x-ui::status-badge
=======
<<<<<<< HEAD
<<<<<<< HEAD
<x-ui::status-badge
=======
<x-ui::status-badge 
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
<x-ui::status-badge 
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
<x-ui::status-badge
>>>>>>> .merge_file_GWZYnP
    :status="$user->status"
    :options="[
        'active' => ['label' => 'Attivo', 'color' => 'success'],
        'inactive' => ['label' => 'Inattivo', 'color' => 'danger'],
        'pending' => ['label' => 'In attesa', 'color' => 'warning'],
    ]"
/>
```

### ActionButtons
```blade
<<<<<<< .merge_file_ViAhBf
<<<<<<< HEAD
<x-ui::action-buttons
=======
<<<<<<< HEAD
<<<<<<< HEAD
<x-ui::action-buttons
=======
<x-ui::action-buttons 
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
<x-ui::action-buttons 
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
<x-ui::action-buttons
>>>>>>> .merge_file_GWZYnP
    :actions="[
        [
            'type' => 'view',
            'url' => route('users.show', $user),
            'icon' => 'eye',
            'label' => 'Visualizza'
        ],
        [
            'type' => 'edit',
            'url' => route('users.edit', $user),
            'icon' => 'pencil',
            'label' => 'Modifica'
        ],
        [
            'type' => 'delete',
            'url' => route('users.destroy', $user),
            'icon' => 'trash',
            'label' => 'Elimina',
            'confirm' => true
        ]
    ]"
/>
```

## Funzionalità

### Ordinamento
- Multi-colonna
- Direzione (asc/desc)
- Personalizzazione
- Cache risultati

### Filtri
- Testo libero
- Select multipli
- Date range
- Custom filters

### Paginazione
- Server-side
- Client-side
- Personalizzazione
- Cache pagine

## Integrazione

### Livewire
```php
use Livewire\Component;

class UserTable extends Component
{
    public $sortField = 'name';
    public $sortDirection = 'asc';
    public $search = '';
    public $perPage = 10;

<<<<<<< .merge_file_ViAhBf
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_GWZYnP
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }
<<<<<<< .merge_file_ViAhBf
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_GWZYnP
    public function render()
    {
        $users = User::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%'.$this->search.'%')
                    ->orWhere('email', 'like', '%'.$this->search.'%');
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);
<<<<<<< .merge_file_ViAhBf
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_GWZYnP
        return view('livewire.user-table', compact('users'));
    }
}
```

## Best Practices

### Utilizzo
- Ottimizzazione query
- Cache risultati
- Lazy loading
- Responsive design

### Performance
- Indici database
- Query ottimizzate
- Cache paginazione
- Lazy loading colonne

## Collegamenti
- [Componenti Base](./base-components.md)
- [Componenti Form](./form-components.md)
- [Componenti Chart](./chart-components.md)
- [Componenti Layout](./layout-components.md)
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md)
