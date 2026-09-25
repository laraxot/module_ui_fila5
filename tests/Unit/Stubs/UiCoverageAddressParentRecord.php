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
<<<<<<< HEAD
<<<<<<< .merge_file_qwqWud
     * @param  array<string, mixed>  $attributes
=======
     * <<<<<<< HEAD.
     *
     * @param array<string, mixed> $attributes
     *                                         =======
     *                                         <<<<<<< .merge_file_mMl13T
     * @param array<string, mixed> $attributes
     *                                         =======
     *                                         <<<<<<< .merge_file_NNdsVp
     * @param array<string, mixed> $attributes
     *                                         =======
     *                                         <<<<<<< HEAD
     * @param array<string, mixed> $attributes
     *                                         =======
     * @param array<string, mixed> $attributes
     *                                         >>>>>>> laraxot/dev
     *                                         >>>>>>> .merge_file_0b23s3
     *                                         >>>>>>> .merge_file_onnvsy
     *                                         >>>>>>> laraxot/dev
>>>>>>> .merge_file_2aLZzE
=======
     * @param  array<string, mixed>  $attributes
>>>>>>> laraxot/dev
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->addressModel = new UiCoverageAddressChildRecord(['id' => 1]);
    }

    /**
<<<<<<< HEAD
<<<<<<< .merge_file_qwqWud
     * @param  string|array<int, string>|null  $attribute
=======
     * <<<<<<< HEAD.
     *
     * @param string|array<int, string>|null $attribute
     *                                                  =======
     *                                                  <<<<<<< .merge_file_mMl13T
     * @param string|array<int, string>|null $attribute
     *                                                  =======
     *                                                  <<<<<<< .merge_file_NNdsVp
     * @param string|array<int, string>|null $attribute
     *                                                  =======
     *                                                  <<<<<<< HEAD
     * @param string|array<int, string>|null $attribute
     *                                                  =======
     * @param string|array<int, string>|null $attribute
     *                                                  >>>>>>> laraxot/dev
     *                                                  >>>>>>> .merge_file_0b23s3
     *                                                  >>>>>>> .merge_file_onnvsy
     *                                                  >>>>>>> laraxot/dev
>>>>>>> .merge_file_2aLZzE
=======
     * @param  string|array<int, string>|null  $attribute
>>>>>>> laraxot/dev
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
