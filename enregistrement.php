<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>ENREGISTREMENT</title>
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

    <br><br>
    <div class="login-wrap">  <!-- enregistrement-->

     <div class="blocdouble">
            <input id="bloc1" type="radio" name="tab" class="connecter" checked><label for="bloc1" class="tab">CONNEXION</label>
            <input id="bloc2" type="radio" name="tab" class="enregistrement"><label for="bloc2" class="tab">ENREGISTREMENT</label>

                    
            <div class="enregistrement">
                    <div class="col-6 bg-light bloc2" style="margin-bottom: 100px;">
                        <h4 class="connecter">ENREGISTREMENT</h4>
                        <div class="centrer-fluid">
                            <form method="post" action="analyse.php">
                                <input class="input" type="text" name="user" placeholder="Nom d'utilisateur"> 
                                <input class="input" type="password"name="passe" placeholder="Mot de passe "> 
                                <input class="input" type="password" name="passe2" placeholder="Confirmer mot de passe">               
                                <input class="soumettre" type="submit" value="s'enregistrer">
                            </form>
                        </div>
                    </div>
            </div>
     </div>
       
 </div>
   

</body>
</html>