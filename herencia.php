<?php
// los elementos que se deben manjar de forma diferente son 
// getPlayLength() getNumberOfPages()
class ShopProduct{

    public $numPages;
    public $playLength;
    public $title;
    public $producerFirstName;
    public $producerMainName;
    public $price;

    public function __construct(string $title, string $firstName, string $mainName, float $price, int $numPages=0,int $playLength=0)
    {
        $this->title=$title;
        $this->producerFistName=$firstName;
        $this->producerMainName=$mainName;
        $this->price=$price;
        $this->numPages=$numPages;
        $this->playLength=$playLength;

        
    }

    public function getProducer():string{
        return $this->producerFirstName." ". $this->producerMainName;
    }
    public function getSummaryLine():string{
        $base = "{$this->title}({$this->producerMainName},";
        $base .="{$this->producerFirstName})";
        return $base;
    }


}

class CdProduct extends ShopProduct{

    public function getPlayLength():int{
         

        return $this->playLength;
    }
    public function getSumaryLine():string{

        $base = "{$this->title} ({$this->producerMainName},";
        $base .= "{$this->producerFirstName})";
        $base .=": playing time - {$this->playLength}";
        return $base;
    }



}

class BookProduct extends ShopProduct{

    public function getNumberOfPages():int{
        return $this->numPage;
    }

    public function getSumaryLine():string{

        $base= "{$this->title},({$this->producerMainName},";
        $base .="{$this->producerFistName})";
        $base .=": page count - {$this->numPages}";
        return $base; 

    }



}


$producto2 =new CdProduct("Exile on coldharbour Lane","the","Alabama 3",10.99,0,60.33);

print($producto2->getProducer());



?>