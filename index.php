<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
  <form method="POST" action="add.php">
  <input type="text" name="nom" placeholder="Nom" required><br><br>		
  <input type="text" name="prenom" placeholder="Prénom" required><br><br>
  <input type="email" name="email" placeholder="Email" required><br><br>		
  <textarea type="textarea"  name="commentaires" placeholder="Rédigez vos Message"></textarea>	
  <input class="send" type="submit" name="submit" value="Envoyé">
  </form>  
<?php
include "digibase.php";
$stmt=$connexion->prepare("SELECT * FROM visiteurs");
$stmt->execute();
?>
<div class="container">
<table>
    <thead>
        <th>ID</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>EMAIL</th>
        <th>COMMENTAIRE</th>
        <th>Delete</th>
        <th>Update</th>
    </thead>
    <style>
    .send{
       background: green;
       padding: 10px;
       color: white;
       border: none; 
    }
    .delete{
        background: red;
       padding: 6px;
       color: white; 
       text-decoration: none;   
    }
    .update{
        background: orange;
       padding: 6px;
       color: white; 
       text-decoration: none;   
    }
    table{
        line-height: 30px;
    }
    </style>
<?php
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	extract($row);
	?>
	<tr>
	<td><?php echo $id; ?></td>
	<td><?php echo $nom; ?></td>
	<td><?php echo $prenom; ?></td>
	<td><?php echo $email; ?></td>
	<td><?php echo $commentaires; ?></td>
    <td><a class="delete" href="delete.php?did=<?php echo $id; ?>">Delete</a></td>&nbsp;
    <td><a class="update" href="update.php?uid=<?php echo $id; ?>">Update</a></td>
    </tr>
	<?php
}
?>
</table>
</div>
</body>
</html>