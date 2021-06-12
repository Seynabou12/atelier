<?php

    //Chargement du script de connexion à la base de donnée
    require_once('db_connect.php');

    //Selectionner les données de la table
    $req =  "SELECT * FROM etudiant";

    //Execution de la requete
    $result = mysqli_query($dbconn, $req);
    
    if (mysqli_num_rows($result) > 0) {
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>
    <body>
        <div class="container">
            <table class="table table-striped table-bordered">
                <tr class="bg-primary text-white">
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Age</th>
                    <th>Classe</th>
                    <th>Date Inscription</th>
                </tr>
                <?php
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
               
                <tr>
                    <td ><?php echo $row["prenom"] ?></td>
                    <td><?php echo $row["nom"] ?></td>
                    <td><?php echo $row["age"] ?></td>
                    <td><?php echo $row["classe"] ?></td>
                    <td><?php echo $row["date_inscription"] ?></td>
                </tr>
                <?php
                    }
                ?>
                </table>
                
            </table>
                
        </div>        
    </body>
</html>           
<?php
    }
    else
    {
        echo "pas d'enregistrement dans la table etudiant";
    }
?>