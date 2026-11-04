<?php

declare(strict_types=1);

use Modules\UI\Datas\UIConfigData;
use Modules\UI\Filament\Pages\SettingPage;
use Modules\UI\Tests\TestCase;

uses(TestCase::class)->group('no-ui-db');

test('setting page resolves config name and data class by convention', function (): void {
    expect(SettingPage::getConfigName())->toBe('ui')
        ->and(SettingPage::getConfigDataClass())->toBe(UIConfigData::class);
});

test('config data reads the tenant file named after the module', function (): void {
    expect(UIConfigData::tenantConfigName())->toBe('ui');
});
