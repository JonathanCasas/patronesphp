<?php

namespace Creacionales\AbstractFactory;

/**
 * Description of EnsamblajeTV
 *
 * @author jonathan
 */
class EnsamblajeTV {

    public function __construct(TvAbstractFactory $factory) {
        $color = $factory->createColor();
        $tv = $factory->createTV();
        $color->colorea($tv);
    }

}
