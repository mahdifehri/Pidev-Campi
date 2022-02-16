<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PanierRepository::class)
 */
class Panier
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
    private $nbr_produit;

    /**
     * @ORM\Column(type="integer")
     */
    private $Total_Produit;

    /**
     * @ORM\OneToMany(targetEntity=Produit::class, mappedBy="panier")
     */
    private $produits;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbrProduit(): ?int
    {
        return $this->nbr_produit;
    }

    public function setNbrProduit(int $nbr_produit): self
    {
        $this->nbr_produit = $nbr_produit;

        return $this;
    }

    public function getTotalProduit(): ?int
    {
        return $this->Total_Produit;
    }

    public function setTotalProduit(int $Total_Produit): self
    {
        $this->Total_Produit = $Total_Produit;

        return $this;
    }

    /**
     * @return Collection|Produit[]
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
            $produit->setPanier($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getPanier() === $this) {
                $produit->setPanier(null);
            }
        }

        return $this;
    }
}
