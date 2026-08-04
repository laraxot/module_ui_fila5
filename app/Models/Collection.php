<?php

declare(strict_types=1);

namespace Modules\UI\Models;

use Illuminate\Database\Eloquent\Builder;
use Modules\UI\Database\Factories\CollectionFactory;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Models\BaseModel;

/**
 * Collection model for UI module.
 * FormBuilder module not available - extending from XotBaseModel instead.
<<<<<<< HEAD
=======
 * <<<<<<< HEAD.
 *
 * @property string|null                     $id
 * @property string|null                     $name
 * @property string|null                     $description
 * @property string|null                     $type
 * @property int|null                        $theme_id
 * @property int|null                        $is_active
 * @property int|null                        $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property ProfileContract|null            $creator
 * @property ProfileContract|null            $updater
 * @property ProfileContract|null            $deleter
 *                                                        =======
>>>>>>> laraxot/dev
 */
/**
 * @property string|null                     $name
 * @property string|null                     $description
 * @property string|null                     $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property ProfileContract|null            $creator
 * @property ProfileContract|null            $updater
<<<<<<< HEAD
=======
 *                                                        >>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> laraxot/dev
 *
 * @method static CollectionFactory          factory($count = null, $state = [])
 * @method static Builder<static>|Collection newModelQuery()
 * @method static Builder<static>|Collection newQuery()
 * @method static Builder<static>|Collection query()
 *
<<<<<<< HEAD
 * @property ProfileContract|null $deleter
 *
=======
 * <<<<<<< HEAD
 * =======
 *
 * @property ProfileContract|null $deleter
 *
 * >>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
 *
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
