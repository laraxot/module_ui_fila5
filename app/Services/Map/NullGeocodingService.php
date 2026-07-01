<?php

declare(strict_types=1);

namespace Modules\UI\Services\Map;

use Modules\UI\Contracts\GeocodingServiceContract;
<<<<<<< HEAD
use RuntimeException;
=======
>>>>>>> laraxot/dev

/**
 * Fallback quando il modulo Geo non è installato.
 */
final class NullGeocodingService implements GeocodingServiceContract
{
    /**
     * @return array<string, mixed>
     */
    public function geocodeAddress(string $address): array
    {
<<<<<<< HEAD
        throw new RuntimeException('Geocoding non disponibile: modulo Geo assente.');
=======
        throw new \RuntimeException('Geocoding non disponibile: modulo Geo assente.');
>>>>>>> laraxot/dev
    }

    /**
     * @return list<array<string, mixed>>
     */
    public function getSuggestions(string $query): array
    {
        return [];
    }
}
