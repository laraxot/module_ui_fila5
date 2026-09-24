<?php

declare(strict_types=1);

namespace Modules\UI\Livewire\Components\Map;

use Illuminate\Contracts\View\View;
use Livewire\Component;
<<<<<<< HEAD
<<<<<<< .merge_file_uEvxkh
<<<<<<< HEAD
use Modules\UI\Contracts\GeocodingServiceContract;
use Modules\UI\Contracts\MapServiceContract;
=======
<<<<<<< HEAD
use Modules\Geo\Services\GeocodingService;
use Modules\Geo\Services\MapService;
use Modules\Xot\Actions\Cast\SafeFloatCastAction;
=======
<<<<<<< HEAD
use Modules\UI\Contracts\GeocodingServiceContract;
use Modules\UI\Contracts\MapServiceContract;
=======
use Modules\Geo\Services\GeocodingService;
use Modules\Geo\Services\MapService;
use Modules\Xot\Actions\Cast\SafeFloatCastAction;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 0dadab4 (Lint)
use Modules\Geo\Actions\Geocoding\GeocodeAddressAction;
use Modules\Geo\Actions\Geocoding\GetGeocodingSuggestionsAction;
use Modules\Geo\Actions\Map\ExportMapDataAction;
use Modules\Geo\Actions\Map\GetMapMarkersAction;
use Modules\Geo\Actions\Map\GetMapStatsAction;
<<<<<<< HEAD
use Modules\Xot\Actions\Cast\SafeFloatCastAction;
>>>>>>> .merge_file_e736zw
=======
>>>>>>> 0dadab4 (Lint)
use Webmozart\Assert\Assert;

/**
 * Componente Livewire per la mappa interattiva.
 *
 * Fornisce funzionalità per visualizzare marker geografici,
 * filtri dinamici e interazione con la mappa.
 */
final class InteractiveMap extends Component
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    /** @var array{0: float, 1: float} */
    public array $center = [45.4642, 9.1900]; // Milano

    public int $zoom = 10;

<<<<<<< HEAD
    /**
     * Payload dei marker così come arriva da GetMapMarkersAction: struttura decisa
     * dall'action, non dal componente.
     *
     * @var list<array<string, mixed>>
     */
    public array $markers = [];

    /** @var array<string, mixed> */
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
    /** @var list<float> [lat, lng] — default Milano */
    public array $center = [45.4642, 9.1900];

    public int $zoom = 10;

    /**
     * Payload dei marker così come arriva da MapService: struttura decisa dal
     * servizio, non dal componente.
     *
     * @var list<array<string, mixed>>
     */
    public array $markers = [];

    /** @var array<string, bool|list<string>|array<string, float>> */
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    /** @var array<int, array<string, mixed>> */
    public array $markers = [];

    /** @var array<string, mixed> */
>>>>>>> 0dadab4 (Lint)
    public array $filters = [
        'tickets' => true,
        'users' => false,
        'locations' => false,
        'status' => [],
        'priority' => [],
        'type' => [],
        'roles' => [],
        'location_types' => [],
    ];

    /** @var array<string, mixed>|null */
    public ?array $selectedMarker = null;

    /** @var array<string, mixed> */
    public array $stats = [];

    public bool $showControls = true;

    public bool $isLoading = false;

    public string $searchQuery = '';

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
    /** @var array<string, string> */
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    /**
     * Untyped to match HandlesEvents::$listeners.
     *
     * @var array<string, string>
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
    /** @var array<string, string> */
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
    protected $listeners = [
        'markerSelected' => 'selectMarker',
        'filtersChanged' => 'updateFilters',
        'mapBoundsChanged' => 'updateBounds',
        'refreshMap' => 'loadMarkers',
    ];

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array{0: float, 1: float}|null $center
     * @param array<string, mixed>           $filters
=======
<<<<<<< HEAD
     * @param  list<float>|null  $center
     * @param  array<string, bool|list<string>|array<string,float>>  $filters
=======
<<<<<<< HEAD
     * @param array{0: float, 1: float}|null $center
     * @param array<string, mixed>           $filters
=======
     * @param  list<float>|null  $center
     * @param  array<string, bool|list<string>|array<string,float>>  $filters
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
     * @param array{0: float, 1: float}|null $center
     * @param array<string, mixed>           $filters
>>>>>>> 0dadab4 (Lint)
     */
    public function mount(?array $center = null, ?int $zoom = null, array $filters = []): void
    {
        if ($center) {
            $this->center = $center;
        }

        if ($zoom) {
            $this->zoom = $zoom;
        }

        if ($filters) {
            $this->filters = array_merge($this->filters, $filters);
        }

        $this->loadMarkers();
    }

    public function render(): View
    {
        /** @var view-string $viewName */
        $viewName = 'ui::livewire.components.map.interactive-map';

        return view($viewName);
    }

    /**
     * Seleziona un marker.
     */
    public function selectMarker(int $markerId): void
    {
        $marker = collect($this->markers)
            ->firstWhere('id', $markerId);

<<<<<<< HEAD
<<<<<<< .merge_file_uEvxkh
<<<<<<< HEAD
        $this->selectedMarker = \is_array($marker) ? $marker : null;
=======
<<<<<<< HEAD
        $this->selectedMarker = is_array($marker) ? $marker : null;
=======
<<<<<<< HEAD
        $this->selectedMarker = \is_array($marker) ? $marker : null;
=======
        $this->selectedMarker = is_array($marker) ? $marker : null;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $this->selectedMarker = is_array($marker) ? $marker : null;
>>>>>>> .merge_file_e736zw
=======
        $this->selectedMarker = \is_array($marker) ? $marker : null;
>>>>>>> 0dadab4 (Lint)

        $this->dispatch('markerSelected', $this->selectedMarker);
    }

    /**
     * Aggiorna i filtri.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $filters
     * @param array<string, mixed> $filters
<<<<<<< .merge_file_uEvxkh
=======
<<<<<<< HEAD
     * @param  array<string, bool|list<string>|array<string, float>>  $filters
=======
<<<<<<< HEAD
     * @param array<string, mixed> $filters
     * @param array<string, mixed> $filters
=======
     * @param  array<string, bool|list<string>|array<string, float>>  $filters
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_e736zw
=======
     * @param array<string, mixed> $filters
     * @param array<string, mixed> $filters
>>>>>>> 0dadab4 (Lint)
     */
    public function updateFilters(array $filters): void
    {
        $this->filters = array_merge($this->filters, $filters);
        $this->loadMarkers();
    }

    /**
     * Aggiorna i bounds della mappa.
<<<<<<< HEAD
<<<<<<< .merge_file_uEvxkh
<<<<<<< HEAD
     */
    /**
     * @param array<string, float> $bounds
=======
<<<<<<< HEAD
     *
     * @param  array<string, float>  $bounds
=======
<<<<<<< HEAD
     */
    /**
=======
     *
>>>>>>> .merge_file_e736zw
     * @param array<string, float> $bounds
=======
     *
     * @param  array<string, float>  $bounds
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
     */
    /**
     * @param array<string, float> $bounds
>>>>>>> 0dadab4 (Lint)
     */
    public function updateBounds(array $bounds): void
    {
        $this->filters['bounds'] = $bounds;
        $this->loadMarkers();
    }

    /**
     * Carica i marker.
     */
    public function loadMarkers(): void
    {
        $this->isLoading = true;

        try {
<<<<<<< HEAD
<<<<<<< .merge_file_uEvxkh
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
            $mapService = app(MapServiceContract::class);
            $filters = $this->getMapFilters();
            $markers = $mapService->getMarkers($filters);
            Assert::isArray($markers);
            $this->markers = $markers;
            $stats = $mapService->getMapStats($filters);
            Assert::isArray($stats);
            $this->stats = $stats;
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
            /** @phpstan-ignore-next-line class.notFound */
            $mapService = app(MapService::class);
            /* @phpstan-ignore-next-line class.notFound, assign.propertyType */
            $this->markers = $mapService->getMarkers($this->filters);
            /* @phpstan-ignore-next-line class.notFound, assign.propertyType */
            $this->stats = $mapService->getMapStats($this->filters);
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            $filters = $this->getMapFilters();
            $this->markers = app(GetMapMarkersAction::class)->execute($filters);
            $this->stats = app(GetMapStatsAction::class)->execute($filters);
>>>>>>> .merge_file_e736zw
=======
            $filters = $this->getMapFilters();
            $this->markers = app(GetMapMarkersAction::class)->execute($filters);
            $this->stats = app(GetMapStatsAction::class)->execute($filters);
>>>>>>> 0dadab4 (Lint)
        } catch (\Exception $e) {
            $this->addError('map', 'Errore nel caricamento dei marker: '.$e->getMessage());
            $this->markers = [];
            $this->stats = [];
        } finally {
            $this->isLoading = false;
        }
    }

    /**
     * Resetta la vista della mappa.
     */
    public function resetView(): void
    {
        $this->dispatch('resetMapView');
    }

    /**
     * Esporta i dati della mappa.
     */
    public function exportData(string $format = 'json'): void
    {
        try {
<<<<<<< HEAD
<<<<<<< .merge_file_uEvxkh
<<<<<<< HEAD
            $mapService = app(MapServiceContract::class);
            $data = $mapService->exportData($this->getMapFilters(), $format);
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
            $mapService = app(MapServiceContract::class);
            $data = $mapService->exportData($this->getMapFilters(), $format);
=======
>>>>>>> laraxot/dev
            /** @phpstan-ignore-next-line class.notFound */
            $mapService = app(MapService::class);
            /** @phpstan-ignore-next-line class.notFound */
            $data = $mapService->exportData($this->filters, $format);
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            $data = app(ExportMapDataAction::class)->execute($this->getMapFilters(), $format);
>>>>>>> .merge_file_e736zw
=======
            $data = app(ExportMapDataAction::class)->execute($this->getMapFilters(), $format);
>>>>>>> 0dadab4 (Lint)

            $filename = 'map_export_'.now()->format('Y_m_d_H_i_s').'.'.$format;

            $this->dispatch('downloadFile', [
                'content' => $data,
                'filename' => $filename,
                'mimeType' => $this->getMimeType($format),
            ]);

            $this->dispatch('notify', [
                'type' => 'success',
                'message' => 'Dati esportati con successo!',
            ]);
        } catch (\Exception $e) {
            $this->addError('export', 'Errore nell\'esportazione: '.$e->getMessage());
        }
    }

    /**
     * Cerca un indirizzo.
     */
    public function searchAddress(): void
    {
        if (empty($this->searchQuery)) {
            return;
        }

        try {
<<<<<<< HEAD
<<<<<<< .merge_file_uEvxkh
<<<<<<< HEAD
            $geocodingService = app(GeocodingServiceContract::class);
=======
<<<<<<< HEAD
            /** @phpstan-ignore-next-line class.notFound */
            $geocodingService = app(GeocodingService::class);
            /** @phpstan-ignore-next-line class.notFound */
=======
<<<<<<< HEAD
            $geocodingService = app(GeocodingServiceContract::class);
=======
            /** @phpstan-ignore-next-line class.notFound */
            $geocodingService = app(GeocodingService::class);
            /** @phpstan-ignore-next-line class.notFound */
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
            $result = $geocodingService->geocodeAddress($this->searchQuery);
=======
            $result = app(GeocodeAddressAction::class)->execute($this->searchQuery);
>>>>>>> 0dadab4 (Lint)
            Assert::isArray($result, 'Geocoding result must be array');

            $address = $result['address'] ?? '';
            Assert::string($address, 'Address must be string');

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
            // Il geocoder restituisce un payload non tipizzato: le coordinate vanno
            // validate prima del cast. Senza `Assert::numeric()` un payload non
            // numerico diventerebbe silenziosamente 0.0 (default dell'action) e la
            // mappa finirebbe al largo del Golfo di Guinea invece di segnalare
            // l'errore; l'assert lo fa risalire nel catch come "indirizzo non trovato".
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
            $latitude = $result['latitude'] ?? null;
            $longitude = $result['longitude'] ?? null;
            Assert::numeric($latitude, 'Latitude must be numeric');
            Assert::numeric($longitude, 'Longitude must be numeric');

<<<<<<< HEAD
            $this->center = [(float) $latitude, (float) $longitude];
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
            $this->center = [(float) $latitude, (float) $longitude];
=======
>>>>>>> laraxot/dev
            $this->center = [
                SafeFloatCastAction::castWithRange($latitude, -90.0, 90.0),
                SafeFloatCastAction::castWithRange($longitude, -180.0, 180.0),
            ];
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            $result = app(GeocodeAddressAction::class)->execute($this->searchQuery);
            $address = $result['address'];

            // Le coordinate vengono ricondotte nel range geografico valido: un payload
            // fuori scala del geocoder non deve spostare la mappa in un punto assurdo.
            $this->center = [
                SafeFloatCastAction::castWithRange($result['latitude'], -90.0, 90.0),
                SafeFloatCastAction::castWithRange($result['longitude'], -180.0, 180.0),
            ];
>>>>>>> .merge_file_e736zw
=======
            $this->center = [$result['latitude'], $result['longitude']];
>>>>>>> 0dadab4 (Lint)
            $this->zoom = 15;

            $this->dispatch('updateMapCenter', $this->center, $this->zoom);

            $this->dispatch('notify', [
                'type' => 'success',
                'message' => 'Indirizzo trovato: '.$address,
            ]);
        } catch (\Exception $e) {
            $this->addError('search', 'Indirizzo non trovato: '.$e->getMessage());
        }
    }

    /**
     * Ottiene suggerimenti per la ricerca.
     *
<<<<<<< HEAD
<<<<<<< .merge_file_uEvxkh
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
     * @return array<int, array<string, mixed>>
     */
    public function getSuggestions(): array
    {
        if (\strlen($this->searchQuery) < 3) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
     * @return list<array<string, mixed>>
     */
    public function getSuggestions(): array
    {
        if (strlen($this->searchQuery) < 3) {
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
     * @return list<array<string, mixed>>
     */
    public function getSuggestions(): array
    {
        if (strlen($this->searchQuery) < 3) {
>>>>>>> .merge_file_e736zw
=======
>>>>>>> 0dadab4 (Lint)
            return [];
        }

        try {
<<<<<<< HEAD
<<<<<<< .merge_file_uEvxkh
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
            $geocodingService = app(GeocodingServiceContract::class);

            /** @var array<int, array<string, mixed>> $suggestions */
            $suggestions = $geocodingService->getSuggestions($this->searchQuery);

            return $suggestions;
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
            /** @phpstan-ignore-next-line class.notFound */
            $geocodingService = app(GeocodingService::class);

            /* @phpstan-ignore-next-line class.notFound, return.type */
            return $geocodingService->getSuggestions($this->searchQuery);
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            return app(GetGeocodingSuggestionsAction::class)->execute($this->searchQuery);
>>>>>>> .merge_file_e736zw
=======
            return app(GetGeocodingSuggestionsAction::class)->execute($this->searchQuery);
>>>>>>> 0dadab4 (Lint)
        } catch (\Exception $e) {
            return [];
        }
    }

    /**
     * Toggle controlli mappa.
     */
    public function toggleControls(): void
    {
        $this->showControls = ! $this->showControls;
    }

    /**
     * Filtra per tipo.
     */
    public function filterByType(string $type, bool $enabled): void
    {
        $this->filters[$type] = $enabled;
        $this->loadMarkers();
    }

    /**
     * Filtra per stato.
     */
    public function filterByStatus(string $status, bool $enabled): void
    {
        $currentStatus = $this->filters['status'] ?? [];
        Assert::isArray($currentStatus, 'Status filter must be array');
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
        $statusList = array_values(array_filter(
            $currentStatus,
            static fn (mixed $value): bool => is_string($value),
=======
        $statusList = array_values(array_filter(
            $currentStatus,
            static fn (mixed $value): bool => \is_string($value),
>>>>>>> 0dadab4 (Lint)
        ));

        if ($enabled) {
            $statusList[] = $status;
            $this->filters['status'] = array_values(array_unique($statusList));
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev

        if ($enabled) {
            $currentStatus[] = $status;
            $this->filters['status'] = array_unique($currentStatus);
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
            $this->loadMarkers();

            return;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $statusList = array_values(array_diff($statusList, [$status]));
        $this->filters['status'] = array_values(array_unique($statusList));
=======
<<<<<<< HEAD
        $currentStatus = array_diff($currentStatus, [$status]);
        $this->filters['status'] = array_unique($currentStatus);
=======
<<<<<<< HEAD
        $statusList = array_values(array_diff($statusList, [$status]));
        $this->filters['status'] = array_values(array_unique($statusList));
=======
        $currentStatus = array_diff($currentStatus, [$status]);
        $this->filters['status'] = array_unique($currentStatus);
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $statusList = array_values(array_diff($statusList, [$status]));
        $this->filters['status'] = array_values(array_unique($statusList));
>>>>>>> 0dadab4 (Lint)
        $this->loadMarkers();
    }

    /**
     * Filtra per priorità.
     */
    public function filterByPriority(string $priority, bool $enabled): void
    {
        $currentPriority = $this->filters['priority'] ?? [];
        Assert::isArray($currentPriority, 'Priority filter must be array');
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
        $priorityList = array_values(array_filter(
            $currentPriority,
            static fn (mixed $value): bool => is_string($value),
=======
        $priorityList = array_values(array_filter(
            $currentPriority,
            static fn (mixed $value): bool => \is_string($value),
>>>>>>> 0dadab4 (Lint)
        ));

        if ($enabled) {
            $priorityList[] = $priority;
            $this->filters['priority'] = array_values(array_unique($priorityList));
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev

        if ($enabled) {
            $currentPriority[] = $priority;
            $this->filters['priority'] = array_unique($currentPriority);
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
            $this->loadMarkers();

            return;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $priorityList = array_values(array_diff($priorityList, [$priority]));
        $this->filters['priority'] = array_values(array_unique($priorityList));
=======
<<<<<<< HEAD
        $currentPriority = array_diff($currentPriority, [$priority]);
        $this->filters['priority'] = array_unique($currentPriority);
=======
<<<<<<< HEAD
        $priorityList = array_values(array_diff($priorityList, [$priority]));
        $this->filters['priority'] = array_values(array_unique($priorityList));
=======
        $currentPriority = array_diff($currentPriority, [$priority]);
        $this->filters['priority'] = array_unique($currentPriority);
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $priorityList = array_values(array_diff($priorityList, [$priority]));
        $this->filters['priority'] = array_values(array_unique($priorityList));
>>>>>>> 0dadab4 (Lint)
        $this->loadMarkers();
    }

    /**
     * Pulisce tutti i filtri.
     */
    public function clearFilters(): void
    {
        $this->filters = [
            'tickets' => true,
            'users' => false,
            'locations' => false,
            'status' => [],
            'priority' => [],
            'type' => [],
            'roles' => [],
            'location_types' => [],
        ];

        $this->loadMarkers();
    }

    /**
<<<<<<< HEAD
<<<<<<< .merge_file_uEvxkh
<<<<<<< HEAD
     * Ottiene le proprietà computate.
=======
<<<<<<< HEAD
     * Conteggio dei marker raggruppati per tipo.
=======
<<<<<<< HEAD
     * Ottiene le proprietà computate.
=======
     * Conteggio dei marker raggruppati per tipo.
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
     * Conteggio dei marker raggruppati per tipo.
>>>>>>> .merge_file_e736zw
=======
     * Ottiene le proprietà computate.
>>>>>>> 0dadab4 (Lint)
     *
     * @return array<string, int>
     */
    public function getMarkersByTypeProperty(): array
    {
<<<<<<< HEAD
<<<<<<< .merge_file_uEvxkh
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
        /** @var array<string, int> $grouped */
        $grouped = collect($this->markers)
            ->groupBy('type')
            ->map(static fn ($markers) => $markers->count())
            ->all();

        return $grouped;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
        // `groupBy()->map()->toArray()` perde il tipo della chiave (array-key, non
        // string): il conteggio esplicito mantiene la firma array<string, int> e
        // scarta i marker privi di un tipo utilizzabile come chiave.
        $counts = [];
        foreach ($this->markers as $marker) {
            $type = $marker['type'] ?? null;
            if (! is_string($type) || $type === '') {
                continue;
            }
            $counts[$type] = ($counts[$type] ?? 0) + 1;
        }

        return $counts;
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        // `groupBy()->map()->toArray()` perde il tipo della chiave (array-key, non
        // string): il conteggio esplicito mantiene la firma array<string, int> e
        // scarta i marker privi di un tipo utilizzabile come chiave.
        $counts = [];
        foreach ($this->markers as $marker) {
            $type = $marker['type'] ?? null;
            if (! is_string($type) || '' === $type) {
                continue;
            }
            $counts[$type] = ($counts[$type] ?? 0) + 1;
        }

        return $counts;
>>>>>>> .merge_file_e736zw
=======
>>>>>>> 0dadab4 (Lint)
    }

    public function getVisibleMarkersCountProperty(): int
    {
<<<<<<< HEAD
<<<<<<< .merge_file_uEvxkh
<<<<<<< HEAD
        return \count($this->markers);
=======
<<<<<<< HEAD
        return count($this->markers);
=======
<<<<<<< HEAD
        return \count($this->markers);
=======
        return count($this->markers);
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        return count($this->markers);
>>>>>>> .merge_file_e736zw
=======
        return \count($this->markers);
>>>>>>> 0dadab4 (Lint)
    }

    public function getFilteredMarkersCountProperty(): int
    {
<<<<<<< HEAD
<<<<<<< .merge_file_uEvxkh
<<<<<<< HEAD
        return \count($this->markers);
=======
<<<<<<< HEAD
        return count($this->markers);
=======
<<<<<<< HEAD
        return \count($this->markers);
=======
        return count($this->markers);
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        return count($this->markers);
>>>>>>> .merge_file_e736zw
=======
        return \count($this->markers);
>>>>>>> 0dadab4 (Lint)
    }

    /**
     * Ottiene il MIME type per il formato di esportazione.
     */
    private function getMimeType(string $format): string
    {
        return match ($format) {
            'csv' => 'text/csv',
            'geojson' => 'application/geo+json',
            'kml' => 'application/vnd.google-earth.kml+xml',
            default => 'application/json',
        };
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)

    /**
     * @return array<string, mixed>
     */
    private function getMapFilters(): array
    {
        $filters = [];

        foreach ($this->filters as $key => $value) {
<<<<<<< HEAD
            if (! is_string($key)) {
=======
            if (! \is_string($key)) {
>>>>>>> 0dadab4 (Lint)
                continue;
            }

            $filters[$key] = $value;
        }

        return $filters;
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 0dadab4 (Lint)
}
