<?php  
require_once "connect.php";
$user = $_POST["user"];
$passe = $_POST ["pass"];
$prouf =false;
$check = $db ->prepare('SELECT * FROM identifiants WHERE user= ?' );
$check->execute(array($user));
while ($result=$check->fetchAll())
{
    echo $result['passe'];
 if($result['passe']== $passe)
 {$prouf = true;}
 else{
     $prouf = false;
 }
}
/*
if ($prouf) {
    header("location: admin.php");
}
else{
    header("location: analyselogin.php?error=1000");
}*/