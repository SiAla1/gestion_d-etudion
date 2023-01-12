<?php
$dbHost="localhost";
$dbRoot="root";
$dbPass="";
$dbName="etudiant";

$conn=mysqli_connect($dbHost,$dbRoot,$dbPass,$dbName);
if(!$conn) {
    die ("Somthing went wrong");
}
?>