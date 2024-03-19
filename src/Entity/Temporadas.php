<?php

namespace App\Entity;

use App\Repository\TemporadasRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TemporadasRepository::class)]
class Temporadas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $num_episodios = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_publicacion = null;

    #[ORM\OneToMany(targetEntity: Episodios::class, mappedBy: 'temporada_id')]
    private Collection $episodios;

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

    public function getNumEpisodios(): ?string
    {
        return $this->num_episodios;
    }

    public function setNumEpisodios(?string $num_episodios): static
    {
        $this->num_episodios = $num_episodios;

        return $this;
    }

    public function getFechaPublicacion(): ?\DateTimeInterface
    {
        return $this->fecha_publicacion;
    }

    public function setFechaPublicacion(?\DateTimeInterface $fecha_publicacion): static
    {
        $this->fecha_publicacion = $fecha_publicacion;

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
            $episodio->setTemporadaId($this);
        }

        return $this;
    }

    public function removeEpisodio(Episodios $episodio): static
    {
        if ($this->episodios->removeElement($episodio)) {
            // set the owning side to null (unless already changed)
            if ($episodio->getTemporadaId() === $this) {
                $episodio->setTemporadaId(null);
            }
        }

        return $this;
    }
}
