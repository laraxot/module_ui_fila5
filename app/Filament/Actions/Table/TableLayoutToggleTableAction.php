<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Actions\Table;

use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
<<<<<<< HEAD
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Traits\HasTableLayoutPage;
=======
use Modules\UI\Contracts\HasTableLayout;
>>>>>>> laraxot/dev

final class TableLayoutToggleTableAction extends Action implements HasTableLayout
{
    use TableLayoutTrait;

    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
        $this->iconButton()
            ->label('')
            ->tooltip(fn (): string => $this->resolveTargetLayout()->getLabel())
            ->icon(fn (): string => $this->resolveTargetLayout()->getIcon())
=======
        $current = $this->getCurrentLayout();

        $this->label(__('ui::table_layout.actions.toggle.label'))
            ->tooltip($current->getLabel())
            ->color($current->getColor())
            ->icon($current->getIcon())
>>>>>>> laraxot/dev
            ->action($this->toggleLayout(...));
    }

    public static function getDefaultName(): string
    {
        return 'table_layout_toggle';
    }

<<<<<<< HEAD
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
=======
    protected function toggleLayout(?ListRecords $livewire): void
    {
        $currentLayout = $this->getCurrentLayout();
        $newLayout = $currentLayout->toggle();

        $this->setTableLayout($newLayout);

        if ($livewire instanceof ListRecords) {
            $livewire->dispatch('$refresh');
        }
    }
>>>>>>> laraxot/dev
}
