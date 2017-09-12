<?php

namespace Creacionales\AbstractFactory;

/**
 * Description of Azul
 *
 * @author jonathan
 */
class Azul extends Color {

    private $esPrimario;
    
    public function colorea(TV $tv) {
        write("pintado de azul el " . $tv->getDescription());
    }
    
    public function getEsPrimario() {
        return $this->esPrimario;
    }

    public function setEsPrimario($esPrimario) {
        $this->esPrimario = $esPrimario;
    }

}
