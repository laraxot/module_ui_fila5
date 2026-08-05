<?php

declare(strict_types=1);

namespace Modules\UI\Models;

use Illuminate\Database\Eloquent\Builder;
use Modules\UI\Database\Factories\FieldOptionFactory;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Models\BaseModel;

/**
 * FieldOption model for UI module.
 * FormBuilder module not available - extending from XotBaseModel instead.
<<<<<<< HEAD
=======
 * <<<<<<< HEAD
 * =======
 * <<<<<<< HEAD.
 *
 * @property string|null                     $id
 * @property string|null                     $field_id
 * @property string|null                     $label
 * @property string|null                     $value
 * @property int|null                        $order
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property ProfileContract|null            $creator
 * @property ProfileContract|null            $updater
 * @property ProfileContract|null            $deleter
 *                                                       =======
 *                                                       >>>>>>> laraxot/dev
>>>>>>> laraxot/dev
 */
/**
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
<<<<<<< HEAD
=======
 *                                         <<<<<<< HEAD
 *                                         =======
 *                                         >>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
 *                                         >>>>>>> laraxot/dev
>>>>>>> laraxot/dev
 *
 * @method static FieldOptionFactory          factory($count = null, $state = [])
 * @method static Builder<static>|FieldOption newModelQuery()
 * @method static Builder<static>|FieldOption newQuery()
 * @method static Builder<static>|FieldOption query()
 *
<<<<<<< HEAD
 * @property ProfileContract|null $deleter
 *
=======
 * <<<<<<< HEAD
 *
 * @property ProfileContract|null $deleter
 *
 * =======
 * <<<<<<< HEAD
 * =======
 * @property ProfileContract|null $deleter
 *
 * >>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
 *
 * >>>>>>> laraxot/dev
 *
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
