<?php include_once('../entete.php'); ?>
<br>
<br>
<br>
<br>
<table border = '2'>
  <tr>
  <th>Id</th>
  <th>Nom</th>
    <th>Prénom</th>
    <th>E-mail</th>
    <th>Rôle</th>
    <th>Action</th>
  </tr>
 <?php

if( !empty($_GET))
{    
      foreach($_GET as $cle )

      {   echo '<tr>';
          echo ' <td>'.$cle['id'].'</td>';
          echo ' <td>'.$cle['nom'].'</td>';
          echo ' <td>'.$cle['prenom'].'</td>';
          echo ' <td>'.$cle['email'].'</td>';
          echo ' <td>'.$cle['role'].'</td>';
          $res = http_build_query($cle);
          // $_GET['id'] = $cle['id']
          echo ' <td> <a href="userDeleteController.php?id='.$cle['id'].'"> Sup </a>
          <a href="updateUserFormulaire.php?'.$res.'"> Modifier </a> </td>';
          echo '</tr>';

      }
    }else {   echo " votre table est vide";}

?>
</table>

</body>
</html>