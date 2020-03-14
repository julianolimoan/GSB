<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FicheFraisRepository")
 */
class FicheFrais
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $mois;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nbJustificatifs;

    /**
     * @ORM\Column(type="decimal", precision=7, scale=2, nullable=true)
     */
    private $montantValide;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateModif;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Visiteur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $visiteur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMois(): ?string
    {
        return $this->mois;
    }

    public function setMois(?string $mois): self
    {
        $this->mois = $mois;

        return $this;
    }

    public function getNbJustificatifs(): ?string
    {
        return $this->nbJustificatifs;
    }

    public function setNbJustificatifs(?string $nbJustificatifs): self
    {
        $this->nbJustificatifs = $nbJustificatifs;

        return $this;
    }

    public function getMontantValide(): ?string
    {
        return $this->montantValide;
    }

    public function setMontantValide(?string $montantValide): self
    {
        $this->montantValide = $montantValide;

        return $this;
    }

    public function getDateModif(): ?\DateTimeInterface
    {
        return $this->dateModif;
    }

    public function setDateModif(?\DateTimeInterface $dateModif): self
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    public function getVisiteur(): ?Visiteur
    {
        return $this->visiteur;
    }

    public function setVisiteur(?Visiteur $visiteur): self
    {
        $this->visiteur = $visiteur;

        return $this;
    }
}
