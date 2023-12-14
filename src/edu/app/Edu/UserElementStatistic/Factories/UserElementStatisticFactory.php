<?php

declare(strict_types=1);

namespace App\Edu\UserElementStatistic\Factories;

use App\Edu\Elements\Models\Element;
use App\Edu\UserElementStatistic\Models\UserElementStatistic;
use App\Edu\Users\Models\User;

class UserElementStatisticFactory
{
    public static function create(array $attributes): UserElementStatistic
    {
        $stat = new UserElementStatistic();

        $user = User::query()
            ->where('_id', '=', $attributes['user_id'])
            ->first();

        $element = Element::query()
            ->where('_id', '=', $attributes['element_id'])
            ->first();

        if (!$user || !$element) {
            throw new \RuntimeException('Could not create statistic without user or element');
        }

        $stat->user_id = $user->getKey();
        $stat->element_id = $element->getKey();
        $stat->points = $attributes['points'];

        $savingResult = $stat->save();
        if (!$savingResult) {
            throw new \RuntimeException('Could not create stat');
        }

        return $stat;
    }
}
