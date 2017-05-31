<?php

namespace Comportamiento\Visitor;

/**
 * Description of VisitorMain
 *
 * @author novatec
 */
class VisitorMain {

    public static function main() {
        $productoDescuento = new ProductoDescuento();
        $productoDescuento->setPrecio(1000);
        $productoNormal = new ProductoNormal();
        $productoNormal->setPrecio(1000);
        $iva = new IVA();
        write();
        write('Patron de diseno Visitor');
        write('-----Producto Normal---');
        write($productoNormal->accept($iva));
        write('-----Producto Descuento---');
        write($productoDescuento->accept($iva));
    }

}
