<?php

declare(strict_types=1);

namespace App\Edu\Elements\Enums;

enum AvailableElementTypes: string
{
    case TYPE_LINK = 'Ссылка';

    case TYPE_TEXT = 'Текст';
}
