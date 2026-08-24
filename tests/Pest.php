<?php

declare(strict_types=1);

<<<<<<< HEAD
use Modules\UI\Database\Factories\CategoryFactory;
use Modules\UI\Database\Factories\CollectionFactory;
use Modules\UI\Models\Category;
use Modules\UI\Models\Collection;

/*
 * Bootstrap Pest — modulo UI.
 * Ogni file test dichiara uses(\Modules\UI\Tests\TestCase::class).
 * Vietato expect()->extend() / uses()->in() qui (PHPStan method.internalClass).
 */

require_once __DIR__.'/../../Xot/tests/XotBasePest.php';

/**
 * @param array<string, mixed> $attributes
 */
function createCategory(array $attributes = []): Category
{
    return CategoryFactory::new()->createOne($attributes);
}

/**
 * @param array<string, mixed> $attributes
 */
function makeCategory(array $attributes = []): Category
{
    return CategoryFactory::new()->makeOne($attributes);
}

/**
 * @param array<string, mixed> $attributes
 */
function createCollection(array $attributes = []): Collection
{
    return CollectionFactory::new()->createOne($attributes);
}

/**
 * @param array<string, mixed> $attributes
 */
function makeCollection(array $attributes = []): Collection
{
    return CollectionFactory::new()->makeOne($attributes);
}
=======
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
 * - vietati `pest()->extend()` e `pest()->uses()` (PHPStan `method.internalClass`);
 * - vietata la cartella `tests/Support/` (ADR-002).
 */
>>>>>>> laraxot/dev
