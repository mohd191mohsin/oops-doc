<?php 
class User{
    public function login(){
        return "User logged in";
    }
}

class Admin extends User{
    public function AccessDashboard(){
        return "Admin Dashboard Accessed";
    }
}


$admin = new Admin();
echo $admin->login();
echo $admin->AccessDashboard();
?>