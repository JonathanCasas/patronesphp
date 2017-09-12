<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Creacionales\AbstractFactory;

/**
 * Description of TvAbstractFactory
 *
 * @author jonathan
 */
abstract class TvAbstractFactory {

    /**
     * @return TV
     */
    public abstract function createTV();

    /**
     * @return Color
     */
    public abstract function createColor();
}
