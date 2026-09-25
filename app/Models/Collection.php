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
 *
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
