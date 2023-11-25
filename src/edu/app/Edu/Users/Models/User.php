<?php

declare(strict_types=1);

namespace App\Edu\Users\Models;

use App\Edu\Roles\Models\Role;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use MongoDB\Laravel\Eloquent\Model;

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
*/
class User extends Model
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
}
