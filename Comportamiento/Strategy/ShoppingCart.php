<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Comportamiento\Strategy;

/**
 * Description of ShoppingCart
 *
 * @author novatec
 */
class ShoppingCart {

    private $items = [];

    public function addItem(Item $item) {
        $this->items[$item->getId()] = $item;
    }

    public function removeItem($itemId) {
        if (isset($this->items[$itemId])) {
            unset($this->items[$itemId]);
        }
    }

    public function getItems() {
        return $this->items;
    }

    public function calculateTotal() {
        $sum = 0;
        foreach ($this->items as $items) {
            $sum += $items->getPrice();
        }
        return $sum;
    }

    public function pay(PaymentInterface $paymentMethod) {
        $amount = $this->calculateTotal();
        return $paymentMethod->pay($amount);
    }

}
