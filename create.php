<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>aad new etudiant</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>ajouter un nouvau etudiant</h1>
            <div>
                <a href="home.php" class="btn btn-primary">retour</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <div class="form-element my-4">
            numero indantier national cin :<input type="text" class="form-control" name="cin" placehoder="numero indantier national cin :">
            </div>
            <div class="form-element my-4">
            prenom etudiant:<input type="text" class="form-control" name="prenom" placehoder="prenom:">
            </div>
            <div class="form-element my-4">
            nom:<input type="text" class="form-control" name="nom" placehoder="nom:">
            </div>
            <div class="form-element my-4">
            email:<input type="email" class="form-control" name="email" placehoder="email:">
            </div>
            <div class="form-element my-4">
            date de naissance:<input type="date" class="form-control" name="ddn" placehoder="date de naissance:">
            </div>
            <div class="form-element">
               <input type="submit" class="btn btn-success" name="create" value="ajouter">
            </div>
        </form>
    </div>
</body>
</html>