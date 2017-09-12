<?php

namespace Creacionales\AbstractFactory;

/**
 * Description of Amarillo
 *
 * @author jonathan
 */
class Amarillo extends Color {

    private $esPrimario;

    public function colorea(TV $tv) {
        write("Pintando de amarillo el " . $tv->getDescription());
    }

    public function getEsPrimario() {
        return $this->esPrimario;
    }

    public function setEsPrimario($esPrimario) {
        $this->esPrimario = $esPrimario;
    }

}
