<?php
if(!isset($_SESSION['id'])){
    header ("Location:../index.php" );
}
$file = file('../db/db.txt');
$i = $_GET['id'];
$aboutUsers = explode('::', $file[$i], 7);

?>

