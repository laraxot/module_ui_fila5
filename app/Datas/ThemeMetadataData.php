<?php

declare(strict_types=1);

namespace Modules\UI\Datas;

<<<<<<< .merge_file_phAypR
use InvalidArgumentException;
=======
<<<<<<< .merge_file_8eIawZ
use InvalidArgumentException;
=======
<<<<<<< .merge_file_od9uUC
<<<<<<< HEAD
use InvalidArgumentException;
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_5yDYcM
>>>>>>> .merge_file_m5rsjr
>>>>>>> .merge_file_Kh4pYl
use Spatie\LaravelData\Data;

/**
 * Metadati tema compilati: colori brand, scale spaziatura, breakpoint da design token.
 */
class ThemeMetadataData extends Data
{
    /**
     * @param array<string, string> $spacingUnits
     * @param array<string, string> $breakpoints
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
    ) {
    }

    /**
<<<<<<< .merge_file_phAypR
     * @throws InvalidArgumentException se la chiave non esiste
=======
<<<<<<< .merge_file_8eIawZ
     * @throws InvalidArgumentException se la chiave non esiste
=======
<<<<<<< .merge_file_od9uUC
<<<<<<< HEAD
     * @throws InvalidArgumentException se la chiave non esiste
=======
     * @throws \InvalidArgumentException se la chiave non esiste
>>>>>>> laraxot/dev
=======
     * @throws \InvalidArgumentException se la chiave non esiste
>>>>>>> .merge_file_5yDYcM
>>>>>>> .merge_file_m5rsjr
>>>>>>> .merge_file_Kh4pYl
     */
    public function getSpacing(string $key): string
    {
        if (! isset($this->spacingUnits[$key])) {
<<<<<<< .merge_file_phAypR
            throw new InvalidArgumentException("Invalid spacing unit key: {$key}");
=======
<<<<<<< .merge_file_8eIawZ
            throw new InvalidArgumentException("Invalid spacing unit key: {$key}");
=======
<<<<<<< .merge_file_od9uUC
<<<<<<< HEAD
            throw new InvalidArgumentException("Invalid spacing unit key: {$key}");
=======
            throw new \InvalidArgumentException("Invalid spacing unit key: {$key}");
>>>>>>> laraxot/dev
=======
            throw new \InvalidArgumentException("Invalid spacing unit key: {$key}");
>>>>>>> .merge_file_5yDYcM
>>>>>>> .merge_file_m5rsjr
>>>>>>> .merge_file_Kh4pYl
        }

        return $this->spacingUnits[$key];
    }
}
