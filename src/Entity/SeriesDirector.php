<?php

namespace App\Entity;

use App\Repository\SeriesDirectorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeriesDirectorRepository::class)]
class SeriesDirector
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'seriesDirectors')]
    private ?Series $serie_id = null;

    #[ORM\ManyToOne(inversedBy: 'seriesDirectors')]
    private ?Directores $director_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSerieId(): ?Series
    {
        return $this->serie_id;
    }

    public function setSerieId(?Series $serie_id): static
    {
        $this->serie_id = $serie_id;

        return $this;
    }

    public function getDirectorId(): ?Directores
    {
        return $this->director_id;
    }

    public function setDirectorId(?Directores $director_id): void
    {
        $this->director_id = $director_id;
    }

}
