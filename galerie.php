<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <title>Ma galerie d'images</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <style type="text/css">


    </style>
</head>
<body>

<h1>Ma galerie d'images</h1>

<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=agenda', 'root', 'admin1908');
} catch (Exception $e) {
    exit('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT id_img, nom, description FROM images');
while($result = $reponse->fetch()) {

    echo '<div>';
    echo '<a href="apercu.php?id_img='.$result['id_img'].'"><img src="apercu.php?id_img='.$result['id_img'].'" alt="'.$result['nom'].'" title="'.$result['nom'].'" /></a>';
    echo '<p>Description : '.$result["description"].'</p>';
    echo '</div>';
}

$reponse->closeCursor();
?>

</body>
</html>