<?php

declare(strict_types=1);

namespace Modules\UI\Tests;

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;
use Modules\UI\Providers\UIServiceProvider;
<<<<<<< HEAD
use Modules\UI\Tests\Support\EnsuresUiDatabaseSchema;
=======
>>>>>>> laraxot/dev
use Modules\User\Models\User;
use Modules\User\Providers\UserServiceProvider;
use Modules\Xot\Tests\XotBaseTestCase;

<<<<<<< HEAD
=======
use function Safe\file_get_contents;

>>>>>>> laraxot/dev
/**
 * Base test case for UI module.
 *
 * Uses shared sqlite from fixcity_data.sqlite (no RefreshDatabase).
<<<<<<< HEAD
=======
 * Pattern skip offline: Feature/`ui-db` skip se manca schema; Unit eseguiti.
>>>>>>> laraxot/dev
 */
abstract class TestCase extends XotBaseTestCase
{
    use DatabaseTransactions;
<<<<<<< HEAD
    use EnsuresUiDatabaseSchema;
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
        parent::setUp();

        $database = database_path('fixcity_data.sqlite');

        /** @var array<string, array<string, mixed>> $connections */
        $connections = config('database.connections', []);

        foreach (array_keys($connections) as $connection) {
            if ('sqlite' !== config("database.connections.{$connection}.driver")) {
                continue;
            }

            $this->app['config']->set("database.connections.{$connection}.database", $database);
            DB::purge($connection);
        }

        config(['auth.providers.users.model' => User::class]);

        $this->ensureUiSchema();
=======
        $this->prepareSharedFixcitySqliteForTesting();

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
>>>>>>> laraxot/dev
    }
}
