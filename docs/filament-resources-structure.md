<<<<<<< .merge_file_Sz5LVv
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_i7XovI
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
---
module: theme
topic: filament_resources_structure
canonical: ../../../Themes/docs/shared-components/filament-resources-structure_1.md
---

See canonical documentation: ../../../Themes/docs/shared-components/filament-resources-structure_1.md
# Struttura delle Filament Resources
## Panoramica
Questo documento descrive la struttura e l'organizzazione delle Filament Resources nel progetto il progetto, con particolare attenzione all'integrazione con il modulo Xot.
## Struttura Base
Le Filament Resources seguono una struttura gerarchica standardizzata:
=======
>>>>>>> .merge_file_agUjWu
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_0f9Lav
# Struttura delle Filament Resources

## Panoramica
Questo documento descrive la struttura e l'organizzazione delle Filament Resources nel progetto il progetto, con particolare attenzione all'integrazione con il modulo Xot.

## Struttura Base
Le Filament Resources seguono una struttura gerarchica standardizzata:

<<<<<<< .merge_file_Sz5LVv
<<<<<<< HEAD
<<<<<<< .merge_file_i7XovI
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
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
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
---
module: theme
topic: filament_resources_structure
canonical: ../../../Themes/docs/shared-components/filament-resources-structure_1.md
---
<<<<<<< HEAD
=======

<<<<<<< HEAD
See canonical documentation: ../../../Themes/docs/shared-components/filament-resources-structure_1.md
=======
<<<<<<< HEAD
See canonical documentation: ../../../Themes/docs/shared-components/filament-resources-structure_1.md
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
# Struttura delle Filament Resources
>>>>>>> laraxot/dev

See canonical documentation: ../../../Themes/docs/shared-components/filament-resources-structure_1.md
# Struttura delle Filament Resources
## Panoramica
Questo documento descrive la struttura e l'organizzazione delle Filament Resources nel progetto il progetto, con particolare attenzione all'integrazione con il modulo Xot.
## Struttura Base
Le Filament Resources seguono una struttura gerarchica standardizzata:
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_agUjWu
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_0f9Lav
```
laravel/
└── Modules/
    ├── Xot/
    │   └── app/
    │       └── Filament/
    │           └── Resources/
    │               └── Pages/
    │                   ├── XotBaseListRecords.php
    │                   ├── XotBaseCreateRecord.php
    │                   └── XotBaseEditRecord.php
    └── {ModuleName}/
        └── app/
            └── Filament/
                └── Resources/
                    └── {Model}Resource.php
<<<<<<< .merge_file_Sz5LVv
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_i7XovI
=======
<<<<<<< HEAD
## Classi Base di Xot
Le classi base di Xot forniscono funzionalità comuni a tutte le resources:
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Classi Base di Xot
Le classi base di Xot forniscono funzionalità comuni a tutte le resources:
=======
>>>>>>> .merge_file_agUjWu
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_0f9Lav
```

## Classi Base di Xot
Le classi base di Xot forniscono funzionalità comuni a tutte le resources:

<<<<<<< .merge_file_Sz5LVv
<<<<<<< HEAD
<<<<<<< .merge_file_i7XovI
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
=======
## Classi Base di Xot
Le classi base di Xot forniscono funzionalità comuni a tutte le resources:
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_agUjWu
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_0f9Lav
1. **XotBaseListRecords**
   - Gestione della lista dei record
   - Filtri e ordinamento
   - Azioni di massa
<<<<<<< .merge_file_Sz5LVv
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_i7XovI

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_agUjWu
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_0f9Lav
2. **XotBaseCreateRecord**
   - Creazione di nuovi record
   - Validazione dei dati
   - Gestione delle traduzioni
<<<<<<< .merge_file_Sz5LVv
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_i7XovI
=======
<<<<<<< HEAD
3. **XotBaseEditRecord**
   - Modifica dei record esistenti
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
3. **XotBaseEditRecord**
   - Modifica dei record esistenti
=======
>>>>>>> .merge_file_agUjWu
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_0f9Lav

3. **XotBaseEditRecord**
   - Modifica dei record esistenti
   - Validazione dei dati
   - Gestione delle traduzioni

<<<<<<< .merge_file_Sz5LVv
<<<<<<< HEAD
<<<<<<< .merge_file_i7XovI
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
=======
3. **XotBaseEditRecord**
   - Modifica dei record esistenti
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_agUjWu
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_0f9Lav
## Namespace e Import
Le classi base devono essere importate dal namespace corretto:
```php
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
<<<<<<< .merge_file_Sz5LVv
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_i7XovI
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Documentazione Correlata
- [Filament class extension rules (Xot)](../Xot/docs/filament-class-extension-rules.md)
=======
>>>>>>> .merge_file_agUjWu
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_0f9Lav
```

## Documentazione Correlata

- [Filament class extension rules (Xot)](../xot/docs/filament-class-extension-rules.md)

<<<<<<< .merge_file_Sz5LVv
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_0f9Lav
## Best Practices
1. **Namespace**
   - Usa sempre il namespace completo
   - Importa le classi base dal percorso corretto
   - Mantieni la coerenza tra i moduli
<<<<<<< .merge_file_Sz5LVv
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
=======

>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_0f9Lav
2. **Ereditarietà**
   - Estendi sempre le classi base di Xot
   - Usa il prefisso "Base" per le classi base
   - Implementa solo le funzionalità specifiche del modulo
<<<<<<< .merge_file_Sz5LVv
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
=======

>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_0f9Lav
3. **Documentazione**
   - Mantieni aggiornata la documentazione
   - Crea collegamenti bidirezionali
   - Documenta le dipendenze
<<<<<<< .merge_file_Sz5LVv
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
=======

>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_0f9Lav
## Note Importanti
- Le classi base sono nel namespace `Modules\Xot\Filament\Resources\Pages\`
- Non esistono classi senza il prefisso "Base"
- La documentazione deve essere mantenuta sincronizzata
<<<<<<< .merge_file_Sz5LVv
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
=======

>>>>>>> 804451c (Lint)
=======

>>>>>>> .merge_file_0f9Lav
## Links
- [Documentazione Filament](https://filamentphp.com/)
- [Laravel Modules](module-structure.md)
- [Best Practices](best-practices.md)
<<<<<<< .merge_file_Sz5LVv
<<<<<<< HEAD
<<<<<<< HEAD
## Note
Questa documentazione è collegata bidirezionalmente con la documentazione specifica dei moduli. Per dettagli su resources specifiche, consultare la documentazione del modulo corrispondente.
- [Documentazione CMS Module](../laravel/Modules/Cms/project_docs/filament-resources.md)
- [Documentazione Xot Module](../laravel/Modules/Xot/project_docs/filament-resources.md)
=======
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_0f9Lav

## Note
Questa documentazione è collegata bidirezionalmente con la documentazione specifica dei moduli. Per dettagli su resources specifiche, consultare la documentazione del modulo corrispondente.
# Struttura delle Filament Resources

## Panoramica
Questo documento descrive la struttura e l'organizzazione delle Filament Resources nel progetto il progetto, con particolare attenzione all'integrazione con il modulo Xot.

## Struttura Base
Le Filament Resources seguono una struttura gerarchica standardizzata:

```
laravel/
└── Modules/
    ├── Xot/
    │   └── app/
    │       └── Filament/
    │           └── Resources/
    │               └── Pages/
    │                   ├── XotBaseListRecords.php
    │                   ├── XotBaseCreateRecord.php
    │                   └── XotBaseEditRecord.php
    └── {ModuleName}/
        └── app/
            └── Filament/
                └── Resources/
                    └── {Model}Resource.php
```

## Classi Base di Xot
Le classi base di Xot forniscono funzionalità comuni a tutte le resources:

1. **XotBaseListRecords**
   - Gestione della lista dei record
   - Filtri e ordinamento
   - Azioni di massa

2. **XotBaseCreateRecord**
   - Creazione di nuovi record
   - Validazione dei dati
   - Gestione delle traduzioni

3. **XotBaseEditRecord**
   - Modifica dei record esistenti
   - Validazione dei dati
   - Gestione delle traduzioni

## Namespace e Import
Le classi base devono essere importate dal namespace corretto:
```php
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
```

## Documentazione Correlata
- [Documentazione CMS Module](../laravel/modules/cms/project_docs/filament-resources.md)
- [Documentazione Xot Module](../laravel/modules/xot/project_docs/filament-resources.md)
- [Documentazione CMS Module](../laravel/modules/cms/project_docs/filament-resources.md)
- [Documentazione Xot Module](../laravel/modules/xot/project_docs/filament-resources.md)
- [Documentazione CMS Module](../laravel/modules/cms/project_docs/filament-resources.md)
- [Documentazione Xot Module](../laravel/modules/xot/project_docs/filament-resources.md)
<<<<<<< .merge_file_Sz5LVv
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
## Documentazione Correlata
- [Filament class extension rules (Xot)](../Xot/docs/filament-class-extension-rules.md)
## Best Practices
1. **Namespace**
   - Usa sempre il namespace completo
   - Importa le classi base dal percorso corretto
   - Mantieni la coerenza tra i moduli
2. **Ereditarietà**
   - Estendi sempre le classi base di Xot
   - Usa il prefisso "Base" per le classi base
   - Implementa solo le funzionalità specifiche del modulo
3. **Documentazione**
   - Mantieni aggiornata la documentazione
   - Crea collegamenti bidirezionali
   - Documenta le dipendenze
## Note Importanti
- Le classi base sono nel namespace `Modules\Xot\Filament\Resources\Pages\`
- Non esistono classi senza il prefisso "Base"
- La documentazione deve essere mantenuta sincronizzata
## Links
- [Documentazione Filament](https://filamentphp.com/)
- [Laravel Modules](module-structure.md)
- [Best Practices](best-practices.md)
## Note
Questa documentazione è collegata bidirezionalmente con la documentazione specifica dei moduli. Per dettagli su resources specifiche, consultare la documentazione del modulo corrispondente.
- [Documentazione CMS Module](../laravel/Modules/Cms/project_docs/filament-resources.md)
- [Documentazione Xot Module](../laravel/Modules/Xot/project_docs/filament-resources.md)
<<<<<<< HEAD
=======
- [Documentazione CMS Module](../laravel/Modules/Cms/project_docs/filament-resources.md)
- [Documentazione Xot Module](../laravel/Modules/Xot/project_docs/filament-resources.md)
- [Documentazione CMS Module](../laravel/Modules/Cms/project_docs/filament-resources.md)
- [Documentazione Xot Module](../laravel/Modules/Xot/project_docs/filament-resources.md)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_0f9Lav

## Best Practices
1. **Namespace**
   - Usa sempre il namespace completo
   - Importa le classi base dal percorso corretto
   - Mantieni la coerenza tra i moduli

2. **Ereditarietà**
   - Estendi sempre le classi base di Xot
   - Usa il prefisso "Base" per le classi base
   - Implementa solo le funzionalità specifiche del modulo

3. **Documentazione**
   - Mantieni aggiornata la documentazione
   - Crea collegamenti bidirezionali
   - Documenta le dipendenze

## Note Importanti
- Le classi base sono nel namespace `Modules\Xot\Filament\Resources\Pages\`
- Non esistono classi senza il prefisso "Base"
- La documentazione deve essere mantenuta sincronizzata

## Links
- [Documentazione Filament](https://filamentphp.com/)
- [Laravel Modules](module-structure.md)
- [Best Practices](best-practices.md)

## Note
Questa documentazione è collegata bidirezionalmente con la documentazione specifica dei moduli. Per dettagli su resources specifiche, consultare la documentazione del modulo corrispondente.
<<<<<<< .merge_file_Sz5LVv
<<<<<<< HEAD
<<<<<<< .merge_file_i7XovI
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
See canonical documentation: ../../../Themes/docs/shared-components/filament-resources-structure_1.md
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
>>>>>>> .merge_file_agUjWu
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_0f9Lav
