<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
@php
    declare(strict_types=1);

    use Filament\Tables\Columns\ColorColumn;
    use Filament\Tables\Columns\IconColumn;
    use Filament\Tables\Columns\ImageColumn;
    use Filament\Tables\Columns\SelectColumn;
    use Filament\Tables\Columns\TextColumn;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Str;

    $fields = $getFields();
    $record = $getRecord();
@endphp
<<<<<<< HEAD
=======
=======
<?php

declare(strict_types=1);

    $fields = $getFields();
    $record = $getRecord();
?>
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
<div
    {{
        $attributes
            ->merge($getExtraAttributes(), escape: false)
            ->class([
<<<<<<< HEAD
                'fi-ta-group flex flex-col gap-1',
                'px-3 py-4' => ! $isInline(),
=======
<<<<<<< HEAD
                'fi-ta-group flex flex-col gap-1',
                'px-3 py-4' => ! $isInline(),
=======
                'fi-ta-icon flex flex-wrap gap-1.5',
                'px-3 py-4' => ! $isInline(),
                //'flex-col' => $isListWithLineBreaks(),
                'flex-col' => true,
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
            ])
    }}
>
    @foreach ($fields as $field)
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
        @php
            // Children live only in GroupColumn::$schema — mount table + record
            // or getState()/toEmbeddedHtml() throw "column is not mounted to a table".
            if (isset($getTable) && is_callable($getTable)) {
                $field->table($getTable());
            }

            if ($record instanceof Model || is_array($record)) {
                $field->record($record);
                $field->clearCachedState();
            }

            if (method_exists($field, 'isHidden') && $field->isHidden()) {
                continue;
            }

            $name = $field->getName();
            $value = $field->getState();
            if ($value === null) {
                $value = data_get($record, $name);
            }

            $isInteractiveColumn = $field instanceof SelectColumn;

            $isVisualColumn = $field instanceof IconColumn
                || $field instanceof ColorColumn
                || $field instanceof ImageColumn;

            // Interactive path: always render (select also when valutatore_id is null).
            // Text path: skip empties (keep 0 / '0'). Visual path: only skip null —
            // boolean false / 0 must still render the false icon.
            if (! $isInteractiveColumn) {
                if ($isVisualColumn) {
                    if ($value === null) {
                        continue;
                    }
                } elseif (empty($value) && $value !== 0 && $value !== '0') {
                    continue;
                }
            }

<<<<<<< HEAD
=======
=======
     
        @php
            $name = $field->getName();
            $value = $record->{$name} ?? null;
            // Skip empty values to save space
            if (empty($value) && $value !== 0 && $value !== '0') {
                continue;
            }

            // Format the value for display
            $formattedValue = $value;

            // Resolve the label leveraging LangServiceProvider auto translations
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
            $rawLabel = $field->getLabel();

            if ($rawLabel instanceof \Closure) {
                $rawLabel = $rawLabel($record);
            }

            if ($rawLabel instanceof \Illuminate\Contracts\Support\Htmlable) {
                $labelText = trim(strip_tags($rawLabel->toHtml()));
            } elseif (is_string($rawLabel)) {
                $labelText = trim($rawLabel);
            } else {
                $labelText = '';
            }

            if ($labelText === '') {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
                $translationKey = 'ui::table.columns.'.$name.'.label';
                $translated = __($translationKey);
                $labelText = $translated !== $translationKey
                    ? $translated
                    : Str::of((string) $name)->replace('_', ' ')->headline()->value();
            }

            $displayValue = $value;
            $isHtmlValue = false;
            if ($field instanceof TextColumn && method_exists($field, 'formatState')) {
                $displayValue = $field->formatState($value);
                $isHtmlValue = $field->isHtml();
            }
        @endphp

        @if ($isInteractiveColumn)
            <div class="fi-ta-group-row flex flex-nowrap items-center gap-1.5">
                <span class="fi-ta-group-label shrink-0 text-sm text-gray-500 dark:text-gray-400">{{ $labelText }}:</span>
                <span class="fi-ta-group-interactive inline-flex shrink-0 items-center">
                    {!! $field->toEmbeddedHtml() !!}
                </span>
            </div>
        @elseif ($isVisualColumn)
            {{-- Own row; label + icon stay on ONE line (IconColumn embeds a block div). --}}
            <div class="fi-ta-group-row flex flex-nowrap items-center gap-1.5">
                <span class="fi-ta-group-label shrink-0 text-sm text-gray-500 dark:text-gray-400">{{ $labelText }}:</span>
                <span class="fi-ta-group-visual inline-flex shrink-0 items-center [&_.fi-ta-icon]:inline-flex [&_.fi-ta-icon]:w-auto">
                    {!! $field->toEmbeddedHtml() !!}
                </span>
            </div>
        @else
            <div class="fi-ta-group-row text-sm break-words">
                <span class="fi-ta-group-label text-gray-500 dark:text-gray-400">{{ $labelText }}:</span>
                @if ($isHtmlValue)
                    <span class="fi-ta-group-value">{!! $displayValue !!}</span>
                @else
                    <span class="fi-ta-group-value"> {{ $displayValue }}</span>
                @endif
            </div>
        @endif
<<<<<<< HEAD
=======
=======
                $translationKey = 'ui::table.columns.' . $name . '.label';
                $translated = __($translationKey);
                $labelText = $translated !== $translationKey
                    ? $translated
                    : \Illuminate\Support\Str::of((string) $name)->replace('_', ' ')->headline()->value();
            }

            $displayText = $labelText . ': ' . $formattedValue;
        @endphp
        
            {{ $displayText }}<br/>
        
        
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
    @endforeach
</div>
