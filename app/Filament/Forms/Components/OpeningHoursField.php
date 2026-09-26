<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_93j7Iu
=======
<<<<<<< .merge_file_IWqjf6
>>>>>>> .merge_file_s0RIws
<<<<<<< HEAD
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TimePicker;
=======
<<<<<<< .merge_file_93j7Iu
use Filament\Forms\Components\TimePicker;
use Filament\Infolists\Components\TextEntry;
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
use Filament\Forms\Components\TimePicker;
use Filament\Infolists\Components\TextEntry;
=======
<<<<<<< HEAD
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TimePicker;
=======
use Filament\Forms\Components\TimePicker;
use Filament\Infolists\Components\TextEntry;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use Filament\Forms\Components\TimePicker;
use Filament\Infolists\Components\TextEntry;
>>>>>>> .merge_file_eeSXGW
>>>>>>> .merge_file_s0RIws
=======
use Filament\Forms\Components\TimePicker;
use Filament\Infolists\Components\TextEntry;
>>>>>>> laraxot/dev
=======
use Filament\Forms\Components\TimePicker;
use Filament\Infolists\Components\TextEntry;
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_93j7Iu
=======
            new OpeningHoursRule(),
=======
<<<<<<< HEAD
            new OpeningHoursRule,
=======
<<<<<<< HEAD
>>>>>>> .merge_file_s0RIws
            new OpeningHoursRule(),
=======
            new OpeningHoursRule,
>>>>>>> laraxot/dev
<<<<<<< .merge_file_93j7Iu
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_s0RIws
=======
            new OpeningHoursRule,
>>>>>>> laraxot/dev
=======
            new OpeningHoursRule(),
>>>>>>> laraxot/dev
        ]);
    }

    /**
     * @return array<int, Component>
     */
    private function getDaySchema(string $dayKey, string $dayLabel): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_93j7Iu
=======
<<<<<<< .merge_file_IWqjf6
<<<<<<< HEAD
            Placeholder::make($dayKey.'_label')
                ->content($dayLabel)
=======
<<<<<<< HEAD
            TextEntry::make($dayKey.'_label')
                ->state($dayLabel)
=======
>>>>>>> .merge_file_s0RIws
<<<<<<< HEAD
            Placeholder::make($dayKey.'_label')
                ->content($dayLabel)
=======
            TextEntry::make($dayKey.'_label')
                ->state($dayLabel)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_93j7Iu
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            TextEntry::make($dayKey.'_label')
                ->state($dayLabel)
>>>>>>> .merge_file_eeSXGW
>>>>>>> .merge_file_s0RIws
=======
            TextEntry::make($dayKey.'_label')
                ->state($dayLabel)
>>>>>>> laraxot/dev
=======
            TextEntry::make($dayKey.'_label')
                ->state($dayLabel)
>>>>>>> laraxot/dev
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
