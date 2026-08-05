<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
use Filament\Tables\Table;
use Modules\Xot\Filament\Tables\Columns\XotBaseColumn;

/**
 * Groups multiple Filament columns in one cell.
 *
 * Child columns must be mounted to the same Table as this GroupColumn —
 * otherwise getState() / toEmbeddedHtml() throw
 * "The column [x] is not mounted to a table".
 */
class GroupColumn extends XotBaseColumn
{
    /** @var array<int|string, mixed> */
<<<<<<< HEAD
=======
=======

class GroupColumn extends Column
{
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
    public array $form = [];

    /**
     * @var array<Column>
     */
    protected array $schema = [];

    protected string $view = 'ui::filament.tables.columns.group';

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
     * @return array<Column>
     */
    public function getFields(): array
    {
<<<<<<< HEAD
=======
=======
     * Initialize the component.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Component initialization logic
    }

    public function getFields(): array
    {
        /* @var array<string, mixed> */
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
        return $this->schema;
    }

    /**
<<<<<<< HEAD
     * @param  array<int|string, mixed>  $form
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<int|string, mixed> $form
=======
     * @param  array<int|string, mixed>  $form
>>>>>>> 990a9de5 (.)
>>>>>>> laraxot/dev
     */
    public function schema(array $form): static
    {
        $filtered = array_filter($form, static function (mixed $item): bool {
            return $item instanceof Column;
        });

<<<<<<< HEAD
=======
=======
     * @param  array<int|string, mixed>  $form
     */
    public function schema(array $form): self
    {
        // Type-check to ensure all elements are Column instances
        $filtered = array_filter($form, function (mixed $item): bool {
            return $item instanceof Column;
        });

        /** @var array<int|string, Column> $filtered */
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
        /** @var array<int, Column> $filteredValues */
        $filteredValues = array_values($filtered);
        $this->schema = $filteredValues;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
        $this->mountChildrenToTable($this->table);

        return $this;
    }

    public function table(?Table $table): static
    {
        parent::table($table);
        $this->mountChildrenToTable($table);

        return $this;
    }

    private function mountChildrenToTable(?Table $table): void
    {
<<<<<<< HEAD
        if (null === $table) {
            return;
=======
<<<<<<< HEAD
        if (null === $table) {
=======
        if ($table === null) {
            return;
>>>>>>> 990a9de5 (.)
>>>>>>> laraxot/dev
        }

        foreach ($this->schema as $child) {
            $child->table($table);
        }
    }
<<<<<<< HEAD
=======
=======
        return $this;
    }
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
}
