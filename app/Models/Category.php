<?php

declare(strict_types=1);

namespace Modules\UI\Models;

use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Models\BaseModel;

/**
<<<<<<< HEAD
 * @property int $id
 * @property string|null $name
 * @property string $title
 * @property string $slug
 * @property int|null $parent_id
 * @property string|null $description
 * @property string|null $icon
 * @property bool $is_active
 * @property int $sort_order
 * @method static \Modules\UI\Database\Factories\CategoryFactory factory($count = null, $state = [])
=======
 * Category model for UI module.
 * FormBuilder module not available - extending from XotBaseModel instead.
<<<<<<< HEAD
 */
/**
=======
 *
>>>>>>> 92912795 (.)
 * @property string               $id
 * @property string|null          $name
 * @property string               $title
 * @property string               $slug
 * @property int|null             $parent_id
 * @property Carbon|null          $created_at
 * @property Carbon|null          $updated_at
 * @property string|null          $description
 * @property string|null          $icon
 * @property string|null          $updated_by
 * @property string|null          $created_by
 * @property Carbon|null          $deleted_at
 * @property string|null          $deleted_by
 * @property int                  $is_active
 * @property int                  $sort_order
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
<<<<<<< HEAD
=======
 * @property ProfileContract|null $deleter
>>>>>>> 92912795 (.)
 *
 * @method static CategoryFactory          factory($count = null, $state = [])
>>>>>>> laraxot/dev
 * @method static Builder<static>|Category newModelQuery()
 * @method static Builder<static>|Category newQuery()
 * @method static Builder<static>|Category query()
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $deleter
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 * @method static Builder<static>|Category whereCreatedAt($value)
 * @method static Builder<static>|Category whereCreatedBy($value)
 * @method static Builder<static>|Category whereId($value)
 * @method static Builder<static>|Category whereParentId($value)
 * @method static Builder<static>|Category whereSlug($value)
 * @method static Builder<static>|Category whereUpdatedAt($value)
 * @method static Builder<static>|Category whereUpdatedBy($value)
<<<<<<< HEAD
=======
 *
<<<<<<< HEAD
 * @property ProfileContract|null $deleter
 *
=======
>>>>>>> 92912795 (.)
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
}
