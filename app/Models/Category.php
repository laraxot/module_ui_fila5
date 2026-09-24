<?php

declare(strict_types=1);

namespace Modules\UI\Models;

use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
use Illuminate\Support\Carbon;
=======
<<<<<<< HEAD
<<<<<<< .merge_file_rnwADi
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_XI16y5
use Illuminate\Support\Carbon;
use Modules\UI\Database\Factories\CategoryFactory;
>>>>>>> laraxot/dev
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Models\BaseModel;

/**
<<<<<<< HEAD
=======
 * Category model for UI module.
 *
 * @property int                  $id
 * @property string|null          $name
 * @property string               $title
 * @property string               $slug
 * @property int|null             $parent_id
 * @property string|null          $description
 * @property string|null          $icon
 * @property bool                 $is_active
 * @property int                  $sort_order
 * @property string|null          $created_by
 * @property string|null          $updated_by
 * @property string|null          $deleted_by
 * @property Carbon|null          $created_at
 * @property Carbon|null          $updated_at
 * @property Carbon|null          $deleted_at
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $deleter
 * @property ProfileContract|null $updater
 *
 * @method static CategoryFactory          factory($count = null, $state = [])
 * @method static Builder<static>|Category newModelQuery()
 * @method static Builder<static>|Category newQuery()
 * @method static Builder<static>|Category query()
 * @method static Builder<static>|Category whereCreatedAt($value)
 * @method static Builder<static>|Category whereCreatedBy($value)
 * @method static Builder<static>|Category whereDeletedAt($value)
 * @method static Builder<static>|Category whereDeletedBy($value)
 * @method static Builder<static>|Category whereDescription($value)
 * @method static Builder<static>|Category whereIcon($value)
 * @method static Builder<static>|Category whereId($value)
 * @method static Builder<static>|Category whereIsActive($value)
 * @method static Builder<static>|Category whereName($value)
 * @method static Builder<static>|Category whereParentId($value)
 * @method static Builder<static>|Category whereSlug($value)
 * @method static Builder<static>|Category whereSortOrder($value)
 * @method static Builder<static>|Category whereTitle($value)
 * @method static Builder<static>|Category whereUpdatedAt($value)
 * @method static Builder<static>|Category whereUpdatedBy($value)
 *
<<<<<<< .merge_file_7PHt5M
 * @property ProfileContract|null $deleter
 *
<<<<<<< .merge_file_rnwADi
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_XI16y5
use Modules\Xot\Models\BaseModel;

/**
>>>>>>> laraxot/dev
 * @property int $id
 * @property string|null $name
 * @property string $title
 * @property string $slug
 * @property int|null $parent_id
 * @property string|null $description
 * @property string|null $icon
 * @property bool $is_active
 * @property int $sort_order
<<<<<<< HEAD
 *
=======
>>>>>>> laraxot/dev
 * @method static \Modules\UI\Database\Factories\CategoryFactory factory($count = null, $state = [])
 * @method static Builder<static>|Category newModelQuery()
 * @method static Builder<static>|Category newQuery()
 * @method static Builder<static>|Category query()
<<<<<<< HEAD
 *
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $deleter
 * @property-read ProfileContract|null $updater
 *
=======
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $deleter
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
>>>>>>> laraxot/dev
 * @method static Builder<static>|Category whereCreatedAt($value)
 * @method static Builder<static>|Category whereCreatedBy($value)
 * @method static Builder<static>|Category whereId($value)
 * @method static Builder<static>|Category whereParentId($value)
 * @method static Builder<static>|Category whereSlug($value)
 * @method static Builder<static>|Category whereUpdatedAt($value)
 * @method static Builder<static>|Category whereUpdatedBy($value)
<<<<<<< HEAD
 *
=======
<<<<<<< .merge_file_rnwADi
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_3BPufK
>>>>>>> .merge_file_XI16y5
>>>>>>> laraxot/dev
 * @mixin \Eloquent
 */
class Category extends BaseModel
{
    protected $table = 'categories';

    /** @var list<string> */
    protected $fillable = [
        'name',
        'description',
        'icon',
        'parent_id',
        'is_active',
        'sort_order',
    ];
<<<<<<< HEAD
=======

    /**
     * @return array<string, string>
     */
    #[\Override]
    protected function casts(): array
    {
        return array_merge(parent::casts(), [
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);
    }
>>>>>>> laraxot/dev
}
