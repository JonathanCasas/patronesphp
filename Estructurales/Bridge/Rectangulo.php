<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Estructurales\Bridge;

/**
 * Description of Rectangulo
 *
 * @author jonathan
 */
class Rectangulo extends Forma {

    private $x1, $y1, $x2, $y2;

    public function __construct(Dibujo $dibujo, $x1, $y1, $x2, $y2) {
        parent::__construct($dibujo);
        $this->x1 = $x1;
        $this->y1 = $y1;
        $this->x2 = $x2;
        $this->y2 = $y2;
    }

    public function dibuja() {
        $this->dibujaRectangulo($this->x1, $this->y1, $this->x2, $this->y2);
    }

}
