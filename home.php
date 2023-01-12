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
    <title>liste de etudiant</title>
</head>
<body>    
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>liste des etudiants</h1>
            <div>
                <a href="create.php" class="btn btn-primary">ajouter un nouvau etudiant</a>
            </div>
        </header>
        <?php 
        session_start();
        if (isset($_SESSION["create"])){
            ?>
            <div class="alert alert-success">
                <?php
                    echo $_SESSION["create"];
                    unset($_SESSION["create"]);

                ?>
            </div>
            <?php
        }
        ?>


        <?php         
        if (isset($_SESSION["edit"])){
            ?>
            <div class="alert alert-success">
                <?php
                    echo $_SESSION["edit"];
                    unset($_SESSION["edit"]);

                ?>
            </div>
            <?php
        }
        ?>
        <?php 
        if (isset($_SESSION["delete"])){
            ?>
            <div class="alert alert-success">
                <?php
                    echo $_SESSION["delete"];
                    unset($_SESSION["delete"]);

                ?>
            </div>
            <?php
        }
        ?>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#cin</th>
                    <th>prenom</th>
                    <th>nom</th>
                    <th>email</th>
                    <th>date de naissance</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connect.php");
                $sql = "SELECT * FROM etudiant";
                $result = mysqli_query($conn,$sql);
                while ($row=mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row ["cin"] ;?></td>
                    <td><?php echo $row ["prenom"] ;?></td>
                    <td><?php echo $row ["nom"] ;?></td>
                    <td><?php echo $row ["email"] ;?></td>
                    <td><?php echo $row ["ddn"] ;?></td>
                    <td>
                        <a href="view.php?cin=<?php echo $row ["cin"] ; ?>" class="btn btn-info">Read more</a>
                        <a href="edit.php?cin=<?php echo $row ["cin"] ; ?>" class="btn btn-warning">modier</a>
                        <a href="delete.php?cin=<?php echo $row ["cin"] ; ?>" class="btn btn-danger">effaccer</a>
                    </td>
                </tr>

                <?php
                }
                ?>
            
            </tbody>
        </table>
        <div class="container">        
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>        
    </div>  
    
</body>
</html>