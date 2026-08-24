<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Stubs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

final class UiCoverageAddressChildRecord extends Model
{
    protected $guarded = [];

    public int $updated = 0;

    public function update(array $attributes = [], array $options = []): bool
    {
        ++$this->updated;

        return true;
    }
}

/**
 * @template TParent of UiCoverageAddressParentRecord
 * @extends HasOne<UiCoverageAddressChildRecord, TParent>
 */
final class UiCoverageAddressHasOneRelation extends HasOne
{
    /** @param TParent $parent */
    public function __construct(UiCoverageAddressParentRecord $parent)
    {
        parent::__construct(UiCoverageAddressChildRecord::query(), $parent, 'id', 'id');
    }

    /**
     * @param  array<int, string>|string  $columns
     */
    public function first($columns = ['*']): ?Model
    {
        $parent = $this->getParent();
        if ($parent instanceof UiCoverageAddressParentRecord) {
            return $parent->addressModel;
        }

        return null;
    }
}

final class UiCoverageAddressParentRecord extends Model
{
    protected $guarded = [];

    public UiCoverageAddressChildRecord $addressModel;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->addressModel = new UiCoverageAddressChildRecord(['id' => 1]);
    }

    /**
     * @param  string|array<int, string>|null  $attribute
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
