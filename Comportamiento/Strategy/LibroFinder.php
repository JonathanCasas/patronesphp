<?php

namespace Comportamiento\Strategy;

/**
 * Description of LibroFinder
 *
 * @author jonathan
 */
class LibroFinder {

    public function findLibro(Persona $persona, string $titulo): Libro {
        $strategy = null;
        if ($persona instanceof Socio) {
            $strategy = new NuevoStrategy();
        } else if ($persona instanceof Profesor) {
            $strategy = new BuenoStrategy();
        } else {
            $strategy = new RegularStrategy();
        }
        return $strategy->findLibro($titulo);
    }

}
