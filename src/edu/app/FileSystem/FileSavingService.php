<?php

declare(strict_types=1);

namespace App\FileSystem;

use Illuminate\Support\Facades\Storage;

class FileSavingService
{
    private const APP_DIRECTORY = 'app';

    private const JSON_FILE_EXTENSION = '.json';

    private const ERROR_FILE_PATH = '';

    public function saveJsonFile(string $fileName, string $jsonContent): string
    {
        $filePath = storage_path() . DIRECTORY_SEPARATOR . self::APP_DIRECTORY . DIRECTORY_SEPARATOR . $fileName . self::JSON_FILE_EXTENSION;

        $fileSaved = Storage::disk('local')->put($fileName . self::JSON_FILE_EXTENSION, $jsonContent);
        if ($fileSaved) {
            return $filePath;
        }

        return self::ERROR_FILE_PATH;
    }
}
