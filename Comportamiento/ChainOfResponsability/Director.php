<?php

namespace Comportamiento\ChainOfResponsability;

/**
 * Description of Director
 *
 * @author jonathan
 */
class Director implements IAprovador {

    /**
     * @var IAprovador
     */
    private $next;

    public function getNext(): IAprovador {
        return $this->next;
    }

    public function setNext(IAprovador $Iaprovador) {
        $this->next = $Iaprovador;
    }

    public function solicitudPrestamo(int $monto) {
        if ($monto > 100000) {
            echo 'Lo manejo yo, El Director';
        } 
    }

}
