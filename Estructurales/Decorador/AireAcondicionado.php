<?php

namespace Estructurales\Decorador;

/**
 * Description of AireAcondicionado
 *
 * @author jonathan
 */
class AireAcondicionado extends AutoDecorator {

    public function __construct(Vendible $vendible) {
        parent::__construct($vendible);
    }

    public function getDescripcion() {
        return $this->getVendible()->getDescripcion() . ' + Aire Acondicionado';
    }

    public function getPrecio() {
        return $this->getVendible()->getPrecio() + 2000;
    }

}
