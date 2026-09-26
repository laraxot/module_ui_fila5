<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Block;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_xFcrep
<<<<<<< HEAD
=======
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< .merge_file_wioCsi
=======
use UnexpectedValueException;
>>>>>>> laraxot/dev
=======
use UnexpectedValueException;
=======
<<<<<<< HEAD
=======
use UnexpectedValueException;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_fjVsew

>>>>>>> laraxot/dev
=======
use Spatie\QueueableAction\QueueableAction;

>>>>>>> .merge_file_Rkucwl
=======
use Spatie\QueueableAction\QueueableAction;

>>>>>>> laraxot/dev
=======
use Spatie\QueueableAction\QueueableAction;

>>>>>>> laraxot/dev
/**
 * Risolve dati block localizzati; delega al modulo Cms se presente.
 */
final class ResolveLocalizedBlockDataAction
{
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< .merge_file_wioCsi
=======
     * @param  array<string, mixed>  $viewParams
=======
<<<<<<< HEAD
>>>>>>> .merge_file_fjVsew
     * @param array<string, mixed> $viewParams
     *
=======
     * @param  array<string, mixed>  $viewParams
>>>>>>> laraxot/dev
<<<<<<< .merge_file_wioCsi
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_fjVsew
=======
=======
>>>>>>> laraxot/dev
    use QueueableAction;

    /**
     * @param array<string, mixed> $viewParams
     *
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
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
<<<<<<< HEAD
<<<<<<< .merge_file_wioCsi
<<<<<<< HEAD
=======
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
>>>>>>> .merge_file_fjVsew
     * @return array<string, mixed>
     */
    private function normalizeViewData(array $data): array
    {
<<<<<<< .merge_file_xFcrep
=======
=======
>>>>>>> laraxot/dev
     * @return array<string, mixed>
     */
    private function normalizeViewData(mixed $data): array
    {
>>>>>>> laraxot/dev
        if (! is_array($data)) {
            return [];
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_wioCsi
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_fjVsew
     * @param  array<array-key, mixed>  $data
     * @return array<string, mixed>
     */
    private function normalizeViewData(array $data): array
    {
<<<<<<< .merge_file_wioCsi
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Rkucwl
>>>>>>> .merge_file_fjVsew
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
        $viewData = [];

        foreach ($data as $key => $value) {
            if (! is_string($key)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_wioCsi
=======
                throw new \UnexpectedValueException('Block view data must have string keys.');
=======
<<<<<<< HEAD
                throw new UnexpectedValueException('Block view data must have string keys.');
=======
<<<<<<< HEAD
>>>>>>> .merge_file_fjVsew
                throw new \UnexpectedValueException('Block view data must have string keys.');
=======
                throw new UnexpectedValueException('Block view data must have string keys.');
>>>>>>> laraxot/dev
<<<<<<< .merge_file_wioCsi
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_fjVsew
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
