<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Stubs;

use Livewire\Component;
<<<<<<< HEAD
use Modules\UI\Enums\TableLayoutEnum;
=======
>>>>>>> laraxot/dev
use Modules\UI\Filament\Traits\HasTableLayoutPage;

/**
 * Livewire Component stub con HasTableLayoutPage per TableLayoutToggle.
 */
final class UiCoverageLayoutLivewire extends Component
{
    use HasTableLayoutPage;

    public function render(): string
    {
        return '';
    }

    public function resetTable(): void
    {
        // ListRecords branch
    }
}
