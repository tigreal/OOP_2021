<?php
class Storege{
    // el tipo union nos permite colocar 2 tipos compuestos del valor
    // en este caso string y bool
    //para hacerlo mas flexible puedo tambien recivier un tipo
    // null
    public function add(string $key, string|bool|null $value)
    {
        
        
    }
    // aqui veremos una declaracion de tipo union con objeots
    public function setShopProduct(ShopProduct|null $product){
        
    }   
}

?>