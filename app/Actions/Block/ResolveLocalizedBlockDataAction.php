<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Block;

<<<<<<< .merge_file_Ew9Oby
<<<<<<< HEAD
<<<<<<< .merge_file_xFcrep
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_X0ywNT
use Spatie\QueueableAction\QueueableAction;

<<<<<<< .merge_file_Ew9Oby
>>>>>>> laraxot/dev
=======
use Spatie\QueueableAction\QueueableAction;

>>>>>>> .merge_file_Rkucwl
=======
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
=======
use UnexpectedValueException;
>>>>>>> laraxot/dev

>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_X0ywNT
/**
 * Risolve dati block localizzati; delega al modulo Cms se presente.
 */
final class ResolveLocalizedBlockDataAction
{
<<<<<<< .merge_file_Ew9Oby
<<<<<<< HEAD
<<<<<<< .merge_file_xFcrep
<<<<<<< HEAD
    /**
     * @param array<string, mixed> $viewParams
     *
=======
=======
>>>>>>> .merge_file_Rkucwl
=======
>>>>>>> 804451c (Lint)
    use QueueableAction;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $viewParams
=======
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)
     * @param array<string, mixed> $viewParams
     *
=======
     * @param  array<string, mixed>  $viewParams
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
    use QueueableAction;

    /**
     * @param array<string, mixed> $viewParams
     *
>>>>>>> .merge_file_X0ywNT
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
<<<<<<< .merge_file_Ew9Oby
<<<<<<< HEAD
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
=======
>>>>>>> .merge_file_X0ywNT
     * @return array<string, mixed>
     */
    private function normalizeViewData(mixed $data): array
    {
<<<<<<< .merge_file_Ew9Oby
<<<<<<< .merge_file_xFcrep
=======
<<<<<<< HEAD
     * @return array<string, mixed>
     */
    private function normalizeViewData(mixed $data): array
    {
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_X0ywNT
        if (! is_array($data)) {
            return [];
        }

<<<<<<< .merge_file_Ew9Oby
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
     * @param  array<array-key, mixed>  $data
     * @return array<string, mixed>
     */
    private function normalizeViewData(array $data): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_Rkucwl
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_X0ywNT
        $viewData = [];

        foreach ($data as $key => $value) {
            if (! is_string($key)) {
<<<<<<< .merge_file_Ew9Oby
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
=======
                throw new \UnexpectedValueException('Block view data must have string keys.');
>>>>>>> .merge_file_X0ywNT
            }

            $viewData[$key] = $value;
        }

        return $viewData;
    }
}
