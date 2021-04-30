<?php
include "digibase.php";
$nom = strip_tags($_POST['nom']);
$prenom = strip_tags($_POST['prenom']);
$email = strip_tags($_POST['email']);
$commentaires = strip_tags($_POST['commentaires']);
$stmt=$connexion->prepare("INSERT INTO `visiteurs` (`id`, `nom`, `prenom`, `email`, `commentaires`) VALUES (NULL, '$nom', '$prenom', '$email', '$commentaires')");
$stmt->execute();
header('Location:index.php');
?>