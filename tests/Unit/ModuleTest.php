<?php
namespace Modules\UI\Tests\Unit;

use Modules\UI\Tests\TestCase;
use Modules\UI\Models\Category;

it('has main model class', function () {
    expect(class_exists(Category::class))->toBeTrue();
});
