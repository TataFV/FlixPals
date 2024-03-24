<?php

namespace App\Entity;

use App\Repository\VotacionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VotacionRepository::class)]
class Votacion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Evento::class)]
    private Evento $evento;

    #[ORM\ManyToOne(targetEntity: Usuario::class)]
    private Usuario $usuario;

    #[ORM\Column]
    private int $votacion;

    public function getId(): ?int
    {
        return $this->id;
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
    public function getVotacion(): int
    {
        return $this->votacion;
    }
    public function setVotacion(int $votacion): static
    {
        $this->votacion = $votacion;

        return $this;
    }
}
