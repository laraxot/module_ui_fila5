<?php

declare(strict_types=1);

namespace Modules\UI\Models;

use Illuminate\Database\Eloquent\Builder;
<<<<<<< .merge_file_Nqfmix
<<<<<<< HEAD
=======
use Illuminate\Support\Carbon;
>>>>>>> .merge_file_dtHKms
use Modules\UI\Database\Factories\FieldOptionFactory;
use Modules\Xot\Contracts\ProfileContract;
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Modules\UI\Database\Factories\FieldOptionFactory;
use Modules\Xot\Contracts\ProfileContract;
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
use Modules\Xot\Models\BaseModel;

/**
 * FieldOption model for UI module.
<<<<<<< .merge_file_Nqfmix
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
 *
>>>>>>> .merge_file_dtHKms
 * FormBuilder module not available - extending from XotBaseModel instead.
 *
 * @method static FieldOptionFactory          factory($count = null, $state = [])
 * @method static Builder<static>|FieldOption newModelQuery()
 * @method static Builder<static>|FieldOption newQuery()
 * @method static Builder<static>|FieldOption query()
 *
 * @property int                  $id
 * @property string|null          $field_id
 * @property string|null          $label
 * @property string|null          $value
 * @property int                  $order
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
 * @method static Builder<static>|FieldOption whereCreatedAt($value)
 * @method static Builder<static>|FieldOption whereCreatedBy($value)
 * @method static Builder<static>|FieldOption whereDeletedAt($value)
 * @method static Builder<static>|FieldOption whereDeletedBy($value)
 * @method static Builder<static>|FieldOption whereFieldId($value)
 * @method static Builder<static>|FieldOption whereId($value)
 * @method static Builder<static>|FieldOption whereLabel($value)
 * @method static Builder<static>|FieldOption whereOrder($value)
 * @method static Builder<static>|FieldOption whereUpdatedAt($value)
 * @method static Builder<static>|FieldOption whereUpdatedBy($value)
 * @method static Builder<static>|FieldOption whereValue($value)
 *
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
 *
 * FormBuilder module not available - extending from XotBaseModel instead.
 *
 * @method static \Modules\UI\Database\Factories\FieldOptionFactory factory($count = null, $state = [])
 * @method static Builder<static>|FieldOption newModelQuery()
 * @method static Builder<static>|FieldOption newQuery()
 * @method static Builder<static>|FieldOption query()
 * @property int $id
 * @property string|null $field_id
 * @property string|null $label
 * @property string|null $value
 * @property int $order
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $deleter
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 * @method static Builder<static>|FieldOption whereCreatedAt($value)
 * @method static Builder<static>|FieldOption whereCreatedBy($value)
 * @method static Builder<static>|FieldOption whereDeletedAt($value)
 * @method static Builder<static>|FieldOption whereDeletedBy($value)
 * @method static Builder<static>|FieldOption whereFieldId($value)
 * @method static Builder<static>|FieldOption whereId($value)
 * @method static Builder<static>|FieldOption whereLabel($value)
 * @method static Builder<static>|FieldOption whereOrder($value)
 * @method static Builder<static>|FieldOption whereUpdatedAt($value)
 * @method static Builder<static>|FieldOption whereUpdatedBy($value)
 * @method static Builder<static>|FieldOption whereValue($value)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
 * @mixin \Eloquent
 */
class FieldOption extends BaseModel
{
    protected $table = 'field_options';

    /** @var list<string> */
    protected $fillable = [
        'field_id',
        'label',
        'value',
        'order',
    ];
}
