<?php
 if (isset($_POST["valider"])){
    include("connexion.php");
    $req=$pdo->prepare("insert into images(nom,taille,type,bin") values(?,?,?,?);
    $req-> execute (array( $_FILES ["image"]["name"], $_FILES ["image"]["size"], 
    $_FILES ["image"]["type"],file_get_contents( $_FILES ["image"]["tmp_name"])));
  }
  ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<form name="fo" method="post" action="" enctype="multipart/form-data">
<input type="file" name="image" /> <br />
<input type="submit" name="valider" value="charger" />
</form>
</body>
</html>