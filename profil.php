<?php
session_start();

    $bdd= mysqli_connect('localhost', 'root','root','livreor');
    mysqli_set_charset($bdd, 'utf8');
    $user_login = $_SESSION['login'];

    $requete = "SELECT * FROM utilisateurs WHERE login = '$user_login'";
    
    $requete = mysqli_query($bdd, $requete);
    $reponse = mysqli_fetch_all($requete, MYSQLI_ASSOC);

    
    if (!empty($_POST)){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $confirm_password = $_POST["confirm_password"];
    $loginsession = $_SESSION['login'];

    $demandesql= "UPDATE `utilisateurs` SET `login`='$login',`password`='$password' WHERE login = '$user_login' ";
    $select = mysqli_query($bdd, $demandesql);
    header("Refresh:0");
  
        $_SESSION['login']= $login;
        $_SESSION['password']= $password;
        $_SESSION["confirm_password"] = $confirm_password;
    }



?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="livreor.css">
        <title>Page de profil</title>
    
       
    </head>

    <header>
<a href="index.php"><img src="https://dbdzm869oupei.cloudfront.net/img/vinylrugs/preview/26890.png" ></a>

</header>

    <body>         
<table class="table">
<form action="profil.php" name="form" method="post" id="form">

<tr>
    <td>
     <label for="login"> Modifier login :</td>
    <td>
    <input type="login" name="login" id="login" value ="<?php echo $_SESSION["login"] ?>"></label> <br></td>

</tr>


<tr>
    <td>
    <label for="password"> Modifier mot de passe :</td>
    <td>
    <input type="password" name="password" id="password" value ="*******"></label> <br></td>

</tr>

<tr>
    <td>
    <label for="confirm_password"> Confirmer le nouveau mot de passe :</td>
    <td>
    <input type="password" name="confirm_password" id="confirm_password"></label> <br></td>
</tr>

<tr>
<td>
<input type="submit" name="submit" value="Envoyer"></td>
</tr>
</form> 

</table>


<a href="livre-or.php"><h3>Voir les commentaires laissés sur notre site</h3></a>


<a href="commentaire.php"><h3>Laisser un commentaire</h3></a>

</body>

<main>

</main>
<h3>
    Se déconnecter?
</h3>
<a class ="deco" href="deconnexion.php"> <input type="submit" value= "Déconnexion"></a>
</html>

<footer>
<a class="footer" href="https://github.com/fatimazahra-meslouhmosca/module-connexion.git">Github</a>
</footer>