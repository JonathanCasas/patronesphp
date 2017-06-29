<?php

namespace Estructurales\Decorador;

/**
 * Description of FiatAuto
 *
 * @author jonathan
 */
class FiatAuto extends Auto{
    
    public function getDescripcion() {
        return "Auto Fiat";
    }

    public function getPrecio() {
        return 150000;
    }
    
    

}
