<?php

namespace App\Entity;

use App\Repository\AsistenciaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AsistenciaRepository::class)]
class Asistencia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Usuario::class)]
    private Usuario $asistente;

    #[ORM\ManyToOne(targetEntity: Evento::class)]
    private Evento $evento;

    #[ORM\Column(type: "string", enumType: EstadoAsistencia::class)]
    private EstadoAsistencia $estado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAsistente(): Usuario
    {
        return $this->asistente;
    }

    public function getEvento(): Evento
    {
        return $this->evento;
    }

    public function setEvento(evento $evento): static
    {
        $this->evento = $evento;

        return $this;
    }

    public function setAsistente(string $asistente): static
    {
        $this->asistente = $asistente;

        return $this;
    }
    public function getEstado(): EstadoAsistencia
    {
        return $this->estado;
    }

    public function setEstado(EstadoAsistencia $estado): static
    {
        $this->estado = $estado;

        return $this;
    }
    


}
