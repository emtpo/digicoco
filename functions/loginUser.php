<?php
require("database.php");

$passwordToHash = $_POST["password"] . $config["SECRET_KEY"];
$password_hash = md5($passwordToHash);

$req = $db->prepare("SELECT * FROM user WHERE pseudo = :pseudo AND password = :password");
$req->bindParam(":pseudo", $_POST["pseudo"]);
$req->bindParam(":password", $password_hash);
$req->execute();

$result = $req->fetch();

if(!$result){
    $errorMessage = "Erreur de connexion";
    header("Location: ../login.php?errorMessage=" . $errorMessage);
}
else{
    session_start();
    $_SESSION["pseudo"] = $result["pseudo"];
    $_SESSION["role"] = $result["role"];
    header("Location: ../index.php");
}