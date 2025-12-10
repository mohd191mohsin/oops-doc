<?php 
// PHP simulates overloading using __call() or __callStatic() to handle multiple method signatures.
class Test{
    public function __call($name, $arguments){
        if($name == 'add'){
            if(count($arguments) == 2){
                return $arguments[0] + $arguments[1];
            }elseif(count($arguments) == 3){
                return $arguments[0] + $arguments[1] + $arguments[2];
            }
        }
    }
}


$test = new Test();
echo $test->add(2,3); // Outputs: 5
echo $test->add(2,3,4); // Outputs: 9

// laravel real world example:
// Laravel uses overloading heavily via magic methods, especially in Eloquent:

// User::whereName('John')->first();


// Laravel dynamically handles:

// whereName()

// whereEmail()

// whereStatus()
?>