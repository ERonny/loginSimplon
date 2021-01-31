<?php 
 
require_once "connectlog.php"; 
$user = $_POST["user"];
$passe = $_POST ["passe"];


$preparation = $db -> prepare('INSERT INTO identifiants(user,passe) VALUES (?,?)');

$preparation -> execute(array($user,$passe));
?> 

