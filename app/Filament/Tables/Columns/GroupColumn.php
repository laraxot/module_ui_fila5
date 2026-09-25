<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;
<<<<<<< HEAD
<<<<<<< .merge_file_a3CE68
=======
<<<<<<< .merge_file_tR081w
>>>>>>> .merge_file_6jBa4s
<<<<<<< HEAD

class GroupColumn extends Column
=======
<<<<<<< .merge_file_a3CE68
use Filament\Tables\Table;
use Modules\Xot\Filament\Tables\Columns\XotBaseColumn;

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

class GroupColumn extends Column
=======
>>>>>>> laraxot/dev
use Filament\Tables\Table;
use Modules\Xot\Filament\Tables\Columns\XotBaseColumn;

=======
use Filament\Tables\Table;
use Modules\Xot\Filament\Tables\Columns\XotBaseColumn;

>>>>>>> .merge_file_qrATa5
>>>>>>> .merge_file_6jBa4s
/**
 * Groups multiple Filament columns in one cell.
 *
 * Child columns must be mounted to the same Table as this GroupColumn —
 * otherwise getState() / toEmbeddedHtml() throw
 * "The column [x] is not mounted to a table".
 */
class GroupColumn extends XotBaseColumn
<<<<<<< .merge_file_a3CE68
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_tR081w
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_qrATa5
>>>>>>> .merge_file_6jBa4s
=======

class GroupColumn extends Column
>>>>>>> laraxot/dev
{
    /** @var array<int|string, mixed> */
    public array $form = [];

    /**
     * @var array<Column>
     */
    protected array $schema = [];

    protected string $view = 'ui::filament.tables.columns.group';

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_a3CE68
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_6jBa4s
=======
>>>>>>> laraxot/dev
     * Initialize the component.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Component initialization logic
    }

    /**
<<<<<<< HEAD
<<<<<<< .merge_file_a3CE68
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_6jBa4s
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
     * @return array<Column>
     */
    public function getFields(): array
    {
        return $this->schema;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_a3CE68
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_6jBa4s
=======
>>>>>>> laraxot/dev
     * @param array<int|string, mixed> $form
     */
    public function schema(array $form): static
    {
<<<<<<< HEAD
<<<<<<< .merge_file_tR081w
        // Type-check to ensure all elements are Column instances
        $filtered = array_filter($form, function (mixed $item): bool {
<<<<<<< .merge_file_a3CE68
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_6jBa4s
     * @param  array<int|string, mixed>  $form
     */
    public function schema(array $form): static
    {
        $filtered = array_filter($form, static function (mixed $item): bool {
<<<<<<< .merge_file_a3CE68
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $filtered = array_filter($form, static function (mixed $item): bool {
>>>>>>> .merge_file_qrATa5
>>>>>>> .merge_file_6jBa4s
=======
        // Type-check to ensure all elements are Column instances
        $filtered = array_filter($form, function (mixed $item): bool {
>>>>>>> laraxot/dev
            return $item instanceof Column;
        });

        /** @var array<int, Column> $filteredValues */
        $filteredValues = array_values($filtered);
        $this->schema = $filteredValues;

<<<<<<< HEAD
<<<<<<< .merge_file_a3CE68
=======
<<<<<<< .merge_file_tR081w
>>>>>>> .merge_file_6jBa4s
<<<<<<< HEAD
        return $this;
    }
=======
<<<<<<< .merge_file_a3CE68
        $this->mountChildrenToTable($this->table);
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
        return $this;
    }
=======
>>>>>>> laraxot/dev
        $this->mountChildrenToTable($this->table);
=======
        $this->mountChildrenToTable($this->table);

        return $this;
    }

    public function table(?Table $table): static
    {
        parent::table($table);
        $this->mountChildrenToTable($table);
>>>>>>> .merge_file_qrATa5
>>>>>>> .merge_file_6jBa4s

        return $this;
    }

<<<<<<< .merge_file_a3CE68
=======
<<<<<<< .merge_file_tR081w
>>>>>>> .merge_file_6jBa4s
    public function table(?Table $table): static
    {
        parent::table($table);
        $this->mountChildrenToTable($table);

        return $this;
    }

    private function mountChildrenToTable(?Table $table): void
    {
        if ($table === null) {
<<<<<<< .merge_file_a3CE68
=======
=======
    private function mountChildrenToTable(?Table $table): void
    {
        if (null === $table) {
>>>>>>> .merge_file_qrATa5
>>>>>>> .merge_file_6jBa4s
            return;
        }

        foreach ($this->schema as $child) {
            $child->table($table);
        }
    }
<<<<<<< .merge_file_a3CE68
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_tR081w
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_qrATa5
>>>>>>> .merge_file_6jBa4s
=======
        return $this;
    }
>>>>>>> laraxot/dev
}
