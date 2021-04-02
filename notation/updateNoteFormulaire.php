<?php include_once('../entete.php'); ?>

<?php if(!empty($_GET)){?>
<form action="noteUpdateController.php" method ="post">

  <input type="number" id="id" name="id" value = "<?php echo $_GET['id'];?>" hidden><br><br>

  <label for="fname">Nom :</label><br>
  <input type="text" id="nom" name="nom" value = "<?php echo $_GET['nom'];?>"required><br><br>
  
  <label for="fname">Prenom :</label><br>
  <input type="text" id="prenom" name="prenom" value = "<?php echo $_GET['prenom'];?>"required><br><br>

  <label for="fname">Libelle Mat :</label><br>
  <input type="text" id="libelleMat" name="libelleMat" value = "<?php echo $_GET['libelleMat'];?>"required><br><br>

  <label for="fname">Nom :</label><br>
  <input type="number" id="note" name="note" value = "<?php echo $_GET['note'];?>"required><br><br>
  
  <input type="submit" value="Modifier">
</form> 
<?php } ?>

</body>
</html>