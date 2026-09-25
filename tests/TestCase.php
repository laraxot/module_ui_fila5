<?php

declare(strict_types=1);

namespace Modules\UI\Tests;

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
<<<<<<< .merge_file_snOgZN
<<<<<<< HEAD
=======
<<<<<<< .merge_file_1H3Ijs
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
use Mockery\Expectation;
use Mockery\LegacyMockInterface;
use Mockery\MockInterface;
>>>>>>> .merge_file_X6Dpj0
>>>>>>> .merge_file_L5SAAq
use Modules\UI\Providers\UIServiceProvider;
use Modules\User\Models\User;
use Modules\User\Providers\UserServiceProvider;
use Modules\Xot\Tests\XotBaseTestCase;

<<<<<<< .merge_file_snOgZN
=======
=======
<<<<<<< .merge_file_1H3Ijs
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_L5SAAq
=======
>>>>>>> laraxot/dev
use Mockery\Expectation;
use Mockery\LegacyMockInterface;
use Mockery\MockInterface;
use Modules\UI\Providers\UIServiceProvider;
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\UI\Tests\Support\EnsuresUiDatabaseSchema;
use Modules\User\Models\User;
>>>>>>> laraxot/dev
use Modules\User\Providers\UserServiceProvider;
use Modules\Xot\Tests\XotBaseTestCase;

use function Safe\file_get_contents;
<<<<<<< HEAD
use Modules\User\Models\User;

<<<<<<< .merge_file_snOgZN
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use function Safe\file_get_contents;

>>>>>>> .merge_file_X6Dpj0
>>>>>>> .merge_file_L5SAAq
=======

>>>>>>> laraxot/dev
/**
 * Base test case for UI module.
 *
 * Uses shared sqlite from fixcity_data.sqlite (no RefreshDatabase).
<<<<<<< HEAD
<<<<<<< .merge_file_snOgZN
=======
<<<<<<< .merge_file_1H3Ijs
<<<<<<< HEAD
=======
<<<<<<< HEAD
 * Pattern skip offline: Feature/`ui-db` skip se manca schema; Unit eseguiti.
=======
>>>>>>> .merge_file_L5SAAq
<<<<<<< HEAD
=======
 * Pattern skip offline: Feature/`ui-db` skip se manca schema; Unit eseguiti.
>>>>>>> laraxot/dev
<<<<<<< .merge_file_snOgZN
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
 * Pattern skip offline: Feature/`ui-db` skip se manca schema; Unit eseguiti.
>>>>>>> .merge_file_X6Dpj0
>>>>>>> .merge_file_L5SAAq
=======
 * Pattern skip offline: Feature/`ui-db` skip se manca schema; Unit eseguiti.
>>>>>>> laraxot/dev
 */
abstract class TestCase extends XotBaseTestCase
{
    use DatabaseTransactions;
<<<<<<< HEAD
<<<<<<< .merge_file_snOgZN
<<<<<<< HEAD
    use EnsuresUiDatabaseSchema;
=======
=======
<<<<<<< .merge_file_1H3Ijs
<<<<<<< HEAD
    use EnsuresUiDatabaseSchema;
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
    use EnsuresUiDatabaseSchema;
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_X6Dpj0
>>>>>>> .merge_file_L5SAAq
=======
    use EnsuresUiDatabaseSchema;
>>>>>>> laraxot/dev

    /**
     * Restringe il tipo di ritorno unione di shouldReceive() per PHPStan.
     *
     * Viveva come funzione libera in tre file di test, ognuno con una guardia
     * function_exists('expectMethod') che non funzionava: la funzione stava in un
     * namespace, e function_exists senza namespace cerca quella globale. Il secondo
     * file caricato faceva fallire l'intera suite con un "Cannot redeclare".
     *
     * Con un singolo metodo shouldReceive() restituisce una Expectation
     * (il PHPDoc Mockery lo garantisce: `$methodNames is list{} ? HigherOrderMessage : Expectation`),
     * che espone with()/andReturnUsing() ecc. — ExpectationInterface no.
     */
    public static function expectMethod(LegacyMockInterface|MockInterface $mock, string $method): Expectation
    {
        /** @var Expectation $expectation */
        $expectation = $mock->shouldReceive($method);

        return $expectation;
    }
<<<<<<< HEAD
<<<<<<< .merge_file_snOgZN
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_1H3Ijs
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_X6Dpj0
>>>>>>> .merge_file_L5SAAq
=======
>>>>>>> laraxot/dev

    /** @var list<string> */
    protected $connectionsToTransact = ['xot', 'sqlite', 'user'];

    /**
     * @return array<int, class-string>
     */
    protected function getPackageProviders(Application $app): array
    {
        return [
            ...parent::getPackageProviders($app),
            UserServiceProvider::class,
            UIServiceProvider::class,
        ];
    }

    protected function setUp(): void
    {
<<<<<<< HEAD
<<<<<<< .merge_file_snOgZN
<<<<<<< HEAD
=======
<<<<<<< .merge_file_1H3Ijs
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
        $this->prepareSharedSqliteForTesting();

>>>>>>> .merge_file_X6Dpj0
>>>>>>> .merge_file_L5SAAq
        parent::setUp();

        config(['auth.providers.users.model' => User::class]);

        if ($this->shouldSkipForMissingUiDb()) {
            $this->markTestSkipped('DB `ui` (themes/categories) non disponibile in ambiente test condiviso.');
        }
    }

    /**
     * Salta quando manca lo schema UI, salvo test Unit o marcati `no-ui-db`.
     * I test DB-dependent in Unit usano gruppo `ui-db`.
     */
    protected function shouldSkipForMissingUiDb(): bool
    {
        if (! static::uiDbUnavailable()) {
            return false;
        }

        $testFile = $this->resolvePestTestFile();

        if (null !== $testFile && is_file($testFile)) {
            $source = file_get_contents($testFile);
            if (str_contains($source, "group('no-ui-db')")) {
                return false;
            }
            if (str_contains($source, "group('ui-db')")) {
                return true;
            }
        }

        if (null !== $testFile && str_contains($testFile, '/tests/Unit/')) {
            return false;
        }

        return true;
    }

    private function resolvePestTestFile(): ?string
    {
        $class = static::class;

        if (property_exists($class, '__filename')) {
            /** @var string $filename */
            $filename = $class::$__filename;

            return $filename;
        }

        $file = (new \ReflectionClass($this))->getFileName();

        return false !== $file ? $file : null;
    }

<<<<<<< .merge_file_1H3Ijs
        $this->ensureUiSchema();
<<<<<<< .merge_file_snOgZN
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_L5SAAq
        $this->prepareSharedSqliteForTesting();

        parent::setUp();
=======
        $this->prepareSharedSqliteForTesting();

        parent::setUp();

        $this->ensureUiSchema();
>>>>>>> laraxot/dev

        config(['auth.providers.users.model' => User::class]);

        if ($this->shouldSkipForMissingUiDb()) {
            $this->markTestSkipped('DB `ui` (themes/categories) non disponibile in ambiente test condiviso.');
        }
    }

    /**
     * Salta quando manca lo schema UI, salvo test Unit o marcati `no-ui-db`.
     * I test DB-dependent in Unit usano gruppo `ui-db`.
     */
    protected function shouldSkipForMissingUiDb(): bool
    {
        if (! static::uiDbUnavailable()) {
            return false;
        }

        $testFile = $this->resolvePestTestFile();

        if ($testFile !== null && is_file($testFile)) {
            $source = file_get_contents($testFile);
            if (str_contains($source, "group('no-ui-db')")) {
                return false;
            }
            if (str_contains($source, "group('ui-db')")) {
                return true;
            }
        }

        if ($testFile !== null && str_contains($testFile, '/tests/Unit/')) {
            return false;
        }

        return true;
    }

    private function resolvePestTestFile(): ?string
    {
        $class = static::class;

        if (property_exists($class, '__filename')) {
            /** @var string $filename */
            $filename = $class::$__filename;

            return $filename;
        }

        $file = (new \ReflectionClass($this))->getFileName();

        return $file !== false ? $file : null;
    }

<<<<<<< HEAD
<<<<<<< .merge_file_snOgZN
=======
=======
>>>>>>> .merge_file_X6Dpj0
>>>>>>> .merge_file_L5SAAq
=======
>>>>>>> laraxot/dev
    /**
     * Lo sqlite condiviso non contiene sempre le tabelle themes/categories.
     * fixcity_data.sqlite = offline anche se somehow le tabelle UI ci sono.
     */
    public static function uiDbUnavailable(): bool
    {
        try {
            $connection = DB::connection('xot');
            $connection->getPdo();
            $database = (string) $connection->getDatabaseName();
            if (str_contains($database, 'fixcity_data.sqlite')) {
                return true;
            }

            $schema = $connection->getSchemaBuilder();

            foreach (['themes', 'categories', 'collections'] as $table) {
                if (! $schema->hasTable($table)) {
                    return true;
                }
            }

            return false;
        } catch (\Throwable) {
            return true;
        }
<<<<<<< HEAD
<<<<<<< .merge_file_snOgZN
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_1H3Ijs
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_X6Dpj0
>>>>>>> .merge_file_L5SAAq
=======
>>>>>>> laraxot/dev
    }
}
