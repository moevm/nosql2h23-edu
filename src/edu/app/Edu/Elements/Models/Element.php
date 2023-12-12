<?php

declare(strict_types=1);

namespace App\Edu\Elements\Models;

use App\Edu\Courses\Models\Course;
use App\Edu\UserElementStatistic\Models\UserElementStatistic;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MongoDB\Laravel\Eloquent\Model;

/**
 * @property string $type
 * @property string $title
 * @property string $content
 * @property float $weight
 * @property string $course_id
 * @property Course $course
 * @property Collection<UserElementStatistic> $statistics
 */
class Element extends Model
{
    protected $primaryKey = '_id';

    protected $connection = 'mongodb';

    protected $collection = 'elements';

    protected $fillable = [
        'type',
        'title',
        'content',
        'weight',
        'course_id',
    ];

    protected $casts = [
        'type' => 'string',
        'title' => 'string',
        'content' => 'string',
        'weight' => 'float',
        'course_id' => 'string',
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function statistics(): HasMany
    {
        return $this->HasMany(UserElementStatistic::class);
    }
}
