<?php

declare(strict_types=1);

namespace App\Edu\Assignments\Http\Actions;

use App\Edu\Assignments\Factories\AssignmentFactory;
use App\Edu\Elements\Repositories\ElementRepository;
use App\Edu\Users\Repositories\UserRepository;
use App\FileSystem\Enum\FileMimeTypes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ImportAssignmentsAction
{
    public function __invoke(
        string $courseId,
        Request $request,
        UserRepository $userRepository,
    ): RedirectResponse {
        $file = $request->file('file');
        if (!$file || $file->getMimeType() !== FileMimeTypes::JSON->value) {
            throw new \RuntimeException('Json file was not uploaded');
        }

        $decodedJson = json_decode($file->getContent(), true);
        $assignmentsAttributes = array_shift($decodedJson);

        foreach ($assignmentsAttributes as $assignment) {
            $element =
            $user = $userRepository->findOneById($assignment['user_id']);

            if ($courseId && $user) {
                AssignmentFactory::create([
                    'course_id' => $courseId,
                    'user_id' => $user->getKey(),
                ]);
            }
        }

        return back();
    }
}
