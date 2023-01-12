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
    <title>edit etudiant</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>modifer le donner d'un etudiant</h1>
            <div>
                <a href="home.php" class="btn btn-primary">retour</a>
            </div>
        </header>        
        <?php 
                if(isset($_GET["cin"])){
                    $cin =$_GET["cin"] ;
                    include("connect.php");
                    $sql = "SELECT * FROM etudiant WHERE cin=$cin";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($result);
            ?>
            <form action="process.php" method="post">
                <div class="form-element my-4">
                    numero carte indantifer national cin :<input type="text" class="form-control" name="cin" value="<?php echo $row ["cin"];?>" >
                </div>
                <div class="form-element my-4">
                    prenom:<input type="text" class="form-control" name="prenom" value="<?php echo $row ["prenom"];?>" >
                </div>
                <div class="form-element my-4">
                    nom:<input type="text" class="form-control" name="nom" value="<?php echo $row ["nom"];?>" >
                </div>
                <div class="form-element my-4">
                    email:<input type="email" class="form-control" name="email" value="<?php echo $row ["email"];?>">
                </div>
                <div class="form-element my-4">
                    date de naissance:<input type="date" class="form-control" name="ddn" value="<?php echo $row ["ddn"];?>">
                </div>
                <input type="hidden" name="cin" value="<?php echo $row ['cin']; ?>">
                <div class="form-element">
                <input type="submit" class="btn btn-success" name="edit" value="modifer">
                </div>
            </form>
            <?php
             }
            ?>               
    </div>
</body>
</html>