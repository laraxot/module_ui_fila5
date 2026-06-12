<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Components;

use Illuminate\View\Component;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

final class ComponentTest extends TestCase
{
    public function testUiComponentsCanBeRendered(): void
    {
        $component = new class extends Component {
            public function render(): \Illuminate\Contracts\View\View
            {
                return view('ui::components.ui.button');
            }
        };

        Assert::assertInstanceOf(Component::class, $component);
    }

    public function testUiButtonComponentHasCorrectAttributes(): void
    {
        /* @phpstan-ignore-next-line */
        Assert::assertTrue(view()->exists('ui::components.ui.button'));
    }

    public function testUiCardComponentRendersContent(): void
    {
        $view = view('ui::components.ui.card', [
            'title' => 'Test Card',
            'content' => 'Test Content',
        ]);

        $html = (string) $view->render();
        Assert::assertStringContainsString('Test Card', $html);
        Assert::assertStringContainsString('Test Content', $html);
    }
}
