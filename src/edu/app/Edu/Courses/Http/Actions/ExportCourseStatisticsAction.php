<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Actions;

use App\Edu\Courses\Http\Resources\CourseStatisticResource;
use App\Edu\Courses\Models\Course;
use App\FileSystem\FileSavingService;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportCourseStatisticsAction
{
    private const FILE_NAME = 'courses-statistics';

    public function __invoke(FileSavingService $fileSavingService): BinaryFileResponse
    {
        $extractedUsers = CourseStatisticResource::collection(Course::all())->toJson();
        $filePath = $fileSavingService->saveJsonFile(self::FILE_NAME, $extractedUsers);

        return response()->download($filePath, self::FILE_NAME);
    }
}
