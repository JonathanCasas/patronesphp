<?php

spl_autoload_register(function($clase) {
    $ruta = "./" . str_replace("\\", "/", $clase) . ".php";
    if (is_file($ruta)) {
        require ($ruta);
    } else {
        echo 'ha ocurrido un error';
    }
});

function write(string $string) {
    echo $string . "<br>";
}

$lucesPosicion = new \Comportamiento\Command\LucesPosicion();
$lucesCortas = new \Comportamiento\Command\LucesCortas();
$lucesLargas = new Comportamiento\Command\LucesLargas();

$encenderPosicion = new Comportamiento\Command\EncenderLucesCommand($lucesPosicion);
$apagarPosicion = new \Comportamiento\Command\ApagarLucesCommand($lucesPosicion);

$encenderCortas = new Comportamiento\Command\EncenderLucesCommand($lucesCortas);
$apagarcortas = new \Comportamiento\Command\ApagarLucesCommand($lucesCortas);

$encenderLargas = new Comportamiento\Command\EncenderLucesCommand($lucesLargas);
$apagarLargas = new \Comportamiento\Command\ApagarLucesCommand($lucesLargas);

write($encenderPosicion->execute());
write($apagarPosicion->execute());

write($encenderCortas->execute());
write($apagarcortas->execute());

write($encenderLargas->execute());
write($apagarLargas->execute());

