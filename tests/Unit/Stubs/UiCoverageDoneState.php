<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Stubs;

use Filament\Schemas\Components\Component;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\StateContract;

final class UiCoverageDoneState implements StateContract
{
    /** @param array<array-key, mixed>|Model|string|null $record */
    /**
<<<<<<< HEAD
<<<<<<< .merge_file_Z9OQSM
=======
<<<<<<< .merge_file_YKhn1N
>>>>>>> .merge_file_KHZZK2
<<<<<<< HEAD
     * @param  Model|array<string, mixed>|string|null  $record
     */
    public function __construct(
        public Model|array|string|null $record = null,
    ) {}
=======
<<<<<<< .merge_file_Z9OQSM
=======
=======
>>>>>>> .merge_file_XmNcVH
>>>>>>> .merge_file_KHZZK2
=======
>>>>>>> 804451c (Lint)
     * @param Model|array<string, mixed>|string|null $record
     */
    public function __construct(
        public Model|array|string|null $record = null,
    ) {
    }
<<<<<<< HEAD
<<<<<<< .merge_file_Z9OQSM
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_YKhn1N
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_XmNcVH
>>>>>>> .merge_file_KHZZK2
=======
>>>>>>> 804451c (Lint)

    public function label(): string
    {
        return 'Done';
    }

    public function color(): string
    {
        return 'success';
    }

    public function bgColor(): string
    {
        return 'green';
    }

    public function icon(): string
    {
        return 'heroicon-o-check';
    }

    public function modalHeading(): string
    {
        return 'Done';
    }

    public function modalDescription(): string
    {
        return 'Completed';
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
<<<<<<< .merge_file_Z9OQSM
=======
<<<<<<< .merge_file_YKhn1N
>>>>>>> .merge_file_KHZZK2
<<<<<<< HEAD
     * @param  array<string, mixed>  $data
     */
    public function modalActionByRecord(Model $record, array $data): void {}
=======
<<<<<<< .merge_file_Z9OQSM
=======
=======
>>>>>>> .merge_file_XmNcVH
>>>>>>> .merge_file_KHZZK2
=======
>>>>>>> 804451c (Lint)
     * @param array<string, mixed> $data
     */
    public function modalActionByRecord(Model $record, array $data): void
    {
    }
<<<<<<< HEAD
<<<<<<< .merge_file_Z9OQSM
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_YKhn1N
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_XmNcVH
>>>>>>> .merge_file_KHZZK2
=======
>>>>>>> 804451c (Lint)

    public function isMessageRequired(): bool
    {
        return true;
    }

    public function canTransitionTo(string $stateClass): bool
    {
        return false;
    }
}
