<?php
// A Trait is a PHP mechanism that allows you to reuse methods across multiple classes without inheritance.

trait logger{
    public function log($message){
        echo "[LOG]: " . $message;
    }
}

class User{
    use logger;
    public function createUser($username){
        // User creation logic here
        $this->log("User '$username' created.");
    }
}

class Product{
    use logger;
    public function createProduct($productName){
        // Product creation logic here
        $this->log("Product '$productName' created.");
    }
}
$user = new User();
$user->createUser("john_doe");
$product = new Product();
$product->createProduct("Laptop");

?>