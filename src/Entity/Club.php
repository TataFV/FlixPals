<?php

namespace App\Entity;

use App\Repository\ClubRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClubRepository::class)]
class Club
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $id_invitacion = null;

    #[ORM\Column(length: 100)]
    private ?string $nombre = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fecha_creacion = null;

    #[ORM\Column(length: 255)]
    private ?string $imagen = null;

    #[ORM\Column]
    private ?float $saldo = null;

    #[ORM\OneToMany(targetEntity: Usuario::class, mappedBy: 'club')]
    private Collection $miembros;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getIdInvitacion(): ?string
    {
        return $this->id_invitacion;
    }

    public function setIdInvitacion(string $id_invitacion): static
    {
        $this->id_invitacion = $id_invitacion;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getFechaCreacion(): ?\DateTimeInterface
    {
        return $this->fecha_creacion;
    }

    public function setFechaCreacion(\DateTimeInterface $fecha_creacion): static
    {
        $this->fecha_creacion = $fecha_creacion;

        return $this;
    }

    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(string $imagen): static
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function getSaldo(): ?float
    {
        return $this->saldo;
    }

    public function setSaldo(float $saldo): static
    {
        $this->saldo = $saldo;

        return $this;
    }

    public function getMiembros(): Collection
    {
        return $this->miembros;
    }

    public function addMiembro(Usuario $miembro): static
    {
        if (!$this->miembros->contains($miembro)) {
            $this->miembros->add($miembro);
            $miembro->setClub($this);
        }

        return $this;
    }

    public function removeMiembro(Usuario $usuario): static
    {
        if ($this->miembros->removeElement($usuario)) {
            // set the owning side to null (unless already changed)
            if ($usuario->getClub() === $this) {
                $usuario->setClub(null);
            }
        }

        return $this;
    }
}
