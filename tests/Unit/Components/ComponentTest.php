<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Components;

<<<<<<< HEAD
use Illuminate\Contracts\View\View;
=======
>>>>>>> dfac49d (.)
use Illuminate\View\Component;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

uses(TestCase::class);

describe('Component', function (): void {
    test('ui components can be rendered', function (): void {
        $component = new class extends Component {
<<<<<<< HEAD
            public function render(): View
=======
            public function render(): \Illuminate\Contracts\View\View
>>>>>>> dfac49d (.)
            {
                return view('ui::components.ui.button');
            }
        };

        Assert::assertInstanceOf(Component::class, $component);
    });

    test('ui button component has correct attributes', function (): void {
<<<<<<< HEAD
        Assert::assertInstanceOf(View::class, view('ui::components.ui.button'));
=======
        Assert::assertInstanceOf(\Illuminate\Contracts\View\View::class, view('ui::components.ui.button'));
>>>>>>> dfac49d (.)
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
