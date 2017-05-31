<?php

namespace Comportamiento\Visitor;

/**
 *
 * @author novatec
 */
interface Visitable {

    public function accept(Visitor $visitor): float;
}
