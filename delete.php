<?php
if(isset($_GET['cin'])){
    $cin = $_GET['cin'];
    include("connect.php");
    $sql = "DELETE FROM etudiant WHERE cin =$cin ";
    if( mysqli_query($conn,$sql)){
        session_start();
        $_SESSION["delete"]= " etudian Deleted Successfully";
        header("Location:home.php");
    }
}
?>