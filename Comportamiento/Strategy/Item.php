<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Comportamiento\Strategy;

/**
 * Description of Item
 *
 * @author novatec
 */
class Item {

    private $id;
    private $upcCode;
    private $price;

    public function __construct($id, $upc, $cost) {
        $this->id = $id;
        $this->upcCode = $upc;
        $this->price = $cost;
    }

    public function getId() {
        return $this->id;
    }

    public function getUpcCode() {
        return $this->upcCode;
    }

    public function getPrice() {
        return $this->price;
    }

}
