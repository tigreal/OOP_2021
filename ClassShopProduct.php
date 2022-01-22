<?php
// esta vez veremos la misma clase pero con uniones y parametros de acceso



class ShopProduct
{
    private int|float $discount = 0;
    public function __construct(private string $title, private string $producerFirstName, private string $prodicerMainName, protected int|float $price)
    {
    }
    public function getProducerFistName(): string
    {
        return $this->producerFirstName;
    }
    public function getProducerMainName(): string
    {
        return $this->producerMainName;
    }
    public function setDiscount(int|float $num): void
    {
        $this->discount = $num;
    }
    // posible error estoy usando uniones para devuelva un int o un float
    public function getDiscount(): int|float
    {

        $this->discount;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function getPrice(): int|float
    {

        return ($this->price - $this->discount);
    }
    public function getProducer(): string
    {

        $base = "{$this->producerFirstName} - {$this->prodicerMainName}";
        return $base;
    }
    public function getSumaryLine(): string
    {
        $base = "{$this->title} ({$this->producerMainName} -";
        $base .= "{$this->producerFistName}";
        return $base;
    }
}
class CdProduct extends ShopProduct
{
    public function __construct(string $title, string $firstName, string $mainName, int|float $price, private int $playLength)
    {
        parent::__contruct($tile, $firstName, $mainName, $price);
    }
    public function getPlayLeng(): int
    {
        return $this->getPlayLeng;
    }
    public function SumaryLine(): string
    {

        $base = "{$this->title} ({$this->producerFirstName},";
        $base .= "{$this->producerMainName}";
        $base .= ":playing time - {$this->playLength}";
        return $base;
    }
}

class BookProduct extends ShopProduct
{
    public function __construct(string $title, string $fistName, string $mainName, int|float $price, private int $numPage)
    {
        parent::__construct($title, $fistName, $mainName, $price);
    }
    public function getNumberPage(): int
    {
        return $this->numPage;
    }
    public function getSumaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= ":number of Page {$this->numPage}";
        return $base;

    }
    public getPrice():int|float{

        return $this->price;
    }
}
