<?php

declare(strict_types=1);

namespace App\Edu\Users\DTO;

class UsersFilterDTO
{
    private ?string $email = null;

    public function __construct()
    {
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }
}
