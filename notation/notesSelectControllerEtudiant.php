<?php
session_start();
include_once('../connect.php');
 // creer  
  include_once('../fonction.php');
// appel de la fonction
  $noteArray = selectNoteBy($_SESSION['user']['id']);
 // var_dump( $usersArray);
  if (!empty($noteArray)){
    
     
  $res = http_build_query($noteArray);
    // ? -> $_GET[]= $res
  header('location:noteIndexVueEtudiant.php?'.$res);



  }else {
    echo '<script> alert("votre table est vide");  window.location.href="noteIndexVueEtudiant.php";</script>';

  }




  ?>