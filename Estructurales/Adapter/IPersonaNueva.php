<?php

namespace Estructurales\Adapter;

/**
 *
 * @author jonathan
 */
interface IPersonaNueva {

    public function getNombre(): string;

    public function setNombre(string $nombre);

    public function getEdad(): int;

    public function setEdad(int $edad);
}
