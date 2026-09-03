<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Stubs;

<<<<<<< HEAD
final class UiCoverageRecordWithThrowingState extends UiCoverageRecord
{
    /**
     * @return \Illuminate\Support\Collection<string, string>
     */
    public function getStatesFor(string $name): \Illuminate\Support\Collection
=======
use Illuminate\Support\Collection;

final class UiCoverageRecordWithThrowingState extends UiCoverageRecord
{
    /**
     * @return Collection<string, string>
     */
    public function getStatesFor(string $name): Collection
>>>>>>> laraxot/dev
    {
        return collect([
            'pending' => UiCoverageThrowingTransitionState::class,
            'done' => UiCoverageDoneState::class,
        ]);
    }
}
