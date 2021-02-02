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
    <?php
        $db = new mysqli("localhost", "root", "", "base_apprenants");
        if(isset($_POST['entrer'])){
            $prouv = false; 
            $passWord = $_POST['pass'];
            $stmt = $db->prepare("SELECT * FROM identifiants WHERE user = ?");
            $stmt->bind_param("s", $_POST['user']);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows>0) {
                while ($data = $result->fetch_array()){
                    if ($passWord == $data['passe']){
                        header("location: admin.php");
                    }
                    else{
                        header("location: login.php?error=motdepasse");
                    }
                }
            }
        }
    ?>
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
    
    <div class="login-wrap">  <!-- login /indentification-->

     <div class="blocdouble">
            <input id="bloc1" type="radio" name="tab" class="connecter" ><label for="bloc1" class="tab">CONNEXION</label>
            <input id="bloc2" type="radio" name="tab" class="enregistrement"><label for="bloc2" class="tab">ENREGISTREMENT</label>

            <div class="indentification">
                        <div class="col-6 bg-light bloc1" style="margin-bottom: 100px;">
                            <h4 class="connecter">CONNEXION</h4>
                            <div class="centrer-fluid">
                                <form method="post">
                                    <input class="input" type="text" name="user" placeholder="Nom dutilisateur"> 
                                    <input class="input" type="password" name="pass" placeholder="Mot de passe"> 
                                
                                    <input class="soumettre" type="submit" value="se connecter" name="entrer">
                                </form>
                            </div>
                        </div>
            </div>
             
     </div>
       
 </div>
   

</body>
</html>