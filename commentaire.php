<?php

session_start();



    $bdd= mysqli_connect('localhost', 'root','root', 'livreor');
    mysqli_set_charset($bdd, 'utf8');


    if(!empty($_POST['commentaire'])){
        $commentaire = $_POST['commentaire'];
        $id = $_SESSION['id'];


                $requete = mysqli_query($bdd,"INSERT INTO commentaires (commentaire, id_utilisateur, date) VALUES ('$commentaire','$id', NOW())");

    } 

    // else{
    //     echo "<p>Veuillez remplir le champs</p>";
    
    // }


?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="livreor.css">
        <title>Commentaire</title>
    
       
    </head>


    <header>
<a href="index.php"><img src="https://dbdzm869oupei.cloudfront.net/img/vinylrugs/preview/26890.png" ></a>

</header>

    <body>     
        
    

    <table class="table">
<form action="" name="form" method="post" id="form">

<tr>
    <td>
     <label for="commentaire"> Laisser un commentaire :</td>
    <td>
    <input type="commentaire" name="commentaire" id="commentaire"></label> <br></td>

</tr>

<tr>
<td>
<input type="submit" name="submit" value="Envoyer"></td>
</tr>

<tr>
    <td>
     <label for="commentaire"> Voir les commentaires :</td>
    <td>
    <a href="livre-or.php"><input type="button" value="Livre d'or"></a></label> <br></td>
</tr>

<tr>
    <td>
    <h3>
    Se déconnecter?
</h3>
    <a class ="deco" href="deconnexion.php"> <input type="button" value= "Déconnexion"></a> <br></td>
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
