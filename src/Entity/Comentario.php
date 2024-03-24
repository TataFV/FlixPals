<?php

namespace App\Entity;

use App\Repository\ComentarioRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComentarioRepository::class)]
class Comentario
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fecha_creacion= null;

    #[ORM\ManyToOne(targetEntity: Evento::class)]
    private Evento $evento;

    #[ORM\ManyToOne(targetEntity: Usuario::class)]
    private Usuario $usuario;

    #[ORM\Column(length: 255)]
    private ?string $comentario = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getFechaCreacion(): ?string
    {
        return $this->fecha_creacion;
    }

    public function setFechaCreacion(string $fecha_creacion): static
    {
        $this->fecha_creacion = $fecha_creacion;

        return $this;
    }
    public function getComentario(): ?string
    {
        return $this->comentario;
    }

    public function setComentario(string $comentario): static
    {
        $this->comentario = $comentario;

        return $this;
    }

    public function getEvento(): ?Evento
    {
        return $this->evento;
    }

    public function setEvento(evento $evento): static
    {
        $this->evento = $evento;

        return $this;
    }
    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(string $usuario): static
    {
        $this->usuario = $usuario;

        return $this;
    }
}