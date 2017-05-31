<?php

namespace Creacionales\Builder;

/**
 * Description of Auto
 *
 * @author jonathan
 */
class Auto {
    private $cantidadPuertas;
    private $modelo;
    private $marca;
    private $motor;
    
    public function getCantidadPuertas() {
        return $this->cantidadPuertas;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getMotor() {
        return $this->motor;
    }

    public function setCantidadPuertas($cantidadPuertas) {
        $this->cantidadPuertas = $cantidadPuertas;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setMotor($motor) {
        $this->motor = $motor;
    }
}
