<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Comportamiento\Strategy;

/**
 * Description of Main
 *
 * @author novatec
 */
class StrategyMain {

    public static function main() {
        $cart = new ShoppingCart();

        $item1 = new Item(1, '124', 10);
        $item2 = new Item(2, '14', 40);

        $cart->addItem($item1);
        $cart->addItem($item2);

        /** Si mi cliente va usar una tarjeta de crédito, uso esto* */
//Pago con Tarjeta de Crédito
        write($cart->pay(new CreditCartPayment("Jhon W.", "101012123456", "786", "12/15")));
//El resultado sera:
//50 paid with credit/debit card


        /** Si mi cliente va usar su cuenta paypal uso esto* */
//Pago con Paypal
        write($cart->pay(new PaypalPayment("my_email@example.com", "my_password")));
//El resultado sera:
//50 paid using Paypal
    }

}
