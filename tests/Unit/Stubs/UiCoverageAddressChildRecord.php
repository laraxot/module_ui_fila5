<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Stubs;

use Illuminate\Database\Eloquent\Model;

/**
 * Record figlio per le prove di `AddressField`.
 *
 * Conta gli `update()` invece di scrivere: il test verifica che il componente aggiorni
 * l'indirizzo, non che il database lo salvi.
 */
final class UiCoverageAddressChildRecord extends Model
{
    protected $guarded = [];

    public int $updated = 0;

    /**
<<<<<<< HEAD
<<<<<<< .merge_file_zowZ0S
=======
<<<<<<< .merge_file_ASMkUq
>>>>>>> .merge_file_wwbgq1
=======
>>>>>>> 0dadab4 (Lint)
<<<<<<< HEAD
     * @param  array<string, mixed>  $attributes
     * @param  array<string, mixed>  $options
     */
    public function update(array $attributes = [], array $options = []): bool
    {
        $this->updated++;
=======
<<<<<<< HEAD
<<<<<<< .merge_file_zowZ0S
=======
=======
>>>>>>> .merge_file_JL1TBJ
>>>>>>> .merge_file_wwbgq1
=======
>>>>>>> 0dadab4 (Lint)
     * @param array<string, mixed> $attributes
     * @param array<string, mixed> $options
     */
    public function update(array $attributes = [], array $options = []): bool
    {
        ++$this->updated;
<<<<<<< HEAD
<<<<<<< .merge_file_zowZ0S
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_ASMkUq
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_JL1TBJ
>>>>>>> .merge_file_wwbgq1
=======
>>>>>>> laraxot/dev
>>>>>>> 0dadab4 (Lint)

        return true;
    }
}
