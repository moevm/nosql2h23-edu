<?php

declare(strict_types=1);

namespace App\Edu\UserElementStatistic\DTO;

class StatisticsFilterDTO
{
    private ?int $assignmentsCount = null;

    private ?int $passedCount = null;

    public function getAssignmentsCount(): ?int
    {
        return $this->assignmentsCount;
    }

    public function getPassedCount(): ?int
    {
        return $this->passedCount;
    }

    public function setAssignmentsCount(?int $assignmentsCount): self
    {
        $this->assignmentsCount = $assignmentsCount;

        return $this;
    }

    public function setPassedCount(?int $passedCount): self
    {
        $this->passedCount = $passedCount;

        return $this;
    }
}
