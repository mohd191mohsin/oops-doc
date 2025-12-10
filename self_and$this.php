<?php
// $this refers to the current object instance.


class User {
    public $name = "Mohsin";

    public function showName() {
        return $this->name;  // access property using $this
    }
}

$user = new User();
echo $user->showName();   // Output: Mohsin



// self refers to the class itself, not the object.
class Config {
    public static $appName = "MyApp";

    public static function getName() {
        return self::$appName;  // class level access
    }
}

echo Config::getName();       // Output: MyApp


?>