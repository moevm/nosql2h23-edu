<?php

declare(strict_types=1);

namespace App\Edu\Users\DTO;

class UsersFilterDTO
{
    private ?string $email = null;

    private ?string $surname = null;

    private ?string $roleTitle = null;

    private ?string $userId = null;

    private ?\DateTime $createdFrom = null;

    private ?\DateTime $createdTo = null;

    /**
     * @return \DateTime|null
     */
    public function getCreatedFrom(): ?\DateTime
    {
        return $this->createdFrom;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedTo(): ?\DateTime
    {
        return $this->createdTo;
    }

    /**
     * @param \DateTime|null $createdFrom
     */
    public function setCreatedFrom(?\DateTime $createdFrom): self
    {
        $this->createdFrom = $createdFrom;

        return $this;
    }

    /**
     * @param \DateTime|null $createdTo
     */
    public function setCreatedTo(?\DateTime $createdTo): self
    {
        $this->createdTo = $createdTo;

        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;

        return $this;
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
