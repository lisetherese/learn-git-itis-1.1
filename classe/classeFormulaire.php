<?php include_once('../entete.php'); ?>
<br>
<br>
<br>
<br>


<form action="../matiere/matiereInsertController.php" method ="post">


  <label for="fname">Libelle :</label><br>
  <input type="text" id="libelle" name="libelleMat" required><br>

  <label for="fname">Coefficient :</label><br>
  <input type="number" id="coeffMat" name="coeffMat" required><br>


  <input type="submit" value="Ajouter">
</form> 




</body>
</html>