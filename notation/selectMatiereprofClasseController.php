<?php
include_once('../connect.php');
// creer  
  include_once('../fonction.php');
  session_start();
// appel de la fonction
if (isset($_GET['id_classe']))
{  

  // la valeur 15 on la remplace par $_SESSION['user']['id']
  $matiereArray = selectProfMatiereClasse($_SESSION['user']['id'], $_GET['id_classe']);
 // var_dump( $usersArray);
  if (!empty($matiereArray)){
  //  var_dump($matiereArray);
    
    echo json_encode($matiereArray,true);
    
  }else {
    echo 'table vide';

  }

}
?>