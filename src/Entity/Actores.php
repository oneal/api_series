<?php

namespace App\Entity;

use App\Repository\ActoresRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActoresRepository::class)]
class Actores
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $surname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\OneToMany(targetEntity: SeriesActor::class, mappedBy: 'actor_id')]
    private Collection $seriesActors;

    #[ORM\OneToMany(targetEntity: SeriesDirector::class, mappedBy: 'actor_id')]
    private Collection $seriesDirectors;

    public function __construct()
    {
        $this->seriesActors = new ArrayCollection();
        $this->seriesDirectors = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): static
    {
        $this->surname = $surname;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, SeriesActor>
     */
    public function getSeriesActors(): Collection
    {
        return $this->seriesActors;
    }

    public function addSeriesActor(SeriesActor $seriesActor): static
    {
        if (!$this->seriesActors->contains($seriesActor)) {
            $this->seriesActors->add($seriesActor);
            $seriesActor->setActorId($this);
        }

        return $this;
    }

    public function removeSeriesActor(SeriesActor $seriesActor): static
    {
        if ($this->seriesActors->removeElement($seriesActor)) {
            // set the owning side to null (unless already changed)
            if ($seriesActor->getActorId() === $this) {
                $seriesActor->setActorId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, SeriesDirector>
     */
    public function getSeriesDirectors(): Collection
    {
        return $this->seriesDirectors;
    }

    public function addSeriesDirector(SeriesDirector $seriesDirector): static
    {
        if (!$this->seriesDirectors->contains($seriesDirector)) {
            $this->seriesDirectors->add($seriesDirector);
            $seriesDirector->setActorId($this);
        }

        return $this;
    }

    public function removeSeriesDirector(SeriesDirector $seriesDirector): static
    {
        if ($this->seriesDirectors->removeElement($seriesDirector)) {
            // set the owning side to null (unless already changed)
            if ($seriesDirector->getActorId() === $this) {
                $seriesDirector->setActorId(null);
            }
        }

        return $this;
    }
}
