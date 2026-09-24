# FileUpload Component in Filament

## Metodi Disponibili

### Configurazione Base
```php
FileUpload::make('document')
    // Non usare ->label() - Le label sono gestite dal LangServiceProvider
    ->disk('public')
    ->directory('documents')
    ->acceptedFileTypes(['application/pdf'])
    ->maxSize(10240)
```

### UI/UX
```php
FileUpload::make('document')
    ->downloadable()
    ->previewable()
    ->imagePreviewHeight('250')
    ->panelLayout('integrated')
    ->panelAspectRatio('16:9')
    ->loadingIndicatorPosition('right')
    ->removeUploadedFileButtonPosition('right')
    ->uploadProgressIndicatorPosition('right')
```

## ⚠️ Errori Comuni

### 1. Uso di prefixIcon
❌ **NON FARE**:
```php
FileUpload::make('document')
    ->prefixIcon('heroicon-o-document') // Questo metodo non esiste!
```

✅ **FARE**:
```php
FileUpload::make('document')
    ->buttonIcon('heroicon-o-document') // Usa buttonIcon per l'icona del pulsante
```

### 2. Uso di label()
❌ **NON FARE**:
```php
FileUpload::make('document')
    ->label('Documento') // Non usare label() direttamente
```

✅ **FARE**:
```php
// Usa il file di traduzione invece
// lang/it/resource.php
return [
    'fields' => [
        'document' => [
            'label' => 'Documento',
            'placeholder' => 'Carica un documento',
            'help' => 'Formato PDF, max 10MB',
        ],
    ],
];
```

## Best Practices

1. **Sicurezza**
   - Limita sempre i tipi di file accettati
   - Imposta una dimensione massima appropriata
   - Usa directory specifiche per tipo di file
   - Implementa validazione server-side

2. **Performance**
   - Ottimizza le dimensioni dei file
   - Usa disk appropriati per lo storage
   - Implementa gestione errori
   - Fornisci feedback di progresso

3. **UX**
   - Usa icone appropriate
   - Fornisci preview quando possibile
   - Mostra messaggi di errore chiari
   - Implementa drag & drop

4. **Manutenibilità**
   - Usa costanti per configurazioni comuni
   - Centralizza la logica di upload
   - Documenta requisiti specifici
   - Segui le convenzioni di naming

## Collegamenti
<<<<<<< .merge_file_kX49Lv
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o6y9jC
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
- [Translation System](../../Lang/docs/translation-system.md)
- [Form Components](../../Patient/docs/filament-form-components.md)
- [Best Practices](../../Xot/docs/filament-best-practices.md)
=======
>>>>>>> .merge_file_71R8j0
- [Translation System](../../lang/docs/translation-system.md)
- [Form Components](../../patient/docs/filament-form-components.md)
- [Best Practices](../../xot/docs/filament-best-practices.md)
>>>>>>> laraxot/dev
=======
- [Translation System](../../lang/docs/translation-system.md)
- [Form Components](../../patient/docs/filament-form-components.md)
- [Best Practices](../../xot/docs/filament-best-practices.md)
>>>>>>> 804451c (Lint)
=======
- [Translation System](../../lang/docs/translation-system.md)
- [Form Components](../../patient/docs/filament-form-components.md)
- [Best Practices](../../xot/docs/filament-best-practices.md)
>>>>>>> .merge_file_SbGInX

## Vedi Anche
- [Filament File Upload](https://filamentphp.com/docs/forms/fields/file-upload)
- [Laravel File Storage](https://laravel.com/docs/filesystem)
# FileUpload Component in Filament
<<<<<<< .merge_file_kX49Lv
<<<<<<< HEAD
<<<<<<< HEAD
## Metodi Disponibili
=======

## Metodi Disponibili

<<<<<<< .merge_file_o6y9jC
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======

## Metodi Disponibili

=======
>>>>>>> 804451c (Lint)
- [Translation System](../../Lang/docs/translation-system.md)
- [Form Components](../../Patient/docs/filament-form-components.md)
- [Best Practices](../../Xot/docs/filament-best-practices.md)

## Vedi Anche
- [Filament File Upload](https://filamentphp.com/docs/forms/fields/file-upload)
<<<<<<< HEAD
- [Laravel File Storage](https://laravel.com/docs/filesystem) 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Laravel File Storage](https://laravel.com/docs/filesystem) 
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [Laravel File Storage](https://laravel.com/docs/filesystem) 
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- [Laravel File Storage](https://laravel.com/docs/filesystem)
# FileUpload Component in Filament
## Metodi Disponibili
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_71R8j0
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

## Metodi Disponibili

>>>>>>> .merge_file_SbGInX
### Configurazione Base
```php
FileUpload::make('document')
    // Non usare ->label() - Le label sono gestite dal LangServiceProvider
    ->disk('public')
    ->directory('documents')
    ->acceptedFileTypes(['application/pdf'])
    ->maxSize(10240)
```
<<<<<<< .merge_file_kX49Lv
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o6y9jC
=======
<<<<<<< HEAD
### UI/UX
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### UI/UX
=======
>>>>>>> .merge_file_71R8j0
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_SbGInX

### UI/UX
```php
FileUpload::make('document')
<<<<<<< .merge_file_kX49Lv
<<<<<<< HEAD
<<<<<<< .merge_file_o6y9jC
<<<<<<< HEAD
=======
=======
### UI/UX
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_71R8j0
>>>>>>> laraxot/dev
=======
=======
### UI/UX
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_SbGInX
    ->downloadable()
    ->previewable()
    ->imagePreviewHeight('250')
    ->panelLayout('integrated')
    ->panelAspectRatio('16:9')
    ->loadingIndicatorPosition('right')
    ->removeUploadedFileButtonPosition('right')
    ->uploadProgressIndicatorPosition('right')
<<<<<<< .merge_file_kX49Lv
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o6y9jC
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## ⚠️ Errori Comuni
### 1. Uso di prefixIcon
❌ **NON FARE**:
    ->prefixIcon('heroicon-o-document') // Questo metodo non esiste!
✅ **FARE**:
    ->buttonIcon('heroicon-o-document') // Usa buttonIcon per l'icona del pulsante
### 2. Uso di label()
    ->label('Documento') // Non usare label() direttamente
=======
>>>>>>> .merge_file_71R8j0
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_SbGInX
```

## ⚠️ Errori Comuni

### 1. Uso di prefixIcon
❌ **NON FARE**:
```php
FileUpload::make('document')
    ->prefixIcon('heroicon-o-document') // Questo metodo non esiste!
```

✅ **FARE**:
```php
FileUpload::make('document')
    ->buttonIcon('heroicon-o-document') // Usa buttonIcon per l'icona del pulsante
```

### 2. Uso di label()
❌ **NON FARE**:
```php
FileUpload::make('document')
    ->label('Documento') // Non usare label() direttamente
```

✅ **FARE**:
```php
<<<<<<< .merge_file_kX49Lv
<<<<<<< HEAD
<<<<<<< .merge_file_o6y9jC
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
## ⚠️ Errori Comuni
### 1. Uso di prefixIcon
❌ **NON FARE**:
    ->prefixIcon('heroicon-o-document') // Questo metodo non esiste!
✅ **FARE**:
    ->buttonIcon('heroicon-o-document') // Usa buttonIcon per l'icona del pulsante
### 2. Uso di label()
    ->label('Documento') // Non usare label() direttamente
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_71R8j0
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_SbGInX
// Usa il file di traduzione invece
// lang/it/resource.php
return [
    'fields' => [
        'document' => [
            'label' => 'Documento',
            'placeholder' => 'Carica un documento',
            'help' => 'Formato PDF, max 10MB',
        ],
    ],
];
<<<<<<< .merge_file_kX49Lv
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o6y9jC
=======
<<<<<<< HEAD
## Best Practices
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Best Practices
=======
>>>>>>> .merge_file_71R8j0
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_SbGInX
```

## Best Practices

<<<<<<< .merge_file_kX49Lv
<<<<<<< HEAD
<<<<<<< .merge_file_o6y9jC
<<<<<<< HEAD
=======
=======
## Best Practices
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_71R8j0
>>>>>>> laraxot/dev
=======
=======
## Best Practices
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_SbGInX
1. **Sicurezza**
   - Limita sempre i tipi di file accettati
   - Imposta una dimensione massima appropriata
   - Usa directory specifiche per tipo di file
   - Implementa validazione server-side
<<<<<<< .merge_file_kX49Lv
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o6y9jC

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_71R8j0
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_SbGInX
2. **Performance**
   - Ottimizza le dimensioni dei file
   - Usa disk appropriati per lo storage
   - Implementa gestione errori
   - Fornisci feedback di progresso
<<<<<<< .merge_file_kX49Lv
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o6y9jC

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_71R8j0
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_SbGInX
3. **UX**
   - Usa icone appropriate
   - Fornisci preview quando possibile
   - Mostra messaggi di errore chiari
   - Implementa drag & drop
<<<<<<< .merge_file_kX49Lv
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o6y9jC

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_71R8j0
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_SbGInX
4. **Manutenibilità**
   - Usa costanti per configurazioni comuni
   - Centralizza la logica di upload
   - Documenta requisiti specifici
   - Segui le convenzioni di naming
<<<<<<< .merge_file_kX49Lv
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_o6y9jC
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Collegamenti
- [Translation System](../../Lang/project_docs/translation-system.md)
- [Form Components](../../Patient/project_docs/filament-form-components.md)
- [Best Practices](../../Xot/project_docs/filament-best-practices.md)
=======
>>>>>>> .merge_file_71R8j0
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_SbGInX

## Collegamenti
- [Translation System](../../lang/project_docs/translation-system.md)
- [Form Components](../../patient/project_docs/filament-form-components.md)
- [Best Practices](../../xot/project_docs/filament-best-practices.md)
<<<<<<< .merge_file_kX49Lv
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)

## Vedi Anche
- [Filament File Upload](https://filamentphp.com/project_docs/forms/fields/file-upload)
- [Laravel File Storage](https://laravel.com/project_docs/filesystem)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
## Collegamenti
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- [Laravel File Storage](https://laravel.com/docs/filesystem) 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
- [Translation System](../../Lang/project_docs/translation-system.md)
- [Form Components](../../Patient/project_docs/filament-form-components.md)
- [Best Practices](../../Xot/project_docs/filament-best-practices.md)
=======
>>>>>>> .merge_file_SbGInX

## Vedi Anche
- [Filament File Upload](https://filamentphp.com/project_docs/forms/fields/file-upload)
- [Laravel File Storage](https://laravel.com/project_docs/filesystem)
<<<<<<< .merge_file_kX49Lv
>>>>>>> laraxot/dev
=======
- [Laravel File Storage](https://laravel.com/project_docs/filesystem) 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_SbGInX
