<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Block;

<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
=======
use UnexpectedValueException;
>>>>>>> dfac49d (.)
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> dfbb8305 (.)

/**
 * Risolve dati block localizzati; delega al modulo Cms se presente.
 */
final class ResolveLocalizedBlockDataAction
{
<<<<<<< HEAD
<<<<<<< HEAD
    use QueueableAction;

=======
>>>>>>> dfac49d (.)
=======
    use QueueableAction;

>>>>>>> dfbb8305 (.)
    /**
     * @param array<string, mixed> $viewParams
     *
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
