<<<<<<< .merge_file_zbCuTW
<?php declare(strict_types=1);
namespace Modules\UI\Filament\Components\Schema;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Hidden;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Forms\Get;
use Filament\Forms\Set;
=======
<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Components\Schema;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
>>>>>>> .merge_file_yJIDxX
use Modules\UI\Contracts\SchemaComponentContract;

/**
 * schema.org Person - reusable Filament form component
 * Properties: name, email, telephone, address, jobTitle, worksFor, knowsAbout, image, description
 */
final class PersonForm implements SchemaComponentContract
{
    public static function type(): string
    {
        return 'Person';
    }

    public static function make(?string $prefix = null): array
    {
<<<<<<< .merge_file_zbCuTW
        $p = $prefix ? $prefix . '.' : '';
=======
        $p = $prefix ? $prefix.'.' : '';

>>>>>>> .merge_file_yJIDxX
        return [
            Section::make('Person')
                ->schema([
                    Grid::make(2)->schema([
<<<<<<< .merge_file_zbCuTW
                        TextInput::make($p . 'name')
=======
                        TextInput::make($p.'name')
>>>>>>> .merge_file_yJIDxX
                            ->label('Full Name')
                            ->required()
                            ->maxLength(100)
                            ->helperText('schema.org: name'),
<<<<<<< .merge_file_zbCuTW
                        TextInput::make($p . 'email')
=======
                        TextInput::make($p.'email')
>>>>>>> .merge_file_yJIDxX
                            ->label('Email')
                            ->email()
                            ->maxLength(150)
                            ->helperText('schema.org: email'),
                    ]),
                    Grid::make(2)->schema([
<<<<<<< .merge_file_zbCuTW
                        TextInput::make($p . 'telephone')
=======
                        TextInput::make($p.'telephone')
>>>>>>> .merge_file_yJIDxX
                            ->label('Phone')
                            ->tel()
                            ->maxLength(30)
                            ->helperText('schema.org: telephone'),
<<<<<<< .merge_file_zbCuTW
                        TextInput::make($p . 'jobTitle')
=======
                        TextInput::make($p.'jobTitle')
>>>>>>> .merge_file_yJIDxX
                            ->label('Job Title')
                            ->maxLength(100)
                            ->helperText('schema.org: jobTitle'),
                    ]),
<<<<<<< .merge_file_zbCuTW
                    Textarea::make($p . 'address')
                        ->label('Address')
                        ->rows(3)
                        ->helperText('schema.org: address'),
                    TextInput::make($p . 'worksFor')
                        ->label('Organization')
                        ->maxLength(100)
                        ->helperText('schema.org: worksFor (Organization name or @id)'),
                    TagsInput::make($p . 'knowsAbout')
                        ->label('Knows About')
                        ->helperText('schema.org: knowsAbout (skills, topics)'),
                    Hidden::make('component_type')->default('Person'),
                    FileUpload::make($p . 'image')
=======
                    Textarea::make($p.'address')
                        ->label('Address')
                        ->rows(3)
                        ->helperText('schema.org: address'),
                    TextInput::make($p.'worksFor')
                        ->label('Organization')
                        ->maxLength(100)
                        ->helperText('schema.org: worksFor (Organization name or @id)'),
                    TagsInput::make($p.'knowsAbout')
                        ->label('Knows About')
                        ->helperText('schema.org: knowsAbout (skills, topics)'),
                    Hidden::make('component_type')->default('Person'),
                    FileUpload::make($p.'image')
>>>>>>> .merge_file_yJIDxX
                        ->label('Profile Image')
                        ->image()
                        ->directory('schema/person')
                        ->helperText('schema.org: image'),
<<<<<<< .merge_file_zbCuTW
                    Textarea::make($p . 'description')
=======
                    Textarea::make($p.'description')
>>>>>>> .merge_file_yJIDxX
                        ->label('Bio / Description')
                        ->rows(4)
                        ->helperText('schema.org: description'),
                ]),
        ];
    }
}
