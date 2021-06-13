<?php
session_start();
setcookie('pseudo', 'steven', time() + 365*24*3600, null, null, false, true);
require_once "User.php";
require_once "DAO.php";

if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
 
    $user1 = new User();

    $user1->setEmail($email);
    $user1->setPassword($mdp);
    
    $logs = [$user1->getEmail(), $user1->getPassword()];

    $user1->login($dsn, $user, $password, $logs);
}