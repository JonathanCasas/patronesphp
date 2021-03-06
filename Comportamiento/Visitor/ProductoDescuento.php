<?php

namespace Comportamiento\Visitor;

/**
 * Description of ProductoDescuento
 *
 * @author novatec
 */
class ProductoDescuento implements Visitable {

    private $precio;

    public function accept(Visitor $visitor): float {
        return $visitor->visit($this);
    }

    
    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

}
