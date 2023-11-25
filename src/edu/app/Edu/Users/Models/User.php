<?php

declare(strict_types=1);

namespace App\Edu\Users\Models;

use MongoDB\Laravel\Eloquent\Model;

/**
 * @property string $email
 * @property string $password
 * @property string $name
 * @property string surname
 * @property string patronymic
 * @property \DateTime date_birth
 * @property int gender
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
    ];

    protected $casts = [
        'email' => 'string',
        'password' => 'string',
        'name' => 'string',
        'surname' => 'string',
        'patronymic' => 'string',
        'date_birth' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
