<?php
class ShopProduct
{
    // no sedebe quitar la declaracion de las propiedades para utilizar 
    // la promocion de propiedades en el constructor
    /* public $title = "default product";
    public $producerMainName = "main name";
    public $producerFirstName = "fist name";
    public $price = 0; */
    // vieja version de un constructor 
    /*   public function __construct($title,$fistName,$mainName,$price)
    {
        $this->title=$title;
        $this->producerFirstName=$fistName;
        $this->producerMainName=$mainName;
        $this->price=$price;
        
    } */
    // aqui declaramos los atributos y tambien los asignamos lo nuevo
    // de php 8
    // tambien se puede colocar valores predefinidos
    public function __construct(public $title, public $producerFirstName = "", public $producerMainName = "", public $price = 0)
    {
    }
    // implisitamte se declaro tanto como producerFirstName y los demas atributos gracias al contructor 
    // el uso de promocion de propiedades del contructor
    public function getProducer()
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }
}
class ShopProductWriter{
    public function write($shopProduct){
        $str = $shopProduct->title . ":" . $shopProduct->getProducer() . "(".$shopProduct->price . ")\n";
        print $str;
    }
}
// en este caso el objeto solo tiene que declara un solo valor 
// ya que los otros estan con valores predeterminados, tambien 
// puede uitlizar atributos con nombre,
$product1 = new ShopProduct(title: "My Antonia",producerFirstName:"Will",producerMainName:"Cather", price: 5.99);
$writer = new ShopProductWriter();
$writer->write($product1);
// print "author:{$product1->getProducer()}\n";

// var_dump($product1);
// var_dump($product2);
