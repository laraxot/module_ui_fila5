# Plugin VSCode per Filament

## Overview

Il plugin VSCode per Filament fornisce funzionalità avanzate per lo sviluppo di interfacce Filament, con snippet, autocompletamento e validazione in tempo reale.

## Installazione

1. Apri VSCode
2. Vai al pannello Extensions (Ctrl+Shift+X)
3. Cerca "Filament PHP"
4. Installa il plugin di doonfrs

## Funzionalità Principali

### 1. Snippet per Form Components
```php
// Digita 'fil-text' e premi Tab
TextInput::make('field_name')
    ->required()
    ->maxLength(255)

// Digita 'fil-select' e premi Tab
Select::make('status')
    ->options([
        'draft' => 'Draft',
        'published' => 'Published'
    ])
    ->required()

// Digita 'fil-date' e premi Tab
DatePicker::make('published_at')
    ->format('Y-m-d')
    ->required()
```

### 2. Snippet per Table Columns
```php
// Digita 'fil-col-text' e premi Tab
TextColumn::make('title')
    ->searchable()
    ->sortable()

// Digita 'fil-col-bool' e premi Tab
IconColumn::make('is_published')
    ->boolean()
    ->sortable()
```

### 3. Snippet per Actions
```php
// Digita 'fil-action' e premi Tab
Action::make('approve')
    ->label('Approve')
    ->requiresConfirmation()
    ->action(fn () => $this->approve())

// Digita 'fil-bulk' e premi Tab
BulkAction::make('delete')
    ->label('Delete Selected')
    ->requiresConfirmation()
    ->action(fn (Collection $records) => $records->each->delete())
```

## Best Practices

### 1. Organizzazione Form
```php
// Raggruppa campi correlati
Section::make('Personal Information')
    ->schema([
        $this->getPersonalInfoFields(),    // ✅ Metodo separato
        $this->getContactFields(),         // ✅ Metodo separato
    ])

// Invece di
Section::make('Personal Information')      // ❌ Troppi campi inline
    ->schema([
        TextInput::make('name'),
        TextInput::make('email'),
        TextInput::make('phone'),
        // ... altri 10 campi
    ])
```

### 2. Validazione
```php
// Usa i metodi di validazione suggeriti
TextInput::make('email')
    ->email()                // ✅ Validazione specifica
    ->required()
    ->unique(ignoreRecord: true)

// Invece di
TextInput::make('email')    // ❌ Validazione generica
    ->rules(['email', 'required', 'unique:users,email'])
```

### 3. Relazioni
```php
// Usa i metodi relationship suggeriti
Select::make('category_id')
    ->relationship('category', 'name')  // ✅ Metodo relationship
    ->searchable()
    ->preload()

// Invece di
Select::make('category_id')            // ❌ Query manuale
    ->options(Category::pluck('name', 'id'))
```

## Scorciatoie da Tastiera

| Scorciatoia | Descrizione |
|-------------|-------------|
| `fil-text→` | TextInput component |
| `fil-select→` | Select component |
| `fil-date→` | DatePicker component |
| `fil-col→` | Table Column |
| `fil-action→` | Action |
| `fil-bulk→` | Bulk Action |
| `fil-section→` | Form Section |
| `fil-grid→` | Grid Layout |
| `fil-card→` | Card Layout |

## Validazione in Tempo Reale

Il plugin fornisce:
- Evidenziazione errori sintassi
- Suggerimenti metodi disponibili
- Validazione tipi di dati
- Controllo namespace

## Integrazione con il Nostro Workflow

### 1. Convenzioni di Naming
```php
// Il plugin suggerisce i nostri prefissi standard
TextInput::make('full_name')    // ✅ Naming convention corretta
    ->required()

TextInput::make('nome')         // ❌ Non segue convenzioni
    ->required()
```

### 2. Struttura Form
```php
// Organizzazione suggerita per i nostri form
Forms\Components\Wizard::make([
    $this->getPersonalInfoStep(),     // ✅ Metodi separati per step
    $this->getContactsStep(),
])
->skippable(false)
```

### 3. Traduzioni
```php
// Supporto per il nostro sistema di traduzioni
TextInput::make('full_name')
    // Il plugin suggerisce l'uso di trans()
    ->placeholder(trans("$prefix.fields.full_name.placeholder"))
```

## Configurazione Raccomandata

```json
// .vscode/settings.json
{
    "filamentphp.snippets.enabled": true,
    "filamentphp.validation.enabled": true,
    "filamentphp.intelephense.enabled": true,
    "filamentphp.format.enabled": true,
    "editor.snippetSuggestions": "top"
}
```

## Troubleshooting

### Problemi Comuni

1. **Snippet non funzionano**
   - Verifica che il file sia riconosciuto come PHP
   - Controlla che i suggerimenti snippet siano abilitati
   - Riavvia VSCode

2. **Validazione non funziona**
   - Verifica che intelephense sia installato
   - Controlla che il workspace sia trusted
   - Aggiorna il plugin

3. **Autocompletamento lento**
   - Riduci la dimensione del workspace
   - Aumenta la memoria disponibile per VSCode
   - Disabilita temporaneamente altre estensioni

## Collegamenti
- [Form Components](form-components.md)
- [Naming Conventions](naming-conventions.md)
<<<<<<< .merge_file_f5ywKc
- [Translation System](../../Lang/docs/translation-system.md)
=======
<<<<<<< HEAD
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< .merge_file_rRaqcH
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
- [Translation System](../../Lang/docs/translation-system.md)
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
- [Translation System](../../lang/docs/translation-system.md)
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0FtEur

## Vedi Anche
- [VSCode PHP Setup](vscode-php-setup.md)
- [Development Tools](development-tools.md)
- [Filament Documentation](https://filamentphp.com/docs)
# Plugin VSCode per Filament
## Overview
Il plugin VSCode per Filament fornisce funzionalità avanzate per lo sviluppo di interfacce Filament, con snippet, autocompletamento e validazione in tempo reale.
## Installazione
<<<<<<< .merge_file_f5ywKc
=======
=======

## Overview

Il plugin VSCode per Filament fornisce funzionalità avanzate per lo sviluppo di interfacce Filament, con snippet, autocompletamento e validazione in tempo reale.

## Installazione

<<<<<<< .merge_file_g70EhP
=======
=======
<<<<<<< .merge_file_rRaqcH
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZeRtQc
- [Translation System](../../Lang/docs/translation-system.md)

## Vedi Anche
- [VSCode PHP Setup](vscode-php-setup.md)
<<<<<<< HEAD
- [Development Tools](development-tools.md)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Development Tools](development-tools.md)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [Development Tools](development-tools.md)
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- [Development Tools](development-tools.md)
- [Filament Documentation](https://filamentphp.com/docs)
# Plugin VSCode per Filament
## Overview
Il plugin VSCode per Filament fornisce funzionalità avanzate per lo sviluppo di interfacce Filament, con snippet, autocompletamento e validazione in tempo reale.
## Installazione
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0FtEur
1. Apri VSCode
2. Vai al pannello Extensions (Ctrl+Shift+X)
3. Cerca "Filament PHP"
4. Installa il plugin di doonfrs
<<<<<<< .merge_file_f5ywKc
## Funzionalità Principali
=======
<<<<<<< HEAD
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< .merge_file_rRaqcH

## Funzionalità Principali

=======
<<<<<<< HEAD
## Funzionalità Principali
=======
<<<<<<< HEAD
>>>>>>> .merge_file_ZeRtQc

## Funzionalità Principali

=======
## Funzionalità Principali
>>>>>>> laraxot/dev
<<<<<<< .merge_file_g70EhP
=======
>>>>>>> laraxot/dev
=======
## Funzionalità Principali
=======

## Funzionalità Principali

>>>>>>> .merge_file_CaD30X
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZeRtQc
>>>>>>> .merge_file_0FtEur
### 1. Snippet per Form Components
```php
// Digita 'fil-text' e premi Tab
TextInput::make('field_name')
    ->required()
    ->maxLength(255)
<<<<<<< .merge_file_f5ywKc
=======
<<<<<<< HEAD
<<<<<<< .merge_file_g70EhP

=======
=======
<<<<<<< .merge_file_rRaqcH

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0FtEur
// Digita 'fil-select' e premi Tab
Select::make('status')
    ->options([
        'draft' => 'Draft',
        'published' => 'Published'
    ])
<<<<<<< .merge_file_f5ywKc
=======
<<<<<<< HEAD
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< .merge_file_rRaqcH
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
// Digita 'fil-date' e premi Tab
DatePicker::make('published_at')
    ->format('Y-m-d')
```
### 2. Snippet per Table Columns
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
    ->required()

// Digita 'fil-date' e premi Tab
DatePicker::make('published_at')
    ->format('Y-m-d')
    ->required()
```

### 2. Snippet per Table Columns
```php
<<<<<<< .merge_file_g70EhP
=======
=======
<<<<<<< .merge_file_rRaqcH
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZeRtQc
>>>>>>> .merge_file_0FtEur
// Digita 'fil-date' e premi Tab
DatePicker::make('published_at')
    ->format('Y-m-d')
```
### 2. Snippet per Table Columns
<<<<<<< .merge_file_f5ywKc
=======
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0FtEur
// Digita 'fil-col-text' e premi Tab
TextColumn::make('title')
    ->searchable()
    ->sortable()
<<<<<<< .merge_file_f5ywKc
=======
<<<<<<< HEAD
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< .merge_file_rRaqcH
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_0FtEur
// Digita 'fil-col-bool' e premi Tab
IconColumn::make('is_published')
    ->boolean()
### 3. Snippet per Actions
<<<<<<< .merge_file_f5ywKc
=======
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc

// Digita 'fil-col-bool' e premi Tab
IconColumn::make('is_published')
    ->boolean()
    ->sortable()
```

### 3. Snippet per Actions
```php
<<<<<<< .merge_file_g70EhP
=======
=======
<<<<<<< .merge_file_rRaqcH
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZeRtQc
// Digita 'fil-col-bool' e premi Tab
IconColumn::make('is_published')
    ->boolean()
### 3. Snippet per Actions
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0FtEur
// Digita 'fil-action' e premi Tab
Action::make('approve')
    ->label('Approve')
    ->requiresConfirmation()
    ->action(fn () => $this->approve())
<<<<<<< .merge_file_f5ywKc
=======
<<<<<<< HEAD
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< .merge_file_rRaqcH
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
// Digita 'fil-bulk' e premi Tab
BulkAction::make('delete')
    ->label('Delete Selected')
    ->action(fn (Collection $records) => $records->each->delete())
## Best Practices
### 1. Organizzazione Form
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc

>>>>>>> .merge_file_0FtEur
// Digita 'fil-bulk' e premi Tab
BulkAction::make('delete')
    ->label('Delete Selected')
    ->action(fn (Collection $records) => $records->each->delete())
## Best Practices
### 1. Organizzazione Form
<<<<<<< .merge_file_f5ywKc
=======
```php
<<<<<<< .merge_file_g70EhP
=======
=======
<<<<<<< .merge_file_rRaqcH
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZeRtQc
// Digita 'fil-bulk' e premi Tab
BulkAction::make('delete')
    ->label('Delete Selected')
    ->action(fn (Collection $records) => $records->each->delete())
## Best Practices
### 1. Organizzazione Form
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0FtEur
// Raggruppa campi correlati
Section::make('Personal Information')
    ->schema([
        $this->getPersonalInfoFields(),    // ✅ Metodo separato
        $this->getContactFields(),         // ✅ Metodo separato
<<<<<<< .merge_file_f5ywKc
// Invece di
Section::make('Personal Information')      // ❌ Troppi campi inline
=======
<<<<<<< HEAD
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< .merge_file_rRaqcH
=======
<<<<<<< HEAD
// Invece di
Section::make('Personal Information')      // ❌ Troppi campi inline
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
// Invece di
Section::make('Personal Information')      // ❌ Troppi campi inline
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
    ])

// Invece di
Section::make('Personal Information')      // ❌ Troppi campi inline
    ->schema([
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< .merge_file_rRaqcH
<<<<<<< HEAD
=======
>>>>>>> .merge_file_ZeRtQc
=======
// Invece di
Section::make('Personal Information')      // ❌ Troppi campi inline
>>>>>>> laraxot/dev
<<<<<<< .merge_file_g70EhP
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZeRtQc
>>>>>>> .merge_file_0FtEur
        TextInput::make('name'),
        TextInput::make('email'),
        TextInput::make('phone'),
        // ... altri 10 campi
<<<<<<< .merge_file_f5ywKc
=======
<<<<<<< HEAD
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< .merge_file_rRaqcH
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### 2. Validazione
// Usa i metodi di validazione suggeriti
TextInput::make('email')
    ->email()                // ✅ Validazione specifica
    ->unique(ignoreRecord: true)
TextInput::make('email')    // ❌ Validazione generica
    ->rules(['email', 'required', 'unique:users,email'])
### 3. Relazioni
// Usa i metodi relationship suggeriti
Select::make('category_id')
    ->relationship('category', 'name')  // ✅ Metodo relationship
    ->preload()
Select::make('category_id')            // ❌ Query manuale
    ->options(Category::pluck('name', 'id'))
## Scorciatoie da Tastiera
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
    ])
```

### 2. Validazione
```php
// Usa i metodi di validazione suggeriti
TextInput::make('email')
    ->email()                // ✅ Validazione specifica
    ->required()
    ->unique(ignoreRecord: true)

// Invece di
TextInput::make('email')    // ❌ Validazione generica
    ->rules(['email', 'required', 'unique:users,email'])
```

### 3. Relazioni
```php
// Usa i metodi relationship suggeriti
Select::make('category_id')
    ->relationship('category', 'name')  // ✅ Metodo relationship
    ->searchable()
    ->preload()

// Invece di
Select::make('category_id')            // ❌ Query manuale
    ->options(Category::pluck('name', 'id'))
```

## Scorciatoie da Tastiera

<<<<<<< .merge_file_g70EhP
=======
=======
<<<<<<< .merge_file_rRaqcH
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZeRtQc
>>>>>>> .merge_file_0FtEur
### 2. Validazione
// Usa i metodi di validazione suggeriti
TextInput::make('email')
    ->email()                // ✅ Validazione specifica
    ->unique(ignoreRecord: true)
TextInput::make('email')    // ❌ Validazione generica
    ->rules(['email', 'required', 'unique:users,email'])
### 3. Relazioni
// Usa i metodi relationship suggeriti
Select::make('category_id')
    ->relationship('category', 'name')  // ✅ Metodo relationship
    ->preload()
Select::make('category_id')            // ❌ Query manuale
    ->options(Category::pluck('name', 'id'))
## Scorciatoie da Tastiera
<<<<<<< .merge_file_f5ywKc
=======
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0FtEur
| Scorciatoia | Descrizione |
|-------------|-------------|
| `fil-text→` | TextInput component |
| `fil-select→` | Select component |
| `fil-date→` | DatePicker component |
| `fil-col→` | Table Column |
| `fil-action→` | Action |
| `fil-bulk→` | Bulk Action |
| `fil-section→` | Form Section |
| `fil-grid→` | Grid Layout |
| `fil-card→` | Card Layout |
<<<<<<< .merge_file_f5ywKc
## Validazione in Tempo Reale
=======
<<<<<<< HEAD
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< .merge_file_rRaqcH
>>>>>>> .merge_file_ZeRtQc

## Validazione in Tempo Reale

=======
<<<<<<< .merge_file_g70EhP
## Validazione in Tempo Reale
=======
<<<<<<< HEAD
## Validazione in Tempo Reale
=======
<<<<<<< HEAD

## Validazione in Tempo Reale

=======
## Validazione in Tempo Reale
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
## Validazione in Tempo Reale
=======

## Validazione in Tempo Reale

>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0FtEur
Il plugin fornisce:
- Evidenziazione errori sintassi
- Suggerimenti metodi disponibili
- Validazione tipi di dati
- Controllo namespace
<<<<<<< .merge_file_f5ywKc
=======
<<<<<<< HEAD
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< .merge_file_rRaqcH
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_0FtEur
## Integrazione con il Nostro Workflow
### 1. Convenzioni di Naming
// Il plugin suggerisce i nostri prefissi standard
TextInput::make('full_name')    // ✅ Naming convention corretta
TextInput::make('nome')         // ❌ Non segue convenzioni
### 2. Struttura Form
<<<<<<< .merge_file_f5ywKc
=======
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc

## Integrazione con il Nostro Workflow

### 1. Convenzioni di Naming
```php
// Il plugin suggerisce i nostri prefissi standard
TextInput::make('full_name')    // ✅ Naming convention corretta
    ->required()

TextInput::make('nome')         // ❌ Non segue convenzioni
    ->required()
```

### 2. Struttura Form
```php
<<<<<<< .merge_file_g70EhP
=======
=======
<<<<<<< .merge_file_rRaqcH
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZeRtQc
## Integrazione con il Nostro Workflow
### 1. Convenzioni di Naming
// Il plugin suggerisce i nostri prefissi standard
TextInput::make('full_name')    // ✅ Naming convention corretta
TextInput::make('nome')         // ❌ Non segue convenzioni
### 2. Struttura Form
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0FtEur
// Organizzazione suggerita per i nostri form
Forms\Components\Wizard::make([
    $this->getPersonalInfoStep(),     // ✅ Metodi separati per step
    $this->getContactsStep(),
])
->skippable(false)
<<<<<<< .merge_file_f5ywKc
### 3. Traduzioni
=======
<<<<<<< HEAD
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< .merge_file_rRaqcH
=======
<<<<<<< HEAD
### 3. Traduzioni
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### 3. Traduzioni
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
```

### 3. Traduzioni
```php
<<<<<<< .merge_file_g70EhP
=======
### 3. Traduzioni
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_rRaqcH
<<<<<<< HEAD
=======
=======
### 3. Traduzioni
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZeRtQc
>>>>>>> .merge_file_0FtEur
// Supporto per il nostro sistema di traduzioni
TextInput::make('full_name')
    // Il plugin suggerisce l'uso di trans()
    ->placeholder(trans("$prefix.fields.full_name.placeholder"))
<<<<<<< .merge_file_f5ywKc
## Configurazione Raccomandata
=======
<<<<<<< HEAD
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< .merge_file_rRaqcH
=======
<<<<<<< HEAD
## Configurazione Raccomandata
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Configurazione Raccomandata
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
```

## Configurazione Raccomandata

<<<<<<< .merge_file_g70EhP
=======
## Configurazione Raccomandata
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_rRaqcH
<<<<<<< HEAD
=======
=======
## Configurazione Raccomandata
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZeRtQc
>>>>>>> .merge_file_0FtEur
```json
// .vscode/settings.json
{
    "filamentphp.snippets.enabled": true,
    "filamentphp.validation.enabled": true,
    "filamentphp.intelephense.enabled": true,
    "filamentphp.format.enabled": true,
    "editor.snippetSuggestions": "top"
}
<<<<<<< .merge_file_f5ywKc
## Troubleshooting
### Problemi Comuni
=======
<<<<<<< HEAD
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< .merge_file_rRaqcH
=======
<<<<<<< HEAD
## Troubleshooting
### Problemi Comuni
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Troubleshooting
### Problemi Comuni
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
```

## Troubleshooting

### Problemi Comuni

<<<<<<< .merge_file_g70EhP
=======
<<<<<<< .merge_file_rRaqcH
<<<<<<< HEAD
=======
>>>>>>> .merge_file_ZeRtQc
=======
## Troubleshooting
### Problemi Comuni
>>>>>>> laraxot/dev
<<<<<<< .merge_file_g70EhP
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZeRtQc
>>>>>>> .merge_file_0FtEur
1. **Snippet non funzionano**
   - Verifica che il file sia riconosciuto come PHP
   - Controlla che i suggerimenti snippet siano abilitati
   - Riavvia VSCode
<<<<<<< .merge_file_f5ywKc
=======
<<<<<<< HEAD
<<<<<<< .merge_file_g70EhP

=======
=======
<<<<<<< .merge_file_rRaqcH

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0FtEur
2. **Validazione non funziona**
   - Verifica che intelephense sia installato
   - Controlla che il workspace sia trusted
   - Aggiorna il plugin
<<<<<<< .merge_file_f5ywKc
=======
<<<<<<< HEAD
<<<<<<< .merge_file_g70EhP

=======
=======
<<<<<<< .merge_file_rRaqcH

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0FtEur
3. **Autocompletamento lento**
   - Riduci la dimensione del workspace
   - Aumenta la memoria disponibile per VSCode
   - Disabilita temporaneamente altre estensioni
<<<<<<< .merge_file_f5ywKc
=======
<<<<<<< HEAD
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< .merge_file_rRaqcH
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_0FtEur
## Collegamenti
- [Form Components](form-components.md)
- [Naming Conventions](naming-conventions.md)
- [Translation System](../../Lang/project_docs/translation-system.md)
## Vedi Anche
- [VSCode PHP Setup](vscode-php-setup.md)

```
<<<<<<< .merge_file_f5ywKc
=======
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc

## Collegamenti
- [Form Components](form-components.md)
- [Naming Conventions](naming-conventions.md)
- [Translation System](../../lang/project_docs/translation-system.md)
- [Translation System](../../lang/project_docs/translation-system.md)
- [Translation System](../../lang/project_docs/translation-system.md)

## Vedi Anche
- [VSCode PHP Setup](vscode-php-setup.md)
<<<<<<< .merge_file_g70EhP
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZeRtQc
## Collegamenti
- [Form Components](form-components.md)
- [Naming Conventions](naming-conventions.md)
- [Translation System](../../Lang/project_docs/translation-system.md)
## Vedi Anche
- [VSCode PHP Setup](vscode-php-setup.md)
<<<<<<< HEAD

```
=======
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZeRtQc
>>>>>>> laraxot/dev
- [Development Tools](development-tools.md)
- [Filament Documentation](https://filamentphp.com/docs)
- [Filament Documentation](https://filamentphp.com/docs)
- [Filament Documentation](https://filamentphp.com/docs)
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< .merge_file_rRaqcH
>>>>>>> .merge_file_ZeRtQc
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZeRtQc
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- [Development Tools](development-tools.md)
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_g70EhP
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_CaD30X
>>>>>>> .merge_file_ZeRtQc
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0FtEur
