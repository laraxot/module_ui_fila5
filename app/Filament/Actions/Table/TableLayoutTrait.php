<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Actions\Table;

use Illuminate\Support\Facades\Session;
use Modules\UI\Enums\TableLayoutEnum;

/**
 * Trait TableLayoutTrait
 * Fornisce funzionalità per la gestione del layout delle tabelle.
 */
trait TableLayoutTrait
{
    /**
     * Ottiene il layout corrente dalla sessione o restituisce il default.
     */
    public function getCurrentLayout(string $identifier = 'default'): TableLayoutEnum
    {
        $sessionKey = "table_layout_{$identifier}";
        /** @var TableLayoutEnum|string|int|null $layout */
        $layout = Session::get($sessionKey);

<<<<<<< HEAD
        if (null !== $layout && in_array($layout, TableLayoutEnum::cases(), strict: true)) {
=======
<<<<<<< HEAD
        if (null !== $layout && in_array($layout, TableLayoutEnum::cases(), strict: true)) {
=======
        if ($layout !== null && in_array($layout, TableLayoutEnum::cases(), strict: true)) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
            // $layout è già un TableLayoutEnum dopo il controllo in_array con strict
            return $layout;
        }

        // Se $layout è una stringa/int, prova a convertirlo
        if (is_string($layout) || is_int($layout)) {
            $enum = TableLayoutEnum::tryFrom($layout);
<<<<<<< HEAD
            if (null !== $enum) {
=======
<<<<<<< HEAD
            if (null !== $enum) {
=======
            if ($enum !== null) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
                return $enum;
            }
        }

<<<<<<< HEAD
        return TableLayoutEnum::LIST;
=======
<<<<<<< HEAD
        return TableLayoutEnum::LIST;
=======
        return TableLayoutEnum::GRID;
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
    }

    /**
     * Salva il layout corrente nella sessione.
     */
    public function saveLayout(TableLayoutEnum $layout, string $identifier = 'default'): void
    {
        $sessionKey = "table_layout_{$identifier}";
        Session::put($sessionKey, $layout->value);
    }

    /**
     * Resetta il layout alla visualizzazione default.
     */
    public function resetLayout(string $identifier = 'default'): void
    {
        $sessionKey = "table_layout_{$identifier}";
        Session::forget($sessionKey);
    }

    /**
     * Ottiene il layout della tabella dalla sessione o restituisce il default.
     * Metodo di compatibilità con l'interfaccia HasTableLayout.
     */
    public function getTableLayout(): TableLayoutEnum
    {
        return $this->getCurrentLayout();
    }

    /**
     * Imposta il layout della tabella.
     * Metodo di compatibilità con l'interfaccia HasTableLayout.
     */
    public function setTableLayout(TableLayoutEnum $layout): void
    {
        $this->saveLayout($layout);
    }
}
