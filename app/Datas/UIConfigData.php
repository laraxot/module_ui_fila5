<?php

declare(strict_types=1);

namespace Modules\UI\Datas;

use Modules\UI\Filament\Pages\SettingPage;
use Modules\UI\Filament\Widgets\DarkModeSwitcherWidget;
use Modules\Xot\Datas\Concerns\MakesFromTenantConfig;
use Spatie\LaravelData\Data;

/**
 * Impostazioni di UI del tenant corrente: `config/{tenant}/ui.php`.
 *
 * Si modificano dalla SettingPage del modulo (solo super-admin). I default sono i valori che
 * prima erano scritti nel codice: nulla cambia finche' nessuno salva.
 *
 * @see SettingPage
 * @see DarkModeSwitcherWidget
 */
class UIConfigData extends Data
{
    use MakesFromTenantConfig;

<<<<<<< HEAD
    public bool $enabled = true;
=======
    /** Mostra il selettore tema chiaro/scuro (prima `config('ui.dark_mode_switcher.enabled', true)` nel widget). */
    public bool $dark_mode_switcher_enabled = true;
>>>>>>> 5079e7c159fc7e6cd66e609d30307d9db067c45b
}
