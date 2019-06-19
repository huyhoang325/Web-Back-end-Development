<?php
namespace Controller;

use Model\Product;
use Model\ProductDB;
use Model\DBConnection;

class ProductController
{

  public $productDB;

  public function __construct()
  {
      $connection = new DBConnection("mysql:host=localhost;dbname=productmanager", "root", "");
      $this->productDB = new ProductDB($connection->connect());
  }
  public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $supplier = $_POST['supplier'];
            $product = new Product($name, $price, $description, $supplier);
            $this->productDB->create($product);
            $message = 'Product created';
        header('Location: index.php');
        }
    }

  public function index(){
    $products = $this->productDB->getAll();
    include 'view/list.php';
  }

  public function detail(){
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      $id = $_GET['id'];
      $product = $this->productDB->get($id);
      include 'view/detail.php';
    }
  }

  public function search1(){
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      $search = $_GET['search'];
      $products = $this->productDB->search2($search);
      include 'view/search.php';
    }
  }

  public function delete(){
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];
        $product = $this->productDB->get($id);
        include 'view/delete.php';
    } else {
        $id = $_POST['id'];
        $this->productDB->delete($id);
        header('Location: index.php');
    }
  }
  public function update(){
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];
        $product = $this->productDB->get($id);
        include 'view/edit.php';
    } else {
        $id = $_POST['id'];
        $product = new Product($_POST['name'], $_POST['price'], $_POST['description'], $_POST['supplier']);
        $this->productDB->update($id, $product);
        header('Location: index.php');
    }
  }
}