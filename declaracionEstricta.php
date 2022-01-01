<?php
// si pasaramos una verificacion de buleano de la siguiente forma
// "false", php lo convertiria implicitamente esto es peligroso
// y para eso se puede habilitar el modo estricto
declare(strict_types=1);

class pruebaBoleano{

    public function reciveBoleano(bool $boleano)
    {
        
    }
}

$ejemplar = new pruebaBoleano();
$ejemplar->reciveBoleano("false");



?>