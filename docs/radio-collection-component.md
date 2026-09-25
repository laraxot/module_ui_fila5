# RadioCollection Component

## Overview

The RadioCollection component provides a customizable radio button group for Filament forms, allowing for custom item rendering and flexible data binding.

## Architecture

### Class Structure

- **Namespace**: `Modules\UI\Filament\Forms\Components`
- **Extends**: `Filament\Forms\Components\Field`
- **Key Methods**:
  - `options(Collection $options)`: Set the collection of options
  - `itemView(string $view)`: Set custom item view
  - `valueKey(string $key)`: Set the key used for option values

### Template Structure

- **Location**: `resources/views/filament/forms/components/radio-collection.blade.php`
- **Features**:
  - Custom item rendering
  - Hover and active states
  - Accessibility support
  - Dark mode compatibility

## Usage

### Basic Usage

```php
RadioCollection::make('status')
    ->options(collect([
        ['id' => 'active', 'name' => 'Active'],
        ['id' => 'inactive', 'name' => 'Inactive']
    ]))
    ->itemView('path.to.custom-view')
    ->valueKey('id')
```

### Custom Item View

Create a Blade view that will be rendered for each item:

```blade
<!-- resources/views/path/to/custom-view.blade.php -->
<div>
    <h3 class="font-medium">{{ $item['name'] }}</h3>
    @if(isset($item['description']))
        <p class="text-sm text-gray-500">{{ $item['description'] }}</p>
    @endif
</div>
```

## Known Issues

### Selection Problems

If radio buttons are not selecting properly, check:

1. Ensure `wire:key` is unique for each option
2. Verify that `$getStatePath()` is resolving correctly
3. Check for JavaScript errors in the console
4. Ensure the component is properly initialized in a Livewire context

## Best Practices

1. Always provide a unique `valueKey` if not using 'id'
2. Keep item views simple and focused
3. Test in both light and dark modes
4. Verify accessibility of custom item views

## Troubleshooting

### Radio Buttons Not Selecting

1. Check browser console for JavaScript errors
2. Verify Livewire component is properly initialized
3. Ensure the state path is correct and accessible
4. Test with default item view to isolate the issue

### State Not Updating

1. Verify the `wire:model` binding is correct
2. Check if any JavaScript is preventing form submission
3. Ensure the parent form is properly set up for Livewire

## Related Components

- `CheckboxList`
- `Select`
- `Radio`

## Changelog

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_9vD8Ml
=======
<<<<<<< .merge_file_qDkfGG
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### 2025-06-27
=======
>>>>>>> .merge_file_BDpFKz
>>>>>>> .merge_file_kblJk8
### [DATE]
>>>>>>> laraxot/dev
=======
### [DATE]
>>>>>>> laraxot/dev

- Initial documentation
- Added troubleshooting section for selection issues
# RadioCollection Component
<<<<<<< HEAD
<<<<<<< HEAD
## Overview
The RadioCollection component provides a customizable radio button group for Filament forms, allowing for custom item rendering and flexible data binding.
## Architecture
### Class Structure
=======
=======
>>>>>>> laraxot/dev

## Overview

The RadioCollection component provides a customizable radio button group for Filament forms, allowing for custom item rendering and flexible data binding.

## Architecture

### Class Structure

<<<<<<< HEAD
<<<<<<< .merge_file_9vD8Ml
=======
=======
<<<<<<< .merge_file_qDkfGG
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kblJk8
### 2025-06-27

- Initial documentation
<<<<<<< HEAD
- Added troubleshooting section for selection issues
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Added troubleshooting section for selection issues
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
- Added troubleshooting section for selection issues
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- Added troubleshooting section for selection issues
# RadioCollection Component
## Overview
The RadioCollection component provides a customizable radio button group for Filament forms, allowing for custom item rendering and flexible data binding.
## Architecture
### Class Structure
<<<<<<< .merge_file_9vD8Ml
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_BDpFKz
>>>>>>> .merge_file_kblJk8
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
- **Namespace**: `Modules\UI\Filament\Forms\Components`
- **Extends**: `Filament\Forms\Components\Field`
- **Key Methods**:
  - `options(Collection $options)`: Set the collection of options
  - `itemView(string $view)`: Set custom item view
  - `valueKey(string $key)`: Set the key used for option values
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_9vD8Ml

### Template Structure

=======
### Template Structure
=======
<<<<<<< .merge_file_qDkfGG

### Template Structure

=======
<<<<<<< HEAD
### Template Structure
=======
<<<<<<< HEAD

### Template Structure

=======
### Template Structure
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
### Template Structure
=======

### Template Structure

>>>>>>> .merge_file_BDpFKz
>>>>>>> .merge_file_kblJk8
>>>>>>> laraxot/dev
=======

### Template Structure

>>>>>>> laraxot/dev
- **Location**: `resources/views/filament/forms/components/radio-collection.blade.php`
- **Features**:
  - Custom item rendering
  - Hover and active states
  - Accessibility support
  - Dark mode compatibility
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_9vD8Ml
=======
<<<<<<< .merge_file_qDkfGG
=======
<<<<<<< HEAD
## Usage
### Basic Usage
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Usage
### Basic Usage
=======
>>>>>>> .merge_file_BDpFKz
>>>>>>> .merge_file_kblJk8
=======
>>>>>>> laraxot/dev

## Usage

### Basic Usage

<<<<<<< HEAD
<<<<<<< .merge_file_9vD8Ml
=======
<<<<<<< .merge_file_qDkfGG
<<<<<<< HEAD
=======
>>>>>>> .merge_file_kblJk8
=======
## Usage
### Basic Usage
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9vD8Ml
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_BDpFKz
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kblJk8
=======
>>>>>>> laraxot/dev
```php
RadioCollection::make('status')
    ->options(collect([
        ['id' => 'active', 'name' => 'Active'],
        ['id' => 'inactive', 'name' => 'Inactive']
    ]))
    ->itemView('path.to.custom-view')
    ->valueKey('id')
```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_9vD8Ml
=======
<<<<<<< .merge_file_qDkfGG
=======
<<<<<<< HEAD
### Custom Item View
Create a Blade view that will be rendered for each item:
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Custom Item View
Create a Blade view that will be rendered for each item:
=======
>>>>>>> .merge_file_BDpFKz
>>>>>>> .merge_file_kblJk8
=======
>>>>>>> laraxot/dev

### Custom Item View

Create a Blade view that will be rendered for each item:

<<<<<<< HEAD
<<<<<<< .merge_file_9vD8Ml
=======
<<<<<<< .merge_file_qDkfGG
<<<<<<< HEAD
=======
>>>>>>> .merge_file_kblJk8
=======
### Custom Item View
Create a Blade view that will be rendered for each item:
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9vD8Ml
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_BDpFKz
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kblJk8
=======
>>>>>>> laraxot/dev
```blade
<!-- resources/views/path/to/custom-view.blade.php -->
<div>
    <h3 class="font-medium">{{ $item['name'] }}</h3>
    @if(isset($item['description']))
        <p class="text-sm text-gray-500">{{ $item['description'] }}</p>
    @endif
</div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_9vD8Ml
=======
<<<<<<< .merge_file_qDkfGG
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_BDpFKz
## Known Issues
### Selection Problems
If radio buttons are not selecting properly, check:
=======
<<<<<<< .merge_file_qDkfGG
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_BDpFKz
>>>>>>> .merge_file_kblJk8
=======
>>>>>>> laraxot/dev
```

## Known Issues

### Selection Problems

If radio buttons are not selecting properly, check:

<<<<<<< HEAD
<<<<<<< .merge_file_9vD8Ml
=======
<<<<<<< .merge_file_qDkfGG
<<<<<<< HEAD
=======
>>>>>>> .merge_file_kblJk8
=======
## Known Issues
### Selection Problems
If radio buttons are not selecting properly, check:
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9vD8Ml
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_BDpFKz
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kblJk8
=======
>>>>>>> laraxot/dev
1. Ensure `wire:key` is unique for each option
2. Verify that `$getStatePath()` is resolving correctly
3. Check for JavaScript errors in the console
4. Ensure the component is properly initialized in a Livewire context
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_9vD8Ml
=======
<<<<<<< .merge_file_qDkfGG
>>>>>>> .merge_file_kblJk8

## Best Practices

=======
<<<<<<< .merge_file_9vD8Ml
## Best Practices
=======
<<<<<<< HEAD
## Best Practices
=======
<<<<<<< HEAD

## Best Practices

=======
## Best Practices
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
## Best Practices
=======

## Best Practices

>>>>>>> .merge_file_BDpFKz
>>>>>>> .merge_file_kblJk8
>>>>>>> laraxot/dev
=======

## Best Practices

>>>>>>> laraxot/dev
1. Always provide a unique `valueKey` if not using 'id'
2. Keep item views simple and focused
3. Test in both light and dark modes
4. Verify accessibility of custom item views
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_9vD8Ml
=======
<<<<<<< .merge_file_qDkfGG
=======
<<<<<<< HEAD
## Troubleshooting
### Radio Buttons Not Selecting
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Troubleshooting
### Radio Buttons Not Selecting
=======
>>>>>>> .merge_file_BDpFKz
>>>>>>> .merge_file_kblJk8
=======
>>>>>>> laraxot/dev

## Troubleshooting

### Radio Buttons Not Selecting

<<<<<<< HEAD
<<<<<<< .merge_file_9vD8Ml
=======
<<<<<<< .merge_file_qDkfGG
<<<<<<< HEAD
=======
>>>>>>> .merge_file_kblJk8
=======
## Troubleshooting
### Radio Buttons Not Selecting
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9vD8Ml
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_BDpFKz
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kblJk8
=======
>>>>>>> laraxot/dev
1. Check browser console for JavaScript errors
2. Verify Livewire component is properly initialized
3. Ensure the state path is correct and accessible
4. Test with default item view to isolate the issue
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_9vD8Ml
=======
<<<<<<< .merge_file_qDkfGG
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### State Not Updating
1. Verify the `wire:model` binding is correct
2. Check if any JavaScript is preventing form submission
3. Ensure the parent form is properly set up for Livewire
## Related Components
- `CheckboxList`
- `Select`
- `Radio`
## Changelog
### 2025-06-27
- Initial documentation

```
=======
>>>>>>> .merge_file_BDpFKz
>>>>>>> .merge_file_kblJk8
=======
>>>>>>> laraxot/dev

### State Not Updating

1. Verify the `wire:model` binding is correct
2. Check if any JavaScript is preventing form submission
3. Ensure the parent form is properly set up for Livewire

## Related Components

- `CheckboxList`
- `Select`
- `Radio`

## Changelog

### [DATE]

- Initial documentation
- Added troubleshooting section for selection issues
<<<<<<< HEAD
<<<<<<< .merge_file_9vD8Ml
=======
=======
<<<<<<< .merge_file_qDkfGG
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kblJk8
### State Not Updating
1. Verify the `wire:model` binding is correct
2. Check if any JavaScript is preventing form submission
3. Ensure the parent form is properly set up for Livewire
## Related Components
- `CheckboxList`
- `Select`
- `Radio`
## Changelog
### 2025-06-27
- Initial documentation
<<<<<<< HEAD

```
=======
- Added troubleshooting section for selection issues
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- Added troubleshooting section for selection issues
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_9vD8Ml
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_BDpFKz
>>>>>>> .merge_file_kblJk8
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
