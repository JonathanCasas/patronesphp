<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Estructurales\Bridge;

/**
 * Description of Dibujo
 *
 * @author jonathan
 */
abstract class Dibujo {

    public abstract function dibujaRectangulo(float $x1, float $y1, float $x2, float $y2);

    public abstract function dibujaCirculo(float $x, float $y, float $r);
}
