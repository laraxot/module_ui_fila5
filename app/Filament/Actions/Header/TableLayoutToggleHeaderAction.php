<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Actions\Header;

<<<<<<< HEAD
use Modules\Xot\Filament\Actions\XotBaseAction;
=======
use Filament\Actions\Action;
>>>>>>> 6e44b7d5 (.)

/**
 * @see https://filamentphp.com/plugins/tgeorgel-table-layout-toggle
 */
<<<<<<< HEAD
class TableLayoutToggleHeaderAction extends XotBaseAction
=======
class TableLayoutToggleHeaderAction extends Action
>>>>>>> 6e44b7d5 (.)
{
    // use NavigationActionLabelTrait;
    public string $listIcon = 'heroicon-o-list-bullet';

    public string $gridIcon = 'heroicon-o-squares-2x2';

    protected function setUp(): void
    {
        parent::setUp();
        $this->translateLabel()
            ->color('secondary')
            // ->label(trans('ui::'.static::getDefaultName().'.label'))
            // ->tooltip(trans('setting::database_connection.actions.database-backup.tooltip'))
            // ->icon(trans('setting::database_connection.actions.database-backup.icon'))
            // ->icon($this->listIcon)
            /*
<<<<<<< HEAD
=======
             * /*
             * /*
             * /*
             * /*
>>>>>>> 6e44b7d5 (.)
             * @param object{layoutView?: string|null} $livewire
             */
            ->icon(function (object $livewire): string {
                // ✅ isset() invece di property_exists() - funziona con magic properties Livewire
                if (isset($livewire->layoutView)) {
                    $layoutViewRaw = $livewire->layoutView;
                    $layoutView = is_string($layoutViewRaw) ? $layoutViewRaw : '';

<<<<<<< HEAD
                    return 'list' === $layoutView ? $this->listIcon : $this->gridIcon;
=======
                    return $layoutView === 'list' ? $this->listIcon : $this->gridIcon;
>>>>>>> 6e44b7d5 (.)
                }

                return $this->listIcon; // default icon
            })
            /*
<<<<<<< HEAD
             * @param object{layoutView?: string|null} $livewire
             */
            ->action(static function (object $livewire): void {
=======
             * /*
             * /*
             * /*
             * /*
             * @param object{layoutView?: string|null} $livewire
             */
            ->action(function (object $livewire): void {
>>>>>>> 6e44b7d5 (.)
                // ✅ isset() invece di property_exists() - funziona con magic properties Livewire
                if (! isset($livewire->layoutView)) {
                    return;
                }

                $layoutViewRaw = $livewire->layoutView;
                $layoutView = is_string($layoutViewRaw) ? $layoutViewRaw : '';

<<<<<<< HEAD
                $livewire->layoutView = 'grid' === $layoutView ? 'list' : 'grid';
=======
                $livewire->layoutView = $layoutView === 'grid' ? 'list' : 'grid';
>>>>>>> 6e44b7d5 (.)
            });
    }

    public static function getDefaultName(): string
    {
        return 'table_layout_toggle';
    }
}
