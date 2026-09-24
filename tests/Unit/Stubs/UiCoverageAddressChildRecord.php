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
<<<<<<< .merge_file_wljccU
=======
<<<<<<< .merge_file_XdA5TR
=======
<<<<<<< .merge_file_zowZ0S
=======
<<<<<<< .merge_file_ASMkUq
>>>>>>> .merge_file_wwbgq1
<<<<<<< HEAD
>>>>>>> .merge_file_c1pCEq
     * @param  array<string, mixed>  $attributes
     * @param  array<string, mixed>  $options
     */
    public function update(array $attributes = [], array $options = []): bool
    {
        $this->updated++;
<<<<<<< .merge_file_XdA5TR
=======
=======
<<<<<<< .merge_file_zowZ0S
=======
=======
>>>>>>> .merge_file_JL1TBJ
>>>>>>> .merge_file_wwbgq1
>>>>>>> .merge_file_xLOfeN
     * @param array<string, mixed> $attributes
     * @param array<string, mixed> $options
     */
    public function update(array $attributes = [], array $options = []): bool
    {
        ++$this->updated;
<<<<<<< .merge_file_wljccU
=======
<<<<<<< .merge_file_zowZ0S
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_ASMkUq
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_JL1TBJ
>>>>>>> .merge_file_wwbgq1
>>>>>>> .merge_file_c1pCEq
>>>>>>> .merge_file_xLOfeN

        return true;
    }
}
