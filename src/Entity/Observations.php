<?php

namespace App\Entity;

use App\Repository\ObservationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObservationsRepository::class)]
class Observations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $obsDatetime = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObsDatetime(): ?string
    {
        return $this->obsDatetime;
    }

    public function setObsDatetime(string $obsDatetime): self
    {
        $this->obsDatetime = $obsDatetime;

        return $this;
    }
}
