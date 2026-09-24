# Componenti FileUpload in Filament

## Errore Comune: prefixIcon
Il metodo `prefixIcon()` non esiste nel componente FileUpload di Filament. Questo è un errore comune quando si confondono i componenti TextInput (che hanno il metodo prefixIcon) con i componenti FileUpload.

### ❌ Errato
```php
Forms\Components\FileUpload::make('certifications')
    ->prefixIcon('heroicon-o-document-text') // Questo metodo non esiste!
    ->label('Certificazioni');
```

### ✅ Corretto
```php
Forms\Components\FileUpload::make('certifications')
    ->label('Certificazioni')
    ->icon('heroicon-o-document-text') // Usare icon() invece di prefixIcon()
    ->buttonLabel('Carica certificazioni')
    ->disk('public')
    ->directory('certifications')
    ->acceptedFileTypes(['application/pdf'])
    ->maxSize(10240);
```

## Metodi Disponibili per FileUpload

### Metodi Base
- `make(string $name)`: Crea una nuova istanza del componente
- `label(string $label)`: Imposta la label del componente
- `icon(string $icon)`: Imposta l'icona del pulsante di upload
- `buttonLabel(string $label)`: Imposta il testo del pulsante di upload
- `disk(string $disk)`: Imposta il disco di storage
- `directory(string $directory)`: Imposta la directory di destinazione
- `acceptedFileTypes(array $types)`: Imposta i tipi di file accettati
- `maxSize(int $size)`: Imposta la dimensione massima del file in KB

### Best Practices

1. **UI/UX**
   - Usare icone appropriate per il tipo di file
   - Fornire feedback visivo durante l'upload
   - Mostrare preview dei file quando possibile
   - Implementare validazione client-side

2. **Sicurezza**
   - Limitare i tipi di file accettati
   - Impostare una dimensione massima ragionevole
   - Validare i file lato server
   - Usare nomi file sicuri

3. **Performance**
   - Ottimizzare la dimensione dei file
   - Implementare upload asincroni
   - Gestire correttamente gli errori
   - Fornire feedback di progresso

## Collegamenti
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ZEizNK
=======
<<<<<<< .merge_file_YyxhJ8
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
- [README](../../Patient/docs/README.md)
- [Filament Resources](../../Patient/docs/filament-resources.md)
- [Form Components](../../Patient/docs/filament-form-components.md)

## Vedi Anche
- [Filament FileUpload Documentation](https://filamentphp.com/docs/forms/fields#file-upload)
- [Best Practices](../../Xot/docs/filament-best-practices.md)
# Componenti FileUpload in Filament
## Errore Comune: prefixIcon
Il metodo `prefixIcon()` non esiste nel componente FileUpload di Filament. Questo è un errore comune quando si confondono i componenti TextInput (che hanno il metodo prefixIcon) con i componenti FileUpload.
=======
>>>>>>> .merge_file_5VBj22
>>>>>>> .merge_file_0b9d3h
- [README](../../patient/docs/readme.md)
- [Filament Resources](../../patient/docs/filament-resources.md)
- [Form Components](../../patient/docs/filament-form-components.md)

## Vedi Anche
- [Filament FileUpload Documentation](https://filamentphp.com/docs/forms/fields#file-upload)
- [Best Practices](../../xot/docs/filament-best-practices.md)
# Componenti FileUpload in Filament

## Errore Comune: prefixIcon
Il metodo `prefixIcon()` non esiste nel componente FileUpload di Filament. Questo è un errore comune quando si confondono i componenti TextInput (che hanno il metodo prefixIcon) con i componenti FileUpload.

<<<<<<< .merge_file_ZEizNK
=======
=======
<<<<<<< .merge_file_YyxhJ8
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0b9d3h
>>>>>>> laraxot/dev
- [README](../../Patient/docs/README.md)
- [Filament Resources](../../Patient/docs/filament-resources.md)
- [Form Components](../../Patient/docs/filament-form-components.md)

## Vedi Anche
- [Filament FileUpload Documentation](https://filamentphp.com/docs/forms/fields#file-upload)
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
- [Best Practices](../../Xot/docs/filament-best-practices.md) 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Best Practices](../../Xot/docs/filament-best-practices.md) 
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [Best Practices](../../Xot/docs/filament-best-practices.md) 
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
- [Best Practices](../../Xot/docs/filament-best-practices.md)
# Componenti FileUpload in Filament
## Errore Comune: prefixIcon
Il metodo `prefixIcon()` non esiste nel componente FileUpload di Filament. Questo è un errore comune quando si confondono i componenti TextInput (che hanno il metodo prefixIcon) con i componenti FileUpload.
<<<<<<< HEAD
=======
<<<<<<< .merge_file_ZEizNK
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_5VBj22
>>>>>>> .merge_file_0b9d3h
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
### ❌ Errato
```php
Forms\Components\FileUpload::make('certifications')
    ->prefixIcon('heroicon-o-document-text') // Questo metodo non esiste!
    ->label('Certificazioni');
```
<<<<<<< HEAD
### ✅ Corretto
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ZEizNK
=======
<<<<<<< .merge_file_YyxhJ8
=======
<<<<<<< HEAD
### ✅ Corretto
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### ✅ Corretto
=======
>>>>>>> .merge_file_5VBj22
>>>>>>> .merge_file_0b9d3h

### ✅ Corretto
```php
Forms\Components\FileUpload::make('certifications')
<<<<<<< .merge_file_ZEizNK
=======
### ✅ Corretto
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_YyxhJ8
<<<<<<< HEAD
=======
=======
### ✅ Corretto
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_5VBj22
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0b9d3h
>>>>>>> laraxot/dev
    ->label('Certificazioni')
    ->icon('heroicon-o-document-text') // Usare icon() invece di prefixIcon()
    ->buttonLabel('Carica certificazioni')
    ->disk('public')
    ->directory('certifications')
    ->acceptedFileTypes(['application/pdf'])
    ->maxSize(10240);
<<<<<<< HEAD
## Metodi Disponibili per FileUpload
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ZEizNK
=======
<<<<<<< .merge_file_YyxhJ8
=======
<<<<<<< HEAD
## Metodi Disponibili per FileUpload
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Metodi Disponibili per FileUpload
=======
>>>>>>> .merge_file_5VBj22
>>>>>>> .merge_file_0b9d3h
```

## Metodi Disponibili per FileUpload

<<<<<<< .merge_file_ZEizNK
=======
## Metodi Disponibili per FileUpload
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_YyxhJ8
<<<<<<< HEAD
=======
=======
## Metodi Disponibili per FileUpload
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_5VBj22
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0b9d3h
>>>>>>> laraxot/dev
### Metodi Base
- `make(string $name)`: Crea una nuova istanza del componente
- `label(string $label)`: Imposta la label del componente
- `icon(string $icon)`: Imposta l'icona del pulsante di upload
- `buttonLabel(string $label)`: Imposta il testo del pulsante di upload
- `disk(string $disk)`: Imposta il disco di storage
- `directory(string $directory)`: Imposta la directory di destinazione
- `acceptedFileTypes(array $types)`: Imposta i tipi di file accettati
- `maxSize(int $size)`: Imposta la dimensione massima del file in KB
<<<<<<< HEAD
### Best Practices
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ZEizNK
=======
<<<<<<< .merge_file_YyxhJ8

### Best Practices
>>>>>>> .merge_file_0b9d3h

=======
<<<<<<< HEAD
### Best Practices
=======
<<<<<<< HEAD

<<<<<<< .merge_file_ZEizNK
=======
### Best Practices
=======
### Best Practices

=======
### Best Practices
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
### Best Practices
=======

### Best Practices

>>>>>>> .merge_file_5VBj22
>>>>>>> .merge_file_0b9d3h
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
1. **UI/UX**
   - Usare icone appropriate per il tipo di file
   - Fornire feedback visivo durante l'upload
   - Mostrare preview dei file quando possibile
   - Implementare validazione client-side
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ZEizNK

=======
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_YyxhJ8

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_5VBj22
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0b9d3h
>>>>>>> laraxot/dev
2. **Sicurezza**
   - Limitare i tipi di file accettati
   - Impostare una dimensione massima ragionevole
   - Validare i file lato server
   - Usare nomi file sicuri
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ZEizNK

=======
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_YyxhJ8

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_5VBj22
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0b9d3h
>>>>>>> laraxot/dev
3. **Performance**
   - Ottimizzare la dimensione dei file
   - Implementare upload asincroni
   - Gestire correttamente gli errori
   - Fornire feedback di progresso
<<<<<<< HEAD
## Collegamenti
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_ZEizNK
=======
<<<<<<< .merge_file_YyxhJ8
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Collegamenti
- [README](../../Patient/project_docs/README.md)
- [Filament Resources](../../Patient/project_docs/filament-resources.md)
- [Form Components](../../Patient/project_docs/filament-form-components.md)

## Vedi Anche
- [Filament FileUpload Documentation](https://filamentphp.com/project_docs/forms/fields#file-upload)
- [Best Practices](../../Xot/project_docs/filament-best-practices.md)
=======
>>>>>>> .merge_file_5VBj22
>>>>>>> .merge_file_0b9d3h

## Collegamenti
- [README](../../patient/project_docs/readme.md)
- [Filament Resources](../../patient/project_docs/filament-resources.md)
- [Form Components](../../patient/project_docs/filament-form-components.md)

## Vedi Anche
- [Filament FileUpload Documentation](https://filamentphp.com/project_docs/forms/fields#file-upload)
- [Best Practices](../../xot/project_docs/filament-best-practices.md)
<<<<<<< .merge_file_ZEizNK
=======
=======
<<<<<<< .merge_file_YyxhJ8
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0b9d3h
## Collegamenti
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- [Best Practices](../../Xot/docs/filament-best-practices.md) 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
- [README](../../Patient/project_docs/README.md)
- [Filament Resources](../../Patient/project_docs/filament-resources.md)
- [Form Components](../../Patient/project_docs/filament-form-components.md)

## Vedi Anche
- [Filament FileUpload Documentation](https://filamentphp.com/project_docs/forms/fields#file-upload)
<<<<<<< HEAD
<<<<<<< HEAD
- [Best Practices](../../Xot/project_docs/filament-best-practices.md)
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
- [Best Practices](../../Xot/project_docs/filament-best-practices.md) 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Best Practices](../../Xot/project_docs/filament-best-practices.md)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
- [Best Practices](../../Xot/project_docs/filament-best-practices.md) 
=======
- [Best Practices](../../Xot/project_docs/filament-best-practices.md)
>>>>>>> laraxot/dev
=======
- [Best Practices](../../Xot/project_docs/filament-best-practices.md) 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< HEAD
=======
<<<<<<< .merge_file_ZEizNK
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_5VBj22
>>>>>>> .merge_file_0b9d3h
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
