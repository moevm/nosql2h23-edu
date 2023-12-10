<?php

declare(strict_types=1);

namespace App\Edu\Elements\Factories;

use App\Edu\Courses\Models\Course;
use App\Edu\Elements\Models\Element;

class ElementFactory
{
    public static function create(array $attributes): Element
    {
        $element = new Element();

        $element->type = $attributes['type'];
        $element->title = $attributes['title'];
        $element->content = $attributes['content'];
        $element->weight = (float)$attributes['weight'];

        $course = $attributes['course'];
        if (!$course instanceof Course) {
            throw new \RuntimeException('Could not create element not belongs to course');
        }

        $element->course_id = $course->getKey();

        $savingResult = $course->save();
        if (!$savingResult) {
            throw new \RuntimeException('Could not create course element');
        }

        return $element;
    }
}
