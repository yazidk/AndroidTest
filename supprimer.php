<?php
$objectPdo = new PDO('mysql: host=localhost ; dbname=agenda' , 'root' , 'admin1908' , array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')) ;

$pdoStat = $objectPdo->prepare('DELETE FROM contact WHERE id=:num LIMIT 1') ;


//----liason au parametre nommé -----------------
$pdoStat->bindValue(':num',$_GET['numContact'] , PDO::PARAM_INT);

//----execution de la requete ----------
$executionIsOK = $pdoStat->execute() ;


if ($executionIsOK) {
    $message = ' Le contact a été supprimé ' ;
}
else{
    $message = 'Echec de la supprission du contact ' ;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> la suppression d'un contact </title>
</head>
<style>

</style>
<body>
   <h1> la suppression d'un contact </h1>
    <p>  <?php echo $message ?> </p>


</body>
</html>
