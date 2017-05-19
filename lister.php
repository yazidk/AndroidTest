<?php
//-----ouverture une connexion de base de données ------
$objectPdo = new PDO('mysql: host=localhost ; dbname=agenda' , 'root' , 'admin1908' , array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')) ;

//----preparation de la requete ---------------
$pdoStat = $objectPdo->prepare('SELECT * FROM contact') ;
//-----execution de la requete -------------------------------
$executeIsOk = $pdoStat->execute() ;

//-----recuperation des resultats ----------------
$contacts = $pdoStat->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    table , td , th {
        border : 1px solid #ddd;
        text-align: left ;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th , td {
        padding: 15px;
    }
</style>
<body>
<h1>liste des contacts  </h1>

<table>
      <tr>
          <th> Nom </th>
          <th> Prénom </th>
          <th> Mail</th>
      </tr>


          <?php foreach ($contacts as $contact): ?>
               <tr>
                  <td><?= $contact['nom'] ?></td>
                   <td>   <?= $contact['prenom'] ?></td>
                   <td> <?= $contact['mail'] ?>  </td>
                   <td><a href="supprimer.php?numContact=<?=$contact['id']?>">Supprimer </a></td>
                   <td><a href="modifier.php?numContact=<?=$contact['id']?>">Modifier </a></td>
               </tr>

        <?php endforeach; ?>
</table>
</body>
</html>