<<<<<<< HEAD
=======
<<<<<<< .merge_file_sPeRki
=======
<<<<<<< .merge_file_OrA5GF
>>>>>>> .merge_file_HO3knZ
<<<<<<< HEAD
# 🎨 UI

=======
<<<<<<< .merge_file_sPeRki
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
# 🎨 UI

=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_HO3knZ
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
<<<<<<< HEAD
updated: 2026-09-22
=======
updated: 2026-09-14
>>>>>>> laraxot/dev
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

<<<<<<< HEAD
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
[![PHPStan Level 10](https://img.shields.io/badge/PHPStan-Level%2010-brightgreen.svg)](https://phpstan.org/)
[![PSR-12](https://img.shields.io/badge/Code-PSR--12-blue.svg)](https://www.php-fig.org/psr/psr-12/)
[![Strict Types](https://img.shields.io/badge/PHP-strict__types-1-informational.svg)](#)

> **Componenti UI riutilizzabili e design system**
> Componenti UI, layout, temi e pattern di design per Filament v5, senza logica di dominio.

## 🎯 La Visione

Crediamo che il software debba essere **chiaro, modulare e potente**. Ogni modulo è stato pensato per risolvere problemi reali con soluzioni eleganti.

## Perché esiste questo modulo?

**Componenti UI, layout, temi e pattern di design per Filament v5.**

In un mondo dove la complessità è l'avere, abbiamo scritto codice semplice. Questo modulo non è solo una libreria: è una **promessa di qualità** mantenuta.

## Cosa offre

- **Blade/Livewire** — componenti riusabili
- **Filament XotBase** — base per admin
- **Accessibilità** — a11y conforme
- **Tailwind/DaisyUI** — design system

## Confini architetturali

Questo modulo pubblica contratti usabili da altri moduli. La logica vive nelle `Actions`; la UI admin segue Laraxot/XotBase. Nessuna logica di dominio: quella resta nei moduli che la possiedono (vedi [docs/purpose.md](./docs/purpose.md)).

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
php artisan module:list
php artisan migrate

# Sviluppo locale
cd laravel
composer dev
./vendor/bin/pest Modules/UI/tests
./vendor/bin/phpstan analyse Modules/UI --memory-limit=-1
```

Configuration is in `config/config.php`. Adjust as needed.

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

See [docs/architecture.md](./docs/architecture.md) for design decisions.

## 📖 Documentazione

| Tipo | Link |
|--------|------|
| 🇮🇹 Presentazione | Questo file (`README.md`) |
| 🇬🇧 Business card | [docs/readme-en.md](./docs/readme-en.md) |
| 📚 Wiki tecnica | [./docs/](./docs/) |
| 🗺️ Mappa tecnica docs | [docs/README.md](./docs/README.md) |
| 🎯 Esempi | [docs/examples/](./docs/examples/) |
| 📋 Story BMAD | [docs/stories/](./docs/stories/) |
| 🏗️ Architettura | [docs/architecture.md](./docs/architecture.md) |
| 🧪 Testing | [docs/root-md-files/testing.md](./docs/root-md-files/testing.md) |
| 📜 Changelog | [CHANGELOG.md](./CHANGELOG.md) |
| 📐 Regole del progetto | [../../../docs/wiki/](../../../docs/wiki/) |
| 🏠 README del progetto | [../../../README.md](../../../README.md) |

## 🔧 Tecnologie chiave

**Stack principale:** Laravel 13, Filament 5, XotBase

**Keywords:** UI, Components, Design System

## Qualità e manutenzione

Mantenere `declare(strict_types=1);` in PHP, aderire alla configurazione PHPStan del progetto e aggiornare i docs quando i contratti evolvono.

---

**Modulo** `UI` · **Laraxot ecosystem** · **Project-agnostic** · PHPStan 10 · Filament 5
=======
<<<<<<< HEAD
> **Componenti visuali condivisi.**
=======
<<<<<<< .merge_file_sPeRki
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
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

>>>>>>> .merge_file_ox0TQy
>>>>>>> .merge_file_HO3knZ
[![Domain-UI](https://img.shields.io/badge/Domain-UI%20Kit-7B1FA2.svg)](#)
[![Laravel 12](https://img.shields.io/badge/Laravel-12-red.svg)](https://laravel.com/)
[![Filament 5](https://img.shields.io/badge/Filament-5-ffab00.svg)](https://filamentphp.com/)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4+-777BB4.svg)](https://php.net/)
[![PHPStan Level 10](https://img.shields.io/badge/PHPStan-Level%2010-brightgreen.svg)](https://phpstan.org/)
[![PSR-12](https://img.shields.io/badge/Code-PSR--12-blue.svg)](https://www.php-fig.org/psr/psr-12/)
[![Strict Types](https://img.shields.io/badge/PHP-strict__types-1-informational.svg)](#)
[![Laraxot Modules](https://img.shields.io/badge/Architecture-Modular-purple.svg)](#)
<<<<<<< .merge_file_sPeRki
=======
<<<<<<< .merge_file_OrA5GF
<<<<<<< HEAD
[![FixCity Platform](https://img.shields.io/badge/Platform-FixCity-008758.svg)](#)
=======
>>>>>>> .merge_file_HO3knZ
<<<<<<< HEAD
[![FixCity Platform](https://img.shields.io/badge/Platform-FixCity-008758.svg)](#)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ox0TQy

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

## Documentazione

The technical map is in [docs/README.md](./docs/README.md).

- [Story BMAD del modulo](./docs/stories/)
- [Regole del progetto](../../../docs/wiki/)
- [README del progetto](../../README.md)

## Qualità e manutenzione

Maintain `declare(strict_types=1);` in PHP, adhere to project PHPStan config, and update docs when contracts evolve.

---

<<<<<<< .merge_file_OrA5GF
**Modulo** `ui` · **Laraxot** · **FixCity Platform** · PHPStan 10 · Filament 5
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
[![FixCity Platform](https://img.shields.io/badge/Platform-FixCity-008758.svg)](#)
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
[![<nome progetto> Platform](https://img.shields.io/badge/Platform-<nome progetto>-008758.svg)](#)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
[![Current Platform](https://img.shields.io/badge/Platform-progetto corrente-008758.svg)](#)
=======
[![<nome progetto> Platform](https://img.shields.io/badge/Platform-<nome progetto>-008758.svg)](#)
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev

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

## Documentazione

The technical map is in [docs/README.md](./docs/README.md).

- [Story BMAD del modulo](./docs/stories/)
- [Regole del progetto](../../../docs/wiki/)
- [README del progetto](../../README.md)

## Qualità e manutenzione

Maintain `declare(strict_types=1);` in PHP, adhere to project PHPStan config, and update docs when contracts evolve.

---

<<<<<<< HEAD
**Modulo** `ui` · **Laraxot ecosystem** · **Project-agnostic**
=======
<<<<<<< HEAD
**Modulo** `ui` · **Laraxot** · **FixCity Platform** · PHPStan 10 · Filament 5
=======
<<<<<<< HEAD
<<<<<<< .merge_file_sPeRki
[![FixCity Platform](https://img.shields.io/badge/Platform-FixCity-008758.svg)](#)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
[![<nome progetto> Platform](https://img.shields.io/badge/Platform-<nome progetto>-008758.svg)](#)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
[![Current Platform](https://img.shields.io/badge/Platform-progetto corrente-008758.svg)](#)
=======
[![<nome progetto> Platform](https://img.shields.io/badge/Platform-<nome progetto>-008758.svg)](#)
=======
<<<<<<< HEAD
=======
**Modulo** `ui` · **Laraxot** · **<nome progetto> Platform** · PHPStan 10 · Filament 5
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
**Modulo** `ui` · **Laraxot** · **Current Platform** · PHPStan 10 · Filament 5
=======
**Modulo** `ui` · **Laraxot** · **<nome progetto> Platform** · PHPStan 10 · Filament 5
>>>>>>> .merge_file_HO3knZ
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_sPeRki

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

## Documentazione

The technical map is in [docs/README.md](./docs/README.md).

- [Story BMAD del modulo](./docs/stories/)
- [Regole del progetto](../../../docs/wiki/)
- [README del progetto](../../README.md)

## Qualità e manutenzione

Maintain `declare(strict_types=1);` in PHP, adhere to project PHPStan config, and update docs when contracts evolve.

---

<<<<<<< HEAD
**Modulo** `ui` · **Laraxot ecosystem** · **Project-agnostic**
=======
<<<<<<< HEAD
**Modulo** `ui` · **Laraxot** · **FixCity Platform** · PHPStan 10 · Filament 5
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
**Modulo** `ui` · **Laraxot** · **<nome progetto> Platform** · PHPStan 10 · Filament 5
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
**Modulo** `ui` · **Laraxot** · **Current Platform** · PHPStan 10 · Filament 5
=======
**Modulo** `ui` · **Laraxot** · **<nome progetto> Platform** · PHPStan 10 · Filament 5
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
=======
>>>>>>> .merge_file_HO3knZ
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< .merge_file_sPeRki
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
=======
**Modulo** `ui` · **Laraxot ecosystem** · **Project-agnostic** · PHPStan 10 · Filament 5
>>>>>>> .merge_file_ox0TQy
>>>>>>> .merge_file_HO3knZ
>>>>>>> laraxot/dev
