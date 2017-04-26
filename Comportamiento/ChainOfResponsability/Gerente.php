<?php

namespace Comportamiento\ChainOfResponsability;

/**
 * Description of Gerente
 *
 * @author jonathan
 */
class Gerente implements IAprovador{

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
        if ($monto > 50000 && $monto <= 100000) {
            echo 'Lo manejo yo, El Gerente';
        } else {
            $this->next->solicitudPrestamo($monto);
        }
    }

}