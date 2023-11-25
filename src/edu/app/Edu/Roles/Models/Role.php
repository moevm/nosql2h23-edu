<?php

declare(strict_types=1);

namespace App\Edu\Roles\Models;

use MongoDB\Laravel\Eloquent\Model;

/**
 * @property string $title
 */
class Role extends Model
{
    public const COLLECTION_NAME = 'roles';

    protected $primaryKey = '_id';

    protected $connection = 'mongodb';

    protected $collection = self::COLLECTION_NAME;

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        'title' => 'string',
    ];
}
