<?php

declare(strict_types=1);

namespace Modules\UI\Models;

use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Modules\Xot\Contracts\ProfileContract;
=======
<<<<<<< .merge_file_R6qAC8
=======
<<<<<<< .merge_file_iW8GiV
>>>>>>> .merge_file_ZmRhSs
<<<<<<< HEAD
use Modules\UI\Database\Factories\CollectionFactory;
=======
use Illuminate\Support\Carbon;
>>>>>>> .merge_file_w2hhmu
use Modules\Xot\Contracts\ProfileContract;
=======
<<<<<<< .merge_file_R6qAC8
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Modules\UI\Database\Factories\CollectionFactory;
use Modules\Xot\Contracts\ProfileContract;
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZmRhSs
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
use Modules\Xot\Models\BaseModel;

/**
 * Collection model for UI module.
<<<<<<< HEAD
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
 *
 * @method static \Modules\UI\Database\Factories\CollectionFactory factory($count = null, $state = [])
 * @method static Builder<static>|Collection newModelQuery()
 * @method static Builder<static>|Collection newQuery()
 * @method static Builder<static>|Collection query()
 *
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $deleter
 * @property-read ProfileContract|null $updater
=======
<<<<<<< .merge_file_R6qAC8
<<<<<<< HEAD
=======
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
>>>>>>> .merge_file_ZmRhSs
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
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
 *
 * FormBuilder module not available - extending from XotBaseModel instead.
 *
<<<<<<< .merge_file_R6qAC8
=======
 *
 * FormBuilder module not available - extending from XotBaseModel instead.
 *
=======
>>>>>>> .merge_file_ZmRhSs
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
<<<<<<< .merge_file_R6qAC8
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_ZmRhSs
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
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
