<?php
$objectPdo = new PDO('mysql: host=localhost ; dbname=agenda' , 'root' , 'admin1908' , array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')) ;
$pdoStat = $objectPdo->prepare('INSERT INTO contact VALUES (NULL ,:nom , :prenom , :mail)') ;
$pdoStat->bindValue(':nom',$_POST['nom'] , PDO::PARAM_STR);
$pdoStat->bindValue(':prenom',$_POST['prenom'] , PDO::PARAM_STR);
$pdoStat->bindValue(':mail',$_POST['mail'] , PDO::PARAM_STR);


$executionIsOK = $pdoStat->execute() ;

if ($executionIsOK) {
    $message = ' le contact a été ajouté ' ;
}
else {
    $message = 'Echec d\'ajouter un contact' ;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Ajouter un contact  </title>
</head>
<style>

</style>
<body>
   <h1> Ajouter un contact  </h1>
    <p>  <?php echo $message ?> </p>


</body>
</html>