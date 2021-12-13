<?php

$bdd= mysqli_connect('localhost', 'root','root', 'livreor');
mysqli_set_charset($bdd, 'utf8');

  
if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])){
   
    $login = $_POST['login'];
    $password = $_POST['password'];
    $confirm_password = $_POST["confirm_password"];


  
   $requete = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login ='$login'");
   $result = mysqli_fetch_all($requete);


    if (count($result)==0){


        if ($password == $confirm_password){
        $requete2 = mysqli_query($bdd, "INSERT INTO utilisateurs ( `login`, `password`) VALUES ('$login', '$password' )");
        header('location: connexion.php');


         }

         else {
        echo "<p>Login et/ou Mot de passe est incorrect.</p>";
        }
}

else {
    echo "Ce login existe déjà.";
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
    <title>Page d'inscription</title>

   
</head>

<header>
<a href="index.php"><img src="https://dbdzm869oupei.cloudfront.net/img/vinylrugs/preview/26890.png"></a>

</header>

<body>  

<table class="table">
<form action="inscription.php" name="form" method="post" id="form">

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
    <label for="confirm_password"> Confirmez le mot de passe :</td>
    <td>
    <input type="password" name="confirm_password" id="confirm_password"></label> <br></td>
</tr>

<tr>
<td>
<input type="submit" name="submit" value="Envoyer"></td>
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
