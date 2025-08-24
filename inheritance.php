<?php
// Online PHP compiler to run PHP program online
// Print "Try programiz.pro" message
// inheritnce
class Animal{
    public function sound(){
        return "Some Animal Sounds";
    }
}

class Cat extends Animal{
    public function sound(){
        return "MEOW!";
    } 
}
class Dog extends Animal{
    public function sound(){
        return "WOOF!";
    } 
}
$cat = new Cat();
echo $cat->sound();  //MEOW!

$dog = new Dog();
echo $dog->sound(); //WOOF!


?>