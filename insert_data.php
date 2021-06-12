<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier 10</title>
</head>
<body>

    <?php 

        //Inserer des données dans la table etudiant

        //chargement du script de connexion à la base de données
        require_once('db_connect.php');

        if (!$dbconn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        //requete d'insertion des données dans la table etudiant
        $req = "INSERT INTO etudiant(prenom, nom, age, classe, date_inscription) 
                values ('Rokhaya', 'Dione', '23 ans', 'Licence1', '2020-05-13 10:15:54');";
        $req .= "INSERT INTO etudiant(prenom, nom, age, classe, date_inscription) 
                values ('Awa', 'Sow', '25 ans', 'Licence 3', '2019-06-24 16:15:19');";
        $req .=  "INSERT INTO etudiant(prenom, nom, age, classe, date_inscription) 
                values ('Ibrahima', 'Gadiaga', '28 ans', 'Licence 2', '2020-06-30 06:30:35');";
        $req .=  "INSERT INTO etudiant(prenom, nom, age, classe, date_inscription) 
         values ('Mame', 'Sylla', '27 ans', 'Master', '2018-07-30 03:20:00')";
            if (mysqli_multi_query($dbconn, $req)) 
            {
                echo "insertion avec succés";
            }
            else
            {
                echo "Erreur: " . $req . "<br>" . mysqli_error($dbconn);
            }       

        //execution de la requete d'insertion
        $result = mysqli_query($dbconn, $req);  

    ?>
</body>
</html>