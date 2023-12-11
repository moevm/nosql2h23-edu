<?php

declare(strict_types=1);

use App\Edu\Courses\Factories\CourseFactory;
use App\Edu\Roles\Enums\AvailableRoles;
use App\Edu\Roles\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        /** @var Role $adminRole */
        $adminRole = Role::query()
            ->where('title', '=', AvailableRoles::ADMIN->value)
            ->first();

        $coursesAuthor = $adminRole->users->first();
        if (!$coursesAuthor) {
            throw new \DomainException('Admin was not found');
        }

        $firstCourse = [
            'title' => 'Основы подготовки научных публикаций',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
            'course_author' => $coursesAuthor,
        ];
        $secondCourse = [
            'title' => 'Введение в нереляционные базы данных',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
            'course_author' => $coursesAuthor,
        ];

        $courses = [$firstCourse, $secondCourse];
        foreach ($courses as $course) {
            CourseFactory::create($course);
        }
    }

    public function down(): void
    {
        Schema::connection('mongodb')->dropIfExists('courses');
    }
};
