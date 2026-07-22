<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Actions\Table;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
use Filament\Resources\Pages\ListRecords;
use Modules\UI\Contracts\HasTableLayout;
use Modules\Xot\Filament\Actions\XotBaseAction;

final class TableLayoutToggleTableAction extends XotBaseAction implements HasTableLayout
<<<<<<< HEAD
=======
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Traits\HasTableLayoutPage;

final class TableLayoutToggleTableAction extends Action implements HasTableLayout
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
{
    use TableLayoutTrait;

    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
        $current = $this->getCurrentLayout();

        $this
            ->iconButton()
            ->tooltip($current->getLabel())
            ->color($current->getColor())
            ->icon($current->getIcon())
            ->action(fn (ListRecords $livewire) => $this->toggleLayout($livewire));
<<<<<<< HEAD
=======
        $this->iconButton()
            ->label('')
            ->tooltip(fn (): string => $this->resolveTargetLayout()->getLabel())
            ->icon(fn (): string => $this->resolveTargetLayout()->getIcon())
            ->action($this->toggleLayout(...));
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
    }

    public static function getDefaultName(): string
    {
        return 'table_layout_toggle';
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
    protected function toggleLayout(ListRecords $livewire): void
    {
        $currentLayout = $this->getCurrentLayout();
        $newLayout = $currentLayout->toggle();

        $this->setTableLayout($newLayout);

        $livewire->dispatch('$refresh');
        $livewire->resetTable();
        $livewire->js('$wire.$refresh()');
<<<<<<< HEAD
=======
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
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
    }
}
