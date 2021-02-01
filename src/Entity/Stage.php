<?php

namespace App\Entity;

use App\Repository\StageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StageRepository::class)
 */
class Stage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $ectsCode;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $ansco;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $bloc;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $section;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $department;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEctsCode(): ?string
    {
        return $this->ectsCode;
    }

    public function setEctsCode(string $ectsCode): self
    {
        $this->ectsCode = $ectsCode;

        return $this;
    }

    public function getAnsco(): ?string
    {
        return $this->ansco;
    }

    public function setAnsco(string $ansco): self
    {
        $this->ansco = $ansco;

        return $this;
    }

    public function getBloc(): ?string
    {
        return $this->bloc;
    }

    public function setBloc(string $bloc): self
    {
        $this->bloc = $bloc;

        return $this;
    }

    public function getSection(): ?string
    {
        return $this->section;
    }

    public function setSection(string $section): self
    {
        $this->section = $section;

        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(string $department): self
    {
        $this->department = $department;

        return $this;
    }
}
