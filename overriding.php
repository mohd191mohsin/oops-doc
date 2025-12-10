<?php 

// Overriding:
// Child class rewrites parent class method with same name and parameters.

class Animal {
    public function makeSound(){
        return "Some generic animal sound";
    }
}
class Dog extends Animal {
    public function makeSound(){
        return "Bark";
    }
}
class Cat extends Animal {
    public function makeSound(){
        return "Meow";
    }
}

$cat = new Cat();
echo $cat->makeSound(); // Outputs: Meow
$dog = new Dog();
echo $dog->makeSound(); // Outputs: Bark

// laravel real world example:  

// class UserController extends Controller {
//     public function create() {
//         return "Create from Controller";
//     }
// }

?>