<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Comportamiento\Command;

/**
 * Description of LucesPosicion
 *
 * @author jonathan
 */
class LucesPosicion extends LucesReceiber {

    private static $distancia = 1;

    public function Encender() {
        $this->encendidas = true;
        return self::$distancia;
    }

}
