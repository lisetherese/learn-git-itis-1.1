<?php include_once('../entete.php'); ?>
<br>
<br>
<br>
<br>
<table border = '2'>
  <tr>
  <th>Id</th>
  <th>Numéro</th>
    <th>Adresse</th>
    <th>Ville</th>
    <th>Code postal</th>
    <th>Action</th>
  </tr>
 <?php

if( !empty($_GET))
{
      foreach($_GET as $cle )

      {   echo '<tr>';
          echo ' <td>'.$cle['id'].'</td>';
          echo ' <td>'.$cle['numRue'].'</td>';
          echo ' <td>'.$cle['nomRue'].'</td>';
          echo ' <td>'.$cle['ville'].'</td>';
          echo ' <td>'.$cle['cp'].'</td>';

          // $_GET['id'] = $cle['id']
          echo ' <td> <a href="adresseDeleteController.php?id='.$cle['id'].'"> Sup </a></td>';
          echo '</tr>';

      }
    }else {   echo " votre table est vide";}

?>
</table>

</body>
</html>