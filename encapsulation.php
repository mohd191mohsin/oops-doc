<?php
class Bank_Account{
    private $balance;
    public function deposit($amount){
        if($amount >0){
            $this->balance += $amount;
            return "Deposite Successfull!";
        }
    }
    public function Check_balance(){
        return "Your Balance is : ".$this->balance;
    }
}

$user = new Bank_Account();
echo $user->deposit(100);

echo $user->Check_balance();
// echo $user->balance; not working



?>