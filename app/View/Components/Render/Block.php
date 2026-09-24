<?php

declare(strict_types=1);

namespace Modules\UI\View\Components\Render;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\View\Component;
use Illuminate\View\View;
<<<<<<< HEAD
<<<<<<< .merge_file_6VMgiq
<<<<<<< HEAD
use Modules\Cms\Actions\ResolveLocalizedBlockDataAction;
=======
<<<<<<< HEAD
use Modules\UI\Actions\Block\ResolveLocalizedBlockDataAction;
use UnexpectedValueException;
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
use Modules\Cms\Actions\ResolveLocalizedBlockDataAction;
=======
use Modules\UI\Actions\Block\ResolveLocalizedBlockDataAction;
use UnexpectedValueException;
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use Modules\UI\Actions\Block\ResolveLocalizedBlockDataAction;
>>>>>>> .merge_file_HlKmPd
=======
>>>>>>> 804451c (Lint)
use Webmozart\Assert\Assert;

/**
 * .
 */
class Block extends Component
{
    public ?string $view = null;

    /**
<<<<<<< HEAD
     * @param array<string, mixed> $block
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $block
=======
<<<<<<< HEAD
     * @param array<string, mixed> $block
=======
     * @param  array<string, mixed>  $block
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
     * @param  array<string, mixed>  $block
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
     */
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
<<<<<<< HEAD
        if ($view === null) {
=======
<<<<<<< HEAD
        if (null === $view) {
=======
        if ($view === null) {
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        if ($view === null) {
>>>>>>> 804451c (Lint)
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
<<<<<<< .merge_file_6VMgiq
<<<<<<< HEAD
            $view_params = [
=======
<<<<<<< HEAD
            $viewParams = [
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
            $view_params = [
=======
            $viewParams = [
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            $viewParams = [
>>>>>>> .merge_file_HlKmPd
=======
>>>>>>> 804451c (Lint)
                'title' => 'deprecated',
                'message' => $message,
            ];

<<<<<<< HEAD
<<<<<<< .merge_file_6VMgiq
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
            return view('ui::alert', $view_params);
=======
            return view('ui::alert', $viewParams);
>>>>>>> .merge_file_HlKmPd
        }
        $rawData = $this->block['data'] ?? [];
        $viewParams = \is_array($rawData) ? $this->normalizeViewData($rawData) : [];
        $viewParams = app(ResolveLocalizedBlockDataAction::class)->execute($viewParams);
        $viewParams = $this->normalizeViewData($viewParams);
        Assert::string($view, __FILE__.':'.__LINE__.' - '.class_basename(self::class));

<<<<<<< .merge_file_6VMgiq
        return view($view, $view_params);
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
            return view('ui::alert', $view_params);
        }
        $view_params = $this->normalizeViewData($this->block['data'] ?? []);
        $view_params = app(ResolveLocalizedBlockDataAction::class)->execute($view_params);
        $view_params = $this->normalizeViewData($view_params);
        Assert::string($view, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        if (! view()->exists($view)) {
            throw new \Exception('view not found ['.$view.']');
        }

        return view($view, $view_params);
=======
>>>>>>> 804451c (Lint)
            return view('ui::alert', $viewParams);
        }
        $viewParams = $this->normalizeViewData($this->block['data'] ?? []);
        $viewParams = app(ResolveLocalizedBlockDataAction::class)->execute($viewParams);
        $viewParams = $this->normalizeViewData($viewParams);
        Assert::string($view, __FILE__.':'.__LINE__.' - '.class_basename(self::class));

        /** @var view-string $view */
        return view($view, $viewParams);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /* @var view-string $view */
        return view($view, $viewParams);
>>>>>>> .merge_file_HlKmPd
    }

    /**
     * @param array<array-key, mixed> $data
     *
     * @return array<string, mixed>
     */
    private function normalizeViewData(array $data): array
    {
=======
>>>>>>> laraxot/dev
    }

    /**
     * @return array<string, mixed>
     */
    private function normalizeViewData(mixed $data): array
    {
        if (! is_array($data)) {
            return [];
        }

>>>>>>> 804451c (Lint)
        $viewData = [];

        foreach ($data as $key => $value) {
            if (! is_string($key)) {
<<<<<<< HEAD
                throw new \UnexpectedValueException('Block view data must have string keys.');
=======
<<<<<<< HEAD
<<<<<<< HEAD
                throw new UnexpectedValueException('Block view data must have string keys.');
=======
<<<<<<< HEAD
                throw new \UnexpectedValueException('Block view data must have string keys.');
=======
                throw new UnexpectedValueException('Block view data must have string keys.');
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
                throw new UnexpectedValueException('Block view data must have string keys.');
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
            }

            $viewData[$key] = $value;
        }

        return $viewData;
    }
}
