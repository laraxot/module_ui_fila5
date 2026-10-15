<?php

declare(strict_types=1);

namespace Tests\Modules\UI\Fixtures;

enum UiGroupColumnTypeEnum: string {
    case Dip = 'Dip';

    public function getLabel(): string
    {
        return 'Dipendente';
    }
}