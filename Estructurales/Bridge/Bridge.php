<?php

namespace Estructurales\Bridge;

/**
 * Description of Bridge
 *
 * @author jonathan
 */
class Bridge {

    public static function main() {
        $rectangulo = new Rectangulo(new DibujandoPunteado(), 1, 1, 2, 2);
        $rectangulo->dibuja();
        $circulo = new Circulo(new DibujandoNormal(), 1, 2, 3);
        $circulo->dibuja();
    }

}
