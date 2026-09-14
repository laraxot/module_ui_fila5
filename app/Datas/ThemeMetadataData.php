<?php

declare(strict_types=1);

namespace Modules\UI\Datas;

<<<<<<< .merge_file_SBSA1Z
=======
use InvalidArgumentException;
>>>>>>> .merge_file_mfsdl8
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
<<<<<<< .merge_file_SBSA1Z
     * @throws \InvalidArgumentException se la chiave non esiste
=======
     * @throws InvalidArgumentException se la chiave non esiste
>>>>>>> .merge_file_mfsdl8
     */
    public function getSpacing(string $key): string
    {
        if (! isset($this->spacingUnits[$key])) {
<<<<<<< .merge_file_SBSA1Z
            throw new \InvalidArgumentException("Invalid spacing unit key: {$key}");
=======
            throw new InvalidArgumentException("Invalid spacing unit key: {$key}");
>>>>>>> .merge_file_mfsdl8
        }

        return $this->spacingUnits[$key];
    }
}
