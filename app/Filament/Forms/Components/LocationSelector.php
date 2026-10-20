<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Exception;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Facades\Log;

/**
 * LocationSelector Component - Selezione geografica gerarchica
 *
 * Componente Filament per la selezione gerarchica di:
 * - Regione
 * - Provincia (dipendente da regione)
 * - CAP (dipendente da regione e provincia)
 */
class LocationSelector extends Group
{
    /**
     * Il nome del campo regione.
     */
    protected string $regionFieldName = 'region';

    /**
     * Il nome del campo provincia.
     */
    protected string $provinceFieldName = 'province';

    /**
     * Il nome del campo CAP.
     */
    protected string $capFieldName = 'cap';

    /**
     * Se i campi devono essere searchable.
     */
    protected bool $searchable = true;

    /**
     * Se i campi devono essere required.
     */
    protected bool $required = false;

    /**
     * Label personalizzate per i campi.
     *
     * @var array<string, string>
     */
    protected array $labels = [];

    /**
     * Placeholder personalizzati per i campi.
     *
     * @var array<string, string>
     */
    protected array $placeholders = [];

    /**
     * Setup del componente.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Imposta le label di default se non personalizzate
        $this->labels = array_merge([
            'region' => 'ui::location_selector.region.label',
            'province' => 'ui::location_selector.province.label',
            'cap' => 'ui::location_selector.cap.label',
        ], $this->labels);

        // Imposta i placeholder di default se non personalizzati
        $this->placeholders = array_merge([
            'region' => 'ui::location_selector.region.placeholder',
            'province' => 'ui::location_selector.province.placeholder',
            'cap' => 'ui::location_selector.cap.placeholder',
        ], $this->placeholders);

        // Configura lo schema dei campi figlio
        $this->schema($this->getChildComponentsSchema());
    }

    /**
     * Imposta il nome del campo regione.
     */
    public function regionField(string $fieldName): static
    {
        $this->regionFieldName = $fieldName;

        return $this;
    }

    /**
     * Imposta il nome del campo provincia.
     */
    public function provinceField(string $fieldName): static
    {
        $this->provinceFieldName = $fieldName;

        return $this;
    }

    /**
     * Imposta il nome del campo CAP.
     */
    public function capField(string $fieldName): static
    {
        $this->capFieldName = $fieldName;

        return $this;
    }

    /**
     * Rende tutti i campi required.
     */
    public function required(bool $condition = true): static
    {
        $this->required = $condition;

        return $this;
    }

    /**
     * Abilita/disabilita la ricerca in tutti i select.
     */
    public function searchable(bool $condition = true): static
    {
        $this->searchable = $condition;

        return $this;
    }

    /**
     * Imposta label personalizzate.
     *
     * @param  array<string, string>  $labels
     */
    public function labels(array $labels): static
    {
        $this->labels = array_merge($this->labels, $labels);

        return $this;
    }

    /**
     * Imposta placeholder personalizzati.
     *
     * @param  array<string, string>  $placeholders
     */
    public function placeholders(array $placeholders): static
    {
        $this->placeholders = array_merge($this->placeholders, $placeholders);

        return $this;
    }

    /**
     * Genera lo schema dei componenti figlio.
     *
     * @return array<Component>
     */
    protected function getChildComponentsSchema(): array
    {
        return [
            // Campo Regione
            Select::make($this->regionFieldName)
                ->label($this->labels['region'])
                ->placeholder($this->placeholders['region'])
                ->options($this->getRegionOptions())
                ->searchable($this->searchable)
                ->required($this->required)
                ->live()
                ->afterStateUpdated(function (Set $set) {
                    // Reset province e cap quando cambia la regione
                    $set($this->provinceFieldName, null);
                    $set($this->capFieldName, null);
                })
                ->helperText(__('ui::location_selector.region.help')),
            // Campo Provincia
            Select::make($this->provinceFieldName)
                ->label($this->labels['province'])
                ->placeholder($this->placeholders['province'])
                ->options(function (Get $get): array {
                    $region = $get($this->regionFieldName);

                    return is_string($region) ? $this->getProvinceOptions($region) : [];
                })
                ->searchable($this->searchable)
                ->required($this->required)
                ->live()
                ->disabled(fn (Get $get): bool => ! $get($this->regionFieldName))
                ->afterStateUpdated(function (Set $set) {
                    // Reset cap quando cambia la provincia
                    $set($this->capFieldName, null);
                })
                ->helperText(__('ui::location_selector.province.help')),
            // Campo CAP
            Select::make($this->capFieldName)
                ->label($this->labels['cap'])
                ->placeholder($this->placeholders['cap'])
                ->options(function (Get $get): array {
                    $region = $get($this->regionFieldName);
                    $province = $get($this->provinceFieldName);

                    return is_string($region) && is_string($province) ? $this->getCapOptions($region, $province) : [];
                })
                ->searchable($this->searchable)
                ->required($this->required)
                ->disabled(fn (Get $get): bool => ! $get($this->regionFieldName) || ! $get($this->provinceFieldName))
                ->helperText(__('ui::location_selector.cap.help')),
        ];
    }

    /**
     * Ottiene le opzioni per il campo regione.
     *
     * @return array<string, string>
     */
    protected function getRegionOptions(): array
    {
        try {
            $model = '\\Modules\\Geo\\Models\\Comune';
            if (! class_exists($model)) {
                return [];
            }
            $regions = $model::select('regione')
                ->distinct()
                ->orderBy('regione->nome')
                ->get()
                ->pluck('regione.nome', 'regione.codice')
                ->toArray();

            return $this->toStringMap($regions);
        } catch (Exception $e) {
            // Log dell'errore per debug
            Log::error('LocationSelector: Errore nel caricamento regioni', [
                'error' => $e->getMessage(),
            ]);

            return [];
        }
    }

    /**
     * Ottiene le opzioni per il campo provincia basate sulla regione.
     *
     * @param  string  $region  Codice regione
     * @return array<string, string>
     */
    protected function getProvinceOptions(string $region): array
    {
        try {
            $model = '\\Modules\\Geo\\Models\\Comune';
            if (! class_exists($model)) {
                return [];
            }
            $provinces = $model::query()
                ->where('regione->codice', $region)
                ->select('provincia')
                ->distinct()
                ->orderBy('provincia->nome')
                ->get()
                ->pluck('provincia.nome', 'provincia.codice')
                ->toArray();

            return $this->toStringMap($provinces);
        } catch (Exception $e) {
            Log::error('LocationSelector: Errore nel caricamento province', [
                'region' => $region,
                'error' => $e->getMessage(),
            ]);

            return [];
        }
    }

    /**
     * Ottiene le opzioni per il campo CAP basate su regione e provincia.
     *
     * @param  string  $region  Codice regione
     * @param  string  $province  Codice provincia
     * @return array<string, string>
     */
    protected function getCapOptions(string $region, string $province): array
    {
        try {
            $model = '\\Modules\\Geo\\Models\\Comune';
            if (! class_exists($model)) {
                return [];
            }
            $caps = $model::query()
                ->where('regione->codice', $region)
                ->where('provincia->codice', $province)
                ->select('cap')
                ->distinct()
                ->orderBy('cap')
                ->get()
                ->pluck('cap.0', 'cap.0')
                ->toArray();

            return $this->toStringMap($caps);
        } catch (Exception $e) {
            Log::error('LocationSelector: Errore nel caricamento CAP', [
                'region' => $region,
                'province' => $province,
                'error' => $e->getMessage(),
            ]);

            return [];
        }
    }

    /**
     * Normalizza il risultato di pluck()->toArray() in una mappa codice => etichetta di stringhe.
     *
     * @param  array<array-key, mixed>  $items
     * @return array<string, string>
     */
    private function toStringMap(array $items): array
    {
        $map = [];
        foreach ($items as $key => $value) {
            $map[(string) $key] = is_scalar($value) ? (string) $value : '';
        }

        return $map;
    }

    /**
     * Validazione custom per verificare la coerenza dei dati.
     *
     * @return array<int, string>
     */
    public function validate(): array
    {
        $state = $this->getState();
        $errors = [];

        if (! is_array($state)) {
            return $errors;
        }

        $capValue = $state[$this->capFieldName] ?? null;
        $regionValue = $state[$this->regionFieldName] ?? null;
        $provinceValue = $state[$this->provinceFieldName] ?? null;

        // Verifica che se è selezionata una provincia, sia selezionata anche la regione
        if (! empty($provinceValue) && empty($regionValue)) {
            $errors[] = __('ui::location_selector.validation.region_required_for_province');
        }

        // Verifica che se è selezionato un CAP, siano selezionate regione e provincia
        if (! empty($capValue) && (empty($regionValue) || empty($provinceValue))) {
            $errors[] = __('ui::location_selector.validation.region_province_required_for_cap');
        }

        return $errors;
    }

    /**
     * Ottiene i dati geografici completi basati sulla selezione corrente.
     *
     * @return array<string, mixed>|null
     */
    public function getGeographicData(): ?array
    {
        $state = $this->getState();
        if (! is_array($state) || empty($state[$this->regionFieldName])) {
            return null;
        }

        try {
            $model = '\\Modules\\Geo\\Models\\Comune';
            if (! class_exists($model)) {
                return null;
            }
            $query = $model::query()->where('regione->codice', $state[$this->regionFieldName]);

            if (! empty($state[$this->provinceFieldName])) {
                $query->where('provincia->codice', $state[$this->provinceFieldName]);
            }

            if (! empty($state[$this->capFieldName])) {
                $query->where('cap->0', $state[$this->capFieldName]);
            }

            $comune = $query->first();

            if (! $comune) {
                return null;
            }

            return [
                'region' => [
                    'code' => $comune->regione['codice'] ?? null,
                    'name' => $comune->regione['nome'] ?? null,
                ],
                'province' => [
                    'code' => $comune->provincia['codice'] ?? null,
                    'name' => $comune->provincia['nome'] ?? null,
                ],
                'cap' => $state[$this->capFieldName] ?? null,
                'city' => $comune->nome ?? null,
            ];
        } catch (Exception $e) {
            Log::error('LocationSelector: Errore nel recupero dati geografici', [
                'state' => $state,
                'error' => $e->getMessage(),
            ]);

            return null;
        }
    }
}
