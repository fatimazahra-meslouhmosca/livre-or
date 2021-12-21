<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="livreor.css">
    <title>Page d'accueil</title>
</head>
<body>

<header>
<a href="index.php"><img src="https://dbdzm869oupei.cloudfront.net/img/vinylrugs/preview/26890.png" ></a>

</header>

<aside>
    <nav>
<?php if (!isset($_SESSION["login"])) : ?> 

<h3>
    Déja inscrit?
</h3>

<a class="boutton" href="connexion.php"> Connexion</a>


<h3>
    Pas encore inscrit?
</h3>

<a class="boutton" href="inscription.php">Inscription</a>


<h3>
    Voir les commentaires :
</h3>

<a href="livre-or.php"> Livre d'or </a>

<?php else : ?>

<h3>
    Voir les commentaires :
</h3>

<a href="livre-or.php"> Livre d'or </a>

<h3>
    Se déconnecter?
</h3>
<a class ="deco" href="deconnexion.php"> <input type="submit" value= "Déconnexion"></a>

<?php endif ?>

</nav>
</aside>
<h1 class= "titre">Centre de médecine chinoise de Marseille</h1>

<p class="p">Bienvuenue sur notre site du centre de médecine chinoise de Marseille </p>


<main>




</main>




<footer>




<a class="footer" href="https://github.com/fatimazahra-meslouhmosca/livre-or.git">Github</a>
</footer>

</body>
</html>
