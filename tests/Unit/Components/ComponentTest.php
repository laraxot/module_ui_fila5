<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

uses(\Modules\UI\Tests\TestCase::class);

describe('Component', function (): void {
    test('ui components can be rendered', function (): void {
<<<<<<< .merge_file_Cn0Nh7
        $component = new class() extends Component
        {
=======
        $component = new class extends Component {
>>>>>>> .merge_file_vA1sCD
            public function render(): View
            {
                return view('ui::components.ui.button');
            }
        };

        Assert::assertInstanceOf(Component::class, $component);
    });

    test('ui button component has correct attributes', function (): void {
        Assert::assertInstanceOf(View::class, view('ui::components.ui.button'));
    });

    test('ui card component renders content', function (): void {
        $view = view('ui::components.ui.card', [
            'title' => 'Test Card',
            'content' => 'Test Content',
        ]);

        $html = (string) $view->render();
        Assert::assertStringContainsString('Test Card', $html);
        Assert::assertStringContainsString('Test Content', $html);
    });
});
