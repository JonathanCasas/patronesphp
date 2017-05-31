<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Creacionales\Builder;

/**
 * Description of FordBuilder
 *
 * @author jonathan
 */
class FordBuilder extends AutoBuilder {

    public function buildMarca() {
        $this->getAuto()->setMarca('Ford');
    }

    public function buildModelo() {
        $this->getAuto()->setModelo(1998);
    }

    public function buildMotor() {
        $motor = new Motor();
        $motor->setNumero(1567845);
        $motor->setPotencia("27 HP");
        $this->getAuto()->setMotor($motor);
    }

    public function buildPuertas() {
        $this->getAuto()->setCantidadPuertas(5);
    }

}
