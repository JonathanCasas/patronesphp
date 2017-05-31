<?php

namespace Creacionales\Builder;

/**
 * Description of AutoBuilder
 *
 * @author jonathan
 */
abstract class AutoBuilder {

    /**
     * @var Auto
     */
    private $auto;

    public function getAuto() {
        return $this->auto;
    }

    public function crearAuto() {
        $this->auto = new Auto();
    }

    public abstract function buildMotor();

    public abstract function buildModelo();

    public abstract function buildMarca();

    public abstract function buildPuertas();
}
