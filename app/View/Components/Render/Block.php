<?php

declare(strict_types=1);

namespace Modules\UI\View\Components\Render;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\View\Component;
use Illuminate\View\View;
<<<<<<< HEAD
use Modules\Cms\Actions\ResolveLocalizedBlockDataAction;
=======
use Modules\UI\Actions\Block\ResolveLocalizedBlockDataAction;
use UnexpectedValueException;
>>>>>>> laraxot/dev
use Webmozart\Assert\Assert;

/**
 * .
 */
class Block extends Component
{
    /** @var view-string|null */
    public ?string $view = null;

    /**
     * @param  array<string, mixed>  $block
     */
    public function __construct(
        public array $block,
        public ?Model $model = null,
        public string $tpl = '',
    ) {
        $view = Arr::get($this->block, 'data.view', null);
        if ($view === null) {
<<<<<<< HEAD
            /** @var view-string $view */
=======
>>>>>>> laraxot/dev
            $view = 'ui::empty';
        }
        Assert::string($view, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        /** @var view-string $view */
        $this->view = $view;
    }

    public function render(): ViewFactory|View
    {
        if (! isset($this->block['type'])) {
<<<<<<< HEAD
            /** @var view-string $viewName */
            $viewName = 'ui::empty';

            return view($viewName);
=======
            return view('ui::empty');
>>>>>>> laraxot/dev
        }

        $view = $this->view ?? 'ui::empty';
        /** @var view-string $view */
        $viewPath = (string) $view;
        if (! view()->exists($viewPath)) {
            $message = 'view not exists ['.$view.'] ! <pre>'.print_r($this->block, true).'</pre>';
<<<<<<< HEAD
            $view_params = [
                'title' => 'deprecated',
                'message' => $message,
            ];
            /** @var view-string $viewAlert */
            $viewAlert = 'ui::alert';

            return view($viewAlert, $view_params);
        }
        $view_params = $this->normalizeViewData($this->block['data'] ?? []);
        $view_params = app(ResolveLocalizedBlockDataAction::class)->execute($view_params);
        $view_params = $this->normalizeViewData($view_params);

        return view($view, $view_params);
    }

    /**
     * @return array<string, mixed>
     */
    private function normalizeViewData(mixed $data): array
    {
        if (! is_array($data)) {
            return [];
        }

=======
            $viewParams = [
                'title' => 'deprecated',
                'message' => $message,
            ];

            return view('ui::alert', $viewParams);
        }
        $rawData = $this->block['data'] ?? [];
        $viewParams = \is_array($rawData) ? $this->normalizeViewData($rawData) : [];
        $viewParams = app(ResolveLocalizedBlockDataAction::class)->execute($viewParams);
        $viewParams = $this->normalizeViewData($viewParams);
        Assert::string($view, __FILE__.':'.__LINE__.' - '.class_basename(self::class));

        /** @var view-string $view */
        return view($view, $viewParams);
    }

    /**
     * @param  array<array-key, mixed>  $data
     * @return array<string, mixed>
     */
    private function normalizeViewData(array $data): array
    {
>>>>>>> laraxot/dev
        $viewData = [];

        foreach ($data as $key => $value) {
            if (! is_string($key)) {
<<<<<<< HEAD
                throw new \UnexpectedValueException('Block view data must have string keys.');
=======
                throw new UnexpectedValueException('Block view data must have string keys.');
>>>>>>> laraxot/dev
            }

            $viewData[$key] = $value;
        }

        return $viewData;
    }
}
