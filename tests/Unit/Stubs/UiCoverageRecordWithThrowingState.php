<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Stubs;

final class UiCoverageRecordWithThrowingState extends UiCoverageRecord
{
    /**
     * @return \Illuminate\Support\Collection<string, string>
     */
    public function getStatesFor(string $name): \Illuminate\Support\Collection
    {
        return collect([
            'pending' => UiCoverageThrowingTransitionState::class,
            'done' => UiCoverageDoneState::class,
        ]);
    }
}
