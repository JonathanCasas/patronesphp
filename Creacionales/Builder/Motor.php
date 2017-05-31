<?php

namespace Creacionales\Builder;

/**
 * Description of Motor
 *
 * @author jonathan
 */
class Motor {

    private $numero;
    private $potencia;

    public function getNumero() {
        return $this->numero;
    }

    public function getPotencia() {
        return $this->potencia;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setPotencia($potencia) {
        $this->potencia = $potencia;
    }

}
