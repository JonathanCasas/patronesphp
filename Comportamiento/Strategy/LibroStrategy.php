<?php

namespace Comportamiento\Strategy;

/**
 *
 * @author jonathan
 */
interface LibroStrategy {

    public function findLibro(string $titulo): Libro;
}
