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
<<<<<<< .merge_file_6XS0RT
     * @param  int|string  $id
     * @param  array<int, string>|string  $columns
=======
     * <<<<<<< HEAD.
     *
     * @param int|string                $id
     * @param array<int, string>|string $columns
     *                                           =======
     * @param int|string                $id
     * @param array<int, string>|string $columns
     *                                           >>>>>>> laraxot/dev
>>>>>>> .merge_file_p7ncH1
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
