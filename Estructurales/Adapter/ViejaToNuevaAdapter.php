<?php

namespace Estructurales\Adapter;

/**
 * Description of ViejaToNuevaAdapter
 *
 * @author jonathan
 */
class ViejaToNuevaAdapter implements IPersonaNueva {

    /**
     * @var IPersonaVieja
     */
    private $personaVieja;

    public function __construct(IPersonaVieja $personaVieja) {
        $this->personaVieja = $personaVieja;
    }

    public function getEdad(): int {
        $this->personaVieja->getFechaDeNacimiento();
        $hoy = new \DateTime();
        $anios = $hoy->diff($this->personaVieja->getFechaDeNacimiento());
        return $anios->y;
    }

    public function getNombre(): string {
        return $this->personaVieja->getNombre() . ' ' . $this->personaVieja->getApellido();
    }

    public function setEdad(int $edad) {
        $anioActual = date("Y");
        $anio = $anioActual - $edad;
        $dateTime = new \DateTime();
        $dateTime->setDate($anio, $dateTime->m, $dateTime->d);
    }

    public function setNombre(string $nombre) {
        $nombreCompleto = explode(" ", $nombre);
        $this->personaVieja->setNombre($nombreCompleto[0]);
        if (isset($nombreCompleto[1])) {
            $this->personaVieja->setApellido($nombreCompleto[1]);
        } else {
            $this->personaVieja->setApellido("");
        }
    }

}
