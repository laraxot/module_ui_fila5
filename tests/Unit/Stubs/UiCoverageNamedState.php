<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Stubs;

use Filament\Schemas\Components\Component;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Modules\Xot\Contracts\StateContract;

/**
 * StateContract con SOLO static $name (SelectStateColumn reflection L56-68).
 */
final class UiCoverageNamedState implements StateContract
{
    public static string $name = 'pending';

<<<<<<< HEAD
<<<<<<< .merge_file_sCC0zr
=======
<<<<<<< .merge_file_uVmnNs
>>>>>>> .merge_file_SBavPe
=======
>>>>>>> 0dadab4 (Lint)
    /** @param array<array-key, mixed>|Model|string|null $record */
    /**
<<<<<<< HEAD
     * @param  Model|array<string, mixed>|string|null  $record
     */
    public function __construct(
        public Model|array|string|null $record = null,
    ) {}
=======
<<<<<<< HEAD
<<<<<<< .merge_file_sCC0zr
=======
=======
    /**
>>>>>>> .merge_file_S3isby
>>>>>>> .merge_file_SBavPe
=======
>>>>>>> 0dadab4 (Lint)
     * @param Model|array<string, mixed>|string|null $record
     */
    public function __construct(
        public Model|array|string|null $record = null,
    ) {
    }
<<<<<<< HEAD
<<<<<<< .merge_file_sCC0zr
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_uVmnNs
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_S3isby
>>>>>>> .merge_file_SBavPe
=======
>>>>>>> laraxot/dev
>>>>>>> 0dadab4 (Lint)

    public function label(): string
    {
        return 'Named';
    }

    public function color(): string
    {
        return 'primary';
    }

    public function bgColor(): string
    {
        return 'gray';
    }

    public function icon(): string
    {
        return 'heroicon-o-check';
    }

    public function modalHeading(): string
    {
        return 'h';
    }

    public function modalDescription(): string
    {
        return 'd';
    }

    /** @return array<string, Component> */
    public function modalFormSchema(): array
    {
        return [];
    }

    /** @return array<string, mixed> */
    public function modalFillFormByRecord(Model $record): array
    {
        return [];
    }

    /** @param  array<string, mixed>  $data */
<<<<<<< HEAD
<<<<<<< .merge_file_sCC0zr
=======
<<<<<<< .merge_file_uVmnNs
>>>>>>> .merge_file_SBavPe
=======
>>>>>>> 0dadab4 (Lint)
<<<<<<< HEAD
    public function modalActionByRecord(Model $record, array $data): void {}
=======
    public function modalActionByRecord(Model $record, array $data): void
    {
    }
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< .merge_file_sCC0zr
=======
=======
    public function modalActionByRecord(Model $record, array $data): void
    {
    }
>>>>>>> .merge_file_S3isby
>>>>>>> .merge_file_SBavPe
=======
>>>>>>> 0dadab4 (Lint)

    /** @return list<string> */
    public function transitionableStates(): array
    {
        return ['done'];
    }

    public function canTransitionTo(string $stateClass): bool
    {
        return true;
    }

<<<<<<< HEAD
<<<<<<< .merge_file_sCC0zr
=======
<<<<<<< .merge_file_uVmnNs
>>>>>>> .merge_file_SBavPe
=======
>>>>>>> 0dadab4 (Lint)
<<<<<<< HEAD
    public function transitionTo(string $state, ?string $message = null): void {}
=======
    public function transitionTo(string $state, ?string $message = null): void
    {
    }
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< .merge_file_sCC0zr
=======
=======
    public function transitionTo(string $state, ?string $message = null): void
    {
    }
>>>>>>> .merge_file_S3isby
>>>>>>> .merge_file_SBavPe
=======
>>>>>>> 0dadab4 (Lint)

    /** @return Collection<string, string> */
    public static function getStateMapping(): Collection
    {
        return collect(['pending' => self::class, 'done' => UiCoverageDoneState::class]);
    }
}
