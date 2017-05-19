<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <title>Envoyer une image</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <style type="text/css">
        label {
            display:block;
            width:150px;
            float:left;
        }
    </style>
</head>
<body>
<h1>Envoyer une image</h1>
<form enctype="multipart/form-data" action="traitement.php" method="post">
    <p>
        <label for="nom">Nom : </label><input type="text" name="nom" id="nom" /><br />
        <label for="description">Description : </label><textarea name="description" id="description" rows="10" cols="50"></textarea><br />
        <label for="image">Image : </label><input type="file" name="image" id="image" /><br />
        <label for="validation">Valider : </label><input type="submit" name="validation" id="validation" value="Envoyer" />
    </p>
</form>
</body>
</html>