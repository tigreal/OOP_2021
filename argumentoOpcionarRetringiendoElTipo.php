<?php



class ConfReader{
// podemos restringir su tipo con un valor por defecto
    public function getValues(array $default = [])
    {

        $values=[];
    // aqui juntamos el valor por defecto y el array mandado 
    // con esta funciona restringimos el tipo
    // y devolviendo un valor juntado total
        $values= array_merge($default,$values);
        return $values; 
    }

}
$matriz=array("one","two","tree","four");
$ejemplar= new ConfReader();
$ejemplar->getValues($matriz);


?>