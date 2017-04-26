<?php

namespace Estructurales\Proxy;

/**
 * Description of ObjetoRemoto
 *
 * @author jonathan
 */
class ObjetoRemoto implements IGuardar{
    
    public function save(array $datosAguardar) {
        echo 'guardando datos en el objeto remoto';
    }

}
