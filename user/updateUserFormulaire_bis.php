<?php include_once('../entete.php'); ?>
<br>
<br>
<br>
<br>


<form action="inscriptionInsertController.php" method ="post">


  <label for="fname">Nom:</label><br>
  <input type="text" id="nom" name="nom" required><br>

  <label for="fname">Prénom :</label><br>
  <input type="text" id="prenom" name="prenom" required><br>
  
  <br>
  <label for="fname">Adresse :</label><br> 

  <label for="fname">Numéro:</label><br>
  <input type="text" id="num" name="numRue" required><br>

  <label for="fname">Rue :</label><br>
  <input type="text" id="nomRue" name="nomRue" required><br>

  <label for="fname">Ville :</label><br>
  <input type="text" id="ville" name="ville" required><br>

  <label for="fname">Code Postal:</label><br>
  <input type="text" id="cp" name="cp" required><br>
  
  <label for="fname">E mail:</label><br>
  <input type="email" id="email" name="email" required><br>

  <input type="submit" value="S'inscrire">
</form> 




</body>
</html>