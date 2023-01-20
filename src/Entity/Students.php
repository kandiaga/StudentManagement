<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Students
 *
 * @ORM\Table(name="students")
 * @ORM\Entity
 */
class Students
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_student", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStudent;

    /**
     * @var string
     *
     * @ORM\Column(name="student_name", type="string", length=50, nullable=false)
     */
    private $studentName;

    /**
     * @var string
     *
     * @ORM\Column(name="student_image", type="string", length=50, nullable=false)
     */
    private $studentImage;

    /**
     * @var string
     *
     * @ORM\Column(name="student_fistname", type="string", length=50, nullable=false)
     */
    private $studentFistname;

    /**
     * @var string
     *
     * @ORM\Column(name="student_lastname", type="string", length=50, nullable=false)
     */
    private $studentLastname;

    /**
     * @var int
     *
     * @ORM\Column(name="student_age", type="integer", nullable=false)
     */
    private $studentAge;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="student_birth", type="date", nullable=false)
     */
    private $studentBirth;

    /**
     * @var int
     *
     * @ORM\Column(name="id_school", type="integer", nullable=false, options={"default"="1"})
     */
    private $idSchool = 1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registration_date", type="date", nullable=false)
     */
    private $registrationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="home_city", type="string", length=50, nullable=false)
     */
    private $homeCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="home_address", type="text", length=65535, nullable=true)
     */
    private $homeAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="father_name", type="text", length=65535, nullable=true)
     */
    private $fatherName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="monther_name", type="text", length=65535, nullable=true)
     */
    private $montherName;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_phone", type="string", length=50, nullable=false)
     */
    private $parentPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="`father _phone`", type="string", length=50, nullable=false)
     */
    private $fatherPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="`monther_phone`", type="string", length=50, nullable=false)
     */
    private $montherPhone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="date", nullable=false)
     */
    private $created;

    /**
     * @var int
     *
     * @ORM\Column(name="id_classe", type="integer", nullable=false)
     */
    private $idClasse;

    /**
     * @var int
     *
     * @ORM\Column(name="is_active", type="integer", nullable=false, options={"default"="1"})
     */
    private $isActive = 1;

    public function getIdStudent(): ?int
    {
        return $this->idStudent;
    }

    public function getStudentName(): ?string
    {
        return $this->studentName;
    }

    public function setStudentName(string $studentName): self
    {
        $this->studentName = $studentName;

        return $this;
    }

    public function getStudentImage(): ?string
    {
        return $this->studentImage;
    }

    public function setStudentImage(string $studentImage): self
    {
        $this->studentImage = $studentImage;

        return $this;
    }

    public function getStudentFistname(): ?string
    {
        return $this->studentFistname;
    }

    public function setStudentFistname(string $studentFistname): self
    {
        $this->studentFistname = $studentFistname;

        return $this;
    }

    public function getStudentLastname(): ?string
    {
        return $this->studentLastname;
    }

    public function setStudentLastname(string $studentLastname): self
    {
        $this->studentLastname = $studentLastname;

        return $this;
    }

    public function getStudentAge(): ?int
    {
        return $this->studentAge;
    }

    public function setStudentAge(int $studentAge): self
    {
        $this->studentAge = $studentAge;

        return $this;
    }

    public function getStudentBirth(): ?\DateTimeInterface
    {
        return $this->studentBirth;
    }

    public function setStudentBirth(\DateTimeInterface $studentBirth): self
    {
        $this->studentBirth = $studentBirth;

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

    public function getRegistrationDate(): ?\DateTimeInterface
    {
        return $this->registrationDate;
    }

    public function setRegistrationDate(\DateTimeInterface $registrationDate): self
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    public function getHomeCity(): ?string
    {
        return $this->homeCity;
    }

    public function setHomeCity(string $homeCity): self
    {
        $this->homeCity = $homeCity;

        return $this;
    }

    public function getHomeAddress(): ?string
    {
        return $this->homeAddress;
    }

    public function setHomeAddress(?string $homeAddress): self
    {
        $this->homeAddress = $homeAddress;

        return $this;
    }

    public function getFatherName(): ?string
    {
        return $this->fatherName;
    }

    public function setFatherName(?string $fatherName): self
    {
        $this->fatherName = $fatherName;

        return $this;
    }

    public function getMontherName(): ?string
    {
        return $this->montherName;
    }

    public function setMontherName(?string $montherName): self
    {
        $this->montherName = $montherName;

        return $this;
    }

    public function getParentPhone(): ?string
    {
        return $this->parentPhone;
    }

    public function setParentPhone(string $parentPhone): self
    {
        $this->parentPhone = $parentPhone;

        return $this;
    }

    public function getFatherPhone(): ?string
    {
        return $this->fatherPhone;
    }

    public function setFatherPhone(string $fatherPhone): self
    {
        $this->fatherPhone = $fatherPhone;

        return $this;
    }

    public function getMontherPhone(): ?string
    {
        return $this->montherPhone;
    }

    public function setMontherPhone(string $montherPhone): self
    {
        $this->montherPhone = $montherPhone;

        return $this;
    }

    

    public function getIdClasse(): ?int
    {
        return $this->idClasse;
    }

    public function setIdClasse(int $idClasse): self
    {
        $this->idClasse = $idClasse;

        return $this;
    }

    public function getIsActive(): ?int
    {
        return $this->isActive;
    }

    public function setIsActive(int $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }


}
