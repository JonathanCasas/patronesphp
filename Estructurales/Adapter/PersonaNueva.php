<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Estructurales\Adapter;

/**
 * Description of PersonaNueva
 *
 * @author jonathan
 */
class PersonaNueva implements IPersonaNueva {

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var int
     */
    private $edad;

    public function getEdad(): int {
        return $this->edad;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setEdad(int $edad) {
        $this->edad = $edad;
    }

    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

}
