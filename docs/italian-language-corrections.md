# Correzioni Lingua Italiana - Opening Hours

## Problema Identificato

Le traduzioni italiane nel file `opening_hours.php` contenevano errori grammaticali e espressioni poco naturali che compromettevano la qualità dell'interfaccia utente.

## Correzioni Applicate

### 1. **Terminologia "Mattina" → "Mattino"**

#### ❌ Prima (Scorretto)
```php
'morning' => 'Mattina',
'headers' => ['morning' => 'Mattina'],
'periods' => ['morning' => 'Mattina'],
'labels' => ['morning' => 'Mattina'],
```

#### ✅ Dopo (Corretto)
```php
'morning' => 'Mattino',
'headers' => ['morning' => 'Mattino'],
'periods' => ['morning' => 'Mattino'],
'labels' => ['morning' => 'Mattino'],
```

**Motivazione**: In italiano corretto si dice "il mattino" e non "la mattina" quando si riferisce a un periodo temporale specifico.

### 2. **Aggiunta Articoli Determinativi**

#### ❌ Prima (Innaturale)
```php
'missing_closing_time' => 'Se specifichi l\'orario di apertura :session per :day, devi specificare anche quello di chiusura.',
'opening_before_closing' => 'L\'orario di apertura :session per :day deve essere precedente a quello di chiusura.',
```

#### ✅ Dopo (Naturale)
```php
'missing_closing_time' => 'Se specifichi l\'orario di apertura del :session per :day, devi specificare anche quello di chiusura.',
'opening_before_closing' => 'L\'orario di apertura del :session per :day deve essere precedente a quello di chiusura.',
```

**Motivazione**: L'aggiunta dell'articolo determinativo "del" rende le frasi più naturali e scorrevoli in italiano.

### 3. **Correzione Errore di Battitura**

#### ❌ Prima (Errore)
```php
'to_after_from' => 'L\'orario "Alle" deve essere successivo all\'orario "Alle"',
```

#### ✅ Dopo (Corretto)
```php
'to_after_from' => 'L\'orario "Alle" deve essere successivo all\'orario "Dalle"',
```

**Motivazione**: Errore di copia-incolla che rendeva il messaggio privo di senso.

### 4. **Miglioramento Frasi Complesse**

#### ❌ Prima (Artificioso)
```php
'morning_before_afternoon' => 'Per :day, l\'orario di chiusura mattina deve essere precedente all\'apertura pomeridiana.',
```

#### ✅ Dopo (Naturale)
```php
'morning_before_afternoon' => 'Per :day, l\'orario di chiusura del mattino deve essere precedente all\'apertura del pomeriggio.',
```

**Motivazione**: Aggiunta degli articoli e uso di termini più naturali.

### 5. **Consistenza Terminologica**

#### Placeholder Migliorati
```php
// Prima
'morning_hours' => 'Orario mattutino',
'afternoon_hours' => 'Orario pomeridiano',

<<<<<<< HEAD
// Dopo
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
// Dopo
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
// Dopo  
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
// Dopo
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
// Dopo  
=======
// Dopo
>>>>>>> laraxot/dev
=======
// Dopo  
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
'morning_hours' => 'Orari del mattino',
'afternoon_hours' => 'Orari del pomeriggio',
```

## Principi di Correzione Applicati

### 1. **Naturalezza**
- Uso di espressioni che un italiano nativo utilizzerebbe spontaneamente
- Evitare traduzioni letterali dall'inglese
- Preferire costruzioni sintattiche italiane

### 2. **Consistenza**
- Stesso termine usato in tutto il file ("mattino" vs "mattina")
- Struttura delle frasi coerente
- Terminologia uniforme

### 3. **Chiarezza**
- Messaggi di errore chiari e comprensibili
- Istruzioni precise per l'utente
- Terminologia appropriata per il contesto medico

### 4. **Professionalità**
- Linguaggio formale ma accessibile
- Terminologia tecnica appropriata
- Tono professionale per ambiente sanitario

## Impatto delle Correzioni

### User Experience
- **Messaggi più chiari** per gli utenti italiani
- **Comprensione immediata** degli errori di validazione
- **Interfaccia più professionale** per ambiente medico

### Qualità del Software
- **Localizzazione di qualità** per mercato italiano
- **Coerenza terminologica** in tutta l'applicazione
- **Standard professionali** per software sanitario

### Manutenibilità
- **Traduzioni corrette** facilitano future modifiche
- **Struttura chiara** per traduttori
- **Esempio di qualità** per altre sezioni

## Best Practices per Traduzioni Italiane

### Grammatica
1. **Articoli determinativi**: Sempre usare quando appropriato
2. **Concordanze**: Rispettare genere e numero
3. **Preposizioni**: Usare quelle corrette ("del", "per", "a")

### Terminologia
1. **Consistenza**: Stesso termine per stesso concetto
2. **Naturalezza**: Preferire espressioni italiane native
3. **Contesto**: Adattare al dominio (medico/sanitario)

### Stile
1. **Formalità**: Linguaggio professionale ma accessibile
2. **Chiarezza**: Messaggi diretti e comprensibili
3. **Completezza**: Informazioni sufficienti per l'utente

## Controllo Qualità

### Verifica Linguistica
- ✅ Grammatica italiana corretta
- ✅ Sintassi naturale e scorrevole
- ✅ Terminologia appropriata
- ✅ Consistenza terminologica

### Verifica Tecnica
- ✅ Parametri `:day` e `:session` corretti
- ✅ Struttura gerarchica mantenuta
- ✅ Compatibilità con TransTrait
- ✅ Nessuna stringa hardcoded

## Collegamenti
- [Opening Hours Rule](../app/Rules/OpeningHoursRule.php)
- [Validation Files Multilingua](./validation_files_multilingua.md)
- [Linee Guida Localizzazione](./localization_guidelines.md)

<<<<<<< HEAD
*Correzioni completate: gennaio 2025*
<<<<<<< HEAD
=======
<<<<<<< HEAD
*Correzioni completate: gennaio 2025*
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
# Correzioni Lingua Italiana - Opening Hours
<<<<<<< HEAD
## Problema Identificato
Le traduzioni italiane nel file `opening_hours.php` contenevano errori grammaticali e espressioni poco naturali che compromettevano la qualità dell'interfaccia utente.
## Correzioni Applicate
### 1. **Terminologia "Mattina" → "Mattino"**
=======
=======
# Correzioni Lingua Italiana - Opening Hours
>>>>>>> 804451c (Lint)

## Problema Identificato

Le traduzioni italiane nel file `opening_hours.php` contenevano errori grammaticali e espressioni poco naturali che compromettevano la qualità dell'interfaccia utente.

## Correzioni Applicate

### 1. **Terminologia "Mattina" → "Mattino"**

<<<<<<< HEAD
<<<<<<< .merge_file_CB2f6W
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
*Correzioni completate: gennaio 2025*
>>>>>>> laraxot/dev
=======
=======
<<<<<<< HEAD
*Correzioni completate: gennaio 2025*
>>>>>>> 804451c (Lint)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
*Correzioni completate: gennaio 2025*
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
*Correzioni completate: gennaio 2025*
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
*Correzioni completate: gennaio 2025*
# Correzioni Lingua Italiana - Opening Hours
## Problema Identificato
Le traduzioni italiane nel file `opening_hours.php` contenevano errori grammaticali e espressioni poco naturali che compromettevano la qualità dell'interfaccia utente.
## Correzioni Applicate
### 1. **Terminologia "Mattina" → "Mattino"**
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_JOsKxo
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
#### ❌ Prima (Scorretto)
```php
'morning' => 'Mattina',
'headers' => ['morning' => 'Mattina'],
'periods' => ['morning' => 'Mattina'],
'labels' => ['morning' => 'Mattina'],
```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_CB2f6W

#### ✅ Dopo (Corretto)
```php
=======
<<<<<<< HEAD
#### ✅ Dopo (Corretto)
=======
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)

#### ✅ Dopo (Corretto)
```php
=======
#### ✅ Dopo (Corretto)
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
#### ✅ Dopo (Corretto)
=======

#### ✅ Dopo (Corretto)
```php
>>>>>>> .merge_file_JOsKxo
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
'morning' => 'Mattino',
'headers' => ['morning' => 'Mattino'],
'periods' => ['morning' => 'Mattino'],
'labels' => ['morning' => 'Mattino'],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_CB2f6W
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
**Motivazione**: In italiano corretto si dice "il mattino" e non "la mattina" quando si riferisce a un periodo temporale specifico.
### 2. **Aggiunta Articoli Determinativi**
#### ❌ Prima (Innaturale)
'missing_closing_time' => 'Se specifichi l\'orario di apertura :session per :day, devi specificare anche quello di chiusura.',
'opening_before_closing' => 'L\'orario di apertura :session per :day deve essere precedente a quello di chiusura.',
#### ✅ Dopo (Naturale)
'missing_closing_time' => 'Se specifichi l\'orario di apertura del :session per :day, devi specificare anche quello di chiusura.',
'opening_before_closing' => 'L\'orario di apertura del :session per :day deve essere precedente a quello di chiusura.',
**Motivazione**: L'aggiunta dell'articolo determinativo "del" rende le frasi più naturali e scorrevoli in italiano.
### 3. **Correzione Errore di Battitura**
#### ❌ Prima (Errore)
'to_after_from' => 'L\'orario "Alle" deve essere successivo all\'orario "Alle"',
'to_after_from' => 'L\'orario "Alle" deve essere successivo all\'orario "Dalle"',
**Motivazione**: Errore di copia-incolla che rendeva il messaggio privo di senso.
### 4. **Miglioramento Frasi Complesse**
#### ❌ Prima (Artificioso)
'morning_before_afternoon' => 'Per :day, l\'orario di chiusura mattina deve essere precedente all\'apertura pomeridiana.',
'morning_before_afternoon' => 'Per :day, l\'orario di chiusura del mattino deve essere precedente all\'apertura del pomeriggio.',
**Motivazione**: Aggiunta degli articoli e uso di termini più naturali.
### 5. **Consistenza Terminologica**
#### Placeholder Migliorati
// Prima
'morning_hours' => 'Orario mattutino',
'afternoon_hours' => 'Orario pomeridiano',
// Dopo
'morning_hours' => 'Orari del mattino',
'afternoon_hours' => 'Orari del pomeriggio',
## Principi di Correzione Applicati
=======
>>>>>>> .merge_file_JOsKxo
=======
>>>>>>> 804451c (Lint)
```

**Motivazione**: In italiano corretto si dice "il mattino" e non "la mattina" quando si riferisce a un periodo temporale specifico.

### 2. **Aggiunta Articoli Determinativi**

#### ❌ Prima (Innaturale)
```php
'missing_closing_time' => 'Se specifichi l\'orario di apertura :session per :day, devi specificare anche quello di chiusura.',
'opening_before_closing' => 'L\'orario di apertura :session per :day deve essere precedente a quello di chiusura.',
```

#### ✅ Dopo (Naturale)
```php
'missing_closing_time' => 'Se specifichi l\'orario di apertura del :session per :day, devi specificare anche quello di chiusura.',
'opening_before_closing' => 'L\'orario di apertura del :session per :day deve essere precedente a quello di chiusura.',
```

**Motivazione**: L'aggiunta dell'articolo determinativo "del" rende le frasi più naturali e scorrevoli in italiano.

### 3. **Correzione Errore di Battitura**

#### ❌ Prima (Errore)
```php
'to_after_from' => 'L\'orario "Alle" deve essere successivo all\'orario "Alle"',
```

#### ✅ Dopo (Corretto)
```php
'to_after_from' => 'L\'orario "Alle" deve essere successivo all\'orario "Dalle"',
```

**Motivazione**: Errore di copia-incolla che rendeva il messaggio privo di senso.

### 4. **Miglioramento Frasi Complesse**

#### ❌ Prima (Artificioso)
```php
'morning_before_afternoon' => 'Per :day, l\'orario di chiusura mattina deve essere precedente all\'apertura pomeridiana.',
```

#### ✅ Dopo (Naturale)
```php
'morning_before_afternoon' => 'Per :day, l\'orario di chiusura del mattino deve essere precedente all\'apertura del pomeriggio.',
```

**Motivazione**: Aggiunta degli articoli e uso di termini più naturali.

### 5. **Consistenza Terminologica**

#### Placeholder Migliorati
```php
// Prima
'morning_hours' => 'Orario mattutino',
'afternoon_hours' => 'Orario pomeridiano',

// Dopo
'morning_hours' => 'Orari del mattino',
'afternoon_hours' => 'Orari del pomeriggio',
```

## Principi di Correzione Applicati

<<<<<<< HEAD
<<<<<<< .merge_file_CB2f6W
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
**Motivazione**: In italiano corretto si dice "il mattino" e non "la mattina" quando si riferisce a un periodo temporale specifico.
### 2. **Aggiunta Articoli Determinativi**
#### ❌ Prima (Innaturale)
'missing_closing_time' => 'Se specifichi l\'orario di apertura :session per :day, devi specificare anche quello di chiusura.',
'opening_before_closing' => 'L\'orario di apertura :session per :day deve essere precedente a quello di chiusura.',
#### ✅ Dopo (Naturale)
'missing_closing_time' => 'Se specifichi l\'orario di apertura del :session per :day, devi specificare anche quello di chiusura.',
'opening_before_closing' => 'L\'orario di apertura del :session per :day deve essere precedente a quello di chiusura.',
**Motivazione**: L'aggiunta dell'articolo determinativo "del" rende le frasi più naturali e scorrevoli in italiano.
### 3. **Correzione Errore di Battitura**
#### ❌ Prima (Errore)
'to_after_from' => 'L\'orario "Alle" deve essere successivo all\'orario "Alle"',
'to_after_from' => 'L\'orario "Alle" deve essere successivo all\'orario "Dalle"',
**Motivazione**: Errore di copia-incolla che rendeva il messaggio privo di senso.
### 4. **Miglioramento Frasi Complesse**
#### ❌ Prima (Artificioso)
'morning_before_afternoon' => 'Per :day, l\'orario di chiusura mattina deve essere precedente all\'apertura pomeridiana.',
'morning_before_afternoon' => 'Per :day, l\'orario di chiusura del mattino deve essere precedente all\'apertura del pomeriggio.',
**Motivazione**: Aggiunta degli articoli e uso di termini più naturali.
### 5. **Consistenza Terminologica**
#### Placeholder Migliorati
// Prima
'morning_hours' => 'Orario mattutino',
'afternoon_hours' => 'Orario pomeridiano',
// Dopo
'morning_hours' => 'Orari del mattino',
'afternoon_hours' => 'Orari del pomeriggio',
## Principi di Correzione Applicati
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_JOsKxo
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
### 1. **Naturalezza**
- Uso di espressioni che un italiano nativo utilizzerebbe spontaneamente
- Evitare traduzioni letterali dall'inglese
- Preferire costruzioni sintattiche italiane
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_CB2f6W

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_JOsKxo
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
### 2. **Consistenza**
- Stesso termine usato in tutto il file ("mattino" vs "mattina")
- Struttura delle frasi coerente
- Terminologia uniforme
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_CB2f6W

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_JOsKxo
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
### 3. **Chiarezza**
- Messaggi di errore chiari e comprensibili
- Istruzioni precise per l'utente
- Terminologia appropriata per il contesto medico
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_CB2f6W

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_JOsKxo
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
### 4. **Professionalità**
- Linguaggio formale ma accessibile
- Terminologia tecnica appropriata
- Tono professionale per ambiente sanitario
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_CB2f6W

## Impatto delle Correzioni

=======
<<<<<<< HEAD
## Impatto delle Correzioni
=======
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)

## Impatto delle Correzioni

=======
## Impatto delle Correzioni
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Impatto delle Correzioni
=======

## Impatto delle Correzioni

>>>>>>> .merge_file_JOsKxo
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
### User Experience
- **Messaggi più chiari** per gli utenti italiani
- **Comprensione immediata** degli errori di validazione
- **Interfaccia più professionale** per ambiente medico
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_CB2f6W

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_JOsKxo
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
### Qualità del Software
- **Localizzazione di qualità** per mercato italiano
- **Coerenza terminologica** in tutta l'applicazione
- **Standard professionali** per software sanitario
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_CB2f6W

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_JOsKxo
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
### Manutenibilità
- **Traduzioni corrette** facilitano future modifiche
- **Struttura chiara** per traduttori
- **Esempio di qualità** per altre sezioni
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_CB2f6W

## Best Practices per Traduzioni Italiane

=======
<<<<<<< HEAD
## Best Practices per Traduzioni Italiane
=======
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)

## Best Practices per Traduzioni Italiane

=======
## Best Practices per Traduzioni Italiane
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Best Practices per Traduzioni Italiane
=======

## Best Practices per Traduzioni Italiane

>>>>>>> .merge_file_JOsKxo
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
### Grammatica
1. **Articoli determinativi**: Sempre usare quando appropriato
2. **Concordanze**: Rispettare genere e numero
3. **Preposizioni**: Usare quelle corrette ("del", "per", "a")
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_CB2f6W

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_JOsKxo
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
### Terminologia
1. **Consistenza**: Stesso termine per stesso concetto
2. **Naturalezza**: Preferire espressioni italiane native
3. **Contesto**: Adattare al dominio (medico/sanitario)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_CB2f6W

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_JOsKxo
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
### Stile
1. **Formalità**: Linguaggio professionale ma accessibile
2. **Chiarezza**: Messaggi diretti e comprensibili
3. **Completezza**: Informazioni sufficienti per l'utente
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_CB2f6W

## Controllo Qualità

=======
<<<<<<< HEAD
## Controllo Qualità
=======
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)

## Controllo Qualità

=======
## Controllo Qualità
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Controllo Qualità
=======

## Controllo Qualità

>>>>>>> .merge_file_JOsKxo
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
### Verifica Linguistica
- ✅ Grammatica italiana corretta
- ✅ Sintassi naturale e scorrevole
- ✅ Terminologia appropriata
- ✅ Consistenza terminologica
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_CB2f6W

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_JOsKxo
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
### Verifica Tecnica
- ✅ Parametri `:day` e `:session` corretti
- ✅ Struttura gerarchica mantenuta
- ✅ Compatibilità con TransTrait
- ✅ Nessuna stringa hardcoded
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_CB2f6W

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_JOsKxo
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
## Collegamenti
- [Opening Hours Rule](../app/Rules/OpeningHoursRule.php)
- [Validation Files Multilingua](./validation_files_multilingua.md)
- [Linee Guida Localizzazione](./localization_guidelines.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_CB2f6W
=======
>>>>>>> 804451c (Lint)

*Correzioni completate: gennaio 2025*
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

*Correzioni completate: gennaio 2025*
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======

*Correzioni completate: gennaio 2025*
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
*Correzioni completate: gennaio 2025*
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
=======

*Correzioni completate: gennaio 2025*
>>>>>>> .merge_file_JOsKxo
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
