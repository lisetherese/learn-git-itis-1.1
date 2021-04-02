<?php include_once('../entete.php'); ?>
<br>
<br>
<br>
<br>


<form action="adresseInsertController.php" method ="post">


  <label for="fname">Numéro:</label><br>
  <input type="text" id="num" name="numRue" required><br>

  <label for="fname">Adresse :</label><br>
  <input type="text" id="nomRue" name="nomRue" required><br>

  <label for="fname">Ville :</label><br>
  <input type="text" id="ville" name="ville" required><br>

  <label for="fname">Code Postal:</label><br>
  <input type="text" id="cp" name="cp" required><br>

  

  <input type="submit" value="Ajouter">
</form> 




</body>
</html>