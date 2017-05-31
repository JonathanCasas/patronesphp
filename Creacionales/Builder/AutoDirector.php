<?php

namespace Creacionales\Builder;

/**
 * Description of AutoDirector
 *
 * @author jonathan
 */
class AutoDirector {

    /**
     * @var AutoBuilder
     */
    private $autoBuilder;

    public function constructAuto() {
        $this->autoBuilder->crearAuto();
        $this->autoBuilder->buildMarca();
        $this->autoBuilder->buildModelo();
        $this->autoBuilder->buildMotor();
        $this->autoBuilder->buildPuertas();
    }

    public function setAutoBuilder(AutoBuilder $autoBuilder) {
        $this->autoBuilder = $autoBuilder;
    }
    
    public function getAuto(){
        return $this->autoBuilder->getAuto();
    }

}
