<?php

declare(strict_types=1);

namespace App\Edu\Users\Models;

use MongoDB\Laravel\Eloquent\Model;

/**
 * @property string $title
 */
class Role extends Model
{
    protected $primaryKey = '_id';

    protected $connection = 'mongodb';

    protected $collection = 'roles';

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        'title' => 'string',
    ];
}
