<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;
<<<<<<< .merge_file_tR081w
<<<<<<< HEAD

class GroupColumn extends Column
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
/**
 * Groups multiple Filament columns in one cell.
 *
 * Child columns must be mounted to the same Table as this GroupColumn —
 * otherwise getState() / toEmbeddedHtml() throw
 * "The column [x] is not mounted to a table".
 */
class GroupColumn extends XotBaseColumn
<<<<<<< .merge_file_tR081w
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_qrATa5
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
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
     * @return array<Column>
     */
    public function getFields(): array
    {
        return $this->schema;
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
     * @param array<int|string, mixed> $form
     */
    public function schema(array $form): static
    {
<<<<<<< .merge_file_tR081w
        // Type-check to ensure all elements are Column instances
        $filtered = array_filter($form, function (mixed $item): bool {
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
     * @param  array<int|string, mixed>  $form
     */
    public function schema(array $form): static
    {
        $filtered = array_filter($form, static function (mixed $item): bool {
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $filtered = array_filter($form, static function (mixed $item): bool {
>>>>>>> .merge_file_qrATa5
            return $item instanceof Column;
        });

        /** @var array<int, Column> $filteredValues */
        $filteredValues = array_values($filtered);
        $this->schema = $filteredValues;

<<<<<<< .merge_file_tR081w
<<<<<<< HEAD
        return $this;
    }
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

        return $this;
    }

<<<<<<< .merge_file_tR081w
    public function table(?Table $table): static
    {
        parent::table($table);
        $this->mountChildrenToTable($table);

        return $this;
    }

    private function mountChildrenToTable(?Table $table): void
    {
        if ($table === null) {
=======
    private function mountChildrenToTable(?Table $table): void
    {
        if (null === $table) {
>>>>>>> .merge_file_qrATa5
            return;
        }

        foreach ($this->schema as $child) {
            $child->table($table);
        }
    }
<<<<<<< .merge_file_tR081w
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_qrATa5
}
