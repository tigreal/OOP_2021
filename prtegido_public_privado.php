<?php



class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;
    

    public function __construct($title, $firstName, $mainName, $price)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }
    public function getProducer()
    {
        return $this->producerFirstName . "" .         $this->producerMainName;
    }
    public function getSumaryLine()
    {
        // se utiliza corchetes en cada this para que sea tomado como una variable dentro de una cadena pero al final es una cadena

        $base = "{$this->title} ({$this->producerFirstName} {$this->producerMainName})";
        return $base;
    }
}

class BookProduct extends ShopProduct
{
    public $numPages;
    // declaramso su propiop contructor y pasamos los valores
    public function __construct(string $title, string $firstName, string $mainName, float $price, int $numPage)
    {
        // pero aqui invocamos el contructor del padre
        parent::__construct(
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->numPages = $numPage;
    }
    public function getNumberOfPages(): int
    {
        return $this->numPages;
    }
    public function getSumaryLine(): string
    {
        // aqui llamamos el metodo del padre que es getSumaryLine para no tener codigo repetido
        $base = parent::getSumaryLine();
        $base .= " count pagas:{$this->numPages}";
        return $base;
    }
}

class CdProduct extends ShopProduct{
    public $PlayLeng;

    public function __construct(string $title, string $mainName, string $firstName, float $price, int $playLeng)
    {
        parent::__construct($title,$mainName,$firstName,$price);
        $this->PlayLeng=$playLeng;
        
    }

    public function getPlayLeng():int{

        return $this->PlayLeng;
    }

    public function getSumaryLine(): string
    {
        $base= parent::getSumaryLine();
        $base .= "play leng: $this->PlayLeng";
        return $base;
    }

}
?>