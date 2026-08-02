# UI Module — Mappa Graphify

**Versione:** 1.0.0 | **Modulo:** UI | **Data:** 2026-08-02

---

## 📌 Cosa fa il modulo UI

Il modulo **UI** gestisce:
- Libreria di componenti UI condivisi, widget Filament custom, layout Blade ed Alpine.js integration

---

## 🏗️ Architettura Essenziale

### Entry Points

| Tipo | Classe | Path |
|------|--------|------|
| **Model** | `FieldOption` | `app/Models/FieldOption.php` |
| **Model** | `Collection` | `app/Models/Collection.php` |
| **Model** | `Category` | `app/Models/Category.php` |
| **Action** | `GetUserDataAction` | `app/Actions/GetUserDataAction.php` |
| **Action** | `GetAllIconsAction` | `app/Actions/GetAllIconsAction.php` |
| **Action** | `ApplyCalendarToPanelAction` | `app/Actions/ApplyCalendarToPanelAction.php` |
| **Filament** | `TreeColumn` | `app/Filament/TreeColumn.php` |
| **Filament** | `GroupColumn` | `app/Filament/GroupColumn.php` |
| **Filament** | `IconStateGroupColumn` | `app/Filament/IconStateGroupColumn.php` |

### Dependencies (Incoming)

```
Tutti i moduli → UI (render componenti di interfaccia)
```

### Dependencies (Outgoing)

```
UI → Themes (fornitura componenti base)
```

---

## 📊 Grafo Locale (Query Rapide)

### Scoprire Entità Core

```bash
graphify query "UI module models and actions"
```

### Tracciare Flussi

```bash
graphify path --from "FieldOption" --to "GetUserDataAction"
```

### Trovare Dipendenze

```bash
graphify query "UI dependencies"
```

---

## 🎯 Task Comuni + Graphify

### Task 1: Estendere o Modificare Architettura UI

**Domanda Graphify:**
```bash
graphify query "UI module architecture and entry points"
```

**Workflow:**
1. Ispeziona classi in `app/Models` o `app/Actions`
2. Esegui query `graphify query "UI dependencies"` per verificare impatto
3. Esegui test del modulo

---

## 📋 Test Coverage Map

```bash
graphify query "UI module test coverage"
```

---

## 🚀 Comandi Rapidi

```bash
# Esplora architettura
graphify query "UI module architecture"

# Test coverage
graphify query "UI test coverage"

# Complexity
graphify query "UI high complexity"
```

---

## 📚 Riferimenti

- **Graphify Central:** `docs/graphify-integration.md`
- **Module Discipline:** `docs/wiki/rules/module-naming-discipline.md`

---

**Responsabile:** @marco76tv | **Last updated:** 2026-08-02
