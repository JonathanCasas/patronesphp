<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Creacionales\AbstractFactory;

/**
 * Description of AbstractFactory
 *
 * @author jonathan
 */
class AbstractFactory {

    public static function main() {
        $f1 = new FactoryLcdAzul();
        $e = new EnsamblajeTV($f1);

        $f2 = new FactoryPlasmaAmarillo();
        $e2 = new EnsamblajeTV($f2);
    }

}
