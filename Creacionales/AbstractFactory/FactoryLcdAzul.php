<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Creacionales\AbstractFactory;

/**
 * Description of FactoryLcdAzul
 *
 * @author jonathan
 */
class FactoryLcdAzul extends TvAbstractFactory {

    /**
     * @return TV
     */
    public function createColor(): Color {
        return new Azul();
    }

    /**
     * @return Color
     */
    public function createTV(): TV {
        return new LCD();
    }

}
