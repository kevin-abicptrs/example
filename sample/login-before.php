<?php
    session_start();
 
    if(!isset($_SESSION["userId"])) { header("Location: ./login.php"); }
    else { $id = $_SESSION["userId"]; }            
?>