<?php

declare(strict_types=1);

namespace App\Edu\Users\DTO;

class UserUpdatingDTO
{
    private ?string $email = null;

    private ?string $name = null;

    private ?string $surname = null;

    private ?string $patronymic = null;

    private ?\DateTime $dateBirth = null;

    private ?int $gender = null;

    public function __construct()
    {
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getPatronymic(): ?string
    {
        return $this->patronymic;
    }

    public function setPatronymic(string $patronymic): self
    {
        $this->patronymic = $patronymic;

        return $this;
    }

    public function getDateBirth(): ?\DateTime
    {
        return $this->dateBirth;
    }

    public function setDateBirth(\DateTime $dateBirth): self
    {
        $this->dateBirth = $dateBirth;

        return $this;
    }

    public function getGender(): ?int
    {
        return $this->gender;
    }

    public function setGender(int $gender): self
    {
        $this->gender = $gender;

        return $this;
    }
}
