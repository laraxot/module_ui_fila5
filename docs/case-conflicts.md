# Case-Insensitive File Conflicts

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_r1C6Aj
=======
<<<<<<< .merge_file_l1oehm
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
Su Linux i file `Foo.md` e `foo.md` coesistono; su Windows/macOS collidono. Una sola variante per coppia.

File duplicati rilevati nel modulo `UI`:
## Risolto (2026-08-18)
Uniformare ciascuna coppia scegliendo un'unica versione (in genere `README.md`, `CONTRIBUTING.md`, ecc.) e rimuovere i duplicati.
Su Linux i file `Foo.md` e `foo.md` coesistono; su Windows/macOS collidono. Una sola variante per coppia.
## Risolto (2026-08-18)

| Coppia | Tenuto | Perché |
|---|---|---|
| `.github/CONTRIBUTING.md` / `contributing.md` | `CONTRIBUTING.md` | GitHub legge quel nome; il minuscolo era lo stesso testo con marker |
| `.github/SECURITY.md` / `security.md` | `SECURITY.md` | identici; GitHub |
| `docs/filament/ListRecords.md` / `listrecords.md` | `listrecords.md` | docs kebab-case; contenuto canonico ripulito dai marker |
| `docs/CHANGELOG.md` / `changelog.md` | `changelog.md` | docs minuscolo; semantic-release |
| `docs/wiki/SCHEMA.md` / `schema.md` | `schema.md` | SCHEMA era stub/marker verso schema.md |
| Altri `ON-DEMAND-PATTERN.md`, `AGENTS.md`, `00-INDEX.md`, … | variante minuscola | identici o superset; nessun contenuto unico nel maiuscolo |

`docs/README.md` resta l'eccezione maiuscola prevista.

## Ancora aperti

Nessun marker di conflitto a inizio riga nel repo (`git grep`). I Feature Pest Filament del modulo User possono contendere il database di testing con altri suite in parallelo.
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_6tFZlQ
>>>>>>> .merge_file_6wPjxe
File duplicati rilevati nel modulo `UI`:

- `Modules/UI/.github`: `CONTRIBUTING.md`, `contributing.md`
- `Modules/UI/.github`: `SECURITY.md`, `security.md`
- `Modules/UI/docs`: `README.md`, `readme.md`
- `Modules/UI/docs/filament`: `ListRecords.md`, `listrecords.md`

Uniformare ciascuna coppia scegliendo un'unica versione (in genere `README.md`, `CONTRIBUTING.md`, ecc.) e rimuovere i duplicati.
<<<<<<< .merge_file_r1C6Aj
=======
=======
<<<<<<< .merge_file_l1oehm
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_6wPjxe
Su Linux i file `Foo.md` e `foo.md` coesistono; su Windows/macOS collidono. Una sola variante per coppia.

File duplicati rilevati nel modulo `UI`:
## Risolto (2026-08-18)
Uniformare ciascuna coppia scegliendo un'unica versione (in genere `README.md`, `CONTRIBUTING.md`, ecc.) e rimuovere i duplicati.
Su Linux i file `Foo.md` e `foo.md` coesistono; su Windows/macOS collidono. Una sola variante per coppia.
## Risolto (2026-08-18)

| Coppia | Tenuto | Perché |
|---|---|---|
| `.github/CONTRIBUTING.md` / `contributing.md` | `CONTRIBUTING.md` | GitHub legge quel nome; il minuscolo era lo stesso testo con marker |
| `.github/SECURITY.md` / `security.md` | `SECURITY.md` | identici; GitHub |
| `docs/filament/ListRecords.md` / `listrecords.md` | `listrecords.md` | docs kebab-case; contenuto canonico ripulito dai marker |
| `docs/CHANGELOG.md` / `changelog.md` | `changelog.md` | docs minuscolo; semantic-release |
| `docs/wiki/SCHEMA.md` / `schema.md` | `schema.md` | SCHEMA era stub/marker verso schema.md |
| Altri `ON-DEMAND-PATTERN.md`, `AGENTS.md`, `00-INDEX.md`, … | variante minuscola | identici o superset; nessun contenuto unico nel maiuscolo |

`docs/README.md` resta l'eccezione maiuscola prevista.

## Ancora aperti

Nessun marker di conflitto a inizio riga nel repo (`git grep`). I Feature Pest Filament del modulo User possono contendere il database di testing con altri suite in parallelo.
<<<<<<< .merge_file_r1C6Aj
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_6tFZlQ
>>>>>>> .merge_file_6wPjxe
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
