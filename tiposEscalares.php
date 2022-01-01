<?php
class ShopProduct{
    public $title;
    public $producerMainName;
    public $producerFistName;
    public $price=0;

    public function __construct(string $title,string $producerMainName,string $producerFirstName,float $price)
    {
        $this->title=$title;
        $this->producerMainName=$producerMainName;
        $this->producerFirstName=$producerFirstName;
        $this->price=$price;

    }
    


}
// esto dejara que se pueda colocar un array donde deberia ir un float
$ejemplar = new ShopProduct('titulo','Osmar','Fermin',[]);
// pero este funcionaria ya que php, implisitamente trasformaria el valor en 
// cadena a un float esto es peligroso pero flexible
$ejemplar2 = new ShopProduct('titulo','Osmar','Fermin',"4.22");







?>

