<?php

require("database.php");
require("../config.php");

$errorMessage = "";

if($_POST["password"] !== $_POST["confirmPassword"]){
    $errorMessage = "Votre confirm password est différent";
    header("Location: ../register.php?errorMessage=" . $errorMessage);
}

if(isset($_POST["role"])){
    $role_id = 1;
}else{
    $role_id = 0;
}

$passwordToHash = $_POST["password"] . $config["SECRET_KEY"];
$password_hash = md5($passwordToHash);

$req = $db->prepare("INSERT INTO user(pseudo, password, role_id) VALUES(:pseudo, :password, :role_id)");
$req->bindParam(":pseudo", $_POST["pseudo"]);
$req->bindParam(":password", $password_hash);
$req->bindParam(":role_id", $role_id);
$req->execute();

header("Location: ../login.php");