
<!DOCTYPE html>
<html>
<body>
<?php include_once('../entete.php'); ?>
<br>
<br>
<br>
<br>
<table border = '2' style='border-collapse:collapse;'>
  <tr>
  <th>Id</th>
  <th>Nom</th>
  <th>Prenom</th>
  <th>Classe</th>
  <th>Libelle Mat</th>
  <th>Note</th>
  <?php 
  if ($_SESSION['user']['role']=='ROLE_PROF'){
    echo '<th>Action</th>';
  }elseif($_SESSION['user']['role']=='ROLE_ADMIN'){
    echo '<th>Prof Id</th>';
    echo '<th>Action</th>';
  }
  ?>
  </tr>
 <?php
if( !empty($_GET))
{
      foreach($_GET as $cle )

      {   echo '<tr>';
          echo ' <td>'.$cle['id'].'</td>';
          echo ' <td>'.$cle['nom'].'</td>';
          echo ' <td>'.$cle['prenom'].'</td>';
          echo ' <td>'.$cle['nomClasse'].'</td>';
          echo ' <td>'.$cle['libelleMat'].'</td>';
          echo ' <td>'.$cle['note'].'</td>';
  if ($_SESSION['user']['role']=='ROLE_PROF'){
        if ($cle['prof_id'] == $_SESSION['user']['id']){
          $res = http_build_query($cle); 
     
          echo '<td> <a href="noteDeleteController.php?id='.$cle['id'].'"> Sup </a>
          <a href="updateNoteFormulaire.php?'.$res.'"> Modifier </a></td>';
          echo '</tr>';}else{echo ' <td>No Action</td>';}

      }
      elseif ($_SESSION['user']['role']=='ROLE_ADMIN'){
        echo ' <td>'.$cle['prof_id'].'</td>';
        $res = http_build_query($cle); 
     
          echo '<td> <a href="noteDeleteController.php?id='.$cle['id'].'"> Sup </a>
          <a href="updateNoteFormulaire.php?'.$res.'"> Modifier </a></td>';
          echo '</tr>';
      } 
    }}
    else {   echo " votre table est vide";}
?>
</table>
</body>
</html>