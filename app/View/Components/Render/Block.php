<?php

declare(strict_types=1);

namespace Modules\UI\View\Components\Render;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\View\Component;
use Illuminate\View\View;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_qrnzbr
<<<<<<< HEAD
use Modules\Cms\Actions\ResolveLocalizedBlockDataAction;
=======
use Modules\UI\Actions\Block\ResolveLocalizedBlockDataAction;
use UnexpectedValueException;
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_6VMgiq
<<<<<<< HEAD
use Modules\Cms\Actions\ResolveLocalizedBlockDataAction;
=======
<<<<<<< HEAD
use Modules\UI\Actions\Block\ResolveLocalizedBlockDataAction;
use UnexpectedValueException;
=======
<<<<<<< HEAD
use Modules\Cms\Actions\ResolveLocalizedBlockDataAction;
=======
use Modules\UI\Actions\Block\ResolveLocalizedBlockDataAction;
use UnexpectedValueException;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use Modules\UI\Actions\Block\ResolveLocalizedBlockDataAction;
>>>>>>> .merge_file_HlKmPd
>>>>>>> .merge_file_N1Nshf
=======
use Modules\Cms\Actions\ResolveLocalizedBlockDataAction;
>>>>>>> laraxot/dev
use Webmozart\Assert\Assert;
=======
use Modules\Cms\Actions\ResolveLocalizedBlockDataAction;
use Modules\Cms\Actions\View\GetCmsViewAction;
>>>>>>> laraxot/dev

/**
 * Blade component that renders a CMS block.
 */
class Block extends Component
{
<<<<<<< HEAD
<<<<<<< HEAD
    public ?string $view = null;

    /**
<<<<<<< HEAD
<<<<<<< .merge_file_qrnzbr
=======
     * @param array<string, mixed> $block
=======
<<<<<<< HEAD
     * @param  array<string, mixed>  $block
=======
<<<<<<< HEAD
>>>>>>> .merge_file_N1Nshf
     * @param array<string, mixed> $block
=======
     * @param  array<string, mixed>  $block
>>>>>>> laraxot/dev
<<<<<<< .merge_file_qrnzbr
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_N1Nshf
=======
=======
>>>>>>> laraxot/dev
    /** @var view-string|null */
    public ?string $view = null;

    /**
<<<<<<< HEAD
     * @param  array<string, mixed>  $block
>>>>>>> laraxot/dev
=======
     * @param array<string, mixed> $block
>>>>>>> laraxot/dev
     */
    public function __construct(
        public array $block,
        public ?Model $model = null,
        public string $tpl = '',
    ) {
<<<<<<< HEAD
        $view = Arr::get($this->block, 'data.view', null);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_qrnzbr
=======
        if (null === $view) {
=======
<<<<<<< HEAD
        if ($view === null) {
=======
<<<<<<< HEAD
>>>>>>> .merge_file_N1Nshf
        if (null === $view) {
=======
        if ($view === null) {
>>>>>>> laraxot/dev
<<<<<<< .merge_file_qrnzbr
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_N1Nshf
            $view = 'ui::empty';
        }
        Assert::string($view, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
        if ($view === null) {
            /** @var view-string $view */
            $view = 'ui::empty';
        }
        Assert::string($view, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        /** @var view-string $view */
>>>>>>> laraxot/dev
=======
        $view = Arr::get($this->block, 'data.view');
        if (! is_string($view) || ! view()->exists($view)) {
            $view = 'ui::empty';
        }

        /** @var view-string $view */
>>>>>>> laraxot/dev
        $this->view = $view;
    }

    public function render(): ViewFactory|View
    {
        if (! isset($this->block['type'])) {
<<<<<<< HEAD
<<<<<<< HEAD
            return view('ui::empty');
        }

        $view = $this->view;
        if (! view()->exists(is_string($view) ? $view : ((string) $view))) {
            $message = 'view not exists ['.$view.'] ! <pre>'.print_r($this->block, true).'</pre>';
<<<<<<< .merge_file_qrnzbr
<<<<<<< HEAD
            $view_params = [
=======
            $viewParams = [
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_6VMgiq
<<<<<<< HEAD
            $view_params = [
=======
<<<<<<< HEAD
            $viewParams = [
=======
<<<<<<< HEAD
            $view_params = [
=======
            $viewParams = [
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
            $viewParams = [
>>>>>>> .merge_file_HlKmPd
>>>>>>> .merge_file_N1Nshf
                'title' => 'deprecated',
                'message' => $message,
            ];

<<<<<<< .merge_file_qrnzbr
<<<<<<< HEAD
=======
<<<<<<< .merge_file_6VMgiq
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_N1Nshf
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
<<<<<<< .merge_file_qrnzbr
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_N1Nshf
            return view('ui::alert', $viewParams);
        }
        $viewParams = $this->normalizeViewData($this->block['data'] ?? []);
        $viewParams = app(ResolveLocalizedBlockDataAction::class)->execute($viewParams);
        $viewParams = $this->normalizeViewData($viewParams);
        Assert::string($view, __FILE__.':'.__LINE__.' - '.class_basename(self::class));

        /** @var view-string $view */
        return view($view, $viewParams);
<<<<<<< .merge_file_qrnzbr
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        /* @var view-string $view */
        return view($view, $viewParams);
>>>>>>> .merge_file_HlKmPd
>>>>>>> .merge_file_N1Nshf
    }

    /**
     * @param array<array-key, mixed> $data
     *
     * @return array<string, mixed>
     */
    private function normalizeViewData(array $data): array
    {
=======
=======
>>>>>>> laraxot/dev
            /** @var view-string $viewName */
            $viewName = 'ui::empty';

            return view($viewName);
        }

        $viewPath = $this->view ?? 'ui::empty';
        if (! view()->exists($viewPath)) {
            $message = 'view not exists ['.$viewPath.'] ! <pre>'.print_r($this->block, true).'</pre>';
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
<<<<<<< HEAD
=======
        $view = app(GetCmsViewAction::class)->execute($viewPath);
>>>>>>> laraxot/dev

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

<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
        $viewData = [];

        foreach ($data as $key => $value) {
            if (! is_string($key)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_qrnzbr
=======
                throw new \UnexpectedValueException('Block view data must have string keys.');
=======
<<<<<<< HEAD
                throw new UnexpectedValueException('Block view data must have string keys.');
=======
<<<<<<< HEAD
>>>>>>> .merge_file_N1Nshf
                throw new \UnexpectedValueException('Block view data must have string keys.');
=======
                throw new UnexpectedValueException('Block view data must have string keys.');
>>>>>>> laraxot/dev
<<<<<<< .merge_file_qrnzbr
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_N1Nshf
=======
                throw new \UnexpectedValueException('Block view data must have string keys.');
>>>>>>> laraxot/dev
=======
                throw new \UnexpectedValueException('Block view data must have string keys.');
>>>>>>> laraxot/dev
            }

            $viewData[$key] = $value;
        }

        return $viewData;
    }
}