<?php include_once('../entete.php'); ?>
<br>
<br>
<br>
<br>
<table border = '2'>
  <tr>
  <th>Id</th>
  <th>Libelle</th>
    <th>Coefficient</th>
    <th>Action</th>
  </tr>
 <?php

if( !empty($_GET))
{
      foreach($_GET as $cle )

      {   echo '<tr>';
          echo ' <td>'.$cle['id'].'</td>';
          echo ' <td>'.$cle['libelleMat'].'</td>';
          echo ' <td>'.$cle['coeffMat'].'</td>';

          // $_GET['id'] = $cle['id']
          echo ' <td> <a href="matiereDeleteController.php?id='.$cle['id'].'"> Sup </a></td>';
          echo '</tr>';

      }
    }else {   echo " votre table est vide";}

?>
</table>

</body>
</html>