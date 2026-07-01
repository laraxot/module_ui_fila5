<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Actions\Header;

use Filament\Actions\Action;

/**
 * @see https://filamentphp.com/plugins/tgeorgel-table-layout-toggle
 */
class TableLayoutToggleHeaderAction extends Action
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
                    return $layoutView === 'list' ? $this->listIcon : $this->gridIcon;
=======
                    return 'list' === $layoutView ? $this->listIcon : $this->gridIcon;
>>>>>>> laraxot/dev
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
            ->action(static function (object $livewire): void {
=======
            ->action(function (object $livewire): void {
>>>>>>> laraxot/dev
                // ✅ isset() invece di property_exists() - funziona con magic properties Livewire
                if (! isset($livewire->layoutView)) {
                    return;
                }

                $layoutViewRaw = $livewire->layoutView;
                $layoutView = is_string($layoutViewRaw) ? $layoutViewRaw : '';

<<<<<<< HEAD
                $livewire->layoutView = $layoutView === 'grid' ? 'list' : 'grid';
=======
                $livewire->layoutView = 'grid' === $layoutView ? 'list' : 'grid';
>>>>>>> laraxot/dev
            });
    }

    public static function getDefaultName(): string
    {
        return 'table_layout_toggle';
    }
}
