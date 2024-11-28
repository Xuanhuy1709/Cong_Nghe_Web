<?php 
session_start();
$index = $_GET['index'];
unset($_SESSION['flowers'][$index]);
$_SESSION['flowers'] = array_values($_SESSION['flowers']); 
header('Location: admin.php');
?>