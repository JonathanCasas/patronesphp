<?php

namespace Comportamiento\ChainOfResponsability;

/**
 * Description of Banco
 *
 * @author jonathan
 */
class Banco implements IAprovador {

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
        $ejecutivo = new EjecutivoDeCuenta();
        $this->setNext($ejecutivo);

        $lider = new LiderTeamEjecutivo();
        $ejecutivo->setNext($lider);

        $gerente = new Gerente();
        $lider->setNext($gerente);

        $director = new Director();
        $gerente->setNext($director);

        $this->next->solicitudPrestamo($monto);
    }

}
