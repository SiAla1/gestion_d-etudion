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
    <title>book details</title>
    <style>
        .book-details{
            background-color:#f5f5f5;
            padding: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>etudiant Details</h1>
            <div>
                <a href="home.php" class="btn btn-primary">retour</a>
            </div>
        </header>
        <div class="book-details my-4">
            <?php 
            if (isset($_GET["cin"])) {
                $cin=$_GET["cin"];
                include("connect.php");
                $sql ="SELECT * FROM etudiant WHERE cin= $cin";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                <h2>CIN:</h2>
                <p><?php echo $row["cin"]; ?></p>                
                <h2>PRENOM:</h2>
                <p><?php echo $row["prenom"]; ?></p>
                <h2>NOM:</h2>
                <p><?php echo $row["nom"]; ?></p>
                <h2>EMAIL:</h2>
                <p><?php echo $row["email"]; ?></p>
                <h2>DATE DE NAISSANCE:</h2>
                <p><?php echo $row["ddn"]; ?></p>
                


                <?php
            } 
            ?>
            
        </div>
    </div>
</body>
</html>  