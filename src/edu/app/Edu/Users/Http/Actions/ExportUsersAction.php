<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Actions;

use App\Edu\Users\Http\Resources\UserResource;
use App\Edu\Users\Models\User;
use App\FileSystem\FileSavingService;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportUsersAction
{
    private const FILE_NAME = 'users';

    public function __invoke(FileSavingService $fileSavingService): BinaryFileResponse
    {
        $extractedUsers = UserResource::collection(User::all())->toJson();
        $filePath = $fileSavingService->saveJsonFile(self::FILE_NAME, $extractedUsers);

        return response()->download($filePath, self::FILE_NAME);
    }
}
