<?php

declare(strict_types=1);

namespace Modules\UI\View\Components\Render;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Exception;
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\View\Component;
use Illuminate\View\View;
<<<<<<< HEAD
<<<<<<< .merge_file_2WmvjN
use Modules\Cms\Actions\ResolveLocalizedBlockDataAction;
=======
<<<<<<< HEAD
use Modules\UI\Actions\Block\ResolveLocalizedBlockDataAction;
=======
use Modules\Cms\Actions\ResolveLocalizedBlockDataAction;
use UnexpectedValueException;
>>>>>>> dfac49d (.)
>>>>>>> .merge_file_YV2FHL
=======
use Modules\UI\Actions\Block\ResolveLocalizedBlockDataAction;
>>>>>>> dfbb8305 (.)
use Webmozart\Assert\Assert;

/**
 * .
 */
class Block extends Component
{
    public ?string $view = null;

    /**
     * @param array<string, mixed> $block
     */
    public function __construct(
        public array $block,
        public ?Model $model = null,
        public string $tpl = '',
    ) {
        $view = Arr::get($this->block, 'data.view', null);
<<<<<<< HEAD
<<<<<<< HEAD
        if (null === $view) {
=======
        if ($view === null) {
>>>>>>> dfac49d (.)
=======
        if (null === $view) {
>>>>>>> dfbb8305 (.)
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
            $viewParams = [
                'title' => 'deprecated',
                'message' => $message,
            ];

            return view('ui::alert', $viewParams);
        }
        $viewParams = $this->normalizeViewData($this->block['data'] ?? []);
        $viewParams = app(ResolveLocalizedBlockDataAction::class)->execute($viewParams);
        $viewParams = $this->normalizeViewData($viewParams);
        Assert::string($view, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        if (! view()->exists($view)) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new \Exception('view not found ['.$view.']');
=======
            throw new Exception('view not found ['.$view.']');
>>>>>>> dfac49d (.)
=======
            throw new \Exception('view not found ['.$view.']');
>>>>>>> dfbb8305 (.)
        }

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
<<<<<<< HEAD
<<<<<<< HEAD
                throw new \UnexpectedValueException('Block view data must have string keys.');
=======
                throw new UnexpectedValueException('Block view data must have string keys.');
>>>>>>> dfac49d (.)
=======
                throw new \UnexpectedValueException('Block view data must have string keys.');
>>>>>>> dfbb8305 (.)
            }

            $viewData[$key] = $value;
        }

        return $viewData;
    }
}
