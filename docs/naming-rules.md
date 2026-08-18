# Regole di Naming nei Moduli

## Regola: No Nomi Specifici dell'Applicazione

### Motivazione
I moduli devono essere generici e riutilizzabili. L'uso di nomi specifici dell'applicazione (come "il progetto") nella documentazione dei moduli:
1. Riduce la riutilizzabilità del modulo
2. Crea accoppiamento stretto con l'applicazione specifica
3. Rende più difficile il riutilizzo in altri progetti
4. Viola il principio di modularità

### Esempi

❌ **Non Corretto**:
```md
<<<<<<< .merge_file_zO0dEh
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> .merge_file_0ZBxzm


<<<<<<< .merge_file_zO0dEh
=======
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
>>>>>>> .merge_file_0ZBxzm
# Design System il progetto
Il design system di il progetto definisce...
```

✅ **Corretto**:
```md
<<<<<<< .merge_file_zO0dEh

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
>>>>>>> .merge_file_0ZBxzm
# Design System
Il design system definisce...
```

### Dove Usare i Nomi Specifici
I nomi specifici dell'applicazione devono apparire solo:
1. Nella documentazione principale (`/docs`)
2. Nei file di configurazione specifici dell'applicazione
3. Nei file di traduzione specifici dell'applicazione

### Best Practices
1. Usare termini generici nella documentazione dei moduli
2. Riferirsi all'applicazione come "l'applicazione" o "il sistema"
3. Mantenere la documentazione modulare e riutilizzabile
4. Usare esempi generici nelle spiegazioni

## Collegamenti Bidirezionali
- [README](README.md)
- [Design System](design-system.md)
- [Componenti](components.md)

## Vedi Anche
- [Documentazione Principale](../../../docs/README.md)
- [Standard di Codice](../../../docs/standards/coding-standards.md)
<<<<<<< .merge_file_zO0dEh
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> .merge_file_0ZBxzm
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
# Regole di Naming nei Moduli

## Regola: No Nomi Specifici dell'Applicazione

### Motivazione
I moduli devono essere generici e riutilizzabili. L'uso di nomi specifici dell'applicazione (come "il progetto") nella documentazione dei moduli:
1. Riduce la riutilizzabilità del modulo
2. Crea accoppiamento stretto con l'applicazione specifica
3. Rende più difficile il riutilizzo in altri progetti
4. Viola il principio di modularità

### Esempi

❌ **Non Corretto**:
```md
<<<<<<< .merge_file_zO0dEh
=======
<<<<<<< HEAD
>>>>>>> 92912795 (.)
>>>>>>> .merge_file_0ZBxzm
=======
>>>>>>> laraxot/dev
# Design System il progetto
Il design system di il progetto definisce...
```

✅ **Corretto**:
```md
# Design System
Il design system definisce...
```

### Dove Usare i Nomi Specifici
I nomi specifici dell'applicazione devono apparire solo:
1. Nella documentazione principale (`/docs`)
2. Nei file di configurazione specifici dell'applicazione
3. Nei file di traduzione specifici dell'applicazione

### Best Practices
1. Usare termini generici nella documentazione dei moduli
2. Riferirsi all'applicazione come "l'applicazione" o "il sistema"
3. Mantenere la documentazione modulare e riutilizzabile
4. Usare esempi generici nelle spiegazioni

## Collegamenti Bidirezionali
- [README](README.md)
- [Design System](design-system.md)
- [Componenti](components.md)

## Vedi Anche
<<<<<<< HEAD
<<<<<<< HEAD
- [Documentazione Principale](../../../docs/README.md)
- [Standard di Codice](../../../docs/standards/coding-standards.md)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
- [Documentazione Principale](../../../project_docs/README.md)
- [Standard di Codice](../../../project_docs/standards/coding-standards.md)
- [Best Practices](../../../project_docs/standards/best-practices.md)
=======
>>>>>>> laraxot/dev
- [Best Practices](../../../docs/standards/best-practices.md)
>>>>>>> entazione Principale](../../../project_docs/README.md)
- [Standard di Codice](../../../project_docs/standards/coding-standards.md)
- [Best Practices](../../../project_docs/standards/best-practices.md)
>>>>>>> laraxot/dev
=======
>>>>>>> 92912795 (.)
- [Best Practices](../../../docs/standards/best-practices.md) 
||||||| parent of 9a84589 (.):docs/archived/naming-rules-1.md
- [Documentazione Principale](../../../docs/README.md)
- [Standard di Codice](../../../docs/standards/coding-standards.md)
- [Best Practices](../../../docs/standards/best-practices.md)
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
=======
- [Documentazione Principale](../../../project_docs/README.md)
- [Standard di Codice](../../../project_docs/standards/coding-standards.md)
- [Best Practices](../../../project_docs/standards/best-practices.md)
>>>>>>> laraxot/dev
