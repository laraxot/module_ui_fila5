<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
<<<<<<< .merge_file_2JhM25
=======
<<<<<<< .merge_file_dYmJgX
=======
<<<<<<< .merge_file_pxmKdd
=======
<<<<<<< .merge_file_xTwJaz
>>>>>>> .merge_file_f37cON
>>>>>>> .merge_file_7w43WL
>>>>>>> .merge_file_6iEWRc
use Modules\Xot\Filament\Schemas\Components\XotBaseSection;

/**
 * Controparte in form di {@see \Modules\UI\Filament\Tables\Columns\PersonColumn}.
<<<<<<< .merge_file_2JhM25
=======
<<<<<<< .merge_file_dYmJgX
=======
<<<<<<< .merge_file_pxmKdd
=======
=======
>>>>>>> .merge_file_6iEWRc
use Modules\UI\Filament\Tables\Columns\PersonColumn;

/**
 * Controparte in form di {@see PersonColumn}.
<<<<<<< .merge_file_2JhM25
=======
>>>>>>> .merge_file_U9Vd6i
>>>>>>> .merge_file_f37cON
>>>>>>> .merge_file_7w43WL
>>>>>>> .merge_file_6iEWRc
 *
 * Stessi campi anagrafici + contatto (`first_name`, `last_name`, `email`,
 * `mobile_phone`, `language`), due superfici: qui li edita, la colonna li mostra
 * raggruppati. Vedi la mappatura schema.org/Person nel docblock di PersonColumn.
 *
 * @see Modules/UI/docs/form-column-parity.md
 */
class PersonSection extends XotBaseSection
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->schema([
            Grid::make(3)->schema([
                TextInput::make('first_name'),
                TextInput::make('last_name'),
                TextInput::make('email')->email(),
            ]),
            Grid::make(2)->schema([
                TextInput::make('mobile_phone')->tel(),
                TextInput::make('language'),
            ]),
        ]);
    }

    public static function getDefaultName(): ?string
    {
        return 'person';
    }
}
