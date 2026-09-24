# Componenti Table

## Introduzione
I componenti table forniscono una gestione efficiente e personalizzabile dei dati tabulari, con funzionalità avanzate di ordinamento, filtro e paginazione.

## Componenti Disponibili

### DataTable
```blade
<x-ui::datatable
<<<<<<< .merge_file_Dx01iB
=======
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< HEAD
=======
<x-ui::datatable
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_XWXkZn
<x-ui::datatable 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<x-ui::datatable
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
<x-ui::datatable 
=======
<x-ui::datatable
>>>>>>> laraxot/dev
=======
<x-ui::datatable 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
>>>>>>> .merge_file_21clqV
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
<<<<<<< .merge_file_Dx01iB
<x-ui::status-badge
=======
<<<<<<< HEAD
<x-ui::status-badge
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< HEAD
=======
<x-ui::status-badge
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_XWXkZn
<x-ui::status-badge 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_dqU2EY
<x-ui::status-badge
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
<x-ui::status-badge 
=======
<x-ui::status-badge
=======
<x-ui::status-badge
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
<x-ui::status-badge 
=======
<x-ui::status-badge
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
=======
<x-ui::status-badge 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
>>>>>>> .merge_file_21clqV
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
<<<<<<< .merge_file_Dx01iB
<x-ui::action-buttons
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY
<x-ui::action-buttons
=======
<<<<<<< HEAD
<x-ui::action-buttons 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<x-ui::action-buttons
=======
<<<<<<< HEAD
=======
<x-ui::action-buttons
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<x-ui::action-buttons
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<x-ui::action-buttons 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<x-ui::action-buttons
=======
<<<<<<< HEAD
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
<<<<<<< HEAD
<x-ui::action-buttons 
=======
<x-ui::action-buttons
>>>>>>> laraxot/dev
=======
<x-ui::action-buttons 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
>>>>>>> .merge_file_21clqV
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
<<<<<<< .merge_file_Dx01iB
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_19nahj

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_XWXkZn
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
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
>>>>>>> .merge_file_21clqV
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }
<<<<<<< .merge_file_Dx01iB
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_19nahj

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_XWXkZn
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
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
>>>>>>> .merge_file_21clqV
    public function render()
    {
        $users = User::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%'.$this->search.'%')
                    ->orWhere('email', 'like', '%'.$this->search.'%');
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);
<<<<<<< .merge_file_Dx01iB
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_19nahj

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_XWXkZn
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
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
>>>>>>> .merge_file_21clqV
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
<<<<<<< .merge_file_Dx01iB
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< .merge_file_19nahj
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md)
# Componenti Table
## Introduzione
I componenti table forniscono una gestione efficiente e personalizzabile dei dati tabulari, con funzionalità avanzate di ordinamento, filtro e paginazione.
## Componenti Disponibili
=======
>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn
- [Documentazione Frontend](../cms/docs/frontend-architecture.md)
# Componenti Table

## Introduzione
I componenti table forniscono una gestione efficiente e personalizzabile dei dati tabulari, con funzionalità avanzate di ordinamento, filtro e paginazione.

## Componenti Disponibili

<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_19nahj
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_XWXkZn
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
>>>>>>> .merge_file_21clqV
- [Documentazione Frontend](../Cms/docs/frontend-architecture.md)
# Componenti Table
## Introduzione
I componenti table forniscono una gestione efficiente e personalizzabile dei dati tabulari, con funzionalità avanzate di ordinamento, filtro e paginazione.
## Componenti Disponibili
<<<<<<< .merge_file_Dx01iB
=======
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
>>>>>>> .merge_file_21clqV
### DataTable
```blade
<x-ui::datatable
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
<<<<<<< .merge_file_Dx01iB
### StatusBadge
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< .merge_file_19nahj
>>>>>>> .merge_file_XWXkZn

### StatusBadge
```blade
=======
<<<<<<< .merge_file_dqU2EY
### StatusBadge
=======
<<<<<<< HEAD
### StatusBadge
=======
<<<<<<< HEAD

### StatusBadge
```blade
=======
### StatusBadge
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
### StatusBadge
=======

### StatusBadge
```blade
>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
>>>>>>> .merge_file_21clqV
<x-ui::status-badge
    :status="$user->status"
    :options="[
        'active' => ['label' => 'Attivo', 'color' => 'success'],
        'inactive' => ['label' => 'Inattivo', 'color' => 'danger'],
        'pending' => ['label' => 'In attesa', 'color' => 'warning'],
<<<<<<< .merge_file_Dx01iB
### ActionButtons
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< .merge_file_19nahj
=======
<<<<<<< HEAD
### ActionButtons
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### ActionButtons
=======
>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn
    ]"
/>
```

### ActionButtons
```blade
<<<<<<< .merge_file_dqU2EY
=======
### ActionButtons
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_19nahj
<<<<<<< HEAD
=======
=======
### ActionButtons
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_wXDxL6
>>>>>>> laraxot/dev
>>>>>>> .merge_file_XWXkZn
>>>>>>> .merge_file_21clqV
<x-ui::action-buttons
    :actions="[
        [
            'type' => 'view',
            'url' => route('users.show', $user),
            'icon' => 'eye',
            'label' => 'Visualizza'
        ],
<<<<<<< .merge_file_Dx01iB
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY
        [
=======
=======
<<<<<<< .merge_file_19nahj
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
>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
>>>>>>> .merge_file_21clqV
            'type' => 'edit',
            'url' => route('users.edit', $user),
            'icon' => 'pencil',
            'label' => 'Modifica'
<<<<<<< .merge_file_Dx01iB
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY
        ],
        [
=======
=======
<<<<<<< .merge_file_19nahj
        ],
        [
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
        ],
        [
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
        ],
        [
>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
>>>>>>> .merge_file_21clqV
            'type' => 'delete',
            'url' => route('users.destroy', $user),
            'icon' => 'trash',
            'label' => 'Elimina',
            'confirm' => true
        ]
<<<<<<< .merge_file_Dx01iB
## Funzionalità
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< .merge_file_19nahj
=======
<<<<<<< HEAD
## Funzionalità
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Funzionalità
=======
>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn
    ]"
/>
```

## Funzionalità

<<<<<<< .merge_file_dqU2EY
=======
## Funzionalità
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_19nahj
<<<<<<< HEAD
=======
=======
## Funzionalità
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_wXDxL6
>>>>>>> laraxot/dev
>>>>>>> .merge_file_XWXkZn
>>>>>>> .merge_file_21clqV
### Ordinamento
- Multi-colonna
- Direzione (asc/desc)
- Personalizzazione
- Cache risultati
<<<<<<< .merge_file_Dx01iB
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY

=======
=======
<<<<<<< .merge_file_19nahj

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
>>>>>>> .merge_file_21clqV
### Filtri
- Testo libero
- Select multipli
- Date range
- Custom filters
<<<<<<< .merge_file_Dx01iB
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< .merge_file_19nahj
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Paginazione
- Server-side
- Client-side
- Cache pagine
## Integrazione
### Livewire
```php
use Livewire\Component;
=======
>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn

### Paginazione
- Server-side
- Client-side
- Personalizzazione
- Cache pagine

## Integrazione

### Livewire
```php
use Livewire\Component;

<<<<<<< .merge_file_dqU2EY
=======
=======
<<<<<<< .merge_file_19nahj
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_XWXkZn
>>>>>>> .merge_file_21clqV
### Paginazione
- Server-side
- Client-side
- Cache pagine
## Integrazione
### Livewire
```php
use Livewire\Component;
<<<<<<< .merge_file_Dx01iB
=======
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
>>>>>>> .merge_file_21clqV
class UserTable extends Component
{
    public $sortField = 'name';
    public $sortDirection = 'asc';
    public $search = '';
    public $perPage = 10;
<<<<<<< .merge_file_Dx01iB
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY

=======
=======
<<<<<<< .merge_file_19nahj

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
>>>>>>> .merge_file_21clqV
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }
<<<<<<< .merge_file_Dx01iB
    public function render()
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY

    public function render()
    {
=======
    public function render()
=======
<<<<<<< .merge_file_19nahj

    public function render()
    {
=======
<<<<<<< HEAD
    public function render()
=======
<<<<<<< HEAD

    public function render()
    {
=======
    public function render()
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    public function render()
=======

    public function render()
    {
>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
>>>>>>> .merge_file_21clqV
        $users = User::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%'.$this->search.'%')
                    ->orWhere('email', 'like', '%'.$this->search.'%');
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);
<<<<<<< .merge_file_Dx01iB
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< .merge_file_19nahj
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
        return view('livewire.user-table', compact('users'));
}
## Best Practices
### Utilizzo
- Ottimizzazione query
- Lazy loading
- Responsive design
=======
>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn

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

<<<<<<< .merge_file_dqU2EY
=======
=======
<<<<<<< .merge_file_19nahj
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_XWXkZn
>>>>>>> .merge_file_21clqV
        return view('livewire.user-table', compact('users'));
}
## Best Practices
### Utilizzo
- Ottimizzazione query
- Lazy loading
- Responsive design
<<<<<<< .merge_file_Dx01iB
=======
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
>>>>>>> .merge_file_21clqV
### Performance
- Indici database
- Query ottimizzate
- Cache paginazione
- Lazy loading colonne
<<<<<<< .merge_file_Dx01iB
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY

=======
=======
<<<<<<< .merge_file_19nahj

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
>>>>>>> .merge_file_21clqV
## Collegamenti
- [Componenti Base](./base-components.md)
- [Componenti Form](./form-components.md)
- [Componenti Chart](./chart-components.md)
- [Componenti Layout](./layout-components.md)
<<<<<<< .merge_file_Dx01iB

```
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< .merge_file_19nahj
>>>>>>> .merge_file_XWXkZn
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
=======

```
=======
>>>>>>> .merge_file_wXDxL6
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
=======
<<<<<<< HEAD
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< HEAD
=======
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
<<<<<<< .merge_file_19nahj
- [Documentazione Frontend](../cms/project_docs/frontend-architecture.md)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_XWXkZn

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
<<<<<<< .merge_file_dqU2EY
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_wXDxL6
>>>>>>> .merge_file_XWXkZn
>>>>>>> laraxot/dev
>>>>>>> .merge_file_21clqV
