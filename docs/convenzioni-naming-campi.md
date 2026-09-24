# Convenzioni di Naming dei Campi

## Collegamenti Bidirezionali
- [Best Practices UI](../best-practices.md)
- [Errori Comuni UI](../filament-components-errors.md)
- [Implementazione Corretta](../examples/correct-implementation.md)

## Campi Nome e Cognome

### ❌ NON FARE
```php
TextInput::make('name')  // ❌ Ambiguo: potrebbe essere solo nome o nome completo
TextInput::make('surname')
```

### ✅ FARE - Caso 1: Campi Separati
```php
TextInput::make('first_name')  // ✅ Chiaro: solo nome
TextInput::make('last_name')   // ✅ Chiaro: solo cognome
```

### ✅ FARE - Caso 2: Campo Unico
```php
TextInput::make('full_name')   // ✅ Chiaro: nome completo (nome + cognome)
```

## Motivazioni

1. **Standardizzazione**:
   - `first_name` e `last_name` sono standard internazionali per campi separati
   - `full_name` è lo standard per il nome completo in un unico campo
   - Facilita l'integrazione con API esterne
   - Migliora la compatibilità con sistemi di terze parti

2. **Chiarezza Semantica**:
   - `first_name`: indica chiaramente il nome di battesimo
   - `last_name`: indica chiaramente il cognome
   - `full_name`: indica chiaramente che contiene nome e cognome insieme
   - Evita ambiguità in contesti multilingua

3. **Consistenza del Database**:
   - Facilita le query SQL
   - Migliora la leggibilità del database
   - Standardizza le relazioni tra tabelle

4. **Validazione e Formattazione**:
   - Permette validazioni specifiche per tipo di nome
   - Facilita la formattazione corretta
   - Migliora la gestione dei casi speciali

## Best Practices

1. **Naming**:
   - Usare `first_name` per il nome quando separato
   - Usare `last_name` per il cognome quando separato
   - Usare `full_name` per nome e cognome insieme
   - Evitare variazioni come `name`, `surname`, `given_name`

2. **Scelta del Tipo di Campo**:
   - Campi separati (`first_name`/`last_name`): quando serve manipolare nome e cognome separatamente
   - Campo unico (`full_name`): quando il nome completo è sufficiente e non serve separarlo

3. **Validazione**:
   - Implementare regole specifiche per ogni tipo di campo
   - Considerare le regole di formattazione per paese
   - Adattare le validazioni al contesto d'uso

## Esempi di Implementazione

### Campi Separati
```php
TextInput::make('first_name')
    ->label('Nome')
    ->required()
    ->maxLength(255)
    ->rules(['alpha', 'min:2'])

TextInput::make('last_name')
    ->label('Cognome')
    ->required()
    ->maxLength(255)
    ->rules(['alpha', 'min:2'])
```

### Campo Unico
```php
TextInput::make('full_name')
    ->label('Nome e Cognome')
    ->required()
    ->maxLength(255)
    ->rules(['string', 'min:5'])
```

## Note Importanti

1. Questa convenzione è obbligatoria per tutto il progetto
2. Applicare a tutti i moduli e componenti
3. Mantenere coerenza in database, API e UI
4. Considerare le implicazioni per l'internazionalizzazione

## Collegamenti Correlati

- [Documentazione Filament Forms](https://filamentphp.com/docs/3.x/forms/fields/text-input)
<<<<<<< .merge_file_YdvGa7
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AZTY9m
=======
<<<<<<< .merge_file_bxPv9K
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_2buKTU
- [Best Practices Database](../../../docs/database/best-practices.md)
- [Convenzioni API](../../../docs/api/convenzioni.md)
## Collegamenti tra versioni di convenzioni-naming-campi.md
* [convenzioni-naming-campi.md](../../../../docs/convenzioni-naming-campi.md)
# Convenzioni di Naming dei Campi
## Collegamenti tra versioni di convenzioni-naming-campi.md

## Collegamenti tra versioni di convenzioni-naming-campi.md
## Collegamenti Bidirezionali
## Campi Nome e Cognome
<<<<<<< .merge_file_YdvGa7
=======
=======
>>>>>>> .merge_file_Yhade7
>>>>>>> .merge_file_owPXc9
- [Best Practices Database](../../../../docs/database/best-practices.md)
- [Convenzioni API](../../../../docs/api/convenzioni.md)
## Collegamenti tra versioni di convenzioni-naming-campi.md
* [convenzioni-naming-campi.md](../../../../../docs/convenzioni-naming-campi.md)
# Convenzioni di Naming dei Campi

## Collegamenti Bidirezionali
- [Best Practices UI](../best-practices.md)
- [Errori Comuni UI](../filament-components-errors.md)
- [Implementazione Corretta](../examples/correct-implementation.md)

## Campi Nome e Cognome

<<<<<<< .merge_file_AZTY9m
=======
=======
<<<<<<< .merge_file_bxPv9K
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_owPXc9
- [Best Practices Database](../../../docs/database/best-practices.md)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Convenzioni API](../../../docs/api/convenzioni.md)
## Collegamenti tra versioni di convenzioni-naming-campi.md
* [convenzioni-naming-campi.md](../../../../docs/convenzioni-naming-campi.md)
# Convenzioni di Naming dei Campi
<<<<<<< HEAD
## Collegamenti tra versioni di convenzioni-naming-campi.md
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
- [Convenzioni API](../../../docs/api/convenzioni.md) 
||||||| parent of 9a84589 (.):docs/convenzioni-naming-campi-1.md
- [Best Practices Database](../../../docs/database/best-practices.md)
- [Convenzioni API](../../../docs/api/convenzioni.md)
## Collegamenti tra versioni di convenzioni-naming-campi.md
* [convenzioni-naming-campi.md](../../../../docs/convenzioni-naming-campi.md)

||||||| parent of 9a84589 (.):docs/convenzioni-naming-campi-1.md
<<<<<<< HEAD
* [convenzioni-naming-campi.md](../../../../docs/convenzioni-naming-campi.md)
=======
<<<<<<< HEAD
* [convenzioni-naming-campi.md](../../../../docs/convenzioni-naming-campi.md)
=======
- [Convenzioni API](../../../docs/api/convenzioni.md)
## Collegamenti tra versioni di convenzioni-naming-campi.md
* [convenzioni-naming-campi.md](../../../../docs/convenzioni-naming-campi.md)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev

## Collegamenti tra versioni di convenzioni-naming-campi.md
## Collegamenti Bidirezionali
## Campi Nome e Cognome
<<<<<<< .merge_file_AZTY9m
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Yhade7
>>>>>>> .merge_file_owPXc9
>>>>>>> laraxot/dev
>>>>>>> .merge_file_2buKTU
### ❌ NON FARE
```php
TextInput::make('name')  // ❌ Ambiguo: potrebbe essere solo nome o nome completo
TextInput::make('surname')
```
<<<<<<< .merge_file_YdvGa7
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AZTY9m
=======
<<<<<<< .merge_file_bxPv9K
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### ✅ FARE - Caso 1: Campi Separati
TextInput::make('first_name')  // ✅ Chiaro: solo nome
TextInput::make('last_name')   // ✅ Chiaro: solo cognome
### ✅ FARE - Caso 2: Campo Unico
TextInput::make('full_name')   // ✅ Chiaro: nome completo (nome + cognome)
## Motivazioni
=======
>>>>>>> .merge_file_Yhade7
>>>>>>> .merge_file_owPXc9

### ✅ FARE - Caso 1: Campi Separati
```php
TextInput::make('first_name')  // ✅ Chiaro: solo nome
TextInput::make('last_name')   // ✅ Chiaro: solo cognome
```

### ✅ FARE - Caso 2: Campo Unico
```php
TextInput::make('full_name')   // ✅ Chiaro: nome completo (nome + cognome)
```

## Motivazioni

<<<<<<< .merge_file_AZTY9m
=======
=======
<<<<<<< .merge_file_bxPv9K
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_owPXc9
>>>>>>> .merge_file_2buKTU
### ✅ FARE - Caso 1: Campi Separati
TextInput::make('first_name')  // ✅ Chiaro: solo nome
TextInput::make('last_name')   // ✅ Chiaro: solo cognome
### ✅ FARE - Caso 2: Campo Unico
TextInput::make('full_name')   // ✅ Chiaro: nome completo (nome + cognome)
## Motivazioni
<<<<<<< .merge_file_YdvGa7
=======
<<<<<<< .merge_file_AZTY9m
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Yhade7
>>>>>>> .merge_file_owPXc9
>>>>>>> laraxot/dev
>>>>>>> .merge_file_2buKTU
1. **Standardizzazione**:
   - `first_name` e `last_name` sono standard internazionali per campi separati
   - `full_name` è lo standard per il nome completo in un unico campo
   - Facilita l'integrazione con API esterne
   - Migliora la compatibilità con sistemi di terze parti
<<<<<<< .merge_file_YdvGa7
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AZTY9m

=======
=======
<<<<<<< .merge_file_bxPv9K

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_Yhade7
>>>>>>> .merge_file_owPXc9
>>>>>>> laraxot/dev
>>>>>>> .merge_file_2buKTU
2. **Chiarezza Semantica**:
   - `first_name`: indica chiaramente il nome di battesimo
   - `last_name`: indica chiaramente il cognome
   - `full_name`: indica chiaramente che contiene nome e cognome insieme
   - Evita ambiguità in contesti multilingua
<<<<<<< .merge_file_YdvGa7
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AZTY9m

=======
=======
<<<<<<< .merge_file_bxPv9K

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_Yhade7
>>>>>>> .merge_file_owPXc9
>>>>>>> laraxot/dev
>>>>>>> .merge_file_2buKTU
3. **Consistenza del Database**:
   - Facilita le query SQL
   - Migliora la leggibilità del database
   - Standardizza le relazioni tra tabelle
<<<<<<< .merge_file_YdvGa7
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AZTY9m

=======
=======
<<<<<<< .merge_file_bxPv9K

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_Yhade7
>>>>>>> .merge_file_owPXc9
>>>>>>> laraxot/dev
>>>>>>> .merge_file_2buKTU
4. **Validazione e Formattazione**:
   - Permette validazioni specifiche per tipo di nome
   - Facilita la formattazione corretta
   - Migliora la gestione dei casi speciali
<<<<<<< .merge_file_YdvGa7
## Best Practices
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AZTY9m
=======
<<<<<<< .merge_file_bxPv9K
>>>>>>> .merge_file_owPXc9

## Best Practices

=======
<<<<<<< .merge_file_AZTY9m
## Best Practices
=======
<<<<<<< HEAD
## Best Practices
=======
<<<<<<< HEAD

## Best Practices

=======
## Best Practices
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
## Best Practices
=======

## Best Practices

>>>>>>> .merge_file_Yhade7
>>>>>>> .merge_file_owPXc9
>>>>>>> laraxot/dev
>>>>>>> .merge_file_2buKTU
1. **Naming**:
   - Usare `first_name` per il nome quando separato
   - Usare `last_name` per il cognome quando separato
   - Usare `full_name` per nome e cognome insieme
   - Evitare variazioni come `name`, `surname`, `given_name`
<<<<<<< .merge_file_YdvGa7
2. **Scelta del Tipo di Campo**:
   - Campi separati (`first_name`/`last_name`): quando serve manipolare nome e cognome separatamente
   - Campo unico (`full_name`): quando il nome completo è sufficiente e non serve separarlo
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AZTY9m
=======
<<<<<<< .merge_file_bxPv9K
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_Yhade7
2. **Scelta del Tipo di Campo**:
   - Campi separati (`first_name`/`last_name`): quando serve manipolare nome e cognome separatamente
   - Campo unico (`full_name`): quando il nome completo è sufficiente e non serve separarlo
=======
<<<<<<< .merge_file_bxPv9K
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Yhade7
>>>>>>> .merge_file_owPXc9

2. **Scelta del Tipo di Campo**:
   - Campi separati (`first_name`/`last_name`): quando serve manipolare nome e cognome separatamente
   - Campo unico (`full_name`): quando il nome completo è sufficiente e non serve separarlo

<<<<<<< .merge_file_AZTY9m
=======
<<<<<<< .merge_file_bxPv9K
<<<<<<< HEAD
=======
>>>>>>> .merge_file_owPXc9
=======
2. **Scelta del Tipo di Campo**:
   - Campi separati (`first_name`/`last_name`): quando serve manipolare nome e cognome separatamente
   - Campo unico (`full_name`): quando il nome completo è sufficiente e non serve separarlo
>>>>>>> laraxot/dev
<<<<<<< .merge_file_AZTY9m
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Yhade7
>>>>>>> laraxot/dev
>>>>>>> .merge_file_owPXc9
>>>>>>> .merge_file_2buKTU
3. **Validazione**:
   - Implementare regole specifiche per ogni tipo di campo
   - Considerare le regole di formattazione per paese
   - Adattare le validazioni al contesto d'uso
<<<<<<< .merge_file_YdvGa7
## Esempi di Implementazione
### Campi Separati
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AZTY9m
=======
<<<<<<< .merge_file_bxPv9K
=======
<<<<<<< HEAD
## Esempi di Implementazione
### Campi Separati
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Esempi di Implementazione
### Campi Separati
=======
>>>>>>> .merge_file_Yhade7
>>>>>>> .merge_file_owPXc9

## Esempi di Implementazione

### Campi Separati
```php
<<<<<<< .merge_file_AZTY9m
=======
<<<<<<< .merge_file_bxPv9K
<<<<<<< HEAD
=======
>>>>>>> .merge_file_owPXc9
=======
## Esempi di Implementazione
### Campi Separati
>>>>>>> laraxot/dev
<<<<<<< .merge_file_AZTY9m
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Yhade7
>>>>>>> laraxot/dev
>>>>>>> .merge_file_owPXc9
>>>>>>> .merge_file_2buKTU
TextInput::make('first_name')
    ->label('Nome')
    ->required()
    ->maxLength(255)
    ->rules(['alpha', 'min:2'])
<<<<<<< .merge_file_YdvGa7
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AZTY9m
=======
<<<<<<< .merge_file_bxPv9K
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
TextInput::make('last_name')
    ->label('Cognome')
### Campo Unico
TextInput::make('full_name')
    ->label('Nome e Cognome')
    ->rules(['string', 'min:5'])
## Note Importanti
=======
>>>>>>> .merge_file_Yhade7
>>>>>>> .merge_file_owPXc9

TextInput::make('last_name')
    ->label('Cognome')
    ->required()
    ->maxLength(255)
    ->rules(['alpha', 'min:2'])
```

### Campo Unico
```php
TextInput::make('full_name')
    ->label('Nome e Cognome')
    ->required()
    ->maxLength(255)
    ->rules(['string', 'min:5'])
```

## Note Importanti

<<<<<<< .merge_file_AZTY9m
=======
=======
<<<<<<< .merge_file_bxPv9K
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_owPXc9
>>>>>>> .merge_file_2buKTU
TextInput::make('last_name')
    ->label('Cognome')
### Campo Unico
TextInput::make('full_name')
    ->label('Nome e Cognome')
    ->rules(['string', 'min:5'])
## Note Importanti
<<<<<<< .merge_file_YdvGa7
=======
<<<<<<< .merge_file_AZTY9m
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Yhade7
>>>>>>> .merge_file_owPXc9
>>>>>>> laraxot/dev
>>>>>>> .merge_file_2buKTU
1. Questa convenzione è obbligatoria per tutto il progetto
2. Applicare a tutti i moduli e componenti
3. Mantenere coerenza in database, API e UI
4. Considerare le implicazioni per l'internazionalizzazione
<<<<<<< .merge_file_YdvGa7
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AZTY9m
=======
<<<<<<< .merge_file_bxPv9K
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Collegamenti Correlati
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/3.x/forms/fields/text-input)
- [Best Practices Database](../../../project_docs/database/best-practices.md)
- [Convenzioni API](../../../project_docs/api/convenzioni.md)
* [convenzioni-naming-campi.md](../../../../project_docs/convenzioni-naming-campi.md)
=======
>>>>>>> .merge_file_Yhade7
>>>>>>> .merge_file_owPXc9

## Collegamenti Correlati

- [Documentazione Filament Forms](https://filamentphp.com/project_docs/3.x/forms/fields/text-input)
- [Best Practices Database](../../../../docs/project/database/best-practices.md)
- [Convenzioni API](../../../../docs/project/api/convenzioni.md)
## Collegamenti tra versioni di convenzioni-naming-campi.md
* [convenzioni-naming-campi.md](../../../../../docs/project/convenzioni-naming-campi.md)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/3.x/forms/fields/text-input)
- [Best Practices Database](../../../../docs/project/database/best-practices.md)
- [Convenzioni API](../../../../docs/project/api/convenzioni.md)
<<<<<<< .merge_file_AZTY9m
=======
=======
<<<<<<< .merge_file_bxPv9K
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_owPXc9
>>>>>>> .merge_file_2buKTU
## Collegamenti Correlati
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/3.x/forms/fields/text-input)
- [Best Practices Database](../../../project_docs/database/best-practices.md)
- [Convenzioni API](../../../project_docs/api/convenzioni.md)
* [convenzioni-naming-campi.md](../../../../project_docs/convenzioni-naming-campi.md)
<<<<<<< .merge_file_YdvGa7
=======
<<<<<<< HEAD
=======
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/3.x/forms/fields/text-input)
- [Best Practices Database](../../../project_docs/database/best-practices.md)
- [Convenzioni API](../../../project_docs/api/convenzioni.md)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
* [convenzioni-naming-campi.md](../../../../docs/convenzioni-naming-campi.md)
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_AZTY9m
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Yhade7
>>>>>>> .merge_file_owPXc9
>>>>>>> laraxot/dev
>>>>>>> .merge_file_2buKTU
