<?php

namespace Estructurales\Proxy;

/**
 * Description of GuardarDiscoDuro
 *
 * @author jonathan
 */
class GuardarDiscoDuro implements IGuardar{
    
    public function save(array $datosAguardar) {
        echo 'guardando datos en el disco duro';
    }
    

}
