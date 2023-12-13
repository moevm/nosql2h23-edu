<?php

declare(strict_types=1);

namespace App\Edu\UserElementStatistic\Models;

use App\Edu\Elements\Models\Element;
use App\Edu\Users\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use MongoDB\Laravel\Eloquent\Model;

/**
 * @property Element $element
 * @property User $user
 * @property string $user_id
 * @property float $points
 * @property string $element_id
 */
class UserElementStatistic extends Model
{
    protected $primaryKey = '_id';

    protected $connection = 'mongodb';

    protected $collection = 'user_element_statistics';

    protected $fillable = [
        'user_id',
        'element_id',
        'points',
    ];

    protected $casts = [
        'user_id' => 'string',
        'points' => 'float',
        'element_id' => 'string',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function element(): BelongsTo
    {
        return $this->belongsTo(Element::class);
    }
}
