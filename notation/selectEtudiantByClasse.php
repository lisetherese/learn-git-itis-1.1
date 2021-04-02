<?php
include_once('../connect.php');
 // creer  
  include_once('../fonction.php');
  session_start();
// appel de la fonction

if (isset($_GET['id']))
{
  $userArray = selectEtudiantByclasse($_GET['id']);
 // var_dump( $usersArray);
  if (!empty($userArray)){
    
    echo json_encode($userArray,true);
  
    
  }else {
    echo 'table vide';

  }

}

?>