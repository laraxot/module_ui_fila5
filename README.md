<<<<<<< HEAD
=======
<<<<<<< .merge_file_bioaTF
# 🎨 UI

[![Stars](https://img.shields.io/github/stars/laraxot/module_ui_fila5?style=plastic&color=yellow)]()
[![Forks](https://img.shields.io/github/forks/laraxot/module_ui_fila5?style=plastic&color=green)]()
[![Issues](https://img.shields.io/github/issues/laraxot/module_ui_fila5?style=plastic&color=red)]()
[![License](https://img.shields.io/github/license/laraxot/module_ui_fila5?style=plastic&color=blue)]()
[![Last Commit](https://img.shields.io/github/last-commit/laraxot/module_ui_fila5?style=plastic&color=purple)]()
[![Release](https://img.shields.io/github/v/release/laraxot/module_ui_fila5?style=plastic&color=orange&display_name=release)]()
[![PHP](https://img.shields.io/badge/PHP-8.4+-777BB4?style=for-the-badge)](https://php.net/)
[![Filament](https://img.shields.io/badge/Filament-5-ffab00?style=for-the-badge)](https://filamentphp.com/)
[![Laravel](https://img.shields.io/badge/Laravel-13-red?style=for-the-badge)](https://laravel.com/)
[![Architecture](https://img.shields.io/badge/Architecture-Modular-purple?style=plastic)]()

> **Componenti UI riutilizzabili e design system**  
> Componenti UI, layout, temi e pattern di design per Filament v5.

## 🎯 La Visione

Crediamo che il software debba essere **chiaro, modulare e potente**. Ogni modulo è stato pensato per risolvere problemi reali con soluzioni eleganti.

## Perché esiste questo modulo?

**Componenti UI, layout, temi e pattern di design per Filament v5.**

In un mondo dove la complessità è l'avere, abbiamo scritto codice semplice. Questo modulo non è solo una libreria: è una **promessa di qualità** mantenuta.

## 🧘 I Principi Zen (e la nostra filosofia)

1. **Semplicità vince sulla complessità** - Il codice chiaro è più potente di mille righe di commenti.
2. **Modulare è dare vita** - Ogni pezzo può vivere da solo, ma insieme diventa un universo.
3. **Documentare è onniscienza** - La mancanza di documentazione è la paura del futuro.
4. **Testare è fidarsi** - Non fidarsi del proprio codice è fidarsi del caos.
5. **Rifattorizzare è crescere** - Lentamente, incrementalmente, diventiamo migliori.

## 💎 Le sue Superpoteri

- **Architettura modulare** - Separazione netta tra logica di business e presentazione
- **PHPStan Level 10** - Massima sicurezza tipizzazione
- **PSR-12** - Codice che parla lo stesso linguaggio del mondo
- **Filament 5** - Admin panel d'eccellenza
- **XotBase** - Pattern consolidati che funzionano

## 🚀 Quick Start

```bash
# Installazione modulo
php artisan module:enable UI
php artisan migrate

# Sviluppo locale
cd laravel
composer dev
./vendor/bin/pest Modules/UI/tests
./vendor/bin/phpstan analyse Modules/UI --memory-limit=-1
```

Configuration is in `config/ui.php`. Adjust as needed.

## 🤝 Contributing

```bash
cd laravel
composer dev
./vendor/bin/pest Modules/UI/tests
./vendor/bin/phpstan analyse Modules/UI --memory-limit=-1
```

**Before submitting:**
- [ ] Tests pass
- [ ] PHPStan L10 passes
- [ ] Code style (Pint) applied
- [ ] Documentation updated

See [ARCHITECTURE.md](./ARCHITECTURE.md) for design decisions.

## 📖 Documentazione
=======
>>>>>>> laraxot/dev
---
id: module-ui-readme
title: "UI — Componenti Visuali Condivisi"
type: module-readme
category: module-documentation
module: UI
status: active
tags: [ui, blade, livewire, filament, accessibility]
created: 2026-09-14
updated: 2026-09-14
qmd: "ui blade livewire filament components accessibility module documentation"
issues:
  - "https://github.com/laraxot/module_ui_fila5/issues/33"
discussions:
  - "https://github.com/laraxot/module_ui_fila5/discussions/34"
related:
  - "./docs/"
sources: []
---

# 🎨 UI

> **Componenti visuali condivisi.**

Vocabolario riusabile Blade, Livewire e Filament senza logica di dominio.

## Cosa offre

- **Blade/Livewire** – componenti riusabili
- **Filament XotBase** – base per admin
- **Accessibilità** – a11y conforme
- **Tailwind/DaisyUI** – design system

## Confini architetturali

This module publishes contracts usable by other modules. Logic lives in `Actions`; admin UI follows Laraxot/XotBase.

## Integrazione rapida

```bash
cd laravel
php artisan module:list
./vendor/bin/phpstan analyse Modules/UI
```

See local docs for integration patterns.
<<<<<<< HEAD

## Documentazione

=======
>>>>>>> .merge_file_cjHipe

| Lingua | Link |
|--------|------|
| 🇮🇹 Presentazione | Questo file (`README.md`) |
| 🇬🇧 Business card | [docs/readme-en.md](./docs/readme-en.md) |
| 📚 Wiki tecnica | [./docs/wiki/](./docs/) |
| 🎯 Esempi | [docs/examples/](./docs/examples/) |
| 🏗️ Architettura | [ARCHITECTURE.md](./ARCHITECTURE.md) |
| 🧪 Testing | [TESTING.md](./TESTING.md) |
| 📜 Changelog | [CHANGELOG.md](./CHANGELOG.md) |

<<<<<<< .merge_file_bioaTF
## 🔧 Tecnologie chiave

**Stack principale:** Laravel 13, Filament 5, XotBase

**Keywords:** UI, Components, Design System

---

**Modulo** `UI` · **Laraxot** · PHPStan 10 · Filament 5
=======
>>>>>>> laraxot/dev
The technical map is in [docs/README.md](./docs/README.md).

- [Story BMAD del modulo](./docs/stories/)
- [Regole del progetto](../../../docs/wiki/)
- [README del progetto](../../README.md)

## Qualità e manutenzione

Maintain `declare(strict_types=1);` in PHP, adhere to project PHPStan config, and update docs when contracts evolve.

---

**Modulo** `ui` · **Laraxot ecosystem** · **Project-agnostic**
<<<<<<< HEAD
=======
>>>>>>> .merge_file_cjHipe
>>>>>>> laraxot/dev
