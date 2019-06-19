<?php
namespace Model;

class Product
{
  public $id;
  public $name;
  public $price;
  public $description;
  public $supplier;

  public function __construct($name, $price, $description, $supplier)
  {
      $this->name = $name;
      $this->price = $price;
      $this->description = $description;
      $this->supplier = $supplier;
  }
}