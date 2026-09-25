<?php

declare(strict_types=1);

namespace Modules\UI\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Modules\UI\Database\Factories\CategoryFactory;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Models\BaseModel;

/**
 * @property string $title
 * @property int $is_active
 * @property int|null $parent_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder<static>|Category whereCreatedAt($value)
 * @method static Builder<static>|Category whereCreatedBy($value)
 * @method static Builder<static>|Category whereDeletedAt($value)
 * @method static Builder<static>|Category whereDeletedBy($value)
 * @method static Builder<static>|Category whereDescription($value)
 * @method static Builder<static>|Category whereIcon($value)
 * @method static Builder<static>|Category whereId($value)
 * @method static Builder<static>|Category whereIsActive($value)
 * @method static Builder<static>|Category whereParentId($value)
 * @method static Builder<static>|Category whereSlug($value)
 * @method static Builder<static>|Category whereSortOrder($value)
 * @method static Builder<static>|Category whereTitle($value)
 * @method static Builder<static>|Category whereUpdatedAt($value)
 * @method static Builder<static>|Category whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Category extends BaseModel
{
    protected $table = 'categories';

    /** @var list<string> */
    protected $fillable = [
        'name',
        'title',
        'description',
        'icon',
        'parent_id',
        'is_active',
        'sort_order',
    ];
}
