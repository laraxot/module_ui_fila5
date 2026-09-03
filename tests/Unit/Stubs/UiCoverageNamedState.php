<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Stubs;

use Filament\Schemas\Components\Component;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Support\Collection;
>>>>>>> laraxot/dev
use Modules\Xot\Contracts\StateContract;

/**
 * StateContract con SOLO static $name (SelectStateColumn reflection L56-68).
 */
final class UiCoverageNamedState implements StateContract
{
    public static string $name = 'pending';

    /** @param array<array-key, mixed>|Model|string|null $record */
    /**
     * @param  Model|array<string, mixed>|string|null  $record
     */
    public function __construct(
        public Model|array|string|null $record = null,
    ) {}

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
    public function modalActionByRecord(Model $record, array $data): void
    {
    }
=======
    public function modalActionByRecord(Model $record, array $data): void {}
>>>>>>> laraxot/dev

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
    public function transitionTo(string $state, ?string $message = null): void
    {
    }

    /** @return \Illuminate\Support\Collection<string, string> */
    public static function getStateMapping(): \Illuminate\Support\Collection
=======
    public function transitionTo(string $state, ?string $message = null): void {}

    /** @return Collection<string, string> */
    public static function getStateMapping(): Collection
>>>>>>> laraxot/dev
    {
        return collect(['pending' => self::class, 'done' => UiCoverageDoneState::class]);
    }
}
