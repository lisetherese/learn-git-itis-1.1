<?php
include_once('../connect.php');
 // creer  
  include_once('../fonction.php');
// appel de la fonction
  $profClasseArray = selectprofClasse();
 // var_dump( $usersArray);
  if (!empty($profClasseArray)){
    
  $res = http_build_query($profClasseArray);
    // ? -> $_GET[]= $usersArray s
     header('location:matiereIndexVue.php?'.$res);
  }else {
    echo '<script> alert("votre table est vide");  window.location.href="matiereIndexVue.php";</script>';

  }




  ?>