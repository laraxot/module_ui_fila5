<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Actions\Header;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Actions\XotBaseAction;
=======
use Filament\Actions\Action;
>>>>>>> dfac49d (.)
=======
use Modules\Xot\Filament\Actions\XotBaseAction;
>>>>>>> dfbb8305 (.)

/**
 * @see https://filamentphp.com/plugins/tgeorgel-table-layout-toggle
 */
<<<<<<< HEAD
<<<<<<< HEAD
class TableLayoutToggleHeaderAction extends XotBaseAction
=======
class TableLayoutToggleHeaderAction extends Action
>>>>>>> dfac49d (.)
=======
class TableLayoutToggleHeaderAction extends XotBaseAction
>>>>>>> dfbb8305 (.)
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
             * /*
             * /*
             * /*
             * /*
             * @param object{layoutView?: string|null} $livewire
             */
            ->icon(function (object $livewire): string {
                // ✅ isset() invece di property_exists() - funziona con magic properties Livewire
                if (isset($livewire->layoutView)) {
                    $layoutViewRaw = $livewire->layoutView;
                    $layoutView = is_string($layoutViewRaw) ? $layoutViewRaw : '';

<<<<<<< HEAD
<<<<<<< HEAD
                    return 'list' === $layoutView ? $this->listIcon : $this->gridIcon;
=======
                    return $layoutView === 'list' ? $this->listIcon : $this->gridIcon;
>>>>>>> dfac49d (.)
=======
                    return 'list' === $layoutView ? $this->listIcon : $this->gridIcon;
>>>>>>> dfbb8305 (.)
                }

                return $this->listIcon; // default icon
            })
            /*
             * /*
             * /*
             * /*
             * /*
             * @param object{layoutView?: string|null} $livewire
             */
<<<<<<< HEAD
<<<<<<< HEAD
            ->action(function (object $livewire): void {
=======
            ->action(static function (object $livewire): void {
>>>>>>> dfac49d (.)
=======
            ->action(function (object $livewire): void {
>>>>>>> dfbb8305 (.)
                // ✅ isset() invece di property_exists() - funziona con magic properties Livewire
                if (! isset($livewire->layoutView)) {
                    return;
                }

                $layoutViewRaw = $livewire->layoutView;
                $layoutView = is_string($layoutViewRaw) ? $layoutViewRaw : '';

<<<<<<< HEAD
<<<<<<< HEAD
                $livewire->layoutView = 'grid' === $layoutView ? 'list' : 'grid';
=======
                $livewire->layoutView = $layoutView === 'grid' ? 'list' : 'grid';
>>>>>>> dfac49d (.)
=======
                $livewire->layoutView = 'grid' === $layoutView ? 'list' : 'grid';
>>>>>>> dfbb8305 (.)
            });
    }

    public static function getDefaultName(): string
    {
        return 'table_layout_toggle';
    }
}
