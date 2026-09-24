<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Actions\Header;

<<<<<<< HEAD
use Filament\Actions\Action;
=======
<<<<<<< HEAD
use Modules\Xot\Filament\Actions\XotBaseAction;
=======
<<<<<<< HEAD
use Filament\Actions\Action;
=======
use Modules\Xot\Filament\Actions\XotBaseAction;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev

/**
 * @see https://filamentphp.com/plugins/tgeorgel-table-layout-toggle
 */
<<<<<<< HEAD
class TableLayoutToggleHeaderAction extends Action
=======
<<<<<<< HEAD
class TableLayoutToggleHeaderAction extends XotBaseAction
=======
<<<<<<< HEAD
class TableLayoutToggleHeaderAction extends Action
=======
class TableLayoutToggleHeaderAction extends XotBaseAction
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
             * /*
             * /*
             * /*
             * /*
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
             * @param object{layoutView?: string|null} $livewire
             */
            ->icon(function (object $livewire): string {
                // ✅ isset() invece di property_exists() - funziona con magic properties Livewire
                if (isset($livewire->layoutView)) {
                    $layoutViewRaw = $livewire->layoutView;
                    $layoutView = is_string($layoutViewRaw) ? $layoutViewRaw : '';

                    return 'list' === $layoutView ? $this->listIcon : $this->gridIcon;
                }

                return $this->listIcon; // default icon
            })
            /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
             * @param object{layoutView?: string|null} $livewire
             */
            ->action(static function (object $livewire): void {
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
             * /*
             * /*
             * /*
             * /*
             * @param object{layoutView?: string|null} $livewire
             */
            ->action(function (object $livewire): void {
<<<<<<< HEAD
=======
=======
             * @param object{layoutView?: string|null} $livewire
             */
            ->action(static function (object $livewire): void {
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
                // ✅ isset() invece di property_exists() - funziona con magic properties Livewire
                if (! isset($livewire->layoutView)) {
                    return;
                }

                $layoutViewRaw = $livewire->layoutView;
                $layoutView = is_string($layoutViewRaw) ? $layoutViewRaw : '';

                $livewire->layoutView = 'grid' === $layoutView ? 'list' : 'grid';
            });
    }

    public static function getDefaultName(): string
    {
        return 'table_layout_toggle';
    }
}
