<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Color
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
    private $combinaison;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var Card
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Card", mappedBy="color")
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
    public function getCombinaison(): string
    {
        return $this->combinaison;
    }

    /**
     * @param string $combinaison
     * @return Color
     */
    public function setCombinaison(string $combinaison): Color
    {
        $this->combinaison = $combinaison;

        return $this;
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
     * @return Color
     */
    public function setName(string $name): Color
    {
        $this->name = $name;

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
         * @return Color
         */
        public function setCreatedAt(\DateTime $createdAt): Color
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
         * @return Color
         */
        public function setUpdatedAt(\DateTime $updatedAt): Color
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

}
