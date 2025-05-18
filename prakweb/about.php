<?php
session_start();
$username = "";
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}else{
    header('Location:index.php');
}

?>
