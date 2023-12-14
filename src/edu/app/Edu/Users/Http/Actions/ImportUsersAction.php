<?php

declare(strict_types=1);

namespace App\Edu\Users\Http\Actions;

use App\Edu\Users\Factories\UserFactory;
use App\FileSystem\Enum\FileMimeTypes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ImportUsersAction
{
    public function __invoke(Request $request): RedirectResponse
    {
        $file = $request->file('file');
        if (!$file || $file->getMimeType() !== FileMimeTypes::JSON->value) {
            throw new \RuntimeException('Json file was not uploaded');
        }

        $decodedJson = json_decode($file->getContent(), true);
        $usersAttributes = array_shift($decodedJson);

        foreach ($usersAttributes as $user) {
            UserFactory::create($user);
        }

        return back();
    }
}
