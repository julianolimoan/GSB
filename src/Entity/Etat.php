<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EtatRepository")
 */
class Etat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FicheFrais")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fichefrais;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getFichefrais(): ?FicheFrais
    {
        return $this->fichefrais;
    }

    public function setFichefrais(?FicheFrais $fichefrais): self
    {
        $this->fichefrais = $fichefrais;

        return $this;
    }
}
