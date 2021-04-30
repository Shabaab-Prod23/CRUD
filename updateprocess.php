<?php
include "digibase.php";
$id = strip_tags($_POST['id']);
$nom = strip_tags($_POST['nom']);
$prenom = strip_tags($_POST['prenom']);
$email = strip_tags($_POST['email']);
$commentaires = strip_tags($_POST['commentaires']);
$stmt=$connexion->prepare("UPDATE `digibase`.`visiteurs` SET  `nom` = '$nom', `prenom` = '$prenom', `email` = '$email', `commentaires` = '$commentaires' WHERE `visiteurs`.`id` = $id;");
$stmt->execute();
header('Location:index.php');
?>