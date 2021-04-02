<?php include_once('../entete.php'); ?>
<br>
<br>
<br>
<br>

<?php if (!empty($_GET)) { ?>
<form action="updateUserController.php" method ="post">
  
  <input type="hidden" id="id" name="id" value="<?php echo $_GET['id'];?>">
   
  <label for="fname">Nom:</label><br>
  <input type="text" id="nom" name="nom"  value="<?php echo $_GET['nom'];?>" required><br>

  <label for="fname">Prénom :</label><br>
  <input type="text" id="prenom" name="prenom"  value="<?php echo $_GET['prenom'];?>" required><br>
  <label for="fname">E mail:</label><br>
  <input type="email" id="email" name="email"   value="<?php echo $_GET['email'];?>"  required><br>

  <input type="submit" value="Modifier">
</form> 

<?php } ?>


</body>
</html>