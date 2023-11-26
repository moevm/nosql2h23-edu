<?php

declare(strict_types=1);

namespace App\Edu\Users\DTO;

use Illuminate\Contracts\Support\Arrayable;

class UserRegistrationDTO implements Arrayable
{
    public function __construct(
        private readonly string $email,
        private readonly string $name,
        private readonly string $surname,
        private readonly string $patronymic,
        private readonly \DateTime $dateBirth,
        private readonly string $password,
        private readonly int $gender,
        private readonly string $roleTitle
    ) {
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getPatronymic(): string
    {
        return $this->patronymic;
    }

    public function getDateBirth(): \DateTime
    {
        return $this->dateBirth;
    }

    public function getRoleTitle(): string
    {
        return $this->roleTitle;
    }

    public function getGender(): int
    {
        return $this->gender;
    }

    public function toArray(): array
    {
        return [
            'email' => $this->getEmail(),
            'name' => $this->getName(),
            'surname' => $this->getSurname(),
            'patronymic' => $this->getPatronymic(),
            'date_birth' => $this->getDateBirth(),
            'password' => $this->getPassword(),
            'gender' => $this->getGender(),
            'role_title' => $this->getRoleTitle(),
        ];
    }
}
