<?php

namespace App\Entity;

use App\Repository\FilmRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FilmRepository::class)]
class Film
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'date',nullable: true)]
    private $date;

    #[ORM\Column(type: 'text')]
    private $synopsis;

    #[ORM\Column(type: 'string', length: 255)]
    private $duree;

    #[ORM\Column(type: 'string', length: 255)]
    private $budget;

    #[ORM\Column(type: 'string')]
    private $genre;

    #[ORM\Column(type: 'string', length: 255)]
    private $realisation;

    #[ORM\Column(type: 'string', length: 255,nullable: true)]
    private $img;

    /**
     * @param $nom
     * @param $date
     * @param $synopsis
     * @param $duree
     * @param $budget
     * @param array $genre
     * @param $realisation
     * @param $img
     */
    public function __construct($nom, $date, $synopsis, $duree, $budget, $genre, $realisation, $img)
    {
        $this->nom = $nom;
        $this->date = $date;
        $this->synopsis = $synopsis;
        $this->duree = $duree;
        $this->budget = $budget;
        $this->genre = $genre;
        $this->realisation = $realisation;
        $this->img = $img;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getBudget(): ?string
    {
        return $this->budget;
    }

    public function setBudget(string $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre($genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getRealisation(): ?string
    {
        return $this->realisation;
    }

    public function setRealisation(string $realisation): self
    {
        $this->realisation = $realisation;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }
}
