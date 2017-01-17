<?php

namespace Comportamiento\Command;

/**
 * Description of LucesLargas
 *
 * @author jonathan
 */
class LucesLargas extends LucesReceiber {

    private static $distancia = 200;

    public function Encender() {
        $this->encendidas = true;
        return self::$distancia;
    }

}
