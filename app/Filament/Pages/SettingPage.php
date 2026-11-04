<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Pages;

use Filament\Forms\Components\Toggle;
use Modules\UI\Datas\UIConfigData;
use Modules\Xot\Filament\Pages\BaseSettingPage;

/**
 * Impostazioni di UI (`config/{tenant}/ui.php`), solo super-admin: visibilita' del selettore tema
 * chiaro/scuro.
 *
 * @see UIConfigData
 */
class SettingPage extends BaseSettingPage
{
    /**
<<<<<<< HEAD
     * @return array<string, object>
     */
    protected function getFormSchema(): array
    {
        return parent::getFormSchema();
=======
     * @return array<string, Toggle>
     */
    protected function getFormSchema(): array
    {
        return [
            'dark_mode_switcher_enabled' => Toggle::make('dark_mode_switcher_enabled'),
        ];
>>>>>>> 5079e7c159fc7e6cd66e609d30307d9db067c45b
    }
}
