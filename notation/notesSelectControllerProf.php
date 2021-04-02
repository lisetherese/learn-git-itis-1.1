<?php
session_start();
include_once('../connect.php');
 // creer  
  include_once('../fonction.php');
// appel de la fonction
  $notesArray = selectNotes();
 // var_dump( $usersArray);
  if (!empty($notesArray)){
    
     
  $res = http_build_query($notesArray);
    // ? -> $_GET[]= $res
  header('location:noteIndexVueProf.php?'.$res);



  }else {
    echo '<script> alert("votre table est vide");  window.location.href="noteIndexVueProf.php";</script>';

  }




  ?>