<?php
abstract class Vehical {
    abstract public function start();
    public function stop(){
        return "vehical stop";
    }
}
class Bike extends Vehical {
    public function start(){
        return "Bike start with Kick";
    }
}
class Car extends Vehical {
    public function start(){
        return "Car start with Key";
    }
}

$bike = new Bike();
echo $bike->start();
$car = new Car();
echo $car->start();


interface gateway{
    public function pay($amount);
}


class razzorpay implements gateway{
    public function pay($amount){
        return "Pay $amount with Razzorpay";
    }
}
class paypal implements gateway{
    public function pay($amount){
        return "Pay $amount with Paypal";
    }
}

$razzorpay = new razzorpay();
echo $razzorpay->pay(1000);
$paypal = new paypal();
echo $paypal->pay(500);



?>