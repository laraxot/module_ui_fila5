<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Stubs;

use Illuminate\Database\Eloquent\Model;

/**
 * Record padre per le prove di `AddressField`.
 *
 * Costruisce il figlio in memoria e restituisce sempre `true` da `touch()`: il test
 * riguarda il comportamento del componente, non la persistenza.
 */
final class UiCoverageAddressParentRecord extends Model
{
    protected $guarded = [];

    public UiCoverageAddressChildRecord $addressModel;

    /**
<<<<<<< .merge_file_o0hRo6
     *
     * @param array<string, mixed> $attributes
     *                                         =======
=======
     * <<<<<<< .merge_file_qwqWud.
     *
     * @param array<string, mixed> $attributes
     *                                         =======
     *                                         <<<<<<< HEAD
     * @param array<string, mixed> $attributes
     *                                         =======
     *                                         <<<<<<< .merge_file_mMl13T
>>>>>>> .merge_file_MBO7ug
     * @param array<string, mixed> $attributes
     *                                         >>>>>>> laraxot/dev
     *                                         >>>>>>> .merge_file_2aLZzE
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->addressModel = new UiCoverageAddressChildRecord(['id' => 1]);
    }

    /**
<<<<<<< .merge_file_o0hRo6
     *
     * @param string|array<int, string>|null $attribute
     *                                                  =======
=======
     * <<<<<<< .merge_file_qwqWud.
     *
     * @param string|array<int, string>|null $attribute
     *                                                  =======
     *                                                  <<<<<<< HEAD
     * @param string|array<int, string>|null $attribute
     *                                                  =======
     *                                                  <<<<<<< .merge_file_mMl13T
>>>>>>> .merge_file_MBO7ug
     * @param string|array<int, string>|null $attribute
     *                                                  >>>>>>> laraxot/dev
     *                                                  >>>>>>> .merge_file_2aLZzE
     */
    public function touch($attribute = null): bool
    {
        return true;
    }

    /**
     * @return UiCoverageAddressHasOneRelation<$this>
     */
    public function address(): UiCoverageAddressHasOneRelation
    {
        return new UiCoverageAddressHasOneRelation($this);
    }
}
