<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Actions\Table;

<<<<<<< .merge_file_hLGjG1
<<<<<<< HEAD
<<<<<<< .merge_file_jLI7gn
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_1hVEW5
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Modules\UI\Contracts\HasTableLayout;

final class TableLayoutToggleTableAction extends Action implements HasTableLayout
<<<<<<< .merge_file_hLGjG1
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Modules\UI\Contracts\HasTableLayout;

final class TableLayoutToggleTableAction extends Action implements HasTableLayout
=======
>>>>>>> 804451c (Lint)
use Filament\Resources\Pages\ListRecords;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Traits\HasTableLayoutPage;
use Modules\Xot\Filament\Actions\XotBaseAction;

final class TableLayoutToggleTableAction extends XotBaseAction implements HasTableLayout
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
final class TableLayoutToggleTableAction extends XotBaseAction implements HasTableLayout
>>>>>>> .merge_file_GrNmvm
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_1hVEW5
{
    use TableLayoutTrait;

    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< .merge_file_hLGjG1
<<<<<<< HEAD
<<<<<<< .merge_file_jLI7gn
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_1hVEW5
        $current = $this->getCurrentLayout();

        $this->label(__('ui::table_layout.actions.toggle.label'))
            ->tooltip($current->getLabel())
            ->color($current->getColor())
            ->icon($current->getIcon())
<<<<<<< .merge_file_hLGjG1
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_GrNmvm
=======
=======
>>>>>>> 804451c (Lint)
        $this->iconButton()
            ->label('')
            ->tooltip(fn (): string => $this->resolveTargetLayout()->getLabel())
            ->icon(fn (): string => $this->resolveTargetLayout()->getIcon())
<<<<<<< HEAD
<<<<<<< .merge_file_jLI7gn
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_GrNmvm
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_1hVEW5
            ->action($this->toggleLayout(...));
    }

    public static function getDefaultName(): string
    {
        return 'table_layout_toggle';
    }

<<<<<<< .merge_file_hLGjG1
<<<<<<< HEAD
<<<<<<< .merge_file_jLI7gn
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
    protected function toggleLayout(?ListRecords $livewire): void
=======
    protected function toggleLayout(): void
>>>>>>> .merge_file_GrNmvm
    {
        $livewire = $this->getLivewire();

        if (! is_object($livewire) || ! HasTableLayoutPage::isLayoutCapable($livewire)) {
            return;
        }

        $newLayout = $this->resolveLayout($livewire)->toggle();

        $this->setTableLayout($newLayout);
        HasTableLayoutPage::applyLayoutTo($livewire, $newLayout);

        if ($livewire instanceof ListRecords) {
            $livewire->resetTable();
        }
    }
<<<<<<< .merge_file_jLI7gn
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
    protected function toggleLayout(?ListRecords $livewire): void
    {
        $currentLayout = $this->getCurrentLayout();
        $newLayout = $currentLayout->toggle();

        $this->setTableLayout($newLayout);

        if ($livewire instanceof ListRecords) {
            $livewire->dispatch('$refresh');
        }
    }
=======
>>>>>>> 804451c (Lint)
    protected function toggleLayout(): void
=======
    protected function toggleLayout(?ListRecords $livewire): void
>>>>>>> .merge_file_1hVEW5
    {
        $currentLayout = $this->getCurrentLayout();
        $newLayout = $currentLayout->toggle();

        $this->setTableLayout($newLayout);

        if ($livewire instanceof ListRecords) {
<<<<<<< .merge_file_hLGjG1
            $livewire->resetTable();
        }
    }
<<<<<<< HEAD
=======
>>>>>>> .merge_file_GrNmvm
=======
>>>>>>> 804451c (Lint)

    private function resolveTargetLayout(?object $livewire = null): TableLayoutEnum
    {
        return $this->resolveLayout($livewire)->toggle();
    }

    private function resolveLayout(?object $livewire = null): TableLayoutEnum
    {
        if (is_object($livewire)) {
            $layout = HasTableLayoutPage::readLayoutFrom($livewire);

            if ($layout instanceof TableLayoutEnum) {
                return $layout;
            }
=======
            $livewire->dispatch('$refresh');
>>>>>>> .merge_file_1hVEW5
        }
    }
<<<<<<< .merge_file_hLGjG1
<<<<<<< HEAD
<<<<<<< .merge_file_jLI7gn
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_GrNmvm
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_1hVEW5
}
