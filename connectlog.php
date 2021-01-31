<?php
try{
  $db= new PDO ('mysql:host=localhost; dbname=base_apprenants','root','');
}
catch(Exception $e) {
    die('Erreur:'.$e -> getMessage ());

}

if(extension_loaded('PDO')){

}
echo''

?>  
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>CONNEXION</title>
    <link rel="stylesheet" href="style/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styllog.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

     <!-- début entete-->
     <header> 
        <nav>
            <div class="container-fluid">
                    <div class=" r1 row bg-white">
                            <div class="col-4 d-none d-md-block">
                            <h6 class="As" style="font-size:20px"> apprenants</h6>
                                <h6 class="As" style="font-size:20px">simplon</h6>
                            </div>
                            <div class="col-4">
                            <img  class="img-fluid" height="70px" width="350px" src="style/images/logo br.png" alt=""> 
                            </div>
                            <div class="col- text-right mr-5">
                            <a href="Liste.html" class="ls">Liste des apprenants</a>
                          </div>
                    </div>  
                </div>
        </nav>
</header>   <!-- fin entete-->
<br>

<h3>Utilisateur enrégistré avec succès.</h3>
<a href='login.html'> <p>Cliquez ici pour vous connecter</p></a></div>

</body>