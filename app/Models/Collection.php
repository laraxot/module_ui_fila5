<?php

declare(strict_types=1);

namespace Modules\UI\Models;

use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
<<<<<<< .merge_file_iW8GiV
<<<<<<< HEAD
use Modules\UI\Database\Factories\CollectionFactory;
=======
use Illuminate\Support\Carbon;
>>>>>>> .merge_file_w2hhmu
use Modules\Xot\Contracts\ProfileContract;
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Modules\UI\Database\Factories\CollectionFactory;
use Modules\Xot\Contracts\ProfileContract;
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use Modules\UI\Database\Factories\CollectionFactory;
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 0dadab4 (Lint)
use Modules\Xot\Models\BaseModel;

/**
 * Collection model for UI module.
<<<<<<< HEAD
<<<<<<< .merge_file_iW8GiV
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
 *
>>>>>>> .merge_file_w2hhmu
 * FormBuilder module not available - extending from XotBaseModel instead.
 *
 * @property int         $id
 * @property string      $name
 * @property string|null $description
 * @property string      $type
 * @property int|null    $theme_id
 * @property bool        $is_active
 * @property int|null    $order
 *
 * @method static \Modules\UI\Database\Factories\CollectionFactory factory($count = null, $state = [])
 * @method static Builder<static>|Collection                       newModelQuery()
 * @method static Builder<static>|Collection                       newQuery()
 * @method static Builder<static>|Collection                       query()
 *
 * @property string|null          $created_by
 * @property string|null          $updated_by
 * @property Carbon|null          $deleted_at
 * @property string|null          $deleted_by
 * @property Carbon|null          $created_at
 * @property Carbon|null          $updated_at
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $deleter
 * @property ProfileContract|null $updater
 *
 * @method static Builder<static>|Collection whereCreatedAt($value)
 * @method static Builder<static>|Collection whereCreatedBy($value)
 * @method static Builder<static>|Collection whereDeletedAt($value)
 * @method static Builder<static>|Collection whereDeletedBy($value)
 * @method static Builder<static>|Collection whereDescription($value)
 * @method static Builder<static>|Collection whereId($value)
 * @method static Builder<static>|Collection whereIsActive($value)
 * @method static Builder<static>|Collection whereName($value)
 * @method static Builder<static>|Collection whereOrder($value)
 * @method static Builder<static>|Collection whereThemeId($value)
 * @method static Builder<static>|Collection whereType($value)
 * @method static Builder<static>|Collection whereUpdatedAt($value)
 * @method static Builder<static>|Collection whereUpdatedBy($value)
 *
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
 *
 * FormBuilder module not available - extending from XotBaseModel instead.
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string $type
 * @property int|null $theme_id
 * @property bool $is_active
 * @property int|null $order
 * @method static \Modules\UI\Database\Factories\CollectionFactory factory($count = null, $state = [])
 * @method static Builder<static>|Collection newModelQuery()
 * @method static Builder<static>|Collection newQuery()
 * @method static Builder<static>|Collection query()
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $deleter
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 * @method static Builder<static>|Collection whereCreatedAt($value)
 * @method static Builder<static>|Collection whereCreatedBy($value)
 * @method static Builder<static>|Collection whereDeletedAt($value)
 * @method static Builder<static>|Collection whereDeletedBy($value)
 * @method static Builder<static>|Collection whereDescription($value)
 * @method static Builder<static>|Collection whereId($value)
 * @method static Builder<static>|Collection whereIsActive($value)
 * @method static Builder<static>|Collection whereName($value)
 * @method static Builder<static>|Collection whereOrder($value)
 * @method static Builder<static>|Collection whereThemeId($value)
 * @method static Builder<static>|Collection whereType($value)
 * @method static Builder<static>|Collection whereUpdatedAt($value)
 * @method static Builder<static>|Collection whereUpdatedBy($value)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
 * FormBuilder module not available - extending from XotBaseModel instead.
 */
/**
 * @property string|null                     $name
 * @property string|null                     $description
 * @property string|null                     $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property ProfileContract|null            $creator
 * @property ProfileContract|null            $updater
 *
 * @method static CollectionFactory          factory($count = null, $state = [])
 * @method static Builder<static>|Collection newModelQuery()
 * @method static Builder<static>|Collection newQuery()
 * @method static Builder<static>|Collection query()
 *
 * @property ProfileContract|null $deleter
 *
>>>>>>> 0dadab4 (Lint)
 * @mixin \Eloquent
 */
class Collection extends BaseModel
{
    protected $table = 'collections';

    /** @var list<string> */
    protected $fillable = [
        'name',
        'description',
        'type',
        'theme_id',
        'is_active',
        'order',
    ];
}
