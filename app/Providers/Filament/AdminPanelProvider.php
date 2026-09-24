<?php

declare(strict_types=1);

namespace Modules\UI\Providers\Filament;

use Filament\Panel;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'UI';
<<<<<<< .merge_file_ZmnYtE

    #[\Override]
=======
<<<<<<< HEAD

    #[\Override]
=======
<<<<<<< .merge_file_H0AFQN
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

    #[\Override]
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_rYEVTI
>>>>>>> laraxot/dev
>>>>>>> .merge_file_WdjhcT
    public function panel(Panel $panel): Panel
    {
        return parent::panel($panel);
    }
}
