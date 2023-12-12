<?php

declare(strict_types=1);

namespace App\Edu\Users\DTO;

class UsersFilterDTO
{
    private ?string $email = null;

    private ?string $surname = null;

    private ?string $roleTitle = null;

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setRoleTitle(?string $roleTitle): self
    {
        $this->roleTitle = $roleTitle;

        return $this;
    }

    public function getRoleTitle(): ?string
    {
        return $this->roleTitle;
    }
}
