<?php
include "digibase.php";
$did = strip_tags($_GET['did']);
$stmt=$connexion->prepare("DELETE FROM visiteurs WHERE id= $did");
$stmt->execute();
header('Location:index.php');
?>