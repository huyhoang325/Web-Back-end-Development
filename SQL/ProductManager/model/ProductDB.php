<?php
namespace Model;

class ProductDB
{
  public $connection;

  public function __construct($connection)
  {
      $this->connection = $connection;
  }

  public function create($product)
    {
        $sql = "INSERT INTO products(name, price, description, supplier) VALUES (?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->name);
        $statement->bindParam(2, $product->price);
        $statement->bindParam(3, $product->description);
        $statement->bindParam(4, $product->supplier);
        return $statement->execute();
    }
  public function getAll()
  {
    $sql = "SELECT * FROM products";
    $statement = $this->connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    $products = [];
    foreach ($result as $row) {
        $product = new product($row['name'], $row['price'], $row['description'], $row['supplier']);
        $product->id = $row['id'];
        $products[] = $product;
    }
    return $products;
  }
  public function get($id){
    $sql = "SELECT * FROM products WHERE id = ?";
    $statement = $this->connection->prepare($sql);
    $statement->bindParam(1, $id);
    $statement->execute();
    $row = $statement->fetch();
    $product = new product($row['name'], $row['price'], $row['description'], $row['supplier']);
    $product->id = $row['id'];
    return $product;
  }
  public function search2($search){
    $sql = "SELECT * FROM products WHERE name like '%$search%'";
    $statement = $this->connection->prepare($sql);
    $statement->bindParam(1, $search);
    $statement->execute();
    $result = $statement->fetchAll();
    $products = [];
    foreach ($result as $row) {
        $product = new product($row['name'], $row['price'], $row['description'], $row['supplier']);
        $product->id = $row['id'];
        $products[] = $product;
    }
    return $product;
  }

  public function delete($id){
    $sql = "DELETE FROM products WHERE id = ?";
    $statement = $this->connection->prepare($sql);
    $statement->bindParam(1, $id);
    return $statement->execute();
  }
  public function update($id, $product){
    $sql = "UPDATE products SET name = ?, price = ?, description = ? , supplier = ?WHERE id = ?";
    $statement = $this->connection->prepare($sql);
    $statement->bindParam(1, $product->name);
    $statement->bindParam(2, $product->price);
    $statement->bindParam(3, $product->description);
    $statement->bindParam(4, $product->supplier);
    $statement->bindParam(5, $id);
    return $statement->execute();
  }
}