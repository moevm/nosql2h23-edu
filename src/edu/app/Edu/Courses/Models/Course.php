<?php

declare(strict_types=1);

namespace App\Edu\Courses\Models;

use App\Edu\Roles\Models\Role;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use MongoDB\Laravel\Eloquent\Model;

/**
 * @property string $title
 * @property string $description
 */
class Course extends Model
{
    protected $primaryKey = '_id';

    protected $connection = 'mongodb';

    protected $collection = 'courses';

    protected $fillable = [
        'title',
        'description',
    ];

    protected $casts = [
        'title' => 'string',
        'description' => 'string',
    ];
}

