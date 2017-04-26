<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Comportamiento\Strategy;

/**
 * Description of Persona
 *
 * @author jonathan
 */
class Persona {

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    function setApellido(string $apellido) {
        $this->apellido = $apellido;
    }

}
