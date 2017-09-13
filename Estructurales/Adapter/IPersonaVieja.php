<?php

namespace Estructurales\Adapter;

/**
 *
 * @author jonathan
 */
interface IPersonaVieja {

    public function getNombre(): string;

    public function setNombre(string $nombre);

    public function getApellido(): string;

    public function setApellido(string $apellido);

    public function getFechaDeNacimiento(): \DateTime;

    public function setFechaDeNacimiento(\DateTime $fecha);
}
