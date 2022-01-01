<?php

// aqui podremos indicar el tipo de valor de retorno que la funcion

public function getPlayLength():int{

    return $this->getPlayLength;
}
// tambien los tipo de retorno aceptan los valores de tipo union 

public function getPrice():int | float{
    return ($thi->price - $this->dicount);
}
// en este caso el metodo no debe devolver ningun valor 

public function setDiscount(int|float $num):void{
    $this->discount =$num;
}
?>