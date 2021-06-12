<?php
    //Chargement du script de connexion à la base de donnée
    require_once('db_connect.php');
    $req = "SELECT nom, prenom FROM etudiant ORDER BY nom";
    $result = $dbconn->query($req);
    
    if ($result->num_rows > 0) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier 10</title>
</head>
<body>
    <table class="table table-striped table-bordered">
        <tr class="bg-primary text-white">
            <th>Prénom</th>
            <th>Nom</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result)) {
        ?>
        
        <tr>
            <td ><?php echo $row["prenom"] ?></td>
            <td><?php echo $row["nom"] ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>

</html>
<?php
    } else {
        echo "0 results";
    }

    $dbconn->close();
?> 