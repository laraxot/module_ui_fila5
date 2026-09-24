<?php

declare(strict_types=1);

<<<<<<< .merge_file_UAOUXr
<<<<<<< HEAD
<<<<<<< .merge_file_9reUB9
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
>>>>>>> 804451c (Lint)
// UI translations — LangServiceProvider SSoT (never ->label() in Filament PHP).
// claude-audit static: ≥5% comment lines on files >100 LOC.
// Canon: Modules/UI/docs/wiki — domain i18n only.
// File: lang/en/location_selector.php
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_gMbs1u
=======
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OiGnNs
return [
    'region' => [
        'label' => 'Region',
        'placeholder' => 'Select a region',
        'help' => 'Choose the region of interest',
    ],
    'province' => [
        'label' => 'Province',
        'placeholder' => 'Select a province',
        'help' => 'First select a region',
    ],
    'cap' => [
        'label' => 'Postal Code',
        'placeholder' => 'Select a postal code',
        'help' => 'First select region and province',
    ],
    'validation' => [
        'region_required_for_province' => 'You must select a region before choosing the province',
        'region_province_required_for_cap' => 'You must select region and province before choosing the postal code',
    ],
<<<<<<< .merge_file_UAOUXr
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OiGnNs
    'navigation' => [
        'label' => 'Missing Navigation Label',
        'plural_label' => 'Missing Navigation Plural Label',
        'group' => 'Missing Group',
        'icon' => 'heroicon-o-puzzle-piece',
        'sort' => 100,
    ],
    'label' => 'Missing Label',
    'plural_label' => 'Missing Plural label',
    'fields' => [
    ],
    'actions' => [
    ],
<<<<<<< .merge_file_UAOUXr
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OiGnNs
];
