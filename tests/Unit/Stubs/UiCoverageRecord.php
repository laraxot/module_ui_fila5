<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Stubs;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Support\Collection;
>>>>>>> laraxot/dev

/**
 * Record Eloquent in-memory per test colonne stato (no DB).
 */
class UiCoverageRecord extends Model
{
    protected $guarded = [];

    /** @var array<int|string, self|null> */
    public static array $findMap = [];

    /**
     * @param  int|string  $id
     * @param  array<int, string>|string  $columns
     */
    public static function find($id, $columns = ['*']): ?self
    {
        if (! is_int($id) && ! is_string($id)) {
            return null;
        }

        return self::$findMap[$id] ?? null;
    }

    /**
     * @return list<string>
     */
    public function getDefaultStateFor(string $name): array
    {
        return ['pending', 'done'];
    }

    /**
<<<<<<< HEAD
     * @return array<string, string>|\Illuminate\Support\Collection<string, string>
     */
    public function getStatesFor(string $name): array|\Illuminate\Support\Collection
=======
     * @return array<string, string>|Collection<string, string>
     */
    public function getStatesFor(string $name): array|Collection
>>>>>>> laraxot/dev
    {
        return collect([
            'pending' => UiCoverageStateContract::class,
            'done' => UiCoverageDoneState::class,
        ]);
    }
}
