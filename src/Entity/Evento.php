<?php

namespace App\Entity;

use App\Repository\EventoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventoRepository::class)]
class Evento
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre_pelicula = null;

    #[ORM\Column(length: 255)]
    private ?string $id_pelicula = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fecha_creacion_evento = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $fecha = null;

    #[ORM\Column(length: 255)]
    private ?string $trailer_pelicula = null;

    #[ORM\Column(length: 255)]
    private ?string $ubicacion = null;

    #[ORM\Column(length: 255)]
    private ?float $precio_entrada = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombrePelicula(): ?string
    {
        return $this->nombre_pelicula;
    }

    public function setNombrePelicula(string $nombre_pelicula): static
    {
        $this->nombre_pelicula = $nombre_pelicula;

        return $this;
    }

    public function getIdPelicula(): ?string
    {
        return $this->id_pelicula;
    }

    public function setIdPelicula(string $id_pelicula): static
    {
        $this->id_pelicula = $id_pelicula;

        return $this;
    }

    public function getFechaCreacionEvento(): ?\DateTimeInterface
    {
        return $this->fecha_creacion_evento;
    }

    public function setFechaCreacionEvento(\DateTimeInterface $fecha_creacion_evento): static
    {
        $this->fecha_creacion_evento = $fecha_creacion_evento;

        return $this;
    }

    public function getFecha(): ?\DateTimeImmutable
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeImmutable $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getTrailerPelicula(): ?string
    {
        return $this->trailer_pelicula;
    }

    public function setTrailerPelicula(string $trailer_pelicula): static
    {
        $this->trailer_pelicula = $trailer_pelicula;

        return $this;
    }

    public function getUbicacion(): ?string
    {
        return $this->ubicacion;
    }

    public function setUbicacion(string $ubicacion): static
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    public function getPrecioEntrada(): ?float
    {
        return $this->precio_entrada;
    }

    public function setPrecioEntrada(float $precio_entrada): static
    {
        $this->precio_entrada = $precio_entrada;

        return $this;
    }

}
