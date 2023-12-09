<?php

declare(strict_types=1);

namespace App\Edu\Courses\Models;

use App\Edu\Users\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use MongoDB\Laravel\Eloquent\Model;

/**
 * @property string $title
 * @property string $description
 * @property string $user_id
 * @property User $user
 */
class Course extends Model
{
    protected $primaryKey = '_id';

    protected $connection = 'mongodb';

    protected $collection = 'courses';

    protected $fillable = [
        'title',
        'description',
        'user_id'
    ];

    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'user_id' => 'string',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

