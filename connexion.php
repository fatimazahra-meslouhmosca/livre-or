<?php
session_start();

$bdd= mysqli_connect('localhost', 'root','root', 'livreor');
mysqli_set_charset($bdd, 'utf8');


    if (!empty($_POST['login']) && !empty($_POST['password']) && isset($_POST["login"]) && isset($_POST["password"])){

        $login = $_POST['login'];
        $password = $_POST['password'];
    
        $requete =  "SELECT * FROM utilisateurs WHERE login = '$login' AND password = '$password' ";
    
    
        $requete2= mysqli_query($bdd, $requete);
        $reponse = mysqli_fetch_all($requete2);
    
        $count = count($reponse);
    
    
                if ($count == 1){
                
                    $_SESSION ['login'] = $login;
                    $_SESSION['password'] = $password;
                    $_SESSION['id'] = $reponse[0][0];
    
                
                    header('location: profil.php');
                    exit();
                
                }
    
                else {
                    echo "<p>Login et/ou password incorrects </p>";
                }        
        }
    else {
        if(!empty($_POST)){
          echo "<p> Champs vides </p>";  
        }
        
    }




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="livreor.css">
    <title>Page de connexion</title>

   
</head>

<header>
<a href="index.php"><img src="https://dbdzm869oupei.cloudfront.net/img/vinylrugs/preview/26890.png" ></a>

</header>

<body>
<table class= "table">

 <form  action="connexion.php" name="form" method="post" id="form">

 <tr>
    <td>
     <label for="login"> Login :</td>
    <td>
    <input type="login" name="login" id="login"></label> <br></td>

</tr>


<tr>
    <td>
    <label for="password"> Mot de passe :</td>
    <td>
    <input type="password" name="password" id="password"></label> <br></td>

</tr>


<tr>
<td>
<input type="submit" name="submit" value="Envoyer"></td>
</tr>

<tr>
<td>
<h3>
    Pas encore inscrit?
</h3>

<a class="boutton" href="inscription.php">Inscrivez-vous</a>
</td>
</tr>






</form>
</table>

</body>
<main>

</main>
</html>

<footer>
<a class="footer" href="https://github.com/fatimazahra-meslouhmosca/module-connexion.git">Github</a>
</footer>