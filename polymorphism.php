<?php
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
function print_animal_sound(Animal $animal){
    echo $animal->sound();
}

$arr = [new Cat(), new Dog()];
foreach($arr as $animal){
    echo $animal->sound();
}

// print_animal_sound(new Cat());
// print_animal_sound(new Dog());



?>