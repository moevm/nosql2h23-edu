<?php

declare(strict_types=1);

use App\Edu\Courses\Models\Course;
use App\Edu\Elements\Enums\AvailableElementTypes;
use App\Edu\Elements\Factories\ElementFactory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $courses = Course::all();

        foreach ($courses as $course) {
            $firstElement = [
                'type' => AvailableElementTypes::TYPE_TEXT->value,
                'title' => 'Интересный текст',
                'content' => 'Привет, это очень интересный текст',
                'weight' => 1.0,
                'course' => $course,
            ];
            $secondElement = [
                'type' => AvailableElementTypes::TYPE_LINK->value,
                'title' => 'Важная ссылка',
                'content' => 'https://se.moevm.info/doku.php/staff:courses:no_sql_introduction',
                'weight' => 1.0,
                'course' => $course,
            ];

            $courseElements = [$firstElement, $secondElement];
            foreach ($courseElements as $courseElement) {
                ElementFactory::create($courseElement);
            }
        }
    }

    public function down(): void
    {
        Schema::connection('mongodb')->dropIfExists('elements');
    }
};
