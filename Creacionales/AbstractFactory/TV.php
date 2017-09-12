<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Creacionales\AbstractFactory;

/**
 * Description of TV
 *
 * @author jonathan
 */
abstract class TV {

    /**
     * @var string
     */
    private $marca;

    /**
     * @var int
     */
    private $pulgadas;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $description;

    /**
     * @var double
     */
    private $precio;
    //cada uno con sus get y set

    public function __construct() {
        ;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getPulgadas() {
        return $this->pulgadas;
    }

    public function getColor() {
        return $this->color;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setPulgadas($pulgadas) {
        $this->pulgadas = $pulgadas;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

}
