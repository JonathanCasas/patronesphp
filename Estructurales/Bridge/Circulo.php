<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Estructurales\Bridge;

/**
 * Description of Circulo
 *
 * @author jonathan
 */
class Circulo extends Forma {

    private $x, $y, $r;

    public function __construct(Dibujo $dibujo, $x, $y, $r) {
        parent::__construct($dibujo);
        $this->x = $x;
        $this->y = $y;
        $this->r = $r;
    }

    public function dibuja() {
        $this->dibujaCirculo($this->x, $this->y, $this->r);
    }

}
