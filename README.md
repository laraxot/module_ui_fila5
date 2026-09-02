# 🎨 UI — il vocabolario visivo, non il vestito

[![Dominio](https://img.shields.io/badge/dominio-design%20system-7B1FA2.svg)](#)
[![PHP](https://img.shields.io/badge/PHP-%5E8.3-777BB4.svg)](../../composer.json)
[![Laravel](https://img.shields.io/badge/Laravel-%5E13.0-FF2D20.svg)](../../composer.json)
[![Filament](https://img.shields.io/badge/Filament-%5E5.0-ffab00.svg)](../../composer.json)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%20max%2C%200%20errori-brightgreen.svg)](../../phpstan.neon)
[![strict_types](https://img.shields.io/badge/declare-strict__types%3D1-informational.svg)](#)

> Badge **misurati il 2026-09-02**: `./vendor/bin/phpstan analyse Modules/UI` →
> `[OK] No errors`. Versioni da `composer.json`. Livello da `phpstan.neon`
> (`level: max`): il progetto **vieta** di passare `--level`.

---

## Perché

Il tema decide **come appare** questo progetto. UI decide **cosa esiste** come mattone.

La distinzione non è accademica: un componente in UI è riusabile in un altro progetto
dell'ecosistema, uno nel tema no. Se un pezzo generico finisce nel tema, il progetto
successivo lo riscrive; se un pezzo specifico finisce in UI, lo importa chi non lo
vuole. **Il confine è la riusabilità, non la comodità del momento.**

Zero Resource, 11 Widget, 107 file PHP: questo modulo non ha dominio: è fatto di pezzi
che altri usano.

## Logica

- Component library Blade/Livewire riusabile.
- Componenti Filament custom su base `XotBase*`.
- Token e pattern documentati, integrazione Tailwind/DaisyUI.

## Filosofia

**Si estrae solo dopo aver misurato la duplicazione** (`grep -rl`), mai in previsione.
Un componente creato per un solo consumatore è un'astrazione senza evidenza, e va
mantenuta comunque.

E una trappola verificata: una `Section` estratta **senza heading di default** perde il
titolo rispetto alla versione inline. Nessun errore, nessun log — solo un titolo che
sparisce.

**L'accessibilità è il contributo più alto che questo modulo può dare.** Un portale di
pubblica amministrazione italiana ha obblighi di accessibilità: se non vive nei
componenti, va rifatta in ogni pagina — cioè non si fa.

## Regola di dipendenza

La freccia è unidirezionale:

```
Xot ← UI ← User, Tenant, Activity, …
```

- UI **non dipende** da moduli di dominio.
- I moduli di dominio **possono** dipendere da UI.
- Un componente che sa cos'è una scheda non è un componente di UI: è di `Ptv`.

Dettagli: [`docs/dependency-rules.md`](./docs/dependency-rules.md)

## Confini

Non appartengono a UI: il tema e le scelte cromatiche di questo progetto (→ `Themes/`),
qualunque regola di dominio, le classi base Filament (→ `Xot`).

## Scopo e confini

UI è il vocabolario condiviso dell'interfaccia: il posto dove un blocco di markup o di
campi smette di essere copiato e diventa una parola che tutti i moduli pronunciano allo
stesso modo. Misurato il 2026-09-02: 9 moduli la importano (40 file), l'export più usato
è `Filament\Tables\Columns\GroupColumn` (29 file), le dipendenze uscenti sono 73 file
verso `Xot` e 1 verso `User` — la freccia dichiarata sopra regge. I tre temi non la
importano affatto (0 file su 3), e dei 243 componenti Blade uno solo è invocato
dall'esterno.

Confini, misure e le cinque mosse concrete: [`docs/scopo.md`](./docs/scopo.md).

## Documentazione

| Documento | Cosa contiene |
|---|---|
| [`docs/purpose.md`](./docs/purpose.md) | scopo, come raggiungerlo meglio, confini |
| [`docs/dependency-rules.md`](./docs/dependency-rules.md) | la regola della freccia |
| [`docs/`](./docs/) | wiki tecnica |

## Stato verificato il 2026-09-02

| Verifica | Comando | Esito |
|---|---|---|
| Analisi statica | `./vendor/bin/phpstan analyse Modules/UI` | `[OK] No errors` |
| Versioni | `composer.json` | PHP `^8.3`, Laravel `^13.0`, Filament `^5.0` |

Non ancora misurati in questa revisione: copertura test, PHPMD, PHPInsights.
