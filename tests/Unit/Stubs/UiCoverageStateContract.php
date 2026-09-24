<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Stubs;

use Filament\Schemas\Components\Component;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Modules\Xot\Contracts\StateContract;

/**
 * Stato fittizio per coverage IconState* — implementa StateContract + transizioni.
 */
class UiCoverageStateContract implements StateContract
{
    public string $name = 'pending';

<<<<<<< HEAD
    /** @param array<array-key, mixed>|Model|string|null $record */
    /**
=======
<<<<<<< .merge_file_u3U2M8
    /** @param array<array-key, mixed>|Model|string|null $record */
    /**
=======
<<<<<<< .merge_file_q32wCm
=======
<<<<<<< .merge_file_RHxdtB
>>>>>>> .merge_file_onzDGm
    /** @param array<array-key, mixed>|Model|string|null $record */
    /**
<<<<<<< HEAD
>>>>>>> .merge_file_Q2Pa7K
>>>>>>> laraxot/dev
     * @param  Model|array<string, mixed>|string|null  $record
     */
    public function __construct(
        public Model|array|string|null $record = null,
    ) {}
<<<<<<< HEAD
=======
<<<<<<< .merge_file_u3U2M8
=======
=======
<<<<<<< .merge_file_q32wCm
=======
=======
    /**
>>>>>>> .merge_file_VBJMIg
>>>>>>> .merge_file_onzDGm
     * @param Model|array<string, mixed>|string|null $record
     */
    public function __construct(
        public Model|array|string|null $record = null,
    ) {
    }
<<<<<<< .merge_file_q32wCm
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_RHxdtB
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_VBJMIg
>>>>>>> .merge_file_onzDGm
>>>>>>> .merge_file_Q2Pa7K
>>>>>>> laraxot/dev

    public function label(): string
    {
        return 'Pending';
    }

    public function color(): string
    {
        return 'warning';
    }

    public function bgColor(): string
    {
        return 'gray';
    }

    public function icon(): string
    {
        return 'heroicon-o-clock';
    }

    public function modalHeading(): string
    {
        return 'Change state';
    }

    public function modalDescription(): string
    {
        return 'Confirm transition';
    }

    /**
     * @return array<string, Component>
     */
    public function modalFormSchema(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    public function modalFillFormByRecord(Model $record): array
    {
        return ['note' => 'from-record'];
    }

    /**
<<<<<<< HEAD
     * @param  array<string, mixed>  $data
=======
<<<<<<< .merge_file_u3U2M8
     * @param  array<string, mixed>  $data
=======
<<<<<<< .merge_file_q32wCm
=======
<<<<<<< .merge_file_RHxdtB
>>>>>>> .merge_file_onzDGm
<<<<<<< HEAD
     * @param  array<string, mixed>  $data
=======
     * @param array<string, mixed> $data
>>>>>>> laraxot/dev
<<<<<<< .merge_file_q32wCm
=======
=======
     * @param array<string, mixed> $data
>>>>>>> .merge_file_VBJMIg
>>>>>>> .merge_file_onzDGm
>>>>>>> .merge_file_Q2Pa7K
>>>>>>> laraxot/dev
     */
    public function modalActionByRecord(Model $record, array $data): void
    {
        $record->setAttribute('_modal_action', $data['note'] ?? null);
    }

    /**
     * @return list<string>
     */
    public function transitionableStates(): array
    {
        return ['done', 'cancelled'];
    }

    public function canTransitionTo(string $stateClass): bool
    {
<<<<<<< HEAD
        return $stateClass === UiCoverageDoneState::class;
=======
<<<<<<< .merge_file_u3U2M8
        return $stateClass === UiCoverageDoneState::class;
=======
<<<<<<< .merge_file_q32wCm
=======
<<<<<<< .merge_file_RHxdtB
>>>>>>> .merge_file_onzDGm
<<<<<<< HEAD
        return $stateClass === UiCoverageDoneState::class;
=======
        return UiCoverageDoneState::class === $stateClass;
>>>>>>> laraxot/dev
<<<<<<< .merge_file_q32wCm
=======
=======
        return UiCoverageDoneState::class === $stateClass;
>>>>>>> .merge_file_VBJMIg
>>>>>>> .merge_file_onzDGm
>>>>>>> .merge_file_Q2Pa7K
>>>>>>> laraxot/dev
    }

    public function transitionTo(string $state, ?string $message = null): void
    {
        if ($this->record instanceof Model) {
            $this->record->setAttribute('state', $state);
            $this->record->setAttribute('transition_message', $message);
        }
    }

    /**
     * @return Collection<string, string>
     */
    public static function getStateMapping(): Collection
    {
        return collect([
            'pending' => self::class,
            'done' => UiCoverageDoneState::class,
        ]);
    }
}
