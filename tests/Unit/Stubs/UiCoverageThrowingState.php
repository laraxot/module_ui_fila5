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
<<<<<<< .merge_file_m54Q9P
<<<<<<< HEAD
     * @param  Model|array<string, mixed>|string|null  $record
     */
    public function __construct(
        public Model|array|string|null $record = null,
    ) {}
=======
=======
>>>>>>> .merge_file_8r5QfC
     * @param Model|array<string, mixed>|string|null $record
     */
    public function __construct(
        public Model|array|string|null $record = null,
    ) {
    }
<<<<<<< .merge_file_m54Q9P
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_8r5QfC

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
<<<<<<< .merge_file_m54Q9P
<<<<<<< HEAD
     * @param  array<string, mixed>  $data
     */
    public function modalActionByRecord(Model $record, array $data): void {}
=======
=======
>>>>>>> .merge_file_8r5QfC
     * @param array<string, mixed> $data
     */
    public function modalActionByRecord(Model $record, array $data): void
    {
    }
<<<<<<< .merge_file_m54Q9P
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_8r5QfC

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

<<<<<<< .merge_file_m54Q9P
<<<<<<< HEAD
    public function transitionTo(string $state, ?string $message = null): void {}
=======
    public function transitionTo(string $state, ?string $message = null): void
    {
    }
>>>>>>> laraxot/dev
=======
    public function transitionTo(string $state, ?string $message = null): void
    {
    }
>>>>>>> .merge_file_8r5QfC

    /**
     * @return Collection<string, string>
     */
    public static function getStateMapping(): Collection
    {
        return collect(['throwing' => self::class]);
    }
}
