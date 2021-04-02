<?php
include_once('../connect.php');
 // creer  
  include_once('../fonction.php');
  session_start();
// appel de la fonction

if (isset($_GET['id_matiere']))
{
  $epreuveArray = selectProfMatiereEpreuve($_SESSION['user']['id'],$_GET['id_matiere']);
 //var_dump( $epreuveArray);
  if (!empty($epreuveArray)){
    
    echo json_encode($epreuveArray,true);
  
    
  }else {
    echo 'table vide';

  }

}

?>