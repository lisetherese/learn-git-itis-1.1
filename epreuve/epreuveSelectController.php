<?php
include_once('../connect.php');
 // creer  
  include_once('../fonction.php');
// appel de la fonction
  $epreuveArray = selectEpreuve();
 // var_dump( $usersArray);
  if (!empty($epreuveArray)){
    
  $res = http_build_query($epreuveArray);
    // ? -> $_GET[]= $usersArray s
    header('location:epreuveIndexVue.php?'.$res);
  }else {
    echo '<script> alert("votre table est vide");  window.location.href="epreuveIndexVue.php";</script>';

  }




  ?>