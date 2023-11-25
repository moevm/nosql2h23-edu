<?php

declare(strict_types=1);

namespace App\Edu\Roles\Models;

use App\Edu\Users\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MongoDB\Laravel\Eloquent\Model;

/**
 * @property string $title
 * @property Collection<User> $users
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

    public function users(): HasMany
    {
        return $this->HasMany(User::class);
    }
}
