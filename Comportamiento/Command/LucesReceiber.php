<?php

namespace Comportamiento\Command;

/**
 * Description of LucesReceiber
 *
 * @author jonathan
 */
abstract class LucesReceiber{

    private $encendidas;
    private $distanciaAlumbrado;

    public function Encendidas() {
        return $this->encendidas;
    }

    public function Apagar() {
        $this->encendidas = false;
    }

    public abstract function Encender();
}
