<?php

declare(strict_types=1);

namespace App\Edu\UserElementStatistic\Http\Actions;

use App\Edu\Assignments\Factories\AssignmentFactory;
use App\Edu\Elements\Repositories\ElementRepository;
use App\Edu\UserElementStatistic\Factories\UserElementStatisticFactory;
use App\Edu\Users\Repositories\UserRepository;
use App\FileSystem\Enum\FileMimeTypes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ImportUserElementStatisticsAction
{
    public function __invoke(
        Request $request,
        UserRepository $userRepository,
        ElementRepository $elementRepository
    ): RedirectResponse {
        $file = $request->file('file');
        if (!$file || $file->getMimeType() !== FileMimeTypes::JSON->value) {
            throw new \RuntimeException('Json file was not uploaded');
        }

        $decodedJson = json_decode($file->getContent(), true);
        $statisticsAttributes = array_shift($decodedJson);

        foreach ($statisticsAttributes as $stat) {
            $user = $userRepository->findOneById($stat['user_id']);
            $element = $elementRepository->findById($stat['element_id']);

            if ($element && $user) {
                UserElementStatisticFactory::create([
                    'user_id' => $user->getKey(),
                    'element_id' => $element->getKey(),
                    'points' => $stat['points'],
                ]);
            }
        }

        return back();
    }
}
