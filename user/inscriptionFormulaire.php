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
  <label for="fname">Role :</label><br>
  <select name="role" id="role">
    <option value="ROLE_ADMIN">Administrateur</option>
    <option value="ROLE_ETUDIANT">Etudiant</option>
    <option value="ROLE_PROF">Professeur</option>
  </select>
  <br>
  <label for="fname">Date de naissance :</label><br>
  <input type="date" id="date" name="dateNais" required><br>

  <label for="fname">Adresse :</label><br> 

  <label for="fname">Numéro:</label><br>
  <input type="number" id="numRue" name="numRue" required><br>

  <label for="fname">Rue :</label><br>
  <input type="text" id="nomRue" name="nomRue" required><br>

  <label for="fname">Ville :</label><br>
  <input type="text" id="ville" name="ville" required><br>

  <label for="fname">Code Postal:</label><br>
  <input type="text" id="cp" name="cp" required><br>
  
  <label for="fname">E mail:</label><br>
  <input type="email" id="email" name="email" required><br>

  <label for="lname">Mot de passe:</label><br>
  <input type="password" id="mdp" name="mdp" required><br><br>

  <input type="submit" value="S'inscrire">
</form> 




</body>
</html>