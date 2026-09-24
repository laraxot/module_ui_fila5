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
<<<<<<< .merge_file_47qJFB
=======
<<<<<<< .merge_file_wafKYE
=======
<<<<<<< .merge_file_m54Q9P
>>>>>>> .merge_file_Xkzbe0
<<<<<<< HEAD
>>>>>>> .merge_file_OHJ2eZ
     * @param  Model|array<string, mixed>|string|null  $record
     */
    public function __construct(
        public Model|array|string|null $record = null,
    ) {}
<<<<<<< .merge_file_47qJFB
=======
=======
<<<<<<< .merge_file_wafKYE
=======
=======
>>>>>>> .merge_file_8r5QfC
>>>>>>> .merge_file_Xkzbe0
     * @param Model|array<string, mixed>|string|null $record
     */
    public function __construct(
        public Model|array|string|null $record = null,
    ) {
    }
<<<<<<< .merge_file_wafKYE
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_m54Q9P
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_8r5QfC
>>>>>>> .merge_file_Xkzbe0
>>>>>>> .merge_file_OHJ2eZ

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
<<<<<<< .merge_file_47qJFB
     * @param  array<string, mixed>  $data
     */
    public function modalActionByRecord(Model $record, array $data): void {}
=======
<<<<<<< .merge_file_wafKYE
=======
<<<<<<< .merge_file_m54Q9P
>>>>>>> .merge_file_Xkzbe0
<<<<<<< HEAD
     * @param  array<string, mixed>  $data
     */
    public function modalActionByRecord(Model $record, array $data): void {}
=======
<<<<<<< .merge_file_wafKYE
=======
=======
>>>>>>> .merge_file_8r5QfC
>>>>>>> .merge_file_Xkzbe0
     * @param array<string, mixed> $data
     */
    public function modalActionByRecord(Model $record, array $data): void
    {
    }
<<<<<<< .merge_file_wafKYE
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_m54Q9P
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_8r5QfC
>>>>>>> .merge_file_Xkzbe0
>>>>>>> .merge_file_OHJ2eZ

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

<<<<<<< .merge_file_47qJFB
    public function transitionTo(string $state, ?string $message = null): void {}
=======
<<<<<<< .merge_file_wafKYE
=======
<<<<<<< .merge_file_m54Q9P
>>>>>>> .merge_file_Xkzbe0
<<<<<<< HEAD
    public function transitionTo(string $state, ?string $message = null): void {}
=======
    public function transitionTo(string $state, ?string $message = null): void
    {
    }
>>>>>>> laraxot/dev
<<<<<<< .merge_file_wafKYE
=======
=======
    public function transitionTo(string $state, ?string $message = null): void
    {
    }
>>>>>>> .merge_file_8r5QfC
>>>>>>> .merge_file_Xkzbe0
>>>>>>> .merge_file_OHJ2eZ

    /**
     * @return Collection<string, string>
     */
    public static function getStateMapping(): Collection
    {
        return collect(['throwing' => self::class]);
    }
}
