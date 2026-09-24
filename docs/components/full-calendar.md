<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_AOBTcp
=======
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_AOBTcp
=======
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
---
title: "FullCalendar Component for Filament"
type: concept
tags: [full, calendar]
created: 2026-07-14
updated: 2026-07-14
qmd: "full-calendar fullcalendar component for filament"
issues: ["https://github.com/provtv/<nome repository>/issues/124"]
discussions: ["https://github.com/provtv/<nome repository>/discussions/1"]
related:
  - "./address-field-1.md"
  - "./address-field.md"
  - "./blade-component-registration.md"
  - "./filament-usage.md"
  - "./filament.md"
  - "./file-upload.md"
  - "./footer.md"
  - "./full-calendar-1.md"
---
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======

<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
# FullCalendar Component for Filament

## Introduction
This document describes the implementation and usage of Saade's FullCalendar component for Filament within the UI modules of Laraxot PTVX. This component offers complete integration of the popular FullCalendar JavaScript plugin with Filament, allowing users to view and manage events in an intuitive calendar interface.

## Installation

To install the component:

```bash
composer require saade/filament-fullcalendar:^3.0
```

## Configuration in UI Module

### 1. Plugin Registration

In the UI module service provider (`Modules/UI/Providers/UIServiceProvider.php`), register the FullCalendar plugin:

```php
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;

// Inside the boot() or register() method
$this->app->booted(function () {
    // Register the plugin for all Filament panels
    \Filament\Facades\Filament::registerPlugin(
        FilamentFullCalendarPlugin::make()
    );
});
```

### 2. Base Widget Creation

Create a base widget class in the UI module:

```php
<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Filament\Forms;
use Illuminate\Database\Eloquent\Model;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Saade\FilamentFullCalendar\Data\EventData;

/**
 * Base widget for FullCalendar.
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
 *
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
 * 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
 * 
=======
 *
>>>>>>> laraxot/dev
=======
 * 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< HEAD
=======
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
 * Provides core functionality for all calendars in the application.
 */
abstract class BaseCalendarWidget extends FullCalendarWidget
{
    /**
     * Base model for events.
     *
     * @var class-string<Model>|null
     */
    protected Model | string | null $model = null;

    /**
     * Set up the widget configuration.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->selectable(true)
            ->editable(true)
            ->timezone(config('app.timezone'))
            ->locale('it')
            ->plugins(['dayGrid', 'timeGrid', 'list', 'interaction']);
    }

    /**
     * Get form schema for event creation/editing.
     *
     * @return array<int, Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('title')
                ->label(__('ui::calendar.fields.title.label'))
                ->placeholder(__('ui::calendar.fields.title.placeholder'))
                ->helperText(__('ui::calendar.fields.title.help'))
                ->required(),
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_AOBTcp

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_KSEKzW

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
=======
>>>>>>> laraxot/dev
<<<<<<< HEAD
                
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
                
=======

>>>>>>> laraxot/dev
=======
                
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
            Forms\Components\Grid::make()
                ->schema([
                    Forms\Components\DateTimePicker::make('start_date')
                        ->label(__('ui::calendar.fields.start_date.label'))
                        ->required(),
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_AOBTcp

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_KSEKzW

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
=======
>>>>>>> laraxot/dev
<<<<<<< HEAD
                        
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
                        
=======

>>>>>>> laraxot/dev
=======
                        
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
                    Forms\Components\DateTimePicker::make('end_date')
                        ->label(__('ui::calendar.fields.end_date.label'))
                        ->required(),
                ]),
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_AOBTcp

=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_KSEKzW

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
=======
>>>>>>> laraxot/dev
<<<<<<< HEAD
                
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
                
=======

>>>>>>> laraxot/dev
=======
                
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
            Forms\Components\Textarea::make('description')
                ->label(__('ui::calendar.fields.description.label'))
                ->placeholder(__('ui::calendar.fields.description.placeholder'))
                ->columnSpanFull(),
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_AOBTcp
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
                
            Forms\Components\ColorPicker::make('color')
                ->label(__('ui::calendar.fields.color.label'))
                ->rgb(),
                
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_AOBTcp
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev

            Forms\Components\ColorPicker::make('color')
                ->label(__('ui::calendar.fields.color.label'))
                ->rgb(),

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< HEAD
=======
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
            Forms\Components\Toggle::make('is_all_day')
                ->label(__('ui::calendar.fields.is_all_day.label'))
                ->default(false),
        ];
    }

    /**
     * Create a new event from form data.
     *
     * @param array<string, mixed> $data
     * @return Model
     */
    public function createEvent(array $data): Model
    {
        return $this->model::create($data);
    }

    /**
     * Update an existing event with form data.
     *
     * @param Model $event
     * @param array<string, mixed> $data
     * @return Model
     */
    public function updateEvent(Model $event, array $data): Model
    {
        $event->update($data);
        return $event;
    }

    /**
     * Fetch events to display in the calendar.
     *
     * @param array<string, mixed> $fetchInfo
     * @return array<int, array<string, mixed>>
     */
    public function fetchEvents(array $fetchInfo): array
    {
        if (!$this->model) {
            return [];
        }

        return $this->model::query()
            ->get()
            ->map(fn ($event) => $this->mapEventToCalendar($event))
            ->toArray();
    }

    /**
     * Map database event model to calendar event.
     *
     * @param Model $event
     * @return array<string, mixed>
     */
    protected function mapEventToCalendar(Model $event): array
    {
        return [
            'id' => $event->id,
            'title' => $event->title,
            'start' => $event->start_date,
            'end' => $event->end_date,
            'allDay' => $event->is_all_day,
            'backgroundColor' => $event->color,
            'borderColor' => $event->color,
            'description' => $event->description,
        ];
    }
}
```

## Event Handling and Customization

### Custom Event Rendering

To customize event appearance:

```php
/**
 * Custom JavaScript for event rendering.
 *
 * @return string
 */
public function eventDidMount(): string
{
    return <<<JS
function({ event, el }) {
    el.setAttribute("x-tooltip", "tooltip");
    el.setAttribute("x-data", "{ tooltip: '"+event.title+"' }");
}
JS;
}
```

### Drag & Drop Update

To populate the form with new event data after drag & drop:

```php
/**
 * Modal actions.
 *
 * @return array<Action>
 */
protected function modalActions(): array
{
    return [
        Actions\EditAction::make()
            ->mountUsing(
                function (Event $record, Forms\Form $form, array $arguments) {
                    $form->fill([
                        'title' => $record->title,
                        'start_date' => $arguments['event']['start'] ?? $record->start_date,
                        'end_date' => $arguments['event']['end'] ?? $record->end_date,
                        'description' => $record->description,
                        'color' => $record->color,
                    ]);
                }
            ),
        Actions\DeleteAction::make(),
    ];
}
```

## Blade Integration

To use the widget in a Blade view:

```php
@livewire(\Modules\Ptv\Filament\Widgets\PtvEventsCalendarWidget::class)
```

## Best Practices

1. Always extend `BaseCalendarWidget` to maintain consistency
2. Always use translation files for all labels
3. Document every property and method with complete PHPDoc
4. Explicitly specify return types and parameters
5. Maintain field name consistency between model and form
6. Implement appropriate validation in the form schema
7. Test on different devices to ensure responsiveness
8. Always use English for class and attribute names

## Backlinks and References

<<<<<<< HEAD
<<<<<<< HEAD
- [Ptv Module - Calendar Usage](../../Ptv/docs/features/full_calendar.md)
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
- [Ptv Module - Calendar Usage](../../Ptv/docs/features/full_calendar.md)
- [Official Saade FullCalendar Documentation](https://github.com/saade/filament-fullcalendar)
- [FullCalendar.io Documentation](https://fullcalendar.io/docs)

*Last updated: June 2025*
*Last updated: June 2025*
- [Ptv Module - Calendar Usage](../../ptv/docs/features/full-calendar-1.md)
- [Official Saade FullCalendar Documentation](https://github.com/saade/filament-fullcalendar)
- [FullCalendar.io Documentation](https://fullcalendar.io/docs)
*
# FullCalendar Component for Filament
## Introduction
This document describes the implementation and usage of Saade's FullCalendar component for Filament within the UI modules of Laraxot PTVX. This component offers complete integration of the popular FullCalendar JavaScript plugin with Filament, allowing users to view and manage events in an intuitive calendar interface.
## Installation
To install the component:
```bash
composer require saade/filament-fullcalendar:^3.0
```
## Configuration in UI Module
### 1. Plugin Registration
In the UI module service provider (`Modules/UI/Providers/UIServiceProvider.php`), register the FullCalendar plugin:
```php
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
- [Ptv Module - Calendar Usage](../../ptv/docs/features/full_calendar.md)
- [Official Saade FullCalendar Documentation](https://github.com/saade/filament-fullcalendar)
- [FullCalendar.io Documentation](https://fullcalendar.io/docs)

*
# FullCalendar Component for Filament

## Introduction
This document describes the implementation and usage of Saade's FullCalendar component for Filament within the UI modules of Laraxot PTVX. This component offers complete integration of the popular FullCalendar JavaScript plugin with Filament, allowing users to view and manage events in an intuitive calendar interface.

## Installation

To install the component:

```bash
composer require saade/filament-fullcalendar:^3.0
```

## Configuration in UI Module

### 1. Plugin Registration

In the UI module service provider (`Modules/UI/Providers/UIServiceProvider.php`), register the FullCalendar plugin:

```php
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;

<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_KSEKzW
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
- [Ptv Module - Calendar Usage](../../Ptv/docs/features/full_calendar.md)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
- [Ptv Module - Calendar Usage](../../Ptv/docs/features/full_calendar.md)
- [Official Saade FullCalendar Documentation](https://github.com/saade/filament-fullcalendar)
- [FullCalendar.io Documentation](https://fullcalendar.io/docs)

<<<<<<< HEAD
*Last updated: June 2025*
=======
<<<<<<< HEAD
*Last updated: June 2025*
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- [Ptv Module - Calendar Usage](../../ptv/docs/features/full-calendar-1.md)
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
- [Official Saade FullCalendar Documentation](https://github.com/saade/filament-fullcalendar)
- [FullCalendar.io Documentation](https://fullcalendar.io/docs)

*Last updated: June 2025*
*Last updated: June 2025*
- [Ptv Module - Calendar Usage](../../ptv/docs/features/full-calendar-1.md)
- [Official Saade FullCalendar Documentation](https://github.com/saade/filament-fullcalendar)
- [FullCalendar.io Documentation](https://fullcalendar.io/docs)
*
# FullCalendar Component for Filament
## Introduction
This document describes the implementation and usage of Saade's FullCalendar component for Filament within the UI modules of Laraxot PTVX. This component offers complete integration of the popular FullCalendar JavaScript plugin with Filament, allowing users to view and manage events in an intuitive calendar interface.
## Installation
To install the component:
```bash
composer require saade/filament-fullcalendar:^3.0
```
## Configuration in UI Module
### 1. Plugin Registration
In the UI module service provider (`Modules/UI/Providers/UIServiceProvider.php`), register the FullCalendar plugin:
```php
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;
<<<<<<< HEAD
=======
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
// Inside the boot() or register() method
$this->app->booted(function () {
    // Register the plugin for all Filament panels
    \Filament\Facades\Filament::registerPlugin(
        FilamentFullCalendarPlugin::make()
    );
});
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
### 2. Base Widget Creation
Create a base widget class in the UI module:
<?php
declare(strict_types=1);
namespace Modules\UI\Filament\Widgets;
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
```

### 2. Base Widget Creation

Create a base widget class in the UI module:

```php
<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< .merge_file_AOBTcp
=======
=======
<<<<<<< .merge_file_KSEKzW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
### 2. Base Widget Creation
Create a base widget class in the UI module:
<?php
declare(strict_types=1);
namespace Modules\UI\Filament\Widgets;
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
use Filament\Forms;
use Illuminate\Database\Eloquent\Model;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Saade\FilamentFullCalendar\Data\EventData;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AOBTcp

=======
=======
<<<<<<< .merge_file_KSEKzW

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
/**
 * Base widget for FullCalendar.
 *
 * Provides core functionality for all calendars in the application.
 */
abstract class BaseCalendarWidget extends FullCalendarWidget
{
    /**
     * Base model for events.
     *
     * @var class-string<Model>|null
     */
    protected Model | string | null $model = null;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
     * Set up the widget configuration.
     * @return void
    public function setUp(): void
    {
        parent::setUp();
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP

    /**
     * Set up the widget configuration.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

<<<<<<< .merge_file_AOBTcp
=======
=======
<<<<<<< .merge_file_KSEKzW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
     * Set up the widget configuration.
     * @return void
    public function setUp(): void
    {
        parent::setUp();
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
        $this->selectable(true)
            ->editable(true)
            ->timezone(config('app.timezone'))
            ->locale('it')
            ->plugins(['dayGrid', 'timeGrid', 'list', 'interaction']);
    }
<<<<<<< HEAD
     * Get form schema for event creation/editing.
     * @return array<int, Forms\Components\Component>
    public function getFormSchema(): array
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_cVtnME
     * Get form schema for event creation/editing.
     * @return array<int, Forms\Components\Component>
    public function getFormSchema(): array
=======
<<<<<<< .merge_file_KSEKzW
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP

    /**
     * Get form schema for event creation/editing.
     *
     * @return array<int, Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
<<<<<<< HEAD
=======
>>>>>>> .merge_file_kxhjPP
=======
     * Get form schema for event creation/editing.
     * @return array<int, Forms\Components\Component>
    public function getFormSchema(): array
>>>>>>> laraxot/dev
<<<<<<< .merge_file_AOBTcp
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
        return [
            Forms\Components\TextInput::make('title')
                ->label(__('ui::calendar.fields.title.label'))
                ->placeholder(__('ui::calendar.fields.title.placeholder'))
                ->helperText(__('ui::calendar.fields.title.help'))
                ->required(),
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AOBTcp

=======
=======
<<<<<<< .merge_file_KSEKzW

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
            Forms\Components\Grid::make()
                ->schema([
                    Forms\Components\DateTimePicker::make('start_date')
                        ->label(__('ui::calendar.fields.start_date.label'))
                        ->required(),
<<<<<<< HEAD
                    Forms\Components\DateTimePicker::make('end_date')
                        ->label(__('ui::calendar.fields.end_date.label'))
                ]),
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_cVtnME
                    Forms\Components\DateTimePicker::make('end_date')
                        ->label(__('ui::calendar.fields.end_date.label'))
                ]),
=======
<<<<<<< .merge_file_KSEKzW
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP

                    Forms\Components\DateTimePicker::make('end_date')
                        ->label(__('ui::calendar.fields.end_date.label'))
                        ->required(),
                ]),

<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
<<<<<<< HEAD
=======
>>>>>>> .merge_file_kxhjPP
=======
                    Forms\Components\DateTimePicker::make('end_date')
                        ->label(__('ui::calendar.fields.end_date.label'))
                ]),
>>>>>>> laraxot/dev
<<<<<<< .merge_file_AOBTcp
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
            Forms\Components\Textarea::make('description')
                ->label(__('ui::calendar.fields.description.label'))
                ->placeholder(__('ui::calendar.fields.description.placeholder'))
                ->columnSpanFull(),
<<<<<<< HEAD
            Forms\Components\ColorPicker::make('color')
                ->label(__('ui::calendar.fields.color.label'))
                ->rgb(),
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_cVtnME
            Forms\Components\ColorPicker::make('color')
                ->label(__('ui::calendar.fields.color.label'))
                ->rgb(),
=======
<<<<<<< .merge_file_KSEKzW
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP

            Forms\Components\ColorPicker::make('color')
                ->label(__('ui::calendar.fields.color.label'))
                ->rgb(),

<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
<<<<<<< HEAD
=======
>>>>>>> .merge_file_kxhjPP
=======
            Forms\Components\ColorPicker::make('color')
                ->label(__('ui::calendar.fields.color.label'))
                ->rgb(),
>>>>>>> laraxot/dev
<<<<<<< .merge_file_AOBTcp
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
            Forms\Components\Toggle::make('is_all_day')
                ->label(__('ui::calendar.fields.is_all_day.label'))
                ->default(false),
        ];
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
     * Create a new event from form data.
     * @param array<string, mixed> $data
     * @return Model
    public function createEvent(array $data): Model
        return $this->model::create($data);
     * Update an existing event with form data.
     * @param Model $event
    public function updateEvent(Model $event, array $data): Model
        $event->update($data);
        return $event;
     * Fetch events to display in the calendar.
     * @param array<string, mixed> $fetchInfo
     * @return array<int, array<string, mixed>>
    public function fetchEvents(array $fetchInfo): array
        if (!$this->model) {
            return [];
        }
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
    }

    /**
     * Create a new event from form data.
     *
     * @param array<string, mixed> $data
     * @return Model
     */
    public function createEvent(array $data): Model
    {
        return $this->model::create($data);
    }

    /**
     * Update an existing event with form data.
     *
     * @param Model $event
     * @param array<string, mixed> $data
     * @return Model
     */
    public function updateEvent(Model $event, array $data): Model
    {
        $event->update($data);
        return $event;
    }

    /**
     * Fetch events to display in the calendar.
     *
     * @param array<string, mixed> $fetchInfo
     * @return array<int, array<string, mixed>>
     */
    public function fetchEvents(array $fetchInfo): array
    {
        if (!$this->model) {
            return [];
        }

<<<<<<< .merge_file_AOBTcp
=======
=======
<<<<<<< .merge_file_KSEKzW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
     * Create a new event from form data.
     * @param array<string, mixed> $data
     * @return Model
    public function createEvent(array $data): Model
        return $this->model::create($data);
     * Update an existing event with form data.
     * @param Model $event
    public function updateEvent(Model $event, array $data): Model
        $event->update($data);
        return $event;
     * Fetch events to display in the calendar.
     * @param array<string, mixed> $fetchInfo
     * @return array<int, array<string, mixed>>
    public function fetchEvents(array $fetchInfo): array
        if (!$this->model) {
            return [];
        }
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
        return $this->model::query()
            ->get()
            ->map(fn ($event) => $this->mapEventToCalendar($event))
            ->toArray();
<<<<<<< HEAD
     * Map database event model to calendar event.
     * @return array<string, mixed>
    protected function mapEventToCalendar(Model $event): array
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_cVtnME
     * Map database event model to calendar event.
     * @return array<string, mixed>
    protected function mapEventToCalendar(Model $event): array
=======
<<<<<<< .merge_file_KSEKzW
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
    }

    /**
     * Map database event model to calendar event.
     *
     * @param Model $event
     * @return array<string, mixed>
     */
    protected function mapEventToCalendar(Model $event): array
    {
        return [
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
<<<<<<< HEAD
=======
>>>>>>> .merge_file_kxhjPP
=======
     * Map database event model to calendar event.
     * @return array<string, mixed>
    protected function mapEventToCalendar(Model $event): array
>>>>>>> laraxot/dev
<<<<<<< .merge_file_AOBTcp
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
            'id' => $event->id,
            'title' => $event->title,
            'start' => $event->start_date,
            'end' => $event->end_date,
            'allDay' => $event->is_all_day,
            'backgroundColor' => $event->color,
            'borderColor' => $event->color,
            'description' => $event->description,
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
}
## Event Handling and Customization
### Custom Event Rendering
To customize event appearance:
 * Custom JavaScript for event rendering.
 * @return string
public function eventDidMount(): string
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
        ];
    }
}
```

## Event Handling and Customization

### Custom Event Rendering

To customize event appearance:

```php
/**
 * Custom JavaScript for event rendering.
 *
 * @return string
 */
public function eventDidMount(): string
{
<<<<<<< .merge_file_AOBTcp
=======
=======
<<<<<<< .merge_file_KSEKzW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
}
## Event Handling and Customization
### Custom Event Rendering
To customize event appearance:
 * Custom JavaScript for event rendering.
 * @return string
public function eventDidMount(): string
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    return <<<JS
function({ event, el }) {
    el.setAttribute("x-tooltip", "tooltip");
    el.setAttribute("x-data", "{ tooltip: '"+event.title+"' }");
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
JS;
### Drag & Drop Update
To populate the form with new event data after drag & drop:
 * Modal actions.
 * @return array<Action>
protected function modalActions(): array
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
}
JS;
}
```

### Drag & Drop Update

To populate the form with new event data after drag & drop:

```php
/**
 * Modal actions.
 *
 * @return array<Action>
 */
protected function modalActions(): array
{
<<<<<<< .merge_file_AOBTcp
=======
=======
<<<<<<< .merge_file_KSEKzW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
JS;
### Drag & Drop Update
To populate the form with new event data after drag & drop:
 * Modal actions.
 * @return array<Action>
protected function modalActions(): array
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    return [
        Actions\EditAction::make()
            ->mountUsing(
                function (Event $record, Forms\Form $form, array $arguments) {
                    $form->fill([
                        'title' => $record->title,
                        'start_date' => $arguments['event']['start'] ?? $record->start_date,
                        'end_date' => $arguments['event']['end'] ?? $record->end_date,
                        'description' => $record->description,
                        'color' => $record->color,
                    ]);
                }
            ),
        Actions\DeleteAction::make(),
    ];
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
## Blade Integration
To use the widget in a Blade view:
@livewire(\Modules\Ptv\Filament\Widgets\PtvEventsCalendarWidget::class)
## Best Practices
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
}
```

## Blade Integration

To use the widget in a Blade view:

```php
@livewire(\Modules\Ptv\Filament\Widgets\PtvEventsCalendarWidget::class)
```

## Best Practices

<<<<<<< .merge_file_AOBTcp
=======
=======
<<<<<<< .merge_file_KSEKzW
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
## Blade Integration
To use the widget in a Blade view:
@livewire(\Modules\Ptv\Filament\Widgets\PtvEventsCalendarWidget::class)
## Best Practices
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
1. Always extend `BaseCalendarWidget` to maintain consistency
2. Always use translation files for all labels
3. Document every property and method with complete PHPDoc
4. Explicitly specify return types and parameters
5. Maintain field name consistency between model and form
6. Implement appropriate validation in the form schema
7. Test on different devices to ensure responsiveness
8. Always use English for class and attribute names
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Backlinks and References

```
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP

## Backlinks and References

- [Ptv Module - Calendar Usage](../../ptv/docs/features/full_calendar.md)
<<<<<<< .merge_file_AOBTcp
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
## Backlinks and References

<<<<<<< HEAD
```
=======
<<<<<<< HEAD
<<<<<<< HEAD
```
=======
- [Ptv Module - Calendar Usage](../../ptv/docs/features/full-calendar-1.md)
=======
- [Ptv Module - Calendar Usage](../../ptv/docs/features/full-calendar-1.md)
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- [Official Saade FullCalendar Documentation](https://github.com/saade/filament-fullcalendar)
- [FullCalendar.io Documentation](https://fullcalendar.io/docs)

*
<<<<<<< HEAD
=======
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< .merge_file_KSEKzW
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
*Last updated: June 2025*
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< .merge_file_AOBTcp
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_cVtnME
>>>>>>> .merge_file_kxhjPP
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
