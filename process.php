<?php
include("connect.php");
if (isset($_POST["create"])){
    $cin=mysqli_real_escape_string($conn,$_POST["cin"]);
    $prenom=mysqli_real_escape_string($conn,$_POST["prenom"]);
    $nom=mysqli_real_escape_string($conn,$_POST["nom"]);
    $email=mysqli_real_escape_string($conn,$_POST["email"]);
    $ddn=mysqli_real_escape_string($conn,$_POST["ddn"]);
    $sql="INSERT INTO etudiant(cin,prenom,nom,email,ddn) VALUES ('$cin','$prenom','$nom','$email','$ddn')";
    if (mysqli_query($conn,$sql)){
        session_start();
        $_SESSION["create"]= "etudiant added Successfully";
        header("Location:home.php");
    }else{
        die("Somthing went wrong");
    }
}

if (isset($_POST["edit"])){
    $cin=mysqli_real_escape_string($conn,$_POST["cin"]);
    $prenom=mysqli_real_escape_string($conn,$_POST["prenom"]);
    $nom=mysqli_real_escape_string($conn,$_POST["nom"]);
    $email=mysqli_real_escape_string($conn,$_POST["email"]);
    $ddn=mysqli_real_escape_string($conn,$_POST["ddn"]);
    $sql="UPDATE etudiant SET cin='$cin', prenom='$prenom', nom='$nom', email='$email' ,ddn='$ddn' where cin=$cin"; 
    if (mysqli_query($conn,$sql)){
        session_start();
        $_SESSION["update"]= " etudiant updated Successfully";
        header("Location:home.php");
    }else{
        die("me7abech");
    }
}
?>