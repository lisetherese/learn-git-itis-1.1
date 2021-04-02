<?php
include_once('../connect.php');
 // creer  
  include_once('../fonction.php');
// appel de la fonction
  $adresseArray = selectAdresse();
 // var_dump( $usersArray);
  if (!empty($adresseArray)){
    
  $res = http_build_query($adresseArray);
    // ? -> $_GET[]= $usersArray s
     header('location:adresseIndexVue.php?'.$res);
  }else {
    echo '<script> alert("votre table est vide");  window.location.href="adresseIndexVue.php";</script>';

  }




  ?>