<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Estructurales\Bridge;

/**
 * Description of DibujandoNormal
 *
 * @author jonathan
 */
class DibujandoNormal extends Dibujo {

    public function dibujaCirculo(float $x, float $y, float $r) {
        write('dibujando un circulo Normal');
    }

    public function dibujaRectangulo(float $x1, float $y1, float $x2, float $y2) {
        write('dibujando un rectangulo normal');
    }

}
