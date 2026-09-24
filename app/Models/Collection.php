<?php

declare(strict_types=1);

namespace Modules\UI\Models;

use Illuminate\Database\Eloquent\Builder;
<<<<<<< .merge_file_p2FOzM
<<<<<<< HEAD
<<<<<<< .merge_file_iW8GiV
<<<<<<< HEAD
=======
>>>>>>> .merge_file_CUJy0h
use Modules\UI\Database\Factories\CollectionFactory;
use Modules\Xot\Contracts\ProfileContract;
<<<<<<< .merge_file_p2FOzM
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
use Modules\UI\Database\Factories\CollectionFactory;
use Modules\Xot\Contracts\ProfileContract;
=======
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_CUJy0h
use Modules\Xot\Models\BaseModel;

/**
 * Collection model for UI module.
<<<<<<< .merge_file_p2FOzM
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
=======
<<<<<<< HEAD
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
=======
>>>>>>> 804451c (Lint)
 *
=======
>>>>>>> .merge_file_CUJy0h
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
<<<<<<< .merge_file_p2FOzM
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
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
 *
 * @property ProfileContract|null $deleter
 *
>>>>>>> .merge_file_CUJy0h
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
