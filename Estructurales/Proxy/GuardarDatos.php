<?php

namespace Estructurales\Proxy;

/**
 * Description of GuardarDatos
 *
 * @author jonathan
 */
class GuardarDatos implements IGuardar {

    public function save(array $datosAguardar) {
        if (ConnectionManager::hayConexion()) {
            $objetoRemoto = new ObjetoRemoto();
            $objetoRemoto->save($datosAguardar);
        }else{
            $guardarDiscoDuro=new GuardarDiscoDuro();
            $guardarDiscoDuro->save($datosAguardar);
        }
    }

}
