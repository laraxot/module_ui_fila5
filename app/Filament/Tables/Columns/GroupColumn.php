<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;
<<<<<<< HEAD
<<<<<<< .merge_file_tR081w
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD

class GroupColumn extends Column
=======
<<<<<<< HEAD
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
=======
use Filament\Tables\Table;
use Modules\Xot\Filament\Tables\Columns\XotBaseColumn;

>>>>>>> 804451c (Lint)
/**
 * Groups multiple Filament columns in one cell.
 *
 * Child columns must be mounted to the same Table as this GroupColumn —
 * otherwise getState() / toEmbeddedHtml() throw
 * "The column [x] is not mounted to a table".
 */
class GroupColumn extends XotBaseColumn
<<<<<<< HEAD
<<<<<<< .merge_file_tR081w
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_qrATa5
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
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
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
     * Initialize the component.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Component initialization logic
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
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
=======
     * @param array<int|string, mixed> $form
     */
    public function schema(array $form): self
    {
        // Type-check to ensure all elements are Column instances
        $filtered = array_filter($form, function (mixed $item): bool {
=======
>>>>>>> 804451c (Lint)
     * @param  array<int|string, mixed>  $form
     */
    public function schema(array $form): static
    {
        $filtered = array_filter($form, static function (mixed $item): bool {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $filtered = array_filter($form, static function (mixed $item): bool {
>>>>>>> .merge_file_qrATa5
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
            return $item instanceof Column;
        });

        /** @var array<int, Column> $filteredValues */
        $filteredValues = array_values($filtered);
        $this->schema = $filteredValues;

<<<<<<< HEAD
<<<<<<< .merge_file_tR081w
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
        return $this;
    }
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        return $this;
    }
=======
>>>>>>> laraxot/dev
        $this->mountChildrenToTable($this->table);
=======
=======
>>>>>>> 804451c (Lint)
        $this->mountChildrenToTable($this->table);

        return $this;
    }

    public function table(?Table $table): static
    {
        parent::table($table);
        $this->mountChildrenToTable($table);
<<<<<<< HEAD
>>>>>>> .merge_file_qrATa5

        return $this;
    }

<<<<<<< .merge_file_tR081w
    public function table(?Table $table): static
    {
        parent::table($table);
        $this->mountChildrenToTable($table);
=======
>>>>>>> 804451c (Lint)

        return $this;
    }

    private function mountChildrenToTable(?Table $table): void
    {
        if ($table === null) {
<<<<<<< HEAD
=======
    private function mountChildrenToTable(?Table $table): void
    {
        if (null === $table) {
>>>>>>> .merge_file_qrATa5
=======
>>>>>>> 804451c (Lint)
            return;
        }

        foreach ($this->schema as $child) {
            $child->table($table);
        }
    }
<<<<<<< HEAD
<<<<<<< .merge_file_tR081w
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_qrATa5
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
}
