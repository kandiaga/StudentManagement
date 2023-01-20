<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classes
 *
 * @ORM\Table(name="classes")
 * @ORM\Entity
 */
class Classes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_classe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasse;

    /**
     * @var string
     *
     * @ORM\Column(name="classe_name", type="text", length=65535, nullable=false)
     */
    private $classeName;

    /**
     * @var string
     *
     * @ORM\Column(name="classe_description", type="text", length=65535, nullable=false)
     */
    private $classeDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="id_school", type="integer", nullable=false)
     */
    private $idSchool;

    public function getIdClasse(): ?int
    {
        return $this->idClasse;
    }

    public function getClasseName(): ?string
    {
        return $this->classeName;
    }

    public function setClasseName(string $classeName): self
    {
        $this->classeName = $classeName;

        return $this;
    }

    public function getClasseDescription(): ?string
    {
        return $this->classeDescription;
    }

    public function setClasseDescription(string $classeDescription): self
    {
        $this->classeDescription = $classeDescription;

        return $this;
    }

    public function getIdSchool(): ?int
    {
        return $this->idSchool;
    }

    public function setIdSchool(int $idSchool): self
    {
        $this->idSchool = $idSchool;

        return $this;
    }


}
