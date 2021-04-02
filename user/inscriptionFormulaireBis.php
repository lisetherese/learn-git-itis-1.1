<?php include_once('../entete.php');
     include_once('../fonction.php');

?>
<br>
<br>
<br>
<br>


<form action="inscriptionInsertControllerbis.php" method ="post">


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

  <label for="fadresse">Adresse :</label><br> 
  <select name="adresse_id" id="adresse">
    <?php $adresses = selectAdresse() ;
    foreach($adresses  as $cle){
           echo '<option value="'.$cle['id'].'">'.$cle['numRue'].' '.$cle['nomRue'].' '.$cle['ville']. ' '.$cle['cp'].'</option>';
    }
    ?>
  </select>


  <br>
  
  <label for="fname">E mail:</label><br>
  <input type="email" id="email" name="email" required><br>

  <label for="lname">Mot de passe:</label><br>
  <input type="password" id="mdp" name="mdp" required><br><br>

  <input type="submit" value="S'inscrire">
</form> 




</body>
</html>