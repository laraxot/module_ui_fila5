<?php

declare(strict_types=1);
<<<<<<< .merge_file_tmOuwE

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
use Modules\UI\Database\Factories\CategoryFactory;
use Modules\UI\Database\Factories\CollectionFactory;
use Modules\UI\Models\Category;
use Modules\UI\Models\Collection;

=======
>>>>>>> .merge_file_PyKFmt
/*
 * Bootstrap Pest — modulo UI.
 *
 * Questo file NON viene caricato. `Pest\Bootstrappers\BootFiles` legge `Pest.php`,
 * `Helpers.php` ed `Expectations.php` da un solo percorso per run — quello della root —
 * quindi ogni funzione dichiarata qui è codice morto e i test che la chiamano falliscono
 * con `Call to undefined function`.
 *
 * Regole, non negoziabili:
 * - zero funzioni libere qui dentro (`grep -c '^function ' ` deve dare 0);
 * - helper condivisi: metodi statici su `Modules\Xot\Tests\XotBasePest` (autoload PSR-4,
 *   niente `require_once`);
 * - helper di dominio: metodi statici su `Modules\UI\Tests\TestCase`;
 * - ogni file di test dichiara `uses(\Modules\UI\Tests\TestCase::class)` in testa —
 *   un `uses()->in(...)` scritto qui non verrebbe applicato;
 * - `pest()->extend(TestCase::class)->in(...)` e' la forma consigliata (il divieto
 *   storico per `method.internalClass` e' decaduto con pest-plugin-phpstan, story
 *   XOT-5.41); vincolo XOR con gli `uses()` per-file (`TestCaseAlreadyInUse`):
 *   migrare per directory, non mescolare;
 * - vietata la cartella `tests/Support/` (ADR-002).
 */
<<<<<<< .merge_file_tmOuwE
function makeCollection(array $attributes = []): Collection
{
    return CollectionFactory::new()->makeOne($attributes);
}
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
/*
 * Bootstrap Pest — modulo UI.
 *
 * Questo file NON viene caricato. `Pest\Bootstrappers\BootFiles` legge `Pest.php`,
 * `Helpers.php` ed `Expectations.php` da un solo percorso per run — quello della root —
 * quindi ogni funzione dichiarata qui è codice morto e i test che la chiamano falliscono
 * con `Call to undefined function`.
 *
 * Regole, non negoziabili:
 * - zero funzioni libere qui dentro (`grep -c '^function ' ` deve dare 0);
 * - helper condivisi: metodi statici su `Modules\Xot\Tests\XotBasePest` (autoload PSR-4,
 *   niente `require_once`);
 * - helper di dominio: metodi statici su `Modules\UI\Tests\TestCase`;
 * - ogni file di test dichiara `uses(\Modules\UI\Tests\TestCase::class)` in testa —
 *   un `uses()->in(...)` scritto qui non verrebbe applicato;
 * - `pest()->extend(TestCase::class)->in(...)` e' la forma consigliata (il divieto
 *   storico per `method.internalClass` e' decaduto con pest-plugin-phpstan, story
 *   XOT-5.41); vincolo XOR con gli `uses()` per-file (`TestCaseAlreadyInUse`):
 *   migrare per directory, non mescolare;
 * - vietata la cartella `tests/Support/` (ADR-002).
 */
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_PyKFmt
