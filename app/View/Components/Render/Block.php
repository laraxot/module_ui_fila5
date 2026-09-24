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
use UnexpectedValueException;
=======
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
>>>>>>> laraxot/dev
use Webmozart\Assert\Assert;

/**
 * .
 */
class Block extends Component
{
    public ?string $view = null;

    /**
<<<<<<< HEAD
     * @param  array<string, mixed>  $block
=======
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
>>>>>>> laraxot/dev
     */
    public function __construct(
        public array $block,
        public ?Model $model = null,
        public string $tpl = '',
    ) {
        $view = Arr::get($this->block, 'data.view', null);
<<<<<<< HEAD
        if ($view === null) {
=======
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
>>>>>>> laraxot/dev
                'title' => 'deprecated',
                'message' => $message,
            ];

<<<<<<< HEAD
            return view('ui::alert', $viewParams);
=======
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
>>>>>>> laraxot/dev
        }
        $rawData = $this->block['data'] ?? [];
        $viewParams = \is_array($rawData) ? $this->normalizeViewData($rawData) : [];
        $viewParams = app(ResolveLocalizedBlockDataAction::class)->execute($viewParams);
        $viewParams = $this->normalizeViewData($viewParams);
        Assert::string($view, __FILE__.':'.__LINE__.' - '.class_basename(self::class));

<<<<<<< HEAD
        /** @var view-string $view */
        return view($view, $viewParams);
    }

    /**
     * @param  array<array-key, mixed>  $data
=======
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
>>>>>>> laraxot/dev
     * @return array<string, mixed>
     */
    private function normalizeViewData(array $data): array
    {
        $viewData = [];

        foreach ($data as $key => $value) {
            if (! is_string($key)) {
<<<<<<< HEAD
                throw new UnexpectedValueException('Block view data must have string keys.');
=======
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
>>>>>>> laraxot/dev
            }

            $viewData[$key] = $value;
        }

        return $viewData;
    }
}
