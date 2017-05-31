<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Creacionales\Builder;

/**
 * Description of Main
 *
 * @author jonathan
 */
class Builder {

    public static function main() {
        $autoDirector = new AutoDirector();
        $autoDirector->setAutoBuilder(new FordBuilder());
        $autoDirector->constructAuto();
        $auto = $autoDirector->getAuto();
        write($auto->getMarca());
    }

}
