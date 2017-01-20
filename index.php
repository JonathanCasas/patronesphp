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

/**
 * Patron command
 */
echo 'Patron Command';
$lucesPosicion = new \Comportamiento\Command\LucesPosicion();
$lucesCortas = new \Comportamiento\Command\LucesCortas();
$lucesLargas = new Comportamiento\Command\LucesLargas();

$encenderPosicion = new Comportamiento\Command\EncenderLucesCommand($lucesPosicion);
$apagarPosicion = new \Comportamiento\Command\ApagarLucesCommand($lucesPosicion);

$encenderCortas = new Comportamiento\Command\EncenderLucesCommand($lucesCortas);
$apagarcortas = new \Comportamiento\Command\ApagarLucesCommand($lucesCortas);

$encenderLargas = new Comportamiento\Command\EncenderLucesCommand($lucesLargas);
$apagarLargas = new \Comportamiento\Command\ApagarLucesCommand($lucesLargas);

$controlador = new Comportamiento\Command\ControladorLucesInvoker();
$controlador->setCommand($encenderPosicion);
write($controlador->invoke());
$controlador->setCommand($apagarPosicion);
write($controlador->invoke());

$controlador->setCommand($encenderCortas);
write($controlador->invoke());
$controlador->setCommand($apagarcortas);
write($controlador->invoke());

$controlador->setCommand($encenderLargas);
write($controlador->invoke());
$controlador->setCommand($apagarLargas);
write($controlador->invoke());

echo '<br>';

$proxy = new Estructurales\Proxy\GuardarDatos();
\Estructurales\Proxy\ConnectionManager::conectate();
$proxy->save([]);