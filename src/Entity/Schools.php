<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schools
 *
 * @ORM\Table(name="schools")
 * @ORM\Entity
 */
class Schools
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_school", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSchool;

    /**
     * @var string
     *
     * @ORM\Column(name="school_name", type="string", length=50, nullable=false)
     */
    private $schoolName;

    /**
     * @var string
     *
     * @ORM\Column(name="school_country", type="string", length=50, nullable=false)
     */
    private $schoolCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="school_city", type="string", length=50, nullable=false)
     */
    private $schoolCity;

    /**
     * @var string
     *
     * @ORM\Column(name="school_level", type="string", length=50, nullable=false)
     */
    private $schoolLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="school_address", type="text", length=65535, nullable=false)
     */
    private $schoolAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="school_phone", type="text", length=65535, nullable=false)
     */
    private $schoolPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="school_phax", type="text", length=65535, nullable=false)
     */
    private $schoolPhax;

    /**
     * @var string
     *
     * @ORM\Column(name="school_postalcode", type="text", length=65535, nullable=false)
     */
    private $schoolPostalcode;

    /**
     * @var string
     *
     * @ORM\Column(name="school_description", type="text", length=65535, nullable=false)
     */
    private $schoolDescription;

    public function getIdSchool(): ?int
    {
        return $this->idSchool;
    }

    public function getSchoolName(): ?string
    {
        return $this->schoolName;
    }

    public function setSchoolName(string $schoolName): self
    {
        $this->schoolName = $schoolName;

        return $this;
    }

    public function getSchoolCountry(): ?string
    {
        return $this->schoolCountry;
    }

    public function setSchoolCountry(string $schoolCountry): self
    {
        $this->schoolCountry = $schoolCountry;

        return $this;
    }

    public function getSchoolCity(): ?string
    {
        return $this->schoolCity;
    }

    public function setSchoolCity(string $schoolCity): self
    {
        $this->schoolCity = $schoolCity;

        return $this;
    }

    public function getSchoolLevel(): ?string
    {
        return $this->schoolLevel;
    }

    public function setSchoolLevel(string $schoolLevel): self
    {
        $this->schoolLevel = $schoolLevel;

        return $this;
    }

    public function getSchoolAddress(): ?string
    {
        return $this->schoolAddress;
    }

    public function setSchoolAddress(string $schoolAddress): self
    {
        $this->schoolAddress = $schoolAddress;

        return $this;
    }

    public function getSchoolPhone(): ?string
    {
        return $this->schoolPhone;
    }

    public function setSchoolPhone(string $schoolPhone): self
    {
        $this->schoolPhone = $schoolPhone;

        return $this;
    }

    public function getSchoolPhax(): ?string
    {
        return $this->schoolPhax;
    }

    public function setSchoolPhax(string $schoolPhax): self
    {
        $this->schoolPhax = $schoolPhax;

        return $this;
    }

    public function getSchoolPostalcode(): ?string
    {
        return $this->schoolPostalcode;
    }

    public function setSchoolPostalcode(string $schoolPostalcode): self
    {
        $this->schoolPostalcode = $schoolPostalcode;

        return $this;
    }

    public function getSchoolDescription(): ?string
    {
        return $this->schoolDescription;
    }

    public function setSchoolDescription(string $schoolDescription): self
    {
        $this->schoolDescription = $schoolDescription;

        return $this;
    }


}
