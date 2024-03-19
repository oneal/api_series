<?php

namespace App\Entity;

use App\Repository\EpisodiosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EpisodiosRepository::class)]
class Episodios
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'episodios')]
    private ?Series $serie_id = null;

    #[ORM\ManyToOne(inversedBy: 'episodios')]
    private ?Temporadas $temporada_id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titulo = null;

    #[ORM\Column(length: 255)]
    private ?string $descripcion = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(?string $titulo): static
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): static
    {
        $this->descripcion = $descripcion;

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

    public function getSerieId(): ?Series
    {
        return $this->serie_id;
    }

    public function setSerieId(?Series $serie_id): static
    {
        $this->serie_id = $serie_id;

        return $this;
    }

    public function getTemporadaId(): ?Temporadas
    {
        return $this->temporada_id;
    }

    public function setTemporadaId(?Temporadas $temporada_id): void
    {
        $this->temporada_id = $temporada_id;
    }

}
