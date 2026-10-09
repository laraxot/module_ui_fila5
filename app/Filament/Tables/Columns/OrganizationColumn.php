<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\TextColumn;

/** Reusable table representation of schema.org/Organization properties. */
final class OrganizationColumn extends GroupColumn
{
    protected const string DEFAULT_NAME = 'organization';

    /** @var list<string> */
    protected array $fields = [
        'name',
        'legal_name',
        'url',
        'email',
        'telephone',
        'logo',
    ];

    public static function make(?string $name = null): static
    {
<<<<<<< .merge_file_K3g0a8
        $column = parent::make($name ?? static::DEFAULT_NAME);
=======
        $column = parent::make($name ?? self::DEFAULT_NAME);
>>>>>>> .merge_file_BmGblp

        return $column->schema($column->getSchema());
    }

    /** @param list<string> $fields */
    public function fields(array $fields): static
    {
        $this->fields = $fields;

        return $this->schema($this->getSchema());
    }

    /** @return array<string, Column> */
    public function getSchema(): array
    {
        $schema = [];
        foreach ($this->fields as $field) {
            $schema[$field] = TextColumn::make($field);
        }

        return $schema;
    }
}
