<?php

namespace Estructurales\Bridge;

/**
 * Description of Forma
 *
 * @author jonathan
 */
abstract class Forma {

    private $dibujo;

    public function __construct(Dibujo $dibujo) {
        $this->dibujo = $dibujo;
    }

    public abstract function dibuja();

    public function dibujaRectangulo(float $x1, float $y1, float $x2, float $y2) {
        $this->dibujo->dibujaRectangulo($x1, $y1, $x2, $y2);
    }

    public function dibujaCirculo(float $x, float $y, float $r) {
        $this->dibujo->dibujaCirculo($x, $y, $r);
    }

}
