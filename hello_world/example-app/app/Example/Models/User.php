<?php

namespace App\Example\Models;

use MongoDB\Laravel\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = '_id';

    protected $connection = 'mongodb';

    protected $collection = 'users';
}
