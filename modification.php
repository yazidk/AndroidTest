<?php
$objectPdo = new PDO('mysql: host=localhost ; dbname=agenda' , 'root' , 'admin1908' , array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')) ;

$pdoStat = $objectPdo->prepare('UPDATE contact set nom=:nom ,
                               prenom=:prenom ,
                               mail=:mail
                               WHERE id=:num LIMIT 1') ;
//------liaison du marametre nommé
$pdoStat->bindValue(':num',$_POST['numContact'], PDO::PARAM_INT);
$pdoStat->bindValue(':nom',$_POST['nom'], PDO::PARAM_INT);
$pdoStat->bindValue(':prenom',$_POST['prenom'], PDO::PARAM_INT);
$pdoStat->bindValue(':mail',$_POST['mail'], PDO::PARAM_INT);

//----execution de la requete ----------
$executionIsOK = $pdoStat->execute() ;


if ($executionIsOK) {
    $message = ' le contact a été mis à jour ' ;
}
else {
    $message = ' Echec de modification ' ;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> modification  </title>
</head>
<style>

</style>
<body>
<h1> Resultat de la modification  </h1>
<p> <?= $message  ?></p>

</body>
</html>
