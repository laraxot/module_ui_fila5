<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Stubs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Record Eloquent in-memory per test colonne stato (no DB).
 */
class UiCoverageRecord extends Model
{
    protected $guarded = [];

    /** @var array<int|string, self|null> */
    public static array $findMap = [];

    /**
<<<<<<< HEAD
<<<<<<< .merge_file_X7yBX7
     * @param  int|string  $id
     * @param  array<int, string>|string  $columns
=======
     * <<<<<<< HEAD.
     *
     * @param int|string                $id
     * @param array<int, string>|string $columns
     *                                           =======
     *                                           <<<<<<< .merge_file_L3CkgX
     * @param int|string                $id
     * @param array<int, string>|string $columns
     *                                           =======
     *                                           <<<<<<< .merge_file_I3uqQa
     * @param int|string                $id
     * @param array<int, string>|string $columns
     *                                           =======
     *                                           <<<<<<< HEAD
     * @param int|string                $id
     * @param array<int, string>|string $columns
     *                                           =======
     * @param int|string                $id
     * @param array<int, string>|string $columns
     *                                           >>>>>>> laraxot/dev
     *                                           >>>>>>> .merge_file_37ZtLp
     *                                           >>>>>>> .merge_file_Djbvpg
     *                                           >>>>>>> laraxot/dev
>>>>>>> .merge_file_FxsD0H
=======
     * @param  int|string  $id
     * @param  array<int, string>|string  $columns
>>>>>>> laraxot/dev
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
     * @return array<string, string>|Collection<string, string>
     */
    public function getStatesFor(string $name): array|Collection
    {
        return collect([
            'pending' => UiCoverageStateContract::class,
            'done' => UiCoverageDoneState::class,
        ]);
    }
}
