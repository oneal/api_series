<?php

namespace App\Entity;

use App\Repository\SeriesActorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeriesActorRepository::class)]
class SeriesActor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'seriesActors')]
    private ?Series $serie_id = null;

    #[ORM\ManyToOne(inversedBy: 'seriesActors')]
    private ?Actores $actor_id = null;

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

    public function getActorId(): ?Actores
    {
        return $this->actor_id;
    }

    public function setActorId(?Actores $actor_id): static
    {
        $this->actor_id = $actor_id;

        return $this;
    }
}
