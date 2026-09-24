# Linee Guida per l'Implementazione di getInfolistSchema

## Requisiti Fondamentali

La funzione `getInfolistSchema()` deve **sempre** restituire un array con chiavi di tipo stringa. Questo documento fornisce le linee guida per garantire un'implementazione corretta e coerente in tutto il progetto.

## Implementazione Corretta

### Struttura Base

L'unico approccio corretto per implementare `getInfolistSchema()` è utilizzare array associativi con chiavi di tipo stringa:

```php
/**
 * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
 *
 * @return array<string, \Filament\Infolists\Components\Component>
 */
protected function getInfolistSchema(): array
{
    return [
        'id' => TextEntry::make('id'),
        'nome' => TextEntry::make('nome'),
        'email' => TextEntry::make('email'),
        // Altri componenti...
    ];
}
```

### Documentazione PHPDoc Corretta

Per PHPStan livello 9 e superiore, è fondamentale documentare correttamente il tipo di array restituito:

```php
/**
 * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
 *
 * @return array<string, \Filament\Infolists\Components\Component>
 */
protected function getInfolistSchema(): array
```

## Esempi Pratici

### Struttura con Sezioni e Griglie

```php
/**
 * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
 *
 * @return array<string, \Filament\Infolists\Components\Component>
 */
protected function getInfolistSchema(): array
{
    return [
        'informazioni_personali' => Section::make('Informazioni Personali')
            ->schema([
                'grid0'=>Grid::make(['default' => 2])
                    ->schema([
                        'nome'=>TextEntry::make('nome')
                            ,
                        'cognome'=>TextEntry::make('cognome')
                            ,
                        'email'=>TextEntry::make('email')
                            ,
                        'telefono'=>TextEntry::make('telefono')
                            ,
                    ]),
            ]),
<<<<<<< HEAD
<<<<<<< .merge_file_ug7Y8Q

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_93b4qz

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_xS38cj
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
<<<<<<< .merge_file_ug7Y8Q
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_J6rhlR
>>>>>>> .merge_file_xS38cj
>>>>>>> laraxot/dev
        'dettagli_account' => Section::make('Dettagli Account')
            ->schema([
                // Altri componenti...
            ]),
    ];
}
```

### Struttura con Componenti Personalizzati

```php
/**
 * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
 *
 * @return array<string, \Filament\Infolists\Components\Component>
 */
protected function getInfolistSchema(): array
{
    return [
        'info_personali' => Section::make('Informazioni Personali')
            ->schema([
                // Componenti per informazioni personali...
            ]),
        'dettagli_account' => Section::make('Dettagli Account')
            ->schema([
                // Componenti per dettagli account...
            ]),
        'preferenze' => Section::make('Preferenze')
            ->schema([
                // Componenti per preferenze...
            ]),
    ];
}
```

## Vantaggi dell'Uso di Chiavi di Tipo Stringa

1. **Accesso Diretto ai Componenti**: Le chiavi di tipo stringa consentono di accedere direttamente ai componenti dell'array
2. **Maggiore Leggibilità**: Il codice è più chiaro e facile da comprendere
3. **Prevenzione di Errori**: Evita problemi quando si accede ai componenti tramite chiave
4. **Compatibilità con PHPStan**: Aiuta a superare le verifiche di PHPStan di livello 9 e 10

## Casi Speciali

### Combinazione di Components e Layouts

Quando si utilizzano sia componenti di visualizzazione che componenti di layout (Section, Grid, etc.), è importante mantenere sempre chiavi di tipo stringa:

```php
/**
 * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
 *
 * @return array<string, \Filament\Infolists\Components\Component>
 */
protected function getInfolistSchema(): array
{
    return [
        'identificativo' => TextEntry::make('id'),
        'informazioni' => Section::make('Informazioni')
            ->schema([
                // Componenti all'interno della sezione...
            ]),
    ];
}
```

### Array con Sezioni Generate Dinamicamente

Quando si generano sezioni dinamicamente, è importante assegnare chiavi stringa significative:

```php
/**
 * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
 *
 * @return array<string, \Filament\Infolists\Components\Component>
 */
public function getInfolistSchema(): array
{
    $sections = [];

    // Aggiungiamo dinamicamente le sezioni con chiavi stringa
    $sections['informazioni_base'] = Section::make('Informazioni Base')
        ->schema([
            // Componenti...
        ]);

    if ($this->record->hasDocuments()) {
        $sections['documenti'] = Section::make('Documenti')
            ->schema([
                // Componenti per documenti...
            ]);
    }

    return $sections;
}
```

## Migrando da Array Numerici ad Array Associativi

Se hai implementazioni esistenti che utilizzano array numerici, segui questi passaggi per correggerle:

1. Identifica tutti i componenti nell'array
2. Assegna a ciascun componente una chiave stringa significativa
3. Aggiorna il PHPDoc per specificare `@return array<string, \Filament\Infolists\Components\Component>`
4. Testa la vista per assicurarti che funzioni correttamente

### Prima:
```php
return [
    TextEntry::make('id'),
    TextEntry::make('nome'),
];
```

### Dopo:
```php
return [
    'id_entry' => TextEntry::make('id'),
    'nome_entry' => TextEntry::make('nome'),
];
```

## Migliori Pratiche

1. **Usa SEMPRE Chiavi di Tipo Stringa**: Non utilizzare mai array sequenziali con indici numerici impliciti
2. **Documentazione PHPDoc Accurata**: Specifica sempre `@return array<string, \Filament\Infolists\Components\Component>`
3. **Nomi Significativi per le Chiavi**: Scegli nomi di chiave che riflettano il contenuto o lo scopo del componente
4. **Rispetta la Struttura di Filament**: Segui le convenzioni di Filament per la struttura dei componenti

## Conclusione

<<<<<<< HEAD
<<<<<<< .merge_file_ug7Y8Q
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_xS38cj
Seguendo queste linee guida, garantirai un'implementazione corretta e coerente del metodo `getInfolistSchema()`, facilitando la manutenzione del codice e prevenendo errori di tipo rilevati da PHPStan. Ricorda: usa **sempre** chiavi di tipo stringa per gli array restituiti.
# Linee Guida per l'Implementazione di getInfolistSchema
<<<<<<< HEAD
## Requisiti Fondamentali
La funzione `getInfolistSchema()` deve **sempre** restituire un array con chiavi di tipo stringa. Questo documento fornisce le linee guida per garantire un'implementazione corretta e coerente in tutto il progetto.
## Implementazione Corretta
### Struttura Base
L'unico approccio corretto per implementare `getInfolistSchema()` è utilizzare array associativi con chiavi di tipo stringa:
=======

## Requisiti Fondamentali

La funzione `getInfolistSchema()` deve **sempre** restituire un array con chiavi di tipo stringa. Questo documento fornisce le linee guida per garantire un'implementazione corretta e coerente in tutto il progetto.

## Implementazione Corretta

### Struttura Base

L'unico approccio corretto per implementare `getInfolistSchema()` è utilizzare array associativi con chiavi di tipo stringa:

<<<<<<< .merge_file_ug7Y8Q
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_93b4qz
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_xS38cj
Seguendo queste linee guida, garantirai un'implementazione corretta e coerente del metodo `getInfolistSchema()`, facilitando la manutenzione del codice e prevenendo errori di tipo rilevati da PHPStan. Ricorda: usa **sempre** chiavi di tipo stringa per gli array restituiti. 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Seguendo queste linee guida, garantirai un'implementazione corretta e coerente del metodo `getInfolistSchema()`, facilitando la manutenzione del codice e prevenendo errori di tipo rilevati da PHPStan. Ricorda: usa **sempre** chiavi di tipo stringa per gli array restituiti. 
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
Seguendo queste linee guida, garantirai un'implementazione corretta e coerente del metodo `getInfolistSchema()`, facilitando la manutenzione del codice e prevenendo errori di tipo rilevati da PHPStan. Ricorda: usa **sempre** chiavi di tipo stringa per gli array restituiti. 
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
Seguendo queste linee guida, garantirai un'implementazione corretta e coerente del metodo `getInfolistSchema()`, facilitando la manutenzione del codice e prevenendo errori di tipo rilevati da PHPStan. Ricorda: usa **sempre** chiavi di tipo stringa per gli array restituiti.
# Linee Guida per l'Implementazione di getInfolistSchema
## Requisiti Fondamentali
La funzione `getInfolistSchema()` deve **sempre** restituire un array con chiavi di tipo stringa. Questo documento fornisce le linee guida per garantire un'implementazione corretta e coerente in tutto il progetto.
## Implementazione Corretta
### Struttura Base
L'unico approccio corretto per implementare `getInfolistSchema()` è utilizzare array associativi con chiavi di tipo stringa:
<<<<<<< .merge_file_ug7Y8Q
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_J6rhlR
>>>>>>> .merge_file_xS38cj
>>>>>>> laraxot/dev
```php
/**
 * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
 *
 * @return array<string, \Filament\Infolists\Components\Component>
 */
protected function getInfolistSchema(): array
{
    return [
        'id' => TextEntry::make('id'),
        'nome' => TextEntry::make('nome'),
        'email' => TextEntry::make('email'),
        // Altri componenti...
    ];
}
```
<<<<<<< HEAD
<<<<<<< .merge_file_ug7Y8Q
=======
<<<<<<< .merge_file_93b4qz
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Documentazione PHPDoc Corretta
Per PHPStan livello 9 e superiore, è fondamentale documentare correttamente il tipo di array restituito:
## Esempi Pratici
### Struttura con Sezioni e Griglie
=======
>>>>>>> .merge_file_J6rhlR
>>>>>>> .merge_file_xS38cj

### Documentazione PHPDoc Corretta

Per PHPStan livello 9 e superiore, è fondamentale documentare correttamente il tipo di array restituito:

```php
/**
 * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
 *
 * @return array<string, \Filament\Infolists\Components\Component>
 */
protected function getInfolistSchema(): array
```

## Esempi Pratici

### Struttura con Sezioni e Griglie

```php
/**
 * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
 *
 * @return array<string, \Filament\Infolists\Components\Component>
 */
protected function getInfolistSchema(): array
{
    return [
<<<<<<< .merge_file_ug7Y8Q
=======
=======
<<<<<<< .merge_file_93b4qz
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_xS38cj
### Documentazione PHPDoc Corretta
Per PHPStan livello 9 e superiore, è fondamentale documentare correttamente il tipo di array restituito:
## Esempi Pratici
### Struttura con Sezioni e Griglie
<<<<<<< .merge_file_ug7Y8Q
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_J6rhlR
>>>>>>> .merge_file_xS38cj
>>>>>>> laraxot/dev
        'informazioni_personali' => Section::make('Informazioni Personali')
            ->schema([
                'grid0'=>Grid::make(['default' => 2])
                    ->schema([
                        'nome'=>TextEntry::make('nome')
                            ,
                        'cognome'=>TextEntry::make('cognome')
<<<<<<< HEAD
<<<<<<< .merge_file_ug7Y8Q
=======
<<<<<<< .merge_file_93b4qz
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
                        'email'=>TextEntry::make('email')
                        'telefono'=>TextEntry::make('telefono')
                    ]),
            ]),
        'dettagli_account' => Section::make('Dettagli Account')
                // Altri componenti...
### Struttura con Componenti Personalizzati
        'info_personali' => Section::make('Informazioni Personali')
                // Componenti per informazioni personali...
                // Componenti per dettagli account...
        'preferenze' => Section::make('Preferenze')
                // Componenti per preferenze...
## Vantaggi dell'Uso di Chiavi di Tipo Stringa
=======
>>>>>>> .merge_file_J6rhlR
>>>>>>> .merge_file_xS38cj
                            ,
                        'email'=>TextEntry::make('email')
                            ,
                        'telefono'=>TextEntry::make('telefono')
                            ,
                    ]),
            ]),

        'dettagli_account' => Section::make('Dettagli Account')
            ->schema([
                // Altri componenti...
            ]),
    ];
}
```

### Struttura con Componenti Personalizzati

```php
/**
 * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
 *
 * @return array<string, \Filament\Infolists\Components\Component>
 */
protected function getInfolistSchema(): array
{
    return [
        'info_personali' => Section::make('Informazioni Personali')
            ->schema([
                // Componenti per informazioni personali...
            ]),
        'dettagli_account' => Section::make('Dettagli Account')
            ->schema([
                // Componenti per dettagli account...
            ]),
        'preferenze' => Section::make('Preferenze')
            ->schema([
                // Componenti per preferenze...
            ]),
    ];
}
```

## Vantaggi dell'Uso di Chiavi di Tipo Stringa

<<<<<<< .merge_file_ug7Y8Q
=======
=======
<<<<<<< .merge_file_93b4qz
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_xS38cj
                        'email'=>TextEntry::make('email')
                        'telefono'=>TextEntry::make('telefono')
                    ]),
            ]),
        'dettagli_account' => Section::make('Dettagli Account')
                // Altri componenti...
### Struttura con Componenti Personalizzati
        'info_personali' => Section::make('Informazioni Personali')
                // Componenti per informazioni personali...
                // Componenti per dettagli account...
        'preferenze' => Section::make('Preferenze')
                // Componenti per preferenze...
## Vantaggi dell'Uso di Chiavi di Tipo Stringa
<<<<<<< .merge_file_ug7Y8Q
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_J6rhlR
>>>>>>> .merge_file_xS38cj
>>>>>>> laraxot/dev
1. **Accesso Diretto ai Componenti**: Le chiavi di tipo stringa consentono di accedere direttamente ai componenti dell'array
2. **Maggiore Leggibilità**: Il codice è più chiaro e facile da comprendere
3. **Prevenzione di Errori**: Evita problemi quando si accede ai componenti tramite chiave
4. **Compatibilità con PHPStan**: Aiuta a superare le verifiche di PHPStan di livello 9 e 10
<<<<<<< HEAD
<<<<<<< .merge_file_ug7Y8Q
=======
<<<<<<< .merge_file_93b4qz
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Casi Speciali
### Combinazione di Components e Layouts
Quando si utilizzano sia componenti di visualizzazione che componenti di layout (Section, Grid, etc.), è importante mantenere sempre chiavi di tipo stringa:
        'identificativo' => TextEntry::make('id'),
        'informazioni' => Section::make('Informazioni')
                // Componenti all'interno della sezione...
### Array con Sezioni Generate Dinamicamente
Quando si generano sezioni dinamicamente, è importante assegnare chiavi stringa significative:
public function getInfolistSchema(): array
    $sections = [];
=======
>>>>>>> .merge_file_J6rhlR
>>>>>>> .merge_file_xS38cj

## Casi Speciali

### Combinazione di Components e Layouts

Quando si utilizzano sia componenti di visualizzazione che componenti di layout (Section, Grid, etc.), è importante mantenere sempre chiavi di tipo stringa:

```php
/**
 * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
 *
 * @return array<string, \Filament\Infolists\Components\Component>
 */
protected function getInfolistSchema(): array
{
    return [
        'identificativo' => TextEntry::make('id'),
        'informazioni' => Section::make('Informazioni')
            ->schema([
                // Componenti all'interno della sezione...
            ]),
    ];
}
```

### Array con Sezioni Generate Dinamicamente

Quando si generano sezioni dinamicamente, è importante assegnare chiavi stringa significative:

```php
/**
 * Restituisce lo schema dell'infolist per la visualizzazione dei dettagli del record.
 *
 * @return array<string, \Filament\Infolists\Components\Component>
 */
public function getInfolistSchema(): array
{
    $sections = [];

<<<<<<< .merge_file_ug7Y8Q
=======
=======
<<<<<<< .merge_file_93b4qz
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_xS38cj
## Casi Speciali
### Combinazione di Components e Layouts
Quando si utilizzano sia componenti di visualizzazione che componenti di layout (Section, Grid, etc.), è importante mantenere sempre chiavi di tipo stringa:
        'identificativo' => TextEntry::make('id'),
        'informazioni' => Section::make('Informazioni')
                // Componenti all'interno della sezione...
### Array con Sezioni Generate Dinamicamente
Quando si generano sezioni dinamicamente, è importante assegnare chiavi stringa significative:
public function getInfolistSchema(): array
    $sections = [];
<<<<<<< .merge_file_ug7Y8Q
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_J6rhlR
>>>>>>> .merge_file_xS38cj
>>>>>>> laraxot/dev
    // Aggiungiamo dinamicamente le sezioni con chiavi stringa
    $sections['informazioni_base'] = Section::make('Informazioni Base')
        ->schema([
            // Componenti...
        ]);
<<<<<<< HEAD
<<<<<<< .merge_file_ug7Y8Q
=======
<<<<<<< .merge_file_93b4qz
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
    if ($this->record->hasDocuments()) {
        $sections['documenti'] = Section::make('Documenti')
                // Componenti per documenti...
            ]);
    }
    return $sections;
## Migrando da Array Numerici ad Array Associativi
Se hai implementazioni esistenti che utilizzano array numerici, segui questi passaggi per correggerle:
=======
>>>>>>> .merge_file_J6rhlR
>>>>>>> .merge_file_xS38cj

    if ($this->record->hasDocuments()) {
        $sections['documenti'] = Section::make('Documenti')
            ->schema([
                // Componenti per documenti...
            ]);
    }

    return $sections;
}
```

## Migrando da Array Numerici ad Array Associativi

Se hai implementazioni esistenti che utilizzano array numerici, segui questi passaggi per correggerle:

<<<<<<< .merge_file_ug7Y8Q
=======
=======
<<<<<<< .merge_file_93b4qz
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_xS38cj
    if ($this->record->hasDocuments()) {
        $sections['documenti'] = Section::make('Documenti')
                // Componenti per documenti...
            ]);
    }
    return $sections;
## Migrando da Array Numerici ad Array Associativi
Se hai implementazioni esistenti che utilizzano array numerici, segui questi passaggi per correggerle:
<<<<<<< .merge_file_ug7Y8Q
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_J6rhlR
>>>>>>> .merge_file_xS38cj
>>>>>>> laraxot/dev
1. Identifica tutti i componenti nell'array
2. Assegna a ciascun componente una chiave stringa significativa
3. Aggiorna il PHPDoc per specificare `@return array<string, \Filament\Infolists\Components\Component>`
4. Testa la vista per assicurarti che funzioni correttamente
<<<<<<< HEAD
<<<<<<< .merge_file_ug7Y8Q

### Prima:
```php
=======
### Prima:
=======
<<<<<<< .merge_file_93b4qz

### Prima:
```php
=======
<<<<<<< HEAD
### Prima:
=======
<<<<<<< HEAD

### Prima:
```php
=======
### Prima:
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
### Prima:
=======

### Prima:
```php
>>>>>>> .merge_file_J6rhlR
>>>>>>> .merge_file_xS38cj
>>>>>>> laraxot/dev
return [
    TextEntry::make('id'),
    TextEntry::make('nome'),
];
<<<<<<< HEAD
<<<<<<< .merge_file_ug7Y8Q
=======
<<<<<<< .merge_file_93b4qz
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Dopo:
    'id_entry' => TextEntry::make('id'),
    'nome_entry' => TextEntry::make('nome'),
## Migliori Pratiche
=======
>>>>>>> .merge_file_J6rhlR
>>>>>>> .merge_file_xS38cj
```

### Dopo:
```php
return [
    'id_entry' => TextEntry::make('id'),
    'nome_entry' => TextEntry::make('nome'),
];
```

## Migliori Pratiche

<<<<<<< .merge_file_ug7Y8Q
=======
=======
<<<<<<< .merge_file_93b4qz
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_xS38cj
### Dopo:
    'id_entry' => TextEntry::make('id'),
    'nome_entry' => TextEntry::make('nome'),
## Migliori Pratiche
<<<<<<< .merge_file_ug7Y8Q
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_J6rhlR
>>>>>>> .merge_file_xS38cj
>>>>>>> laraxot/dev
1. **Usa SEMPRE Chiavi di Tipo Stringa**: Non utilizzare mai array sequenziali con indici numerici impliciti
2. **Documentazione PHPDoc Accurata**: Specifica sempre `@return array<string, \Filament\Infolists\Components\Component>`
3. **Nomi Significativi per le Chiavi**: Scegli nomi di chiave che riflettano il contenuto o lo scopo del componente
4. **Rispetta la Struttura di Filament**: Segui le convenzioni di Filament per la struttura dei componenti
<<<<<<< HEAD
<<<<<<< .merge_file_ug7Y8Q
=======
<<<<<<< .merge_file_93b4qz
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Conclusione
=======
>>>>>>> .merge_file_J6rhlR
>>>>>>> .merge_file_xS38cj

## Conclusione

Seguendo queste linee guida, garantirai un'implementazione corretta e coerente del metodo `getInfolistSchema()`, facilitando la manutenzione del codice e prevenendo errori di tipo rilevati da PHPStan. Ricorda: usa **sempre** chiavi di tipo stringa per gli array restituiti.
<<<<<<< .merge_file_ug7Y8Q
=======
=======
<<<<<<< .merge_file_93b4qz
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_xS38cj
## Conclusione
<<<<<<< HEAD
=======

Seguendo queste linee guida, garantirai un'implementazione corretta e coerente del metodo `getInfolistSchema()`, facilitando la manutenzione del codice e prevenendo errori di tipo rilevati da PHPStan. Ricorda: usa **sempre** chiavi di tipo stringa per gli array restituiti.
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
Seguendo queste linee guida, garantirai un'implementazione corretta e coerente del metodo `getInfolistSchema()`, facilitando la manutenzione del codice e prevenendo errori di tipo rilevati da PHPStan. Ricorda: usa **sempre** chiavi di tipo stringa per gli array restituiti. 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_ug7Y8Q
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_J6rhlR
>>>>>>> .merge_file_xS38cj
>>>>>>> laraxot/dev
