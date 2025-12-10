<?php
// final is used to restrict inheritance or overriding.
final class DatabaseConnection {
    public function connect() {
        return "Connected";
    }
}

class MyDB extends DatabaseConnection {} // ERROR


class ParentClass {
    final public function config() {
        return "Parent config";
    }

    public function run() {
        return "Running...";
    }
}

class ChildClass extends ParentClass {
    
    // This will cause ERROR
    // public function config() {
    //     return "Child config";
    // }
}

?>