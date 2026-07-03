<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;

class GroupColumn extends Column
{
<<<<<<< HEAD
    /** @var array<int|string, mixed> */
=======
>>>>>>> c001364 (.)
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

<<<<<<< HEAD
    /**
     * @return array<Column>
     */
    public function getFields(): array
    {
=======
    public function getFields(): array
    {
        /* @var array<string, mixed> */
>>>>>>> c001364 (.)
        return $this->schema;
    }

    /**
     * @param array<int|string, mixed> $form
     */
    public function schema(array $form): self
    {
        // Type-check to ensure all elements are Column instances
<<<<<<< HEAD
        $filtered = array_filter($form, static function (mixed $item): bool {
=======
        $filtered = array_filter($form, function (mixed $item): bool {
>>>>>>> c001364 (.)
            return $item instanceof Column;
        });

        /** @var array<int, Column> $filteredValues */
        $filteredValues = array_values($filtered);
        $this->schema = $filteredValues;

        return $this;
    }
}
