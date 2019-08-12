<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Card
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
    private $card_cost;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Edition", mappedBy="card")
     */
    private $edition;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Color", mappedBy="card")
     */
    private $color;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="cards")
     */
    private $user;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
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
     * @return Card
     */
    public function setName(string $name): Card
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardCost(): string
    {
        return $this->card_cost;
    }

    /**
     * @param string $card_cost
     * @return Card
     */
    public function setCardCost(string $card_cost): Card
    {
        $this->card_cost = $card_cost;

        return $this;
    }

    /**
     * @return Edition
     */
    public function getEdition(): Edition
    {
        return $this->edition;
    }

    /**
     * @param Edition $edition
     * @return Card
     */
    public function setEdition(Edition $edition): Card
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * @return Color
     */
    public function getColor(): Color
    {
        return $this->color;
    }

    /**
     * @param Color $color
     * @return Card
     */
    public function setColor(Color $color): Card
    {
        $this->color = $color;

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
     * @return Card
     */
    public function setCreatedAt(\DateTime $createdAt): Card
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
     * @return Card
     */
    public function setUpdatedAt(\DateTime $updatedAt): Card
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     * @return Card
     */
    public function setUser($user): Card
    {
        $this->user = $user;

        return $this;
    }
}
