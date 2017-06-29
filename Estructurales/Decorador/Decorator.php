<?php

namespace Estructurales\Decorador;

/**
 * Description of Decorator
 *
 * @author jonathan
 */
class Decorator {

    public static function main() {
        $vendible = new FiatAuto();
        $vendible = new CdPlayer($vendible);
        $vendible = new AireAcondicionado($vendible);
        write($vendible->getDescripcion());
        write("su precio es" . $vendible->getPrecio());
    }

}
