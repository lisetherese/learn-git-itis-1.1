<?php

  include_once('../connect.php');

  //
  if(isset($_GET['id'])){

        $requete = "DELETE FROM `user` WHERE id=:id";

        $statm = $connect->prepare($requete);

        $valeur = array(':id'=>$_GET['id']);

        $nbligne = $statm->execute($valeur);

       if($nbligne==1){
            
        header('location:userSelectController.php');
        exit ;
       }else {

               echo ' <script> alert("votre table est vide") ; window.location.href ="userSelectController.php" ;</script>';
               
       }


  }else{ echo "erreur GET";}
  ?>