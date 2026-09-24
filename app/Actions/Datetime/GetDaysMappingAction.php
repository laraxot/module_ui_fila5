<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Datetime;

use Carbon\Carbon;
use Spatie\QueueableAction\QueueableAction;

final class GetDaysMappingAction
{
    use QueueableAction;

    /**
     * Execute action to get weekday mapping.
     *
     * @return array<string, string>
     */
    public function execute(): array
    {
        $weekdays = $this->getWeekdays();
        $result = [];

        foreach ($weekdays as $day) {
            $mapping = $this->mapDayToLabel($day);
            $result = array_merge($result, $mapping);
        }

        return $result;
    }

    /**
     * Get list of weekday constants.
     *
     * @return array<int>
     */
    private function getWeekdays(): array
    {
        return [
            Carbon::MONDAY,
            Carbon::TUESDAY,
            Carbon::WEDNESDAY,
            Carbon::THURSDAY,
            Carbon::FRIDAY,
            Carbon::SATURDAY,
        ];
    }

    /**
     * Map day constant to key-label pair.
     *
     * @return array<string, string>
     */
    private function mapDayToLabel(int $day): array
    {
        $carbon = $this->createCarbonInstance();
        $dayDate = $carbon->startOfWeek()->addDays($day - 1);

        $dayKey = strtolower($dayDate->format('l'));
        $dayLabel = ucfirst($dayDate->isoFormat('dddd'));

        return [$dayKey => $dayLabel];
    }

    /**
     * Create Carbon instance.
     */
    private function createCarbonInstance(): Carbon
    {
<<<<<<< HEAD
<<<<<<< .merge_file_CncqdB
<<<<<<< HEAD
=======
<<<<<<< HEAD
        return Carbon::now();
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
        $carbon = Carbon::create();

        if (null === $carbon) {
            throw new \RuntimeException('Failed to create Carbon instance');
        }

        return $carbon;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
        return Carbon::now();
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        return Carbon::now();
>>>>>>> .merge_file_2LyRAW
=======
>>>>>>> 0dadab4 (Lint)
    }
}
