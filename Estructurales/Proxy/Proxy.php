<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Estructurales\Proxy;

/**
 * Description of Proxy
 *
 * @author jonathan
 */
class Proxy {

    public static function main() {
        $guardarDatos = new GuardarDatos();
        $guardarDatos->save(['dato1' => 'dato']);
    }

}
