<?php

$objectPdo = new PDO('mysql: host=localhost ; dbname=agenda' , 'root' , 'admin1908' , array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')) ;

$pdoStat = $objectPdo->prepare('SELECT * FROM contact WHERE id=:num ') ;


//----liason au parametre nommé -----------------
$pdoStat->bindValue(':num',$_GET['numContact'] , PDO::PARAM_INT);

//----execution de la requete ----------
$executionIsOK = $pdoStat->execute() ;

//----on recupere le contact ------
$contact = $pdoStat->fetch() ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>

</style>
<body>
<h1> modification d'un contact  </h1>

  <form action="modification.php" method="post">
      <input type="hidden" name="numContact" value="<?= $contact['id']?>">

      <p>
          <label for="nom"> Nom :</label>
          <input id="nom" type="text" name="nom" value="<?=$contact['nom'];?>" >
      </p>
      <p>
          <label for="prenom">  Prénom :</label>
          <input id="prenom" type="text" name="prenom" value="<?=$contact['prenom'];?>">
      </p>
      <p>
          <label for="mail"> Mail :</label>
          <input id="mail" type="text" name="mail" value="<?=$contact['mail'];?>">
      </p>
      <p>
          <input  type="submit" value="Enregistrer Modification">
      </p>
  </form>
</body>
</html>
