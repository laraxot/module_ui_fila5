<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Pages;

use Modules\Xot\Filament\Pages\BaseSettingPage;

/**
 * Impostazioni di UI (`config/{tenant}/ui.php`), solo super-admin. Pagina senza campi: la
 * convenzione (Data, file del tenant, accesso) sta in BaseSettingPage e in
 * \Modules\UI\Datas\UIConfigData.
 */
class SettingPage extends BaseSettingPage
{
    /**
     * @return array<string, object>
     */
    protected function getFormSchema(): array
    {
        return parent::getFormSchema();
    }
}
