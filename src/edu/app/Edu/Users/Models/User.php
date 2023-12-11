<?php

declare(strict_types=1);

namespace App\Edu\Users\Models;

use App\Edu\Assignments\Models\Assignment;
use App\Edu\Courses\Models\Course;
use App\Edu\Roles\Models\Role;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MongoDB\Laravel\Auth\User as MongoUser;

/**
 * @property string $email
 * @property string $password
 * @property string $name
 * @property string surname
 * @property string patronymic
 * @property \DateTime date_birth
 * @property int gender
 * @property string $role_id
 * @property Role $role
 * @property Collection<Course> $courses
 * @property Collection<Assignment> $assignments
 */
class User extends MongoUser
{
    protected $primaryKey = '_id';

    protected $connection = 'mongodb';

    protected $collection = 'users';

    protected $fillable = [
        'email',
        'password',
        'name',
        'surname',
        'patronymic',
        'date_birth',
        'gender',
        'role_id',
    ];

    protected $casts = [
        'email' => 'string',
        'password' => 'string',
        'name' => 'string',
        'surname' => 'string',
        'patronymic' => 'string',
        'role_id' => 'string',
        'date_birth' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function courses(): HasMany
    {
        return $this->HasMany(Course::class);
    }

    public function assignments(): HasMany
    {
        return $this->HasMany(Assignment::class);
    }
}
