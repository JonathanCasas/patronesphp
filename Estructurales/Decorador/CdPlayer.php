<?php

namespace Estructurales\Decorador;

/**
 * Description of CdPlayer
 *
 * @author jonathan
 */
class CdPlayer extends AutoDecorator {

    public function __construct(Vendible $vendible) {
        parent::__construct($vendible);
    }

    public function getDescripcion() {
        return $this->getVendible()->getDescripcion() . ' + Cd Player';
    }

    public function getPrecio() {
        return $this->getVendible()->getPrecio() + 1500;
    }

}
