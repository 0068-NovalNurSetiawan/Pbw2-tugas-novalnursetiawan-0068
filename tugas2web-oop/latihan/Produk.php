<?php
Class produk{

  
  protected string $name;
  protected int $price;
  
  
  public function __construct (string $name, int $price){
    $this->name = $name;
    $this->price = $price;
  }

  public function getName() : string{
    return $this->name;
  }

  public function setName(string $name){
    return $this->name = $name;
  }
 
  public function getPrice() : int{
    return $this->price;
  }

  public function setPrice(string $price){
    return $this->price = $price;
  }
  
} 

?>