<?php

declare(strict_types=1);

namespace App\Edu\Assignments\Http\Actions;

use App\Edu\Assignments\Models\Assignment;
use App\Edu\Courses\Repositories\CourseRepository;
use App\Edu\Roles\Specifications\IsUserHasAdminAccess;
use App\Edu\Users\DTO\UsersFilterDTO;
use App\Edu\Users\Repositories\UserRepository;
use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ViewAssignmentsListAction
{
    public function __invoke(
        string $courseId,
        Request $request,
        CourseRepository $courseRepository,
        UserRepository $userRepository,
        IsUserHasAdminAccess $isUserHasAdminAccess
    ): ViewResponse {
        $course = $courseRepository->findOneById($courseId);
        if (!$course) {
            throw new \DomainException('Course was not found');
        }

        $filters = $request->get('filters', []);
        $assignedFiltersDTO = (new UsersFilterDTO())
            ->setUserId($filters['assigned_user_id'] ?? null)
            ->setSurname($filters['assigned_surname'] ?? null);

        $notAssignedFiltersDTO = (new UsersFilterDTO())
            ->setUserId($filters['not_assigned_user_id'] ?? null)
            ->setSurname($filters['not_assigned_surname'] ?? null);


        $userIds = [];
        $course->assignments->each(function (Assignment $assignment) use (&$userIds) {
            $userIds[] = $assignment->user_id;
        });

        $assignedUsers = $userRepository->findByIds($userIds, $assignedFiltersDTO);
        $notAssignedUsers = $userRepository->findByIds($userIds, $notAssignedFiltersDTO, true);

        return View::make('assignments.list', [
            'course' => $course,
            'assignedUsers' => $assignedUsers,
            'notAssignedUsers' => $notAssignedUsers,
            'isAdmin' => $isUserHasAdminAccess->isSatisfiedBy(Auth::user()),
        ]);
    }
}
