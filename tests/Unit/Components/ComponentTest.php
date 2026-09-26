<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;

uses(TestCase::class);

<<<<<<< HEAD
<<<<<<< HEAD
describe('Component', function (): void {
    test('ui components can be rendered', function (): void {
<<<<<<< HEAD
        $component = new class extends Component {
=======
<<<<<<< .merge_file_cPcJny
        $component = new class extends Component
        {
=======
<<<<<<< HEAD
        $component = new class extends Component
        {
=======
<<<<<<< HEAD
        $component = new class extends Component {
=======
        $component = new class extends Component
        {
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_RLYbwL
>>>>>>> laraxot/dev
            public function render(): View
            {
                return view('ui::components.ui.button');
=======
=======
>>>>>>> laraxot/dev
/**
 * @return view-string
 */
function uiButtonViewName(): string
{
    /** @var view-string $viewName */
    $viewName = 'ui::components.ui.button';

    return $viewName;
}

/**
 * @return view-string
 */
function uiCardViewName(): string
{
    /** @var view-string $viewName */
    $viewName = 'ui::components.ui.card';

    return $viewName;
}

describe('Component', function (): void {
    test('ui components can be rendered', function (): void {
        $component = new class extends Component {
            public function render(): View
            {
                return view(uiButtonViewName());
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
            }
        };

        Assert::assertInstanceOf(Component::class, $component);
    });

    test('ui button component has correct attributes', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::assertInstanceOf(View::class, view('ui::components.ui.button'));
    });

    test('ui card component renders content', function (): void {
        $view = view('ui::components.ui.card', [
=======
=======
>>>>>>> laraxot/dev
        Assert::assertInstanceOf(View::class, view(uiButtonViewName()));
    });

    test('ui card component renders content', function (): void {
        $view = view(uiCardViewName(), [
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
            'title' => 'Test Card',
            'content' => 'Test Content',
        ]);

        $html = (string) $view->render();
        Assert::assertStringContainsString('Test Card', $html);
        Assert::assertStringContainsString('Test Content', $html);
    });
});
