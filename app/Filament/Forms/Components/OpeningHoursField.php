<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

<<<<<<< .merge_file_E590dU
<<<<<<< HEAD
<<<<<<< .merge_file_IWqjf6
<<<<<<< HEAD
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TimePicker;
=======
<<<<<<< HEAD
use Filament\Forms\Components\TimePicker;
use Filament\Infolists\Components\TextEntry;
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TimePicker;
=======
use Filament\Forms\Components\TimePicker;
use Filament\Infolists\Components\TextEntry;
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use Filament\Forms\Components\TimePicker;
use Filament\Infolists\Components\TextEntry;
>>>>>>> .merge_file_eeSXGW
=======
>>>>>>> 804451c (Lint)
=======
use Filament\Forms\Components\TimePicker;
use Filament\Infolists\Components\TextEntry;
>>>>>>> .merge_file_wALPYe
use Filament\Schemas\Components\Component;
use Modules\UI\Actions\Datetime\GetDaysMappingAction;
use Modules\UI\Rules\OpeningHoursRule;
use Modules\Xot\Filament\Forms\Components\XotBaseField;

/**
 * --.
 */
final class OpeningHoursField extends XotBaseField
{
    /**
     * Vista Blade per il rendering del componente.
     */
    protected string $view = 'ui::filament.forms.components.opening-hours-field';

    protected function setUp(): void
    {
        parent::setUp();
        $days = app(GetDaysMappingAction::class)->execute();

        $form = [];
        foreach ($days as $dayKey => $dayLabel) {
            $form = array_merge($form, $this->getDaySchema($dayKey, $dayLabel));
        }

        $this->schema($form)->columns(5);

        $this->rules([
<<<<<<< .merge_file_E590dU
<<<<<<< HEAD
            new OpeningHoursRule(),
=======
<<<<<<< HEAD
<<<<<<< HEAD
            new OpeningHoursRule,
=======
<<<<<<< HEAD
            new OpeningHoursRule(),
=======
            new OpeningHoursRule,
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            new OpeningHoursRule,
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
            new OpeningHoursRule,
>>>>>>> .merge_file_wALPYe
        ]);
    }

    /**
     * @return array<int, Component>
     */
    private function getDaySchema(string $dayKey, string $dayLabel): array
    {
        return [
<<<<<<< .merge_file_E590dU
<<<<<<< HEAD
<<<<<<< .merge_file_IWqjf6
<<<<<<< HEAD
            Placeholder::make($dayKey.'_label')
                ->content($dayLabel)
=======
<<<<<<< HEAD
            TextEntry::make($dayKey.'_label')
                ->state($dayLabel)
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
            Placeholder::make($dayKey.'_label')
                ->content($dayLabel)
=======
            TextEntry::make($dayKey.'_label')
                ->state($dayLabel)
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            TextEntry::make($dayKey.'_label')
                ->state($dayLabel)
>>>>>>> .merge_file_eeSXGW
=======
>>>>>>> 804451c (Lint)
=======
            TextEntry::make($dayKey.'_label')
                ->state($dayLabel)
>>>>>>> .merge_file_wALPYe
                ->extraAttributes([
                    'class' => 'font-medium text-gray-900 dark:text-gray-100 text-center py-2',
                ])
                ->columnSpan(1),

            $this->getTimePickerComponent("{$dayKey}.morning_from"),
            $this->getTimePickerComponent("{$dayKey}.morning_to"),
            $this->getTimePickerComponent("{$dayKey}.afternoon_from"),
            $this->getTimePickerComponent("{$dayKey}.afternoon_to"),
        ];
    }

    private function getTimePickerComponent(string $name): TimePicker
    {
        return TimePicker::make($name)
            ->native(false)
            ->format('H:i')
            ->seconds(false)
            ->minutesStep(15)
            ->nullable()
            ->live(false);
    }
}
