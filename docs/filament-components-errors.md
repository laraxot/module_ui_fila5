# Errori Comuni nei Componenti Filament UI

## ⚠️ Errori di Metodi Non Supportati

### 1. FileUpload: Uso errato di icon()
❌ **NON FARE**:
```php
FileUpload::make('document')
    ->icon('heroicon-o-document') // ❌ Questo metodo non esiste per FileUpload
```

✅ **FARE**:
```php
FileUpload::make('document')
    ->buttonLabel('Upload Document') // ✅ Usare buttonLabel() per personalizzare il testo
    ->helperText('Upload your document here') // ✅ Usare helperText() per aggiungere descrizioni
```

### 2. FileUpload: Uso errato di prefixIcon
❌ **NON FARE**:
```php
FileUpload::make('document')
    ->prefixIcon('heroicon-o-document') // ❌ Questo metodo non esiste per FileUpload
```

✅ **FARE**:
```php
FileUpload::make('document')
    ->buttonLabel('Upload Document') // ✅ Usare buttonLabel() invece di prefixIcon()
```

### 3. FileUpload: Uso errato di removeButtonPosition
❌ **NON FARE**:
```php
FileUpload::make('document')
    ->removeButtonPosition('right') // ❌ Questo metodo non esiste
```

✅ **FARE**:
```php
FileUpload::make('document')
    ->removeUploadedFileButtonPosition('right') // ✅ Usare il nome corretto del metodo
```

### 4. TextInput: Uso errato di name/surname
❌ **NON FARE**:
```php
TextInput::make('name') // ❌ Non usare 'name' per il nome
TextInput::make('surname') // ❌ Non usare 'surname' per il cognome
```

✅ **FARE**:
```php
TextInput::make('first_name') // ✅ Usare 'first_name' per il nome
TextInput::make('last_name') // ✅ Usare 'last_name' per il cognome
```

### 5. Wizard: Implementazione errata degli Step
❌ **NON FARE**:
```php
Forms\Components\Wizard::make([
    Forms\Components\Wizard\Step::make('step_one') // ❌ Step definito inline
        ->schema([
            // ... schema ...
        ]),
]);
```

✅ **FARE**:
```php
Forms\Components\Wizard::make([
    self::getStepOne(), // ✅ Step definito in un metodo separato
]);

protected static function getStepOne(): Forms\Components\Wizard\Step
{
    return Forms\Components\Wizard\Step::make('step_one')
        ->schema([
            // ... schema ...
        ]);
}
```

### 6. Form Components: Uso errato di label()
❌ **NON FARE**:
```php
TextInput::make('first_name')
    ->label('Nome')  // ❌ Non usare il metodo label()
    ->placeholder('Inserisci il nome');

TextInput::make('first_name')
    ->label(trans('prefix.fields.first_name.label'))  // ❌ Non usare neanche trans()
    ->placeholder('Inserisci il nome');
```

✅ **FARE**:
```php
TextInput::make('first_name')  // ✅ Il LangServiceProvider gestirà automaticamente la label
    ->placeholder('Inserisci il nome');
```

## Regole per la Documentazione degli Errori UI

1. **Posizione della Documentazione**:
   - Gli errori UI devono essere documentati in `Modules/UI/docs/`
   - Creare sottocartelle specifiche per tipo di errore
   - Mantenere una struttura coerente

2. **Struttura del Documento**:
   - Titolo chiaro e descrittivo
   - Esempio dell'errore (❌)
   - Esempio della correzione (✅)
   - Spiegazione del perché
   - Collegamenti bidirezionali

3. **Collegamenti Bidirezionali**:
   - Collegare alla documentazione del componente
   - Collegare alla documentazione delle best practices
   - Collegare a esempi di implementazione corretta

## Best Practices per la Documentazione

1. **Organizzazione**:
   - Raggruppare errori per tipo di componente
   - Mantenere una struttura gerarchica
   - Usare markdown per la formattazione

2. **Contenuto**:
   - Includere sempre esempi di codice
   - Spiegare il perché dell'errore
   - Fornire soluzioni alternative

3. **Manutenzione**:
   - Aggiornare regolarmente la documentazione
   - Verificare i collegamenti
   - Aggiungere nuovi errori quando scoperti

## Collegamenti Bidirezionali

- [Documentazione Componenti Filament](../../../../docs/filament/components.md)
<<<<<<< .merge_file_Sj9eS2
=======
<<<<<<< HEAD
- [Documentazione Componenti Filament](../../../../docs/filament/components.md)
=======
<<<<<<< HEAD
- [Documentazione Componenti Filament](../../../../docs/filament/components.md)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
- [Documentazione Componenti Filament](../../../../docs/filament/components.md)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
- [Documentazione Componenti Filament](../../../docs/filament/components.md)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
- [Documentazione Componenti Filament](../../../../docs/filament/components.md)
=======
- [Documentazione Componenti Filament](../../../docs/filament/components.md)
>>>>>>> laraxot/dev
=======
- [Documentazione Componenti Filament](../../../../docs/filament/components.md)
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
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eOwEDI
- [Best Practices UI](../../best-practices.md)
- [Errori Comuni UI](../../common-errors.md)
- [Implementazione Corretta](../../examples/correct-implementation.md)
- [Convenzioni di Naming dei Campi](./convenzioni-naming-campi.md)
- [Gestione degli Step nei Wizard](./clean-code/wizard-steps.md)
- [Gestione delle Traduzioni](./translations/lang-service-provider.md)
- [Componente FileUpload](./filament-components/file-upload.md)

## Processo di Documentazione

1. **Identificazione**:
   - Riconoscere l'errore come problema UI
   - Categorizzare l'errore
   - Determinare la posizione corretta della documentazione

2. **Documentazione**:
   - Creare/aggiornare il file nella cartella corretta
   - Includere esempi e spiegazioni
   - Aggiungere collegamenti bidirezionali

3. **Verifica**:
   - Controllare la struttura della documentazione
   - Verificare i collegamenti
   - Assicurarsi che sia facilmente trovabile

## Note Importanti

1. La documentazione degli errori UI deve essere sempre in `Modules/UI/docs/`
2. Mantenere collegamenti bidirezionali aggiornati
3. Seguire le convenzioni di naming del progetto
<<<<<<< .merge_file_Sj9eS2
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
4. Aggiornare la documentazione quando vengono scoperti nuovi errori
<<<<<<< HEAD
=======
=======
4. Aggiornare la documentazione quando vengono scoperti nuovi errori
>>>>>>> 804451c (Lint)
=======
4. Aggiornare la documentazione quando vengono scoperti nuovi errori
>>>>>>> .merge_file_eOwEDI
# Errori Comuni nei Componenti Filament UI

## ⚠️ Errori di Metodi Non Supportati

<<<<<<< .merge_file_Sj9eS2
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
1. La documentazione degli errori UI deve essere sempre in `Modules/UI/project_docs/`
2. Mantenere collegamenti bidirezionali aggiornati
3. Seguire le convenzioni di naming del progetto
=======
<<<<<<< HEAD
1. La documentazione degli errori UI deve essere sempre in `Modules/UI/project_docs/`
2. Mantenere collegamenti bidirezionali aggiornati
3. Seguire le convenzioni di naming del progetto
4. Aggiornare la documentazione quando vengono scoperti nuovi errori 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
1. La documentazione degli errori UI deve essere sempre in `Modules/UI/project_docs/`
2. Mantenere collegamenti bidirezionali aggiornati
3. Seguire le convenzioni di naming del progetto
4. Aggiornare la documentazione quando vengono scoperti nuovi errori 
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
4. Aggiornare la documentazione quando vengono scoperti nuovi errori
# Errori Comuni nei Componenti Filament UI
## ⚠️ Errori di Metodi Non Supportati
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eOwEDI
### 1. FileUpload: Uso errato di icon()
❌ **NON FARE**:
```php
FileUpload::make('document')
    ->icon('heroicon-o-document') // ❌ Questo metodo non esiste per FileUpload
```
<<<<<<< .merge_file_Sj9eS2
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_eOwEDI

✅ **FARE**:
```php
FileUpload::make('document')
    ->buttonLabel('Upload Document') // ✅ Usare buttonLabel() per personalizzare il testo
    ->helperText('Upload your document here') // ✅ Usare helperText() per aggiungere descrizioni
```

### 2. FileUpload: Uso errato di prefixIcon
❌ **NON FARE**:
```php
FileUpload::make('document')
    ->prefixIcon('heroicon-o-document') // ❌ Questo metodo non esiste per FileUpload
```

✅ **FARE**:
```php
FileUpload::make('document')
    ->buttonLabel('Upload Document') // ✅ Usare buttonLabel() invece di prefixIcon()
```

### 3. FileUpload: Uso errato di removeButtonPosition
❌ **NON FARE**:
```php
FileUpload::make('document')
    ->removeButtonPosition('right') // ❌ Questo metodo non esiste
```

✅ **FARE**:
```php
FileUpload::make('document')
    ->removeUploadedFileButtonPosition('right') // ✅ Usare il nome corretto del metodo
```

### 4. TextInput: Uso errato di name/surname
❌ **NON FARE**:
```php
TextInput::make('name') // ❌ Non usare 'name' per il nome
TextInput::make('surname') // ❌ Non usare 'surname' per il cognome
```

✅ **FARE**:
```php
TextInput::make('first_name') // ✅ Usare 'first_name' per il nome
TextInput::make('last_name') // ✅ Usare 'last_name' per il cognome
```

### 5. Wizard: Implementazione errata degli Step
❌ **NON FARE**:
```php
<<<<<<< .merge_file_Sj9eS2
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
✅ **FARE**:
    ->buttonLabel('Upload Document') // ✅ Usare buttonLabel() per personalizzare il testo
    ->helperText('Upload your document here') // ✅ Usare helperText() per aggiungere descrizioni
### 2. FileUpload: Uso errato di prefixIcon
    ->prefixIcon('heroicon-o-document') // ❌ Questo metodo non esiste per FileUpload
    ->buttonLabel('Upload Document') // ✅ Usare buttonLabel() invece di prefixIcon()
### 3. FileUpload: Uso errato di removeButtonPosition
    ->removeButtonPosition('right') // ❌ Questo metodo non esiste
    ->removeUploadedFileButtonPosition('right') // ✅ Usare il nome corretto del metodo
### 4. TextInput: Uso errato di name/surname
TextInput::make('name') // ❌ Non usare 'name' per il nome
TextInput::make('surname') // ❌ Non usare 'surname' per il cognome
TextInput::make('first_name') // ✅ Usare 'first_name' per il nome
TextInput::make('last_name') // ✅ Usare 'last_name' per il cognome
### 5. Wizard: Implementazione errata degli Step
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eOwEDI
Forms\Components\Wizard::make([
    Forms\Components\Wizard\Step::make('step_one') // ❌ Step definito inline
        ->schema([
            // ... schema ...
        ]),
]);
<<<<<<< .merge_file_Sj9eS2
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_eOwEDI
```

✅ **FARE**:
```php
Forms\Components\Wizard::make([
    self::getStepOne(), // ✅ Step definito in un metodo separato
]);

protected static function getStepOne(): Forms\Components\Wizard\Step
{
    return Forms\Components\Wizard\Step::make('step_one')
        ->schema([
            // ... schema ...
        ]);
}
```

### 6. Form Components: Uso errato di label()
❌ **NON FARE**:
```php
TextInput::make('first_name')
    ->label('Nome')  // ❌ Non usare il metodo label()
    ->placeholder('Inserisci il nome');

TextInput::make('first_name')
    ->label(trans('prefix.fields.first_name.label'))  // ❌ Non usare neanche trans()
    ->placeholder('Inserisci il nome');
```

✅ **FARE**:
```php
TextInput::make('first_name')  // ✅ Il LangServiceProvider gestirà automaticamente la label
    ->placeholder('Inserisci il nome');
```

## Regole per la Documentazione degli Errori UI

1. **Posizione della Documentazione**:
   - Gli errori UI devono essere documentati in `Modules/UI/project_docs/`
   - Gli errori UI devono essere documentati in `Modules/UI/project_docs/`
   - Gli errori UI devono essere documentati in `Modules/UI/project_docs/`
   - Creare sottocartelle specifiche per tipo di errore
   - Mantenere una struttura coerente

<<<<<<< .merge_file_Sj9eS2
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
    self::getStepOne(), // ✅ Step definito in un metodo separato
protected static function getStepOne(): Forms\Components\Wizard\Step
{
    return Forms\Components\Wizard\Step::make('step_one')
        ]);
}
### 6. Form Components: Uso errato di label()
TextInput::make('first_name')
    ->label('Nome')  // ❌ Non usare il metodo label()
    ->placeholder('Inserisci il nome');
    ->label(trans('prefix.fields.first_name.label'))  // ❌ Non usare neanche trans()
TextInput::make('first_name')  // ✅ Il LangServiceProvider gestirà automaticamente la label
## Regole per la Documentazione degli Errori UI
1. **Posizione della Documentazione**:
   - Gli errori UI devono essere documentati in `Modules/UI/project_docs/`
   - Creare sottocartelle specifiche per tipo di errore
   - Mantenere una struttura coerente
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eOwEDI
2. **Struttura del Documento**:
   - Titolo chiaro e descrittivo
   - Esempio dell'errore (❌)
   - Esempio della correzione (✅)
   - Spiegazione del perché
   - Collegamenti bidirezionali
<<<<<<< .merge_file_Sj9eS2
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_eOwEDI
3. **Collegamenti Bidirezionali**:
   - Collegare alla documentazione del componente
   - Collegare alla documentazione delle best practices
   - Collegare a esempi di implementazione corretta

<<<<<<< .merge_file_Sj9eS2
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> .merge_file_eOwEDI
## Best Practices per la Documentazione

<<<<<<< .merge_file_Sj9eS2
## Best Practices per la Documentazione

=======
## Best Practices per la Documentazione
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
## Best Practices per la Documentazione
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eOwEDI
1. **Organizzazione**:
   - Raggruppare errori per tipo di componente
   - Mantenere una struttura gerarchica
   - Usare markdown per la formattazione
<<<<<<< .merge_file_Sj9eS2
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_eOwEDI
2. **Contenuto**:
   - Includere sempre esempi di codice
   - Spiegare il perché dell'errore
   - Fornire soluzioni alternative

<<<<<<< .merge_file_Sj9eS2
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eOwEDI
3. **Manutenzione**:
   - Aggiornare regolarmente la documentazione
   - Verificare i collegamenti
   - Aggiungere nuovi errori quando scoperti
<<<<<<< .merge_file_Sj9eS2
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
## Collegamenti Bidirezionali
- [Documentazione Componenti Filament](../../../project_docs/filament/components.md)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_eOwEDI

## Collegamenti Bidirezionali

- [Documentazione Componenti Filament](../../../../docs/project/filament/components.md)
- [Documentazione Componenti Filament](../../../../docs/project/filament/components.md)
- [Documentazione Componenti Filament](../../../../docs/project/filament/components.md)
<<<<<<< .merge_file_Sj9eS2
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
=======
## Collegamenti Bidirezionali
- [Documentazione Componenti Filament](../../../project_docs/filament/components.md)
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_eOwEDI
- [Best Practices UI](../../best-practices.md)
- [Errori Comuni UI](../../common-errors.md)
- [Implementazione Corretta](../../examples/correct-implementation.md)
- [Convenzioni di Naming dei Campi](./convenzioni-naming-campi.md)
- [Gestione degli Step nei Wizard](./clean-code/wizard-steps.md)
- [Gestione delle Traduzioni](./translations/lang-service-provider.md)
- [Componente FileUpload](./filament-components/file-upload.md)

<<<<<<< .merge_file_Sj9eS2
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> .merge_file_eOwEDI
## Processo di Documentazione

<<<<<<< .merge_file_Sj9eS2
## Processo di Documentazione

=======
## Processo di Documentazione
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
## Processo di Documentazione
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eOwEDI
1. **Identificazione**:
   - Riconoscere l'errore come problema UI
   - Categorizzare l'errore
   - Determinare la posizione corretta della documentazione
<<<<<<< .merge_file_Sj9eS2
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_eOwEDI
2. **Documentazione**:
   - Creare/aggiornare il file nella cartella corretta
   - Includere esempi e spiegazioni
   - Aggiungere collegamenti bidirezionali
<<<<<<< .merge_file_Sj9eS2
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_eOwEDI

3. **Verifica**:
   - Controllare la struttura della documentazione
   - Verificare i collegamenti
   - Assicurarsi che sia facilmente trovabile

## Note Importanti

1. La documentazione degli errori UI deve essere sempre in `Modules/UI/project_docs/`
2. Mantenere collegamenti bidirezionali aggiornati
3. Seguire le convenzioni di naming del progetto
<<<<<<< .merge_file_Sj9eS2
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
3. **Verifica**:
   - Controllare la struttura della documentazione
   - Assicurarsi che sia facilmente trovabile
## Note Importanti
2. Mantenere collegamenti bidirezionali aggiornati
3. Seguire le convenzioni di naming del progetto
<<<<<<< HEAD
4. Aggiornare la documentazione quando vengono scoperti nuovi errori 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eOwEDI
4. Aggiornare la documentazione quando vengono scoperti nuovi errori
1. La documentazione degli errori UI deve essere sempre in `Modules/UI/project_docs/`
2. Mantenere collegamenti bidirezionali aggiornati
3. Seguire le convenzioni di naming del progetto
4. Aggiornare la documentazione quando vengono scoperti nuovi errori
<<<<<<< .merge_file_Sj9eS2
<<<<<<< HEAD
<<<<<<< .merge_file_E8DM1Y
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
1. La documentazione degli errori UI deve essere sempre in `Modules/UI/project_docs/`
2. Mantenere collegamenti bidirezionali aggiornati
3. Seguire le convenzioni di naming del progetto
4. Aggiornare la documentazione quando vengono scoperti nuovi errori 
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
>>>>>>> .merge_file_4QPpIf
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_eOwEDI
