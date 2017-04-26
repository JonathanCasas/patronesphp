<?php

namespace Comportamiento\Strategy;

/**
 * Description of Libro
 *
 * @author jonathan
 */
class Libro {

    private $estado;
    private $titulo;
    
    function getEstado() {
        return $this->estado;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }



}
