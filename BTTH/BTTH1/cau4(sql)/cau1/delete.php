<?php
include 'flowers.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM flowers WHERE id = ?");
$stmt->execute([$id]);
header('Location: admin.php');
?>
