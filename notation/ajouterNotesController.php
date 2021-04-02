<?php

/*include_once('../connect.php');
 // creer  
  include_once('../fonction.php');
  
// appel de la fonction
  $noteArray = selectNoteBy($_POST['id']);
  echo $_POST['id'];
 //var_dump( $noteArray);
  if (!empty($noteArray)){
    
  $res = http_build_query($noteArray);
    // ? -> $_GET[]= $usersArray s
     header('location:noteIndexVueProf.php?'.$res);
  }else {
    echo '<script> alert("votre table est vide");  window.location.href="noteIndexVueProf.php";</script>';

  }*/
  include_once("../connect.php");
  include_once("../fonction.php");
  if(isset($_POST['user_id'])&&isset($_POST['epreuve_id']) && isset($_POST['note']))
  {

    $lastId =  insertNote($_POST['user_id'],$_POST['epreuve_id'], $_POST['note']);

    if(!empty($lastId)){

      echo ' <script> alert("les données sont bien enregistrées") ; window.location.href ="../homeVue.php" ;</script>';
    }else {

      echo ' <script> alert("erreur") ; </script>';
    }


}

// phai sua lai het cai nay


  ?>