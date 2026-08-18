<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

<<<<<<< HEAD
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\HtmlString;
use Modules\Xot\Filament\Support\RecordAnchor;
=======
use Illuminate\Support\HtmlString;
use Modules\Xot\Filament\Support\RecordAnchor;
use Modules\Xot\Filament\Tables\Columns\XotBaseTextColumn;
>>>>>>> laraxot/dev

/**
 * Colonna id che funge anche da ancora della riga.
 *
 * La cella emette `id="record-{id}"`, quindi l'URL della lista con frammento
 * `#record-1875` porta il browser esattamente su quella riga. I link di ritorno
 * dall'edit lo appendono con {@see RecordAnchor::appendTo()}.
 */
<<<<<<< HEAD
class IDColumn extends TextColumn
=======
class IDColumn extends XotBaseTextColumn
>>>>>>> laraxot/dev
{
    #[\Override]
    public static function make(?string $name = null): static
    {
        return parent::make($name ?? 'id')
            ->label('ID')
            ->sortable()
            ->searchable()
            ->html()
            ->formatStateUsing(static fn (mixed $state): HtmlString => static::renderAnchor($state));
    }

    /**
     * Ancora della riga con il valore dell'id come testo.
     *
     * `scroll-mt-24` tiene la riga sotto l'header sticky invece che nascosta dietro.
     */
    public static function renderAnchor(mixed $state): HtmlString
    {
        $value = is_scalar($state) ? (string) $state : '';

<<<<<<< HEAD
        if ('' === $value) {
=======
        if ($value === '') {
>>>>>>> laraxot/dev
            return new HtmlString('');
        }

        $escaped = e($value);

        return new HtmlString('<span id="'.RecordAnchor::id($escaped).'" class="scroll-mt-24">'.$escaped.'</span>');
    }
}
