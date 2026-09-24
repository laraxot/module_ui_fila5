<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Block;

<<<<<<< .merge_file_xFcrep
<<<<<<< HEAD
=======
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
use UnexpectedValueException;
=======
<<<<<<< HEAD
=======
use UnexpectedValueException;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev

>>>>>>> laraxot/dev
=======
use Spatie\QueueableAction\QueueableAction;

>>>>>>> .merge_file_Rkucwl
/**
 * Risolve dati block localizzati; delega al modulo Cms se presente.
 */
final class ResolveLocalizedBlockDataAction
{
<<<<<<< .merge_file_xFcrep
<<<<<<< HEAD
    /**
     * @param array<string, mixed> $viewParams
     *
=======
=======
>>>>>>> .merge_file_Rkucwl
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
<<<<<<< .merge_file_xFcrep
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
     * @param array<array-key, mixed> $data
     *
>>>>>>> .merge_file_Rkucwl
     * @return array<string, mixed>
     */
    private function normalizeViewData(array $data): array
    {
<<<<<<< .merge_file_xFcrep
        if (! is_array($data)) {
            return [];
        }

<<<<<<< HEAD
=======
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
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Rkucwl
        $viewData = [];

        foreach ($data as $key => $value) {
            if (! is_string($key)) {
<<<<<<< HEAD
                throw new \UnexpectedValueException('Block view data must have string keys.');
=======
<<<<<<< HEAD
                throw new UnexpectedValueException('Block view data must have string keys.');
=======
<<<<<<< HEAD
                throw new \UnexpectedValueException('Block view data must have string keys.');
=======
                throw new UnexpectedValueException('Block view data must have string keys.');
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
            }

            $viewData[$key] = $value;
        }

        return $viewData;
    }
}
