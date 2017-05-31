<?php

namespace Comportamiento\Mediator;

/**
 * Description of Mediator
 *
 * @author jonathan
 */
class Mediator {

    public static function main() {
        $salonChat = new SalonDeChat();

        $usuario1 = new Usuario($salonChat);
        $usuario1->setNombre("u1");
        $salonChat->registra($usuario1);

        $usuario2 = new Usuario($salonChat);
        $usuario2->setNombre("u2");
        $salonChat->registra($usuario2);

        $usuario3 = new Usuario($salonChat);
        $usuario3->setNombre("u3");
        $salonChat->registra($usuario3);

        $usuario1->envia("u2", "mensaje de u1 a u2");
        $usuario2->envia("u1", "respuesta de u2 a u1");
        $usuario3->envia("u4", "validando");
    }

}
