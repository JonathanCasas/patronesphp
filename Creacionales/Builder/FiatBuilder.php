<?php

namespace Creacionales\Builder;

/**
 * Description of FiatBuilder
 *
 * @author jonathan
 */
class FiatBuilder extends AutoBuilder {

    public function buildMarca() {
        $this->getAuto()->setMarca('Fiat');
    }

    public function buildModelo() {
        $this->getAuto()->setModelo(1994);
    }

    public function buildMotor() {
        $motor = new Motor();
        $motor->setNumero(1567845);
        $motor->setPotencia("23 HP");
        $this->getAuto()->setMotor($motor);
    }

    public function buildPuertas() {
        $this->getAuto()->setCantidadPuertas(5);
    }

}
