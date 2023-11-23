<?php

declare(strict_types=1);

namespace App\Edu\Users\Models;

use MongoDB\Laravel\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = '_id';

    protected $connection = 'mongodb';

    protected $collection = 'users';
}
