<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FraisForfaitRepository")
 */
class FraisForfait
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
     * @ORM\Column(type="integer", nullable=true)
     */
    private $montant;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LigneFraisForfait")
     * @ORM\JoinColumn(nullable=false)
     */
    private $lignefraisforfait;

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

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(?int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getLignefraisforfait(): ?LigneFraisForfait
    {
        return $this->lignefraisforfait;
    }

    public function setLignefraisforfait(?LigneFraisForfait $lignefraisforfait): self
    {
        $this->lignefraisforfait = $lignefraisforfait;

        return $this;
    }
}
