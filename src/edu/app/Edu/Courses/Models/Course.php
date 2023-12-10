<?php

declare(strict_types=1);

namespace App\Edu\Courses\Models;

use App\Edu\Elements\Models\Element;
use App\Edu\Users\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MongoDB\Laravel\Eloquent\Model;

/**
 * @property string $title
 * @property string $description
 * @property string $user_id
 * @property User $user
 * @property Collection<Element> $elements
 */
class Course extends Model
{
    protected $primaryKey = '_id';

    protected $connection = 'mongodb';

    protected $collection = 'courses';

    protected $fillable = [
        'title',
        'description',
        'user_id'
    ];

    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'user_id' => 'string',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function elements(): HasMany
    {
        return $this->HasMany(Element::class);
    }
}

