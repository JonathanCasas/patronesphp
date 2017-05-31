<?php

namespace Comportamiento\ChainOfResponsability;

/**
 * Description of LiderTeamEjecutivo
 *
 * @author jonathan
 */
class LiderTeamEjecutivo implements IAprovador {

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
        if ($monto > 1000 && $monto <= 50000) {
            echo 'Lo manejo yo, El lider';
        } else {
            $this->next->solicitudPrestamo($monto);
        }
    }

}
