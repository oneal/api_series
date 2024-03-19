<?php

namespace App\Entity;

use App\Repository\SeriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeriesRepository::class)]
class Series
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sinopsi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cartel = null;

    #[ORM\OneToMany(targetEntity: Episodios::class, mappedBy: 'serie_id')]
    private Collection $episodios;

    #[ORM\OneToMany(targetEntity: SeriesActor::class, mappedBy: 'serie_id')]
    private Collection $seriesActors;

    #[ORM\OneToMany(targetEntity: SeriesDirector::class, mappedBy: 'serie_id')]
    private Collection $seriesDirectors;

    public function __construct()
    {
        $this->episodios = new ArrayCollection();
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

    /**
     * @return Collection<int, Episodios>
     */
    public function getEpisodios(): Collection
    {
        return $this->episodios;
    }

    public function addEpisodio(Episodios $episodio): static
    {
        if (!$this->episodios->contains($episodio)) {
            $this->episodios->add($episodio);
            $episodio->setSerieId($this);
        }

        return $this;
    }

    public function removeEpisodio(Episodios $episodio): static
    {
        if ($this->episodios->removeElement($episodio)) {
            // set the owning side to null (unless already changed)
            if ($episodio->getSerieId() === $this) {
                $episodio->setSerieId(null);
            }
        }

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
            $seriesActor->setSerieId($this);
        }

        return $this;
    }

    public function removeSeriesActor(SeriesActor $seriesActor): static
    {
        if ($this->seriesActors->removeElement($seriesActor)) {
            // set the owning side to null (unless already changed)
            if ($seriesActor->getSerieId() === $this) {
                $seriesActor->setSerieId(null);
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
            $seriesDirector->setSerieId($this);
        }

        return $this;
    }

    public function removeSeriesDirector(SeriesDirector $seriesDirector): static
    {
        if ($this->seriesDirectors->removeElement($seriesDirector)) {
            // set the owning side to null (unless already changed)
            if ($seriesDirector->getSerieId() === $this) {
                $seriesDirector->setSerieId(null);
            }
        }

        return $this;
    }

}
