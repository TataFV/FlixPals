<?php
namespace App\Entity;

enum EstadoAsistencia: string
{
    case Confirmado = "ok";
    case Cancelado = "c";
    case PendientePago = "p";
}