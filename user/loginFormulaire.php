<?php include_once('../entete.php') ?>
<?php

if(isset($_GET['erreur']))
{
    echo $_GET['erreur'] ;

}

?>
<br>
<br>
<br>
<br>
<form action="loginController.php" method ="post">

  <label for="fname">E mail:</label><br>
  <input type="email" id="email" name="email" required><br>
  <label for="lname">Mot de passe:</label><br>
  <input type="password" id="mdp" name="mdp" required><br><br>
  <input type="submit" value="Se connecter">
</form> 

</body>
</html>