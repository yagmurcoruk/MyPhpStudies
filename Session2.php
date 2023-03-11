<?php 
ob_start(); 
session_start();
echo "<br>";
echo $_SESSION['city'];
unset($_SESSION['person']);

?>