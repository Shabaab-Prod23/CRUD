<?php
include "digibase.php";
$uid = strip_tags($_GET['uid']);
$stmt=$connexion->prepare("SELECT * FROM visiteurs WHERE id=$uid");
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
	extract($row);
	?>
  <style>
   .update{
        background: orange;
       padding: 6px;
       color: white; 
       text-decoration: none;
       border: none;   
    }
    </style>
    	<meta charset="utf-8">
      <form method="POST" action="updateprocess.php">
      <input type="" value="<?php echo $id; ?>" name="id" placeholder="id" required><br><br>
  <input type="text" value="<?php echo $nom; ?>" name="nom" placeholder="Nom" required><br><br>		
  <input type="text" value="<?php echo $prenom; ?>" name="prenom" placeholder="Prénom" required><br><br>
  <input type="email" value="<?php echo $email; ?>" name="email" placeholder="Email" required><br><br>		
  <textarea type="textarea" value="<?php echo $commentaires; ?>" name="commentaires" placeholder="Rédigez vos Message"></textarea>	
  <input class="update" type="submit" name="submit" value="Update Now">
  </form>
	<?php
?>