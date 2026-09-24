<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\TextColumn;
<<<<<<< HEAD
use Modules\UI\Filament\Forms\Components\AddressField;

/**
 * Controparte in lista di {@see AddressField}.
=======

/**
 * Controparte in lista di {@see \Modules\UI\Filament\Forms\Components\AddressField}.
>>>>>>> laraxot/dev
 *
 * Stesso insieme di campi (`country`, `street`, `city`, `state`, `zip`), due superfici:
 * il form li edita, la tabella li mostra. Il form legge la relazione con
 * `afterStateHydrated()`; qui la colonna legge lo stato via `getStateUsing()` sullo
 * stesso nome di relazione, coerente con `AddressField::getRelationship()`.
 *
 * Usage:
 * ```php
 * 'address' => AddressColumn::make(),
 * 'address' => AddressColumn::make()->fields(['city', 'zip']),
 * ```
 *
 * @see Modules/Ptv/docs/form-column-parity.md
 */
class AddressColumn extends GroupColumn
{
    protected const string DEFAULT_NAME = 'address';

    /**
<<<<<<< HEAD
     * Stesso ordine di {@see AddressField::getDefaultChildComponents()}.
=======
     * Stesso ordine di {@see \Modules\UI\Filament\Forms\Components\AddressField::getDefaultChildComponents()}.
>>>>>>> laraxot/dev
     *
     * @var list<string>
     */
    protected array $fields = [
        'country',
        'street',
        'city',
        'state',
        'zip',
    ];

    public static function make(?string $name = null): static
    {
        $column = parent::make($name ?? static::DEFAULT_NAME);

        return $column->schema($column->getSchema());
    }

    /**
     * Sostituisce l'elenco dei campi mostrati.
     *
<<<<<<< HEAD
     * @param  list<string>  $fields
=======
     * <<<<<<< HEAD
     *
     * @param list<string> $fields
     *                             =======
     * @param list<string> $fields
     *                             >>>>>>> laraxot/dev
>>>>>>> laraxot/dev
     */
    public function fields(array $fields): static
    {
        $this->fields = $fields;

        return $this->schema($this->getSchema());
    }

    /**
     * @return array<string, Column>
     */
    public function getSchema(): array
    {
        $relationship = $this->getName();
        $schema = [];
        foreach ($this->fields as $field) {
            $schema[$field] = TextColumn::make("{$relationship}.{$field}")
                ->label($field);
        }

        return $schema;
    }
}
