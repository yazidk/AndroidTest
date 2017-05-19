<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un contact </title>
</head>
<style>

</style>
<body>
<h1> ajouter un contact </h1>

<form action="inserer.php" method="post">
    <p>
        <label for="nom"> Nom :</label>
        <input id="nom" type="text" name="nom" >
    </p>
    <p>
        <label for="prenom">  Prénom :</label>
        <input id="prenom" type="text" name="prenom">
    </p>
    <p>
        <label for="mail"> Mail :</label>
        <input id="mail" type="text" name="mail">
    </p>
    <p>
        <input  type="submit" value="Enregistrer">
    </p>
</form>
</body>
</html>