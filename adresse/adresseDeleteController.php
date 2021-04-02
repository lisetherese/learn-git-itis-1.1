<?php

  include_once('../connect.php');

  //
  if(isset($_GET['id'])){

        $requete = "DELETE FROM `adresse` WHERE id=:id";

        $statm = $connect->prepare($requete);

        $valeur = array(':id'=>$_GET['id']);

        $nbligne = $statm->execute($valeur);

       if($nbligne){
            
        header('location:adresseSelectController.php');
        exit ;
       }else {

               echo ' <script> alert("votre table est vide") ; window.location.href ="adresseSelectController.php" ;</script>';
               
       }


  }else{ echo "erreur GET";}
  ?>