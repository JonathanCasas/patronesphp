<?php

namespace Comportamiento\Command;

/**
 * Description of LucesCortas
 *
 * @author jonathan
 */
class LucesCortas extends LucesReceiber {

    private static $distancia = 40;

    public function Encender() {
        $this->encendidas = true;
        return self::$distancia;
    }

}
