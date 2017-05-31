<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Comportamiento\ChainOfResponsability;

/**
 * Description of IAprovador
 *
 * @author jonathan
 */
interface IAprovador {

    public function setNext(IAprovador $Iaprovador);

    public function getNext(): IAprovador;

    public function solicitudPrestamo(int $monto);
}
