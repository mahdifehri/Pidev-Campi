<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $NumCmd;

    /**
     * @ORM\Column(type="date")
     */
    private $DateCmd;

    /**
     * @ORM\Column(type="float")
     */
    private $TotalCmd;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumCmd(): ?int
    {
        return $this->NumCmd;
    }

    public function setNumCmd(int $NumCmd): self
    {
        $this->NumCmd = $NumCmd;

        return $this;
    }

    public function getDateCmd(): ?\DateTimeInterface
    {
        return $this->DateCmd;
    }

    public function setDateCmd(\DateTimeInterface $DateCmd): self
    {
        $this->DateCmd = $DateCmd;

        return $this;
    }

    public function getTotalCmd(): ?float
    {
        return $this->TotalCmd;
    }

    public function setTotalCmd(float $TotalCmd): self
    {
        $this->TotalCmd = $TotalCmd;

        return $this;
    }
}
