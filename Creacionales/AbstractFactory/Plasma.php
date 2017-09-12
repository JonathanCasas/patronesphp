<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Creacionales\AbstractFactory;

/**
 * Description of Plasma
 *
 * @author jonathan
 */
class Plasma extends TV {

    private $anguloVision;
    private $tiempoRespuesta;

    public function __construct() {
        parent::__construct();
        $this->setDescription("Plasma");
    }
    
    public function getAnguloVision() {
        return $this->anguloVision;
    }

    public function getTiempoRespuesta() {
        return $this->tiempoRespuesta;
    }

    public function setAnguloVision($anguloVision) {
        $this->anguloVision = $anguloVision;
    }

    public function setTiempoRespuesta($tiempoRespuesta) {
        $this->tiempoRespuesta = $tiempoRespuesta;
    }

}
