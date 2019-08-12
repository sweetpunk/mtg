<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Edition
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $year;

    /**
     * @var bool
     *
     * @ORM\Column(type="bool")
     */
    private $isStandard;

    /**
     * @var bool
     *
     * @ORM\Column(type="bool")
     */
    private $isModern;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Card", mappedBy="edition")
     */
    private $card;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
        $this->card = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Edition
     */
    public function setName(string $name): Edition
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getYear(): string
    {
        return $this->year;
    }

    /**
     * @param string $year
     * @return Edition
     */
    public function setYear(string $year): Edition
    {
        $this->year = $year;

        return $this;
    }

    /**
     * @return bool
     */
    public function isStandard(): bool
    {
        return $this->isStandard;
    }

    /**
     * @param bool $isStandard
     * @return Edition
     */
    public function setIsStandard(bool $isStandard): Edition
    {
        $this->isStandard = $isStandard;

        return $this;
    }

    /**
     * @return bool
     */
    public function isModern(): bool
    {
        return $this->isModern;
    }

    /**
     * @param bool $isModern
     * @return Edition
     */
    public function setIsModern(bool $isModern): Edition
    {
        $this->isModern = $isModern;

        return $this;
    }

    /**
     * @return Card
     */
    public function getCard(): Card
    {
        return $this->card;
    }

    /**
     * @param Card $card
     * @return Edition
     */
    public function setCard(Card $card): Edition
    {
        $this->card = $card;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Edition
     */
    public function setCreatedAt(\DateTime $createdAt): Edition
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return Edition
     */
    public function setUpdatedAt(\DateTime $updatedAt): Edition
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
