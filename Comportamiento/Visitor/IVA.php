<?php

namespace Comportamiento\Visitor;

/**
 * Description of IVA
 *
 * @author novatec
 */
class IVA implements Visitor {

    const impuestoNormal = 1.21;
    const impuestoReducido = 1.105;

    public function visit(Visitable $producto) {
        if ($producto instanceof ProductoNormal) {
            return $this->visit1($producto);
        } else if ($producto instanceof ProductoDescuento) {
            return $this->visit2($producto);
        }
        return null;
    }

    private function visit1(Visitable $producto) {
        return $producto->getPrecio() * self::impuestoNormal;
    }

    private function visit2(Visitable $producto) {
        return $producto->getPrecio() * self::impuestoReducido;
    }

}
