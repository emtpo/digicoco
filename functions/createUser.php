<?php

var_dump($_POST);

require("database.php");

$errorMessage = "";

if($_POST["password"] !== $_POST["confirmPassword"]){
    $errorMessage = "Your passwords aren't similar";
    header("Location: ../register.php?errorMessage=" . $errorMessage);
}

// $req = $bdd->prepare("INSERT INTO users(pseudo, password, role_id) VALUES(:pseudo, :password, :role_id)");
// $req->bindParam(":pseudo", $_POST["pseudo"]);