<?php

declare(strict_types=1);

namespace Modules\UI\Datas;

use InvalidArgumentException;
use Spatie\LaravelData\Data;

/**
 * Metadati tema compilati: colori brand, scale spaziatura, breakpoint da design token.
 */
class ThemeMetadataData extends Data
{
    /**
<<<<<<< HEAD
     * @param  array<string, string>  $spacingUnits
     * @param  array<string, string>  $breakpoints
=======
     * @param array<string, string> $spacingUnits
     * @param array<string, string> $breakpoints
>>>>>>> laraxot/dev
     */
    public function __construct(
        public readonly string $primaryColorHex,
        public readonly string $secondaryColorHex,
        public readonly array $spacingUnits = ['sm' => '1rem', 'md' => '2rem', 'lg' => '4rem'],
        public readonly array $breakpoints = [
            'sm' => '640px',
            'md' => '768px',
            'lg' => '1024px',
        ],
<<<<<<< HEAD
    ) {}

    /**
     * @throws InvalidArgumentException se la chiave non esiste
=======
    ) {
    }

    /**
     * @throws \InvalidArgumentException se la chiave non esiste
>>>>>>> laraxot/dev
     */
    public function getSpacing(string $key): string
    {
        if (! isset($this->spacingUnits[$key])) {
<<<<<<< HEAD
            throw new InvalidArgumentException("Invalid spacing unit key: {$key}");
=======
            throw new \InvalidArgumentException("Invalid spacing unit key: {$key}");
>>>>>>> laraxot/dev
        }

        return $this->spacingUnits[$key];
    }
}
