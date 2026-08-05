<?php

declare(strict_types=1);

namespace Modules\UI\View\Components\Render;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\View\Component;
use Illuminate\View\View;
<<<<<<< HEAD
use Modules\UI\Actions\Block\ResolveLocalizedBlockDataAction;
=======
<<<<<<< HEAD
use Modules\UI\Actions\Block\ResolveLocalizedBlockDataAction;
=======
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
use Webmozart\Assert\Assert;

/**
 * .
 */
class Block extends Component
{
    public ?string $view = null;

<<<<<<< HEAD
    /**
     * @param array<string, mixed> $block
     */
=======
<<<<<<< HEAD
    /**
     * @param array<string, mixed> $block
     */
=======
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
    public function __construct(
        public array $block,
        public ?Model $model = null,
        public string $tpl = '',
    ) {
        $view = Arr::get($this->block, 'data.view', null);
<<<<<<< HEAD
        if (null === $view) {
=======
<<<<<<< HEAD
        if (null === $view) {
=======
        if ($view === null) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
            $view = 'ui::empty';
        }
        Assert::string($view, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        $this->view = $view;
    }

    public function render(): ViewFactory|View
    {
        if (! isset($this->block['type'])) {
            return view('ui::empty');
        }

        $view = $this->view;
        if (! view()->exists(is_string($view) ? $view : ((string) $view))) {
            $message = 'view not exists ['.$view.'] ! <pre>'.print_r($this->block, true).'</pre>';
<<<<<<< HEAD
            $viewParams = [
=======
<<<<<<< HEAD
            $viewParams = [
=======
            $view_params = [
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
                'title' => 'deprecated',
                'message' => $message,
            ];

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
            return view('ui::alert', $viewParams);
        }
        $viewParams = $this->normalizeViewData($this->block['data'] ?? []);
        $viewParams = app(ResolveLocalizedBlockDataAction::class)->execute($viewParams);
        $viewParams = $this->normalizeViewData($viewParams);
<<<<<<< HEAD
=======
=======
            return view('ui::alert', $view_params);
        }
        $view_params_raw = $this->block['data'] ?? [];
        $view_params = is_array($view_params_raw) ? $view_params_raw : [];
        /** @var array<string, mixed> $view_params */
        $view_params = (array) $view_params;
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
        Assert::string($view, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        if (! view()->exists($view)) {
            throw new \Exception('view not found ['.$view.']');
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
        return view($view, $viewParams);
    }

    /**
     * @return array<string, mixed>
     */
    private function normalizeViewData(mixed $data): array
    {
        if (! is_array($data)) {
            return [];
        }

        $viewData = [];

        foreach ($data as $key => $value) {
            if (! is_string($key)) {
                throw new \UnexpectedValueException('Block view data must have string keys.');
            }

            $viewData[$key] = $value;
        }

        return $viewData;
<<<<<<< HEAD
=======
=======
        return view($view, $view_params);
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
    }
}
