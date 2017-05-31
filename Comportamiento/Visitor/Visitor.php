<?php

namespace Comportamiento\Visitor;

/**
 *
 * @author novatec
 */
interface Visitor {

    public function visit(Visitable $producto);
    
}
