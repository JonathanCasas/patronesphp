<?php

namespace Estructurales\Adapter;

/**
 * Description of Adapter
 *
 * @author jonathan
 */
class Adapter {

    public function __construct() {
        
    }

    public static function main() {
        $personaVieja = new PersonaVieja();
        $personaVieja->setApellido("Casas");
        $personaVieja->setNombre("Jonathan");
        $date = new \DateTime();
        $date->setDate(1994, 8, 18);
        $personaVieja->setFechaDeNacimiento($date);
        
        //pasamos a adaptar
        $personaNueva=new ViejaToNuevaAdapter($personaVieja);
        write($personaNueva->getEdad());
        write($personaNueva->getNombre());
        $personaNueva->setEdad(23);
        $personaNueva->setNombre("David Casas");
        write($personaNueva->getEdad());
        write($personaNueva->getNombre());
    }

}
