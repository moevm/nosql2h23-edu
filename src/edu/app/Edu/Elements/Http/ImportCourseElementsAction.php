<?php

declare(strict_types=1);

namespace App\Edu\Elements\Http;

use App\Edu\Courses\Repositories\CourseRepository;
use App\Edu\Elements\Factories\ElementFactory;
use App\FileSystem\Enum\FileMimeTypes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ImportCourseElementsAction
{
    public function __invoke(
        string $courseId,
        Request $request,
        CourseRepository $courseRepository
    ): RedirectResponse {
        $file = $request->file('file');
        if (!$file || $file->getMimeType() !== FileMimeTypes::JSON->value) {
            throw new \RuntimeException('Json file was not uploaded');
        }

        $decodedJson = json_decode($file->getContent(), true);
        $elementsAttributes = array_shift($decodedJson);

        foreach ($elementsAttributes as $element) {
            $element['course'] = $courseRepository->findOneById($courseId);
            ElementFactory::create($element);
        }

        return back();
    }
}
