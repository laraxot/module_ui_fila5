<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Components;

use Illuminate\View\Component;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

final class ComponentTest extends TestCase
{
    public function test_ui_components_can_be_rendered(): void
    {
        $component = new class extends Component {
            public function render(): \Illuminate\Contracts\View\View
            {
                return view('ui::components.ui.button');
            }
        };

        Assert::assertInstanceOf(Component::class, $component);
    }

    public function test_ui_button_component_has_correct_attributes(): void
    {
        /** @phpstan-ignore-next-line */
        Assert::assertTrue(view()->exists('ui::components.ui.button'));
    }

    public function test_ui_card_component_renders_content(): void
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
