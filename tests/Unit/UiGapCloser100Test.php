<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit;

use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Blocks\Image;
use Modules\UI\Filament\Forms\Components\YearSelect;
<<<<<<< HEAD
<<<<<<< .merge_file_gAdpao
=======
<<<<<<< .merge_file_7wAduh
=======
use Modules\UI\Filament\Widgets\DarkModeSwitcherWidget;
>>>>>>> .merge_file_KozRz8
>>>>>>> .merge_file_OsIub8
=======
>>>>>>> 804451c (Lint)
use Modules\UI\Filament\Widgets\HeroWidget;
use Modules\UI\Filament\Widgets\RedirectWidget;
use Modules\UI\Filament\Widgets\RowWidget;
use Modules\UI\Filament\Widgets\StatWithIconWidget;
use Modules\UI\Filament\Widgets\UserCalendarWidget;
use Modules\UI\Forms\Components\RadioCardSelector;
use Modules\Ui\Http\Livewire\DarkModeSwitcher;
use Modules\UI\Http\Livewire\Toast;
use Modules\UI\Http\Middleware\SetLocale;
use Modules\UI\Rules\OpeningHoursRule;
use Modules\UI\Tests\TestCase;
use Modules\UI\Traits\TableLayoutTrait;
use Modules\UI\View\Components\Render\Block;
use Modules\UI\View\Components\Render\Blocks;
use Modules\UI\View\Composers\ThemeComposer;
use PHPUnit\Framework\Assert;
<<<<<<< HEAD
<<<<<<< .merge_file_gAdpao
=======
<<<<<<< .merge_file_7wAduh
>>>>>>> .merge_file_OsIub8
<<<<<<< HEAD
use ReflectionClass;
=======
>>>>>>> laraxot/dev
<<<<<<< .merge_file_gAdpao
=======
=======
>>>>>>> .merge_file_KozRz8
>>>>>>> .merge_file_OsIub8
=======
>>>>>>> 804451c (Lint)

uses(TestCase::class);

describe('UI gap closer 100 — Livewire', function (): void {
    test('DarkModeSwitcher mount toggle and render', function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_gAdpao
=======
<<<<<<< .merge_file_7wAduh
>>>>>>> .merge_file_OsIub8
<<<<<<< HEAD
        $component = new DarkModeSwitcher;
=======
        $component = new DarkModeSwitcher();
>>>>>>> laraxot/dev
<<<<<<< .merge_file_gAdpao
=======
=======
        $component = new DarkModeSwitcher();
>>>>>>> .merge_file_KozRz8
>>>>>>> .merge_file_OsIub8
=======
        $component = new DarkModeSwitcher();
>>>>>>> 804451c (Lint)
        $component->mount();
        Assert::assertFalse($component->darkMode);
        $component->toggleDarkMode();
        Assert::assertTrue($component->darkMode);
        Assert::assertInstanceOf(ViewContract::class, $component->render());
    });

<<<<<<< HEAD
<<<<<<< .merge_file_gAdpao
=======
<<<<<<< .merge_file_7wAduh
>>>>>>> .merge_file_OsIub8
    test('Toast render exposes view params', function (): void {
<<<<<<< HEAD
        $component = new Toast;
=======
        $component = new Toast();
>>>>>>> laraxot/dev
<<<<<<< .merge_file_gAdpao
=======
=======
    test('DarkModeSwitcherWidget mount toggle and render (gemello Filament)', function (): void {
        $widget = new DarkModeSwitcherWidget();
        $widget->mount();
        Assert::assertFalse($widget->darkMode);
        $widget->toggleDarkMode();
        Assert::assertTrue($widget->darkMode);
        Assert::assertInstanceOf(ViewContract::class, $widget->render());
    });

    test('Toast render exposes view params', function (): void {
        $component = new Toast();
>>>>>>> .merge_file_KozRz8
>>>>>>> .merge_file_OsIub8
=======
    test('Toast render exposes view params', function (): void {
        $component = new Toast();
>>>>>>> 804451c (Lint)
        Assert::assertInstanceOf(ViewContract::class, $component->render());
    });
});

describe('UI gap closer 100 — View components', function (): void {
    test('Blocks and Block render resolve views', function (): void {
        $blocks = new Blocks('ui::empty', [['type' => 'test']]);
        Assert::assertInstanceOf(View::class, $blocks->render());

        $noType = new Block(['data' => ['view' => 'ui::empty']]);
        $noTypeView = $noType->render();
        Assert::assertInstanceOf(View::class, $noTypeView);
        Assert::assertSame('ui::empty', $noTypeView->name());

        $missingView = new Block(['type' => 'x', 'data' => ['view' => 'ui::view-that-does-not-exist-'.uniqid('', true)]]);
        $missing = $missingView->render();
        Assert::assertInstanceOf(View::class, $missing);
        Assert::assertSame('ui::alert', $missing->name());
    });

    test('ThemeComposer metatag and scripts', function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_gAdpao
=======
<<<<<<< .merge_file_7wAduh
>>>>>>> .merge_file_OsIub8
<<<<<<< HEAD
        $composer = new ThemeComposer;
=======
        $composer = new ThemeComposer();
>>>>>>> laraxot/dev
<<<<<<< .merge_file_gAdpao
=======
=======
        $composer = new ThemeComposer();
>>>>>>> .merge_file_KozRz8
>>>>>>> .merge_file_OsIub8
=======
        $composer = new ThemeComposer();
>>>>>>> 804451c (Lint)
        Assert::assertSame('', $composer->showScripts());
        Assert::assertNull($composer->metatag('missing-key'));
        config(['metatag.test_bool' => true]);
        Assert::assertTrue($composer->metatag('test_bool'));
    });
});

describe('UI gap closer 100 — Filament widgets and forms', function (): void {
    test('RedirectWidget getViewData and canView', function (): void {
        Assert::assertTrue(RedirectWidget::canView());

<<<<<<< HEAD
<<<<<<< .merge_file_gAdpao
=======
<<<<<<< .merge_file_7wAduh
>>>>>>> .merge_file_OsIub8
<<<<<<< HEAD
        $widget = new RedirectWidget;
=======
        $widget = new RedirectWidget();
>>>>>>> laraxot/dev
<<<<<<< .merge_file_gAdpao
=======
=======
        $widget = new RedirectWidget();
>>>>>>> .merge_file_KozRz8
>>>>>>> .merge_file_OsIub8
=======
        $widget = new RedirectWidget();
>>>>>>> 804451c (Lint)
        $widget->to = '/admin';
        $widget->label = 'Go';
        $widget->icon = 'heroicon-o-link';
        $widget->class = 'btn';
        $widget->external = true;

<<<<<<< HEAD
<<<<<<< .merge_file_gAdpao
=======
<<<<<<< .merge_file_7wAduh
>>>>>>> .merge_file_OsIub8
<<<<<<< HEAD
        $method = (new ReflectionClass($widget))->getMethod('getViewData');
=======
        $method = (new \ReflectionClass($widget))->getMethod('getViewData');
>>>>>>> laraxot/dev
<<<<<<< .merge_file_gAdpao
=======
=======
        $method = (new \ReflectionClass($widget))->getMethod('getViewData');
>>>>>>> .merge_file_KozRz8
>>>>>>> .merge_file_OsIub8
=======
        $method = (new \ReflectionClass($widget))->getMethod('getViewData');
>>>>>>> 804451c (Lint)
        $method->setAccessible(true);
        $data = $method->invoke($widget);
        Assert::assertIsArray($data);
        Assert::assertSame('/admin', $data['to']);
        Assert::assertSame('Go', $data['label']);
        Assert::assertTrue($data['external']);
    });

    test('StatWithIconWidget getData and RowWidget getColumns', function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_gAdpao
=======
<<<<<<< .merge_file_7wAduh
>>>>>>> .merge_file_OsIub8
<<<<<<< HEAD
        $stat = new StatWithIconWidget;
        $ref = new ReflectionClass($stat);
=======
        $stat = new StatWithIconWidget();
        $ref = new \ReflectionClass($stat);
>>>>>>> laraxot/dev
<<<<<<< .merge_file_gAdpao
=======
=======
        $stat = new StatWithIconWidget();
        $ref = new \ReflectionClass($stat);
>>>>>>> .merge_file_KozRz8
>>>>>>> .merge_file_OsIub8
=======
        $stat = new StatWithIconWidget();
        $ref = new \ReflectionClass($stat);
>>>>>>> 804451c (Lint)
        $label = $ref->getProperty('label');
        $label->setAccessible(true);
        $label->setValue($stat, 'Users');
        $value = $ref->getProperty('value');
        $value->setAccessible(true);
        $value->setValue($stat, 42);

        $data = $ref->getMethod('getData')->invoke($stat);
        Assert::assertIsArray($data);
        Assert::assertSame('Users', $data['label']);
        Assert::assertSame(42, $data['value']);

<<<<<<< HEAD
<<<<<<< .merge_file_gAdpao
=======
<<<<<<< .merge_file_7wAduh
>>>>>>> .merge_file_OsIub8
<<<<<<< HEAD
        $row = new class extends RowWidget {};
        Assert::assertSame(3, (new ReflectionClass($row))->getMethod('getColumns')->invoke($row));
    });

    test('HeroWidget getStats and UserCalendarWidget private normalizers', function (): void {
        $hero = new HeroWidget;
        $heroRef = new ReflectionClass($hero);
=======
<<<<<<< .merge_file_gAdpao
=======
=======
>>>>>>> .merge_file_KozRz8
>>>>>>> .merge_file_OsIub8
=======
>>>>>>> 804451c (Lint)
        $row = new class extends RowWidget {
        };
        Assert::assertSame(3, (new \ReflectionClass($row))->getMethod('getColumns')->invoke($row));
    });

    test('HeroWidget getStats and UserCalendarWidget private normalizers', function (): void {
        $hero = new HeroWidget();
        $heroRef = new \ReflectionClass($hero);
<<<<<<< HEAD
<<<<<<< .merge_file_gAdpao
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_7wAduh
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_KozRz8
>>>>>>> .merge_file_OsIub8
=======
>>>>>>> 804451c (Lint)
        foreach (['title' => 'Welcome', 'icon' => 'heroicon-o-star'] as $prop => $val) {
            $p = $heroRef->getProperty($prop);
            $p->setAccessible(true);
            $p->setValue($hero, $val);
        }
        $stats = $heroRef->getMethod('getStats')->invoke($hero);
        Assert::assertIsIterable($stats);
        Assert::assertCount(1, $stats);

<<<<<<< HEAD
<<<<<<< .merge_file_gAdpao
=======
<<<<<<< .merge_file_7wAduh
>>>>>>> .merge_file_OsIub8
<<<<<<< HEAD
        $calendar = new UserCalendarWidget;
        $calendarRef = new ReflectionClass($calendar);
=======
        $calendar = new UserCalendarWidget();
        $calendarRef = new \ReflectionClass($calendar);
>>>>>>> laraxot/dev
<<<<<<< .merge_file_gAdpao
=======
=======
        $calendar = new UserCalendarWidget();
        $calendarRef = new \ReflectionClass($calendar);
>>>>>>> .merge_file_KozRz8
>>>>>>> .merge_file_OsIub8
=======
        $calendar = new UserCalendarWidget();
        $calendarRef = new \ReflectionClass($calendar);
>>>>>>> 804451c (Lint)
        $normalizeEvents = $calendarRef->getMethod('normalizeEventsArray');
        $normalizeEvents->setAccessible(true);
        Assert::assertSame([], $normalizeEvents->invoke(null, 'not-array'));
        Assert::assertSame([['title' => 'E1']], $normalizeEvents->invoke(null, [['title' => 'E1'], [123 => 'bad']]));

        $normalizeSchema = $calendarRef->getMethod('normalizeFormSchema');
        $normalizeSchema->setAccessible(true);
        Assert::assertSame([], $normalizeSchema->invoke(null, 'bad'));
    });

    test('YearSelect getYearsOptions swaps inverted range', function (): void {
        $select = YearSelect::make('year')->past(5)->future(-3);
<<<<<<< HEAD
<<<<<<< .merge_file_gAdpao
=======
<<<<<<< .merge_file_7wAduh
>>>>>>> .merge_file_OsIub8
<<<<<<< HEAD
        $method = (new ReflectionClass($select))->getMethod('getYearsOptions');
=======
        $method = (new \ReflectionClass($select))->getMethod('getYearsOptions');
>>>>>>> laraxot/dev
<<<<<<< .merge_file_gAdpao
=======
=======
        $method = (new \ReflectionClass($select))->getMethod('getYearsOptions');
>>>>>>> .merge_file_KozRz8
>>>>>>> .merge_file_OsIub8
=======
        $method = (new \ReflectionClass($select))->getMethod('getYearsOptions');
>>>>>>> 804451c (Lint)
        $method->setAccessible(true);
        $options = $method->invoke($select);
        Assert::assertIsArray($options);
        Assert::assertNotEmpty($options);
        Assert::assertSame(array_keys($options), array_values(array_map('intval', array_keys($options))));
    });

    test('Image block ratio helpers', function (): void {
        Assert::assertSame('aspect-[3/4]', Image::getRatioClass('3-4'));
        Assert::assertSame('', Image::getRatioClass('unknown'));
        Assert::assertNotEmpty(Image::getFormSchema());
        Assert::assertArrayHasKey('4-3', Image::getRatios());
    });

    test('RadioCardSelector getters and card normalization', function (): void {
        $field = RadioCardSelector::make('card')
            ->cards([['id' => 1, 'title' => 'A'], ['id' => 2, 'title' => 'B']])
            ->sectionTitle('Title')
            ->sectionSubtitle('Sub')
            ->emptyStateTitle('Empty')
            ->emptyStateDescription('Desc')
            ->populatesField('name');

        Assert::assertSame('Title', $field->getSectionTitle());
        Assert::assertSame('Sub', $field->getSectionSubtitle());
        Assert::assertSame('name', $field->getTargetFieldName());
        Assert::assertCount(2, $field->getCards());

        $closureField = RadioCardSelector::make('c')->cards(static fn (): array => [['id' => 2]]);
        Assert::assertSame([['id' => 2]], $closureField->getCards());
    });
});

describe('UI gap closer 100 — middleware trait rules', function (): void {
    test('SetLocale handles non-string session locale', function (): void {
        Session::put('locale', 123);
<<<<<<< HEAD
<<<<<<< .merge_file_gAdpao
=======
<<<<<<< .merge_file_7wAduh
>>>>>>> .merge_file_OsIub8
<<<<<<< HEAD
        $middleware = new SetLocale;
=======
        $middleware = new SetLocale();
>>>>>>> laraxot/dev
<<<<<<< .merge_file_gAdpao
=======
=======
        $middleware = new SetLocale();
>>>>>>> .merge_file_KozRz8
>>>>>>> .merge_file_OsIub8
=======
        $middleware = new SetLocale();
>>>>>>> 804451c (Lint)
        $response = $middleware->handle(Request::create('/'), static fn () => response('ok'));
        Assert::assertSame(200, $response->getStatusCode());
    });

    test('TableLayoutTrait session branches and refresh', function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_gAdpao
=======
<<<<<<< .merge_file_7wAduh
>>>>>>> .merge_file_OsIub8
<<<<<<< HEAD
        $subject = new class
        {
=======
        $subject = new class {
>>>>>>> laraxot/dev
<<<<<<< .merge_file_gAdpao
=======
=======
        $subject = new class {
>>>>>>> .merge_file_KozRz8
>>>>>>> .merge_file_OsIub8
=======
        $subject = new class {
>>>>>>> 804451c (Lint)
            use TableLayoutTrait;

            public int $dispatched = 0;

            public function dispatch(mixed ...$params): void
            {
<<<<<<< HEAD
<<<<<<< .merge_file_gAdpao
=======
<<<<<<< .merge_file_7wAduh
>>>>>>> .merge_file_OsIub8
<<<<<<< HEAD
                $this->dispatched++;
=======
                ++$this->dispatched;
>>>>>>> laraxot/dev
=======
                ++$this->dispatched;
>>>>>>> 804451c (Lint)
            }
        };

        Session::put('table_layout', TableLayoutEnum::LIST);
        Assert::assertSame(TableLayoutEnum::LIST, $subject->getTableLayout());

        Session::put('table_layout', 'list');
        Assert::assertSame(TableLayoutEnum::LIST, $subject->getTableLayout());

        Session::put('table_layout', 'invalid');
        Assert::assertSame(TableLayoutEnum::GRID, $subject->getTableLayout());

        Session::forget('table_layout');
        Assert::assertSame(TableLayoutEnum::GRID, $subject->getTableLayout());
<<<<<<< HEAD
<<<<<<< .merge_file_gAdpao
=======
=======
                ++$this->dispatched;
            }
        };

        $cases = [
            'enum instance' => [TableLayoutEnum::LIST, TableLayoutEnum::LIST],
            'valid string' => ['list', TableLayoutEnum::LIST],
            'invalid string' => ['invalid', TableLayoutEnum::GRID],
            'missing value' => [null, TableLayoutEnum::GRID],
        ];

        foreach ($cases as $label => [$sessionValue, $expected]) {
            if (null === $sessionValue) {
                Session::forget('table_layout');
            } else {
                Session::put('table_layout', $sessionValue);
            }

            Assert::assertSame($expected, $subject->getTableLayout(), $label);
        }

        $subject->setTableLayout(TableLayoutEnum::GRID);
        Assert::assertSame('grid', Session::get('table_layout'));
>>>>>>> .merge_file_KozRz8
>>>>>>> .merge_file_OsIub8
=======
>>>>>>> 804451c (Lint)

        $subject->refreshTable();
        Assert::assertGreaterThan(0, $subject->dispatched);
    });

    test('OpeningHoursRule cleanTimeValue rejects non-string', function (): void {
<<<<<<< HEAD
<<<<<<< .merge_file_gAdpao
=======
<<<<<<< .merge_file_7wAduh
>>>>>>> .merge_file_OsIub8
<<<<<<< HEAD
        $rule = new OpeningHoursRule;
        $method = (new ReflectionClass($rule))->getMethod('cleanTimeValue');
=======
        $rule = new OpeningHoursRule();
        $method = (new \ReflectionClass($rule))->getMethod('cleanTimeValue');
>>>>>>> laraxot/dev
<<<<<<< .merge_file_gAdpao
=======
=======
        $rule = new OpeningHoursRule();
        $method = (new \ReflectionClass($rule))->getMethod('cleanTimeValue');
>>>>>>> .merge_file_KozRz8
>>>>>>> .merge_file_OsIub8
=======
        $rule = new OpeningHoursRule();
        $method = (new \ReflectionClass($rule))->getMethod('cleanTimeValue');
>>>>>>> 804451c (Lint)
        $method->setAccessible(true);

        Assert::assertNull($method->invoke($rule, 12345));
        Assert::assertNull($method->invoke($rule, '  '));
        Assert::assertSame('09:00', $method->invoke($rule, ' 09:00 '));
    });
});
