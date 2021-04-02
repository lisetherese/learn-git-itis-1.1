<?php
include_once('../connect.php');
 // creer  
  $requete = "SELECT `id`, `nom`, `prenom`, `email`, `role`, adresse_id FROM `user` ";
 
 
  $result = $connect->query($requete);
 
  $usersArray =  $result->fetchAll(PDO::FETCH_ASSOC);
 
 // var_dump( $usersArray);
  if (!empty($usersArray)){
    
  $res = http_build_query($usersArray);
    // ? -> $_GET[]= $usersArray s
     header('location:userIndexVue.php?'.$res);
  }else {
    echo '<script> alert("votre table est vide");  window.location.href="userIndexVue.php";</script>';

  }




  ?>