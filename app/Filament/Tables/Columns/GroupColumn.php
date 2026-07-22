<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;
<<<<<<< HEAD
use Modules\Xot\Filament\Tables\Columns\XotBaseColumn;

class GroupColumn extends XotBaseColumn
=======

class GroupColumn extends Column
>>>>>>> dfac49d (.)
{
    /** @var array<int|string, mixed> */
    public array $form = [];

    /**
     * @var array<Column>
     */
    protected array $schema = [];

    protected string $view = 'ui::filament.tables.columns.group';

    /**
     * Initialize the component.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Component initialization logic
    }

    /**
     * @return array<Column>
     */
    public function getFields(): array
    {
        return $this->schema;
    }

    /**
     * @param array<int|string, mixed> $form
     */
<<<<<<< .merge_file_bFKhGW
    public function schema(array $form): self
=======
<<<<<<< HEAD
    public function schema(array $form): static
>>>>>>> .merge_file_UAUGOX
    {
        // Type-check to ensure all elements are Column instances
        $filtered = array_filter($form, function (mixed $item): bool {
=======
    public function schema(array $form): self
    {
        // Type-check to ensure all elements are Column instances
        $filtered = array_filter($form, static function (mixed $item): bool {
>>>>>>> dfac49d (.)
            return $item instanceof Column;
        });

        /** @var array<int, Column> $filteredValues */
        $filteredValues = array_values($filtered);
        $this->schema = $filteredValues;

        return $this;
    }
}
