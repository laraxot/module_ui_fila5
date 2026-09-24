<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Actions\Table;

<<<<<<< HEAD
=======
<<<<<<< .merge_file_rEbfRz
<<<<<<< HEAD
=======
<<<<<<< .merge_file_jLI7gn
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_v5MH1K
use Filament\Actions\Action;
=======
>>>>>>> .merge_file_GrNmvm
use Filament\Resources\Pages\ListRecords;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Traits\HasTableLayoutPage;
use Modules\Xot\Filament\Actions\XotBaseAction;

<<<<<<< .merge_file_jLI7gn
final class TableLayoutToggleTableAction extends Action implements HasTableLayout
<<<<<<< .merge_file_rEbfRz
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_v5MH1K
>>>>>>> laraxot/dev
use Filament\Resources\Pages\ListRecords;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Traits\HasTableLayoutPage;
use Modules\Xot\Filament\Actions\XotBaseAction;

final class TableLayoutToggleTableAction extends XotBaseAction implements HasTableLayout
<<<<<<< HEAD
=======
<<<<<<< .merge_file_rEbfRz
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
final class TableLayoutToggleTableAction extends XotBaseAction implements HasTableLayout
>>>>>>> .merge_file_GrNmvm
>>>>>>> .merge_file_v5MH1K
>>>>>>> laraxot/dev
{
    use TableLayoutTrait;

    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
=======
<<<<<<< .merge_file_rEbfRz
<<<<<<< HEAD
=======
<<<<<<< .merge_file_jLI7gn
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_v5MH1K
        $current = $this->getCurrentLayout();

        $this->label(__('ui::table_layout.actions.toggle.label'))
            ->tooltip($current->getLabel())
            ->color($current->getColor())
            ->icon($current->getIcon())
<<<<<<< .merge_file_rEbfRz
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_GrNmvm
>>>>>>> .merge_file_v5MH1K
>>>>>>> laraxot/dev
        $this->iconButton()
            ->label('')
            ->tooltip(fn (): string => $this->resolveTargetLayout()->getLabel())
            ->icon(fn (): string => $this->resolveTargetLayout()->getIcon())
<<<<<<< HEAD
=======
<<<<<<< .merge_file_rEbfRz
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_jLI7gn
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_GrNmvm
>>>>>>> .merge_file_v5MH1K
>>>>>>> laraxot/dev
            ->action($this->toggleLayout(...));
    }

    public static function getDefaultName(): string
    {
        return 'table_layout_toggle';
    }

<<<<<<< HEAD
=======
<<<<<<< .merge_file_rEbfRz
<<<<<<< HEAD
=======
<<<<<<< .merge_file_jLI7gn
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_v5MH1K
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
    protected function toggleLayout(): void
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
=======
>>>>>>> .merge_file_GrNmvm

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
        }

        $component = $this->getLivewire();

        if (is_object($component)) {
            $layout = HasTableLayoutPage::readLayoutFrom($component);

            if ($layout instanceof TableLayoutEnum) {
                return $layout;
            }
        }

        return $this->getCurrentLayout();
    }
<<<<<<< .merge_file_rEbfRz
=======
>>>>>>> laraxot/dev
    protected function toggleLayout(): void
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
        }

        $component = $this->getLivewire();

        if (is_object($component)) {
            $layout = HasTableLayoutPage::readLayoutFrom($component);

            if ($layout instanceof TableLayoutEnum) {
                return $layout;
            }
        }

        return $this->getCurrentLayout();
    }
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_jLI7gn
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_GrNmvm
>>>>>>> .merge_file_v5MH1K
>>>>>>> laraxot/dev
}
