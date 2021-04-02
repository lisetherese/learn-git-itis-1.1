<?php include_once('../entete.php'); ?>

<?php if(!empty($_GET)){?>
<form action="matiereUpdateController.php" method ="post">

  <input type="number" id="id" name="id" value = "<?php echo $_GET['id'];?>" hidden><br><br>

  <label for="fname">Libelle Mat :</label><br>
  <input type="text" id="libelleMat" name="libelleMat" value = "<?php echo $_GET['libelleMat'];?>"required><br><br>
  
  <label for="fname">Coefficient Mat:</label><br>
  <input type="number" id="coeffMat" name="coeffMat" value = "<?php echo $_GET['coeffMat'];?>"required><br><br>
  
  <input type="submit" value="Modifier">
</form> 
<?php } ?>

</body>
</html>