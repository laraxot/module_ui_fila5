---
title: "Regole di Naming nei Moduli"
type: rule
tags: [naming, rules]
created: 2026-07-14
updated: 2026-07-14
qmd: "naming-rules-1 regole di naming nei moduli"
issues: ["https://github.com/provtv/base_ptv_fila5/issues/124"]
discussions: ["https://github.com/provtv/base_ptv_fila5/discussions/1"]
related:
  - "./advanced-form-components.md"
  - "./algolia-docsearch-1.md"
  - "./algolia-docsearch.md"
  - "./architecture-rules-1.md"
  - "./architecture-rules-2.md"
  - "./architecture-rules.md"
  - "./auth-pages.md"
  - "./base-components.md"
---

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
- [Documentazione Principale](../../../../docs/README.md)
- [Standard di Codice](../../../../docs/standards/coding-standards.md)
- [Best Practices](../../../../docs/standards/best-practices.md)
