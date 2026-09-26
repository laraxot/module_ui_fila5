<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\TextColumn;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_M1wv0c

/**
 * Controparte in lista di {@see \Modules\UI\Filament\Forms\Components\AddressField}.
=======
<<<<<<< .merge_file_5ZlvHQ

/**
 * Controparte in lista di {@see \Modules\UI\Filament\Forms\Components\AddressField}.
=======
<<<<<<< .merge_file_tTxKcd

/**
 * Controparte in lista di {@see \Modules\UI\Filament\Forms\Components\AddressField}.
=======
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
use Modules\UI\Filament\Forms\Components\AddressField;

/**
 * Controparte in lista di {@see AddressField}.
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> .merge_file_NIB9Ux
>>>>>>> .merge_file_Bag2pu
>>>>>>> .merge_file_hJD7Qz
=======
>>>>>>> laraxot/dev
=======
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
<<<<<<< HEAD
<<<<<<< .merge_file_M1wv0c
     * Stesso ordine di {@see \Modules\UI\Filament\Forms\Components\AddressField::getDefaultChildComponents()}.
=======
<<<<<<< .merge_file_5ZlvHQ
     * Stesso ordine di {@see \Modules\UI\Filament\Forms\Components\AddressField::getDefaultChildComponents()}.
=======
<<<<<<< .merge_file_tTxKcd
     * Stesso ordine di {@see \Modules\UI\Filament\Forms\Components\AddressField::getDefaultChildComponents()}.
=======
     * Stesso ordine di {@see AddressField::getDefaultChildComponents()}.
>>>>>>> .merge_file_NIB9Ux
>>>>>>> .merge_file_Bag2pu
>>>>>>> .merge_file_hJD7Qz
=======
     * Stesso ordine di {@see AddressField::getDefaultChildComponents()}.
>>>>>>> laraxot/dev
=======
     * Stesso ordine di {@see AddressField::getDefaultChildComponents()}.
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
<<<<<<< HEAD
<<<<<<< .merge_file_M1wv0c
     * @param  list<string>  $fields
=======
<<<<<<< .merge_file_5ZlvHQ
=======
<<<<<<< .merge_file_tTxKcd
>>>>>>> .merge_file_Bag2pu
     * <<<<<<< HEAD
     *
     * @param list<string> $fields
     *                             =======
     * @param list<string> $fields
     *                             >>>>>>> laraxot/dev
<<<<<<< .merge_file_5ZlvHQ
=======
=======
     * @param list<string> $fields
>>>>>>> .merge_file_NIB9Ux
>>>>>>> .merge_file_Bag2pu
>>>>>>> .merge_file_hJD7Qz
=======
     * @param list<string> $fields
>>>>>>> laraxot/dev
=======
     * @param list<string> $fields
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
