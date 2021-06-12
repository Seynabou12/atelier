<?php 

    //connexion à la base de donnée

    //définition des variables de connexions
    $host = 'localhost';//la base de donnée est dans l'ordinateur
    $utilisateur = 'root'; //nom d'utilisateur de la base de données
    $motdepass = '';
    $dbname = 'bdetudiant';

    //connexion à la base de donnée
    $dbconn = mysqli_connect($host, $utilisateur, $motdepass, $dbname);

    //On vérifie si la connexion a bien été établie sinon on affiche une message d'érreurs
    if ($dbconn->connect_error) {
        die("Connection failed: " . $dbconn->connect_error);
      }
      echo "Connecté avec succés";  

?>