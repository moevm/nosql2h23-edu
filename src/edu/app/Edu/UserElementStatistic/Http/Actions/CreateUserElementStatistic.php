<?php

declare(strict_types=1);

namespace App\Edu\UserElementStatistic\Http\Actions;

use App\Edu\UserElementStatistic\Factories\UserElementStatisticFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CreateUserElementStatistic
{
    public function __invoke(
        string $courseId,
        Request $request
    ): RedirectResponse {
        $userId = $request->input('user_id', '');
        $elementId = $request->input('element_id', '');
        $points = $request->input('points', 100);

        UserElementStatisticFactory::create([
            'element_id' => $elementId,
            'user_id' => $userId,
            'points' => $points,
        ]);

        return back();
    }
}
