<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Creacionales\AbstractFactory;

/**
 * Description of FactoryPlasmaAmarillo
 *
 * @author jonathan
 */
class FactoryPlasmaAmarillo extends TvAbstractFactory {

    public function createColor(): Color {
        return new Amarillo();
    }

    public function createTV(): TV {
        return new Plasma();
    }

}
