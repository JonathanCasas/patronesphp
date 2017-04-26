<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Comportamiento\ChainOfResponsability;

/**
 * Description of EjecutivoDeCuenta
 *
 * @author jonathan
 */
class EjecutivoDeCuenta implements IAprovador {

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
        if ($monto <= 1000) {
            echo 'Lo manejo yo, el ejecutivo de cuentas';
        } else {
            $this->next->solicitudPrestamo($monto);
        }
    }

}
