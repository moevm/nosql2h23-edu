<?php

declare(strict_types=1);

namespace App\Edu\Assignments\Models;

use App\Edu\Courses\Models\Course;
use App\Edu\Users\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use MongoDB\Laravel\Eloquent\Model;

/**
 * @property Course $course
 * @property User $user
 * @property string $user_id
 * @property string $course_id
 */
class Assignment extends Model
{
    protected $primaryKey = '_id';

    protected $connection = 'mongodb';

    protected $collection = 'assignments';

    protected $fillable = [
        'user_id',
        'course_id',
    ];

    protected $casts = [
        'user_id' => 'string',
        'course_id' => 'string',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
