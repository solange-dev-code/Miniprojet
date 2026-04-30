<?php

namespace App\Entity;

use App\Repository\FiliereRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FiliereRepository::class)]
class Filiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToOne(targetEntity: Etablissement::class, inversedBy: 'filieres')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Etablissement $etablissement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $code = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $niveau = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $statut = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    public function getId(): ?int { return $this->id; }

    public function getLibelle(): ?string { return $this->libelle; }
    public function setLibelle(?string $libelle): self { $this->libelle = $libelle; return $this; }

    public function getDescription(): ?string { return $this->description; }
    public function setDescription(?string $description): self { $this->description = $description; return $this; }

    public function getEtablissement(): ?Etablissement { return $this->etablissement; }
    public function setEtablissement(?Etablissement $etablissement): self { $this->etablissement = $etablissement; return $this; }

    public function getCode(): ?string { return $this->code; }
    public function setCode(?string $code): self { $this->code = $code; return $this; }

    public function getNiveau(): ?string { return $this->niveau; }
    public function setNiveau(?string $niveau): self { $this->niveau = $niveau; return $this; }

    public function getStatut(): ?string { return $this->statut; }
    public function setStatut(?string $statut): self { $this->statut = $statut; return $this; }

    public function getNom(): ?string { return $this->nom ?? $this->libelle; }
    public function setNom(?string $nom): self
    {
        $this->nom = $nom;
        if ($nom) { $this->libelle = $nom; }
        return $this;
    }
}