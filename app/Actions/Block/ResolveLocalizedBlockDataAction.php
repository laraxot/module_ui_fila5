<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Block;

use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
use UnexpectedValueException;
=======
<<<<<<< HEAD
=======
use UnexpectedValueException;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev

/**
 * Risolve dati block localizzati; delega al modulo Cms se presente.
 */
final class ResolveLocalizedBlockDataAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
     * @param  array<string, mixed>  $viewParams
=======
<<<<<<< HEAD
     * @param array<string, mixed> $viewParams
     *
=======
     * @param  array<string, mixed>  $viewParams
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
     * @return array<string, mixed>
     */
    public function execute(array $viewParams): array
    {
        $cmsAction = 'Modules\Cms\Actions\ResolveLocalizedBlockDataAction';

        if (! class_exists($cmsAction)) {
            return $viewParams;
        }

        $resolver = app($cmsAction);
        if (! is_object($resolver) || ! method_exists($resolver, 'execute')) {
            return $viewParams;
        }

        $resolved = $resolver->execute($viewParams);

        return is_array($resolved) ? $this->normalizeViewData($resolved) : $viewParams;
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @return array<string, mixed>
     */
    private function normalizeViewData(mixed $data): array
    {
        if (! is_array($data)) {
            return [];
        }

=======
>>>>>>> laraxot/dev
     * @param  array<array-key, mixed>  $data
     * @return array<string, mixed>
     */
    private function normalizeViewData(array $data): array
    {
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
        $viewData = [];

        foreach ($data as $key => $value) {
            if (! is_string($key)) {
<<<<<<< HEAD
                throw new UnexpectedValueException('Block view data must have string keys.');
=======
<<<<<<< HEAD
                throw new \UnexpectedValueException('Block view data must have string keys.');
=======
                throw new UnexpectedValueException('Block view data must have string keys.');
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
            }

            $viewData[$key] = $value;
        }

        return $viewData;
    }
}
