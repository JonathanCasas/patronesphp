<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Estructurales\Adapter;

/**
 * Description of PersonaVieja
 *
 * @author jonathan
 */
class PersonaVieja implements IPersonaVieja {

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var Date
     */
    private $fechaDeNacimiento;

    public function getApellido(): string {
        return $this->apellido;
    }

    public function getFechaDeNacimiento(): \DateTime {
        return $this->fechaDeNacimiento;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setApellido(string $apellido) {
        $this->apellido = $apellido;
    }

    public function setFechaDeNacimiento(\DateTime $fecha) {
        $this->fechaDeNacimiento = $fecha;
    }

    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

}
