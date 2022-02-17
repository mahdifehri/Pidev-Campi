<?php

namespace App\Entity;

use App\Repository\DestinationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DestinationRepository::class)
 */
class Destination
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_dest;

    /**
     * @ORM\Column(type="string", length=256, nullable=true)
     */
    private $nom_dest;

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $geolocalisation_dest;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbr_part_dest;

    /**
     * @ORM\Column(type="string", length=256, nullable=true)
     */
    private $list_event_dest;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdDest(): ?int
    {
        return $this->id_dest;
    }

    public function setIdDest(int $id_dest): self
    {
        $this->id_dest = $id_dest;

        return $this;
    }

    public function getNomDest(): ?string
    {
        return $this->nom_dest;
    }

    public function setNomDest(?string $nom_dest): self
    {
        $this->nom_dest = $nom_dest;

        return $this;
    }

    public function getGeolocalisationDest(): ?string
    {
        return $this->geolocalisation_dest;
    }

    public function setGeolocalisationDest(string $geolocalisation_dest): self
    {
        $this->geolocalisation_dest = $geolocalisation_dest;

        return $this;
    }

    public function getNbrPartDest(): ?int
    {
        return $this->nbr_part_dest;
    }

    public function setNbrPartDest(?int $nbr_part_dest): self
    {
        $this->nbr_part_dest = $nbr_part_dest;

        return $this;
    }

    public function getListEventDest(): ?string
    {
        return $this->list_event_dest;
    }

    public function setListEventDest(?string $list_event_dest): self
    {
        $this->list_event_dest = $list_event_dest;

        return $this;
    }
}
