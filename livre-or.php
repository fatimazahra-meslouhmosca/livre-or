<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="livreor.css">
        <title>Livre d'or</title>
    
       
    </head>
<body> 
    
    <header>
    <a href="index.php"><img src="https://dbdzm869oupei.cloudfront.net/img/vinylrugs/preview/26890.png" ></a>
    </header>
<?php

session_start();

    $bdd= mysqli_connect('localhost', 'root','root', 'livreor');
    mysqli_set_charset($bdd, 'utf8');
    $user_login = $_SESSION['login'];
   
    $requete = "SELECT * FROM utilisateurs INNER JOIN commentaires WHERE utilisateurs.id = commentaires.id_utilisateur ORDER BY date DESC";
    
    $requete1 = mysqli_query($bdd, $requete);
    $reponse = mysqli_fetch_all($requete1, MYSQLI_ASSOC);



foreach($reponse as $comment => $commentaires){

echo ' <div id ="table">
                <table>
                <thead>
                    <tr>
                    <th>
                        <p>'.$commentaires['login'].'</p>
                    </th>
                    </tr>
                </thead>
                <tbody>
                <td>'.$commentaires['commentaire'].' '.'Posté le'.' '.date_format(date_create($commentaires['date']), 'd/m/Y H:i:s').'</td>
                </tbody>
                </table>
        </div>';
}

if(empty($_SESSION)){
    echo ' <div class="centre">
    <a href="connexion.php"> <input id = "livre" type="submit" name= submit value="connectez-vous ou inscrivez-vous"></a>
    </div>';
}

else{
    echo '<div class="centre">
    <a href="commentaire.php"><input id="livre" type="submit" name=submit value="Laissez un commentaire"></a>
    </div>';

}
?>
<?php if (isset($_SESSION["login"])) : ?> 

<h3>
    Se déconnecter?
</h3>
<a class ="deco" href="deconnexion.php"> <input type="submit" value= "Déconnexion"></a>

<?php endif ?>


    <footer>
        <a class="footer" href="https://github.com/fatimazahra-meslouhmosca/module-connexion.git">Github</a>
    </footer>

</body>
</html>
