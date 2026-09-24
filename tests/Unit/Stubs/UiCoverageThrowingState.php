<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Stubs;

use Filament\Schemas\Components\Component;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Modules\Xot\Contracts\StateContract;

/**
 * Stato che solleva eccezione su transitionableStates — copre fallback getStatesFor.
 */
final class UiCoverageThrowingState implements StateContract
{
    /** @param array<array-key, mixed>|Model|string|null $record */
    /**
<<<<<<< HEAD
<<<<<<< .merge_file_wafKYE
=======
<<<<<<< .merge_file_m54Q9P
>>>>>>> .merge_file_Xkzbe0
=======
>>>>>>> 0dadab4 (Lint)
<<<<<<< HEAD
     * @param  Model|array<string, mixed>|string|null  $record
     */
    public function __construct(
        public Model|array|string|null $record = null,
    ) {}
=======
<<<<<<< HEAD
<<<<<<< .merge_file_wafKYE
=======
=======
>>>>>>> .merge_file_8r5QfC
>>>>>>> .merge_file_Xkzbe0
=======
>>>>>>> 0dadab4 (Lint)
     * @param Model|array<string, mixed>|string|null $record
     */
    public function __construct(
        public Model|array|string|null $record = null,
    ) {
    }
<<<<<<< HEAD
<<<<<<< .merge_file_wafKYE
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_m54Q9P
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_8r5QfC
>>>>>>> .merge_file_Xkzbe0
=======
>>>>>>> laraxot/dev
>>>>>>> 0dadab4 (Lint)

    public function label(): string
    {
        return 'Throwing';
    }

    public function color(): string
    {
        return 'danger';
    }

    public function bgColor(): string
    {
        return 'gray';
    }

    public function icon(): string
    {
        return 'heroicon-o-x';
    }

    public function modalHeading(): string
    {
        return 'h';
    }

    public function modalDescription(): string
    {
        return 'd';
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
        return [];
    }

    /**
<<<<<<< HEAD
<<<<<<< .merge_file_wafKYE
=======
<<<<<<< .merge_file_m54Q9P
>>>>>>> .merge_file_Xkzbe0
=======
>>>>>>> 0dadab4 (Lint)
<<<<<<< HEAD
     * @param  array<string, mixed>  $data
     */
    public function modalActionByRecord(Model $record, array $data): void {}
=======
<<<<<<< HEAD
<<<<<<< .merge_file_wafKYE
=======
=======
>>>>>>> .merge_file_8r5QfC
>>>>>>> .merge_file_Xkzbe0
=======
>>>>>>> 0dadab4 (Lint)
     * @param array<string, mixed> $data
     */
    public function modalActionByRecord(Model $record, array $data): void
    {
    }
<<<<<<< HEAD
<<<<<<< .merge_file_wafKYE
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_m54Q9P
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_8r5QfC
>>>>>>> .merge_file_Xkzbe0
=======
>>>>>>> laraxot/dev
>>>>>>> 0dadab4 (Lint)

    /**
     * @return list<string>
     */
    public function transitionableStates(): array
    {
        throw new \RuntimeException('transitionableStates unavailable');
    }

    public function canTransitionTo(string $stateClass): bool
    {
        return false;
    }

<<<<<<< HEAD
<<<<<<< .merge_file_wafKYE
=======
<<<<<<< .merge_file_m54Q9P
>>>>>>> .merge_file_Xkzbe0
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
<<<<<<< .merge_file_wafKYE
=======
=======
    public function transitionTo(string $state, ?string $message = null): void
    {
    }
>>>>>>> .merge_file_8r5QfC
>>>>>>> .merge_file_Xkzbe0
=======
>>>>>>> 0dadab4 (Lint)

    /**
     * @return Collection<string, string>
     */
    public static function getStateMapping(): Collection
    {
        return collect(['throwing' => self::class]);
    }
}
