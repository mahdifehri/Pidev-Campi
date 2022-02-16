<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Float_;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Designation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Quantite;

    /**
     * @ORM\Column(type="integer")
     */
    private $Prix;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="produits")
     */
    private $categorie;

    /**
     * @ORM\ManyToOne(targetEntity=Produit::class, inversedBy="produits")
     */
    private $produit;

    /**
     * @ORM\OneToMany(targetEntity=Produit::class, mappedBy="produit")
     */
    private $produits;

    /**
     * @ORM\ManyToOne(targetEntity=Panier::class, inversedBy="produits")
     */
    private $panier;

    /**
     * @ORM\ManyToOne(targetEntity=Fournisseur::class, inversedBy="produits")
     */
    private $fournisseur;

    /**
     * @ORM\Column(type="guid")
     */
    private $Image;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }



    /**
     * @ORM\Column(type="string", length=255)
     */


    public function getId(): ?int
    {
        return $this->id;
    }




    public function getQuantite(): ?string
    {
        return $this->Quantite;
    }

    public function setQuantite(string $Quantite): self
    {
        $this->Quantite = $Quantite;

        return $this;
    }

    public function getPrix(): ?Float_
    {
        return $this->Prix;
    }

    public function setPrix(int $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getProduit(): ?self
    {
        return $this->produit;
    }

    public function setProduit(?self $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(self $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
            $produit->setProduit($this);
        }

        return $this;
    }

    public function removeProduit(self $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getProduit() === $this) {
                $produit->setProduit(null);
            }
        }

        return $this;
    }

    public function getPanier(): ?Panier
    {
        return $this->panier;
    }

    public function setPanier(?Panier $panier): self
    {
        $this->panier = $panier;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }




}
