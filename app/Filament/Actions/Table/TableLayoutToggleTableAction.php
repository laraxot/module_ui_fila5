<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Actions\Table;

use Filament\Resources\Pages\ListRecords;
<<<<<<< .merge_file_BmFDck
use Modules\UI\Contracts\HasTableLayout;
=======
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Traits\HasTableLayoutPage;
>>>>>>> .merge_file_3ABVnW
use Modules\Xot\Filament\Actions\XotBaseAction;

final class TableLayoutToggleTableAction extends XotBaseAction implements HasTableLayout
{
    use TableLayoutTrait;

    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< .merge_file_BmFDck
        $current = $this->getCurrentLayout();

        $this
            ->iconButton()
            ->tooltip($current->getLabel())
            ->color($current->getColor())
            ->icon($current->getIcon())
            ->action(fn (ListRecords $livewire) => $this->toggleLayout($livewire));
=======
        $this->iconButton()
            ->label('')
            ->tooltip(fn (): string => $this->resolveTargetLayout()->getLabel())
            ->icon(fn (): string => $this->resolveTargetLayout()->getIcon())
            ->action($this->toggleLayout(...));
>>>>>>> .merge_file_3ABVnW
    }

    public static function getDefaultName(): string
    {
        return 'table_layout_toggle';
    }

<<<<<<< .merge_file_BmFDck
    protected function toggleLayout(ListRecords $livewire): void
    {
        $currentLayout = $this->getCurrentLayout();
        $newLayout = $currentLayout->toggle();

        $this->setTableLayout($newLayout);

        $livewire->dispatch('$refresh');
        $livewire->resetTable();
        $livewire->js('$wire.$refresh()');
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
>>>>>>> .merge_file_3ABVnW
    }
}
