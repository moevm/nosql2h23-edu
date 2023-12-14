<?php

declare(strict_types=1);

namespace App\Edu\Courses\Http\Actions;

use App\Edu\Courses\Factories\CourseFactory;
use App\FileSystem\Enum\FileMimeTypes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImportCoursesAction
{
    public function __invoke(Request $request): RedirectResponse
    {
        $file = $request->file('file');
        if (!$file || $file->getMimeType() !== FileMimeTypes::JSON->value) {
            throw new \RuntimeException('Json file was not uploaded');
        }

        $decodedJson = json_decode($file->getContent(), true);
        $coursesAttributes = array_shift($decodedJson);

        foreach ($coursesAttributes as $course) {
            $course['course_author'] = Auth::user();
            CourseFactory::create($course);
        }

        return back();
    }
}
